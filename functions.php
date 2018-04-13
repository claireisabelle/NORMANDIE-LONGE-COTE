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

	add_image_size('thumbnail-mobile', 400, 100, true);
	add_image_size('panoramique', 800, 350, true);

	// Menu Main
	register_nav_menus( array(
		'primary' => __( 'En-Tête', 'normandielongecote' ),
	) );
}
add_action('after_setup_theme', 'nlc_setup');


/*
 ***********************************************
 * EXCERPT
 ***********************************************
 */
function nlc_excerpt_length(){
	return 20;
}
add_filter('excerpt_length', 'nlc_excerpt_length');



/*
 ***********************************************
 * ACF 
 ***********************************************
 */
require get_template_directory().'/inc/acf/acf-home.php';
require get_template_directory().'/inc/acf/acf-clubs.php';
require get_template_directory().'/inc/acf/acf-page-interne.php';
require get_template_directory().'/inc/acf/acf-categorie.php';


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

	// Désactive le bouton "Ajouter un club" pour les rôles non administrateurs
	if(!current_user_can('administrator')){
		$add_post = 'do_not_allow';
	}else{
		$add_post = true;
	}

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
		'capabilities' 		 => array('create_posts' => $add_post,), // Enlève le bouton "Ajouter un club" sauf pour l'administrateur
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


/*
 ***********************************************
	NOMMAGE DES ROLES
 ***********************************************
 */
function nlc_change_role_name() {
    global $wp_roles;
    if ( ! isset( $wp_roles ) )
        $wp_roles = new WP_Roles();
    //Roles : "administrator" "editor", "author", "contributor" or "subscriber"
    $wp_roles->roles['author']['name'] = 'Club';
    $wp_roles->role_names['author'] = 'Club';  
    $wp_roles->roles['contributor']['name'] = 'Contributeur';
    $wp_roles->role_names['contributor'] = 'Contributeur';  
    $wp_roles->roles['subscriber']['name'] = 'Adherent';
    $wp_roles->role_names['subscriber'] = 'Adherent'; 
}
add_action('init', 'nlc_change_role_name');


/*
 ***********************************************
	CUSTOMISATION PAGE WP-LOGIN.PHP
 ***********************************************
 */

function nlc_custom_login_css()  {
    echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('template_directory') . '/css/style-login.css" />';
}
add_action('login_head', 'nlc_custom_login_css');

// Filtre qui permet de changer l'url du logo
function nlc_custom_url_login()  {
    return get_bloginfo( 'siteurl' ); // On retourne l'index du site
}
add_filter('login_headerurl', 'nlc_custom_url_login');

// Filtre qui permet de changer l'attribut title du logo
function nlc_custom_title_login($message) {
	$title = 'Normandie Longe Côte';
    return $title; 
}
add_filter('login_headertitle', 'nlc_custom_title_login');



/*
 ***********************************************
	PARAMETRAGE PAR DEFAUT DU NOM DU BILLET
 ***********************************************
 */
function nlc_my_em_add_default_tickets($tickets, $EM_Bookings, $force_reload = false) {
    if ( empty($tickets->tickets) ) {
        $ticket_data = array();
        $ticket_data[0] = array('ticket_name' => 'Place adhérent');
        $ticket_data[1] = array('ticket_name' => 'Place encadrant');

        if (is_array($tickets->tickets)) unset($tickets->tickets);
        foreach ($ticket_data as $ticket) {
            $EM_Ticket = new EM_Ticket($ticket);
            $tickets->tickets[] = $EM_Ticket;
        }
    }
    return $tickets;
}
add_filter('em_bookings_get_tickets', 'nlc_my_em_add_default_tickets', 10, 2);



/*
 ***********************************************
	AJOUT ROLE ENCADRANT
 ***********************************************
 */

$result = add_role( 'encadrant', __(

'Encadrant' ),

	array(
		'read' => true, // true allows this capability
		'edit_posts' => false, // Allows user to edit their own posts
		'edit_pages' => false, // Allows user to edit pages
		'edit_others_posts' => false, // Allows user to edit others posts not just their own
		'create_posts' => false, // Allows user to create new posts
		'manage_categories' => false, // Allows user to manage post categories
		'publish_posts' => false, // Allows the user to publish, otherwise posts stays in draft mode
		'edit_themes' => false, // false denies this capability. User can’t edit your theme
		'install_plugins' => false, // User cant add new plugins
		'update_plugin' => false, // User can’t update any plugins
		'update_core' => false, // user cant perform core updates
	)
);