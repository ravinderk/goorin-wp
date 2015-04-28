<?php
/**
 * goorin Theme Customizer
 *
 * @package goorin
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function goorin_customize_register( $wp_customize ) {
//	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
//	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
//	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	$wp_customize->add_setting( 'sale_text',
			array(
					'default'   => 'Fall Sample Sale!'
			)
	);
	$wp_customize->add_setting( 'sale_link',
			array(
					'default'   => '#'
			)
	);
	$wp_customize->add_setting( 'login_text',
			array(
					'default'   => 'Login'
			)
	);
	$wp_customize->add_setting( 'account_text',
			array(
					'default'   => 'Account'
			)
	);
	$wp_customize->add_setting( 'search_text',
			array(
					'default'   => 'Search'
			)
	);
	$wp_customize->add_setting( 'cart_text',
			array(
					'default'   => 'Cart'
			)
	);

	$wp_customize->add_section( 'goorin_header_section',
			array(
					'title'    => __( 'Header', 'goorin' ),
					'priority' => 30,
			)
	);

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sale_text', array(
					'label'    => __( 'Sale Text', 'goorin' ),
					'section'  => 'goorin_header_section',
					'settings' => 'sale_text',
			) )
	);
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sale_link', array(
					'label'    => __( 'Sale Link', 'goorin' ),
					'section'  => 'goorin_header_section',
					'settings' => 'sale_link',
			) )
	);
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'login_text', array(
					'label'    => __( 'Login Text', 'goorin' ),
					'section'  => 'goorin_header_section',
					'settings' => 'login_text',
			) )
	);
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'account_text', array(
					'label'    => __( 'Account Text', 'goorin' ),
					'section'  => 'goorin_header_section',
					'settings' => 'account_text',
			) )
	);
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'search_text', array(
					'label'    => __( 'Search Text', 'goorin' ),
					'section'  => 'goorin_header_section',
					'settings' => 'search_text',
			) )
	);
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'cart_text', array(
					'label'    => __( 'Cart Text', 'goorin' ),
					'section'  => 'goorin_header_section',
					'settings' => 'cart_text',
			) )
	);
}
add_action( 'customize_register', 'goorin_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function goorin_customize_preview_js() {
	wp_enqueue_script( 'goorin_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'goorin_customize_preview_js' );
