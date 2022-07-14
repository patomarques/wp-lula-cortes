<?php
  $argsWebnarios = array('post_type' => 'webminarios', 'orderby' => 'Ordem', 'order' => 'ASC', 'posts_per_page' => -1);
  $queryWebnarios = new WP_Query($argsWebnarios);
?>

<section id="section-webnarios" class="section-nav container-full section-content">
  <div class="container">
    <div class="row mt-5 pt-5">
      <div class="col-12">
        <h3 class="subtitle-section">Webnários</h3>
      </div>
    </div>
  </div>
  <div class="container-full content-slick-squares mt-2 mb-5">
    <div id="slick-webnarios" class="slick-squares mb-5">

      <?php while ($queryWebnarios->have_posts()) : $queryWebnarios->the_post(); ?>

      <?php
        $thumbs = get_the_post_thumbnail_url();

        if($thumbs == ''){
          $thumbs = get_site_url() . '/wp-content/uploads/2022/06/no-image.jpg';
        }
      ?>

      <div class="slick-squares__item">
        <div class="slick-squares__item__text">
          <p class="slick-squares__title"><?= get_the_title() ?></p>
        </div>
        <a href="javascript:void(0)"
          rel="noopener" title="<?= get_the_title() ?>"
          class="slick-squares__box-image slick-squares__link"
          data-toggle="modal" data-target="#modal-webnarios"
          style="background-image: url(<?=  $thumbs ?>)"
          data-youtube-link="<?= get_post_field('youtube-link') ?>">
          <div class="slick-squares__box-image__spacer"></div>
        </a>
      </div>

      <?php
			  endwhile;
			  wp_reset_postdata();
			?>

    </div>
  </div>
</section>

<!-- Modal -->
<div class="modal fade" id="modal-webnarios" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title hidden" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="video-container">
          <iframe width="560" height="315" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
      <div class="modal-footer hidden">
      </div>
    </div>
  </div>
</div>
