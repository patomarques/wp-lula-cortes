<?php

get_header();

$argsQuadros = array('post_type' => 'quadros', 'orderby' => 'Ordem', 'order' => 'ASC', 'posts_per_page' => -1);
$queryQuadros = new WP_Query($argsQuadros);

$argsGravuras = array('post_type' => 'gravuras', 'orderby' => 'Ordem', 'order' => 'ASC', 'posts_per_page' => -1);
$queryGravuras = new WP_Query($argsGravuras);

$argsEsbocos = array('post_type' => 'esbocos', 'orderby' => 'Ordem', 'order' => 'ASC', 'posts_per_page' => -1);
$queryEsbocos = new WP_Query($argsEsbocos);

$argsMemoriaGrafica = array('post_type' => 'memoria-grafica', 'orderby' => 'Ordem', 'order' => 'ASC', 'posts_per_page' => -1);
$queryMemoriaGrafica = new WP_Query($argsMemoriaGrafica);

?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<div class="pt-3 pb-5"></div>

<section id="section-nav-category" class="container-full section-content mt-5 mb-5">
	<div class="container breadcrumbs-nav mt-5">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="title-section">
          Artes Visuais
        </h2>
      </div>
    </div>
		<div class="row mt-5">
			<div class="col-12">
				<ul class="list-nav list-inline">
					<li class="list-nav__item list-nav__item-actived list-inline-item">
						<a href="javascript:void(0)" class="list-nav__link">
							Quadros
						</a>
					</li>
					<li class="list-nav__item list-inline-item">
						<a href="javascript:void(0)" class="list-nav__link">
							Gravuras
						</a>
					</li>
					<li class="list-nav__item list-inline-item">
						<a href="javascript:void(0)" class="list-nav__link">
							Esboços
						</a>
					</li>
					<li class="list-nav__item list-inline-item">
						<a href="javascript:void(0)" class="list-nav__link">
							Memória Gráfica
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<section class="container-full content-slick-squares mt-5 mb-5" data-type="quadros">
	<div id="slick-quadros" class="slick-squares">
		<div class="slick-squares__item">
			<div class="slick-squares__item__text">
				<a href="/" class="slick-squares__link">
					<p class="slick-squares__title">Quadro Title</p>
					<p class="slick-squares__subtitle">2000</p>
				</a>
			</div>
			<a href="/" class="slick-squares__box-image slick-squares__link" style="background-image: url(<?= get_the_post_thumbnail_url() ?>)">
				<div class="slick-squares__box-image__spacer"></div>
			</a>
		</div>
		<div class="slick-squares__item">
			<div class="slick-squares__item__text">
				<a href="/" class="slick-squares__link">
					<p class="slick-squares__title">Quadro Title</p>
					<p class="slick-squares__subtitle">2000</p>
				</a>
			</div>
			<a href="/" class="slick-squares__box-image slick-squares__link" style="background-image: url(<?= get_the_post_thumbnail_url() ?>)">
				<div class="slick-squares__box-image__spacer"></div>
			</a>
		</div>
		<div class="slick-squares__item">
			<div class="slick-squares__item__text">
				<a href="/" class="slick-squares__link">
					<p class="slick-squares__title">Quadro Title</p>
					<p class="slick-squares__subtitle">2000</p>
				</a>
			</div>
			<a href="/" class="slick-squares__box-image slick-squares__link" style="background-image: url(<?= get_the_post_thumbnail_url() ?>)">
				<div class="slick-squares__box-image__spacer"></div>
			</a>
		</div>
		<div class="slick-squares__item">
			<div class="slick-squares__item__text">
				<a href="/" class="slick-squares__link">
					<p class="slick-squares__title">Quadro Title</p>
					<p class="slick-squares__subtitle">2000</p>
				</a>
			</div>
			<a href="/" class="slick-squares__box-image slick-squares__link" style="background-image: url(<?= get_the_post_thumbnail_url() ?>)">
				<div class="slick-squares__box-image__spacer"></div>
			</a>
		</div>
		<div class="slick-squares__item">
			<div class="slick-squares__item__text">
				<a href="/" class="slick-squares__link">
					<p class="slick-squares__title">Quadro Title</p>
					<p class="slick-squares__subtitle">2000</p>
				</a>
			</div>
			<a href="/" class="slick-squares__box-image slick-squares__link" style="background-image: url(<?= get_the_post_thumbnail_url() ?>)">
				<div class="slick-squares__box-image__spacer"></div>
			</a>
		</div>
		<div class="slick-squares__item">
			<div class="slick-squares__item__text">
				<a href="/" class="slick-squares__link">
					<p class="slick-squares__title">Quadro Album</p>
					<p class="slick-squares__subtitle">2000</p>
				</a>
			</div>
			<a href="/" class="slick-squares__box-image slick-squares__link" style="background-image: url(<?= get_the_post_thumbnail_url() ?>)">
				<div class="slick-squares__box-image__spacer"></div>
			</a>
		</div>
	</div>
