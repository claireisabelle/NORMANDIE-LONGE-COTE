<?php get_header(); ?>
	<?php while(have_posts()): the_post(); ?>
		<title><?php the_title(); ?></title>
		<meta name="description" content="" />
	<?php endwhile; ?>
<?php get_template_part('header2'); ?>


<?php get_footer(); ?>