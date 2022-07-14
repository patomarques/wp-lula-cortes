<?php
  $argsAudioBooks = array('post_type' => 'audiobooks', 'orderby' => 'Ordem', 'order' => 'ASC', 'posts_per_page' => -1);
  $queryAudioBooks = new WP_Query($argsAudioBooks);
?>
<section id="section-audiobooks" class="section-nav container section-content">
  <div class="row mt-5 mb-3">
    <div class="col-12">
      <h3 class="subtitle-section">Audiobooks</h3>
    </div>
  </div>


  <div class="row">

      <?php while ($queryAudioBooks->have_posts()) : $queryAudioBooks->the_post(); ?>

      <div class="col-12 col-md-6">
        <h3 class="title-section-medium"><?= the_title() ?></h3>
        <p><?= the_content() ?></p>
      </div>

      <?php
          endwhile;
          wp_reset_postdata();
      ?>

  </div>
</section>
