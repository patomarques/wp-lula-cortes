<?php get_header();

global $post;
$post_slug = $post->post_name;

?>
<section id="page-content" class="container content-sections">
  <div class="row pt-5 mb-5">
    <div class="col-12 mt-5 pt-3">
    <img src="<?= get_site_url() . '/wp-content/themes/wp-lula-cortes-child/assets/img/title-png/' . $post_slug . '.png' ?>" alt="<?= get_the_title() ?>" class="mx-auto d-block">
    </div>
  </div>
  <div class="row mt-3">
    <div class="col-12 text-justify">
      <p><?php the_content(); ?></p>
    </div>
  </div>
</section>

<?php get_template_part('template-part/livros'); ?>

<?php get_template_part('template-part/zines'); ?>

<?php get_template_part('template-part/audiobooks'); ?>

<?php get_template_part('template-part/pdfs'); ?>

<script>
	jQuery(document).ready(function() {
		jQuery('.menu-main').addClass('shrink menu-main--dark');
	});
</script>

<?php get_footer(); ?>
