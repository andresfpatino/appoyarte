<?php
/**
 * The template for displaying 404 (page not found) pages.
 *
 * For more info: https://codex.wordpress.org/Creating_an_Error_404_Page
 */

get_header(); ?>


<section class="hero-area error-page">
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-lg-8 pb-40 title text-center hero-area-content">
				<h1><?php _e( 'Página no encontrada'); ?></h1>	
				<p><?php _e( 'Lo sentimos, pero la página que esta buscando no existe o se ha eliminado.'); ?></p>				
				<a href="<?php echo home_url( '/');?>" class="download-btn flexbox-center" style="max-width: 380px; margin: 0 auto;">
					<div class="download-btn-icon"><i class="icofont icofont-login"></i> </div>
					<div class="download-btn-text"> <p>Volver a la página de inicio</p></div>
				</a>
			</div>
		</div>
    </div>
</section>

<?php get_footer(); ?>