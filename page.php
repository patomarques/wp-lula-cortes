<?php get_header(); ?>


<div class="container-full">
	<div class="container-full bg-header">
		<?php echo get_the_post_thumbnail( ) ?>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php the_post(); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 order-md-2 col-sm-12">
				<div id="post-<?php the_ID(); ?>" <?php post_class( 'content' ); ?>>
					<h1 class="entry-title"><?php the_title(); ?></h1>
					<?php
						the_content();
						
						wp_link_pages( array(
							'before' => '<div class="page-links">' . __( 'Pages:', 'wp_lula_cortes' ),
							'after'  => '</div>',
						) );
						edit_post_link( __( 'Edit', 'wp_lula_cortes' ), '<span class="edit-link">', '</span>' );
					?>
				</div>
				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>
			</div>

		</div>
	</div>
	<div class="container page-content">
		<div class="row">
			<div class="col-12">
				<?php get_the_title(); ?>
			</div>
		</div>
	</div>
</div>

<?php
get_footer();
