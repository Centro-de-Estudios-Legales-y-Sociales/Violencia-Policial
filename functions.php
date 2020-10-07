<?php

function admin_styles() {
    wp_enqueue_style( 'admin-style-cels', get_template_directory_uri() . '/styles/admin.css' );
}

function styles_scripts_header() {
    wp_enqueue_style( 'bs-cels', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' );
    wp_enqueue_style( 'selec-cels', get_template_directory_uri() . '/bower_components/angular-ui-select/dist/select.min.css' );
    wp_enqueue_style( 'c3-cels', get_template_directory_uri() . '/styles/c3.min.css' );
    wp_enqueue_style( 'fonts-cels', get_template_directory_uri() . '/styles/fonts/styles.css' );
    wp_enqueue_style( 'animate-cels', get_template_directory_uri() . '/styles/animate.css' );
    wp_enqueue_style( 'theme-styles-cels', get_template_directory_uri() . '/stylesheets/css/style.css' );
    wp_enqueue_style( 'style-cels', get_template_directory_uri() . '/style.css' );
    wp_enqueue_script( 'font-aw-cels', 'https://kit.fontawesome.com/ce2ef34607.js' );
}

function styles_scripts_footer() {
    wp_enqueue_script( 'bsjs-cels', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array ( 'jquery' ), false, true  );
    wp_enqueue_script( 'menuscroll-cels', get_template_directory_uri() .'/js/menu-scroll.js', array ( 'jquery' ) );
    wp_enqueue_script( 'rmcdn-cels', 'https://cdnjs.cloudflare.com/ajax/libs/Readmore.js/2.2.1/readmore.min.js', array ( 'jquery' ), false, true  );
    wp_enqueue_script( 'rmsc-cels', get_template_directory_uri() .'/js/readmore.js', array ( 'jquery' ), false, true  );
    wp_enqueue_script( 'sb-cels', get_template_directory_uri() .'/js/search-box.js', array ( 'jquery' ), false, true  );
    wp_enqueue_script( 'sd3.v4-cels','https://d3js.org/d3.v4.min.js', array(), false, true );
    wp_enqueue_script( 'd3-array.v1-cels','https://d3js.org/d3-array.v1.min.js', array(), false, true );
    wp_enqueue_script( 'd3-geo.v1-cels','https://d3js.org/d3-geo.v1.min.js', array(), false, true );
    wp_enqueue_script( 'd3-legend.v1-cels','https://cdnjs.cloudflare.com/ajax/libs/d3-legend/2.25.6/d3-legend.min.js', array(), false, true );
    wp_enqueue_script( 'd3-annotation-cels','https://cdnjs.cloudflare.com/ajax/libs/d3-annotation/2.3.1/d3-annotation.min.js', array(), false, true );
    wp_enqueue_script( 'scrollama-cels','https://unpkg.com/scrollama@0.6.1/build/scrollama.js', array(), false, true );
    wp_enqueue_script( 'c3.min-cels', get_template_directory_uri() .'/scripts/c3.min.js', array(), false, true );
    wp_enqueue_script( 'angular-cels', get_template_directory_uri() .'/bower_components/angular/angular.js', array(), false, true );
    wp_enqueue_script( 'angular-route-cels', get_template_directory_uri() .'/bower_components/angular-route/angular-route.js', array(), false, true );
    wp_enqueue_script( 'angular-sanitize.min-cels', get_template_directory_uri() .'/scripts/libs/angular-sanitize.min.js', array(), false, true );
    wp_enqueue_script( 'satellizer-cels', get_template_directory_uri() .'/bower_components/satellizer/dist/satellizer.js', array(), false, true );
    wp_enqueue_script( 'fi-rut-cels', get_template_directory_uri() .'/bower_components/fi-rut/dist/fi-rut.js', array(), false, true );
    wp_enqueue_script( 'ui-select-cels', get_template_directory_uri() .'/scripts/ui-select.js', array(), false, true );
    wp_enqueue_script( 'app.routes-cels', get_template_directory_uri() .'/scripts/app.routes.js', array(), false, true );
    wp_enqueue_script( 'app.core-cels', get_template_directory_uri() .'/scripts/app.core.js', array(), false, true );
    wp_enqueue_script( 'app.services-cels', get_template_directory_uri() .'/scripts/app.services.js', array(), false, true );
    wp_enqueue_script( 'app.auth-cels', get_template_directory_uri() .'/scripts/app.auth.js', array(), false, true );
    wp_enqueue_script( 'app-cels', get_template_directory_uri() .'/scripts/app.js', array(), false, true );
    wp_enqueue_script( 'home.ctrl-cels', get_template_directory_uri() .'/scripts/sections/home/home.ctrl.js', array(), false, true );
    wp_enqueue_script( 'funcionarios.ctrl-cels', get_template_directory_uri() .'/scripts/sections/home/funcionarios.ctrl.js', array(), false, true );
    wp_enqueue_script( 'civiles.ctrl-cels', get_template_directory_uri() .'/scripts/sections/home/civiles.ctrl.js', array(), false, true );
    wp_enqueue_script( 'funcionarios-i.ctrl-cels', get_template_directory_uri() .'/scripts/sections/home/funcionarios-i.ctrl.js', array(), false, true );
    wp_enqueue_script( 'funcionarios-m.ctrl-cels', get_template_directory_uri() .'/scripts/sections/home/funcionarios-m.ctrl.js', array(), false, true );
    wp_enqueue_script( 'civiles-mapa.ctrl-cels', get_template_directory_uri() .'/scripts/sections/home/civiles-mapa.ctrl.js', array(), false, true );
    wp_enqueue_script( 'funcionarios-mapa.ctrl-cels', get_template_directory_uri() .'/scripts/sections/home/funcionarios-mapa.ctrl.js', array(), false, true );
    wp_enqueue_script( 'icon-chart-cels', get_template_directory_uri() .'/scripts/directives/icon-chart.js', array(), false, true );
    wp_enqueue_script( 'med.fct-cels', get_template_directory_uri() .'/scripts/services/med.fct.js', array(), false, true );
    wp_enqueue_script( 'main-cels', get_template_directory_uri() .'/scripts/main.js', array(), false, true );
}

if( !function_exists('cels_theme')) {
    function cels_theme() {
        load_theme_textdomain( 'cels', get_template_directory() . '/languages' );
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
        ) );
        register_nav_menus( array(
            'menu-1' => esc_html__( 'Primary', 'cels' ),
            'menu-2' => esc_html__( 'Fixed', 'cels' ),
        ) );
        add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
        ) );
        add_action( 'wp_enqueue_scripts', 'styles_scripts_header' );
        add_action( 'wp_enqueue_scripts', 'styles_scripts_footer' );
        add_action( 'admin_enqueue_scripts', 'admin_styles' );
        require_once( get_template_directory() . '/inc/panel.php' );
        require_once( get_template_directory() . '/inc/entities.php' );
    }
}

add_action( 'after_setup_theme', 'cels_theme' );