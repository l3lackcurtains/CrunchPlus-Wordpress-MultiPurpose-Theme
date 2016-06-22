<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package crunchplus
 */

?>
</div><!-- /content-wrapper -->
<!-- Footer wrapper -->
<div class="footer-top-wrapper">
	<div class="container">
		<div class="row">
			<?php get_sidebar('footer'); ?>
		</div>
	</div>
</div>
<!-- /Footer wrapper -->
<!-- Footer wrapper -->
<div class="footer-bottom-wrapper">
	<div class="container">
		<div class="row">
			<div class="site-info">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'crunchplus' ) ); ?>"><?php printf( esc_html__( 'Crunch+', 'crunchplus' )); ?></a>
				theme by Madhav Poudel
			</div><!-- .site-info -->
		</div>
	</div>
</div>
<!-- /Footer wrapper -->

<?php wp_footer(); ?>


</body>
</html>
