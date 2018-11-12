<?php
/*
Template name: HOME
*/
get_header();
?>

<?php do_action( 'flatsome_before_page' ); ?>

<div class="page-wrapper page-right-sidebar">
	<div class="row">

		<div id="content" class="large-8 left col col-divided" role="main">
			<div class="page-inner">
				<div class="top-level-maplist">
					<i class="fa fa-map-o" id='map_view'> Map</i>&nbsp; | &nbsp; <i class="fa fa-list"id='list_view'> List</i>
				</div>
				<div id='div_list'>
				<?php
				 $paged = (get_query_var('page')) ? get_query_var('page') : 1;
		
				query_posts(array(
	                               'post_type' => 'post', 
								   'posts_per_page' => -1 // limit of posts
	                           ));
							  
				
				$post_data = array(); 
	            if ( have_posts() ) :  while ( have_posts() ) : the_post(); 
				$post_id = get_the_ID();
							  
				$latitude = get_post_meta($post_id,'latitude');
				if(!empty($latitude['0']))
				{
					$post_data['latitude'][] = $latitude['0'];
						
					$longitude = get_post_meta($post_id,'longitude');
					$post_data['longitude'][] = $longitude['0'];
									
					$photo = get_post_meta($post_id,'photo');
					$post_data['photo'][] = $photo['0'];
									
					$location = get_post_meta($post_id,'location');
					$post_data['location'][] = $location['0'];
									
					$symptoms_data = get_post_meta($post_id,'symptoms');
					$symptoms = "";
					
					for($i=0; $i < count($symptoms_data); $i++)
					{
						if($i==0){ $symptoms .= $symptoms_data[$i]; }
						else{ $symptoms .= ", ".$symptoms_data[$i];}
					
					}
					
					$post_data['symptoms'][] = $symptoms;
								
					$email = get_post_meta($post_id,'email');
					$post_data['email'][] = $email['0'];
					$post_data['link'][] = get_post_permalink();
					$post_data['title'][] = get_the_title();
					$post_data['date'][] = get_the_date();
					$str = preg_replace("/[\r\n]*/","",get_the_content());
					$post_data['description'][] = $str;
					$phone_number = get_post_meta($post_id,'phone_number');
					$post_data['phone_number'][] = $phone_number['0'];
				}		
								
				endwhile;
				$post_data = json_encode($post_data);
	            else : 
	                      // no posts found message goes here...
	            endif;
			?> 
			
				<!-- pagination -->
				<?php 
					query_posts(array(
		                               'post_type' => 'post', // You can add a custom post type if you like
		                               'paged' => $paged,
		                               'posts_per_page' => 3 // limit of posts
		                           ));?> 
							   
	                           <?php if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>
	                           							   
                                <?php get_template_part( 'content', 'search' ); ?>
	                           	      <?php $post_id = get_the_ID(); 
	                           	      ?>
	                           	      <?php $photo = get_post_meta($post_id,'photo'); 
	                           	      $location = get_post_meta($post_id,'location');
	                           	      $symptoms = get_post_meta($post_id,'symptoms');
	                           	      $email = get_post_meta($post_id,'email');
	                           	      $phone_number = get_post_meta($post_id,'phone_number');
	                           	      $business_rate = get_post_meta($post_id,'business_rate');
	                           	      // print_r($business_rate);
	                           	?>
                    <div>
	                           	<div class="coffee-month">
	                           		<!-- Add a list element for the post -->
	                           		<h4 class="coffee-heading same-top-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><span class="text-right" style="float: right;">
		                           				<div style="" id="social-media"><?php echo do_shortcode( '[addtoany]
' ); ?>
		                           			</div>
		                           		</span>
	                           		</h4>
	                           		<p><?php echo get_the_date(); ?></p>

	                           	</div>
	                           	<div class="coffee-para same-color-start">
	                           		<p class="sub_heading_main"><span class="sub_heading">Location: </span><?php if(!empty($location[0])){ echo $location[0]; } ?></p>
	                           		
	                           		<p class="sub_heading_main"><span class="sub_heading">Report Type: </span>Food Poisoning</p>
	                           		<p class="sub_heading_main"><span class="sub_heading">Symptoms: </span><?php foreach ($symptoms as $key => $value) {
	                           	      if(!empty($value)){ echo ' '.$value; }
	                           	      } ?></p>
	                           		<p class="sub_heading_main"><span class="sub_heading">Details: </span><?php the_content(); ?></p>
	                           		<p><?php if(!empty($photo[0]['guid'])){ ?><img src="<?php echo $photo[0]['guid'] ?>" width="40%" height="200px;"><?php } ?></p>
	                           	</div>
	                           	<div class="comment-right text-right ">
	                           		<a href="javascript:void(0)" class="demo-toggle">Comments <i class="fa fa-angle-double-right"></i></a>
	                           	</div>
	                           	<span class="comment-toggle" style="display: none;">
	                           		<?php comment_form($post_id); ?>
	                           	</span>
						</div>
	                           <?php endwhile; ?>
	                            <?php 
	                            post_pagination(); 
	                           ?> 

							   </div>
							   <div id='div_map'>
								  <div id="post_map" style='width:100%;height:500px;'></div>
								</div> 
	                           <?php
	                       else : 
	                      // no posts found message goes here...
	                       endif; 
	                      wp_reset_query(); 
	                       ?> 
	                   </div><!-- .page-inner -->
	               </div><!-- .#content large-9 left -->

	               <div class="large-4 col">
	               	<?php get_sidebar(); ?>
	               </div><!-- .sidebar -->

	           </div><!-- .row -->
	       </div><!-- .page-right-sidebar container -->
 

	       <?php do_action( 'flatsome_after_page' ); ?>

	       <?php get_footer(); ?>  
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
    </script>
		   
		 
<script>
	var post_data = '<?php echo $post_data; ?>';
	console.log(post_data);
	post_data = JSON.parse(post_data);
	console.log(post_data);

	locations = new Array();	

	
	for(var i=0;i<post_data['latitude'].length;i++)
	{
		var position = new Object();
		position.lat = parseFloat(post_data['latitude'][i]);
		position.lng = parseFloat(post_data['longitude'][i]);		
		locations.push(position);
	}
	var latlng = [];
	for(var j=0;j<locations.length;j++)
	{
		latlng[j] =   new google.maps.LatLng(locations[j].lat, locations[j].lng);
	}
	console.log(location);
	console.log(latlng);
initMap();	
		
    function initMap() {
        var map = new google.maps.Map(document.getElementById('post_map'), {
          zoom: 1, 
          center: {lat: position.lat, lng: position.lng}
        });

		var infoWin = new google.maps.InfoWindow();
        console.log(map);
        var markers = locations.map(function(location, i) {
			var marker = new google.maps.Marker({
				position: location
			  });
			  var content = "<div class='map-div'><h2 class='map-heading'><a href='"+ post_data['link'][i] +"'>"+ post_data['title'][i] +"<a></h2><br/><lable>"+ post_data['date'][i] +"</lable><br/>";
			  if(post_data['symptoms'][i] != ''){
			  content += "<b class='map-symptoms'>Symptoms:</b><br/>"+ post_data['symptoms'][i] +"</lable><br/>";
			  }
			  
			  content += "<b class='map-content'>Details:</b><br/><p>"+ post_data['description'][i] +"</p>";
			  if(post_data['photo'][i] != false)
			  {
				  content += "<br/><img class='map-image' src='"+post_data['photo'][i]['guid']+"'>";
			  }
			  content += "<br/><a class='report-button' href='#' >Report</a></div>";
			  google.maps.event.addListener(marker, 'click', function(evt) {
				infoWin.setContent(content);
				infoWin.open(map, marker);
			  })
			  return marker;
        });
	

        // Add a marker clusterer to manage the markers.
        var markerCluster = new MarkerClusterer(map, markers,
            {
              imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
      }
	  $('#div_map').hide();
	  $('#list_view').addClass("active");
	  $('#list_view').click(function(){
		  $('#div_list').show();
		  $('#div_map').hide();
		  $(this).addClass("active");
		  $('#map_view').removeClass("active");
	  });
	  $('#map_view').click(function(){
		  $('#div_list').hide();
		  $('#div_map').show();
		  $(this).addClass("active");
		  $('#list_view').removeClass("active");
	  });

</script>
<style>
.active{ color:red; }
.report-button{
            background-color:#4a9e7c;
            color: #fff;
            font-weight: 800;
padding: 2px 8px; }
</style>
