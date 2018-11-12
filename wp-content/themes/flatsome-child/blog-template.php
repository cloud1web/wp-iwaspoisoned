	<?php
	/*
	Template name: Blog
	*/
	get_header(); ?>

	<?php do_action( 'flatsome_before_page' ); ?>

	<div class="page-wrapper page-right-sidebar">
		<div class="row">

			<div id="content" class="large-8 left col col-divided" role="main">
				<div class="page-inner">
					<?php if(get_theme_mod('default_title', 0)){ ?>
						<header class="entry-header">
							<h1 class="entry-title mb uppercase"><?php the_title(); ?></h1>
						</header><!-- .entry-header -->
					<?php } ?>
					<!-- pagination -->
					<?php 
					$paged = (get_query_var('page')) ? get_query_var('page') : 1;
					// echo $paged;die;
					query_posts(array(
		                               'post_type' => 'blog', // You can add a custom post type if you like
		                               'paged' => $paged,
		                               'posts_per_page' => 2 // limit of posts
		                           ));?> 
		                           
		                           <?php if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>
		                           	<?php $post_id = get_the_ID(); 
		                           	$meta = get_post_meta($post_id,'image');
		                           	 // echo "<pre>";
		                           	 // print_r($meta);
		                           	?>
		                           	<div class="coffee-month">
		                           		<!-- Add a list element for the post -->
		                           		<h4 class="coffee-heading same-top-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		                           			</h4>
		                           		
		                           	</div>
		                           	<div class="coffee-para same-color-start">
		                           		<p><?php echo get_the_date(); ?></p>
		                           		<p><a href="<?php the_permalink(); ?>"><img src="<?php echo $meta[0]['guid'] ?>" width="40%" height="200px;"></a></p>
		                           		<p><?php the_content(); ?></p>
		                           	</div>
		                           	<span class="comment-toggle" style="display: none;">
		                           		
		                           	</span>
		                           <?php endwhile; ?>
		                           
		                           <?php 
		                           $a['format'] = '';
                                   // $a['base'] = 'http://www.orbitedgetech.com/wordpress/iwaspoisoned/blogpost/%#%';
                                   $a['base'] = home_url( 'blogs/%#%');
                                   echo paginate_links($a);
		                           // post_pagination(); 
		                           ?>

		                           <?php
		                       else : 
		                      // no posts found message goes here...
		                       endif; 
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