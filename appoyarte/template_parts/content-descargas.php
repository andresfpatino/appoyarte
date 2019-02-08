<section class="download-area ptb-90" id="descargar" style="background-image: url(<?php echo the_field('background_download','option'); ?>);">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
			    <div class="sec-title">
					<h2><?php the_field('titulo_descargas','option'); ?>
						<span class="sec-title-border"><img src="<?php echo get_template_directory_uri(); ?>/favicon.png" width="20"></span>
					</h2>
					<p> <?php the_field('texto_descargas','option'); ?> </p>
				</div>
			</div>
		</div>

		<?php if( get_field('descarga_android','option') or get_field('descarga_ios','option') ): ?> 
		<div class="row">
			<div class="col-lg-12">
				<ul>
					<?php if( get_field('descarga_android','option') ): ?>
						<li>
							<a href="<?php the_field('link_android','option'); ?>" target="_blank" class="download-btn flexbox-center">
								<div class="download-btn-icon"><i class="icofont icofont-brand-android-robot"></i></div>
								<div class="download-btn-text"><p>Disponible en</p><h4>PlayStore</h4></div>
							</a>
						</li>
					<?php endif; ?>
					<?php if( get_field('descarga_ios','option') ): ?>
						<li>
							<a href="<?php the_field('link_ios','option'); ?>" target="_blank" class="download-btn flexbox-center">
								<div class="download-btn-icon"><i class="icofont icofont-brand-apple"></i> </div>
								<div class="download-btn-text"> <p>Disponible en</p><h4>AppStore</h4> </div>
							</a>
						</li>
					<?php endif; ?>
				</ul>
			</div>
		</div>

		<?php endif; ?>


	</div>
</section><!-- download section end -->