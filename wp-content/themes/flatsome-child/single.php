<?php
/**
 * The blog template file.
 *
 * @package flatsome
 */

get_header();

?>

<div id="content" class="blog-wrapper blog-single page-wrapper">
	
<?php get_template_part( 'template-parts/posts/layout', get_theme_mod('blog_post_layout','right-sidebar') ); ?>
</div><!-- #content .page-wrapper -->


<?php get_footer();

?>
<style>
	@media(min-width:768px)
	{
.row.row-large.row-divided {
    width: 93% !IMPORTANT;
    max-width: 100% !important;
}	
	
.row-divided>.col+.col:not(.large-12) {
    border-left: 1px solid #ececec;
    height: 100% !important;
}
	
	}
	</style>