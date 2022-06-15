<?php
  $argsWebnarios = array('post_type' => 'webminarios', 'orderby' => 'Ordem', 'order' => 'ASC', 'posts_per_page' => -1);
  $queryWebnarios = new WP_Query($argsWebnarios);
?>

<section id="section-" class="container-full section-content">
  <div class="container">
    <div class="row mt-5 pt-5">
      <div class="col-12">
        <h3 class="subtitle-section">Webnários</h3>
      </div>
    </div>
  </div>
  <div class="container-full content-slick-squares mt-2 mb-5">
    <div id="slick-webnarios" class="slick-squares mb-5">

      <?php while ($queryWebnarios->have_posts()) : $queryWebnarios->the_post(); ?>

      <?php
        $thumbs = get_the_post_thumbnail_url();

        if($thumbs == ''){
          $thumbs = get_site_url() . '/wp-content/uploads/2022/06/no-image.jpg';
        }
      ?>

      <div class="slick-squares__item">
        <div class="slick-squares__item__text">
          <a href="/" class="slick-squares__link">
            <p class="slick-squares__title"><?= get_the_title() ?></p>
            <!-- <p class="slick-squares__subtitle">2000</p> -->
          </a>
        </div>
        <a href="<?= get_the_content() ?>"
          target="_black" rel="noopener" title="<?= get_the_title() ?>"
          class="slick-squares__box-image slick-squares__link"
          style="background-image: url(<?=  $thumbs ?>)">
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
