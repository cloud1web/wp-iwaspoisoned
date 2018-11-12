<?php
// Add custom Theme Functions here
if ( ! function_exists( 'post_pagination' ) ) :
   function post_pagination() {
     global $wp_query;
     $pager = 999999999; // need an unlikely integer

        echo paginate_links( array(
             'base' => str_replace( $pager, '%#%', esc_url( get_pagenum_link( $pager ) ) ),
             'format' => '?paged=%#%',
             'current' => max( 1, get_query_var('paged') ),
             'total' => $wp_query->max_num_pages
        ) );
   }  
endif;

add_filter( 'comment_post_redirect', 'redirect_to_home' );
  
function redirect_to_home( $location ) {
    // change the slug below with your own page's slug
    return home_url();
}

// create post start here
add_action('wp_ajax_post_form', 'post_form');
add_action('wp_ajax_nopriv_post_form', 'post_form');
function post_form()
{	
  $loanpurpose = $_POST['loanpurpose'];
  $email = $_POST['email'];
  $comment = $_POST['comment']; 
  $rating = $_POST['rating'];
  $longitude = $_POST['longitude'];
  $latitude = $_POST['latitude'];
  $phone_number = $_POST['phone_number'];
  $symptoms = $_POST['symptoms'];
  
  $country = $_POST['country'];
  $state = $_POST['state'];
  $city = $_POST['city'];

  $to = 'sourabh.jain@cloud1.me';

  $subject = 'test-mail';

  $body = '<div>
            <h3>Name :'.$email.'</h3><br>   
            </div>';

  // Create post object
  $post = array(
  'post_title'    => $loanpurpose,
  'post_content'  => $comment,
  'email'  => $email,
  'post_type'     =>'post',
  'post_status'   => 'pending',
  'post_imported_id' => 3,
  'post_slug' => $loanpurpose,
  'phone_number' =>$phone_number,
  'post_author'   => 1
  );
  
 $headers = array('Content-Type: text/html; charset=UTF-8');
               
 wp_mail( $to, $subject, $body, $headers );
  
 $post_id = wp_insert_post( $post);

  if ($post_id) {
  add_post_meta($post_id, 'post_title', $loanpurpose, true);
  add_post_meta($post_id, 'location', $loanpurpose, true);
  add_post_meta($post_id, 'post_content', $comment, true);
  add_post_meta($post_id, 'email', $email, true);
  add_post_meta($post_id, 'phone_number', $phone_number, true);
  add_post_meta($post_id, 'business_rate', $rating, true);
  add_post_meta($post_id, 'latitude', $latitude, true);
  add_post_meta($post_id, 'longitude', $longitude, true);
  add_post_meta($post_id, 'symptoms', $symptoms, true);
  
if(!empty($country))
{
	$term = array();
	$existent_term = term_exists( $country, 'country' );
	if($existent_term){
		$term=$existent_term;
	}else{
		//intert the term if it doesn't exsit
        $term = wp_insert_term(
            $country, // the term 
            'country' // the taxonomy 
			);
        if( !is_wp_error($term ) && isset($term['term_id']) ) {
             $term_id = $term['term_id'];   }  }
	wp_set_post_terms($post_id,$term['term_id'],'country');   
}

if(!empty($state))
{	
	$term = array();	
	$existent_term = term_exists( $state, 'state' );
	if($existent_term){
		$term=$existent_term;
	}else{
		//intert the term if it doesn't exsit
        $term = wp_insert_term(
            $state, // the term 
            'state' // the taxonomy 
			);
        if( !is_wp_error($term ) && isset($term['term_id']) ) {
             $term_id = $term['term_id'];   }  }
	wp_set_post_terms($post_id,$term['term_id'],'state');   
}
if(!empty($city))
{	
	$term = array();
	$existent_term = term_exists( $city, 'city' );
	if($existent_term){
		$term=$existent_term;
	}else{
		//intert the term if it doesn't exsit
        $term = wp_insert_term(
            $city, // the term 
            'city' // the taxonomy 
			);
        if( !is_wp_error($term ) && isset($term['term_id']) ) {
             $term_id = $term['term_id'];   }  }
	wp_set_post_terms($post_id,$term['term_id'],'city');   
}	
	echo $post_id; die();
	}
}

// create post end here

// update post ajax functionality start
add_action('wp_ajax_update_post', 'update_post');

function update_post()
{
  $phone_number = $_POST['phone_number'];
  $post_id = $_POST['post_id'];
  $prev_value = "";

  $post = array(
            'ID' => esc_sql($post_id),
            'phone_number' => wp_kses_post($_POST['phone_number'])  
        ); 
        // $result1 = wp_update_post($post, true);
        update_post_meta( $post_id, 'phone_number', $phone_number, $prev_value );
        $result2 = update_post_meta($post,true);
}

// update post ajax functionality end

// file uploading
add_action( 'wp_ajax_imageuploading', 'imageuploading_update' );
add_action( 'wp_ajax_nopriv_imageuploading', 'imageuploading_update' );
function imageuploading_update() {
if ( $_FILES ) { 
require_once(ABSPATH . 'wp-admin' . '/includes/image.php');
require_once(ABSPATH . 'wp-admin' . '/includes/file.php');
require_once(ABSPATH . 'wp-admin' . '/includes/media.php');
$file_handler = 'updoc';
$pid = $_POST['pid'];
$integerIDs = array_map('intval', explode(',', $pid));
$p_id = $integerIDs[0];

$attach_id = media_handle_upload($file_handler,$p_id);
if (is_numeric($attach_id)) {
    update_post_meta($p_id, 'photo', $attach_id);
}
// echo $p_id;die;
}

echo 'You are done!!';
wp_die();
}

// file uploading end

 

function custom_admin_js()
{
   echo '<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places&key=AIzaSyBf0lnEfFEYZaqa8Ht1PDWveiK8_gNyQzU&sensor=false"></script>';
  
  echo "<script>console.log('hello');
   var input = document.getElementById('pods-form-ui-pods-meta-location'); 
   console.log(input);
  autocomplete=new google.maps.places.Autocomplete(input);
  console.log('hello user');
  console.log(autocomplete);
    autocomplete.addListener('place_changed', fillInAddress);
  function fillInAddress()
  {
    var geocoder = new google.maps.Geocoder();
    var address = document.getElementById('pods-form-ui-pods-meta-location').value;
    geocoder.geocode( { 'address': address}, function(results, status) 
    { 
      if (status == google.maps.GeocoderStatus.OK)  
      { 
        document.getElementById('pods-form-ui-pods-meta-latitude').value = results[0].geometry.location.lat();
        document.getElementById('pods-form-ui-pods-meta-longitude').value = results[0].geometry.location.lng();
      } 
    }); 
  }
  
  </script>";
} 

add_action('admin_footer', 'custom_admin_js');





