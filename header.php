<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Crooked_Fall_Studios
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<header id="masthead" class="site-header primary-site-header">

		<div class="site-branding">
			<div class="custom-logo-container">
				<?php 
				if ( has_custom_logo() ) :
				the_custom_logo();

				else:
				?>
					<div class="cfs-logo-container">
						<h1 class="cfs-logo"><span class="letter c">C</span>rooked <span class="letter f">F</span>all Studios</h1>
					</div>
				<?php endif; ?>
			</div>
		</div><!-- .site-branding -->

		<!-- Main navigation container -->
		<nav id="site-navigation" class="main-navigation">
			
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-primary',
						'menu_id'        => 'menu-primary',
					)
				);
			?>
		</nav>

		<!-- Sandwich button container -->
		<div class="hamburger-button">
			<div class="line line-1"></div>
			<div class="line line-2"></div>
			<div class="line line-3"></div>
		</div>
			
		<!-- Mobile menu navigation container -->
		<nav id="site-navigation" class="main-navigation__mobile">
			
			<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-primary',
						'menu_id'        => 'menu-primary',
					)
				);
			?>
		</nav>

		</nav><!-- .main-navigation -->
	</header><!-- #masthead -->