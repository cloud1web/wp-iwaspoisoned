<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package flatsome
 */
?>

<div id="secondary" class="widget-area <?php flatsome_sidebar_classes(); ?>" role="complementary">

  <!-- Sidebar Form -->

  <div class="row">
    <div class="col-sm-12">
      <!-- Offset -->
      <div class="form-step-wrap">
 
          <div id="step1box" class="slider-step first-step step" data-next-step="step-mortgage-balance">
            <div class="row tall">

              <div class="col-sm-12 form-questions">
                <div class="row">
                  <div class="col-sm-12">
                    <label>Report it now
                    Protect others and help restaurants.</label>
                    <hr style="border-top:2px solid #fff;">

                    <input id="loanpurpose" name="loanpurpose" tabindex="1" class="form-control" required>
                    <div class="col-sm-12 leaveRating">
                     
                    <span>Rate the business:</span>
                    <div class="star-rating-up">
                      <ul class="rate-area">
                        <input type="radio" id="5-star" name="rating" value="5" /><label for="5-star" title="Amazing">5 stars</label>
                        <input type="radio" id="4-star" name="rating" value="4" /><label for="4-star" title="Good">4 stars</label>
                        <input type="radio" id="3-star"  name="rating" value="3" /><label for="3-star" title="Average">3 stars</label>
                        <input type="radio" id="2-star" name="rating" value="2" /><label for="2-star" title="Not Good">2 stars</label>
                        <input type="radio" id="1-star" name="rating" value="1" /><label for="1-star" title="Bad">1 star</label>
                      </ul>
                      <input class="rating-value" name="rating-value" type="hidden" value="5">
                    </div>      </div>
                  </div>
                </div>
            <div class="row">
                  <div class="col-sm-12">
                   <input type="text" name="symptoms" class="form-control" placeholder="Symptoms"  id="symptoms"></textarea>
                 </div>
               </div>                <div class="row">
                  <div class="col-sm-12">
                   <textarea class="form-control comment" placeholder="Tell your story: Please include when you ate, what you ate, and when the symptoms started. The more details you provide the better." rows="5" id="comment"></textarea>
                 </div>
               </div>
               <div class="row">
                 <div class="col-sm-12 for-left-margin">

                   <div class="row alert-radio custom-alert">

                     <h3>Get Alerts</h3>
                     <input type="radio" name="selectAlert">Get notified if we receive other reports for your case 
                   </div>
                   <div class="row alert-select">

                     <h3>Send My Report To :</h3>
                     <div class="checkbox-inline">
                      <label class="checkbox-inline"><input type="checkbox" value="">Public Health</label>
                    </div>
                    <div class="checkbox-inline">
                      <label class="checkbox-inline"><input type="checkbox" value="">The Buisness</label>
                    </div>
                    <div class="checkbox-inline">
                      <label class="checkbox-inline"><input type="checkbox" value="">Detect Outbreaks</label>
                    </div>              </div>
                  </div>
                </div>
                <!-- /Form Questions -->
              </div>
              <!-- /Row -->
              <div class="row">

                <div class="col-sm-12 for-left-margin">
                  <input type='button' value='Report it Now' tabindex="3" class="btn-next btn-success form-control" id="report_it_now"/>
                </div>

              </div>
            </div>
          </div>
          <!-- Upper Text -->
          <div id="step-mortgage-balance" class="slider-step step" data-next-step="step-home-value" data-back-to="step1box">
            <div class="row">
              <div class="col-sm-12  ">
                <label class="streamline">Get alerts for your case</label>
                <p id="mortgagebalance-error" class="input-error">Provide a contact email</p>
                <input type="email" placeholder="Email" name="user_email" id="user_email" required>              
                
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                
                <p>
                 Without your contact information it's not possible to follow up on your complaint. Please provide your email.
               </p>
               <span class="text-thanks">THANK YOU</span>
               <label><input type="checkbox" id='terms_condition'> I agree to the Terms & Conditions.  </label>
			   <input type='button' value='Complete My Report' tabindex="5" class="btn-next compelete-btn btn-success form-control" id="complete-my-report" />
             </div> 
           </div> 
           <div class="row">
            <div class="col-sm-12 btn-clr">
              <a class="btn-back">Back</a>
            </div>
          </div>
        </div>
        <!-- Mortgage Balance -->
        <div id="step-home-value" class="slider-step step" data-next-step="step-interest-rate" data-back-to="step-mortgage-balance">
          <!-- Home Value -->
          <div class="row">
            <div class="col-sm-12  ">
              <label>PROTECT FRIENDS & FAMILY</label>
              <p id="propertyvalue-error" class="input-error">Provide a contact phone number</p>
              <p class="step-3-pera">Phone No:</p>
              <input type="text" placeholder="Enter Phone Number" id="phone_number">
            </div>
          </div>	
          <div class="row">
            <div class="col-sm-12">

            </div>
          </div>
          <div class="row">
            <div class="col-sm-12 step-3-content">
              <p class="step-3-pera">
               This makes it easier to follow up - especially if there is some urgency e.g. in a public health investigation. 
             </p>
             <span>Thank You</span><i class="fa fa-thumbs-up"></i>      <br>    
           </div>
         </div>

         <div class="row">
          <div class="col-sm-12 btn-clr">
            <button id="next-home-value" type='button' value='Continue' tabindex="7" class="btn-success form-control btn-next1 btn-sm">No Thanks         
            </button>
            <button id="next-home-value1" type='button' value='Continue' tabindex="7" class="btn-success form-control btn-next btn-sm" data-id="">Complete my Report          
            </button>
          </div>
        </div>

      </div>
      <!-- /Home Value -->
      <div id="step-interest-rate" class="slider-step step" data-next-step="step-home-buy-process" data-back-to="step-home-value">
        <!-- Interest Rate -->
        <div class="row">
          <div class="col-sm-12 photo-list">
            <label>Add a Photo</label>
            <label>Recommended</label>
            <p id="mortgagerate-error" class="input-error">We Recommend photos of:</p>
            <ol>
             <li>The receipt</li>
             <li>The product</li>
             <li>The packaging</li>
             <li>*Best* all three in one shot!</li>
           </ol>
           </div>

         </div>
         <div class="row">
          <div class="col-sm-12">

          </div>
        </div>
        
        <div class="row">
          <div class="col-sm-12">
            <span class="text-center">Take a photo or upload file</span>
