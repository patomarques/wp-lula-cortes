<?php

function add_theme_scripts()
{
    wp_enqueue_style('lulacortes-css', get_theme_file_uri() . '/assets/scss/lulacortes.css');
    wp_enqueue_script('lulacortes-js', get_theme_file_uri() . '/assets/js/lulacortes.js', array('jquery'), '1.0', true);
    wp_enqueue_script('slick-js', get_theme_file_uri() . '/assets/js/slick-custom.js', array('jquery'), '1.0', true);
    wp_enqueue_script('header-ux-js', get_theme_file_uri() . '/assets/js/header-ux.js', array('jquery'), '1.0', true);
}

function hide_admin_bar()
{
    return false;
}

add_filter('show_admin_bar', 'hide_admin_bar');
add_filter('show_admin_bar', '__return_false');

function create_custom_post_type()
{
    $args = array(
        'labels' => [],
        'menu_icon' => '',
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        //'rewrite' => array('slug' => 'case-studies', 'with_front' => true),
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => array('title', 'editor', 'author', 'excerpt', 'page-attributes')
    );

    $args['labels'] = array(
        'name' => __('Banner Sliders'),
        'singular_name' => __('Banner Slider')
    );

    $args['menu_icon'] = 'dashicons-format-gallery';

    register_post_type(
        'banners',
        $args
    );

    register_post_type(
        'banners',
        array(
            'labels' => array(
                'name' => __('Banner Sliders'),
                'singular_name' => __('Banner Slider')
            ),
            'public' => true,
            'has_archive' => true,
            //'rewrite' => array('slug' => 'banners'),
            //'show_in_rest' => true,
            'supports' => array('title', 'author', 'thumbnail', 'custom-fields'), //'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields'
            //'menu_position'       => 1,
            'menu_icon' => 'dashicons-format-gallery',
            'exclude_from_search' => true
        )
    );

    register_post_type(
        'home-contents',
        array(
            'labels' => array(
                'name' => __('Home Infos'),
                'singular_name' => __('Home Info')
            ),
            'public' => true,
            'has_archive' => true,
            //'show_in_rest' => true,
            'supports' => array('title', 'author', 'editor', 'thumbnail', 'custom-fields'),
            //'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields'
            //'menu_position'       => 1,
            'exclude_from_search' => true
        )
    );

    register_post_type(
        'equipe',
        array(
            'labels' => array(
                'name' => __('Equipe'),
                'singular_name' => __('Equipe')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'author', 'editor', 'thumbnail', 'custom-fields'),
            'exclude_from_search' => true
        )
    );

    register_post_type(
        'galeria',
        array(
            'labels' => array(
                'name' => __('Galeria'),
                'singular_name' => __('Galeria')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'author', 'editor', 'thumbnail', 'custom-fields'),
            'menu_icon' => 'dashicons-format-gallery',
            'exclude_from_search' => true
        )
    );

    register_post_type(
        'publicacoes',
        array(
            'labels' => array(
                'name' => __('Publicações'),
                'singular_name' => __('Publicação')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'author', 'editor', 'thumbnail', 'custom-fields'),

            'exclude_from_search' => true
        )
    );

    register_post_type(
        'webminarios',
        array(
            'labels' => array(
                'name' => __('Webnários'),
                'singular_name' => __('Webnário')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'author', 'editor', 'thumbnail', 'custom-fields'),

            'exclude_from_search' => true
        )
    );

    register_post_type(
        'musicas',
        array(
            'labels' => array(
                'name' => __('Músicas'),
                'singular_name' => __('Música')
            ),
            'pages' => 'musicas',
            'public' => true,
            'has_archive' => false,
            'rewrite' => array(
                'slug' => 'musicas',
                'with_front' => true,
                'hierarchical' => true
            ),
            'supports' => array('title', 'author', 'editor', 'excerpt', 'thumbnail', 'custom-fields', 'page-attributes'),
            'menu_icon' => 'dashicons-format-audio',
            'exclude_from_search' => true,
            'taxonomies' => array('musicas'),
            'query_var' => 'musicas'

        )
    );

    register_post_type(
        'quadros',
        array(
            'labels' => array(
                'name' => __('Quadros'),
                'singular_name' => __('Quadro')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'author', 'editor', 'thumbnail', 'custom-fields'),
            'menu_icon' => 'dashicons-format-image',
            'exclude_from_search' => true
        )
    );

    register_post_type(
        'gravuras',
        array(
            'labels' => array(
                'name' => __('Gravuras'),
                'singular_name' => __('Gravura')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'author', 'editor', 'thumbnail', 'custom-fields'),
            'menu_icon' => 'dashicons-format-image',
            'exclude_from_search' => true
        )
    );

    register_post_type(
        'esbocos',
        array(
            'labels' => array(
                'name' => __('Esboços'),
                'singular_name' => __('Esboço')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'author', 'editor', 'thumbnail', 'custom-fields'),
            'menu_icon' => 'dashicons-format-image',
            'exclude_from_search' => true
        )
    );

    register_post_type(
        'memoria-grafica',
        array(
            'labels' => array(
                'name' => __('Memória Gráfica'),
                'singular_name' => __('Memória Gráfica')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'author', 'editor', 'thumbnail', 'custom-fields'),

            'exclude_from_search' => true
        )
    );

    register_post_type(
        'videos',
        array(
            'labels' => array(
                'name' => __('Vídeos'),
                'singular_name' => __('Vídeo')
            ),
            //'pages' => 'videos',
            'public' => true,
            'has_archive' => false,
            'supports' => array('title', 'author', 'editor', 'excerpt', 'thumbnail', 'custom-fields', 'page-attributes'),
            'menu_icon' => 'dashicons-format-video',
            'exclude_from_search' => true,
            'taxonomies' => array('videos'),
            'query_var' => 'videos',
            'rewrite' => array(
              'slug' => 'videos',
              'with_front' => true,
              'hierarchical' => false
          )
        )
    );



    register_post_type(
        'livros',
        array(
            'labels' => array(
                'name' => __('Livros'),
                'singular_name' => __('Livro')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'author', 'editor', 'thumbnail', 'custom-fields'),

            'exclude_from_search' => true
        )
    );

    register_post_type(
        'zines',
        array(
            'labels' => array(
                'name' => __('Zines'),
                'singular_name' => __('Zine')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'author', 'editor', 'thumbnail', 'custom-fields'),

            'exclude_from_search' => true
        )
    );

    register_post_type(
        'jogos',
        array(
            'labels' => array(
                'name' => __('Jogos'),
                'singular_name' => __('Jogo')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'author', 'editor', 'thumbnail', 'custom-fields'),

            'exclude_from_search' => true
        )
    );

    register_post_type(
        'audiobooks',
        array(
            'labels' => array(
                'name' => __('Audio Books'),
                'singular_name' => __('Audio Book')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'author', 'editor', 'thumbnail', 'custom-fields'),

            'exclude_from_search' => true
        )
    );

    register_post_type(
        'pdfs',
        array(
            'labels' => array(
                'name' => __('Pdfs'),
                'singular_name' => __('Pdfs')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'author', 'editor', 'thumbnail', 'custom-fields'),
            'menu_icon' => 'dashicons-pdf',
            'exclude_from_search' => true
        )
    );

    register_post_type(
        'contatos',
        array(
            'labels' => array(
                'name' => __('Contatos'),
                'singular_name' => __('Contato')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'author', 'editor', 'thumbnail', 'custom-fields'),
            'exclude_from_search' => true
        )
    );

}

function register_custom_taxonomies() {
  $slugs = ['musicas', 'videos'];

  for($index = 0; $index < count($slugs); $index++) {

    $rewrite = array(
      'slug'                       => $slugs[$index],
      'with_front'                 => true,
      'hierarchical'               => true
    );

    $args = array(
      'hierarchical'               => true,
      'public'                     => true,
      'show_ui'                    => true,
      'show_admin_column'          => true,
      'show_in_nav_menus'          => true,
      'show_tagcloud'              => true,
      'query_var'                  => $slugs[$index],
      'rewrite'                    => $rewrite
    );

    register_taxonomy($slugs[$index], 'special_media_post', $args);

  }

}

// Hooking up our function to theme setup
add_action('init', 'create_custom_post_type', 0);
add_action( 'init', 'register_custom_taxonomies', 0 );

add_action('wp_enqueue_scripts', 'add_theme_scripts');
