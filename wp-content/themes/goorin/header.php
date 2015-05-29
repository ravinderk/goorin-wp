<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package goorin
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-icon" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/app.css?ver='.filemtime( get_template_directory().'/css/app.css'); ?>">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/global.js"></script>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page" class="main">
	<?php goorin_header(); ?>
    <!--header-->
	<div id="content" class="site-content">
