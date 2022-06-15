<?php get_header(); ?>

<?php get_template_part('template-part/banner-simple'); ?>

<div class="content-sections mt-5">

    <?php
      //get all posts
      $args = array('post_type' => 'home-contents', 'orderby' => 'Ordem', 'order' => 'ASC', 'posts_per_page' => -1);
      $queryInfos = new WP_Query($args);
    ?>

    <?php while ($queryInfos->have_posts()) : $queryInfos->the_post(); ?>

        <?php

          //if centered show image e text || if not image, just show text centered
          $layoutClassLeft = '';
          $layoutClassRight = '';

        if (get_post_field('Alinhamento Texto') != null) {
            $alignText = get_post_field('Alinhamento Texto');

            if ($alignText == 'center') {
                $layoutClassRight = 'col-12 offset-md-2 col-md-6 text-center';
            } else if ($alignText == 'left') {
                $layoutClassLeft = 'col-12 col-md-6';
                $layoutClassRight = 'col-12 col-md-6 text-justify';
            } else {
                $layoutClassLeft = 'col-12 col-md-6 order-1 order-md-1 text-right';
                $layoutClassRight = 'col-12 col-md-6 order-2 order-md-2';
            }
        }else{
          $layoutClassLeft = 'col-12 col-md-6';
          $layoutClassRight = 'col-12 col-md-6 text-left';
        }

        $slug = get_post_field('post_name', get_post());

        ?>

        <section id="section-<?= $slug ?>" class="section-content mt-5 mb-5 pt-2 pb-2" data-order="<?= get_post_field('Ordem') ?>">
            <div class="container">
                <div class="row">
                    <div class="<?= $layoutClassLeft ?>">
                        <div class="square">
                            <div class="content" style="background-image: url(<?= get_the_post_thumbnail_url() ?>)">

                            </div>
                        </div>
                    </div>
                    <div class="<?= $layoutClassRight ?> p-5 content-text-valign">

                        <a href="<?= get_post_field('Botão Link') ?>" >
                            <?php $image = get_site_url() . '/' . get_post_field('Imagem Title'); ?>

                            <?php if (get_post_field('Imagem Title') != '') { ?>
                                <img src="<?= get_post_field('Imagem Title') ?>" alt="" class="img-responsive">
                            <?php } else { ?>
                                <h3 class="title-section bold"><?php echo get_the_title(); ?></h3>
                            <?php } ?>
                        </a>

                        <?php if(isset(get_post_custom()['Subtitulo'])) { ?>
                        <h4 class="subtitle"><?= get_post_custom()['Subtitulo'][0] ?></h4>
                        <?php } ?>

                        <div class="description"><?= the_content() ?></div>

                        <a href="<?= get_post_field('Botão Link') ?>" class="btn btn-dark btn-custom mt-3" type="button">
                          <?= get_post_field('Botão Titulo') ?>
                        </a>

                    </div>
                </div>
            </div>
        </section>

        <?php
         $align = get_post_custom();
        ?>

<?php
    endwhile;
    wp_reset_postdata();
    ?>

</div>
<?php get_footer(); ?>
