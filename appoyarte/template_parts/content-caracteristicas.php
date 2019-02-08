<section class="showcase-area ptb-90">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
			    <div class="sec-title">
					<h2><?php the_field('titulo_caract','option'); ?>
						<span class="sec-title-border"><img src="<?php echo get_template_directory_uri(); ?>/favicon.png" width="20"></span>
					</h2>
					<p> <?php the_field('descrip_caract','option'); ?> </p>
				</div>
			</div>
		</div>

		<?php if( have_rows('info_mockup','option') ): ?>
			<?php  while ( have_rows('info_mockup','option') ) : the_row(); ?>
				<!-- Mockup derecho -->
				<?php if( get_row_layout() == 'mockup_derecho' ):
					$titulo = get_sub_field('titulo');
					$text = get_sub_field('text');
					$mockup_group = get_sub_field('mockup_group');
					$texto_boton = get_sub_field('texto_boton');					
					$link_boton = get_sub_field('link_boton');
				 ?>				
				<div class="row flexbox-center">
					<div class="col-lg-6">
						<div class="single-showcase-box">
							<h4> <?php echo $titulo; ?> </h4>
							<p> <?php echo $text; ?> </p>
							<!-- boton -->
							<?php if ( get_sub_field('anadir_boton_mockup', 'option') ): ?>
								<a href="<?php $link_boton; ?>" class="appao-btn appao-btn2">
									<?php echo $texto_boton; ?>										
								</a>
							<?php endif; ?>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="single-showcase-box">
							<img src="<?php echo $mockup_group['url']; ?>" alt="<?php echo $mockup_group['alt']; ?>">
						</div>
					</div>
				</div>

				<!-- Mockup izquierdo -->
				<?php elseif( get_row_layout() == 'mockup_izquierdo' ):
					$titulo = get_sub_field('titulo');
					$text = get_sub_field('text');
					$mockup_group = get_sub_field('mockup_group');
					$texto_boton = get_sub_field('texto_boton');					
					$link_boton = get_sub_field('link_boton');
				?>
				<div class="row flexbox-center">
					<div class="col-lg-6">
						<div class="single-showcase-box">
							<img src="<?php echo $mockup_group['url']; ?>" alt="<?php echo $mockup_group['alt']; ?>">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="single-showcase-box">
							<h4> <?php echo $titulo; ?> </h4>
							<p> <?php echo $text; ?> </p>
							<!-- boton -->
							<?php if ( get_sub_field('anadir_boton_mockup', 'option') ): ?>
								<a href="<?php $link_boton; ?>" class="appao-btn appao-btn2">
									<?php echo $texto_boton; ?>										
								</a>
							<?php endif; ?>
						</div>
					</div>
				</div>

				<?php endif; ?>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</section>