		<nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light">

			<a class="navbar-brand" href="#" id="header-ligne1"><?php echo get_theme_mod('header_ligne1', 'Normandie Longe Côte'); ?></a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>

			<?php
				wp_nav_menu( array(
					'theme_location'    => 'primary',
					'depth'             => 2,
					'container'         => 'div',
					'container_class'   => 'collapse navbar-collapse justify-content-end',
					'container_id'      => 'navbarTogglerDemo02',
					'menu_class'        => 'navbar-nav',
					'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
					'walker'            => new WP_Bootstrap_Navwalker()
				) );
			?>

		</nav>