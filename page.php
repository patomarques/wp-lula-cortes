<?php get_header();

global $post;
$post_slug = $post->post_name;

print_r($post_slug);

$args = array('post_type' => $post_slug, 'orderby' => 'Ordem', 'order' => 'ASC', 'posts_per_page' => -1);
$query = new WP_Query($args);

//print_r($query);
?>

<section class="container-full page-music list-content mt-5 pt-5">
	<div class="container">
		<div class="row mt-4 mb-5">
			<div class="col-12 text-center">
				<img src="<?= get_site_url() . '/wp-content/themes/wp-lula-cortes-child/assets/img/title-png/' . $post_slug .'.png' ?>" alt="<?= get_the_title() ?>" class="mx-auto d-block">
			</div>
		</div>
		
	</div>
	<div class="container">

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

<script>
	jQuery(document).ready(function() {
		jQuery('.menu-main').addClass('shrink menu-main--dark');
	});
</script>

<?php
get_footer(); ?>