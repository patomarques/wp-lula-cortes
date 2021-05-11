<?php 

wp_enqueue_style( 'lulacortes-css', get_theme_file_uri() . '/assets/scss/lulacortes.css');

wp_enqueue_script( 'lulacortes-js', get_theme_file_uri() . '/assets/js/lulacortes.js', array('jquery'), '1.0', true );

function hide_admin_bar(){ return false; }
add_filter( 'show_admin_bar', 'hide_admin_bar' );

add_filter('show_admin_bar', '__return_false');    