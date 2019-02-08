<?php

    if( function_exists('acf_add_options_page') ) {            
        acf_add_options_page(array(
            'page_title' 	=> 'Appoyarte',
            'menu_title'	=> 'Appoyarte',
    	    'menu_slug' 	=> 'opciones-de-appoyarte',
            'capability'	=> 'edit_posts',
            'position' 		=> 10,
            'update_button'     => __('Actualizar', 'acf'),
            'updated_message'   => __("Información actualizada", 'acf'),
            'icon_url' 		=> get_bloginfo( template_directory ) . '/functions/admin_icon.png',
        ));                    
    }

?>