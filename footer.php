<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Crooked_Fall_Studios
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="sidebar-2-container">
			<?php 
				if( is_active_sidebar( 'sidebar-2' ) ) :
					get_sidebar( '2' );
				endif;
			?>
		</div>
		<div class="site-info">
			<small>
				<a href="<?php echo get_home_url(); ?>"><?php esc_html_e( 'Crooked Fall Studios' ); ?></a> <?php echo esc_html_e( '&#124; ' ) . esc_html_e( 'All rights reserved ' ) . esc_html_e('2018 &#8208; ') . date( 'Y' ); ?>
			</small>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
