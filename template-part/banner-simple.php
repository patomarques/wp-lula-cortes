<?php
    $args = array( 'post_type' => 'banners', 'posts_per_page' => 10 );
    $bannerQuery = new WP_Query( $args );
?>

<div id="slider-banners" class="container-full slider-banner header-image d-none d-xs-none d-sm-none d-md-none d-lg-block">
    <?php while ( $bannerQuery->have_posts() ) : $bannerQuery->the_post(); ?>
    
        <div class="hero slider-banner__item " style="background-image: url(<?= get_the_post_thumbnail_url() ?>)">
        </div>
    <?php
        endwhile;
        wp_reset_postdata();
    ?>
</div>

<div id="slider-banners-mobile" class="container-full slider-banner header-image d-lg-none">
    <?php while ( $bannerQuery->have_posts() ) : $bannerQuery->the_post(); ?>
    
        <div class="hero slider-banner__item" style="background-image: url(<?= get_post_field('mobile-image'); ?>)">
        </div>
    <?php
        endwhile;
        wp_reset_postdata();
    ?>
</div>

