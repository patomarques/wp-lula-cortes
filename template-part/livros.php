<?php
  $argsLivros = array('post_type' => 'livros', 'orderby' => 'ano-lancamento', 'order' => 'ASC', 'posts_per_page' => -1);
  $queryLivros = new WP_Query($argsLivros);
?>

<link href=https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

<section id="section-livros" class="container section-nav mb-5">

  <div class="accordion accordion-flush" id="accordionFlushExample">

    <?php
      $counter = 0;
      while ($queryLivros->have_posts()) : $queryLivros->the_post(); ?>

        <div class="accordion-item" data-ano-lancamento="<?= get_post_field('ano-lancamento') ?>">
          <h2 class="accordion-header" id="flush-heading<?= $counter ?>">
            <button class="accordion-button collapsed" type="button"
              data-bs-toggle="collapse" data-bs-target="#flush-collapse<?= $counter ?>"
              aria-expanded="false" aria-controls="flush-collapse<?= $counter ?>">
              <b><?= the_title() ?></b>
            </button>
          </h2>
          <div id="flush-collapse<?= $counter ?>" class="accordion-collapse collapse"
            aria-labelledby="flush-heading<?= $counter ?>"
            data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
              <?= the_content() ?>
            </div>
          </div>
        </div>

    <?php
      $counter++;
      endwhile;
      wp_reset_postdata();
    ?>

  </div>

</section>
