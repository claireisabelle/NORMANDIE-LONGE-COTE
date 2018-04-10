<?php get_header(); ?>

	<title>Les Clubs de Normandie</title>
	<meta name="description" content="" />

<?php get_template_part('header2'); ?>

<section class="interne-content">
	

	<h1>Les clubs de Longe Côte de Normandie</h1>

	<div class="front-main-clubs text-center">

		<?php get_template_part('template-loop-clubs'); ?>

	</div>
	<!-- /.front-main-clubs -->

</section>
<!-- /.interne-content -->

<?php get_footer(); ?>