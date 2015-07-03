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
		        <a href="#"><?php the_post_thumbnail() ?></a>
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
    					<h4><?php the_title() ?></h4>
    				</hgroup>
    				<div class="findshop-area">
    					<?php echo do_shortcode('[SLPLUS]');?>
					    <style type="text/css">
						    #map, #slp_tagline, #map_sidebar {
							    display: none;
						    }
					    </style>
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
	<?php if ( class_exists( 'AuthorRecommendedPosts' ) ) { ?>
		<?php
		$author_recommended_posts = new AuthorRecommendedPosts();
		$namespace = $author_recommended_posts->namespace;
		$recommended_ids = (array) get_post_meta( $post->ID, $namespace, true );

		if ( count( array_filter( $recommended_ids ) ) > 0 ) {
		?>
		<section class="related-item-main">
			<div class="container">
				<h1>Happening <span>at</span> Our Shops</h1>
				<div class="related-preview-main">
					<?php foreach ( $recommended_ids as $key => $id ) { ?>
					<?php if ( $key == 3 ) {
						break; //we just need to show 3 related product here
					} ?>
					<?php if ( $key == 0 ) { ?>
					<div class="related-image-content">
						<figure class="experience-preview-image">
							<a href="<?php echo get_the_permalink( $id ) ?>"><?php echo get_the_post_thumbnail( $id ) ?></a>
						</figure>
						<article>
							<h4><?php the_category( ', ', '', $id ) ?></h4>

							<div class="heading-content"><p>
									<a href="<?php echo get_the_permalink( $id ) ?>"><?php echo get_the_title( $id ) ?></a>
								</p></div>
						</article>
					</div>
					<!--related-image-content-->
					<div class="related-preview-content">
						<div class="related-feature-content">
							<?php } else { ?>
								<!-- loop start here-->
								<div class="related-feature-box">
									<figure>
										<a href="<?php echo get_the_permalink( $id ) ?>"><?php echo get_the_post_thumbnail( $id, 'post_custom_size' ) ?></a>
									</figure>
									<article>
										<h6><?php the_category( ', ', '', $id ) ?></h6>
										<h4>
											<a href="<?php echo get_the_permalink( $id ) ?>"><?php echo get_the_title( $id ) ?></a>
										</h4>
									</article>
								</div>
								<!-- loop End here-->
								<!--related-preview-content-->
							<?php } ?>
							<?php } ?>
						</div>
					</div>
				</div>
				<!--related-preview-main-->
			</div>
		</section>
		<?php } ?>
	<?php } ?>
</div>
<?php get_footer(); ?>
