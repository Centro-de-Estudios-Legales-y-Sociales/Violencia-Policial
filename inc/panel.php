<?php
function cels_genosha_customize_register($wp_customize)
{
	/* Front Page */
	$wp_customize->add_panel('genosha_text_header', array(
		'title'          => __('Header Home', 'cels'),
		'description'    => '',
		'priority'       => 100,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '',
	));
	$wp_customize->add_section('text_header', array(
		'title' => __('Texto Header', 'cels'),
		'panel' => 'genosha_text_header',
		'priority' => 1,
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_setting('active_ribbon', array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
		'default'   => '1'
	));

	$wp_customize->add_setting('text_h_1', array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control('text_h_1', array(
		'label' => __('Texto Header 1 (negrita)', 'cels'),
		'section' => 'text_header',
		'description' => 'ej. violencia <br/>policial',
		'priority' => 2,
		'type' => 'text',
	));

	$wp_customize->add_setting('text_h_2', array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control('text_h_2', array(
		'label' => __('Texto Header 2', 'cels'),
		'section' => 'text_header',
		'priority' => 3,
		'type' => 'textarea',
	));

	$wp_customize->add_setting('facebook', array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control('facebook', array(
		'label' => __('URL Facebook', 'cels'),
		'section' => 'text_header',
		'priority' => 4,
		'type' => 'text',
	));

	$wp_customize->add_setting('instagram', array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control('instagram', array(
		'label' => __('URL instagram', 'cels'),
		'section' => 'text_header',
		'priority' => 4,
		'type' => 'text',
	));

	$wp_customize->add_setting('videos', array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control('videos', array(
		'label' => __('URL videos', 'cels'),
		'section' => 'text_header',
		'priority' => 4,
		'type' => 'text',
	));
	$wp_customize->add_setting('twitter', array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control('twitter', array(
		'label' => __('URL twitter', 'cels'),
		'section' => 'text_header',
		'priority' => 4,
		'type' => 'text',
	));
	$wp_customize->add_setting('epigrafe', array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control('epigrafe', array(
		'label' => __('Epigrafe', 'cels'),
		'section' => 'text_header',
		'priority' => 4,
		'type' => 'text',
	));
}
add_action('customize_register', 'cels_genosha_customize_register');
