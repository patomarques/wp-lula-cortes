<?php get_header();

global $post;
$post_slug = $post->post_name;

$args = array('post_type' => $post_slug, 'orderby' => 'Ordem', 'order' => 'ASC', 'posts_per_page' => -1);
$query = new WP_Query($args);

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
	<div class="container hidden">

		<?php while ($query->have_posts()) : $query->the_post(); ?>

			<div class="row">
				<div class="col-xs-12">
					<?= get_the_content() ?>
				</div>
			</div>
		<?php
		endwhile;
		wp_reset_postdata();
		?>
	</div>
</section>

<section id="section-nav-category" class="container-full mb-3">
	<div class="container breadcrumbs-nav">
		<div class="row">
			<div class="col-12">
				<ul class="list-nav list-inline">
					<li class="list-nav--item list-inline-item">
						<a href="javascript:void(0)" class="list-nav--link">
							Pesquisa
						</a>
					</li>
					<li class="list-nav--item list-inline-item">
						<a href="javascript:void(0)" class="list-nav--link">
							Quadros
						</a>
					</li>
					<li class="list-nav--item list-inline-item">
						<a href="javascript:void(0)" class="list-nav--link">
							Gravuras
						</a>
					</li>
					<li class="list-nav--item list-inline-item">
						<a href="javascript:void(0)" class="list-nav--link">
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
				<p class="slick-squares__title">Title Album</p>
				<p class="slick-squares__subtitle">2000</p>
			</div>
			<div class="slick-squares__box-image"></div>
		</div>
		<div class="slick-squares__item">
			<div class="slick-squares__item__text">
				<p class="slick-squares__title">Title Album</p>
				<p class="slick-squares__subtitle">2000</p>
			</div>
		</div>
		<div class="slick-squares__item">
			<div class="slick-squares__item__text">
				<p class="slick-squares__title">Title Album</p>
				<p class="slick-squares__subtitle">2000</p>
			</div>
		</div>
		<div class="slick-squares__item">
			<div class="slick-squares__item__text">
				<p class="slick-squares__title">Title Album</p>
				<p class="slick-squares__subtitle">2000</p>
			</div>
		</div>
		<div class="slick-squares__item">
			<div class="slick-squares__item__text">
				<p class="slick-squares__title">Title Album</p>
				<p class="slick-squares__subtitle">2000</p>
			</div>
		</div>
		<div class="slick-squares__item">
			<div class="slick-squares__item__text">
				<p class="slick-squares__title">Title Album</p>
				<p class="slick-squares__subtitle">2000</p>
			</div>
		</div>
	</div>
</section>

<section class="container-full content-slick-squares mb-5">
	<div class="slick-squares">
		<div class="slick-squares__item">
			<div class="slick-squares__item__text">
				<p class="slick-squares__title">Title Album</p>
				<p class="slick-squares__subtitle">2000</p>
			</div>
		</div>
		<div class="slick-squares__item">
			<div class="slick-squares__item__text">
				<p class="slick-squares__title">Title Album</p>
				<p class="slick-squares__subtitle">2000</p>
			</div>
		</div>
		<div class="slick-squares__item">
			<div class="slick-squares__item__text">
				<p class="slick-squares__title">Title Album</p>
				<p class="slick-squares__subtitle">2000</p>
			</div>
		</div>
		<div class="slick-squares__item">
			<div class="slick-squares__item__text">
				<p class="slick-squares__title">Title Album</p>
				<p class="slick-squares__subtitle">2000</p>
			</div>
		</div>
		<div class="slick-squares__item">
			<div class="slick-squares__item__text">
				<p class="slick-squares__title">Title Album</p>
				<p class="slick-squares__subtitle">2000</p>
			</div>
		</div>
		<div class="slick-squares__item">
			<div class="slick-squares__item__text">
				<p class="slick-squares__title">Title Album</p>
				<p class="slick-squares__subtitle">2000</p>
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