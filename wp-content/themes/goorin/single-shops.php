<?php
/**
 * The template for displaying all Shop single posts.
 *
 * @package goorin
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
	        <figure>
		        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/shop-banner-image.jpg"></a>
	        </figure>
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
