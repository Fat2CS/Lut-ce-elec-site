<?php

if ( class_exists("Kirki")){

	// HEADER SECTION

	Kirki::add_section( 'industrial_services_elementor_section_topbar', array(
	    'title'          => esc_html__( 'Header Settings', 'industrial-services-elementor' ),
	    'description'    => esc_html__( 'Here you can add header information.', 'industrial-services-elementor' ),
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'industrial_services_elementor_enable_toptext_heading',
		'priority'       => 1,
		'section'     => 'industrial_services_elementor_section_topbar',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Top Bar Info', 'industrial-services-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'label'    =>  esc_html__( 'Add Topbar Text', 'industrial-services-elementor' ),
		'type'     => 'text',
		'settings' => 'industrial_services_elementor_header_toptxt',
		'section'  => 'industrial_services_elementor_section_topbar',
		'default'  => '',
		'priority'       => 2,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'industrial_services_elementor_enable_menu_link',
		'section'     => 'industrial_services_elementor_section_topbar',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Menu Links', 'industrial-services-elementor' ) . '</h3>',
		'priority'       => 3,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'repeater',
		'section'     => 'industrial_services_elementor_section_topbar',
		'priority'       => 4,
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Top Menus', 'industrial-services-elementor' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__('Add Menus', 'industrial-services-elementor' ),
		'settings'     => 'industrial_services_elementor_text_menulinks',
		'default'      => '',
		'fields' 	   => [
			'link_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Menu Text', 'industrial-services-elementor' ),
				'default'     => '',
			],
			'link_url' => [
				'type'        => 'url',
				'label'       => esc_html__( 'Menu Link', 'industrial-services-elementor' ),
				'default'     => '',
			],
		],
		'choices' => [
			'limit' => 5
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'industrial_services_elementor_enable_socail_link',
		'priority'       => 5,
		'section'     => 'industrial_services_elementor_section_topbar',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Social Media Link', 'industrial-services-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'repeater',
		'section'     => 'industrial_services_elementor_section_topbar',
		'priority'       => 6,
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Social Icon', 'industrial-services-elementor' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__('Add New Social Icon', 'industrial-services-elementor' ),
		'settings'     => 'industrial_services_elementor_social_links_settings',
		'default'      => '',
		'fields' 	   => [
			'link_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon', 'industrial-services-elementor' ),
				'description' => esc_html__( 'Add the fontawesome class ex: "fab fa-facebook-f".', 'industrial-services-elementor' ),
				'default'     => '',
			],
			'link_url' => [
				'type'        => 'url',
				'label'       => esc_html__( 'Social Link', 'industrial-services-elementor' ),
				'description' => esc_html__( 'Add the social icon url here.', 'industrial-services-elementor' ),
				'default'     => '',
			],
		],
		'choices' => [
			'limit' => 20
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'industrial_services_elementor_enable_phone',
		'priority'       => 7,
		'section'     => 'industrial_services_elementor_section_topbar',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Add Phone Number', 'industrial-services-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'repeater',
		'section'     => 'industrial_services_elementor_section_topbar',
		'priority'       => 8,
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Phone Number', 'industrial-services-elementor' ),
			'field' => 'phone_text',
		],
		'settings'     => 'industrial_services_elementor_phone',
		'default'      => '',
		'fields' 	   => [
			'phone_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Phone Text', 'industrial-services-elementor' ),
				'default'     => '',
			],
			'phone_number' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Phone Number', 'industrial-services-elementor' ),
				'default'     => '',
				'sanitize_callback' => 'industrial_services_elementor_sanitize_phone_number',
			],
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'industrial_services_elementor_enable_opentime',
		'priority'       => 9,
		'section'     => 'industrial_services_elementor_section_topbar',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Add Opening Time', 'industrial-services-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'repeater',
		'section'     => 'industrial_services_elementor_section_topbar',
		'priority'       => 10,
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Opening Time', 'industrial-services-elementor' ),
			'field' => 'opentime_text',
		],
		'settings'     => 'industrial_services_elementor_opening_time',
		'default'      => '',
		'fields' 	   => [
			'opentime_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Opening Text', 'industrial-services-elementor' ),
				'default'     => '',
			],
			'open_time' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Opening Time', 'industrial-services-elementor' ),
				'default'     => '',
			],
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'industrial_services_elementor_enable_button_heading',
		'section'     => 'industrial_services_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( ' Header Button', 'industrial-services-elementor' ) . '</h3>',
		'priority'       => 11,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'label'    =>  esc_html__( 'Button Text', 'industrial-services-elementor' ),
		'settings' => 'industrial_services_elementor_header_button_text',
		'section'  => 'industrial_services_elementor_section_header',
		'default'  => '',
		'priority'       => 12,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'url',
		'label'    =>  esc_html__( 'Button URL', 'industrial-services-elementor' ),
		'settings' => 'industrial_services_elementor_header_button_url',
		'section'  => 'industrial_services_elementor_section_header',
		'default'  => '',
		'priority'       => 13,
	] );

	// FOOTER SECTION

	Kirki::add_section( 'industrial_services_elementor_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'industrial-services-elementor' ),
        'description'    => esc_html__( 'Here you can change copyright text', 'industrial-services-elementor' ),
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'industrial_services_elementor_footer_text_heading',
		'section'     => 'industrial_services_elementor_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'industrial-services-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'industrial_services_elementor_footer_text',
		'section'  => 'industrial_services_elementor_footer_section',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'industrial_services_elementor_footer_enable_heading',
		'section'     => 'industrial_services_elementor_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Footer Link', 'industrial-services-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'industrial_services_elementor_copyright_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'industrial-services-elementor' ),
		'section'     => 'industrial_services_elementor_footer_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'industrial-services-elementor' ),
			'off' => esc_html__( 'Disable', 'industrial-services-elementor' ),
		],
	] );
}