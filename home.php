<?php
/**
 * The template for displaying all single posts
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

				get_template_part( 'template-parts/content', get_post_format() );
				?>
				
				<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

      <div class="paginate-links">
        <?php crooked_fall_studios_number_pagination(); ?>
      </div>
      
		</div><!-- .primary-content -->
		<?php get_sidebar(); ?>
	</main><!-- #main -->

<?php

get_footer();