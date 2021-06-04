<?php
/**
 * Template part for displaying single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Crooked_Fall_Studios
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
	  <h2 class="entry-title"><?php the_title(); ?><h2>
	</header><!-- .entry-header -->

	<div class="entry-thumbnail">
		<?php crooked_fall_studios_post_thumbnail(); ?>
	</div>

	<?php

		
		?>
		<div class="entry-meta">
			<p>
				<?php
				crooked_fall_studios_posted_on();
				crooked_fall_studios_posted_by();
				?>
			</p>
		</div><!-- .entry-meta -->
		

	<div class="entry-content">
		<?php
		the_content(
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

	<footer class="entry-footer">
		<?php crooked_fall_studios_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->