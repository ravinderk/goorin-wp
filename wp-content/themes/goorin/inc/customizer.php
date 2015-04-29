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

	$wp_customize->add_setting( 'terms_conditions_text',
			array(
					'default'   => 'Goorin Bros. Hat Shop'
			)
	);
	$wp_customize->add_setting( 'terms_conditions_link1',
			array(
					'default'   => 'Goorin Bros. Hat Shop'
			)
	);
	$wp_customize->add_setting( 'terms_conditions_link1_text',
			array(
					'default'   => 'Goorin Bros. Hat Shop'
			)
	);
	$wp_customize->add_setting( 'terms_conditions_link2',
			array(
					'default'   => 'Goorin Bros. Hat Shop'
			)
	);
	$wp_customize->add_setting( 'terms_conditions_link2_text',
			array(
					'default'   => 'Goorin Bros. Hat Shop'
			)
	);
	$wp_customize->add_setting( 'twitter_link',
			array(
					'default'   => '#'
			)
	);
	$wp_customize->add_setting( 'facebook_link',
			array(
					'default'   => '#'
			)
	);
	$wp_customize->add_setting( 'instagram_link',
			array(
					'default'   => '#'
			)
	);
	$wp_customize->add_setting( 'pinterest_link',
			array(
					'default'   => '#'
			)
	);
	$wp_customize->add_setting( 'tumblr_link',
			array(
					'default'   => '#'
			)
	);

	$wp_customize->add_section( 'goorin_footer_section',
			array(
					'title'    => __( 'Footer', 'goorin' ),
					'priority' => 30,
			)
	);

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'terms_conditions_text', array(
					'label'    => __( 'Terms and Conditions Text', 'goorin' ),
					'section'  => 'goorin_footer_section',
					'settings' => 'terms_conditions_text'
			) )
	);
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'terms_conditions_link1', array(
					'label'    => __( 'Terms and Conditions Link 1', 'goorin' ),
					'section'  => 'goorin_footer_section',
					'settings' => 'terms_conditions_link1'
			) )
	);
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'terms_conditions_link1_text', array(
					'label'    => __( 'Link 1 Text', 'goorin' ),
					'section'  => 'goorin_footer_section',
					'settings' => 'terms_conditions_link1_text'
			) )
	);
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'terms_conditions_link2', array(
					'label'    => __( 'Terms and Conditions Link 2', 'goorin' ),
					'section'  => 'goorin_footer_section',
					'settings' => 'terms_conditions_link2'
			) )
	);
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'terms_conditions_link2_text', array(
					'label'    => __( 'Link 2 Text', 'goorin' ),
					'section'  => 'goorin_footer_section',
					'settings' => 'terms_conditions_link2_text'
			) )
	);
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'twitter_link', array(
					'label'    => __( 'Twitter Link', 'goorin' ),
					'section'  => 'goorin_footer_section',
					'settings' => 'twitter_link'
			) )
	);
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'facebook_link', array(
					'label'    => __( 'Facebook Link', 'goorin' ),
					'section'  => 'goorin_footer_section',
					'settings' => 'facebook_link'
			) )
	);
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'instagram_link', array(
					'label'    => __( 'Instagram Link', 'goorin' ),
					'section'  => 'goorin_footer_section',
					'settings' => 'instagram_link'
			) )
	);
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'pinterest_link', array(
					'label'    => __( 'Pinterest Link', 'goorin' ),
					'section'  => 'goorin_footer_section',
					'settings' => 'pinterest_link'
			) )
	);
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'tumblr_link', array(
					'label'    => __( 'Tumblr Link', 'goorin' ),
					'section'  => 'goorin_footer_section',
					'settings' => 'tumblr_link'
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
