<?php

# Adding WP Functions & Theme Support
function theme_support() {
	// Add WP Thumbnail Support
	add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 84, 84, true);
	
	// Tama«Ðo de imagenes personalizadas
    add_image_size( 'img_testimonial', 60, 60, true );
    add_image_size( 'on_boarding', 222, 395, true );
    		
} add_action( 'after_setup_theme', 'theme_support' );


# -- Cabeceras para evitar problemas de Seguridad
function add_header_seguridad() {
    header( 'X-Content-Type-Options: nosniff' );
    header( 'X-Frame-Options: SAMEORIGIN' );
    header( 'X-XSS-Protection: 1;mode=block' );
}
add_action( 'send_headers', 'add_header_seguridad' );


# -- Remover items del menu admin
function remove_menus() {
    remove_menu_page( 'edit-comments.php' );          //Comments
    remove_menu_page( 'edit.php' );                   //Posts
}
add_action( 'admin_menu', 'remove_menus' );
