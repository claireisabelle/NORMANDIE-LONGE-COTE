<?php
/*
 * Template Name: Page Interne sans IMG
 */
?>

<?php get_header(); ?>
	<?php while(have_posts()): the_post(); ?>
		<title><?php the_field('seo-titre'); ?></title>
		<meta name="description" content="<?php the_field('seo-description'); ?>" />
	<?php endwhile; ?>
<?php get_template_part('header2'); ?>

	<?php while(have_posts()): the_post(); ?>


		<div class="interne-content" id="interne-content">
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
		</div>
		<!-- /.interne-content -->

	<?php endwhile; ?>

<?php get_footer(); ?>