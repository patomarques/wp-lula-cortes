<?php get_header();

global $post;
$post_slug = $post->post_name;

?>

<div class="container page-music list-content mt-5 pt-5 mb-5">
  <div class="row mt-5 mb-5">
    <div class="col-12 text-center mt-4">
      <img src="<?= get_site_url() . '/wp-content/themes/wp-lula-cortes-child/assets/img/title-png/' . $post_slug . '.png' ?>" alt="<?= get_the_title() ?>" class="mx-auto d-block">
    </div>
  </div>
</div>

<div id="section-nav" class="container-full bg-white section-nav--fixed">
  <div class="container breadcrumbs-nav">
    <div class="row">
      <div class="col-12">

        <nav id="navMenuFixed" class="navMenuFixed">
          <ul class="list-nav list-inline">
              <li class="list-nav__item list-inline-item">
                <a href="#section-project" class="list-nav__link">
                O Projeto
                </a>
              </li>
              <li class="list-nav__item list-inline-item">
                <a href="#section-galeria" class="list-nav__link">
                Galeria
                </a>
              </li>
              <li class="list-nav__item list-inline-item">
                <a href="#section-mergulhos" class="list-nav__link">
                Mergulhos
                </a>
              </li>
              <li class="list-nav__item list-inline-item">
                <a href="#section-webnarios" class="list-nav__link">
                Webnários
                </a>
              </li>
              <li class="list-nav__item list-inline-item">
                <a href="#section-team" class="list-nav__link">
                Equipe
                </a>
              </li>
            </ul>
        </nav>
      </div>
    </div>
  </div>
</div>

<section id="section-project" class="section-nav container mt-3 mb-5">
  <div class="row">
    <div class="col-12 text-left">
      <p><?php the_content(); ?></p>
    </div>
  </div>
</section>

<?php get_template_part('template-part/atipicos-galeria'); ?>

<section id="section-mergulhos" class="section-nav container section-content">
  <div class="row mt-5">
    <div class="col-12">
      <h3 class="subtitle-section">Mergulhos</h3>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <p>A curadoria dessa exposição virtual pretende apresentar ao público parte da série de pinturas intitulada Atípicos, de autoria de Lula Cortês, que está contida em acervo particulares – uma rede de amigos, sustentada por amores, paixões e muita amizade – que foi acionada por meio da realização de uma investigação que derivou em uma série de atividades, ações e sobretudo uma pesquisa a acerca da produção plástica do artista multidisciplinar Lula Cortês. [...]
      </p>
      <a class="btn btn-dark" href="<?= get_site_url() . '/atipicos/mergulhos' ?>">
        Ver mais
      </a>
    </div>
  </div>
</section>

<?php get_template_part('template-part/webnarios'); ?>

<?php get_template_part('template-part/team-members'); ?>

<?php get_footer(); ?>
