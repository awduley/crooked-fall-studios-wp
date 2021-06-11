<?php
/**
 * Template part for displaying posts on the front page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Crooked_Fall_Studios
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
	<a href="<?php the_permalink(); ?>"><h2 class="entry-title"><?php the_title(); ?><h2></a>
	</header><!-- .entry-header -->

	<div class="entry-thumbnail">
		<?php crooked_fall_studios_post_thumbnail(); ?>
	</div>

	<?php

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<p>
					<?php
					crooked_fall_studios_posted_on();
					esc_html_e( '&nbsp;', 'crooked-fall-studios' );
					crooked_fall_studios_posted_by();
					?>
				</p>
			</div><!-- .entry-meta -->
		<?php endif; ?>

	<div class="entry-excerpt">
		<?php
		the_excerpt(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'crooked-fall-studios' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);
	
		?>

	</div><!-- .entry-content -->

	<div class="entry-button">
		<button class="btn"><a href="<?php the_permalink(); ?>">View</a></button>
	</div>

	<footer class="entry-footer">
		<?php crooked_fall_studios_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->