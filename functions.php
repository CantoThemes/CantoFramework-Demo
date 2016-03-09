<?php

// Removing Default section. We dont need these at demo
function remove_styles_sections(){
    global $wp_customize;

    $wp_customize->remove_section('title_tagline');
    $wp_customize->remove_section('colors');
    $wp_customize->remove_section('header_image');
    $wp_customize->remove_section('background_image');
    $wp_customize->remove_section('static_front_page');
}

// Priority 20 so that we remove options only once they've been added
add_action( 'customize_register', 'remove_styles_sections', 50 );


$options = array();

// "Panel > Section > Control" Example
$options[] = array(
	'id'			 => 'panel_example',
	'priority'       => 10,
	'capability'     => 'edit_theme_options',
	'title'          => __('Panel Example'),
	'description'    => __('Test Panel Description'),
	'sections' 		 => array(
		array(
			'id'				=> 'section_example',
			'priority'			=> 10,
			'title'				=> __('Section Example'),
			'description'		=> __('Test Section Description'),
			'active_callback'	=> '',
			'options'			=> array(
				array(
					'setting' => array(
						'id'		=> 'test_option',
						'default'	=> 'Test Feild',
						'type'		=> 'theme_mod',
						'transport'	=> 'postMessage'
					),
					'control' => array(
						'label'		=> __( 'Example Control', 'mytheme' ),
						'subtitle'	=> __( 'Lorem ipsum dolor sit amet', 'mytheme' ),
						'type'		=> 'text'
					),
				),
			)
		)
	)
);

// Direct "Section > Control" Example
$options[] = array(
	'id'				=> 'direct_section_example',
	'priority'			=> 10,
	'title'				=> __('Direct Section Example'),
	'description'		=> __('Without panel. Directly section example.'),
	'active_callback'	=> '',
	'options'			=> array(
		array(
			'setting' => array(
				'id'		=> 'test_option_2',
				'default'	=> 'Test Feild',
				'type'		=> 'theme_mod',
				'transport'	=> 'postMessage'
			),
			'control' => array(
				'label'		=> __( 'Example Control', 'mytheme' ),
				'subtitle'	=> __( 'Lorem ipsum dolor sit amet', 'mytheme' ),
				'type'		=> 'text'
			),
		),
	)
);

// Text Type Controls
$options[] = array(
	'id'				=> 'text_type_controls',
	'priority'			=> 10,
	'title'				=> __('Text Type Controls'),
	'description'		=> __('All controlls basically use text input.'),
	'active_callback'	=> '',
	'options'			=> array(
		array(
			'setting' => array(
				'id'		=> 'text_control',
				'default'	=> 'Test Feild',
				'type'		=> 'theme_mod',
				'transport'	=> 'postMessage'
			),
			'control' => array(
				'label'		=> __( 'Text Control', 'mytheme' ),
				'subtitle'	=> __( 'Lorem ipsum dolor sit amet', 'mytheme' ),
				'type'		=> 'text'
			),
		),
		array(
			'setting' => array(
				'id'		=> 'email_control',
				'default'	=> 'admin@example.com',
				'type'		=> 'theme_mod',
				'transport'	=> 'postMessage'
			),
			'control' => array(
				'label'		=> __( 'Email Control', 'mytheme' ),
				'subtitle'	=> __( 'Lorem ipsum dolor sit amet', 'mytheme' ),
				'type'		=> 'email'
			),
		),
		array(
			'setting' => array(
				'id'		=> 'email_control',
				'default'	=> 'admin@example.com',
				'type'		=> 'theme_mod',
				'transport'	=> 'postMessage'
			),
			'control' => array(
				'label'		=> __( 'Email Control', 'mytheme' ),
				'subtitle'	=> __( 'Lorem ipsum dolor sit amet', 'mytheme' ),
				'type'		=> 'email'
			),
		),
		array(
			'setting' => array(
				'id'		=> 'textarea_control',
				'default'	=> 'Lorem ipsum dolor sit amet',
				'type'		=> 'theme_mod',
				'transport'	=> 'postMessage'
			),
			'control' => array(
				'label'		=> __( 'Textarea Control', 'mytheme' ),
				'subtitle'	=> __( 'Lorem ipsum dolor sit amet', 'mytheme' ),
				'type'		=> 'textarea'
			),
		),
		array(
			'setting' => array(
				'id'		=> 'url_control',
				'default'	=> 'https://wordpress.org/',
				'type'		=> 'theme_mod',
				'transport'	=> 'postMessage'
			),
			'control' => array(
				'label'		=> __( 'URL Control', 'mytheme' ),
				'subtitle'	=> __( 'Lorem ipsum dolor sit amet', 'mytheme' ),
				'type'		=> 'url'
			),
		),
		array(
			'setting' => array(
				'id'		=> 'text_multi_control',
				'default'	=> array(
					__('Multi-Text Feild 1'),
					__('Multi-Text Feild 2'),
					__('Multi-Text Feild 3'),
				),
				'type'		=> 'theme_mod',
			),
			'control' => array(
				'label'		=> __( 'Multi-Text Control', 'mytheme' ),
				'subtitle'	=> __( 'Lorem ipsum dolor sit amet', 'mytheme' ),
				'type'		=> 'text_multi'
			),
		),
	)
);

