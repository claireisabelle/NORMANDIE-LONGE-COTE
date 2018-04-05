<div id="club" class="espace-club">

		<div class="content-club">
			
			<div class="menu-club">
				
				<div class="section-club">
					<div class="section-club-title">
						Espace Clubs & Adhérents
					</div><!-- /.espace-club-title -->

					<!--
						**********************
							CLUBS
						**********************
					 --> 

					<?php
						$args = array(
							'post_type'			=> 'clubs',
							'posts_per_page' 	=> -1,
							'orderby'			=> 'title',
							'order'				=> 'ASC'
						);

						$number = 1;
						$clubs = new WP_Query($args);
						while($clubs->have_posts()): $clubs->the_post();
					?>

					<section class="card-club" id="card-club-<?php echo $number; ?>">

						<div class="card-club-btn">
							<div class="card-club-icon">
								<i class="fa fa-chevron-down chevron-btn" aria-hidden="true"></i> 
							</div>
							<!-- /.card-club-icon -->
							<div class="card-club-titre remplissage">
								<?php the_field('nom_court'); ?>
							</div>
							<!-- /#card-club-titre.card-club-titre -->
						</div>
						<!-- /.card-club-btn -->

						<div class="card-club-content" id="card-club-content-<?php echo $number; ?>">
							<div class="card-club-content-info">
								<a href="<?php the_permalink(); ?>"><span><i class="fa fa-info-circle" aria-hidden="true"></i></span> - 
								INFOS</a>
							</div>
							<div class="card-club-content-info">
								<a href="<?php the_field('url_de_la_page_des_seances'); ?>"><span><i class="fa fa-calendar" aria-hidden="true"></i></span> - 
								SEANCES</a>
							</div>
							<div class="card-club-content-info">
								<a href="<?php the_field('url_de_la_page_dactualites'); ?>"><span><i class="fa fa-commenting-o" aria-hidden="true"></i></span> - 
								ACTUALITES</a>
							</div>
						</div>
						<!-- /.card-club-content -->
					</section>
					<!-- /.card-club -->

					<?php $number++; ?>

					<?php endwhile; wp_reset_postdata(); ?>


				</div><!-- /.espace-club -->
				
				<div class="section-user">
					<div class="section-user-title">
						<a href=""><i class="fa fa-clock-o" aria-hidden="true"></i> Mes réservations</a>
					</div><!-- /.espace-user-title -->
				</div><!-- /.espace-user -->

			</div><!-- /.menu-club -->

			<div class="wrapper-boutton-ouverture">
				<div id="opening" class="boutton-ouverture">
					<i class="fa fa-bars fa-rotate-90 fa-2x"></i>
				</div><!-- /.boutton-ouverture -->
			</div><!-- /.wrapper-boutton-ouverture -->
				

		</div><!-- /.content-club -->
		
	</div><!-- /.espace-club -->