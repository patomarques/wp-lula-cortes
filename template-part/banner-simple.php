<?php 

    //get all banners
    $args = array( 'post_type' => 'banners', 'posts_per_page' => 10 );
    $bannerQuery = new WP_Query( $args ); 

?>

<div id="slider-banners" class="container-full banner-main hidden">
    <?php while ( $bannerQuery->have_posts() ) : $bannerQuery->the_post(); ?>
    <div class="banner-main__item" data-image="<?= get_the_post_thumbnail_url() ?>"> 
       
    </div>
    <?php 
        endwhile;
        wp_reset_postdata(); 
    ?>
</div>

<div class="container-full slider-banner header-image">
    <?php while ( $bannerQuery->have_posts() ) : $bannerQuery->the_post(); ?>
        <div class="hero slider-banner__item" style="background-image: url(<?= get_the_post_thumbnail_url( ) ?>)"> 
        </div>
    <?php 
        endwhile;
        wp_reset_postdata(); 
    ?>
</div>
