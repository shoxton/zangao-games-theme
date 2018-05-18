<?php

function theme_styles() {
    wp_enqueue_style('style', get_stylesheet_uri(), array(), time(), 'all');
    wp_enqueue_style('bootstrap_css', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
    wp_enqueue_style('google-custom-font', '//fonts.googleapis.com/css?family=Roboto:300,400,700|Titillium+Web:300,400,700');
    wp_enqueue_style('slick-slider-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick-theme.min.css');
    wp_enqueue_style('slick-slider-css2', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.css');
}
add_action('wp_enqueue_scripts', 'theme_styles');


function theme_js() {
    wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.2.1.slim.min.js');
    wp_enqueue_script('bootstrap_js', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js');
    wp_enqueue_script('font-awesome', '//use.fontawesome.com/releases/v5.0.8/js/all.js');
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/main.js', array ( 'jquery' ), time(), true);
    if (is_home()) {
        wp_enqueue_script('youtube-api-js', get_template_directory_uri() . '/assets/youtube-api.js', array ( 'jquery' ), time(), true);
    }
    wp_enqueue_script('slick-slider-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.8/slick.min.js');
}
add_action('wp_enqueue_scripts', 'theme_js');


function theme_setup() {

	// Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );
    
    /*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'widgets'
	) );

    // Nav Menus
    register_nav_menus(array(
        'primary' => 'Menu Primário',
        'category' => 'Menu Categorias',
        'footer' => 'Menu Rodapé'
    ));

    // Posts Images
    add_theme_support( 'post-thumbnails' ); 
    add_image_size( 'small_thumbnail', 280,200, true);
    add_image_size( 'banner_image', 920,300, true);

    // Add Header Support
    $headerDefaults = array(
        'flex-width'    => true,
        'width'         => 9999,
        'flex-height'   => true,
        'height'        => 500,
        'default-image' => get_template_directory_uri() . '/images/header.jpg',
        'uploads'       => true,
    );
    add_theme_support( 'custom-header', $headerDefaults );

	// Enable support for Post Formats. See: https://codex.wordpress.org/Post_Formats
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );
    
	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
    add_theme_support( 'title-tag' );

    // Enable styles on editor
    add_editor_style( 'editor-styles.css' );

}

add_action('after_setup_theme', 'theme_setup');


// Filter the except length to x words.
function custom_excerpt_length() {
    return 15;
}

add_filter( 'excerpt_length', 'custom_excerpt_length');


// Widgets
function loadWidgets() {
    register_sidebar( array(
        'name' => 'Widget Lateral',
        'id' => 'asidewidget'
    ));

    register_sidebar( array(
        'name' => 'Widget Rodapé 3',
        'id' => 'footerwidget3'
    ));

    register_sidebar( array(
        'name' => 'Widget Rodapé 2',
        'id' => 'footerwidget2'
    ));

    register_sidebar( array(
        'name' => 'Widget Rodapé 1',
        'id' => 'footerwidget1'
    ));
}

add_action('widgets_init', 'loadWidgets');


function change_tag_cloud_font_sizes( array $args ) {
    $args['smallest'] = '10';
    $args['largest'] = '10';

    return $args;
}

add_filter( 'widget_tag_cloud_args', 'change_tag_cloud_font_sizes');

//Exclude pages from WordPress Search
if (!is_admin()) {
    function wpb_search_filter($query) {
        if ($query->is_search) {
            $query->set('post_type', 'post');
        }
        return $query;
    }

    add_filter('pre_get_posts','wpb_search_filter');

};

