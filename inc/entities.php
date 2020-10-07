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
	register_taxonomy( "lugares", [ "historias" ], $args );

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
	register_taxonomy( "cat_testimonio", [ "testimonios" ], $args );
}
add_action( 'init', 'cels_register_my_taxes' );

//campos
if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'group_5f7c6aa6c54b8',
        'title' => 'Casos',
        'fields' => array(
            array(
                'key' => 'field_5f7c6aaf8b8a3',
                'label' => 'Fecha',
                'name' => 'fecha',
                'type' => 'date_picker',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'display_format' => 'd/m/Y',
                'return_format' => 'd/m/Y',
                'first_day' => 1,
            ),
            array(
                'key' => 'field_5f7c6b6c62927',
                'label' => 'Color de fondo',
                'name' => 'color_de_fondo',
                'type' => 'color_picker',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'casos',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'side',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));
    
    acf_add_local_field_group(array(
        'key' => 'group_5f73824ed1c49',
        'title' => 'Historias Campos',
        'fields' => array(
            array(
                'key' => 'field_5f7dbe8ad8fcd',
                'label' => 'Titulo Alternativo',
                'name' => 'titulo_alternativo',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_5f7dc126af851',
                'label' => 'Imagen Alternativa',
                'name' => 'imagen_alternativa',
                'type' => 'image',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'url',
                'preview_size' => 'full',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ),
            array(
                'key' => 'field_5f73825b6d542',
                'label' => 'Fecha',
                'name' => 'fecha',
                'type' => 'date_picker',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'display_format' => 'd/m/Y',
                'return_format' => 'd/m/Y',
                'first_day' => 0,
            ),
            array(
                'key' => 'field_5f73828a6d543',
                'label' => 'Subtitulo',
                'name' => 'subtitulo',
                'type' => 'text',
                'instructions' => 'Ej. Masacre San Miguel del Monte. NO requerido',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'historias',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'side',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));
    
    endif;