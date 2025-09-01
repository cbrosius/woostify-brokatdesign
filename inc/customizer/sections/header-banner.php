<?php
/**
 * Header Banner customizer settings
 *
 * @package Woostify
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

// Banner divider
$wp_customize->add_setting(
    'header_banner_heading',
    array(
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control(
    new Woostify_Divider_Control(
        $wp_customize,
        'header_banner_heading',
        array(
            'section'  => 'woostify_header',
            'settings' => 'header_banner_heading',
            'type'     => 'divider',
            'label'    => __('Header Banner', 'woostify'),
            'tab'      => 'general',
        )
    )
);

// Banner Image
$wp_customize->add_setting(
    'woostify_setting[header_banner_image]',
    array(
        'default'           => '',
        'type'             => 'option',
        'sanitize_callback' => 'esc_url_raw',
    )
);

$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'woostify_setting[header_banner_image]',
        array(
            'label'    => __('Banner Image', 'woostify'),
            'section'  => 'woostify_header',
            'settings' => 'woostify_setting[header_banner_image]',
            'tab'      => 'general',
        )
    )
);

// Banner Height
$wp_customize->add_setting(
    'woostify_setting[header_banner_height]',
    array(
        'default'           => '100',
        'type'             => 'option',
        'sanitize_callback' => 'absint',
        'transport'         => 'postMessage',
    )
);

$wp_customize->add_control(
    new Woostify_Range_Slider_Control(
        $wp_customize,
        'woostify_setting[header_banner_height]',
        array(
            'label'       => __('Banner Height', 'woostify'),
            'section'     => 'woostify_header',
            'settings'    => array(
                'desktop' => 'woostify_setting[header_banner_height]',
            ),
            'choices'     => array(
                'desktop' => array(
                    'min'  => 50,
                    'max'  => 500,
                    'step' => 1,
                    'edit' => true,
                    'unit' => 'px',
                ),
            ),
            'tab'         => 'general',
        )
    )
);

// Stretch Banner
$wp_customize->add_setting(
    'woostify_setting[header_banner_stretch]',
    array(
        'default'           => false,
        'type'             => 'option',
        'sanitize_callback' => 'woostify_sanitize_checkbox',
        'transport'         => 'postMessage',
    )
);

$wp_customize->add_control(
    new Woostify_Switch_Control(
        $wp_customize,
        'woostify_setting[header_banner_stretch]',
        array(
            'label'    => __('Stretch Banner', 'woostify'),
            'section'  => 'woostify_header',
            'settings' => 'woostify_setting[header_banner_stretch]',
            'tab'      => 'general',
        )
    )
);

// Banner Image
$wp_customize->add_setting(
	'woostify_header_banner_image',
	array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	)
);

$wp_customize->add_control(
	new WP_Customize_Image_Control(
		$wp_customize,
		'woostify_header_banner_image',
		array(
			'label'    => __( 'Banner Image', 'woostify' ),
			'section'  => 'woostify_header_banner',
			'settings' => 'woostify_header_banner_image',
		)
	)
);

// Banner Height
$wp_customize->add_setting(
	'woostify_header_banner_height',
	array(
		'default'           => '100',
		'sanitize_callback' => 'absint',
	)
);

$wp_customize->add_control(
	new Woostify_Range_Slider_Control(
		$wp_customize,
		'woostify_header_banner_height',
		array(
			'label'       => __( 'Banner Height (px)', 'woostify' ),
			'section'     => 'woostify_header_banner',
			'settings'    => 'woostify_header_banner_height',
			'input_attrs' => array(
				'min'  => 50,
				'max'  => 500,
				'step' => 1,
			),
		)
	)
);

// Stretch Banner
$wp_customize->add_setting(
	'woostify_header_banner_stretch',
	array(
		'default'           => false,
		'sanitize_callback' => 'woostify_sanitize_checkbox',
	)
);

$wp_customize->add_control(
	new WP_Customize_Control(
		$wp_customize,
		'woostify_header_banner_stretch',
		array(
			'label'    => __( 'Stretch Banner', 'woostify' ),
			'section'  => 'woostify_header_banner',
			'settings' => 'woostify_header_banner_stretch',
			'type'     => 'checkbox',
		)
	)
);
