<?php
  $argsPdfs = array('post_type' => 'pdfs', 'orderby' => 'Ordem', 'order' => 'ASC', 'posts_per_page' => -1);
  $queryPdfs = new WP_Query($argsPdfs);
?>

<section id="section-zines" class="section-nav container section-content">
  <div class="row mt-5">
    <div class="col-12">
      <h3 class="subtitle-section">PDF's</h3>
    </div>
  </div>


  <div class="row">

      <?php while ($queryPdfs->have_posts()) : $queryPdfs->the_post(); ?>

      <div class="col-12">
        <p><?= the_content() ?></p>

        <a href="<?= get_post_field('ver-mais') ?>" class="btn btn-dark" target="_blank">Ver mais</a>
      </div>

      <?php
          endwhile;
          wp_reset_postdata();
      ?>

  </div>
</section>
