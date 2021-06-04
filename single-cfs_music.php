<?php
/**
 * The template for displaying all Music post types
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Crooked_Fall_Studios
 */

get_header();
?>

	<main id="primary" class="site-main">

		<div class="primary-content">
			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'single' );

				the_post_navigation(
					array(

						'prev_text' => '<button class="nav-btn nav-btn-prev"><span class="nav-subtitle">' . esc_html__( 'Previous:', 'crooked-fall-studios' ) . '</span> <span class="nav-title">%title</span></button>',

						'next_text' => '<button class="nav-btn nav-btn-next"><span class="nav-subtitle">' . esc_html__( 'Next:', 'crooked-fall-studios' ) . '</span> <span class="nav-title">%title</span></button>',
					)
				);
				?>
				
				<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
		</div><!-- .primary-content -->
		<?php get_sidebar(); ?>
	</main><!-- #main -->

<?php

get_footer();