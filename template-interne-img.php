<?php
/*
 * Template Name: Page Interne avec IMG
 */
?>

<?php get_header(); ?>
	<?php while(have_posts()): the_post(); ?>
		<title><?php the_field('seo-titre'); ?></title>
		<meta name="description" content="" />
		<style>
			.showcase-interne{
				background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);
			}			
		</style>
	<?php endwhile; ?>
<?php get_template_part('header2'); ?>

	<?php while(have_posts()): the_post(); ?>

		<section class="showcase-interne">
			<div class="showcase-wrapper-interne">
				<h1><?php the_title(); ?></h1>
				<p>Activité physique et sportive née en 2005, découvrez les atouts du lonte côte...</p>
				<div class="link-content">
					<a href="#interne-content" class="scroll"><i class="fa fa-arrow-circle-o-down fa-2x" aria-hidden="true"></i></a>
				</div>

			</div>
			<!-- /.showcase-wrapper -->
		</section>
		<!-- /.showcase -->

		<div class="interne-content" id="interne-content">
			<?php the_content(); ?>
		</div>
		<!-- /.interne-content -->

	<?php endwhile; ?>

<?php get_footer(); ?>