<?php get_header(); ?>

<?php 
    //get all banners
    $args = array( 'post_type' => 'banners', 'posts_per_page' => 10 );
    $bannerQuery = new WP_Query( $args ); 

    //get all posts
    $args = array( 'post_type' => 'home-contents', 'orderby' => 'Ordem', 'order' => 'ASC', 'posts_per_page' => 20 );
    $queryInfos = new WP_Query( $args ); 


?>

<div id="slider-banners" class="container-full banner-main">
    <?php while ( $bannerQuery->have_posts() ) : $bannerQuery->the_post(); ?>
    <div class="banner-main__item module parallax" style="background-image: url(<?= the_post_thumbnail_url( ); ?>);">
        
    </div>
    <?php 
        endwhile;
        wp_reset_postdata(); 
    ?>
</div>

<div class="content-sections">
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
                $layoutClassLeft = 'col-12 col-md-6 order-2 order-md-1 text-right';  
                $layoutClassRight = 'col-12 col-md-6 order-1 order-md-2';  
            }
        }

        ?>

        <section id="section-<?= get_post_field( 'post_name', get_post() ) ?>" class="section-content">
            <div class="container">
                <div class="row">
                    <div class="<?= $layoutClassLeft ?>">
                        <div class="box-image" style="background-image: url(<?= the_post_thumbnail_url( ); ?>); ">
                            
                        </div>
                    </div>
                    <div class="<?= $layoutClassRight ?> p-4">
                        <h3 class="title-section bold"><?= the_title() ?></h3>
                        <h4 class="subtitle"><?= get_post_custom('Subtitulo')[0] ?></h4>

                        <div class="description"><?= the_content() ?></div>

                    </div>
                </div>
            </div>
        </section>

        <?php 
            //$align = get_post_custom();
            //print_r($align);
            //the_post_thumbnail_url();

        ?>

    <?php 
        endwhile;
        wp_reset_postdata(); 
    ?>

</div>
<?php get_footer(); ?>