<?php 
/*
Template Name: Campaign Page
*/

get_header();?>
<div class="category-campaign">
	<?php 
	foreach ( get_field( 'layout' ) as $field ) {
		include locate_template( 'acf-layouts/campaign-' . $field[ 'acf_fc_layout' ] . '.php' );
	} ?>
</div>
<?php  get_footer(); ?>
