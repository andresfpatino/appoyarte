<?php

    function add_async_to_script($tag, $handle) {
        // agregar los handles o identificadores de los scripts al array
        $scripts_to_async = array(
           //'bootstrap',
           //'jquery-slicknav',
           //'slick',
           //'owl-carousel',
           //'jquery-magnific-popup',
           //'wow',
           'main'
        );
        
      // recorremos el array y agregamos el atributo async defer
       foreach($scripts_to_async as $async_script) {
          if ($async_script === $handle) {
             return str_replace(' src', ' async defer src', $tag);
          }
       }
       return $tag;
    }
    add_filter('script_loader_tag', 'add_async_to_script', 10, 2);