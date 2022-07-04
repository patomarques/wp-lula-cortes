<?php
/*
Template Name: single-musicas
*/

get_header(); ?>

<section id="page-content" class="container section-content mt-5 pt-5">
  <div class="row mt-3 mb-5 pb-5">
    <div class="col-12 text-center">
      <img src="<?= get_site_url() . '/wp-content/themes/wp-lula-cortes-child/assets/img/title-png/musica.png' ?>" alt="Músicas (Álbuns)" class="mx-auto d-block">
    </div>
  </div>
  <div class="row hidden">
    <div class="col-12">
      <ul class="breadcrumbs list-inline">
        <li class="breadcrumbs__item list-inline-item">
          <a class="breadcrumbs__link" href="/">Início</a>
        </li>
        <li class="breadcrumbs__item list-inline-item">
          <a href="/musicas" class="breadcrumbs__link">Música</a>
        </li>
        <li class="breadcrumbs__item list-inline-item breadcrumbs__item--actived">
          <?= get_the_title() ?>
        </li>
      </ul>
    </div>
  </div>
  <div class="row">
    <div class="col-12 col-md-8">
      <div class="pr-3">
        <h2 class="title-album mb-3">
          <?= get_the_title() ?>
        </h2>

        <p class="text-justify">
          <?php echo get_the_content(); ?>
        </p>

        <div class="video-container">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/Ro-qKcF4Xws" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-4">
      <div class="square mb-2">
        <a href="<?= get_permalink() ?>" class="content"
          style="background-image: url(<?= get_the_post_thumbnail_url() ?>)"
          title="<?= get_the_title()?>" alt="Imagem: <?= get_the_title()?>">
        </a>
      </div>

      <object controls="true" src="<?php echo get_post_field('youtube-link'); ?>" type="video/mp4" width="100%" height="20vh"></object>

      <div class="album-tracks">
        <?php
          $excerpt = apply_filters('the_content',  ( get_post(get_the_ID())->post_excerpt) );
          echo $excerpt;
        ?>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>
