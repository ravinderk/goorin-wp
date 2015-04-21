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
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/app.css?ver='.filemtime( get_template_directory().'/css/app.css'); ?>">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/global.js"></script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="main">
	<header class="site-header">
        <div class="container">
            <span class="saletext">SEE OUR <a href="#">Fall Sample Sale!</a></span>
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
                <ul>
                    <li class="nav-primary-item nav-1 has-subnav">
                        <a href="#" class="navlink nav-primary-item-link">Mens<span></span></a>
                        <div class="submenu">
                            <div class="container">
                                <div class="colbox">
                                    <ul class="col-1">
                                        <h6>Featured</h6>
                                        <li><a href="#">New</a></li>
                                        <li><a href="#">Top Sellers</a></li>
                                        <li><a href="#">Holiday Gifts</a></li>
                                        <li><a href="#">XXL</a></li>
                                        <li><a href="#">Classic Staples</a></li>
                                        <li><a href="#">Spring Favorites</a></li>
                                    </ul>
                                    <ul class="col-2">
                                        <h6>Collections</h6>
                                        <li><a href="#">Everyday Goorin Originals</a></li>
                                        <li><a href="#">Heritage American Made Felt</a></li>
                                        <li><a href="#">Premium Straws & Panamas</a></li>
                                        <li><a href="#">Outdoor Grenadier</a></li>
                                        <li><a href="#">Ted’s Finest Flatcaps & Tweeds</a></li>
                                        <li><a href="#">Artist Collection</a></li>
                                        <li><a href="#">Ltd</a></li>
                                        <li><a href="#">Kids</a></li>
                                    </ul>
                                    <ul class="col-3">
                                        <h6>Shapes</h6>
                                        <li><a href="#">Fedora</a></li>
                                        <li><a href="#">Flatcap</a></li>
                                        <li><a href="#">Baseball</a></li>
                                        <li><a href="#">Cadet</a></li>
                                    </ul>
                                    <figure>
                                        <a href="#">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/fall-winter-img.png" alt="">
                                        </a> 
                                        <a href="#">
                                            <p>Fall/Winter Commuter Collection</p>
                                        </a>  
                                    </figure>
                                </div>
                            </div>    
                        </div>
                    </li>
                    <li class="nav-primary-item nav-2 has-subnav">
                        <a href="#" class="navlink nav-primary-item-link">Womens <span></span></a>
                        <div class="submenu">
                            <div class="container">
                                <div class="colbox">
                                    <ul class="col-1">
                                        <h6>Featured2</h6>
                                        <li><a href="#">New</a></li>
                                        <li><a href="#">Top Sellers</a></li>
                                        <li><a href="#">Holiday Gifts</a></li>
                                        <li><a href="#">XXL</a></li>

                                    </ul>
                                    <ul class="col-2">
                                        <h6>Collections</h6>
                                        <li><a href="#">Everyday Goorin Originals</a></li>
                                        <li><a href="#">Heritage American Made Felt</a></li>
                                        <li><a href="#">Premium Straws & Panamas</a></li>
                                        <li><a href="#">Outdoor Grenadier</a></li>
                                    </ul>
                                    <ul class="col-3">
                                        <h6>Shapes</h6>
                                        <li><a href="#">Fedora</a></li>
                                        <li><a href="#">Flatcap</a></li>
                                        <li><a href="#">Baseball</a></li>
                                        <li><a href="#">Cadet</a></li>
                                        <li><a href="#">Fedora</a></li>
                                        <li><a href="#">Flatcap</a></li>
                                        <li><a href="#">Baseball</a></li>
                                        <li><a href="#">Cadet</a></li>
                                    </ul>
                                    <figure>
                                        <a href="#">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/fall-winter-img.png" alt="">
                                        </a> 
                                        <a href="#">
                                            <p>Fall/Winter Commuter Collection</p>
                                        </a>    
                                        
                                    </figure>
                                </div>
                            </div>    
                        </div>
                    </li>
                    <li class="nav-primary-item nav-3 logo-li"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo"></a></li>
                    <li class="nav-primary-item nav-4"><a href="<?php echo esc_url( home_url() ); ?>/shops" class="nav-primary-item-link">Shops</a></li>
                    <li class="nav-primary-item nav-5"><a href="<?php echo esc_url( home_url() ); ?>/experience" class="nav-primary-item-link">Experience</a></li>
                </ul>
            </nav>
            <menu class="menu">
            	<a href="#" class="menu-account-link">ACCOUNT</a>
                <span>•</span>
                <a href="#" class="menu-search-link">Search</a>
                <span>•</span>
                <a href="#" class="menu-cart-link">Cart<span class="cart-count-icon">2</span></a>
            </menu>
        </div>
        <div class="nav-overlay"></div>
    </header>
    <!--header-->
	<div id="content" class="site-content">