<!-- skj -->
         
           <button type="button" class="btn btn-secondary btn-sm" disabled>
            <input type="file" name="file_upload" id="file_upload" />
            <input type="hidden" name="pid" id="pid" value="">
          </button>
           <button id="next-interest-rate" type='button' value='Continue' tabindex="9" class="btn-success form-control btn-next1 btn-sm">No Thanks </button>
           <button id="photo_upload" type='submit' name="Submit" value='Continue' tabindex="9" class="btn-success form-control btn-next btn-sm" data-id="">Send My Photo</button>
     

         </div>
       </div>

<!--       <div class="row">
          <div class="col-sm-12">
            <a id="back-interest-rate" class="btn-back btn-clr">back</a>
          </div>
        </div> -->

     </div>
     <!-- /Interest Rate -->
     <div id="step-home-buy-process" class="slider-step step">
      <!-- Home Buy Process -->
      <div class="row">
        <div class="col-sm-12 ">
          <label class="purchase">THANKS FOR YOUR REPORT.</label>

        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">

        </div>
      </div>
<!--      <div class="row">
        <div class="col-sm-12">
          <a id="back-home-buy-process" class="btn-back">back</a>
        </div>
      </div> -->

    </div>
  
  <div class="clear"></div>
</div>
<!-- Offset -->
</div>
<!-- Container Row -->


<!-- Sidebar Form -->

<?php do_action( 'before_sidebar' ); ?>
<?php if ( ! dynamic_sidebar( 'sidebar-main' ) ) : ?>
<?php endif; // end sidebar widget area ?>

</div><!-- #secondary -->



