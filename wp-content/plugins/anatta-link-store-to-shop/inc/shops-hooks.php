<?php
/**
 * link store to shops post type post
 *
 * @param $address
 * @param $location
 * @param $post_id
 * @param $post
 *
 * @return mixed
 */
function ltss_insert_shop_data_to_store( $address, $location, $post_id, $post ){
	global $wpdb;

	//insert post id in store_location table to link it
	$wpdb->insert(
		$wpdb->prefix.'store_locator',
		array(
			'sl_store'          => $post->post_title,
			'sl_address'        => $address['street_1'],
			'sl_address2'       => $address['street_2'],
			'sl_city'           => $address['city'],
			'sl_state'          => $address['state'],
			'sl_zip'            => $address['zip'],
			'sl_country'        => $address['country'],
			'sl_latitude'       => $location['lat'],
			'sl_longitude'      => $location['lng'],
			'sl_linked_postid'  => $post_id,
			'sl_url'      => get_permalink( $post_id ),
			'sl_lastupdated'    => current_time('mysql'),
		),
		array(
			'%s',
			'%s',
			'%s',
			'%s',
			'%s',
			'%d',
			'%s',
			'%s',
			'%s',
			'%d',
			'%s',
			'%s'
		)
	);

	$store_id  = $wpdb->insert_id;

	//insert data in slp_extendo table
	$wpdb->insert(
		$wpdb->prefix.'slp_extendo',
		array(
			'sl_id'      => $store_id,
			'featured'   => 0,
			'rank'       => 0,
		),
		array(
			'%d',
			'%d',
			'%d',
		)
	);

	//return store id
	return $store_id;
}


/**
 * link store to shops post type post
 * @param $store_id
 * @param $post_id
 */
function ltss_update_shop_data_to_store( $store_id, $address, $location, $post ){
	global $wpdb;

	//insert post id in store_location table to link it
	$wpdb->update(
		$wpdb->prefix.'store_locator',
		array(
			'sl_store'          => $post->post_title,
			'sl_address'        => $address['street_1'],
			'sl_address2'       => $address['street_2'],
			'sl_city'           => $address['city'],
			'sl_state'          => $address['state'],
			'sl_zip'            => $address['zip'],
			'sl_country'        => $address['country'],
			'sl_latitude'       => $location['lat'],
			'sl_longitude'      => $location['lng'],
			'sl_url'      => get_permalink( $post->ID ),
			'sl_lastupdated'    => current_time('mysql'),
		),
		array( 'sl_id' => $store_id ),
		array(
			'%s',
			'%s',
			'%s',
			'%s',
			'%s',
			'%d',
			'%s',
			'%s',
			'%s',
			'%s',
			'%s'
		),
		array( '%d' )
	);

}


/**
 * @param $store_id
 */
function ltss_unlink_store_to_shop( $store_id ){
	global $wpdb;

	//delete  store location entry
	$wpdb->delete(
		$wpdb->prefix.'store_locator',
		array( 'sl_id' => $store_id ),
		array( '%d' )
	);

	//insert data in slp_extendo table
	$wpdb->delete(
		$wpdb->prefix.'slp_extendo',
		array( 'sl_id' => $store_id ),
		array( '%d' )
	);
}

/**
 * create address
 * @param $street_1
 * @param $street_2
 * @param $city
 * @param $state
 * @param $zip
 * @param $country
 */
function ltss_create_address( $street_1, $street_2, $city, $state, $zip, $country ){}

/**
 * function to get  the address
 * @param $addr
 *
 * @return array
 */
function get_lat_long( $addr ){

	$location = array(
		'lat' => '',
		'lng' => ''
	);

	//address string for google map query
	$address = str_replace( ' ', '+', implode( ' ', $addr ) );

	$json = wp_remote_get( "http://maps.google.com/maps/api/geocode/json?address=$address&sensor=false" );
	$json = wp_remote_retrieve_body( $json );

	if( ! $json ){
		return $location;
	}else{
		$json = json_decode( $json, true );
	}

	$location['lat']  = $json['results'][0]['geometry']['location']['lat'];
	$location['lng']  = $json['results'][0]['geometry']['location']['lng'];

	return $location;
}

/**
 * update shop/ store relationship
 * @param $post_id
 * @param $post
 */
