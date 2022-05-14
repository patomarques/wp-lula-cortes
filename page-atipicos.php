<?php get_header();

global $post;
$post_slug = $post->post_name;

$argsQuadros = array('post_type' => 'quadros', 'orderby' => 'Ordem', 'order' => 'ASC', 'posts_per_page' => -1);
$queryQuadros = new WP_Query($argsQuadros);

$argsGravuras = array('post_type' => 'gravuras', 'orderby' => 'Ordem', 'order' => 'ASC', 'posts_per_page' => -1);
$queryGravuras = new WP_Query($argsGravuras);

$argsEsbocos = array('post_type' => 'esbocos', 'orderby' => 'Ordem', 'order' => 'ASC', 'posts_per_page' => -1);
$queryEsbocos = new WP_Query($argsEsbocos);

$argsMemoriaGrafica = array('post_type' => 'memoria-grafica', 'orderby' => 'Ordem', 'order' => 'ASC', 'posts_per_page' => -1);
$queryMemoriaGrafica = new WP_Query($argsMemoriaGrafica);

$argsTeam = array('post_type' => 'equipe', 'orderby' => 'Ordem', 'order' => 'ASC', 'posts_per_page' => -1);
$queryTeam = new WP_Query($argsTeam);

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

<section id="section-nav-category" class="container-full mb-5">
	<div class="container breadcrumbs-nav">
		<div class="row">
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

<section class="container-full content-slick-squares mb-5">
	<div class="slick-squares">
		<div class="slick-squares__item">
			<div class="slick-squares__item__text">
				<p class="slick-squares__title">Quadro Title</p>
				<p class="slick-squares__subtitle">2000</p>
			</div>
			<div class="slick-squares__box-image"></div>
		</div>
		<div class="slick-squares__item">
			<div class="slick-squares__item__text">
				<p class="slick-squares__title">Quadro Title</p>
				<p class="slick-squares__subtitle">2000</p>
			</div>
		</div>
		<div class="slick-squares__item">
			<div class="slick-squares__item__text">
				<p class="slick-squares__title">Quadro Title</p>
				<p class="slick-squares__subtitle">2000</p>
			</div>
		</div>
		<div class="slick-squares__item">
			<div class="slick-squares__item__text">
				<p class="slick-squares__title">Quadro Title</p>
				<p class="slick-squares__subtitle">2000</p>
			</div>
		</div>
		<div class="slick-squares__item">
			<div class="slick-squares__item__text">
				<p class="slick-squares__title">Quadro Title</p>
				<p class="slick-squares__subtitle">2000</p>
			</div>
		</div>
		<div class="slick-squares__item">
			<div class="slick-squares__item__text">
				<p class="slick-squares__title">Quadro Album</p>
				<p class="slick-squares__subtitle">2000</p>
			</div>
		</div>
	</div>
</section>

<section class="container-full content-slick-squares mb-5">
	<div class="slick-squares">
		<div class="slick-squares__item">
			<div class="slick-squares__item__text">
				<p class="slick-squares__title">Gravuras Title</p>
				<p class="slick-squares__subtitle">1991</p>
			</div>
		</div>
		<div class="slick-squares__item">
			<div class="slick-squares__item__text">
				<p class="slick-squares__title">Gravuras Title</p>
				<p class="slick-squares__subtitle">1991</p>
			</div>
		</div>
		<div class="slick-squares__item">
			<div class="slick-squares__item__text">
				<p class="slick-squares__title">Gravuras Title</p>
				<p class="slick-squares__subtitle">1991</p>
			</div>
		</div>
		<div class="slick-squares__item">
			<div class="slick-squares__item__text">
				<p class="slick-squares__title">Gravuras Title</p>
				<p class="slick-squares__subtitle">1991</p>
			</div>
		</div>
		<div class="slick-squares__item">
			<div class="slick-squares__item__text">
				<p class="slick-squares__title">Gravuras Title</p>
				<p class="slick-squares__subtitle">1991</p>
			</div>
		</div>
		<div class="slick-squares__item">
			<div class="slick-squares__item__text">
				<p class="slick-squares__title">Gravuras Title</p>
				<p class="slick-squares__subtitle">1991</p>
			</div>
		</div>
	</div>
