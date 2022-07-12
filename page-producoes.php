<?php get_header();

global $post;
$post_slug = $post->post_name;

?>

<div id="section-nav" class="container-full bg-white section-nav--fixed">
  <div class="container breadcrumbs-nav">
    <div class="row">
      <div class="col-12">

        <nav id="navMenuFixed" class="navMenuFixed">
          <ul class="list-nav list-inline">
              <li class="list-nav__item list-inline-item">
                <a href="#section-livros" class="list-nav__link">
                Livros
                </a>
              </li>
              <li class="list-nav__item list-inline-item">
                <a href="#section-zines" class="list-nav__link">
                Zine
                </a>
              </li>
              <li class="list-nav__item list-inline-item">
                <a href="#section-jogo" class="list-nav__link">
                Jogo
                </a>
              </li>
              <li class="list-nav__item list-inline-item">
                <a href="#section-audiobooks" class="list-nav__link">
                Audiobooks
                </a>
              </li>
              <li class="list-nav__item list-inline-item">
                <a href="#section-pdfs" class="list-nav__link">
                PDF's
                </a>
              </li>

            </ul>
        </nav>
      </div>
    </div>
  </div>
</div>

<section id="page-content" class="container content-sections">
  <div class="row pt-5 mt-4 mb-3">
    <div class="col-12 mt-5 pt-4">
    <img src="<?= get_site_url() . '/wp-content/themes/wp-lula-cortes-child/assets/img/title-png/' . $post_slug . '.png' ?>" alt="<?= get_the_title() ?>" class="mx-auto d-block">
    </div>
  </div>
  <div class="row mb-3">
    <div class="col-12 text-justify">
      <p><?php the_content(); ?></p>
    </div>
  </div>
</section>

<?php get_template_part('template-part/livros'); ?>

<?php get_template_part('template-part/zines'); ?>

<?php get_template_part('template-part/jogos'); ?>

<?php get_template_part('template-part/audiobooks'); ?>

<?php get_template_part('template-part/pdfs'); ?>

<?php get_footer(); ?>