<style>
.comment-right.text-right {
  padding-bottom: 13px;
  border-bottom: 1px solid;
  margin-bottom: 23px;
  color: #7ac71d;
} 
.top-level-maplist {
  border-bottom: 1px solid;
  margin-bottom: 11px;
  padding-bottom:10px;
  color: #74776f;
  font-weight: 600;
}
.social-icons.share-icons.share-row.relative.icon-style-outline {
  font-size: 11px;
  /* color: red !important; */
  /* background-color: red; */
} 
p.sub_heading_main {
  margin-bottom: 6px;
} 
input#s::placeholder {
  color: #000;
}
input#s {
  background-color: white !important;
  color: #000 !important;
} 
span.sub_heading {
  color: #000;
  font-weight: 500;
} 

.button.icon.circle {
  padding-left: 0;
  padding-right: 0;
  background-color: #85d022;
  color: white;
  border: 2px solid #68b815;
}   
.header-main {
  height: 57px;
  /* background-color: red; */
  background: linear-gradient(to bottom right, #87ff00, #a5ea30, #489e07);
  box-shadow: -6px 1px 1px #333;
}
.icon-search:before {
  content: "\e012";
  color: #7f7d7d;
} 
.nav-dark .logo a {
  color: #fff;
  font-size: 25px;
  text-shadow: 0px 1px 1px #000;
}
#form-step-wrap{
  position: relative;
  overflow-x: hidden;
  width: 100%;
}
label {
  font-size: 17px;
  color: #fff;
  text-shadow: 1px 1px 1px #000;
}
/* Each Step */
.slider-step{
 box-shadow: 5px 5px 50px rgba(0,0,0,0.2);
 background: linear-gradient(to bottom right, #70cb0a, #6eae01, #489e07); 
 padding: 40px 15px;
 position: absolute;
 width: 100%;
 right: -100%;
 opacity: 0;
 -webkit-transition:all, 0.3s linear;
 -moz-transition: all, 0.3s linear;
 -ms-transition: all, 0.3s linear;
 -o-transition: all, 0.3s linear;
 transition: all, 0.3s linear;
}
select.form-control:not([size]):not([multiple]) {
  height: calc(2.25rem + 2px);
  width: 100vw;
  width: calc(15.25rem + -9px);
}
.comment {
    list-style: none;
    padding: 1em 0 0 8px;
}
@media(min-width:768px)
{
	input#report_it_now {
    margin-top: 15px;
    margin-bottom: -12px;
}
	
	} 
	
form p {
    margin-bottom: .5em;
    color: #fff;
}	
/* Show the 1st step */
.first-step{
  right: 0;
  opacity: 1;
}
input.btn-next.btn-success.form-control {
  width: 100% !important;
  background-color: #fff;
  padding-left: 32px;
  border: 2px solid orange;
}
/* Button */
.btn-next,
.btn-back{
 margin-top: 20px;
 display: block;
}

/* Animations Settings */
[data-anim="show-from--right"]{
  right: 0;
  opacity: 1;
}
[data-anim="show-from--left"]{
  right: 0;
  opacity: 1;
}
[data-anim="hide-to--right"]{
  right: -50%;
  opacity: 0;
}
[data-anim="hide-to--left"]{
  right: 50%;
  opacity: 0;
}
.star-rating {
  text-align: left;
  font-size: 15px;
  color: #fff !important;
  display: unset;
  overflow: hidden;
  position: relative;
  height: 1em;
  line-height: 1em;
  letter-spacing: 0;
  margin: 0.5em 6px;
  width: 5.4em;
  font-family: "fl-icons" !important;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

.leaveRating {
  color: white;
  font-size: 14px;
  font-weight: bold;
  padding-left:2px; 
}

.star-rating span:before {
  content: '\e005\e005\e005\e005\e005';
  color: #ffffff00;
  top: 0;
  position: absolute;
  left: 0;
}
.row.alert-radio.custom-alert {
    display: none;
}
.star-rating:before, .woocommerce-page .star-rating:before {
  content: '\e006\e006\e006\e006\e006';
  color: #ffffff;
  float: left;
  top: 0;
  left: 0;
  position: absolute;
}   
.row.alert-radio h3, .row.alert-select h3 {
  color: #fff;
  font-size: 15px;
  text-shadow: 1px 1px 1px #000;
} 

.row.alert-radio {
  color: #f4f4f4;
  font-size: 13px;
  padding-right: 11px !IMPORTANT;
  font-weight: 700;
  display: inline-block;
  line-height: 0px;
  text-indent: 1px;
} 
input[type="checkbox"] {
  vertical-align: sub;
}   
label.checkbox-inline, label.checkbox {
  font-size: 13px;
} 

.checkbox-inline {
  margin-bottom: -4px;
} 

textarea#comment {
  font-size: 11px;
}