</section>

<section class="container-full content-slick-squares mb-5">
	<div class="slick-squares">
		<div class="slick-squares__item">
			<div class="slick-squares__item__text">
				<p class="slick-squares__title">Esboços Title</p>
				<p class="slick-squares__subtitle">1989</p>
			</div>
		</div>
		<div class="slick-squares__item">
			<div class="slick-squares__item__text">
				<p class="slick-squares__title">Esboços Title</p>
				<p class="slick-squares__subtitle">1989</p>
			</div>
		</div>
		<div class="slick-squares__item">
			<div class="slick-squares__item__text">
				<p class="slick-squares__title">Esboços Title</p>
				<p class="slick-squares__subtitle">1989</p>
			</div>
		</div>
		<div class="slick-squares__item">
			<div class="slick-squares__item__text">
				<p class="slick-squares__title">Esboços Title</p>
				<p class="slick-squares__subtitle">1989</p>
			</div>
		</div>
		<div class="slick-squares__item">
			<div class="slick-squares__item__text">
				<p class="slick-squares__title">Esboços Title</p>
				<p class="slick-squares__subtitle">1989</p>
			</div>
		</div>
		<div class="slick-squares__item">
			<div class="slick-squares__item__text">
				<p class="slick-squares__title">Esboços Title</p>
				<p class="slick-squares__subtitle">1989</p>
			</div>
		</div>
	</div>
</section>

<section class="container-full content-slick-squares mb-5">
	<div class="slick-squares">
		<div class="slick-squares__item">
			<div class="slick-squares__item__text">
				<p class="slick-squares__title">Memória Gráfica Title</p>
				<p class="slick-squares__subtitle">1993</p>
			</div>
		</div>
		<div class="slick-squares__item">
			<div class="slick-squares__item__text">
				<p class="slick-squares__title">Memória Gráfica Title</p>
				<p class="slick-squares__subtitle">1993</p>
			</div>
		</div>
		<div class="slick-squares__item">
			<div class="slick-squares__item__text">
				<p class="slick-squares__title">Memória Gráfica Title</p>
				<p class="slick-squares__subtitle">1993</p>
			</div>
		</div>
		<div class="slick-squares__item">
			<div class="slick-squares__item__text">
				<p class="slick-squares__title">Memória Gráfica Title</p>
				<p class="slick-squares__subtitle">1993</p>
			</div>
		</div>
		<div class="slick-squares__item">
			<div class="slick-squares__item__text">
				<p class="slick-squares__title">Memória Gráfica Title</p>
				<p class="slick-squares__subtitle">1993</p>
			</div>
		</div>
		<div class="slick-squares__item">
			<div class="slick-squares__item__text">
				<p class="slick-squares__title">Memória Gráfica Title</p>
				<p class="slick-squares__subtitle">1993</p>
			</div>
		</div>
	</div>
</section>

<section id="page-atipicos-equipe" class="container-fluid mt-5">
	<div class="container mb-4">
		<div class="row">
			<div class="col-12">
				<h2 class="title-section">Equipe</h2>
			</div>
		</div>
	</div>
</section>

<section id="section-team" class="container">
	<div class="row">
		<div class="col-12 multiple-items">

			<?php while ($queryTeam->have_posts()) : $queryTeam->the_post(); ?>

				<?php
				$profileThumbs = get_the_post_thumbnail_url();

				if ($profileThumbs == '') {
					$profileThumbs = get_stylesheet_directory_uri() . '/assets/img/favicon/android-icon-96x96.png';
				}
				?>

				<div class="items text-center">
					<div class="card-team">
						<div class="card-thumbnail rounded-circle mb-3">
							<img src="<?= $profileThumbs ?>" alt="<?= get_the_title() ?>" class="img-responsive mx-auto d-block">
						</div>
						<h5 class="card-title"><?= get_the_title() ?></h5>
						<h6 class="card-subtitle"><?= get_post_field('Função') ?></h6>
					</div>
				</div>

			<?php
			endwhile;
			wp_reset_postdata();
			?>

		</div>
	</div>
</section>

<script>
	jQuery(document).ready(function() {
		jQuery('.menu-main').addClass('shrink menu-main--dark');
	});
</script>

<?php
get_footer(); ?>