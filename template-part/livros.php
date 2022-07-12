<?php
  $argsLivros = array('post_type' => 'livros', 'orderby' => 'Ordem', 'order' => 'ASC', 'posts_per_page' => -1);
  $queryLivros = new WP_Query($argsLivros);
?>

<div class="container mb-5">


  <ul id="livros-livografia" class="mb-5">

    <?php while ($queryLivros->have_posts()) : $queryLivros->the_post(); ?>

      <li>
        <?= get_the_title() ?>
      </li>

    <?php
      endwhile;
      wp_reset_postdata();
    ?>

    </ul>
</div>
