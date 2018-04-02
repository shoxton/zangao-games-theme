<?php

function theme_styles() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap_css', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
    wp_enqueue_style('google-custom-font', '//fonts.googleapis.com/css?family=Roboto:300,400,700|Titillium+Web:300,400,700');
}

add_action('wp_enqueue_scripts', 'theme_styles');

function theme_js() {
    wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.2.1.slim.min.js');
    wp_enqueue_script('bootstrap_js', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js');
    wp_enqueue_script('font-awesome', '//use.fontawesome.com/releases/v5.0.8/js/all.js');
    wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/main.js', array ( 'jquery' ), 1.1, true);
}

add_action('wp_enqueue_scripts', 'theme_js');


// Nav Menus

register_nav_menus(array(
    'primary' => 'Menu Primário',
    'category' => 'Menu Categorias',
    'footer' => 'Menu Rodapé'
));

add_theme_support( 'post-thumbnails' ); 
add_image_size( 'small_thumbnail', 280,200, true);
add_image_size( 'banner_image', 920,300, true);

// Posts

/**
 * Filter the except length to 10 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 10;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );


// Widgets

function loadWidgets() {
    register_sidebar( array(
        'name' => 'Widget Lateral',
        'id' => 'asidewidget'
    ));

    register_sidebar( array(
        'name' => 'Widget Rodapé',
        'id' => 'footerwidget'
    ));
}

add_action('widgets_init', 'loadWidgets');

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

// Add Header Support

$defaults = array(
	'flex-width'    => true,
	'width'         => 9999,
	'flex-height'   => true,
	'height'        => 500,
    'default-image' => get_template_directory_uri() . '/images/header.jpg',
    'uploads'       => true,
);
add_theme_support( 'custom-header', $defaults );

