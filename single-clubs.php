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
				<div class="link-content">
					<a href="#interne-content" class="scroll"><i class="fa fa-arrow-circle-o-down fa-2x" aria-hidden="true"></i></a>
				</div>

			</div>
			<!-- /.showcase-wrapper -->
		</section>
		<!-- /.showcase -->

		<div class="interne-content" id="interne-content">
			<h2 class="text-center"><?php the_title(); ?></h2>

			<div class="interne-content-icone">
				<p class="text-center"><?php 
					$icone = get_field('icone'); 
					$size = 'thumbnail'; 
				?>
				<?php
					if($icone) {
						echo wp_get_attachment_image($icone, $size);
					}
				?></p>
			</div>
			<!-- /.interne-content-icone -->

			<p class="text-center"><a href="<?php the_field('url_de_la_page_des_seances'); ?>" class="btn btn-primary"><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Séances</a>
			<a href="<?php the_field('url_de_la_page_dactualites'); ?>" class="btn btn-primary"><i class="fa fa-commenting-o" aria-hidden="true"></i></i>&nbsp;&nbsp;&nbsp;Actualités</a></p>

			<?php the_content(); ?>

			<div class="card">
				<h5 class="card-header">Coordonnées</h5>
				<div class="card-body">
					<p class="card-text"><strong>Adresse :</strong> <?php the_field('adresse'); ?> </p>
					<p class="card-text"><strong>Téléphone :</strong> <?php the_field('telephone'); ?> </p>
					<p class="card-text"><strong>E-mail :</strong> <?php the_field('e-mail'); ?> </p>
					<p class="card-text"><strong>Site Internet :</strong> <a href="<?php the_field('url_du_site_internet'); ?>">Visiter le site</a> </p>
					<p class="card-text"><strong>Contact :</strong> <?php the_field('nom_du_contact'); ?> </p>
				</div><!-- /.card-body -->
			</div><!-- /.card -->

			<p class="text-center"><a href="<?php the_field('url_de_la_page_des_seances'); ?>" class="btn btn-primary"><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;Séances</a>
			<a href="<?php the_field('url_de_la_page_dactualites'); ?>" class="btn btn-primary"><i class="fa fa-commenting-o" aria-hidden="true"></i></i>&nbsp;&nbsp;&nbsp;Actualités</a></p>

		</div>
		<!-- /.interne-content -->

	<?php endwhile; ?>

<?php get_footer(); ?>