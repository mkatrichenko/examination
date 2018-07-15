<?php
/**
 * examination functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package examination
 */

if ( ! function_exists( 'examination_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function examination_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on examination, use a find and replace
		 * to change 'examination' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'examination', get_template_directory() . '/languages' );

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

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'examination' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'examination_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'examination_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}
function examination_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'examination_content_width', 640 );
}
add_action( 'after_setup_theme', 'examination_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function examination_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'examination' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'examination' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'examination_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function examination_scripts() {
	//wp_enqueue_style( 'examination-style', get_stylesheet_uri() );
	
	wp_enqueue_style( 'main-style', get_template_directory_uri()."/css/style.css");
	wp_enqueue_style( 'slick-style', get_template_directory_uri() . "/slick/slick.css");
	wp_enqueue_style( 'fontawesome', "https://use.fontawesome.com/releases/v5.1.0/css/all.css");

	wp_enqueue_script( 'examination-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	
	wp_enqueue_script( 'jquerry', get_template_directory_uri() . '/js/jquery-3.2.1.min.js', array(), 'null', true );
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/slick/slick.min.js', array(), 'null', true );
	wp_enqueue_script( 'index-js', get_template_directory_uri() . '/js/index-min.js', array(), 'null', true );

	wp_enqueue_script( 'examination-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'examination_scripts' );

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



//update_option('siteurl', 'http://dyplom');
//update_option('home', 'http://dyplom');



//menu options


add_action( 'after_setup_theme', function () {
	register_nav_menus( [
		'top-header-menu' => 'Верхняя область',
		'bottom-header-menu' => 'Нижняя область',
		'footer-menu' => 'Подвальная область',
		'mobile-menu' => 'Мобильное меню'
	] );
} );
// Изменяет основные параметры меню
add_filter( 'wp_nav_menu_args', 'filter_wp_menu_args' );
function filter_wp_menu_args( $args ) {
	if ( $args['theme_location'] === 'top-header-menu' ) {
		$args['container']  = false;
		$args['items_wrap'] = '<ul class="%2$s">%3$s</ul>';
		$args['menu_class'] = 'menu';
	}
	if ( $args['theme_location'] === 'bottom-header-menu' ) {
		$args['container']  = false;
		$args['items_wrap'] = '<ul class="%2$s">%3$s</ul>';
		$args['menu_class'] = 'submenu';
	}
	if ( $args['theme_location'] === 'footer-menu' ) {
		$args['container']  = false;
		$args['items_wrap'] = '<ul class="%2$s">%3$s</ul>';
		$args['menu_class'] = 'footer-menu';
	}
	if ( $args['theme_location'] === 'mobile-menu' ) {
		$args['container']  = false;
		$args['items_wrap'] = '<ul class="%2$s">%3$s</ul>';
		$args['menu_class'] = 'menu__container';
	}
	return $args;
}

// Изменяем атрибут id у тега li
add_filter( 'nav_menu_item_id', 'filter_menu_item_css_id', 10, 4 );
function filter_menu_item_css_id( $menu_id, $item, $args, $depth ) {
	return $args->theme_location === 'top-header-menu' ? '' : $menu_id;
}
// Изменяем атрибут class у тега li
add_filter( 'nav_menu_css_class', 'filter_nav_menu_css_classes', 10, 4 );
function filter_nav_menu_css_classes( $classes, $item, $args, $depth ) {
	if ( $args->theme_location === 'top-header-menu' ) {
		$classes = [
			'menu__item',
			'menu-node--main_lvl_' . ( $depth + 1 )
		];
		if ( $item->current ) {
			$classes[] = 'active';
		}
	}
	if ( $args->theme_location === 'bottom-header-menu' ) {
		$classes = [
			'submenu__item'
		];
		if ( $item->current ) {
			$classes[] = 'active';
		}
	}
	if ( $args->theme_location === 'footer-menu' ) {
		$classes = [
			'footer-menu__item'
		];
		if ( $item->current ) {
			$classes[] = 'active';
		}
	}
	if ( $args->theme_location === 'mobile-menu' ) {
		$classes = [
			'menu__item'
		];
		if ( $item->current ) {
			$classes[] = 'active';
		}
	}
	return $classes;
}


// Изменяет класс у вложенного ul
add_filter( 'nav_menu_submenu_css_class', 'filter_nav_menu_submenu_css_class', 10, 3 );
function filter_nav_menu_submenu_css_class( $classes, $args, $depth ) {
	if ( $args->theme_location === 'top-header-menu' ) {
		$classes = [
			'dropdown'
		];
	}
	return $classes;
}
// Добавляем классы ссылкам
add_filter( 'nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 4 );
function filter_nav_menu_link_attributes( $atts, $item, $args, $depth ) {
	if ( $args->theme_location === 'top-header-menu' ) {
		$atts['class'] = 'menu-link';
		if ( $item->current ) {
			$atts['class'] .= 'active';
		}
	}
	if ( $args->theme_location === 'bottom-header-menu' ) {
		$atts['class'] = 'menu-link';
		if ( $item->current ) {
			$atts['class'] .= 'active';
		}
	}
	if ( $args->theme_location === 'footer-menu' ) {
		$atts['class'] = 'menu-link';
		if ( $item->current ) {
			$atts['class'] .= 'active';
		}
	}
	if ( $args->theme_location === 'mobile-menu' ) {
		$atts['class'] = 'menu-link';
		if ( $item->current ) {
			$atts['class'] .= 'active';
		}
	}
	return $atts;
}