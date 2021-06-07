<?php
/**
 * Crooked Fall Studios functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Crooked_Fall_Studios
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'crooked_fall_studios_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function crooked_fall_studios_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Crooked Fall Studios, use a find and replace
		 * to change 'crooked-fall-studios' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'crooked-fall-studios', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// Register new image sizes
		add_image_size( 'square', 350, 350, true);
		add_image_size( 'rectangle', 350, 225, true);
		add_image_size( 'blog', 1200, 630, true);
		add_image_size( 'landscape', 1200, 900, true);
		add_image_size( 'portrait', 900, 1200, true);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Add theme support for post formats
		add_theme_support(
			'post-formats',
			[
				'standard',
				'aside',
				'gallery',
				'link',
				'image',
				'quote',
				'status',
				'video',
				'audio',
				'chat'
			]
			);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'crooked_fall_studios_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

		// Rester both Nav menus here. This theme uses wp_nav_menu() in two location.
		register_nav_menus(
			[
				'menu-primary' 		=> esc_html__( 'Primary', 'crooked-fall-studios' ),
				'menu-seconday'		=> esc_html__( 'Seconday', 'crooked-fall-studios' )
			]
		);
	}
endif;
add_action( 'after_setup_theme', 'crooked_fall_studios_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function crooked_fall_studios_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'crooked_fall_studios_content_width', 640 );
}
add_action( 'after_setup_theme', 'crooked_fall_studios_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function crooked_fall_studios_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar-1', 'crooked-fall-studios' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'crooked-fall-studios' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar-2', 'crooked-fall-studios' ),
			'id'            => 'sidebar-2',
			'description'   => esc_html__( 'Add widgets here.', 'crooked-fall-studios' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'crooked_fall_studios_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function crooked_fall_studios_scripts() {

	wp_enqueue_style( 'crooked-fall-studios-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'crooked-fall-studios-style', 'rtl', 'replace' );

	wp_enqueue_script( 'font-awesome', 'https://kit.fontawesome.com/a38893edb6.js', [], '5.15.3', true );

	wp_enqueue_script( 'custom-navigation', get_template_directory_uri() . '/js/custom-navigation.js', [], '1.0.0', true );

	wp_enqueue_script( 'vanilla-tilt', get_template_directory_uri() . '/js/vanilla-tilt.js', [], '1.0.0', true );

	wp_enqueue_script( 'crooked-fall-studios-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'crooked_fall_studios_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}


/**
 * This area is for adding the function that modifies the default comment form. If anyone is reading this and knows of a better way of doing this, please let me know.
 */
add_filter( 'comment_form_default_fields', 'mo_comment_fields_custom_html' );

function mo_comment_fields_custom_html( $fields ) {
	// first unset the existing fields:
	unset( $fields['comment'] );
	unset( $fields['author'] );
	unset( $fields['email'] );
	unset( $fields['url'] );
	// then re-define them as needed:
	$fields = [

		'comment_field' => '<p class="comment-form-comment"><textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" aria-required="true" required="required" placeholder="Post your comment here"></textarea></p>',
		'author' => '<p class="comment-form-author">' . '<label for="author">' . __( '', 'crooked-fall-studios'  ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
			'<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" maxlength="245"' . $aria_req . $html_req . ' placeholder="&ast; Your name" /></p>',

		'email'  => '<p class="comment-form-email"><label for="email">' . __( '', 'crooked-fall-studios'  ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
			'<input id="email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" maxlength="100" aria-describedby="email-notes"' . $aria_req . $html_req  . ' placeholder="&ast; Your email" /></p>',
		// 'url'    => '<p class="comment-form-url"><label for="url">' . __( 'A CUSTOM WEBSITE LABEL', 'textdomain'  ) . '</label> ' .
		//   '<input id="url" name="url" ' . ( $html5 ? 'type="url"' : 'type="text"' ) . ' value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" maxlength="200" /></p>',
	];
	// done customizing, now return the fields:
	return $fields;
}
// remove default comment form so it won't appear twice
add_filter( 'comment_form_defaults', 'mo_remove_default_comment_field', 10, 1 ); 
function mo_remove_default_comment_field( $defaults ) { if ( isset( $defaults[ 'comment_field' ] ) ) { $defaults[ 'comment_field' ] = ''; } return $defaults; }


// Code to add custom numbered pagination to the bottom of archive pages
function crooked_fall_studios_number_pagination() {

  global $wp_query;
  $bigNumber = 9999999;
    echo paginate_links(
      [
        'base'        => str_replace( $bigNumber, '%#%', esc_url( get_pagenum_link( $bigNumber ) ) ),
        'format'      => '?paged=%#%',
        'current'     => max( 1, get_query_var('paged') ),
        'total'       => $wp_query->max_num_pages,
        'prev_text'   => __( 'Previous', 'crooked-fall-studios' ),
        'next_text'   => __(  'Next', 'crooked-fall-studios' )
      ]
    );
}

// Return an alternate title, without prefix, for every type used in the get_the_archive_title().
add_filter('get_the_archive_title', function ($title) {
	if ( is_category() ) {
			$title = single_cat_title( 'You are viewing entries with a category of - ', false, );
	} elseif ( is_tag() ) {
			$title = single_tag_title( 'You are viewing entries that contain the tag - ', false );
	} elseif ( is_author() ) {
			$title = '<span class="vcard">' . get_the_author() . '</span>';
	} elseif ( is_year() ) {
			$title = get_the_date( _x( 'Y', 'yearly archives date format' ) );
	} elseif ( is_month() ) {
			$title = get_the_date( _x( 'F Y', 'monthly archives date format' ) );
	} elseif ( is_day() ) {
			$title = get_the_date( _x( 'F j, Y', 'daily archives date format' ) );
	} elseif ( is_tax( 'post_format' ) ) {
			if ( is_tax( 'post_format', 'post-format-aside' ) ) {
					$title = _x( 'Asides', 'post format archive title' );
			} elseif ( is_tax( 'post_format', 'post-format-gallery' ) ) {
					$title = _x( 'Galleries', 'post format archive title' );
			} elseif ( is_tax( 'post_format', 'post-format-image' ) ) {
					$title = _x( 'Images', 'post format archive title' );
			} elseif ( is_tax( 'post_format', 'post-format-video' ) ) {
					$title = _x( 'Videos', 'post format archive title' );
			} elseif ( is_tax( 'post_format', 'post-format-quote' ) ) {
					$title = _x( 'Quotes', 'post format archive title' );
			} elseif ( is_tax( 'post_format', 'post-format-link' ) ) {
					$title = _x( 'Links', 'post format archive title' );
			} elseif ( is_tax( 'post_format', 'post-format-status' ) ) {
					$title = _x( 'Statuses', 'post format archive title' );
			} elseif ( is_tax( 'post_format', 'post-format-audio' ) ) {
					$title = _x( 'Audio', 'post format archive title' );
			} elseif ( is_tax( 'post_format', 'post-format-chat' ) ) {
					$title = _x( 'Chats', 'post format archive title' );
			}
	} elseif ( is_post_type_archive() ) {
			$title = post_type_archive_title( '', false );
	} elseif ( is_tax() ) {
			$title = single_term_title( '', false );
	} else {
			$title = __( 'Archives' );
	}
	return $title;
});