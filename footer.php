		<section class="contact" id="contact">
			<h2>Contact</h2>
			
			<div class="informations">
				<div class="info info-shrink">
					<h3 id="footer1-ligne1"><?php echo get_theme_mod('footer1_ligne1', 'Normandie Longe Côte'); ?></h3>
					<p id="footer1-ligne2"><?php echo get_theme_mod('footer1_ligne2', 'Promotion et structuration du longe côte dans tous ses aspects au sein de la Normandie.'); ?></p>
				</div>
				<!-- /.info -->

				<div class="info">
					<h3>Coordonnées</h3>
					<p id="footer1-adresse"><?php echo get_theme_mod('footer1_adresse', 'Les Courte Terres<br />14400 BLAY'); ?></p>
				</div>
				<!-- /.info -->

				<div class="info coordonnees">
					<ul>
						<li id="footer1-tel"><i class="fa fa-phone" aria-hidden="true"></i> <?php echo get_theme_mod('footer1_tel', '06 78 39 60 23'); ?></li>
						<li id="footer1-email"><a href="mailto:<?php echo get_theme_mod('footer1_email', 'normandie@longecote.fr'); ?>"><i class="fa fa-envelope-o" aria-hidden="true"></i> <?php echo get_theme_mod('footer1_email', 'normandie@longecote.fr'); ?></a></li>
						<li id="footer1-url"><a href="http://<?php echo get_theme_mod('footer1_url', 'www.normandielongecote.fr'); ?>"><?php echo get_theme_mod('footer1_url', 'www.normandielongecote.fr'); ?></a></li>
					</ul>

				</div>
				<!-- /.info -->
			</div>
			<!-- /.informations -->

		</section>
		<!-- /.contact -->
		
		<footer>
			<p id="footer2-titre"><?php echo get_theme_mod('footer2_titre', 'Normandie Longe Côte'); ?> - <a href="<?php echo get_theme_mod('footer2_mention_url', '#'); ?>" id="footer2-mention-titre"><?php echo get_theme_mod('footer2_mention_titre', 'Mentions légales'); ?></a> - <?php echo date('Y'); ?></p>
		</footer>

	</div>
	<!-- /.site-content -->

	
<?php wp_footer(); ?>
</body>
</html>