// Text Type Controls
$options[] = array(
	'id'				=> 'radio_controls',
	'priority'			=> 10,
	'title'				=> __('Radio Controls'),
	'description'		=> __('All Radio type controls.'),
	'active_callback'	=> '',
	'options'			=> array(
		array(
			'setting' => array(
				'id' => 'radio_control',
				'default' => 'test3',
				'type' => 'theme_mod',
			),
			'control' => array(
				'label'    => __( 'Radio Control', 'mytheme' ),
				'subtitle'    => __( 'Lorem ipsum dolor sit amet', 'mytheme' ),
				'type'     => 'radio',
				'choices' => array(
					'test1' => __('Test 1'),
					'test2' => __('Test 2'),
					'test3' => __('Test 3'),
					'test4' => __('Test 4'),
				)
			),
		),
		array(
			'setting' => array(
				'id' => 'radio_image_control',
				'default' => 'test2',
				'type' => 'theme_mod',
			),
			'control' => array(
				'label'    => __( 'Radio Image Control', 'mytheme' ),
				'subtitle'    => __( 'Lorem ipsum dolor sit amet', 'mytheme' ),
				'type'     => 'radio_image',
				'choices' => array(
					'test1' => get_home_url().'/wp-admin//images/align-left-2x.png',
					'test2' => get_home_url().'/wp-admin//images/align-center-2x.png',
					'test3' => get_home_url().'/wp-admin//images/align-right-2x.png',
				)
			),
		),
		array(
			'setting' => array(
				'id' => 'radio_button_control',
				'default' => 'test3',
				'type' => 'theme_mod',
			),
			'control' => array(
				'label'    => __( 'Radio Button Control', 'mytheme' ),
				'subtitle'    => __( 'Lorem ipsum dolor sit amet', 'mytheme' ),
				'type'     => 'radio_button',
				'choices' => array(
					'test1' => __('Test 1'),
					'test2' => __('Test 2'),
					'test3' => __('Test 3'),
				)
			),
		),
	)
);

