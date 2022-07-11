<?php
  $argsLivros = array('post_type' => 'livros', 'orderby' => 'Ordem', 'order' => 'ASC', 'posts_per_page' => -1);
  $queryLivros = new WP_Query($argsLivros);
?>

<div class="container-full content-slick-squares mt-5 mb-5">
  <div id="slick-livros" class="slick-squares mb-5">

    <?php while ($queryLivros->have_posts()) : $queryLivros->the_post(); ?>

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

    </div>

    <?php
      endwhile;
      wp_reset_postdata();
    ?>

  </div>
</div>
