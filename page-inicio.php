<?php get_header(); ?>

<?php 
    //get all banners
    $args = array( 'post_type' => 'banners', 'posts_per_page' => 10 );
    $bannerQuery = new WP_Query( $args ); 

    //get all posts
    $args = array( 'post_type' => 'home-contents', 'orderby' => 'Ordem', 'order' => 'ASC', 'posts_per_page' => 20 );
    $queryInfos = new WP_Query( $args ); 

?>

<?php //echo do_shortcode('[slick-slider]'); ?>

<div id="slider-banners" class="container-full banner-main">
    <?php while ( $bannerQuery->have_posts() ) : $bannerQuery->the_post(); ?>
    <div class="banner-main__item" > 
    <?= get_the_post_thumbnail( ) ?>
    </div>
    <?php 
        endwhile;
        wp_reset_postdata(); 
    ?>
</div>

<?php while ( $bannerQuery->have_posts() ) : $bannerQuery->the_post(); ?>
    <div class="hero hidden" style="background-image: url(<?= get_the_post_thumbnail_url( ) ?>)"> 
    </div>
<?php 
    endwhile;
    wp_reset_postdata(); 
?>


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

<!-- <div class="hero">
    <p>Text</p>
</div> -->

<div class="content-sections mt-5">
    <?php while ( $queryInfos->have_posts() ) : $queryInfos->the_post(); ?>

        <?php

        //if centered show image e text || if not image, just show text centered
        $layoutClassLeft = '';
        $layoutClassRight = '';


            if(get_post_custom()['Alinhamento Texto'][0] != null){
                $alignText = get_post_custom()['Alinhamento Texto'][0];

                if($alignText == 'center'){
                    $layoutClassRight = 'col-12 offset-md-2 col-md-8 text-center';  
                }else if($alignText == 'left'){
                    $layoutClassLeft = 'col-12 col-md-6';  
                    $layoutClassRight = 'col-12 col-md-6 text-left';  
                }else{
                    $layoutClassLeft = 'col-12 col-md-6 order-1 order-md-1 text-right';  
                    $layoutClassRight = 'col-12 col-md-6 order-2 order-md-2';  
                }
            }

            $slug = get_post_field( 'post_name', get_post());

        ?>

        <section id="section-<?= $slug ?>" class="section-content">
            <div class="container">
                <div class="row mb-5">
                    <div class="<?= $layoutClassLeft ?>">
                        <div class="box-image" style="background-image: url('<?= the_post_thumbnail_url( ); ?>'); ">
                            
                        </div>
                    </div>
                    <div class="<?= $layoutClassRight ?> p-4">
                        
                        <?php if(!file_exists(get_site_url() . $titlesPng[$slug])){ ?>
                            <img src="<?= get_post_field('Imagem Title') ?>" alt="" class="img-responsive">
                        <?php }else{ ?>
                            <h3 class="title-section bold"><?= the_title() ?> </h3>
                        <?php } ?>

                        <h4 class="subtitle"><?= get_post_custom()['Subtitulo'][0] ?></h4>

                        <div class="description"><?= the_content() ?></div>

                    </div>
                </div>
            </div>
        </section>

        <?php 
            $align = get_post_custom();
            //print_r($align);
            //print_r($align['Subtitulo'][0]);
            //the_post_thumbnail_url();

        ?>

    <?php 
        endwhile;
        wp_reset_postdata(); 
    ?>

</div>
<?php get_footer(); ?>