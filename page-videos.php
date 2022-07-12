<?php
/*
Template Name: videos
*/

get_header();

global $post;
$post_slug = $post->post_name;

$argsVideos = array('post_type' => 'videos', 'orderby' => 'Ordem', 'order' => 'ASC', 'posts_per_page' => -1);
$queryVideos = new WP_Query($argsVideos);

?>

<section id="page-content" class="container content-sections">
  <div class="row pt-5 mb-5">
    <div class="col-12 mt-5">
    <img src="<?= get_site_url() . '/wp-content/themes/wp-lula-cortes-child/assets/img/title-png/' . $post_slug . '.png' ?>" alt="<?= get_the_title() ?>" class="mx-auto d-block">
    </div>
  </div>
  <div class="row mt-3 mb-5">
    <div class="col-12 text-justify">
      <p><?php the_content(); ?></p>
    </div>
  </div>
</section>

<div class="container-full mt-2 mb-5">
    <div id="grid-videos" class="grid-rectangles mb-5">

      <div class="row">

        <?php while ($queryVideos->have_posts()) : $queryVideos->the_post(); ?>

        <?php
          $thumbs = get_the_post_thumbnail_url();

          if($thumbs == ''){
            $thumbs = get_site_url() . '/wp-content/uploads/2022/06/no-image.jpg';
          }
        ?>

        <div class="col-xs-12 col-sm-6 col-md-4 mb-4 p-0">
          <h3 class="title-section-medium mb-1 pl-3 pr-3 text-center">
            <?= get_the_title() ?>
          </h3>

          <a href="<?= get_post_field('youtube-link') ?>"
            target="_black" rel="noopener" title="<?= get_the_title() ?>"
            class="grid-rectangles__image grid-rectangles__link"
            data-toggle="modal" data-target="#modal-videos"
            data-video-url="<?= get_post_field('youtube-link') ?>"
            data-title="<?= the_title() ?>"
            style="background-image: url(<?=  $thumbs ?>)">
          </a>
        </div>

        <?php
          endwhile;
          wp_reset_postdata();
        ?>
      </div>

    </div>
  </div>

<div class="modal fade" id="modal-videos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
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
