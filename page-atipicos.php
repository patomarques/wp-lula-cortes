<?php get_header();

global $post;
$post_slug = $post->post_name;

?>

<section class="container-full page-music list-content mt-5 pt-5 mb-5">
	<div class="container">
		<div class="row mt-4 mb-5">
			<div class="col-12 text-center">
				<img src="<?= get_site_url() . '/wp-content/themes/wp-lula-cortes-child/assets/img/title-png/' . $post_slug . '.png' ?>" alt="<?= get_the_title() ?>" class="mx-auto d-block">
			</div>
		</div>
	</div>
</section>

<section id="page-content" class="container mt-3 mb-5">
  <div class="row">
    <div class="col-12 text-justify">
      <p><?php the_content(); ?></p>
    </div>
  </div>
</section>

<?php get_template_part('template-part/atipicos-galeria'); ?>

<section id="section-mergulhos" class="container section-content">
  <div class="row mt-5">
    <div class="col-12">
      <h3 class="subtitle-section">Mergulhos</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <p>A curadoria dessa exposição virtual pretende apresentar ao público parte da série de pinturas intitulada Atípicos, de autoria de Lula Cortês, que está contida em acervo particulares – uma rede de amigos, sustentada por amores, paixões e muita amizade – que foi acionada por meio da realização de uma investigação que derivou em uma série de atividades, ações e sobretudo uma pesquisa a acerca da produção plástica do artista multidisciplinar Lula Cortês. [...]
      </p>
      <a class="btn btn-dark" href="https://docs.google.com/document/d/1r1DF8wcvcnxGIdZna6uzOTNw6UoCZ4HioIc6YJ-GV9g/edit?usp=sharing">
        Ver mais
      </a>
    </div>
  </div>
</section>

<?php get_template_part('template-part/webnarios'); ?>

<?php get_template_part('template-part/team-members'); ?>

<?php get_footer(); ?>
