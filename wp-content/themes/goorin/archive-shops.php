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
					<strong>Shops</strong>
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
    				<div class="findshop-area">
					    <?php
					       echo do_shortcode('[SLPLUS]');
					    ?>
    				</div>
    			</div>
    			<div class="shop-content shoplisting">
    				<hgroup class="shop-top-content">
    					<h4>Our Neighborhood Hat Shops</h4>
    				</hgroup>
    				<div class="shoplist-area">
					    <?php goorin_shop_listing(); ?>
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
