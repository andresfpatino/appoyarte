<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">	
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Site Title -->
		<title><?php echo get_bloginfo( 'name' ) . ' | '. get_bloginfo( 'description' ); ?></title>	
		<!-- Favicon -->
		<?php 
			$favicon = get_field('favicon','option');
			if( !empty($favicon) ): ?> <link rel="shortcut icon" href="<?php echo $favicon['url']; ?>"> <?php endif; 
		?>
		<!-- Author Meta -->
		<meta name="author" content="Andrés Felipe Patiño Vallejo">
		<!-- Meta tags SEO -->
		<meta name="keywords" content="<?php the_field('meta_keywords', 'option'); ?>">
		<meta name="description" content="<?php the_field('meta_description', 'option'); ?>">
		<meta name="robots" content="index, follow">
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<?php wp_head(); ?>		
	</head>

	<body data-spy="scroll" data-target=".header" data-offset="50">
	<!-- Page loader -->
	<div id="preloader"></div>
	
	<header class="header">
		<div class="container">
			<div class="row flexbox-center">
				<div class="col-lg-2 col-md-3 col-6">
					<div class="logo">
						<a href="#home">
							<?php 
								$logo = get_field('logo','option');
								$logo_retina = get_field('logo_retina','option');
							?>
								<img class="img-fluid" alt="<?php echo $logo['alt']; ?>" 
										src="<?php echo $logo['url']; ?>" 
										srcset="<?php echo $logo_retina['url']; ?> 2x" />							
						</a>
					</div>
				</div>
				<div class="col-lg-10 col-md-9 col-6">
					<div class="responsive-menu"></div>
				    <div class="mainmenu">
						<!-- Menu -->
				    	<?php
				    		$args = array(
				    	 		'theme_location' => 'main-menu',
				    	 		'container' => 'ul',
				    	 		'menu_id' => 'primary-menu',
				    	 		'menu_class' => '',
				    	 	);
				    	 	wp_nav_menu($args);
				    	?> 						

						<!-- Si esta activo, muestra el  botón Call to action -->
                        <?php if( get_field('call_to_action', 'option') ): 
	                        $texto = get_field('texto_call_to_action', 'option');	
	                        $url = get_field('url_call_to_action', 'option');	
                        ?> 
                        <a href="<?php echo esc_url($url); ?>" class="appao-btn">
                        	<?php echo $texto; ?>                        		
                        </a>                 	
                        <?php endif; ?>
                            
                        
				    </div>
				</div>
			</div>
		</div>
	</header>