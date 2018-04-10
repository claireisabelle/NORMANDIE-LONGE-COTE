<?php get_header(); ?>
	
	<title>Actualités Normandie Longe Côte</title>
	<meta name="description" content="" />


<?php get_template_part('header2'); ?>

		<section class="actualites">
			<h2>
				<?php
					foreach((get_the_category()) as $category) {
						echo  $category->cat_name;
					};
				?>
			</h2>
			
			<?php get_template_part('template-loop-posts'); ?>

		</section>
		<!-- /.actualites -->



<?php get_footer(); ?>