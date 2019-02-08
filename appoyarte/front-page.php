<?php 
    # Header 
    get_header(); 

    # Banner
    get_template_part('template_parts/content', 'hero');  

    # Intro texto 
    if ( get_field('mostrar_intro_texto', 'option') ): get_template_part('template_parts/content', 'introtxt'); endif;     

    # Caracteristicas
    if ( get_field('mostrar_caracteristicas', 'option') ): get_template_part('template_parts/content', 'caracteristicas'); endif;  

    # Video
    if ( get_field('mostrar_video', 'option') ): get_template_part('template_parts/content', 'video'); endif;

    # Onboarding
    if ( get_field('mostrar_screenshots', 'option') ): get_template_part('template_parts/content', 'onboarding'); endif;

    # Testimoniales
    if ( get_field('mostrar_testimoniales', 'option') ): get_template_part('template_parts/content', 'testimonial'); endif;

    # Descargas
    if ( get_field('mostrar_sec_descarga', 'option') ): get_template_part('template_parts/content', 'descargas'); endif;

    # Footer
    get_footer();  

?>