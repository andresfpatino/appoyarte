<section class="about-area ptb-90" id="appoyarte">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
			    <div class="sec-title">
					<h2> <?php the_field('titulo_intro_texto','option'); ?>
						<span class="sec-title-border"><img src="<?php echo get_template_directory_uri(); ?>/favicon.png" width="20"></span>
					</h2>
					<p> <?php the_field('descrip_intro_texto','option'); ?> </p>
				</div>
			</div>
		</div>
		<?php if( have_rows('box','option') ): ?>
			<div class="row d-flex justify-content-center align-items-center">
				<?php while ( have_rows('box','option') ) : the_row(); ?>
					<?php if( get_row_layout() == 'box_single'): ?>
						<div class="col-lg-3">
						    <div class="single-about-box active">
						    	<?php 
						    		$icon_box = get_sub_field('icon_box','option');
						    		$titulo_box = get_sub_field('titulo_box','option');
						    		$descrip_box = get_sub_field('descrip_box','option');
						    	?>
								<i class="icofont <?php echo $icon_box; ?>"></i>
								<h4> <?php echo $titulo_box; ?> </h4>
								<p> <?php echo $descrip_box; ?> </p>
							</div>
						</div>
					<?php endif; ?>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>
	</div>
</section><!-- about section end -->