<?php

get_header();

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

<?php get_template_part('template-part/quadros'); ?>

<?php get_template_part('template-part/gravuras'); ?>

<?php get_template_part('template-part/esbocos'); ?>

<?php get_template_part('template-part/memoria-grafica'); ?>

<script>
	jQuery(document).ready(function() {
		jQuery('.menu-main').addClass('shrink menu-main--dark');
	});
</script>

<?php get_footer(); ?>
