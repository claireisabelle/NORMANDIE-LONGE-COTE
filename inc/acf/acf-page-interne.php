<?php

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_page-interne',
		'title' => 'Page interne',
		'fields' => array (
			array (
				'key' => 'field_5accd970f03ef',
				'label' => 'SEO-Titre',
				'name' => 'seo-titre',
				'type' => 'text',
				'instructions' => 'Texte explicite de 70 caractères max.',
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => 70,
			),
			array (
				'key' => 'field_5accd9a4f03f0',
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
					'value' => 'template-interne-img.php',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
			array (
				array (
					'param' => 'page_template',
					'operator' => '==',
					'value' => 'template-interne.php',
					'order_no' => 0,
					'group_no' => 1,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
