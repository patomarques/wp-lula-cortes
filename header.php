<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<?php wp_head(); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet"> 

	<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
	
</head>

<?php
	$navbar_scheme   = get_theme_mod( 'navbar_scheme', 'navbar-light bg-light' );
	$navbar_position = get_theme_mod( 'navbar_position', 'static' );

	$search_enabled  = get_theme_mod( 'search_enabled', '1' );
?>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<a href="#main" class="sr-only sr-only-focusable"><?php _e( 'Skip to main content', 'wp_lula_cortes' ); ?></a>

<div class="overlay" id="overlay">
	<div class="container">
		<div class="row">
			<div class="col-12 text-right">
				<div class="button_container toggle"><span class="top"></span><span class="middle"></span><span class="bottom"></span></div>
			</div>
		</div>
	</div>
	
	<nav class="overlay-menu">
		<?php
			wp_nav_menu(
				array(
					'theme_location' => 'main-menu',
					'container'      => '',
					'menu_class'     => 'navbar-nav mr-auto',
					'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
					'walker'         => new WP_Bootstrap_Navwalker(),
				)
			);
		?>
	</nav>

	
</div>

<div id="wrapper">
    <header class="menu-main menu-main--fixed">
        <div class="container">
            <div class="row">
                <div class="col-9">
                    <a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<img class="navbar-brand__image" src="<?php echo get_stylesheet_directory_uri( ) . '/assets/img/logo-icon.svg'; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
						<img class="navbar-brand__image" src="<?php echo get_stylesheet_directory_uri( ) . '/assets/img/logo-title.svg'; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
                    </a>
                </div>
                <div class="col-3">
                    <div class="button_container toggle"><span class="top"></span><span class="middle"></span><span class="bottom"></span></div>
                </div>
            </div>
        </div>
    </header>

	<header class="hidden">
		<nav id="header" class="navbar navbar-expand-md <?php echo esc_attr( $navbar_scheme ); if ( isset( $navbar_position ) && 'fixed_top' === $navbar_position ) : echo ' fixed-top'; elseif ( isset( $navbar_position ) && 'fixed_bottom' === $navbar_position ) : echo ' fixed-bottom'; endif; if ( is_home() || is_front_page() ) : echo ' home'; endif; ?>">
			<div class="container">

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="<?php _e( 'Toggle navigation', 'wp_lula_cortes' ); ?>">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div id="navbar" class="collapse navbar-collapse">
					<?php
						// Loading WordPress Custom Menu (theme_location).
						wp_nav_menu(
							array(
								'theme_location' => 'main-menu',
								'container'      => '',
								'menu_class'     => 'navbar-nav mr-auto',
								'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
								'walker'         => new WP_Bootstrap_Navwalker(),
							)
						);

						if ( '1' === $search_enabled ) :
					?>
							<form class="form-inline search-form my-2 my-lg-0" role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
								<div class="input-group">
									<input type="text" name="s" class="form-control" placeholder="<?php _e( 'Search', 'wp_lula_cortes' ); ?>" title="<?php echo esc_attr( __( 'Search', 'wp_lula_cortes' ) ); ?>" />
									<div class="input-group-append">
										<button type="submit" name="submit" class="btn btn-outline-secondary"><?php _e( 'Search', 'wp_lula_cortes' ); ?></button>
									</div>
								</div>
							</form>
					<?php
						endif;
					?>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container -->
		</nav><!-- /#header -->
	</header>
