<section class="testimonial-area ptb-90">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
			    <div class="sec-title"> 
					<h2><?php the_field('titulo_testimoniales','option'); ?>
						<span class="sec-title-border"><img src="<?php echo get_template_directory_uri(); ?>/favicon.png" width="20"></span>
					</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-8 offset-lg-2">
				<div class="testimonial-wrap">	
					<?php
					    $loop = new WP_Query( array( 'post_type' => 'testimoniales' ) );
					    if ( $loop->have_posts() ) :
					        while ( $loop->have_posts() ) : $loop->the_post(); ?>
					            <div class="single-testimonial-box">
					            	<?php
					            		$foto = get_field('foto_testimonial'); 
					            		if( !empty($foto) ): 
					            	?>			                
						            	<div class="author-img">
						            		<img src="<?php echo $foto['url']; ?>" alt="<?php echo $foto['alt']; ?>" />
						            	</div>
					            	<?php endif; ?>
					            	<h5><?php the_field('nombre_testimonial'); ?></h5>
					            	<p><?php the_field('descripcion_testimonial'); ?> </p>
					            	<h6><?php the_field('cargo_testimonial'); ?></h6>
					            </div>
					        <?php endwhile;
					    endif;
					    wp_reset_postdata();
					?>					
				</div>
			</div>
		</div>
	</div>
</section><!-- testimonial section end -->