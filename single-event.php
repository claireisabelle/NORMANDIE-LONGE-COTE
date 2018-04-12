<?php get_header(); ?>
	<?php while(have_posts()): the_post(); ?>
		<title><?php the_title(); ?></title>
		<meta name="description" content="<?php the_excerpt(); ?>" />
	<?php endwhile; ?>
<?php get_template_part('header2'); ?>

	<?php while(have_posts()): the_post(); ?>


		<div class="interne-content" id="interne-content">
				
			<?php the_content(); ?>				

		</div>
		<!-- /.interne-content -->

	<?php endwhile; ?>

<?php get_footer(); ?>