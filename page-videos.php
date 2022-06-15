<?php get_header();

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

<div class="container-full content-slick-squares mt-2 mb-5">
    <div id="slick-videos" class="slick-squares mb-5">

      <?php while ($queryVideos->have_posts()) : $queryVideos->the_post(); ?>

      <?php
        $thumbs = get_the_post_thumbnail_url();

        if($thumbs == ''){
          $thumbs = get_site_url() . '/wp-content/uploads/2022/06/no-image.jpg';
        }
      ?>

      <div class="slick-squares__item">
        <div class="slick-squares__item__text">
          <a href="<?= get_post_field('youtube-link') ?>" class="slick-squares__link">
            <p class="slick-squares__title"><?= get_the_title() ?></p>
            <!-- <p class="slick-squares__subtitle">2000</p> -->
          </a>
        </div>
        <a href="<?= get_post_field('youtube-link') ?>"
          target="_black" rel="noopener" title="<?= get_the_title() ?>"
          class="slick-squares__box-image slick-squares__link"
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

<script>
	jQuery(document).ready(function() {
		jQuery('.menu-main').addClass('shrink menu-main--dark');
	});
</script>

<?php get_footer(); ?>
