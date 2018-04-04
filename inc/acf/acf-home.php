<?php

/*
 ***********************************************
 * ACF - HOME PAGE (template-home.php)
 ***********************************************
 */

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_home',
		'title' => 'Home',
		'fields' => array (
			array (
				'key' => 'field_5ac499257821b',
				'label' => 'En-Tête',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_5ac4986778217',
				'label' => 'Sous-Titre',
				'name' => 'sous-titre',
				'type' => 'text',
				'required' => 1,
				'default_value' => '8 clubs sportifs pour pratiquer le longe côte en Normandie',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5ac498c178218',
				'label' => 'Texte Bouton',
				'name' => 'texte_bouton',
				'type' => 'text',
				'required' => 1,
				'default_value' => 'Les Clubs',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5ac499437821c',
				'label' => 'Corps',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_5ac498ef78219',
				'label' => 'Titre 2',
				'name' => 'titre_2',
				'type' => 'text',
				'required' => 1,
				'default_value' => 'Les Clubs Normands',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5ac499067821a',
				'label' => 'Description ',
				'name' => 'description_',
				'type' => 'wysiwyg',
				'default_value' => 'Découvrez et pratiquez le longe côte toute l\'année en adhérant à l\'un des 8 clubs normands affiliés à NORMANDIE LONGE COTE',
				'toolbar' => 'full',
				'media_upload' => 'yes',
			),
			array (
				'key' => 'field_5ac49a40ad13b',
				'label' => 'API MAP',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_5ac49b4dad13f',
				'label' => 'Google Map',
				'name' => 'google_map',
				'type' => 'textarea',
				'default_value' => '',
				'placeholder' => '',
				'maxlength' => '',
				'rows' => '',
				'formatting' => 'br',
			),
			array (
				'key' => 'field_5ac49a4fad13c',
				'label' => 'Référencement',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_5ac49a5ead13d',
				'label' => 'SEO-Titre',
				'name' => 'seo-titre',
				'type' => 'text',
				'instructions' => 'Titre explicite de 70 caractères max. ',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => 70,
			),
			array (
				'key' => 'field_5ac49a97ad13e',
				'label' => 'SEO-Description',
				'name' => 'seo-description',
				'type' => 'text',
				'instructions' => 'Texte description de 250 caractères max.',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => 250,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'template-home.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
