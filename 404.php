<?php
/**
 * Template Name: Not found
 * Description: Page template 404 Not found
 *
 */

  get_header();
?>

<div id="page-content" class="container content-sections mt-5 pt-2">
  <div class="row mt-5 pt-5">
    <div class="col-sm-12 col-md-6 offset-md-3 text-center">
    <img src="<?= get_stylesheet_directory_uri() ?>/assets/img/404.png"
      alt="Erro 404 - Página Não encontrada"
      title="Erro 404 - Página Não encontrada"
      class="img-fluid m-auto d-block">

  		<h2 class="title-not-found">Página não encontrada!</h2>

      <a href="/" class="btn btn-link mt-5" rel="noopener noreferrer"><< Voltar ao Início</a>
    </div>
  </div>
</div>

<script>
	jQuery(document).ready(function() {
		jQuery('.menu-main').addClass('shrink menu-main--dark');
	});
</script>

<?php get_footer(); ?>
