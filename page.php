<?php get_header(); ?>
	
	<title><?php the_title(); ?></title>
	<meta name="description" content="" />


<?php get_template_part('header2'); ?>


	<section class="actualites">
		
		
		<?php
			while ( have_posts() ) : the_post();
		?>

			<h2><?php the_title(); ?></h2>
			
			<?php
				the_content();
			?>

		<?php
			endwhile; // End of the loop.
		?>

	</section>
	<!-- /.actualites -->



<?php get_footer(); ?>