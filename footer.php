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

?>

<footer class="container">
    <div class="row">
        <div class="col-12 text-center">
            <h2 class="title-section bold mb-5">
                <img src="https://lulacortes.com/wp-content/uploads/2021/06/contatos.png" alt="Contatos" title="Contatos">
            </h2>

            <ul class="social-icons list-unstyled text-center">
                <li class="social-icons__item d-inline">
                    <a href="https://www.facebook.com/redelulacortex/" target="_black" rel="noopener" class="social-icons__link social-icons__link--actived">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </li>
                <li class="social-icons__item d-inline">
                    <a href="https://www.instagram.com/redelulacortex/" class="social-icons__link" target="_black" rel="noopener"> 
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
                <li class="social-icons__item d-inline">
                    <a href="https://www.youtube.com/channel/UCUOBZT_GjSklL8yigoEZ_hg" class="social-icons__link" target="_black" rel="noopener">
                        <i class="fab fa-youtube"></i>
                    </a>
                </li>
                <li class="social-icons__item d-inline">
                    <a href="mailto:redelulacortex@gmail.com" target="_blank" class="social-icons__link" target="_black" rel="noopener">
                        <i class="far fa-envelope"></i>
                    </a>
                </li>
                <li class="social-icons__item d-inline">
                    <a href="tel:5581997274146" class="social-icons__link" alt="(81) 9 9727-4146">
                        <i class="fas fa-mobile-alt"></i>
                    </a>
                </li>
            </ul>

            <div class="bootscore-info text-muted text-center mt-5 mb-2">
                <div class="container">
                    <small><a href="/"><?php bloginfo('name'); ?></a> &copy;&nbsp;<?php echo Date('Y'); ?></small>    
                </div>
            </div>
        </div>
    </div>

</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

<!-- <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>
</html>
