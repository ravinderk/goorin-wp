<?php 
/*
Template Name: Homepage
*/

get_header();

foreach ( get_field( 'layout' ) as $field ) {
	include locate_template( 'acf-layouts/homepage-' . $field[ 'acf_fc_layout' ] . '.php' );
}

get_footer();
