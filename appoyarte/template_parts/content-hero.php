
<?php if( have_rows('slider_home','option') ): ?>

<section class="hero-area" id="home" style="background-image: url(<?php echo the_field('background_image','option'); ?>);">
	<div class="hero-area-slider">
		<?php while( have_rows('slider_home','option') ): the_row(); ?>
	 		<div class="hero-area-single-slide">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<!-- 
							Si hay imagen del mockup, se ven 2 columnas.
							Si no hay imagen del mockup, se ve solo una columna
						-->
						<?php 
						$mockup = get_sub_field('mockup');
						if ( $mockup ): ?>

						<div class="col-lg-7">
							<div class="hero-area-content">
								<!-- Titulos y texto -->
								<h1><?php the_sub_field('titulo_principal','option'); ?></h1>
								<h2><?php the_sub_field('subtitulo','option'); ?></h2>
								<p><?php the_sub_field('descripcion','option'); ?></p>
									
								<div class="sec-botones">	
									<!-- Si esta activado, muestra botón playstore -->
									<?php if( get_sub_field('activar_boton_playstore') ):
										$url_playstore = get_sub_field('url_playstore', 'option');	
										$texto_boton_playstore = get_sub_field('texto_boton_playstore', 'option');	
									?>
										<a class="download-btn flexbox-center" href="<?php echo esc_url($url_playstore); ?>" target="_blank" >
										 	<div class="download-btn-icon">
										 		<i class="icofont icofont-brand-android-robot"></i>
										 	</div>
										 	<div class="download-btn-text"><?php echo $texto_boton_playstore; ?></div>
										</a>
									<?php endif; ?>							

									<!-- Si esta activado, muestra botón AppStore -->
									<?php if( get_sub_field('activar_boton_appstore') ):
										$url_appstore = get_sub_field('url_appstore', 'option');	
										$texto_boton_appstore = get_sub_field('texto_boton_appstore', 'option');	
									?>
										<a class="download-btn flexbox-center" href="<?php echo esc_url($url_appstore); ?>" target="_blank" >
										 	<div class="download-btn-icon">
										 		<i class="icofont icofont-brand-apple"></i>
										 	</div>
										 	<div class="download-btn-text"><?php echo $texto_boton_appstore; ?></div>
										</a>
									<?php endif; ?>	
								</div>

							</div>
						</div>

						<div class="col-lg-5">
							<div class="hand-mockup text-lg-left text-center">
								<img src="<?php echo $mockup['url']; ?>" alt="<?php echo $mockup['alt']; ?>" />
							</div>
						</div>

						<?php else: ?>
							<div class="col-lg-9 title text-center">
								<div class="hero-area-content">
									<!-- Titulos y texto -->
									<h1><?php the_sub_field('titulo_principal','option'); ?></h1>
									<h2><?php the_sub_field('subtitulo','option'); ?></h2>
									<p><?php the_sub_field('descripcion','option'); ?></p>
									
									<div class="sec-botones">	
										<!-- Si esta activado, muestra botón playstore -->
										<?php if( get_sub_field('activar_boton_playstore') ):
											$url_playstore = get_sub_field('url_playstore', 'option');	
											$texto_boton_playstore = get_sub_field('texto_boton_playstore', 'option');	
										?>
											<a class="download-btn flexbox-center" href="<?php echo esc_url($url_playstore); ?>" target="_blank" >
											 	<div class="download-btn-icon">
											 		<i class="icofont icofont-brand-android-robot"></i>
											 	</div>
											 	<div class="download-btn-text"><?php echo $texto_boton_playstore; ?></div>
											</a>
										<?php endif; ?>							

										<!-- Si esta activado, muestra botón AppStore -->
										<?php if( get_sub_field('activar_boton_appstore') ):
											$url_appstore = get_sub_field('url_appstore', 'option');	
											$texto_boton_appstore = get_sub_field('texto_boton_appstore', 'option');	
										?>
											<a class="download-btn flexbox-center" href="<?php echo esc_url($url_appstore); ?>" target="_blank" >
											 	<div class="download-btn-icon">
											 		<i class="icofont icofont-brand-apple"></i>
											 	</div>
											 	<div class="download-btn-text"><?php echo $texto_boton_appstore; ?></div>
											</a>
										<?php endif; ?>	
									</div>

																	
								</div>
							</div>
						<?php endif; ?>
						
					</div>
				</div>
			</div>
		<?php endwhile; ?>
	</div>
</section> <!-- hero area end -->
<?php endif; ?>