<?php
/**
 * Get stores form store location plus plugin and show them in acf select field values
 * @param $field
 *
 * @return mixed
 */
function ltss_load_store_field_choices( $field ) {

	global $wpdb, $post;

	//fetch stores list only  which attach to current shop and did not attach to any other shop
	$sql = 'SELECT sl_id, sl_store FROM '.$wpdb->prefix.'store_locator WHERE sl_linked_postid = 0 OR sl_linked_postid ='.$post->ID;
	$stores = $wpdb->get_results( $sql, ARRAY_A );

	// reset choices
	$field['choices'] = array();

	// loop through array and add to field 'choices'
	if( is_array( $stores ) ) {

		foreach( $stores as $store ) {

			$field['choices'][ $store['sl_id'] ] = $store['sl_store'];

		}

	}


	// return the field
	return $field;

}
add_filter( 'acf/load_field/name=store', 'ltss_load_store_field_choices', 999999 );