<?php 

    //get all banners
    $args = array( 'post_type' => 'banners', 'posts_per_page' => 10 );
    $bannerQuery = new WP_Query( $args ); 

?>

<?php //echo do_shortcode('[slick-slider]'); ?>

<div id="slider-banners" class="container-full banner-main hidden">
    <?php while ( $bannerQuery->have_posts() ) : $bannerQuery->the_post(); ?>
    <div class="banner-main__item" data-image="<?= get_the_post_thumbnail_url() ?>"> 
       
    </div>
    <?php 
        endwhile;
        wp_reset_postdata(); 
    ?>
</div>

<div class="container-full slider-banner">
    <?php while ( $bannerQuery->have_posts() ) : $bannerQuery->the_post(); ?>
        <div class="hero slider-banner__item" style="background-image: url(<?= get_the_post_thumbnail_url( ) ?>)"> 
        </div>
    <?php 
        endwhile;
        wp_reset_postdata(); 
    ?>
</div>

<div class="slider-container hidden">-
    <div class="slider">
        <div class="slides">
            <?php while ( $bannerQuery->have_posts() ) : $bannerQuery->the_post(); ?>
                <div id="slides__1" class="slide">
                    <span class="slide__text">1</span>
                    <a class="slide__prev" href="#slides__4" title="Next"></a>
                    <a class="slide__next" href="#slides__2" title="Next"></a>
                </div>
            <?php endwhile;
                wp_reset_postdata(); ?>

            <div id="slides__1" class="slide">
                <span class="slide__text">1</span>
                <a class="slide__prev" href="#slides__4" title="Next"></a>
                <a class="slide__next" href="#slides__2" title="Next"></a>
            </div>
            <div id="slides__2" class="slide">
                <span class="slide__text">2</span>
                <a class="slide__prev" href="#slides__1" title="Prev"></a>
                <a class="slide__next" href="#slides__3" title="Next"></a>
            </div>
            <div id="slides__3" class="slide">
                <span class="slide__text">3</span>
                <a class="slide__prev" href="#slides__2" title="Prev"></a>
                <a class="slide__next" href="#slides__4" title="Next"></a>
            </div>
            <div id="slides__4" class="slide">
                <span class="slide__text">4</span>
                <a class="slide__prev" href="#slides__3" title="Prev"></a>
                <a class="slide__next" href="#slides__1" title="Prev"></a>
            </div>
        </div>
        <div class="slider__nav">
            <a class="slider__navlink" href="#slides__1"></a>
            <a class="slider__navlink" href="#slides__2"></a>
            <a class="slider__navlink" href="#slides__3"></a>
            <a class="slider__navlink" href="#slides__4"></a>
        </div>
    </div>
</div>