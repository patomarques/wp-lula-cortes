<?php

get_header();

global $post;
$post_slug = $post->post_name;

$argsMergulhos = array('post_type' => 'mergulhos', 'orderby' => 'ordem', 'order' => 'ASC', 'posts_per_page' => -1);
$queryMergulhos = new WP_Query($argsMergulhos);

?>

<section id="page-content" class="container content-sections">
  <div class="row pt-5 mb-5">
    <div class="col-12 mt-5">
        <h1>Mergulhos</h1>
    </div>
  </div>
  <div class="row mt-3 mb-5">
    <div class="col-12 text-justify">
      <p><?php the_content(); ?></p>
    </div>
  </div>
</section>

<section id="section-mergulhos" class="container">
    
    <?php while ($queryMergulhos->have_posts()) : $queryMergulhos->the_post(); ?>
    
    <div class="row">
        <div class="col-12">
            <h3 class="title-section"><?= the_title() ?></h3>

            <p><?= the_content() ?></p>
        </div>
    </div>

    <?php
        endwhile;
        wp_reset_postdata();
      ?>


</section>

<?php get_footer(); ?>
