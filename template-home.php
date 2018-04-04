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

			<div class="front-main-clubs">

				<div class="club-overview">
					<h3>Hauteville sur Mer</h3>
					<p>Longe côte Hautais</p>
					<div class="rubriques">
						<a href=""><i class="fa fa-info-circle" aria-hidden="true"></i> Infos</a>
						<a href=""><i class="fa fa-calendar" aria-hidden="true"></i> Séances</a>
						<a href=""><i class="fa fa-newspaper-o" aria-hidden="true"></i> Actualités</a>
						<div class="rubrique-net"><a href=""><i class="fa fa-globe" aria-hidden="true"></i> Site Internet</a></div>
					</div>
					<!-- /.rubriques -->
				</div>
				<!-- /.club-overview -->

				<div class="club-overview">
					<h3>Jullouville - Caroles</h3>
					<p>Longe côte du Pays Granvillais</p>
					<div class="rubriques">
						<a href=""><i class="fa fa-info-circle" aria-hidden="true"></i> Infos</a>
						<a href=""><i class="fa fa-calendar" aria-hidden="true"></i> Séances</a>
						<a href=""><i class="fa fa-newspaper-o" aria-hidden="true"></i> Actualités</a>
						<div class="rubrique-net"><a href=""><i class="fa fa-globe" aria-hidden="true"></i> Site Internet</a></div>
					</div>
					<!-- /.rubriques -->
				</div>
				<!-- /.club-overview -->

				<div class="club-overview">
					<h3>Bernières sur Mer</h3>
					<p>Juno Longe Côte</p>
					<div class="rubriques">
						<a href=""><i class="fa fa-info-circle" aria-hidden="true"></i> Infos</a>
						<a href=""><i class="fa fa-calendar" aria-hidden="true"></i> Séances</a>
						<a href=""><i class="fa fa-newspaper-o" aria-hidden="true"></i> Actualités</a>
						<div class="rubrique-net"><a href=""><i class="fa fa-globe" aria-hidden="true"></i> Site Internet</a></div>
					</div>
					<!-- /.rubriques -->
				</div>
				<!-- /.club-overview -->

				<div class="club-overview">
					<h3>Omaha Beach</h3>
					<p>Eolia Normandie - CPNOB</p>
					<div class="rubriques">
						<a href=""><i class="fa fa-info-circle" aria-hidden="true"></i> Infos</a>
						<a href=""><i class="fa fa-calendar" aria-hidden="true"></i> Séances</a>
						<a href=""><i class="fa fa-newspaper-o" aria-hidden="true"></i> Actualités</a>
						<div class="rubrique-net"><a href=""><i class="fa fa-globe" aria-hidden="true"></i> Site Internet</a></div>
					</div>
					<!-- /.rubriques -->
				</div>
				<!-- /.club-overview -->

				<div class="club-overview">
					<h3>Côte de Nacre</h3>
					<p>Longe côte de Nacre</p>
					<div class="rubriques">
						<a href=""><i class="fa fa-info-circle" aria-hidden="true"></i> Infos</a>
						<a href=""><i class="fa fa-calendar" aria-hidden="true"></i> Séances</a>
						<a href=""><i class="fa fa-newspaper-o" aria-hidden="true"></i> Actualités</a>
						<div class="rubrique-net"><a href=""><i class="fa fa-globe" aria-hidden="true"></i> Site Internet</a></div>
					</div>
					<!-- /.rubriques -->
				</div>
				<!-- /.club-overview -->

				<div class="club-overview">
					<h3>Asnelles</h3>
					<p>ALSA - Asnelles Longe Côte</p>
					<div class="rubriques">
						<a href=""><i class="fa fa-info-circle" aria-hidden="true"></i> Infos</a>
						<a href=""><i class="fa fa-calendar" aria-hidden="true"></i> Séances</a>
						<a href=""><i class="fa fa-newspaper-o" aria-hidden="true"></i> Actualités</a>
						<div class="rubrique-net"><a href=""><i class="fa fa-globe" aria-hidden="true"></i> Site Internet</a></div>
					</div>
					<!-- /.rubriques -->
				</div>
				<!-- /.club-overview -->

				<div class="club-overview">
					<h3>Omaha - Utah Beach</h3>
					<p>Easy Longe Côte</p>
					<div class="rubriques">
						<a href=""><i class="fa fa-info-circle" aria-hidden="true"></i> Infos</a>
						<a href=""><i class="fa fa-calendar" aria-hidden="true"></i> Séances</a>
						<a href=""><i class="fa fa-newspaper-o" aria-hidden="true"></i> Actualités</a>
						<div class="rubrique-net"><a href=""><i class="fa fa-globe" aria-hidden="true"></i> Site Internet</a></div>
					</div>
					<!-- /.rubriques -->
				</div>
				<!-- /.club-overview -->

				<div class="club-overview">
					<h3>Saint-Jouin-Bruneval</h3>
					<p>Longe Côte Saint-Jouin Plage</p>
					<div class="rubriques">
						<a href=""><i class="fa fa-info-circle" aria-hidden="true"></i> Infos</a>
						<a href=""><i class="fa fa-calendar" aria-hidden="true"></i> Séances</a>
						<a href=""><i class="fa fa-newspaper-o" aria-hidden="true"></i> Actualités</a>
						<div class="rubrique-net"><a href=""><i class="fa fa-globe" aria-hidden="true"></i> Site Internet</a></div>
					</div>
					<!-- /.rubriques -->
				</div>
				<!-- /.club-overview -->


			</div>
			<!-- /.front-main-clubs -->


		</section>
		<!-- /.front-main -->

	<?php endwhile; ?>

<?php get_footer(); ?>