<?php
  $argsQuadros = array('post_type' => 'quadros', 'orderby' => 'Ordem', 'order' => 'ASC', 'posts_per_page' => -1);
  $queryQuadros = new WP_Query($argsQuadros);
?>

<div class="container-full content-slick-squares mt-5 mb-5">
  <div id="slick-quadros" class="slick-squares mb-5">

    <?php while ($queryQuadros->have_posts()) : $queryQuadros->the_post(); ?>

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
        </a>
      </div>
      <a href="/"
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
