<div class="make-it-full">
<?php if ( have_posts() ) : ?>
<div id="post-list">   
<?php /* Start the Loop */ ?>

<?php while ( have_posts() ) : the_post(); ?>


<?php
	$photo = get_post_meta($post->ID,'photo'); 
	$location = get_post_meta($post->ID,'location');
	$symptoms = get_post_meta($post->ID,'symptoms');
	$email = get_post_meta($post->ID,'email');
	$phone_number = get_post_meta($post->ID,'phone_number');
	$business_rate = get_post_meta($post->ID,'business_rate');

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



<?php flatsome_posts_pagination(); ?>

</div>

<?php else : ?>

	<?php get_template_part( 'template-parts/posts/content','none'); ?>

<?php endif; ?>
</div>


<style>
.row.row-large.row-divided {
    width: 100% !IMPORTANT;
    max-width: 100%;
}
</style>