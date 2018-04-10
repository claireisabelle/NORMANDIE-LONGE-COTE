<?php

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_categorie',
		'title' => 'Catégorie',
		'fields' => array (
			array (
				'key' => 'field_5acc72a2bf39d',
				'label' => 'Couleur',
				'name' => 'couleur',
				'type' => 'color_picker',
				'default_value' => '#00aee8',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'ef_taxonomy',
					'operator' => '==',
					'value' => 'category',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
