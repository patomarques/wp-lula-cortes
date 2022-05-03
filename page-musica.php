<?php get_header();

$args = array('post_type' => 'musicas', 'orderby' => 'Ordem', 'order' => 'ASC', 'posts_per_page' => -1);
$queryMusicas = new WP_Query($args);

//print_r($queryMusicas);
?>

<section class="container-full page-music list-content mt-5 pt-5">
	<div class="container mt-4 mb-4">
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
							Single
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

			<div class="row mt-2 mb-2">
				<div class="col-12 col-sm-8 col-md-6">
					<div class="box-image">
						<?= get_the_post_thumbnail() ?>
					</div>

				</div>
				<div class="col-12 col-sm-4 col-md-6">
					<h2 class="title-album"><?php echo get_the_title(); ?></h2>
					<h3 class="subtitle-album"><?php echo get_post_field('Ano Lançamento'); ?></h3>
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

<?php
get_footer(); ?>