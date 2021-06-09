<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Crooked_Fall_Studios
 */

get_header();
?>

	<main id="primary" class="site-main search-site-main">

		<div class="primary-content">

			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="page-title">
						<?php
						/* translators: %s: search query. */
						printf( esc_html__( 'Search Results for: %s', 'crooked-fall-studios' ), '<span>' . get_search_query() . '</span>' );
						?>
					</h1>
				</header><!-- .page-header -->

				<?php
				/* Start the Loop */

				while ( have_posts() ) :
				the_post();

				/**
				* Run the loop for the search to output the results.
				* If you want to overload this in a child theme then include a file
				* called content-search.php and that will be used instead.
				*/
				
				get_template_part( 'template-parts/content', 'search' );

				endwhile;

				the_posts_navigation();
			
			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;
			?>

			<div class="paginate-links">
        <?php crooked_fall_studios_number_pagination(); ?>
      </div>

			<div class="rand-suggestions">
				<h3 class="rand-suggestions__heading">
					Additional Suggestions
				</h3>
				<?php 
					/**
					 * Query random posts for articles, music, and 3d animation - this is likely expensive and I should find a better way to do this in the future. Possibly using pre_get_posts()???
					 */

					// Query for random posts
					$postQuery = new WP_Query(
						[
							'post_type'				=> 'post',
							'orderby'					=> 'rand',
							'posts_per_page'	=> '5'
						]
					);
					// If we have posts let's show them
					if ( $postQuery->have_posts() ) : ?>
						<div class="rand-posts">
							<h3 class="rand-posts__heading"><?php esc_html_e( 'If you\'re not quite sure what you\'re looking for, maybe these posts can help.', 'crooked-fall-studios' ); ?></h3>

							<ul class="rand-posts__ul rand-block">
							<?php 
							// Loop through the posts
								while ( $postQuery->have_posts() ) :
									$postQuery->the_post(); ?>
									<li><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
								<?php endwhile;
								wp_reset_postdata(); ?>
							</ul>
					
						</div>
					<?php endif; ?>

					<?php 
					// Query for random music posts
					$musicQuery = new WP_Query(
						[
							'post_type'				=> 'cfs_music',
							'orderby'					=> 'rand',
							'posts_per_page'	=> '5'
						]
					);
					// If we have posts let's show them
					if ( $musicQuery->have_posts() ) : ?>
						<div class="rand-music-posts">
							<h3 class="rand-music-posts__heading"><?php _e( 'If music is your thing, perhaps you can find it here.', 'crooked-fall-studios' ); ?></h3>

							<ul class="rand-music-posts__ul rand-block">
							<?php 
							// Loop through the posts
								while ( $musicQuery->have_posts() ) :
									$musicQuery->the_post(); ?>
									<li><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
								<?php endwhile;
								wp_reset_postdata(); ?>
							</ul>
					
						</div>
					<?php endif; ?>
					
					<?php 
					// Query for random 3d animation posts
					$animationQuery = new WP_Query(
						[
							'post_type'				=> 'cfs_3d_animation',
							'orderby'					=> 'rand',
							'posts_per_page'	=> '5'
						]
						);
						// If we have posts let's show them
					if ( $animationQuery->have_posts() ) : ?>
						<div class="rand-animation-posts">
							<h3 class="rand-animation-posts__heading"><?php _e( 'Here are some ideas for all you 3d animation fans out there.', 'crooked-fall-studios' ); ?></h3>

							<ul class="rand-animation-posts__ul rand-block">
							<?php 
							// Loop through the posts
								while ( $animationQuery->have_posts() ) :
									$animationQuery->the_post(); ?>
									<li><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
								<?php endwhile;
								wp_reset_postdata(); ?>
							</ul>
					
						</div>
					<?php endif; ?>
				</div>

			</div><!-- .primary-content -->
		<?php get_sidebar(); ?>
	</main><!-- #main -->

<?php

get_footer();