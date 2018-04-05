<?php

/*
 ***********************************************
 * CSS AND JS SCRIPTS
 ***********************************************
 */

function nlc_styles(){

	// CSS FILES
	wp_register_style('googlefonts', 'https://fonts.googleapis.com/css?family=Lato:400,700', array(), '1.0.0');
	wp_register_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css', array(), '4.0.0');
	wp_register_style('style', get_template_directory_uri().'/style.css', array('bootstrap'), '1.0.0');

	wp_enqueue_style('googlefont');
	wp_enqueue_style('bootstrap');
	wp_enqueue_style('style');

	// JS FILES
	wp_register_script('fontawesome', 'https://use.fontawesome.com/7e001e981e.js', array(), '4.0.0', true);
	wp_register_script('jquery3', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(), '3.2.1', true);
	wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js', array(), '1.12.3', true);
	wp_register_script('bootstrapjs', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js', array('jquery3', 'popper'), '4.0.0', true);
	wp_register_script('scripts', get_template_directory_uri().'/js/scripts.js', array('jquery3'), '1.0.0', true);

	wp_enqueue_script('fontawesome');
	wp_enqueue_script('jquery3');
	wp_enqueue_script('popper');
	wp_enqueue_script('bootstrapjs');
	wp_enqueue_script('scripts');


}

add_action('wp_enqueue_scripts', 'nlc_styles');


/*
 ***********************************************
 * SET UP THEME
 ***********************************************
 */

function nlc_setup(){
	add_theme_support('post-thumbnails');

	// Menu Main
	register_nav_menus( array(
		'primary' => __( 'En-Tête', 'normandielongecote' ),
	) );
}
add_action('after_setup_theme', 'nlc_setup');


/*
 ***********************************************
 * ACF 
 ***********************************************
 */
require get_template_directory().'/inc/acf/acf-home.php';
require get_template_directory().'/inc/acf/acf-clubs.php';


/*
 ***********************************************
	CUSTOMIZER
 ***********************************************
 */
require get_stylesheet_directory().'/inc/customizer/customizer-footer.php';
require get_stylesheet_directory().'/inc/customizer/customizer-header.php';


/*
 ***********************************************
	NAVWALKER
 ***********************************************
 */
if ( ! file_exists( get_template_directory() . '/inc/navwalker/class-wp-bootstrap-navwalker.php' ) ) {
	// file does not exist... return an error.
	return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
	// file exists... require it.
    require_once get_template_directory() . '/inc/navwalker/class-wp-bootstrap-navwalker.php';
}


/*
 ***********************************************
	CUSTOM POST TYPE CLUBS
 ***********************************************
 */
function nlc_clubs(){
	$labels = array(
		'name'               => _x( 'Clubs', 'normandielongecote' ),
		'singular_name'      => _x( 'Club', 'post type singular name', 'normandielongecote' ),
		'menu_name'          => _x( 'Clubs', 'admin menu', 'normandielongecote' ),
		'name_admin_bar'     => _x( 'Club', 'add new on admin bar', 'normandielongecote' ),
		'add_new'            => _x( 'Ajouter un Club', 'book', 'normandielongecote' ),
		'add_new_item'       => __( 'Ajouter une nouveau Club', 'normandielongecote' ),
		'new_item'           => __( 'Nouveau Club', 'normandielongecote' ),
		'edit_item'          => __( 'Editer Club', 'normandielongecote' ),
		'view_item'          => __( 'Voir le Club', 'normandielongecote' ),
		'all_items'          => __( 'Tous les Clubs', 'normandielongecote' ),
		'search_items'       => __( 'Recherche Club', 'normandielongecote' ),
		'parent_item_colon'  => __( 'Parent Club:', 'normandielongecote' ),
		'not_found'          => __( 'Aucun Club trouvé.', 'normandielongecote' ),
		'not_found_in_trash' => __( 'Aucun Club dans la corbeille.', 'normandielongecote' )
	);

	$args = array(
		'labels'             => $labels,
    	'description'        => __( 'Les clubs de Normandie', 'normandielongecote' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'clubs' ),
		'capability_type'    => 'post',
		'capabilities' 		 => array('create_posts' => 'do_not_allow',), // Enlève le bouton "Ajouter un club"
		'map_meta_cap' 		 => true, // Mais permet de toujours éditer / supprimer"
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'editor', 'thumbnail', 'author' ),
		'menu_icon'			 => 'dashicons-id-alt',
		'taxonomies'          => array( 'category' ),
	);

	register_post_type( 'clubs', $args );
}

add_action( 'init', 'nlc_clubs' );
