<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Crooked_Fall_Studios
 */

?>

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'crooked-fall-studios' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php
		
		if ( is_search() ) :
			?>

			<p><?php esc_html_e( 'Sorry, but we were unable to find anything that matched your search terms. Maybe try again with some different keywords?', 'crooked-fall-studios' ); ?></p>
			<?php
			get_search_form();

		endif;
			?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
