<?php
/**
 * The Front page template file
 *
 * This is the template file that displays the custom front page. 
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Crooked_Fall_Studios
 */

get_header();
?>

	<main id="primary" class="site-main">

		<div class="primary-content">

			<section class="newest-posts block">
				<div class="newest-posts__container">
					<h2 class="newest-posts__title"><?php _e( 'Latest Articles', 'crooked-fall-studios' ); ?></h2>

					<?php
						$argsRecentPosts = array(
							'post_type'				=> 'post',
							'posts_per_page'	=> 8
						);

						$recentPosts = new WP_Query( $argsRecentPosts );
						if ( $recentPosts->have_posts() ) :
							while ( $recentPosts->have_posts() ) :
								$recentPosts->the_post();
					?>

							<a href="<?php the_permalink(); ?>"><h3 class="newest-posts__post-title align-center"><?php the_title(); ?></h3><!-- .newest-posts__title -->
							</a>

						<div class="newest-posts__post">

							<div class="newest-posts__img-excerpt">
								<a href="<?php the_permalink(); ?>">
									<div class="newest-posts__img">
										<?php the_post_thumbnail(); ?>
									</div>
								</a>

								<div class="newest-posts__excerpt align-left">
									<?php the_excerpt(); ?>
								</div>
							</div>

							<a href="<?php the_permalink(); ?>" class="read-more">
							<button class="btn">
								View
							</button>
							</a>
							
							<hr class="hr-fp hr">
					
						</div><!-- .newest-posts__post -->
					<?php endwhile; wp_reset_postdata(); ?>
					<?php endif; ?>

				</div>
			</section><!-- .newest-posts -->

			<section class="video-playlists block">
				<div class="video-playlists__container">
					<h2 class="video-playlists__title"><?php _e( 'Playlist Library', 'crooked-fall-studios' ); ?></h2>

					<div class="video-playlists__playlists">

					<!-- 3D Animation playlist -->
					<div class="video-playlists__playlist">
							<a href="<?php echo esc_url( 'https://www.youtube.com/playlist?list=PLl4BqPfQ2jlplRFazF4i0Wyt2oiyHCrO5' ); ?>"><h3 class="video-playlists__playlist-title align-center">3D Animation</h3></a>
							<div class="video-playlists__playlist-video iframe">
							<iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLl4BqPfQ2jlplRFazF4i0Wyt2oiyHCrO5" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div><!-- .video-playlists_playlist -->
						</div><!-- .video-playlists__playlist -->

						<!-- Video Games playlist -->
						<div class="video-playlists__playlist">
							<a href="<?php echo esc_url( 'https://www.youtube.com/playlist?list=PLl4BqPfQ2jlrTXqJOkyAjwz6Yrr9mrYtJ' ); ?>"><h3 class="video-playlists__playlist-title align-center">Video Games</h3></a>
							<div class="video-playlists__playlist-video iframe">
								<iframe width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PLl4BqPfQ2jlrTXqJOkyAjwz6Yrr9mrYtJ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
							</div><!-- .video-playlists_playlist -->
						</div><!-- .video-playlists__playlist -->

					</div>
					
				</div>
			</section><!-- .video-playlists -->
			
		</div><!-- .primary-content -->
		<?php get_sidebar(); ?>
	</main><!-- #main -->

<?php
get_footer();