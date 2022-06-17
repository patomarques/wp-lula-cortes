<?php
  $argsGaleria = array('post_type' => 'galeria', 'orderby' => 'Ordem', 'order' => 'ASC', 'posts_per_page' => -1);
  $queryGaleria = new WP_Query($argsGaleria);
?>

<section id="section-" class="container-full section-content">
  <div class="container mb-3">
    <div class="row">
      <div class="col-12">
        <h3 class="subtitle-section">Galeria</h3>
      </div>
    </div>
  </div>
  <div class="container-full content-slick-squares mb-5">
    <div id="slick-galeria" class="slick-squares">

      <?php while ($queryGaleria->have_posts()) : $queryGaleria->the_post(); ?>

      <div class="slick-squares__item">
        <div class="slick-squares__item__text">
          <a href="/" class="slick-squares__link">
            <p class="slick-squares__title">Title <?= get_the_title() ?></p>
            <!-- <p class="slick-squares__subtitle">2000</p> -->
          </a>
        </div>
        <a href="/" class="slick-squares__box-image slick-squares__link"
          style="background-image: url(<?= get_the_post_thumbnail_url() ?>)">
          <div class="slick-squares__box-image__spacer"></div>
        </a>
      </div>

      <?php
			  endwhile;
			  wp_reset_postdata();
			?>

    </div>
  </div>
</section>
