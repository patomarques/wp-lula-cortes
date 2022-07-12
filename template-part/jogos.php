<?php
  $argsJogos = array('post_type' => 'jogos', 'orderby' => 'Ordem', 'order' => 'ASC', 'posts_per_page' => -1);
  $queryJogos = new WP_Query($argsJogos);
?>

<section id="section-zines" class="section-nav container section-content mt-5 mb-5 pb-5">
  <div class="row mt-5">
    <div class="col-12">
      <h3 class="subtitle-section">Jogo</h3>
    </div>
  </div>


  <div class="row">

      <?php while ($queryJogos->have_posts()) : $queryJogos->the_post(); ?>

      <div class="col-12">
        <p><?= the_content() ?></p>

        <a href="<?= get_post_field('ver-mais') ?>" class="btn btn-dark" target="_blank">Jogar</a>
      </div>

      <?php
          endwhile;
          wp_reset_postdata();
      ?>

  </div>
</section>
