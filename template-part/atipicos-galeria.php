<?php
  $argsGaleria = array('post_type' => 'galeria', 'orderby' => 'Ordem', 'order' => 'ASC', 'posts_per_page' => -1);
  $queryGaleria = new WP_Query($argsGaleria);

  $dataGalery = [];
?>

<section id="section-galeria" class="section-nav container-full section-content">
  <div class="container mb-3">
    <div class="row">
      <div class="col-12">
        <h3 class="subtitle-section">Galeria</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p>A curadoria dessa exposição virtual pretende apresentar ao público parte da série de pinturas intitulada Atípicos, de autoria de Lula Côrtes, que está contida em acervo particulares – uma rede de amigos, sustentada por amores, paixões e muita amizade – que foi acionada por meio da realização de uma investigação que derivou em uma série de atividades, ações e sobretudo uma pesquisa a acerca da produção plástica do artista multidisciplinar Lula Côrtes. [...]</p>
      </div>
    </div>
  </div>
  <div class="container-full content-slick-squares mb-5">
    <div id="slick-galeria" class="slick-squares gallery-fullscreen">

      <?php while ($queryGaleria->have_posts()) : $queryGaleria->the_post();

        $dataGalery[get_the_id()] = [
          'title' => get_the_title(),
          'url' => get_the_post_thumbnail_url(),
          'audio' => get_post_field('audio-descricao')
        ];
      ?>

      <div class="slick-squares__item">
        <div class="slick-squares__item__text">
          <p class="slick-squares__title"><?= get_the_title() ?></p>
        </div>
        <a href="<?= get_the_post_thumbnail_url() ?>"
          class="slick-squares__box-image slick-squares__link"
          data-fslightbox="lightbox-galeria"
          data-id="<?= get_the_id() ?>"
          data-title="<?= get_the_title() ?>"
          data-audio="<?= get_post_field('audio-descricao') ?>"
          style="background-image: url(<?= get_the_post_thumbnail_url() ?>)">
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

<div class="container-full player-content hidden">
  <div class="container">
    <div class="row">
      <div class="col-10 col-sm-9">
        <audio id="player-audio" controls="controls">
          <source src="" />
          Ops, seu navegador não suporta html5!
        </audio>
      </div>
      <div class="col-2 col-sm-3 text-right hidden">
        <button class="btn btn-light">Ficha Técnica</button>
      </div>
    </div>
  </div>
</div>

<input type="hidden" name="dataGalery" id="dataGalery" value="<?= $dataGalery ?>">
<script>
  let dataGallery = <?= json_encode($dataGalery) ?>;
</script>

