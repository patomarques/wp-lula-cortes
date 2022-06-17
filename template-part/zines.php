<?php
  $argsZines = array('post_type' => 'zines', 'orderby' => 'Ordem', 'order' => 'ASC', 'posts_per_page' => -1);
  $queryZines = new WP_Query($argsZines);
?>

<div class="container-full content-slick-squares mt-5 mb-5">
  <div id="slick-zines" class="slick-squares mb-5">

    <?php while ($queryZines->have_posts()) : $queryZines->the_post(); ?>

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
