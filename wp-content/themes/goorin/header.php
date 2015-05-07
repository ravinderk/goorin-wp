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
	<div class="site-header-main">
        <?php goorin_header(); ?>
        <!--header-->
        <div class="cart-dropdown">
        	<h2>Your Cart (7)</h2>
        	<div class="cart-list">
        		<div class="cart-list-row">
            		<div class="cart-list-loop">
                		<figure><img src="<?php echo get_template_directory_uri(); ?>/images/hat-men.png"></figure>
                		<article>
                			<h6>Smitty</h6>
                			<p>
                				$145<br/>
    							Color: Grey<br/>
    							Size: Large <br/>
    							Qty: 2
                			</p>
                		</article>
                		<a href="#" class="cart-delete"><span></span></a>
                	</div>
                	<!--cart-list-loop-->
                	<div class="cart-list-loop">
                		<figure><img src="<?php echo get_template_directory_uri(); ?>/images/hat-women.png"></figure>
                		<article>
                			<h6>Smitty</h6>
                			<p>
                				$145<br/>
    							Color: Grey<br/>
    							Size: Large <br/>
    							Qty: 2
                			</p>
                		</article>
                		<a href="#" class="cart-delete"><span></span></a>
                	</div>
                	<!--cart-list-loop-->	
                </div>	
                <!--cart-list-row-->
            	<div class="cart-list-row">
            		<div class="cart-list-loop">
                		<figure><img src="<?php echo get_template_directory_uri(); ?>/images/hat-men.png"></figure>
                		<article>
                			<h6>Smitty</h6>
                			<p>
                				$145<br/>
    							Color: Grey<br/>
    							Size: Large <br/>
    							Qty: 2
                			</p>
                		</article>
                		<a href="#" class="cart-delete"><span></span></a>
                	</div>
                	<!--cart-list-loop-->
                	<div class="cart-list-loop">
                		<figure><img src="<?php echo get_template_directory_uri(); ?>/images/hat-women.png"></figure>
                		<article>
                			<h6>Smitty</h6>
                			<p>
                				$145<br/>
    							Color: Grey<br/>
    							Size: Large <br/>
    							Qty: 2
                			</p>
                		</article>
                		<a href="#" class="cart-delete"><span></span></a>
                	</div>
                	<!--cart-list-loop-->
                </div>	
                <!--cart-list-row-->
                <div class="cart-list-row">
            		<div class="cart-list-loop">
                		<figure><img src="<?php echo get_template_directory_uri(); ?>/images/hat-men.png"></figure>
                		<article>
                			<h6>VINNIE THE BRAINS</h6>
                			<p>
                				$145<br/>
    							Color: Grey<br/>
    							Size: Large <br/>
    							Qty: 2
                			</p>
                		</article>
                		<a href="#" class="cart-delete"><span></span></a>
                	</div>
                	<!--cart-list-loop-->
                	<div class="cart-list-loop">
                		<figure><img src="<?php echo get_template_directory_uri(); ?>/images/hat-women.png"></figure>
                		<article>
                			<h6>Smitty</h6>
                			<p>
                				$145<br/>
    							Color: Grey<br/>
    							Size: Large <br/>
    							Qty: 2
                			</p>
                		</article>
                		<a href="#" class="cart-delete"><span></span></a>
                	</div>
                	<!--cart-list-loop-->	
                </div>	
                <!--cart-list-row-->
                <div class="cart-list-row">
            		<div class="cart-list-loop">
                		<figure><img src="<?php echo get_template_directory_uri(); ?>/images/hat-men.png"></figure>
                		<article>
                			<h6>VINNIE THE BRAINS</h6>
                			<p>
                				$145<br/>
    							Color: Grey<br/>
    							Size: Large <br/>
    							Qty: 2
                			</p>
                		</article>
                		<a href="#" class="cart-delete"><span></span></a>
                	</div>
                	<!--cart-list-loop-->
                	<div class="cart-list-loop">
                		<figure><img src="<?php echo get_template_directory_uri(); ?>/images/hat-women.png"></figure>
                		<article>
                			<h6>Smitty</h6>
                			<p>
                				$145<br/>
    							Color: Grey<br/>
    							Size: Large <br/>
    							Qty: 2
                			</p>
                		</article>
                		<a href="#" class="cart-delete"><span></span></a>
                	</div>
                	<!--cart-list-loop-->	
                </div>	
                <!--cart-list-row-->	
        	</div>
        	<!--cart-list-->
        	<div class="cart-total">
        		<div class="cart-message">Enjoy <span>free ground shipping</span> on all <br/>orders as our gift for you!</div>
        		<div class="cart-subtotal">Subtotal $458.00</div>
        	</div>
        	<!--cart-total-->
        	<div class="cart-checkout">
        		<a href="#" class="btn btn-n">View Cart</a>
        		<a href="#" class="btn">CHECKOUT</a>
        	</div>
        	<!--cart-total-->
        </div>
    </div>
	<div id="content" class="site-content">
