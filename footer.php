<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Pollak Vineyards
 * @since Pollak Vineyards 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
			<div class="footer-left footer-pollak">
				<span class="first-child">Copyright &copy; Pollak Vineyards. All rights reserved</span>
				<span>330 Newtown Road, Greenwood, VA 22943</span>
				<span class="last-child">540-456-8844</span>
			</div>
			<div class="footer-center footer-pollak">
				<!--<span class="first-child"><a href="#">site map</a></span>-->
				<!--<span><a href="#">policies</a></span>-->
				<span class=""><a href="/contact">contact us</a></span>
			</div>
			<div class="footer-right footer-pollak">
				<span><a class="social facebook" href="http://www.facebook.com/pages/Pollak-Vineyards/83539196973"><!-- --></a></span>
				<span><a class="social instagram" href="http://instagram.com/pollakvineyards"><!-- --></a></span>
				<span><a class="social email" href="/contact"><!-- --></a></span>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<!-- Bootstrap core JavaScript
================================================== --->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/popper.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap/bootstrap.min.js"></script>

<script>
	$(document).ready(function(){
		$("#myModal").modal('show');
	});
</script>


</body>
</html>
