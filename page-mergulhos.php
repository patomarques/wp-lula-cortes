<?php

get_header();

global $post;
$post_slug = $post->post_name;

$argsMergulhos = array('post_type' => 'mergulhos', 'orderby' => 'ordem', 'order' => 'ASC', 'posts_per_page' => -1);
$queryMergulhos = new WP_Query($argsMergulhos);
?>

<link href=https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

<section id="page-content" class="container content-sections">
  <div class="row pt-5 mb-5">
    <div class="col-12 mt-5 text-center">
        <h1>Mergulhos</h1>
    </div>
  </div>
  <div class="row mt-3 mb-5 hidden">
    <div class="col-12 text-justify">
      <p><?//php the_content(); ?></p>
    </div>
  </div>
</section>

<section id="section-mergulhos" class="container">

  <div class="accordion accordion-flush" id="accordionMergulhos">

    <?php $counter = 0;?>

    <?php while ($queryMergulhos->have_posts()) : $queryMergulhos->the_post(); ?>

    <div class="accordion-item">
      <h2 class="accordion-header" id="flush-heading<?= $counter ?>">
        <button class="accordion-button collapsed" type="button"
          data-bs-toggle="collapse" data-bs-target="#flush-collapse<?= $counter ?>"
          aria-expanded="false" aria-controls="flush-collapse<?= $counter ?>">
          <b><?= the_title() ?></b>
        </button>
      </h2>
      <div id="flush-collapse<?= $counter ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?= $counter ?>" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">
          <?= the_content() ?>
        </div>
      </div>
    </div>

    <?php
      $counter++;
      endwhile;
      wp_reset_postdata();
    ?>

  </div>

</section>

<?php get_footer(); ?>
