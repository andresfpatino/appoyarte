<?php

function site_scripts() {  
    // CSS
    wp_enqueue_style( 'poppins-google-fonts', 'https://fonts.googleapis.com/css?family=Poppins:400,500', false );
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', false, 'all');
    wp_enqueue_style('slicknav', get_template_directory_uri() . '/assets/css/slicknav.min.css', false, 'all');
    wp_enqueue_style( 'icofont', get_template_directory_uri() . '/assets/css/icofont.css', false, 'all' );
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css', false, 'all' );
    wp_enqueue_style( 'fonta-wesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', false, 'all' );
    wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.css', false, 'all' );
    wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', false, 'all' );
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.min.css', false, 'all' );
    wp_enqueue_style( 'main-style', get_template_directory_uri() . '/assets/css/style.css', 'all' );
    wp_enqueue_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css', 'all' );

    // JS
    wp_deregister_script('jquery');
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array(), false, true);
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), false, true);
    wp_enqueue_script( 'jquery-slicknav', get_template_directory_uri() . '/assets/js/jquery.slicknav.min.js', array(), false, true);
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.min.js', array(), false, true);
    wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), false, true);
    wp_enqueue_script( 'jquery-magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array(), false, true);
    wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow-1.3.0.min.js', array(), false, true);
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array(), false, true);
    
}

add_action('wp_enqueue_scripts', 'site_scripts', 999);