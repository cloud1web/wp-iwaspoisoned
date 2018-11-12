<?php if ( have_posts() ) : ?>

<?php /* Start the Loop */ ?>


<?php while ( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="article-inner <?php flatsome_blog_article_classes(); ?>">
		<?php
			if(flatsome_option('blog_post_style') == 'default' || flatsome_option('blog_post_style') == 'inline'){ 
				get_template_part('template-parts/posts/partials/entry-header', flatsome_option('blog_posts_header_style') );
			}
		?>
		<?php
		if(get_post_type() == 'post')
		{
			$view_post = true;
	        $photo = get_post_meta($post->ID,'photo'); 
	        $location = get_post_meta($post->ID,'location');
	        $symptoms = get_post_meta($post->ID,'symptoms');
	        $email = get_post_meta($post->ID,'email');
	        $phone_number = get_post_meta($post->ID,'phone_number');
	        $business_rate = get_post_meta($post->ID,'business_rate');
			$date = get_the_date();
			//the_content(); 
			//print_r($post_content);
			//print_r(get_the_terms( $post,'city'));
		?>
		<div >
			<div>
				<span class='date'><b><?php print_r($date); ?></b></span><br><br>
				<p><b>Location:</b> <?php echo $location[0]; ?> </p>
				<p><b>Report Type:</b> Food Poisoning </p>
				<?php if(!empty($symptoms['0'])){ ?>
				<p><b>Symptoms:</b>  <?php for($i=0;$i<count($symptoms);$i++){ if($i == 0){ 
				echo $symptoms[$i]; } else { echo ', '.$symptoms[$i]; } } ?></p><?php } ?>
				<p><b>Details:</b> <?php the_content(); ?></p>
				<p><b>Reported By:</b> <?php echo $email['0']; ?> </p>
				<p><b>More incidents from:</b>
<?php
				$city = get_the_terms( $post,'city');
				$state = get_the_terms( $post,'state');
				$country = get_the_terms( $post,'country');

				if(!empty($country)){  
				?>
					<a href="<?php echo get_term_link($country['0']); ?>" class='btn btn-primary'><?php echo $country['0']->name; ?></a>
				<?php
				}
				if(!empty($state)){  
				?>
					<a href="<?php echo get_term_link($state['0']); ?>" class='btn btn-primary'><?php echo $state['0']->name; ?></a>
				<?php
				}
				if(!empty($city)){  
				?>
					<a href="<?php echo get_term_link($city['0']); ?>" class='btn btn-primary'><?php echo $city['0']->name; ?></a>
				<?php
				}
?></p>
				<p><b>No of report:</b> 1</p>
				<img src="<?php echo $photo[0]['guid']; ?>">
			</div>
		</div>
		<?php
		}else{
		?>
		<?php get_template_part( 'template-parts/posts/content', 'single' ); ?>
		<?php } ?>
	</div><!-- .article-inner -->
</article><!-- #-<?php the_ID(); ?> -->

<?php endwhile; ?>

<?php else : ?>

	<?php get_template_part( 'no-results', 'index' ); ?>

<?php endif; ?>

<?php
$recent_post = wp_get_recent_posts();
if($view_post)
{
	$recent_no = 1;
	for($i=0;$i< count($recent_post);$i++)
	{  
		if($recent_post[$i]['post_type'] = 'post' && $recent_post[$i]['post_status'] == 'publish')
		{
			$post_id = $recent_post[$i]['ID'];
		if($recent_no == 1)
		{
			$recent_no = 2;
			?>
			<h1 class= 'recent_post'>Recent Post</h1><hr>
			<?php
		}
		?>
		
						<div>
									<div class="coffee-month">
										<!-- Add a list element for the post -->
										<h4 class="coffee-heading same-top-heading"><a href="<?php echo $recent_post[$i]['guid']; ?>"><?php echo $recent_post[$i]['post_title']; ?></a><span class="text-right" style="float: right;">
													<div style="" id="social-media"><?php echo do_shortcode( '[addtoany]' ); ?>
												</div> 
											</span>
										</h4>
										<p><?php echo get_the_date('',$post_id); ?></p>

									</div>
									<div class="coffee-para same-color-start">
										<p class="sub_heading_main"><span class="sub_heading">Location: </span><?php
										$location = get_post_meta($post_id,'location');
										if(!empty($location[0])){ echo $location[0]; } ?></p>
										
										<p class="sub_heading_main"><span class="sub_heading">Report Type: </span>Food Poisoning</p>
										<p class="sub_heading_main"><span class="sub_heading">Symptoms: </span><?php
										$symptoms = get_post_meta($post_id,'symptoms');
										foreach ($symptoms as $key => $value) {
										  if(!empty($value)){ echo ' '.$value; }
										  } ?></p>
										<p class="sub_heading_main"><span class="sub_heading">Details: </span><?php echo $recent_post[$i]['post_content']; ?></p>
										<p><?php
										$photo = get_post_meta($post_id,'photo'); 
										if(!empty($photo[0]['guid'])){ ?><img src="<?php echo $photo[0]['guid'] ?>" width="40%" height="200px;"><?php } ?></p>
									</div>
									<div class="comment-right text-right ">
										<a href="javascript:void(0)" class="demo-toggle">Comments <i class="fa fa-angle-double-right"></i></a>
									</div>
									<span class="comment-toggle" style="display: none;">
										<?php comment_form($post_id); ?>
									</span>
							</div>
		<?php
		}
	}
}?>
