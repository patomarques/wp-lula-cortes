<?php 

wp_enqueue_style( 'lulacortes-css', get_theme_file_uri() . '/assets/scss/lulacortes.css');

wp_enqueue_script( 'lulacortes-js', get_theme_file_uri() . '/assets/js/lulacortes.js', array('jquery'), '1.0', true );

function hide_admin_bar(){ return false; }
add_filter( 'show_admin_bar', 'hide_admin_bar' );

add_filter('show_admin_bar', '__return_false');    

function create_custom_post_type() {
 
    register_post_type( 'banners',
        array(
            'labels' => array(
                'name' => __( 'Banner Sliders' ),
                'singular_name' => __( 'Banner Slider' )
            ),
            'public' => true,
            'has_archive' => true,
            //'rewrite' => array('slug' => 'banners'),
            //'show_in_rest' => true,
            'supports' => array( 'title', 'author', 'thumbnail', 'custom-fields'), //'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields'
            //'menu_position'       => 1,
            'exclude_from_search' => true 
        )
    );

    register_post_type( 'home-contents',
        array(
            'labels' => array(
                'name' => __( 'Home Infos' ),
                'singular_name' => __( 'Home Info' )
            ),
            'public' => true,
            'has_archive' => true,
            //'rewrite' => array('slug' => 'banners'),
            //'show_in_rest' => true,
            'supports' => array( 'title', 'author', 'editor', 'thumbnail', 'custom-fields'), //'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields'
            //'menu_position'       => 1,
            'exclude_from_search' => true 
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_custom_post_type' );