.step-3-pera {
  font-size: 14px;
  color: white;
  font-weight: bold;
}

.step-3-content span {
  color: white;
  font-size: 20px;
  font-weight: bold;
}
.step-3-content i {
  font-size: 38px;
  margin-left: 10px;
  color: green;
}
.for-left-margin {
  margin-left: 18px;
}
.btn-back {
  text-align: center;
  background-color: #6ab917;
  color: white;
  padding: 5px 0px;
}
.btn-clr {
  color: white;
}
.thnx-btn {
  margin-top: 15px;
} 

.photo-list {
  color: white;
  font-size: 15px;
  margin-left: 15px;
}

.btn-outline-dark {
  color: #ffffff !important;
  background-color: transparent;
  background-image: none;
  border-color: #ffffff !important;
}   





.rate-area {
  float: left;
  font-size: 4px;
  border-style: none;
}

.rate-area:not(:checked) > input {
  position: absolute;
  top: -9999px;
  clip: rect(0,0,0,0);
}

.rate-area:not(:checked) > label {
  float: right;
  width: 1em;
  padding: 0 .1em;
  overflow: hidden;
  white-space: nowrap;
  cursor: pointer;
  font-size: 400%;
  line-height: 1.2;
  color: lightgrey;
  text-shadow: 1px 1px #bbb;
}

.rate-area:not(:checked) > label:before { content: '★ '; }

.rate-area > input:checked ~ label {
  color: gold;
  text-shadow: 1px 1px #c60;
  font-size: 450% !important;
}

.rate-area:not(:checked) > label:hover, .rate-area:not(:checked) > label:hover ~ label { color: gold; }

.rate-area > input:checked + label:hover, .rate-area > input:checked + label:hover ~ label, .rate-area > input:checked ~ label:hover, .rate-area > input:checked ~ label:hover ~ label, .rate-area > label:hover ~ input:checked ~ label {
  color: gold;
  text-shadow: 1px 1px goldenrod;
}

.row.alert-select {
    display: none;
}
	
	
.rate-area > label:active {
  position: relative;
  top: 2px;
  left: 2px;
}   
</style>



