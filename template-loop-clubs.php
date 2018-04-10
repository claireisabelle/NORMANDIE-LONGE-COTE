			<?php
				$args = array(
					'post_type'			=> 'clubs',
					'posts_per_page' 	=> -1,
					'orderby'			=> 'title',
					'order'				=> 'ASC'
				);

				$clubs = new WP_Query($args);
				while($clubs->have_posts()): $clubs->the_post();
			?>

				<div class="club-overview">
					<h3><?php the_field('lieu_de_pratique'); ?></h3>

					<div class="interne-content-icone">
						<p class="text-center">
						<?php 
							$icone = get_field('icone'); 
							$size = 'thumbnail'; 
						?>
						<?php
							if($icone) {
								echo wp_get_attachment_image($icone, $size);
							}
						?></p>
					</div>
					<!-- /.interne-content-icone -->

					<p><?php the_title(); ?></p>
					<div class="rubriques">
						<a href="<?php the_permalink(); ?>"><i class="fa fa-info-circle" aria-hidden="true"></i> Infos</a>
						<a href="<?php the_field('url_de_la_page_des_seances'); ?>"><i class="fa fa-calendar" aria-hidden="true"></i> Séances</a>
						<a href="<?php the_field('url_de_la_page_dactualites'); ?>"><i class="fa fa-commenting-o" aria-hidden="true"></i> Actualités</a>
						<div class="rubrique-net"><a href="<?php the_field('url_du_site_internet'); ?>"><i class="fa fa-globe" aria-hidden="true"></i> Site Internet</a></div>
					</div>
					<!-- /.rubriques -->
				</div>
				<!-- /.club-overview -->

			<?php endwhile; wp_reset_postdata(); ?>