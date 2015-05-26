<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package goorin
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function goorin_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'goorin_body_classes' );

if ( version_compare( $GLOBALS['wp_version'], '4.1', '<' ) ) :
	/**
	 * Filters wp_title to print a neat <title> tag based on what is being viewed.
	 *
	 * @param string $title Default title text for current view.
	 * @param string $sep Optional separator.
	 * @return string The filtered title.
	 */
	function goorin_wp_title( $title, $sep ) {
		if ( is_feed() ) {
			return $title;
		}

		global $page, $paged;

		// Add the blog name
		$title .= get_bloginfo( 'name', 'display' );

		// Add the blog description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) ) {
			$title .= " $sep $site_description";
		}

		// Add a page number if necessary:
		if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
			$title .= " $sep " . sprintf( __( 'Page %s', 'goorin' ), max( $paged, $page ) );
		}

		return $title;
	}
	add_filter( 'wp_title', 'goorin_wp_title', 10, 2 );

	/**
	 * Title shim for sites older than WordPress 4.1.
	 *
	 * @link https://make.wordpress.org/core/2014/10/29/title-tags-in-4-1/
	 * @todo Remove this function when WordPress 4.3 is released.
	 */
	function goorin_render_title() {
		?>
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<?php
	}
	add_action( 'wp_head', 'goorin_render_title' );
endif;

function get_magento_products( $category_id, $limit ) {
	if ( ! ( $products = get_transient( 'saved_magento_products' ) ) ) {
		$wp_server_name = $_SERVER['SERVER_NAME'];
		// if server is production and files are protected then
		if ( ! WP_LOCAL_SERVER && ! WP_DEV_SERVER && ! WP_STAGING_SERVER ) {
			$access_credential = 'anattadesign:Secure2015!@';
		}
		//make a curl request to fetch the products from magento
		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_RETURNTRANSFER => 1,
			CURLOPT_URL => 'http://' . $access_credential . 'store.' . $wp_server_name . '/index.php/product/list/index/category_id/'. $category_id . '/limit/' . $limit
		));

		$products = curl_exec($curl);

		// set transient for 4 hours
		set_transient( 'saved_magento_products', $products, ( 60 * 60 * 4 ) );
	}

	return $products;
}

function delete_transient_magento_product( $post_id ) {
	if ( get_page_template_slug( $post_id ) == 'page-campaign.php' ) {
		delete_transient( 'saved_magento_products' );
	}
}
add_action( 'save_post', 'delete_transient_magento_product' );
