<header class="site-header">
	<div class="container">
		<span class="saletext">SEE OUR <a href="<?php echo get_theme_mod('sale_link', '#'); ?>"><?php echo get_theme_mod('sale_text', 'Fall Sample Sale!'); ?></a></span>
		<a href="#" class="menu-toggle">
			<span></span>
		</a>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo logo-mobile"></a>
		<span class="cart-count">2</span>
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
			<a href="#" class="menu-account-link"><?php echo get_theme_mod('sale_link', 'LOGIN'); ?></a>
			<span>•</span>
			<a href="#" class="menu-account-link"><?php echo get_theme_mod('sale_link', 'Account'); ?></a>
			<span>•</span>
			<a href="#" class="menu-search-link"><?php echo get_theme_mod('sale_link', 'Search'); ?></a>
			<span>•</span>
			<a href="#" class="menu-cart-link"><?php echo get_theme_mod('sale_link', 'Cart'); ?><span class="cart-count-icon">2</span></a>
		</menu>
	</div>
	<div class="nav-overlay"></div>
</header>