// Text Type Controls
$options[] = array(
	'id'				=> 'checkbox_controls',
	'priority'			=> 10,
	'title'				=> __('Checkbox Controls'),
	'description'		=> __('All Checkbox type controls.'),
	'active_callback'	=> '',
	'options'			=> array(
		array(
			'setting' => array(
				'id' => 'checkbox_control',
				'default' => array('test1','test3'),
				'type' => 'theme_mod',
			),
			'control' => array(
				'label'    => __( 'Checkbox Control', 'mytheme' ),
				'subtitle'    => __( 'Lorem ipsum dolor sit amet', 'mytheme' ),
				'type'     => 'checkbox',
				'choices' => array(
					'test1' => __('Test 1'),
					'test2' => __('Test 2'),
					'test3' => __('Test 3'),
					'test4' => __('Test 4'),
				)
			),
		),
		array(
			'setting' => array(
				'id' => 'checkbox_image_control',
				'default' => array('test3'),
				'type' => 'theme_mod',
			),
			'control' => array(
				'label'    => __( 'Checkbox Image Control', 'mytheme' ),
				'subtitle'    => __( 'Lorem ipsum dolor sit amet', 'mytheme' ),
				'type'     => 'checkbox_image',
				'choices' => array(
					'test1' => get_home_url().'/wp-admin//images/align-left-2x.png',
					'test2' => get_home_url().'/wp-admin//images/align-center-2x.png',
					'test3' => get_home_url().'/wp-admin//images/align-right-2x.png',
				)
			),
		),
		array(
			'setting' => array(
				'id' => 'checkbox_button_control',
				'default' => array('test2', 'test4'),
				'type' => 'theme_mod',
			),
			'control' => array(
				'label'    => __( 'Checkbox Button Control', 'mytheme' ),
				'subtitle'    => __( 'Lorem ipsum dolor sit amet', 'mytheme' ),
				'type'     => 'checkbox_button',
				'choices' => array(
					'test1' => __('Test 1'),
					'test2' => __('Test 2'),
					'test3' => __('Test 3'),
					'test4' => __('Test 4'),
				)
			),
		),
	)
);


// Color Controls
$options[] = array(
	'id'				=> 'color_controls',
	'priority'			=> 10,
	'title'				=> __('Color Controls'),
	'description'		=> __('All Color type controls.'),
	'active_callback'	=> '',
	'options'			=> array(
		array(
			'setting' => array(
				'id' => 'color_control',
				'default' => '#ff00ff',
				'type' => 'theme_mod',
			),
			'control' => array(
				'label'    => __( 'Color Control', 'mytheme' ),
				'subtitle'    => __( 'Lorem ipsum dolor sit amet', 'mytheme' ),
				'type'     => 'color'
			),
		),
		array(
			'setting' => array(
				'id' => 'rgba_color_control',
				'default' => 'rgba(25,100,10,0.5)',
				'type' => 'theme_mod',
				'transport' => 'postMessage'
			),
			'control' => array(
				'label'    => __( 'RGBA Color Control', 'mytheme' ),
				'subtitle'    => __( 'Lorem ipsum dolor sit amet', 'mytheme' ),
				'type'     => 'color_rgba'
			),
		),
	)
);

// Number Controls
$options[] = array(
	'id'				=> 'number_controls',
	'priority'			=> 10,
	'title'				=> __('Number Controls'),
	'description'		=> __('All Number type controls.'),
	'active_callback'	=> '',
	'options'			=> array(
		array(
			'setting' => array(
				'id' => 'number_control',
				'default' => '25',
				'type' => 'theme_mod',
			),
			'control' => array(
				'label'    => __( 'Number Control', 'mytheme' ),
				'subtitle'    => __( 'Lorem ipsum dolor sit amet', 'mytheme' ),
				'type'     => 'number',
				'choices' => array(
					'min' => 0,
					'max' => 40,
					'step' => 0.5
				)
			),
		),
		array(
			'setting' => array(
				'id' => 'dimension_control',
				'default' => '25px',
				'type' => 'theme_mod',
			),
			'control' => array(
				'label'    => __( 'Dimension Control', 'mytheme' ),
				'subtitle'    => __( 'Lorem ipsum dolor sit amet', 'mytheme' ),
				'type'     => 'dimension',
				'choices' => array(
					'min' => 0,
					'max' => 40,
					'step' => 1,
					'units' => array (
						'px',
						'%',
						'em'
					)
				)
			),
		),
		array(
			'setting' => array(
				'id' => 'range_control',
				'default' => '25',
				'type' => 'theme_mod',
			),
			'control' => array(
				'label'    => __( 'Range Control', 'mytheme' ),
				'subtitle'    => __( 'Lorem ipsum dolor sit amet', 'mytheme' ),
				'type'     => 'range',
				'choices' => array(
					'min' => 0,
					'max' => 50,
					'step' => 0.5
				)
			),
		),
	)
);

if (class_exists('CTF_Customizer')) {
	$args = array(
		'opt_name' => 'test_opt'
	);
	new CTF_Customizer($args, $options);
}