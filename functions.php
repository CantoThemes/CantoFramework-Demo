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
				'default' => '#04a5c9',
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

// Advance Controls
$options[] = array(
	'id'				=> 'google_font_controls',
	'priority'			=> 10,
	'title'				=> __('Google Font Controls'),
	'description'		=> __('All Google Font Controls.'),
	'active_callback'	=> '',
	'options'			=> array(
		array(
			'setting' => array(
				'id' => 'google_font_default',
				'default' => array(
					'font-family' => 'Open Sans',
					'font-weight' => '300',
					'font-size' => '24px',
					'line-height' => '40px',
				),
				'type' => 'theme_mod',
			),
			'control' => array(
				'label'    => __( 'Google Font (Default)', 'mytheme' ),
				'subtitle'    => __( 'Google font without latter and word spacing.', 'mytheme' ),
				'type'     => 'google_font',
			),
		),
		array(
			'setting' => array(
				'id' => 'google_font_advance',
				'default' => array(
					'font-family' => 'Roboto',
					'font-weight' => '300',
					'font-size' => '24px',
					'line-height' => '40px',
					'letter-spacing' => '2px',
					'word-spacing' => '5px',
				),
				'type' => 'theme_mod',
			),
			'control' => array(
				'label'    => __( 'Google Font (Advance)', 'mytheme' ),
				'subtitle'    => __( 'Google font with latter and word spacing.', 'mytheme' ),
				'type'     => 'google_font',
				'choices' => array(
					'font-family' => 1,
					'font-weight' => 1,
					'font-size' => 1,
					'line-height' => 1,
					'letter-spacing' => 1,
					'word-spacing' => 1,
				)
			),
		),
	)
);

// Advance Controls
$options[] = array(
	'id'				=> 'select_img_controls',
	'priority'			=> 10,
	'title'				=> __('Select &amp; Image Upload Controls'),
	'description'		=> __('All Select &amp; Image Upload Controls.'),
	'active_callback'	=> '',
	'options'			=> array(
		array(
			'setting' => array(
				'id' => 'select_control',
				'default' => 'test3',
				'type' => 'theme_mod',
			),
			'control' => array(
				'label'    => __( 'Select Control', 'mytheme' ),
				'subtitle'    => __( 'Lorem ipsum dolor sit amet', 'mytheme' ),
				'description'    => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id fecit cognoscerem vetuit inertissimae sapientiamque terrore at discedere culpa.', 'mytheme' ),
				'type'     => 'select',
				'choices' => array(
					'test1' => 'Test 1',
					'test2' => 'Test 2',
					'test3' => 'Test 3',
					'test4' => 'Test 4',
				)
			),
		),
		array(
			'setting' => array(
				'id' => 'image_upload',
				'type' => 'theme_mod',
			),
			'control' => array(
				'label'    => __( 'Image Control', 'mytheme' ),
				'subtitle'    => __( 'Lorem ipsum dolor sit amet', 'mytheme' ),
				'type'     => 'image',
			),
		),
		array(
			'setting' => array(
				'id' => 'image_multi_upload',
				'type' => 'theme_mod',
			),
			'control' => array(
				'label'    => __( 'Multi Image Control', 'mytheme' ),
				'subtitle'    => __( 'Lorem ipsum dolor sit amet', 'mytheme' ),
				'type'     => 'image_multi',
			),
		),
	)
);