<script>
  $(document).ready(function(){
	//report_it_now
  $('#report_it_now').on("click", function(e){
	if($('#loanpurpose').val() != '' )
	{
		next_step(this);
	}
	else
	{
		bootbox.alert('Please Fill The Location');
	}
	
  });	
  
  function next_step(btn_name)
  {
	nextStep = $("#" + $(btn_name).parents(".slider-step").data("nextStep"));
	console.log($(btn_name).attr('id'));
	$(btn_name).parents(".slider-step").attr("data-anim","hide-to--left");
    nextStep.attr("data-anim","show-from--right");
  }
  
   //Dynamic Next
   $(".btn-next1").on("click", function(){
    next_step(this);
  });

  //Dynamic Back
  $(".btn-back").on("click", function(){
    backTo = $("#" + $(this).parents(".slider-step").data("backTo"));
    $(this).parents(".slider-step").attr("data-anim","hide-to--right");
    backTo.attr("data-anim","show-from--left");
  });

  // create post

  $('#complete-my-report').on("click", function(e){	
    var loanpurpose = $('#loanpurpose').val();
    var email = $('#user_email').val();
    var comment = $('.comment').val();
    var rating = $('input[name=rating]:checked').val();
	var symptoms = $('#symptoms').val();
	console.log(data_place);

	if(validateEmail(email))
	{
		if($("#terms_condition").prop('checked') == true)
		{
			$.ajax({  
			 data: {action: 'post_form',loanpurpose:loanpurpose,comment:comment,email:email,rating:rating,longitude:longitude,latitude:latitude,country:data_place['country'],state:data_place['state'],city:data_place['city'],symptoms:symptoms},
			 type: 'post',
			 url: "<?php echo admin_url('admin-ajax.php'); ?>",
			 success: function(data) {
			  $('#next-home-value1').attr('data-id', data);
			  $('#pid').attr('value', data);
			  $('.default-btn').attr('data-id', data);
				bootbox.alert('Form Submited Successfully');
				next_step('#complete-my-report');
				console.log(data); //should print out the name since you sent it along
			   }
			 });
		}
		else{
			bootbox.alert('Please Accept All Terms & Conditions'); 
		}
  }
  else
  {
	 bootbox.alert('Please Enter email'); 
  }
  });
  


  // next ajax
  $('#next-home-value1').on("click", function(e){
	  
    var phone_number = $('#phone_number').val();
    var post_id = $(this).attr("data-id");
	if(phone_number != '')
	{
	console.log(phone_number);
	next_step(this);
	console.log(phone_number);
    $.ajax({ 
     data: {action: 'update_post',phone_number:phone_number,post_id:post_id},
     type: 'post',
     url: "<?php echo admin_url('admin-ajax.php'); ?>",
     success: function(data) {
          // $('#next-home-value1').attr('data-id', data);
         console.log(data); //should print out the name since you sent it along
       }
     });
  }
  else{
	  bootbox.alert('Please enter Phone No.');
  }
  });

// file uploading from front end start here
   $('#photo_upload').click(function(event){
    bootbox.alert('Photo Uploaded Successfully');
	
	next_step(this);
    event.preventDefault();
    var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
    var formData = new FormData();
	console.log('hello formData');
	console.log(formData);
    formData.append('updoc', $('input[type=file]')[0].files[0]);
    formData.set('pid', $('#pid').val());
    // formData.append('p_id', $(this).attr("data-id"));
    formData.append('action', "imageuploading");
    $.ajax({
      url: ajaxurl,
      type: "POST",
      data:formData,cache: false,
processData: false, // Don’t process the files
contentType: false, // Set content type to false as jQuery will tell the server its a query string request
success:function(data) {
  console.log(data);
},
 });
	
});
// file uploading from front end end here

});

</script>

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places&key=AIzaSyBf0lnEfFEYZaqa8Ht1PDWveiK8_gNyQzU&sensor=false"></script>




<script>console.log('hello');
	var longitude;
	var latitude;
   var input = document.getElementById('loanpurpose'); 
  autocomplete=new google.maps.places.Autocomplete(input);
  console.log('hello user');
  console.log(autocomplete);
    autocomplete.addListener('place_changed', fillInAddress);
  function fillInAddress()
  {
	  var place = autocomplete.getPlace();
	  data_place = [];
	  data_place['city'] = '';
	  data_place['state'] = '';
	  data_place['country'] = '';
	for(var i=0;i<place.address_components.length;i++){
	if(place.address_components[i]['types'][0] == 'administrative_area_level_2')
	{
		console.log(place.address_components[i]['long_name']);
		data_place['city'] = place.address_components[i]['long_name'];
	}else if(place.address_components[i]['types'][0] == 'administrative_area_level_1'){
		console.log(place.address_components[i]['long_name']);
		data_place['state'] = place.address_components[i]['long_name'];
	}else if(place.address_components[i]['types'][0] == 'country'){
		console.log(place.address_components[i]['long_name']);	
		data_place['country'] = place.address_components[i]['long_name'];
	}
	}
    var geocoder = new google.maps.Geocoder();
    var address = document.getElementById('loanpurpose').value;
    geocoder.geocode( { 'address': address}, function(results, status) 
    { 
      if (status == google.maps.GeocoderStatus.OK)  
      { 
		console.log('data gain');
		latitude = results[0].geometry.location.lat();
		longitude = results[0].geometry.location.lng();
		console.log(results[0].geometry.location.lat());
		console.log(results[0].geometry.location.lng());
        //document.getElementById('pods-form-ui-pods-meta-latitude').value = results[0].geometry.location.lat();
        //document.getElementById('pods-form-ui-pods-meta-longitude').value = results[0].geometry.location.lng();
      } 
    }); 
  }

  function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}  
  </script>