</section>

<section class="container-full content-slick-squares mt-5 mb-5" data-type="gravuras">
	<div id="slick-gravuras" class="slick-squares">
		<div class="slick-squares__item">
			<div class="slick-squares__item__text">
				<a href="/" class="slick-squares__link">
					<p class="slick-squares__title">Gravuras Title</p>
					<p class="slick-squares__subtitle">1991</p>
				</a>
			</div>
			<a href="/" class="slick-squares__box-image slick-squares__link" style="background-image: url(<?= get_the_post_thumbnail_url() ?>)">
				<div class="slick-squares__box-image__spacer"></div>
			</a>
		</div>
		<div class="slick-squares__item">
			<div class="slick-squares__item__text">
				<a href="/" class="slick-squares__link">
					<p class="slick-squares__title">Gravuras Title</p>
					<p class="slick-squares__subtitle">1991</p>
				</a>
			</div>
			<a href="/" class="slick-squares__box-image slick-squares__link" style="background-image: url(<?= get_the_post_thumbnail_url() ?>)">
				<div class="slick-squares__box-image__spacer"></div>
			</a>
		</div>
		<div class="slick-squares__item">
			<div class="slick-squares__item__text">
				<a href="/" class="slick-squares__link">
					<p class="slick-squares__title">Gravuras Title</p>
					<p class="slick-squares__subtitle">1991</p>
				</a>
			</div>
			<a href="/" class="slick-squares__box-image slick-squares__link" style="background-image: url(<?= get_the_post_thumbnail_url() ?>)">
				<div class="slick-squares__box-image__spacer"></div>
			</a>
		</div>
		<div class="slick-squares__item">
			<div class="slick-squares__item__text">
				<a href="/" class="slick-squares__link">
					<p class="slick-squares__title">Gravuras Title</p>
					<p class="slick-squares__subtitle">1991</p>
				</a>
			</div>
			<a href="/" class="slick-squares__box-image slick-squares__link" style="background-image: url(<?= get_the_post_thumbnail_url() ?>)">
				<div class="slick-squares__box-image__spacer"></div>
			</a>
		</div>
		<div class="slick-squares__item">
			<div class="slick-squares__item__text">
				<a href="/" class="slick-squares__link">
					<p class="slick-squares__title">Gravuras Title</p>
					<p class="slick-squares__subtitle">1991</p>
				</a>
			</div>
			<a href="/" class="slick-squares__box-image slick-squares__link" style="background-image: url(<?= get_the_post_thumbnail_url() ?>)">
				<div class="slick-squares__box-image__spacer"></div>
			</a>
		</div>
		<div class="slick-squares__item">
			<div class="slick-squares__item__text">
				<a href="/" class="slick-squares__link">
					<p class="slick-squares__title">Gravuras Title</p>
					<p class="slick-squares__subtitle">1991</p>
				</a>
			</div>
			<a href="/" class="slick-squares__box-image slick-squares__link" style="background-image: url(<?= get_the_post_thumbnail_url() ?>)">
				<div class="slick-squares__box-image__spacer"></div>
			</a>
		</div>
	</div>
</section>

<section class="container-full content-slick-squares mt-5 mb-5" data-type="esbocos">
	<div id="slick-esbocos" class="slick-squares">
		<div class="slick-squares__item">
			<div class="slick-squares__item__text">
				<a href="/" class="slick-squares__link">
					<p class="slick-squares__title">Esboços Title</p>
					<p class="slick-squares__subtitle">1989</p>
				</a>
			</div>
			<a href="/" class="slick-squares__box-image slick-squares__link" style="background-image: url(<?= get_the_post_thumbnail_url() ?>)">
				<div class="slick-squares__box-image__spacer"></div>
			</a>
		</div>
		<div class="slick-squares__item">
			<div class="slick-squares__item__text">
				<a href="/" class="slick-squares__link">
					<p class="slick-squares__title">Esboços Title</p>
					<p class="slick-squares__subtitle">1989</p>
				</a>
			</div>
			<a href="/" class="slick-squares__box-image slick-squares__link" style="background-image: url(<?= get_the_post_thumbnail_url() ?>)">
				<div class="slick-squares__box-image__spacer"></div>
			</a>
		</div>
		<div class="slick-squares__item">
			<div class="slick-squares__item__text">
				<a href="/" class="slick-squares__link">
					<p class="slick-squares__title">Esboços Title</p>
					<p class="slick-squares__subtitle">1989</p>
				</a>
			</div>
			<a href="/" class="slick-squares__box-image slick-squares__link" style="background-image: url(<?= get_the_post_thumbnail_url() ?>)">
				<div class="slick-squares__box-image__spacer"></div>
			</a>
		</div>
		<div class="slick-squares__item">
			<div class="slick-squares__item__text">
				<a href="/" class="slick-squares__link">
					<p class="slick-squares__title">Esboços Title</p>
					<p class="slick-squares__subtitle">1989</p>
				</a>
			</div>
			<a href="/" class="slick-squares__box-image slick-squares__link" style="background-image: url(<?= get_the_post_thumbnail_url() ?>)">
				<div class="slick-squares__box-image__spacer"></div>
			</a>
		</div>
		<div class="slick-squares__item">
			<div class="slick-squares__item__text">
				<a href="/" class="slick-squares__link">
					<p class="slick-squares__title">Esboços Title</p>
					<p class="slick-squares__subtitle">1989</p>
				</a>
			</div>
			<a href="/" class="slick-squares__box-image slick-squares__link" style="background-image: url(<?= get_the_post_thumbnail_url() ?>)">
				<div class="slick-squares__box-image__spacer"></div>
			</a>
		</div>
		<div class="slick-squares__item">
			<div class="slick-squares__item__text">
				<a href="/" class="slick-squares__link">
					<p class="slick-squares__title">Esboços Title</p>
					<p class="slick-squares__subtitle">1989</p>
				</a>
			</div>
			<a href="/" class="slick-squares__box-image slick-squares__link" style="background-image: url(<?= get_the_post_thumbnail_url() ?>)">
				<div class="slick-squares__box-image__spacer"></div>
			</a>
		</div>
	</div>
