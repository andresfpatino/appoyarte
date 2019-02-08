<section class="screenshots-area ptb-90" id="screenshot">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
			    <div class="sec-title">
					<h2><?php the_field('titulo_screenshots','option'); ?>
						<span class="sec-title-border"><img src="<?php echo get_template_directory_uri(); ?>/favicon.png" width="20"></span>
					</h2>
					<p><?php the_field('texto_screenshots','option'); ?></p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="screenshot-wrap">
					<?php 
					$screenshots = get_field('screenshots','option');
					if( $screenshots ): ?>					   
					    <?php foreach( $screenshots as $screen ): ?>
					        <div class="single-screenshot">					                
					            <img src="<?php echo $screen['sizes']['on_boarding']; ?>" alt="<?php echo $screen['alt']; ?>" />
					            <div class="descrip-screenshot">
					            	<h6><?php echo $screen['title']; ?></h6>
					            	<p><?php echo $screen['description']; ?></p>
					        	</div>	
					        </div>
					    <?php endforeach; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>