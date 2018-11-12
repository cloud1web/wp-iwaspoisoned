<?php
/**
 * The template for displaying the footer.
 *
 * @package flatsome
 */

global $flatsome_opt;
?>

</main><!-- #main -->

<footer id="footer" class="footer-wrapper">

	<?php do_action('flatsome_footer'); ?>

</footer><!-- .footer-wrapper -->

</div><!-- #wrapper -->

<?php wp_footer(); ?>
<script>
$(document).ready(function(){
    $(".demo-toggle").click(function(){
        $(this).parent().next().toggle();
    });
	
	 $("#smedia").click(function(){
		 alert('hii');
        $('#social-media').show();
    });
	
	jQuery("#a2apage_show_more_less").click(function(){
			console.log("hello world");
			jQuery("#a2apage_full").attr('style', 'display:block !important;');
	});
	jQuery(document).click(function() {

	  if( this.id != 'info') {
		$("#a2apage_full").hide();
	  }

	});
});
</script>


</body>
</html>
