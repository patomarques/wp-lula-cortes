<?php
  $argsTeam = array('post_type' => 'equipe', 'orderby' => 'Ordem', 'order' => 'ASC', 'posts_per_page' => -1);
  $queryTeam = new WP_Query($argsTeam);
?>

<section id="section-team" class="container mt-5 mb-5">
  <div class="row mb-3">
    <div class="col-12 subtitle-section">Equipe</div>
  </div>
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
						<h5 class="card-title bold"><?= get_the_title() ?></h5>
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
