<?php get_header();

global $post;
$post_slug = $post->post_name;

$imageTitleUrl = get_site_url() . '/wp-content/themes/wp-lula-cortes-child/assets/img/title-png/' . $post_slug .'.png';
//$args = array('post_type' => $post_slug, 'orderby' => 'Ordem', 'order' => 'ASC', 'posts_per_page' => -1);
//$query = new WP_Query($args);
?>

<section class="container-full page-music list-content mt-5 pt-5">
	<div class="container mt-4">
		<div class="row mt-4 mb-5">
			<div class="col-12 text-center">
        <?php if( file_exists( $imageTitleUrl ) ) { ?>

            <img src="<?=  $imageTitleUrl ?>" alt="<?= get_the_title() ?>" class="mx-auto d-block">

          <?php }else{ ?>

            <h2 class="title-section"><?php echo strtoupper($post_slug) ?></h2>

				    <?php } ?>
			</div>
		</div>

	</div>
	<div class="container">

		<?//php while ($query->have_posts()) : $query->the_post(); ?>

		<div class="row">
			<div class="col-xs-12">
				<div class="text-left">
          <p><?= the_content() ?></p>
      </div>
			</div>
		</div>
		<?php
		//endwhile;
		//wp_reset_postdata();
		?>
	</div>
</section>

<?php
get_footer(); ?>
