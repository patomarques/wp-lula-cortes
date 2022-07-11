<?php get_header();
global $post;
$post_slug = $post->post_name;
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<div class="pt-3 pb-5"></div>

<div class="container mt-4 mb-2">
  <div class="row">
    <div class="col-12 text-center">
    <img src="<?= get_site_url() . '/wp-content/themes/wp-lula-cortes-child/assets/img/title-png/' . $post_slug . '.png' ?>" alt="<?= get_the_title() ?>" class="mx-auto d-block">
    </div>
  </div>
</div>

<?php get_template_part('template-part/quadros'); ?>

<?php get_footer(); ?>
