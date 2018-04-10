			<?php if(have_posts()) : ?>

				<?php while(have_posts()): the_post(); ?>

				<?php $terms = get_the_terms( get_the_ID(), 'category');
					if( !empty($terms) ) { 
						$term = array_pop($terms);
						$custom_field = get_field('couleur', $term );
					}
				?>	

				<div class="news">

					<div class="news-thumbnail">
						<?php if(has_post_thumbnail()) : ?>
							<?php the_post_thumbnail('thumbnail'); ?>
						<?php endif; ?>
					</div><!-- /.news-thumbnail -->

					<div class="news-thumbnail-mobile">
						<?php if(has_post_thumbnail()) : ?>
							<?php the_post_thumbnail('thumbnail-mobile'); ?>
						<?php endif; ?>
					</div><!-- /.news-thumbnail-mobile -->
					
					<div class="news-content">
						
						<div class="news-content-category">
							<?php

								foreach((get_the_category()) as $category) {

									echo '<a href="'.get_category_link($category->cat_ID).'" style="background-color:'.$custom_field.'">'. $category->cat_name. '</a>';

								};

							?>
						</div>

						<div class="news-content-text">
							<h3><a href="<?php the_permalink(); ?>" style="color:<?php echo $custom_field; ?>"><?php the_title(); ?></a></h3>
							<?php the_excerpt(); ?>
						</div>
						<!-- /.news-content-up -->
						
						<div class="news-content-link">
							<a href="<?php the_permalink(); ?>" class="news-link" style="color:<?php echo $custom_field; ?>">Lire la suite &#8594;</a>
						</div>
						<!-- /.news-content-link -->
					</div>
					<!-- /.news-content -->
					
				</div>
				<!-- /.news -->

				<?php endwhile; ?>

				<?php
				// Previous/next page navigation.
					the_posts_pagination(array(
						'screen_reader_text' => __( 'Pages', 'normandielongecote' ),
						'prev_text' => __( '&laquo;', 'normandielongecote' ),
						'next_text' => __( '&raquo;', 'normandielongecote' ),
					));
				?>

			<?php else : ?>
				<?php _e('<p>Aucun article publié</p>') ?>
			<?php endif; ?>