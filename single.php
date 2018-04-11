<?php get_header(); ?>
	<?php while(have_posts()): the_post(); ?>
		<title><?php the_title(); ?></title>
		<meta name="description" content="<?php the_excerpt(); ?>" />
	<?php endwhile; ?>
<?php get_template_part('header2'); ?>

	<?php while(have_posts()): the_post(); ?>


		<div class="interne-content" id="interne-content">
		
			<div class="news-content-category in-single">
				<?php $terms = get_the_terms( get_the_ID(), 'category');
					if( !empty($terms) ) { 
						$term = array_pop($terms);
						$custom_field = get_field('couleur', $term );
					}
				?>	

				<?php
					foreach((get_the_category()) as $category) {
						echo '<a href="'.get_category_link($category->cat_ID).'" style="background-color:'.$custom_field.'">'. $category->cat_name. '</a>';
					};
				?>
			</div>
			<!-- /.news-content-category -->
		

			<h1><?php the_title(); ?></h1>
			
			<div class="interne-content-single-img">
				<?php if(has_post_thumbnail()) : ?>
					<p class="text-center"><?php the_post_thumbnail('panoramique'); ?></p>
				<?php endif; ?>
			</div>
			<!-- /.interne-content-single-img -->
			

			<?php the_content(); ?>

			<hr />
			
			<div class="news-content-category">
				<?php $terms = get_the_terms( get_the_ID(), 'category');
					if( !empty($terms) ) { 
						$term = array_pop($terms);
						$custom_field = get_field('couleur', $term );
					}
				?>	

				<?php
					foreach((get_the_category()) as $category) {
						echo '<a href="'.get_category_link($category->cat_ID).'" style="background-color:'.$custom_field.'">'. $category->cat_name. '</a>';
					};
				?>
			</div>
			<!-- /.news-content-category -->

			<div class="news-content-previous-next">
				<?php previous_post_link('%link', '&#9668; Précédent', TRUE); ?>&nbsp;&nbsp;&nbsp;
				<?php next_post_link('%link', 'Suivant &#9658;', TRUE); ?> 
			</div>
			<!-- /.news-content-previous-next -->
 			
 			<hr />

 			<div class="news-content-category">
 				<a href="<?php echo site_url('actualites'); ?>" style="background-color:#00aee8;">Toutes les actualités</a>
 			</div>
 			<!-- /.news-content-category -->

 			<div class="news-content-previous-next">
				<?php previous_post_link('%link', '&#9668; Précédent'); ?>&nbsp;&nbsp;&nbsp;
				<?php next_post_link('%link', 'Suivant &#9658;'); ?> 
			</div>
			<!-- /.news-content-previous-next -->

		</div>
		<!-- /.interne-content -->

	<?php endwhile; ?>

<?php get_footer(); ?>