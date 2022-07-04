<?php
get_header();

global $post;
$post_slug = $post->post_name;

$argsVideos = array('post_type' => 'videos', 'orderby' => 'Ordem', 'order' => 'ASC', 'posts_per_page' => -1);
$queryVideos = new WP_Query($argsVideos);

?>

<section id="page-content" class="container content-sections">
  <div class="row mt-5 mb-5">
    <div class="col-12 mt-5">
      <img src="<?= get_site_url() . '/wp-content/themes/wp-lula-cortes-child/assets/img/title-png/videos.png' ?>" alt="Vídeos" class="mx-auto d-block">
    </div>
  </div>
</section>

<div class="container-full content-slick-squares mt-2 mb-5">
    <div id="slick-videos" class="slick-squares slick-videos mb-5">

      <?php while ($queryVideos->have_posts()) : $queryVideos->the_post(); ?>

      <?php
        $thumbs = get_the_post_thumbnail_url();

        if($thumbs == ''){
          $thumbs = get_site_url() . '/wp-content/uploads/2022/06/no-image.jpg';
        }
      ?>

      <div class="slick-squares__item">
        <div class="slick-squares__item__text">
          <a href="javascript:void(0)" class="slick-squares__link"
            data-toggle="modal" data-target="#modal-videos"
            data-video-url="<?= get_post_field('youtube-link') ?>">
            <p class="slick-squares__title"><?= get_the_title() ?></p>
          </a>
        </div>
        <a href="javascript:void(0)"
          target="_black" rel="noopener" title="<?= get_the_title() ?>"
          class="slick-squares__box-image slick-squares__link"
          data-toggle="modal" data-target="#modal-videos"
          data-video-url="<?= get_post_field('youtube-link') ?>"
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

  <!-- Modal -->
<div class="modal fade" id="modal-videos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

<?php get_footer(); ?>
