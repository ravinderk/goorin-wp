<header class="site-header">
	<div class="container">
		<?php
			$sourceUrl = parse_url(home_url('/'));
			$sourceUrl = $sourceUrl['host'];
		?>
		<span class="saletext">SEE OUR <a href="<?php echo get_theme_mod('sale_link', '#'); ?>"><?php echo get_theme_mod('sale_text', 'Fall Sample Sale!'); ?></a></span>
		<a href="#" class="menu-toggle">
			<span></span>
		</a>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo logo-mobile"></a>
		<a  href="http://store.<?php echo $sourceUrl; ?>/checkout/cart/" class="cart-count cart-count-mobile">0</a>
		<nav class="nav-primary">
			<div class="site-search">
				<div class="container">
					<div class="site-search-main">
						<a href="#" class="search-close"><span></span></a>
						<div class="site-search-form">
							<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
								<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Search" />
								<input type="submit" id="searchsubmit" value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" />
							</form>
						</div>
					</div>
				</div>
			</div>
			<?php
			get_template_part( 'inc/Header_Walker' );
			wp_nav_menu( array(
							'theme_location' => 'header',
							'walker'         => new Goorin_Header_Walker(),
							'container'      => 'ul',
			                'menu_class'     => ''
					)
			);
			?>
		</nav>
		<menu class="menu">
			<a href="http://store.<?php echo $sourceUrl; ?>/customer/account/" class="menu-login-link"><?php echo get_theme_mod('login_text', 'LOGIN'); ?></a>
			<span>•</span>
			<a href="http://store.<?php echo $sourceUrl; ?>/customer/account/" class="menu-account-link"><?php echo get_theme_mod('account_text', 'Account'); ?></a>
			<span>•</span>
			<a href="#" class="menu-search-link"><?php echo get_theme_mod('search_text', 'Search'); ?></a>
			<span>•</span>
			<a href="#" class="menu-cart-link"><?php echo get_theme_mod('cart_text', 'Cart'); ?><span class="cart-count-icon">0</span></a>
		</menu>
	</div>
	<div class="nav-overlay"></div>
</header>
<div class="cart-dropdown">
	<h2>Your Cart (<span class="cart-count">0</span>)</h2>
	<div class="no-items">
		<p>You don't have any items in your cart.</p>
	</div>
	<div class="have-items" style="display: none">
		<div class="cart-list">
		</div>
		<!--cart-list-->
		<div class="cart-total">
			<div class="cart-message">Enjoy <span>free ground shipping</span> on all <br/>orders as our gift for you!</div>
			<div class="cart-subtotal">Subtotal <span class="amount">$458.00</span></div>
		</div>
		<!--cart-total-->
		<div class="cart-checkout">
			<a href="#" class="btn btn-n cart-page-link"><span>View Cart</span></a>
			<a href="#" class="btn checkout-page-link">CHECKOUT</a>
		</div>
		<!--cart-total-->
	</div>
</div>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		// Source:- https://developer.mozilla.org/en-US/docs/Web/API/document/cookie
		var docCookies = {
			getItem: function (sKey) {
				if (!sKey) { return null; }
				return decodeURIComponent(document.cookie.replace(new RegExp("(?:(?:^|.*;)\\s*" + encodeURIComponent(sKey).replace(/[\-\.\+\*]/g, "\\$&") + "\\s*\\=\\s*([^;]*).*$)|^.*$"), "$1")) || null;
			},
			setItem: function (sKey, sValue, vEnd, sPath, sDomain, bSecure) {
				if (!sKey || /^(?:expires|max\-age|path|domain|secure)$/i.test(sKey)) { return false; }
				var sExpires = "";
				if (vEnd) {
					switch (vEnd.constructor) {
						case Number:
							sExpires = vEnd === Infinity ? "; expires=Fri, 31 Dec 9999 23:59:59 GMT" : "; max-age=" + vEnd;
							break;
						case String:
							sExpires = "; expires=" + vEnd;
							break;
						case Date:
							sExpires = "; expires=" + vEnd.toUTCString();
							break;
					}
				}
				document.cookie = encodeURIComponent(sKey) + "=" + encodeURIComponent(sValue) + sExpires + (sDomain ? "; domain=" + sDomain : "") + (sPath ? "; path=" + sPath : "") + (bSecure ? "; secure" : "");
				return true;
			},
			removeItem: function (sKey, sPath, sDomain) {
				if (!this.hasItem(sKey)) { return false; }
				document.cookie = encodeURIComponent(sKey) + "=; expires=Thu, 01 Jan 1970 00:00:00 GMT" + (sDomain ? "; domain=" + sDomain : "") + (sPath ? "; path=" + sPath : "");
				return true;
			},
			hasItem: function (sKey) {
				if (!sKey) { return false; }
				return (new RegExp("(?:^|;\\s*)" + encodeURIComponent(sKey).replace(/[\-\.\+\*]/g, "\\$&") + "\\s*\\=")).test(document.cookie);
			},
			keys: function () {
				var aKeys = document.cookie.replace(/((?:^|\s*;)[^\=]+)(?=;|$)|^\s*|\s*(?:\=[^;]*)?(?:\1|$)/g, "").split(/\s*(?:\=[^;]*)?;\s*/);
				for (var nLen = aKeys.length, nIdx = 0; nIdx < nLen; nIdx++) { aKeys[nIdx] = decodeURIComponent(aKeys[nIdx]); }
				return aKeys;
			}
		};

		// verify the cookie
		if(!docCookies.hasItem('hello_world'))
			return $('.menu-account-link').hide().next().hide();
		var cookie = docCookies.getItem('hello_world');
		cookie = JSON.parse(cookie);

		// hide the corresponding link if user is logged in or not
		if(cookie.loggedIn)
			$('.menu-login-link').hide().next().hide();
		else
			$('.menu-account-link').hide().next().hide();

		// number of items in the cart
		var cartCount = cookie.items ? cookie.items.length : 0;
		$('.menu-cart-link .cart-count-icon, .cart-dropdown .cart-count , .cart-count-mobile').text(cartCount);

		// show the items div if applicable
		if(cartCount) {
			$('.no-items').hide();
			$('.have-items').show();
		}

		// cart and checkout links
		$('.cart-dropdown .cart-checkout .cart-page-link').attr('href', cookie.cartUrl);
		$('.cart-dropdown .cart-checkout .checkout-page-link').attr('href', cookie.checkoutUrl);

		// cart total
		$('.cart-dropdown .cart-total .cart-subtotal .amount').text(cookie.subtotal);

		// loop the items in the cart
		var decode = function(string) {
			if('string' == $.type(string))
				return decodeURIComponent(string.replace('+', '%20'));
			return string;
		};
		var items = $.map(cookie.items, function(item) {
			var options = (item.options && item.options.length) ? $.map(item.options, function(option) {
				return decode(option.label) + ': ' + decode(option.value);
			}).join('<br/>') : '';
			return $('<div class="cart-list-loop"><figure><img src="'+item.thumbnail+'"></figure><article><h6>'+decode(item.name)+'</h6><p>'+decode(item.price)+'<br/>'+options+'<br/>Qty: '+decode(item.qty)+'</p></article><a href="'+decode(item.removeUrl)+'" class="cart-delete"><span></span></a></div>');
		});
		$('.cart-dropdown .cart-list').empty();
		while(items.length) {
			var row = $('<div class="cart-list-row"></div>').append(items.splice(0, 2));
			$('.cart-dropdown .cart-list').append(row);
		}
	});
</script>
