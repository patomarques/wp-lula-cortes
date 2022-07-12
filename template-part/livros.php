<?php
  $argsLivros = array('post_type' => 'livros', 'orderby' => 'ano-lancamento', 'order' => 'ASC', 'posts_per_page' => -1);
  $queryLivros = new WP_Query($argsLivros);
?>

<link href=https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

<div class="container mb-5">

  <div class="accordion accordion-flush" id="accordionFlushExample">

    <?php while ($queryLivros->have_posts()) : $queryLivros->the_post(); ?>

    <div class="accordion-item" data-ano-lancamento="<?= get_post_field('ano-lancamento') ?>">
      <h2 class="accordion-header" id="flush-heading<?= get_post_field('ano-lancamento') ?>">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?= get_post_field('ano-lancamento') ?>" aria-expanded="false" aria-controls="flush-collapse<?= get_post_field('ano-lancamento') ?>">
          <b><?= the_title() ?></b>
        </button>
      </h2>
      <div id="flush-collapse<?= get_post_field('ano-lancamento') ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading<?= get_post_field('ano-lancamento') ?>" data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">
          <?= the_content() ?>
        </div>
      </div>
    </div>

    <?php
      endwhile;
      wp_reset_postdata();
    ?>

  </div>

</div>
