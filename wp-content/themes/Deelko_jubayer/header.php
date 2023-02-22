<!DOCTYPE HTML>

<html>
	<head>
		<title>Dopetrope by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<?php wp_head() ?>
	</head>
	
	<body <?php body_class( 'homepage is-preload' )?>>
		<div id="page-wrapper">

			<!-- Header -->
				<section id="header">

					<!-- Logo -->
						<?php the_custom_logo( ) ?>

					<!-- Nav -->
						<nav id="nav">
							
							<?php
									wp_nav_menu( array(
										'theme-location' => 'primary',
										'menu_class'     => 'nav_list',
										'menu_id'     => '',
										'container'		 => ''
									) );
								?>
						</nav>

					

				</section>