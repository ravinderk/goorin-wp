<?php 
/*
Template Name: Campaign Page
*/

get_header();

foreach ( get_field( 'layout' ) as $field ) {
	include locate_template( 'acf-layouts/campaign-' . $field[ 'acf_fc_layout' ] . '.php' );
}

get_footer();