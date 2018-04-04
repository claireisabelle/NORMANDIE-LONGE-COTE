<?php
	function nlc_customize_register_header($wp_customize){

		/*
		***********************************************
			PANEL HEADER
		***********************************************
		*/
		$wp_customize->add_panel('panel-header', array(
            'title' => 'EN-TETE',
            'priority' => 1,
            )
        );

		/*
		***********************************************
			SECTION EN-TETE
		***********************************************
		*/
		$wp_customize->add_section('header', array(
			'title'			=> __('En-tête, barre du menu', 'normandielongecote'),
			'description'	=> sprintf(__('Nom du site', 'normandielongecote')),
			'priority'		=> 1,
			'panel' => 'panel-header'
		));


		// LIGNE 1
		$wp_customize->add_setting('header_ligne1', array(
			'default' 		=> _x('Normandie Longe Côte','normandielongecote'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('header_ligne1', array(
			'label' 		=> __('Titre du site', 'normandielongecote'),
			'section' 		=> 'header',
			'type' 			=> 'text',
			'priority' 		=> 1
		));

		$wp_customize->selective_refresh->add_partial( 'header_ligne1', array(
	        'selector' => '#header-ligne1',
    	) );

	}
	add_action('customize_register', 'nlc_customize_register_header');