<?php
/**
 * The template for displaying all Shop single posts.
 *
 * @package goorin
 */

get_header();
global $post;?>
<div class="shoppage shopdetail">
	<section class="breadcrumbs">
		<div class="container">
			<ul>
				<li class="home">
					<a title="Go to Home Page" href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
					<span>/ </span>
				</li>
				<li>
					<a href="#">Shops</a>
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
	        <?php $slider_images = get_field('slider_images'); ?>
        	<div class="shop-hero-slider <?php if( $slider_images ) echo 'active'; ?>">
        		<?php if( $slider_images ): ?>
			        <!--item loop-->
			        <?php foreach( $slider_images as $image ):  ?>
				        <div class="item">
					        <figure>
						        <a href="<?php the_permalink() ?>"><img src="<?php echo $image['image']['url']; ?>" alt="<?php echo $image['image']['alt']; ?>"/></a>
					        </figure>
				        </div>
			        <?php endforeach; ?>

		        <?php else: ?>
			        <div class="item">
				        <figure>
					        <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
				        </figure>
			        </div>
		        <?php endif; ?>
		        <article>
			        <h6><?php echo get_field('city'); ?></h6>
			        <h1><a href="<?php the_permalink() ?>"><?php echo get_the_title(); ?></a></h1>
		        </article>
            </div>
        </div>
    </section>
	<section class="shop-info-block">
		<div class="container">
			<!--copy only "shop-content-main" div if you want to add this section in slider loop-->
			<div class="shop-content-main">
				<article class="shop-dec">
					<?php echo do_shortcode( $post->post_content ); ?>
				</article>	
				<div class="shop-address-detail">
					<article class="col col-1">
						<h6>Address</h6>
						<p><?php goorin_formatted_shop_address(); ?></p>
					</article>
					<article class="col col-2">
						<h6>Hours <span>of</span> Operation</h6>
						<p><?php echo get_field('hours_of_operation');?></p>
					</article>
					<article class="col col-3">
						<h6>Phone</h6>
						<p><?php echo get_field('phone');?></p>
					</article>
				</div>
			</div>
			<!--shop-content-main-->
			<div class="shop-address-map">
				<?php if( ( $latitude = get_field( 'latitude', $post->ID ) ) && ( $longitude = get_field( 'longitude', $post->ID ) ) ): ?>
					<div class="acf-map">
						<div class="marker" data-lat="<?php echo $latitude; ?>" data-lng="<?php echo $longitude; ?>"></div>
					</div>
				<?php endif; ?>
			</div>
			<!--shop-address-map-->
		</div>
	</section>
    <!--shop-hero-block-->
    <section class="shop-photos-block">
    	<div class="container">
    		<h1>#goorinwilliamsburg</h1>
    		<div class="shop-photos-area">
    			<ul>
    				<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/shop-photos.jpg"></a></li>
    				<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/shop-photos.jpg"></a></li>
    				<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/shop-photos.jpg"></a></li>
    				<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/shop-photos.jpg"></a></li>
    				<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/shop-photos.jpg"></a></li>
    				<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/shop-photos.jpg"></a></li>
    				<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/shop-photos.jpg"></a></li>
    				<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/shop-photos.jpg"></a></li>
    				<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/shop-photos.jpg"></a></li>
    				<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/shop-photos.jpg"></a></li>
    				<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/shop-photos.jpg"></a></li>
    				<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/shop-photos.jpg"></a></li>
    			</ul>
    		</div>
    	</div>
    </section>
    <!--shop-photos-block-->
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
	</section><!-- #primary -->
</div>

<?//php get_sidebar(); ?>
<?php get_footer(); ?>
