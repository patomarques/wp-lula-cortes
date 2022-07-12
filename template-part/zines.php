<?php
  $argsZines = array('post_type' => 'zines', 'orderby' => 'Ordem', 'order' => 'ASC', 'posts_per_page' => -1);
  $queryZines = new WP_Query($argsZines);
?>

<section id="section-zines" class="section-nav container section-content">
  <div class="row mt-5">
    <div class="col-12">
      <h3 class="subtitle-section">Zines</h3>
    </div>
  </div>

  <?php while ($queryZines->have_posts()) : $queryZines->the_post(); ?>

    <div class="row">
      <div class="col-12">
        <p><?= get_the_content() ?></p>
        <a class="btn btn-dark" href="<?= get_post_field('ver-mais') ?>" target="_blank">
          Ver mais
        </a>
      </div>
    </div>

  <?php
      endwhile;
      wp_reset_postdata();
  ?>

</section>


