<?php
function cels_register_my_cpts() {

	/**
	 * Post Type: Historias.
	 */

	$labels = [
		"name" => __( "Historias", "cels" ),
		"singular_name" => __( "Historia", "cels" ),
		"menu_name" => __( "Historias", "cels" ),
		"all_items" => __( "Todas", "cels" ),
		"add_new" => __( "Nueva", "cels" ),
		"add_new_item" => __( "Nueva", "cels" ),
		"edit_item" => __( "Editar", "cels" ),
		"new_item" => __( "Nueva", "cels" ),
		"view_item" => __( "Ver Historia", "cels" ),
		"view_items" => __( "Ver Historias", "cels" ),
		"search_items" => __( "Buscar", "cels" ),
		"not_found" => __( "No existen historias con esas características", "cels" ),
		"not_found_in_trash" => __( "No se encontró en la papelera", "cels" ),
		"parent" => __( "Superior", "cels" ),
		"featured_image" => __( "Imagen principal", "cels" ),
		"set_featured_image" => __( "Fijar imagen principal", "cels" ),
		"remove_featured_image" => __( "Quitar imagen", "cels" ),
		"use_featured_image" => __( "Usar como imagen de slider", "cels" ),
		"archives" => __( "Historias Archivo", "cels" ),
		"insert_into_item" => __( "Insertar", "cels" ),
		"uploaded_to_this_item" => __( "Subido", "cels" ),
		"filter_items_list" => __( "Filtrar", "cels" ),
		"parent_item_colon" => __( "Superior", "cels" ),
	];

	$args = [
		"label" => __( "Historias", "cels" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "historias", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-admin-users",
		"supports" => [ "title", "editor", "thumbnail" ],
	];

	register_post_type( "historias", $args );

	/**
	 * Post Type: Casos.
	 */

	$labels = [
		"name" => __( "Casos", "cels" ),
		"singular_name" => __( "Caso", "cels" ),
	];

	$args = [
		"label" => __( "Casos", "cels" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "casos", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-menu",
		"supports" => [ "title", "editor" ],
		"taxonomies" => [ "lugares", "cat_testimonio" ],
	];

	register_post_type( "casos", $args );
}

add_action( 'init', 'cels_register_my_cpts' );

//taxonomias
function cels_register_my_taxes() {

	/**
	 * Taxonomy: Lugar.
	 */

	$labels = [
		"name" => __( "Lugar", "cels" ),
		"singular_name" => __( "Lugares", "cels" ),
	];

	$args = [
		"label" => __( "Lugar", "cels" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'lugares', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "lugares",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
			];
	register_taxonomy( "lugares", [ "historias", "casos" ], $args );

	/**
	 * Taxonomy: Categorías.
	 */

	$labels = [
		"name" => __( "Categorías", "cels" ),
		"singular_name" => __( "Categoría", "cels" ),
	];

	$args = [
		"label" => __( "Categorías", "cels" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'cat_testimonio', 'with_front' => true, ],
		"show_admin_column" => false,
		"show_in_rest" => true,
		"rest_base" => "cat_testimonio",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
			];
	register_taxonomy( "cat_testimonio", [ "testimonios", "casos" ], $args );
}
add_action( 'init', 'cels_register_my_taxes' );