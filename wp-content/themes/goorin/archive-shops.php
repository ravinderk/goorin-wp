<?php
/*
* Template Name: Shops Page
*/

get_header(); ?>
	<div class="shoppage">
	<section class="breadcrumbs">
		<div class="container">
			<ul>
				<li class="home">
					<a title="Go to Home Page" href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
					<span>/ </span>
				</li>
				<li>
					<strong><?php the_title() ?></strong>
				</li>
			</ul>
		</div>
	</section>
	<!--breadcrumbs-->
	<section class="shop-hero-block">
        <div class="container">
	        <figure>
		        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/shop-banner-image.jpg"></a>
	        </figure>
        </div>
    </section>
    <!--shop-hero-block-->
    <section class="shop-content-block">
    	<div class="container">
    		<div class="shop-tab-main">
    			<ul>
    				<li><a href="#" class="active">Find a shop</a></li>
    				<li><a href="#">Shop Listing</a></li>
    			</ul>	
    		</div>
    		<div class="shop-content-area">
    			<div class="shop-content findshop" style="display:block;">
    				<hgroup class="shop-top-content">
    					<h4>Find a Shop</h4>
    				</hgroup>
    				<div class="findshop-area">
    					<?php echo do_shortcode('[SLPLUS]');?>
    				</div>
    			</div>
    			<div class="shop-content shoplisting">
    				<hgroup class="shop-top-content">
    					<h4>Our Neighborhood Hat Shops</h4>
    				</hgroup>
    				<div class="shoplist-area">
    					<article class="shoplist">
    						<h6>CANADA</h6>
    						<ul>
    							<li><a href="#">Toronto - Queen St. West</a></li>
								<li><a href="#">Vancouver - Yaletown</a></li>
							</ul>
							<h6>CALIFORNIA</h6>
							<ul>
								<li><a href="#">Berkeley - Elmwood</a></li>
								<li><a href="#">Los Angeles - Larchmont</a></li>
								<li><a href="#">Los Angeles - Melrose</a></li>
								<li><a href="#">Los Angeles - Studio City</a></li>
								<li><a href="#">Pasadena - Old Town</a></li>
								<li><a href="#">San Diego - Gaslamp</a></li>
								<li><a href="#">San Francisco - Haight</a></li>
								<li><a href="#">San Francisco - North Beach</a></li>
								<li><a href="#">San Francisco - Union Square</a></li>
								<li><a href="#">Santa Barbara - State Street</a></li>
								<li><a href="#">Santa Monica - Santa Monica Boulevard</a></li>
							</ul>	
							<h6>COLORADO</h6>
							<ul>
								<li><a href="#">Denver - Larimer Square</a></li>
								<li><a href="#">Boulder - West Pearl</a></li>
							</ul>	
							<h6>DISTRICT OF COLUMBIA</h6>
							<ul>
								<li><a href="#">Washington, D.C. - Georgetown</a></li>
							</ul>	
    					</article>
    					<article class="shoplist">
    						<h6>FLORIDA</h6>
							<ul>
								<li><a href="#">Miami Beach - Lincoln Road</a></li>
							</ul>	
							<h6>GEORGIA</h6>
							<ul>
								<li><a href="#">Atlanta - Ponce City Market</a></li>
								<li><a href="#">Savannah - Broughton St</a></li>
							</ul>
							<h6>ILLINOIS</h6>
							<ul>
								<li><a href="#">Chicago - Wicker Park</a></li>
							</ul>	
							<h6>LOUISIANA</h6>
							<ul>
								<li><a href="#">New Orleans - French Quarter</a></li>
								<li><a href="#">New Orleans - Magazine Street</a></li>
							</ul>	
							<h6>MASSACHUSETTS</h6>
							<ul>
								<li><a href="#">Boston - Newbury</a></li>
								<li><a href="#">Cambridge - Harvard Square</a></li>
							</ul>
							<h6>MINNESOTA</h6>
							<ul>	
								<li><a href="#">Minneapolis - Uptown</a></li>
							</ul>	
							<h6>NEVADA</h6>
							<ul>
								<li><a href="#">Las Vegas - The Linq</a></li>
							</ul>	
    					</article>
    					<article class="shoplist">
    						<h6>NEW YORK</h6>
							<ul>
								<li><a href="#">Brooklyn - Park Slope</a></li>
								<li><a href="#">Brooklyn - Williamsburg</a></li>
								<li><a href="#">New York - Nolita</a></li>
								<li><a href="#">New York - West Village</a></li>
							</ul>
							<h6>OREGON</h6>
							<ul>
								<li><a href="#">Portland - Nob Hill</a></li>
							</ul>
							<h6>PENNSYLVANIA</h6>
							<ul>
								<li><a href="#">Philly - Rittenhouse Square</a></li>
							</ul>
							<h6>SOUTH CAROLINA</h6>
							<ul>
								<li><a href="#">Charleston - King Street</a></li>
							</ul>
							<h6>TENNESSEE</h6>
							<ul>
								<li><a href="#">Nashville - The District</a></li>
							</ul>
							<h6>TEXAS</h6>
							<ul>
								<li><a href="#">Austin - South Congress</a></li>
							</ul>
							<h6>WASHINGTON</h6>
							<ul>
								<li><a href="#">Seattle - Pike Place Market</a></li>
							</ul>
    					</article>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
    <!--shop-tab-block-->
	<section class="related-item-main">
		<div class="container">
			<h1>Happening <span>at</span> Our Shops</h1>
			<div class="related-preview-main">
				<div class="related-image-content">
					<figure class="experience-preview-image">
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/f1.png" /></a>
					</figure>
					<article>
						<h4>Fashion News</h4>
						<div class="heading-content">
							<p>
								<a href="#">Brooklyn Fashion Show</a>
							</p>
						</div>
					</article>
				</div>
				<!--experience-image-content-->
				<div class="related-preview-content">
					<div class="related-feature-content">
						<div class="related-feature-box">
							<figure>
								<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/f2.png" /></a>
							</figure>
							<article>
								<h6>Shops</h6>
								<h4>
									<a href="#">Williamsburg Grand Opening Party!</a>
								</h4>
							</article>
						</div>
						<div class="related-feature-box">
							<figure>
								<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/f3.png" /></a>
							</figure>
							<article>
								<h6>Shops</h6>
								<h4>
									<a href="#">Williamsburg Grand Opening Party!</a>
								</h4>
							</article>
						</div>
					</div>
				</div>
				<!--related-preview-content-->
			</div>
			<!--related-preview-main-->
		</div>
	</section>
</div>
<?php get_footer(); ?>
