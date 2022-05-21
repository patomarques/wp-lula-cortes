<?php get_header(); ?>

<div class="container-full hidden">
	<!--  page-header-parallax -->
	<div class="page-header header-parallax">
		<?= get_the_post_thumbnail() ?>
	</div>

	<!-- <div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo get_the_post_thumbnail_url() ?>"></div> -->
	<div class="bg-header hidden" style="background: url(<?php echo get_the_post_thumbnail_url() ?>) center/cover no-repeat fixed">
		<div class="parallax-window" data-parallax="scroll" data-image-src="<?php echo get_the_post_thumbnail_url() ?>"></div>
	</div>
</div>

<div class="container-full slider-banner header-image">
	<div class="hero slider-banner__item" style="background-image: url(<?= get_the_post_thumbnail_url() ?>)">
	</div>
</div>

<div class="container mt-5 pt-5 mb-5">
	<div class="row text-center ">
		<div class="col-12 col-md-8 offset-md-2">
			<?php the_post(); ?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8 offset-md-2">
			<div id="post-<?php the_ID(); ?>" class="wrapper">

				<img src="<?= get_site_url() . '/wp-content/themes/wp-lula-cortes-child/assets/img/title-png/bio.png' ?>" alt="Biografia" class="mb-5 text-center d-block">

				<?php
				the_content();

				wp_link_pages(array(
					'before' => '<div class="page-links">' . __('Pages:', 'wp_lula_cortes'),
					'after'  => '</div>',
				));
				edit_post_link(__('Edit', 'wp_lula_cortes'), '<span class="edit-link">', '</span>');
				?>
			</div>
			<?php
			// If comments are open or we have at least one comment, load up the comment template
			if (comments_open() || get_comments_number()) :
				comments_template();
			endif;
			?>
		</div>

	</div>
</div>

<?php
get_footer();
