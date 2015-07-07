<?php
/**
 * header script
 */
function ltss_head_script(){

	//bail out
	if( ! is_page_template( 'archive-shops.php' ) ){
		return;
	}


	if( ! isset( $_COOKIE['goorin_first_time_user'] ) ){
		?>
		<script>
			jQuery(document).ready(function(){

				function setCookie(cname, cvalue, exdays) {
					var d = new Date();
					d.setTime(d.getTime() + (exdays*24*60*60*1000));
					var expires = "expires="+d.toUTCString();
					document.cookie = cname + "=" + cvalue + "; " + expires;
				}

				function getCookie(cname) {
					var name = cname + "=";
					var ca = document.cookie.split(';');
					for(var i=0; i<ca.length; i++) {
						var c = ca[i];
						while (c.charAt(0)==' ') c = c.substring(1);
						if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
					}
					return "";
				}

				//check if this is a first time user
				if( ! getCookie('goorin_first_time_user') ) {
					$( '#map_sidebar, #slp_tagline, #map').addClass('goorin_first_time_user');

					//set cookie to detect first time user
					setCookie( 'goorin_first_time_user', 1 );
				}

				$('#searchForm').on( 'submit', function( event ){
					$( '#map_sidebar, #slp_tagline, #map').each(function( i, k ){
						if( $(this).hasClass('goorin_first_time_user')){
							//remove class if user is not a first time user
							$(this).removeClass('goorin_first_time_user');
						}
					});

					return true;
				});
			});
		</script>
		<style>
			#sl_div{position: relative;}
			.goorin_first_time_user{  position: absolute!important; left: -10000000px;}
		</style>
		<?php
	}
}
add_action( 'wp_footer', 'ltss_head_script', 999 );


/**
 * Footer script
 */
function ltss_footer_script(){
	//bail out
	if( ! is_page_template( 'archive-shops.php' ) ){
		return;
	}
	?>
	<script>
		jQuery(document).ready(function($) {

			//store location plus plugin event
			$('#map_sidebar').bind('contentchanged',function() {
				var results = $('.results_wrapper');
				results.unbind('click');
				results.on( 'click', function(){
					var shop_link = $(this).find('.storelocatorlink');

					if( shop_link.length ){
						window.location.assign( shop_link.attr('href') );
					}
				});
			});

			//Address field placeholder
			$('input', '#addy_in_address').attr( 'placeholder', 'Enter Your Zip' );

			//Select field placeholder
			$( 'option', '#radiusSelect').each( function( i, k ){
				$(this).text( 'Within ' + $(this).text() );
			});
		});
	</script>
	<?php
}
add_action( 'wp_footer', 'ltss_footer_script', 9999 );