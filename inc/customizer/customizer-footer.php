<?php
	function nlc_customize_register_footer($wp_customize){

		/*
		***********************************************
			PANEL FOOTER
		***********************************************
		*/
		$wp_customize->add_panel('panel-footer', array(
            'title' => 'PIED DE PAGE',
            'priority' => 2,
            )
        );

		/*
		***********************************************
			SECTION FOOTER 1
		***********************************************
		*/
		$wp_customize->add_section('footer1', array(
			'title'			=> __('Pied de page - Contact', 'normandielongecote'),
			'description'	=> sprintf(__('Coordonnées de contact', 'normandielongecote')),
			'priority'		=> 1,
			'panel' => 'panel-footer'
		));


		// LIGNE 1
		$wp_customize->add_setting('footer1_ligne1', array(
			'default' 		=> _x('Normandie Longe Côte','normandielongecote'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('footer1_ligne1', array(
			'label' 		=> __('Titre', 'normandielongecote'),
			'section' 		=> 'footer1',
			'type' 			=> 'text',
			'priority' 		=> 1
		));

		$wp_customize->selective_refresh->add_partial( 'footer1_ligne1', array(
	        'selector' => '#footer1-ligne1',
    	) );


    	// LIGNE 2
		$wp_customize->add_setting('footer1_ligne2', array(
			'default' 		=> _x('Promotion et structuration du longe côte dans tous ses aspects au sein de la Normandie.','normandielongecote'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('footer1_ligne2', array(
			'label' 		=> __('Description', 'normandielongecote'),
			'section' 		=> 'footer1',
			'type' 			=> 'text',
			'priority' 		=> 2
		));

		$wp_customize->selective_refresh->add_partial( 'footer1_ligne2', array(
	        'selector' => '#footer1-ligne2',
    	) );


    	// ADRESSE
		$wp_customize->add_setting('footer1_adresse', array(
			'default' 		=> _x('Les Courte Terres<br />14400 BLAY','normandielongecote'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('footer1_adresse', array(
			'label' 		=> __('Adresse', 'normandielongecote'),
			'section' 		=> 'footer1',
			'type' 			=> 'text',
			'priority' 		=> 3
		));

		$wp_customize->selective_refresh->add_partial( 'footer1_adresse', array(
	        'selector' => '#footer1-adresse',
    	) );


    	// TELEPHONE
		$wp_customize->add_setting('footer1_tel', array(
			'default' 		=> _x('06 78 39 60 23','normandielongecote'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('footer1_tel', array(
			'label' 		=> __('Telephone', 'normandielongecote'),
			'section' 		=> 'footer1',
			'type' 			=> 'text',
			'priority' 		=> 4
		));

		$wp_customize->selective_refresh->add_partial( 'footer1_tel', array(
	        'selector' => '#footer1-tel',
    	) );


    	// EMAIL
		$wp_customize->add_setting('footer1_email', array(
			'default' 		=> _x('normandie@longecote.fr','normandielongecote'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('footer1_email', array(
			'label' 		=> __('E-mail', 'normandielongecote'),
			'section' 		=> 'footer1',
			'type' 			=> 'text',
			'priority' 		=> 5
		));

		$wp_customize->selective_refresh->add_partial( 'footer1_email', array(
	        'selector' => '#footer1-email',
    	) );


    	// URL
		$wp_customize->add_setting('footer1_url', array(
			'default' 		=> _x('www.normandielongecote.fr','normandielongecote'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('footer1_url', array(
			'label' 		=> __('Site Internet (sans le http://)', 'normandielongecote'),
			'section' 		=> 'footer1',
			'type' 			=> 'text',
			'priority' 		=> 6
		));

		$wp_customize->selective_refresh->add_partial( 'footer1_url', array(
	        'selector' => '#footer1-url',
    	) );
		




		/*
		***********************************************
			SECTION FOOTER 2
		***********************************************
		*/
		$wp_customize->add_section('footer2', array(
			'title'			=> __('Pied de page - Mentions', 'normandielongecote'),
			'description'	=> sprintf(__('Mentions légales', 'normandielongecote')),
			'priority'		=> 2,
			'panel' => 'panel-footer'
		));


		// TITRE
		$wp_customize->add_setting('footer2_titre', array(
			'default' 		=> _x('Normandie Longe Côte','normandielongecote'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('footer2_titre', array(
			'label' 		=> __('Titre', 'normandielongecote'),
			'section' 		=> 'footer2',
			'type' 			=> 'text',
			'priority' 		=> 1
		));

		$wp_customize->selective_refresh->add_partial( 'footer2_titre', array(
	        'selector' => '#footer2-titre',
    	) );


    	// MENTION TITRE
		$wp_customize->add_setting('footer2_mention_titre', array(
			'default' 		=> _x('Mentions légales','normandielongecote'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('footer2_mention_titre', array(
			'label' 		=> __('Texte mentions', 'normandielongecote'),
			'section' 		=> 'footer2',
			'type' 			=> 'text',
			'priority' 		=> 2
		));

		$wp_customize->selective_refresh->add_partial( 'footer2_mention_titre', array(
	        'selector' => '#footer2-mention-titre',
    	) );


    	// MENTION URL
		$wp_customize->add_setting('footer2_mention_url', array(
			'default' 		=> _x('#','normandielongecote'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('footer2_mention_url', array(
			'label' 		=> __('Url de la page des mentions', 'normandielongecote'),
			'section' 		=> 'footer2',
			'type' 			=> 'text',
			'priority' 		=> 3
		));

		$wp_customize->selective_refresh->add_partial( 'footer2_mention_url', array(
	        'selector' => '#footer2-mention-url',
    	) );

	}
	add_action('customize_register', 'nlc_customize_register_footer');
	