function ltss_store_location_table( $post_id, $post ) {

	// If this is just a revision, don't send the email.
	if ( wp_is_post_revision( $post_id ) )
		return;

	//bail out if not any address field edited
	if( ! isset( $_POST['fields']['field_5599074619da6'] )      // street 1
	    && ! isset( $_POST['fields']['field_5599076819da7'] )   // street 2
	    && ! isset( $_POST['fields']['field_5599078119da8'] )   // city
	    && ! isset( $_POST['fields']['field_5599078a19da9'] )   // state
	    && ! isset( $_POST['fields']['field_5599079219daa'] )   // zip
	    && ! isset( $_POST['fields']['field_559907a219dab'] )   // country
	    && ! isset( $_POST['fields']['field_55991b3d452d7'] )   // latitude
	    && ! isset( $_POST['fields']['field_55991b4e452d8'] )   // longitude
	){
		return;
	}

	$address = array(
		'street_1'  => esc_attr( $_POST['fields']['field_5599074619da6'] ),    //street 1
		'street_2'  => esc_attr( $_POST['fields']['field_5599076819da7'] ),    //street 2
		'city'      => esc_attr( $_POST['fields']['field_5599078119da8'] ),    //city
		'state'     => esc_attr( $_POST['fields']['field_5599078a19da9'] ),    //state
		'zip'       => absint( $_POST['fields']['field_5599079219daa'] ),      //zip
		'country'   => esc_attr( $_POST['fields']['field_559907a219dab'] )     //country
	);


	//get logitude & latitude values from address
	$location = array(
		'lat' => get_field( 'latitude', $post_id ),
		'lng'  => get_field( 'longitude', $post_id )
	);


	if( $store_id = get_post_meta( $post_id, 'store_id', true ) ){
		//update store table
		ltss_update_shop_data_to_store( $store_id,  $address, $location, $post );
	}else{
		//get logitude & latitude values from address
		$location = get_lat_long( $address );

		//insert data into store location plus table
		$store_id = ltss_insert_shop_data_to_store( $address, $location, $post_id, $post );
	}

	//update store id
	update_post_meta( $post_id, 'store_id', $store_id );

}
add_action( 'save_post_shops', 'ltss_store_location_table', 999, 2 );


/**
 * unlink shop from store when shop deleted
 * @param $post_id
 */
function ltss_delete_shop_from_store( $post_id ){

	//bail out
	if( 'shops' !== get_post_type( $post_id ) ){
		return;
	}

	//unlink if any shop already linked to store
	if( $store_id = absint( ltss_get_store_id( $post_id ) ) ){

		//remove unlink shop from previous store
		ltss_unlink_store_to_shop( $store_id );
	}
}
add_action( 'delete_post', 'ltss_delete_shop_from_store' );

/**
 * Get store id by shop post id
 * @param $post_id
 *
 * @return mixed
 */
function ltss_get_store_id( $post_id ){
	global $wpdb;

	//fetch store id
	$sql = 'SELECT sl_id FROM '.$wpdb->prefix.'store_locator WHERE sl_linked_postid ='.$post_id;
	$store_id = $wpdb->get_var( $sql );

	return $store_id;
}


/**
 * Get store id by shop post id
 * @param $post_id
 *
 * @return mixed
 */
function ltss_get_shop_id( $store_id ){
	global $wpdb;

	//fetch shop id
	$sql = 'SELECT sl_linked_postid FROM '.$wpdb->prefix.'store_locator WHERE sl_id ='.$store_id;
	$shop_id = $wpdb->get_var( $sql );

	return $shop_id;
}


/**
 * Auto set latitude and lognitude values
 * @param $post_id
 */
function ltss_update_lat_lng_of_shop( $post_id ){

	// If this is just a revision, don't send the email.
	if ( wp_is_post_revision( $post_id ) )
		return;

	//bail out if not any address field edited
	if( ! isset( $_POST['fields']['field_5599074619da6'] )      // street 1
		&& ! isset( $_POST['fields']['field_5599076819da7'] )   // street 2
		&& ! isset( $_POST['fields']['field_5599078119da8'] )   // city
		&& ! isset( $_POST['fields']['field_5599078a19da9'] )   // state
		&& ! isset( $_POST['fields']['field_5599079219daa'] )   // zip
		&& ! isset( $_POST['fields']['field_559907a219dab'] )   // country
	){
		return;
	}

	$address = array(
		'street_1'  => esc_attr( $_POST['fields']['field_5599074619da6'] ),    //street 1
		'street_2'  => esc_attr( $_POST['fields']['field_5599076819da7'] ),    //street 2
		'city'      => esc_attr( $_POST['fields']['field_5599078119da8'] ),    //city
		'state'     => esc_attr( $_POST['fields']['field_5599078a19da9'] ),    //state
		'zip'       => absint( $_POST['fields']['field_5599079219daa'] ),      //zip
		'country'   => esc_attr( $_POST['fields']['field_559907a219dab'] )     //country
	);


	//get logitude & latitude values from address
	$location = get_lat_long( $address );


	//insert latitude & logitude values to post meta
	if( ! empty( $location ) ){

		//updare acf fields
		update_field( 'field_55991b3d452d7', $location['lat'] );
		update_field( 'field_55991b4e452d8', $location['lng'] );

	}
}
add_action('acf/save_post', 'ltss_update_lat_lng_of_shop', 998 );