// Advance Controls
$options[] = array(
	'id'				=> 'advance_controls',
	'priority'			=> 10,
	'title'				=> __('Advance Controls'),
	'description'		=> __('All Advance Controls.'),
	'active_callback'	=> '',
	'options'			=> array(
		array(
			'setting' => array(
				'id' => 'icon_control',
				'default' => 'fa fa-cogs',
				'type' => 'theme_mod',
			),
			'control' => array(
				'label'    => __( 'Icon Control', 'mytheme' ),
				'subtitle'    => __( 'Lorem ipsum dolor sit amet', 'mytheme' ),
				'type'     => 'icon',
			),
		),
		
		array(
			'setting' => array(
				'id' => 'text_align',
				'default' => 'center',
				'type' => 'theme_mod',
			),
			'control' => array(
				'label'    => __( 'Text Align Control', 'mytheme' ),
				'subtitle'    => __( 'Lorem ipsum dolor sit amet', 'mytheme' ),
				'type'     => 'text_align',
			),
		),

		array(
			'setting' => array(
				'id' => 'font_style',
				'default' => array(
					'bold' => 'on',
					'italic' => 'off',
					'underline' => 'off',
					'strikethrough' => 'on',
				),
				'type' => 'theme_mod',
			),
			'control' => array(
				'label'    => __( 'Font Style Control', 'mytheme' ),
				'subtitle'    => __( 'Lorem ipsum dolor sit amet', 'mytheme' ),
				'type'     => 'font_style',
			),
		),
		array(
			'setting' => array(
				'id' => 'editor_control',
				'default' => 'Editor',
				'type' => 'theme_mod',
			),
			'control' => array(
				'label'    => __( 'Editor', 'mytheme' ),
				'subtitle'    => __( 'Lorem ipsum dolor sit amet', 'mytheme' ),
				'type'     => 'editor',
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



// Shortcodes Map Test
test_sc_map();
function test_sc_map() {
	
	$test_sc = array(
        'title' => 'Test Shortcode',
        'subtitle' => 'Test Shortcode Subtitle',
        'code' => 'test',
        'hascontent' => false,
        'icon' => 'fa fa-cogs',
        'options' => array(
            array(
                'id' => 'data',
                'label'    => __( 'Text Input', 'mytheme' ),
                'subtitle'    => __( 'Lorem ipsum dolor sit amet', 'mytheme' ),
                'type'     => 'text',
                'default' => 'Test Text',
            ),
            array(
                'id' => 'color',
                'label'    => __( 'Color Input', 'mytheme' ),
                'subtitle'    => __( 'Lorem ipsum dolor sit amet', 'mytheme' ),
                'type'     => 'color',
                'default' => '#ffffff',
            ),
            array(
                'id' => 'multi',
                'label'    => __( 'Multi-Text Input', 'mytheme' ),
                'subtitle'    => __( 'Lorem ipsum dolor sit amet', 'mytheme' ),
                'type'     => 'text_multi',
                'default' => array(
                    'test 1',
                    'test 2'
                )
            ),
        )
    );
    
    $tst_sc_2 = array(
        'title' => 'Test 2 Shortcode',
        'subtitle' => 'Test Shortcode Subtitle',
        'code' => 'test2',
        'hascontent' => true,
        'icon' => 'fa fa-facebook',
        'options' => array(
            /*array(
                'id' => 'text',
                'label'    => __( 'Text Input', 'mytheme' ),
                'subtitle'    => __( 'Lorem ipsum dolor sit amet', 'mytheme' ),
                'type'     => 'text',
                'default' => 'Test Text',
            ),*/
            /*array(
                'id' => 'email',
                'label'    => __( 'Email Input', 'mytheme' ),
                'subtitle'    => __( 'Lorem ipsum dolor sit amet', 'mytheme' ),
                'type'     => 'email',
                'default' => 'example@gmail.com',
            ),*/
            /*array(
                'id' => 'textarea',
                'label'    => __( 'Textarea Input', 'mytheme' ),
                'subtitle'    => __( 'Lorem ipsum dolor sit amet', 'mytheme' ),
                'type'     => 'textarea',
                'default' => 'Test Text',
            ),*/
            /*array(
                'id' => 'editor',
                'label'    => __( 'Editor Input', 'mytheme' ),
                'subtitle'    => __( 'Lorem ipsum dolor sit amet', 'mytheme' ),
                'type'     => 'editor',
                'default' => 'Test Text',
                'roll' => 'content'
            ),*/
            /*array(
                'id' => 'select',
                'label'    => __( 'Select Input', 'mytheme' ),
                'subtitle'    => __( 'Lorem ipsum dolor sit amet', 'mytheme' ),
                'type'     => 'select',
                'default' => 'test2',
                'choices' => array(
                    'test1' => 'Test 1',
                    'test2' => 'Test 2',
                    'test3' => 'Test 3'
                )
            ),*/
            /*array(
                'id' => 'radio',
                'label'    => __( 'Radio Input', 'mytheme' ),
                'subtitle'    => __( 'Lorem ipsum dolor sit amet', 'mytheme' ),
                'type'     => 'radio',
                'default' => 'test2',
                'choices' => array(
                    'test1' => 'Test 1',
                    'test2' => 'Test 2',
                    'test3' => 'Test 3'
                )
            ),*/
            /*array(
                'id' => 'checkbox',
                'label'    => __( 'Checkbox Input', 'mytheme' ),
                'subtitle'    => __( 'Lorem ipsum dolor sit amet', 'mytheme' ),
                'type'     => 'checkbox',
                'default' => array(
                    'test2'
                ),
                'choices' => array(
                    'test1' => 'Test 1',
                    'test2' => 'Test 2',
                    'test3' => 'Test 3'
                )
            ),*/
            /*array(
                'id' => 'radio_image',
                'label'    => __( 'Radio Image Input', 'mytheme' ),
                'subtitle'    => __( 'Lorem ipsum dolor sit amet', 'mytheme' ),
                'type'     => 'radio_image',
                'default' => 'test2',
                'choices' => array(
                    'test1' => get_home_url().'/wp-admin//images/align-left-2x.png',
                    'test2' => get_home_url().'/wp-admin//images/align-center-2x.png',
                    'test3' => get_home_url().'/wp-admin//images/align-right-2x.png',
                )
            ),*/
            /*array(
                'id' => 'checkbox_image',
                'label'    => __( 'Checkbox Image Input', 'mytheme' ),
                'subtitle'    => __( 'Lorem ipsum dolor sit amet', 'mytheme' ),
                'type'     => 'checkbox_image',
                'default' => array(
                    'test2'
                ),
                'choices' => array(
                    'test1' => get_home_url().'/wp-admin//images/align-left-2x.png',
                    'test2' => get_home_url().'/wp-admin//images/align-center-2x.png',
                    'test3' => get_home_url().'/wp-admin//images/align-right-2x.png',
                )
            ),*/
            /*array(
                'id' => 'radio_button',
                'label'    => __( 'Radio Button Input', 'mytheme' ),
                'subtitle'    => __( 'Lorem ipsum dolor sit amet', 'mytheme' ),
                'type'     => 'radio_button',
                'default' => 'test2',
                'choices' => array(
                    'test1' => 'Test 1',
                    'test2' => 'Test 2',
                    'test3' => 'Test 3'
                )
            ),*/
            /*array(
                'id' => 'checkbox_button',
                'label'    => __( 'Checkbox Button Input', 'mytheme' ),
                'subtitle'    => __( 'Lorem ipsum dolor sit amet', 'mytheme' ),
                'type'     => 'checkbox_button',
                'default' => array(
                    'test1',
                    'test3'
                ),
                'choices' => array(
                    'test1' => 'Test 1',
                    'test2' => 'Test 2',
                    'test3' => 'Test 3'
                )
            ),*/
            /*array(
                'id' => 'text_multi',
                'label'    => __( 'Multi-Text Input', 'mytheme' ),
                'subtitle'    => __( 'Lorem ipsum dolor sit amet', 'mytheme' ),
                'type'     => 'text_multi',
                'default' => array(
                    'test 1',
                    'test 2'
                )
            ),*/
            /*array(
                'id' => 'number',
                'label'    => __( 'Number Input', 'mytheme' ),
                'subtitle'    => __( 'Lorem ipsum dolor sit amet', 'mytheme' ),
                'type'     => 'number',
                'default' => '50',
            ),*/
            /*array(
                'id' => 'range',
                'label'    => __( 'Range Input', 'mytheme' ),
                'subtitle'    => __( 'Lorem ipsum dolor sit amet', 'mytheme' ),
                'type'     => 'range',
                'default' => '50',
            ),*/
            array(
                'id' => 'dimension',
                'label'    => __( 'Dimension Input', 'mytheme' ),
                'subtitle'    => __( 'Lorem ipsum dolor sit amet', 'mytheme' ),
                'type'     => 'dimension',
                'default' => '20px',
            ),
            /*array(
                'id' => 'Icon',
                'label'    => __( 'Icon Input', 'mytheme' ),
                'subtitle'    => __( 'Lorem ipsum dolor sit amet', 'mytheme' ),
                'type'     => 'icon',
                'default' => 'fa fa-cogs',
            ),*/
            /*array(
                'id' => 'color',
                'label'    => __( 'Color Input', 'mytheme' ),
                'subtitle'    => __( 'Lorem ipsum dolor sit amet', 'mytheme' ),
                'type'     => 'color',
                'default' => '#ff00ff',
            ),*/
            /*array(
                'id' => 'rgba',
                'label'    => __( 'RGBA Color Input', 'mytheme' ),
                'subtitle'    => __( 'Lorem ipsum dolor sit amet', 'mytheme' ),
                'type'     => 'color_rgba',
                'default' => 'rgba(25,56,58,0.65)',
            ),*/
            /*array(
                'id' => 'font_style',
                'label'    => __( 'Font Style Input', 'mytheme' ),
                'subtitle'    => __( 'Lorem ipsum dolor sit amet', 'mytheme' ),
                'type'     => 'font_style',
                'default' => array(
                    'bold' => 'on',
                    'italic' => 'off',
                    'underline' => 'off',
                    'strikethrough' => 'on',
                ),
            ),*/
            /*array(
                'id' => 'text_align',
                'label'    => __( 'Text Align Input', 'mytheme' ),
                'subtitle'    => __( 'Lorem ipsum dolor sit amet', 'mytheme' ),
                'type'     => 'text_align',
                'default' => 'left',
            ),*/
            /*array(
                'id' => 'image',
                'label'    => __( 'Image Input', 'mytheme' ),
                'subtitle'    => __( 'Lorem ipsum dolor sit amet', 'mytheme' ),
                'type'     => 'image',
                'default' => array(),
            ),*/
            /*array(
                'id' => 'font',
                'label'    => __( 'Google Font Input', 'mytheme' ),
                'subtitle'    => __( 'Lorem ipsum dolor sit amet', 'mytheme' ),
                'type'     => 'google_font',
                'default' => array(),
            )*/
        )
    );
   
    
    if ( class_exists('CTPB_Element') ) {
    	CTPB_Element::add($test_sc);
    	CTPB_Element::add($tst_sc_2);
    	
    	CTPB_Element::add(array(
	        'title' => 'Tab',
	        'subtitle' => 'Test Shortcode Subtitle',
	        'code' => 'tab',
	        'child' => 'tab_item',
	        'hascontent' => true,
	        'icon' => 'fa fa-cogs',
	        'options' => array(
	            array(
	                'id' => 'data',
	                'label'    => __( 'Text Input', 'mytheme' ),
	                'subtitle'    => __( 'Lorem ipsum dolor sit amet', 'mytheme' ),
	                'type'     => 'text',
	                'default' => 'Test Text',
	            ),
	            array(
	                'id' => 'color',
	                'label'    => __( 'Color Input', 'mytheme' ),
	                'subtitle'    => __( 'Lorem ipsum dolor sit amet', 'mytheme' ),
	                'type'     => 'color',
	                'default' => '#ffffff',
	            )
	        )
	    ));
	    
	    CTPB_Element::add(array(
	        'title' => 'Tab Item',
	        'subtitle' => 'Test Shortcode Subtitle',
	        'code' => 'tab_item',
	        'parent' => 'tab',
	        'icon' => 'fa fa-cogs',
	        'options' => array(
	            array(
	                'id' => 'data',
	                'label'    => __( 'Text Input', 'mytheme' ),
	                'subtitle'    => __( 'Lorem ipsum dolor sit amet', 'mytheme' ),
	                'type'     => 'textarea',
	                'default' => 'Test Text',
	            )
	        )
	    ));
    }
	

    if ( ! class_exists('CTSCG') ) {
        return;
    }

    CTSCG::add_shortcodes_data($test_sc);

    CTSCG::add_shortcodes_data( $tst_sc_2 );
}
