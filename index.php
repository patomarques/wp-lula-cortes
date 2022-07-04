<?php

/**
 * Template Name: Blog Index
 * Description: The template for displaying the Blog index /blog.
 *
 */

get_header();

global $post;
$post_slug = $post->post_name;

$page_id = get_option( 'page_for_posts' );

//die($post->post_type);

if($post->post_type) {
  get_template_part('content', 'videos');
}else{
  get_template_part('content', 'default');
}
?>