</section>

<section class="container-full content-slick-squares mt-5 mb-5" dat-type="memoria-grafica">
	<div id="slick-memoria-grafica" class="slick-squares">
		<div class="slick-squares__item">
			<div class="slick-squares__item__text">
				<a href="/" class="slick-squares__link">
					<p class="slick-squares__title">Memória Gráfica Title</p>
					<p class="slick-squares__subtitle">1993</p>
				</a>
			</div>
			<a href="/" class="slick-squares__box-image slick-squares__link" style="background-image: url(<?= get_the_post_thumbnail_url() ?>)">
				<div class="slick-squares__box-image__spacer"></div>
			</a>
		</div>
		<div class="slick-squares__item">
			<div class="slick-squares__item__text">
				<a href="/" class="slick-squares__link">
					<p class="slick-squares__title">Memória Gráfica Title</p>
					<p class="slick-squares__subtitle">1993</p>
				</a>
			</div>
			<a href="/" class="slick-squares__box-image slick-squares__link" style="background-image: url(<?= get_the_post_thumbnail_url() ?>)">
				<div class="slick-squares__box-image__spacer"></div>
			</a>
		</div>
		<div class="slick-squares__item">
			<div class="slick-squares__item__text">
				<a href="/" class="slick-squares__link">
					<p class="slick-squares__title">Memória Gráfica Title</p>
					<p class="slick-squares__subtitle">1993</p>
				</a>
			</div>
			<a href="/" class="slick-squares__box-image slick-squares__link" style="background-image: url(<?= get_the_post_thumbnail_url() ?>)">
				<div class="slick-squares__box-image__spacer"></div>
			</a>
		</div>
		<div class="slick-squares__item">
			<div class="slick-squares__item__text">
				<a href="/" class="slick-squares__link">
					<p class="slick-squares__title">Memória Gráfica Title</p>
					<p class="slick-squares__subtitle">1993</p>
				</a>
			</div>
			<a href="/" class="slick-squares__box-image slick-squares__link" style="background-image: url(<?= get_the_post_thumbnail_url() ?>)">
				<div class="slick-squares__box-image__spacer"></div>
			</a>
		</div>
		<div class="slick-squares__item">
			<div class="slick-squares__item__text">
				<a href="/" class="slick-squares__link">
					<p class="slick-squares__title">Memória Gráfica Title</p>
					<p class="slick-squares__subtitle">1993</p>
				</a>
			</div>
			<a href="/" class="slick-squares__box-image slick-squares__link" style="background-image: url(<?= get_the_post_thumbnail_url() ?>)">
				<div class="slick-squares__box-image__spacer"></div>
			</a>
		</div>
		<div class="slick-squares__item">
			<div class="slick-squares__item__text">
				<a href="/" class="slick-squares__link">
					<p class="slick-squares__title">Memória Gráfica Title</p>
					<p class="slick-squares__subtitle">1993</p>
				</a>
			</div>
			<a href="/" class="slick-squares__box-image slick-squares__link" style="background-image: url(<?= get_the_post_thumbnail_url() ?>)">
				<div class="slick-squares__box-image__spacer"></div>
			</a>
		</div>
	</div>
</section>

<script>
	jQuery(document).ready(function() {
		jQuery('.menu-main').addClass('shrink menu-main--dark');
	});
</script>

<?php get_footer(); ?>
