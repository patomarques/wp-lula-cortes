<?php
  $argsGaleria = array('post_type' => 'galeria', 'orderby' => 'Ordem', 'order' => 'ASC', 'posts_per_page' => -1);
  $queryGaleria = new WP_Query($argsGaleria);

  $audioDescriptions = [];
?>

<section id="section-galeria" class="section-nav container-full section-content">
  <div class="container mb-3">
    <div class="row">
      <div class="col-12">
        <h3 class="subtitle-section">Galeria</h3>
      </div>
    </div>
  </div>
  <div class="container-full content-slick-squares mb-5">
    <div id="slick-galeria" class="slick-squares gallery-fullscreen">

      <?php while ($queryGaleria->have_posts()) : $queryGaleria->the_post(); ?>

      <div class="slick-squares__item">
        <div class="slick-squares__item__text">
          <!-- <a href="<?= get_the_post_thumbnail_url() ?>" class="slick-squares__link" data-lightbox="<?= get_the_post_thumbnail_url() ?>" data-title="<?= get_the_title() ?>"> -->
            <p class="slick-squares__title"><?= get_the_title() ?></p>
            <!-- <p class="slick-squares__subtitle">2000</p> -->
          <!-- </a> -->
        </div>
        <a href="<?= get_the_post_thumbnail_url() ?>"
          class="slick-squares__box-image slick-squares__link"
          data-fslightbox="lightbox-galeria"
          data-id="<?= get_the_id() ?>"
          data-title="<?= get_the_title() ?>"
          data-audio="<?= get_post_field('audio-descricao') ?>"
          style="background-image: url(<?= get_the_post_thumbnail_url() ?>)">
          <div class="slick-squares__box-image__spacer"></div>
        </a>
      </div>

      <?php

        $audioDescriptions[get_the_id()] = get_post_field('audio-descricao');
			  endwhile;
			  wp_reset_postdata();
			?>

    </div>
  </div>
</section>

<div class="container-full player-content hidden">
  <div class="container">
    <div class="row">
      <div class="col-10 col-sm-9">
        <audio id="player-audio" controls="controls">
          <source src="" />
          Ops, seu navegador não suporta html5!
        </audio>
      </div>
      <div class="col-2 col-sm-3 text-right hidden">
        <button class="btn btn-light">Ficha Técnica</button>
      </div>
    </div>
  </div>
</div>
