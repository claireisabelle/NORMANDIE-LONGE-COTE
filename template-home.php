<?php
/*
 * Template Name: Accueil
 */
?>

<?php get_header(); ?>
	<?php while(have_posts()): the_post(); ?>
		<title><?php the_field('seo-titre'); ?></title>
		<meta name="description" content="" />
		<style>
			.showcase{
				background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);
			}			
		</style>
	<?php endwhile; ?>
<?php get_template_part('header2'); ?>

	<?php while(have_posts()): the_post(); ?>

		<section class="showcase">
			<div class="showcase-wrapper">
				<h1><?php the_title(); ?></h1>
				<p class="description"><?php the_field('sous-titre'); ?></p>
				<a href="#front-main" class="scroll link-section"><?php the_field('texte_bouton'); ?></a>
			</div>
			<!-- /.showcase-wrapper -->
		</section>
		<!-- /.showcase -->

		
		<section class="front-main" id="front-main">
			<h2><?php the_field('titre_2'); ?></h2>
			<p><?php the_field('description_'); ?></p>
			
			<div class="google-map-wrapper">
				<div class="google-map">
					<iframe src="<?php the_field('google_map'); ?>" width="640" height="480"></iframe>
				</div>
				<!-- /.google-map -->
			</div>
			<!-- /.google-map-wrapper -->
	<?php endwhile; ?>

			<div class="front-main-clubs">

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

			</div>
			<!-- /.front-main-clubs -->


		</section>
		<!-- /.front-main -->


<?php get_footer(); ?>