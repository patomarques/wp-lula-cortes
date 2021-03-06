<?php get_header();

$args = array('post_type' => 'musicas', 'orderby' => 'Ordem', 'order' => 'ASC', 'posts_per_page' => -1);
$queryMusicas = new WP_Query($args);

?>

<section class="container-full page-music list-content mt-5 pt-5">
	<div class="container">
		<div class="row mt-4 mb-5">
			<div class="col-12 text-center">
				<img src="<?= get_site_url() . '/wp-content/themes/wp-lula-cortes-child/assets/img/title-png/musica.png' ?>" alt="Músicas (Álbuns)" class="mx-auto d-block">
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<ul class="list-nav list-inline">
					<li class="list-nav--item list-inline-item">
						<a href="javascript:void(0)" class="list-nav--link">
							Albuns
						</a>
					</li>
					<li class="list-nav--item list-inline-item">
						<a href="javascript:void(0)" class="list-nav--link">
							Singles
						</a>
					</li>
					<li class="list-nav--item list-inline-item">
						<a href="javascript:void(0)" class="list-nav--link">
							Compilações
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="container">

		<?php while ($queryMusicas->have_posts()) : $queryMusicas->the_post(); ?>

			<div class="row pt-3 pb-3">
				<div class="col-12 col-md-6">
					<div class="square">
						<a href="<?= get_permalink() ?>" class="content" style="background-image: url(<?= get_the_post_thumbnail_url() ?>)" title="<?= get_the_title()?>" alt="Imagem: <?= get_the_title()?>">
            </a>
					</div>
				</div>
				<div class="col-12 col-md-6">
					<div class="content-info p-4">
						<a href="<?= get_permalink() ?>" class="title-album mb-3"><?php echo get_the_title(); ?></a>
            <p class="text-justify"><?php echo wp_trim_words( get_the_content(), 80, '...' ); ?></p>

            <a href="/" class="btn btn-dark btn-custom mt-3" type="button">
              <?= 'Continue lendo e ouça...' ?>
            </a>
					</div>
				</div>
			</div>

		<?php
		endwhile;
		wp_reset_postdata();
		?>
	</div>
</section>

<script>
	jQuery(document).ready(function() {
		jQuery('.menu-main').addClass('shrink menu-main--dark');
	});
</script>

<?php get_footer(); ?>
