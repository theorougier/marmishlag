<?php
/* 
Plugin Name: Recette du gueto
Description: Recette du gueto pas cher roya
Author: Groupe 6
Version: 1.0
*/

function wpm_custom_post_type() {

	// On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
	$labels = array(
		// Le nom au pluriel
		'name'                => _x( 'Recettes', 'Post Type General Name'),
		// Le nom au singulier
		'singular_name'       => _x( 'Recette', 'Post Type Singular Name'),
		// Le libellé affiché dans le menu
		'menu_name'           => __( 'Recette'),
		// Les différents libellés de l'administration
		'all_items'           => __( 'Toutes les Recettes'),
		'view_item'           => __( 'Voir les Recettes'),
		'add_new_item'        => __( 'Ajouter une nouvelles Recette'),
		'add_new'             => __( 'Ajouter'),
		'edit_item'           => __( 'Editer la Recette'),
		'update_item'         => __( 'Modifier la Recette'),
		'search_items'        => __( 'Rechercher une Recette'),
		'not_found'           => __( 'Non trouvée'),
		'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
	);
	
	// On peut définir ici d'autres options pour notre custom post type
	
	$args = array(
		'label'               => __( 'Recettes'),
		'description'         => __( 'Tous sur Recettes'),
		'labels'              => $labels,
		// On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
		'supports'            => array( 'title', 'author', 'revisions', 'excerpt', 'comments', 'description', 'taxonomies', 'editor', 'thumbnail'),
		/* 
		* Différentes options supplémentaires
		*/
		'show_in_rest' => true,
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => true,
		'rewrite'			  => array( 'slug' => 'Recettes'),
        'menu_icon'      => 'dashicons-products',

	);
	
	// On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
	register_post_type( 'Recettes', $args );

}
add_post_type_support( 'Recettes', 'comments' );
add_action( 'init', 'wpm_custom_post_type', 0 );
add_theme_support('post-thumbnails');
