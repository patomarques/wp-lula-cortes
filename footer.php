<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootscore
 */

    $args = array('post_type' => 'contatos', 'orderby' => 'Ordem', 'order' => 'ASC', 'posts_per_page' => -1);
    $queryContacts = new WP_Query($args);
?>

<footer class="container-full bg-black mt-5 pt-5">
    <div class="container mt-5">
        <div class="row mt-5">
            <div class="col-12 text-center">
                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/title-png/contatos.png' ?>" alt="" class="img-reverse">
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="title-section bold mb-5">
                    <img src="https://lulacortes.com/wp-content/uploads/2021/06/contatos.png" alt="Contatos" title="Contatos">
                </h2>

                <ul class="social-icons list-unstyled text-center pb-5">

                  <?php while ($queryContacts->have_posts()) : $queryContacts->the_post(); ?>
                    <li class="social-icons__item d-inline">
                        <a href="<?= get_the_content() ?>" class="social-icons__link" target="_blank" rel="noopener" title="<?= get_the_title() ?>">
                            <i class="<?= get_post_field('icon-class') ?>"></i>
                        </a>
                    </li>

                  <?php
                    endwhile;
                    wp_reset_postdata();
                  ?>

                </ul>

                <div class="bootscore-info text-muted text-center mt-5 mb-4">
                    <div class="container">
                        <span class="footer-info">
                            <a href="/"><?php bloginfo('name'); ?></a> &copy;&nbsp;<?php echo Date('Y'); ?></small>
                        </span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</footer>

</div>

<?php wp_footer(); ?>

<!-- <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>

</body>

</html>
