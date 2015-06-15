<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package goorin
 */

get_header(); ?>
<div class="experience-page">
    <section class="breadcrumbs">
        <div class="container">
            <ul>
                <li class="home">
                    <a title="Go to Home Page" href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
                    <span>/ </span>
                </li>
                <li>
                    <strong>Features</strong>
                </li>
            </ul>
        </div>
    </section>
    <!--breadcrumbs-->
    <section class="experience-hero-block">
        <div class="container">
            <div class="experience-hero-slider">
                <div class="item">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/exp-main-img.jpg">
                    </figure>
                    <article>
                        <h6>Fashion News</h6>
                        <h1>Artist Profile: Danny Barber</h1>
                    </article>
                </div>
                <!--experience-hero-item-->
                <div class="item">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/cat-featured-img.jpg">
                    </figure>
                    <article>
                        <h6>Goorin History</h6>
                        <h1>The Legend of Ted Goorin</h1>
                    </article>
                </div>
                <!--experience-hero-item-->
            </div>    
        </div>
    </section>
    <section class="experience-cat-block">
        <div class="container">
            <div class="experience-cat-list">
                <a href="#" class="experience-cat-toggle"><span>All Features</span></a>
                <ul class="experience-list-toggle">
                    <li class="active"><a href="#">All</a></li>
                    <li><a href="#">Style</a></li>
                    <li><a href="#">Press</a></li>
                    <li><a href="#">From the Hatshop</a></li>
                    <li><a href="#">History</a></li>
                    <li><a href="#">Product news</a></li>        
                </ul>
            </div>
        </div>
    </section>
    <section class="experience-blog-block">
        <div class="container">
            <div class="experience-blog-main">
                <div class="experience-blog-row">
                    <div class="experience-blog-list">
                        <figure>
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/feture-shop-img.jpg"></a>
                        </figure>
                        <article>
                            <h6><a href="#">Shops</a></h6>
                            <h4><a href="#">Williamsburg Opening</a></h4>
                        </article>
                    </div>
                    <!--experience-blog-list-->
                    <div class="experience-blog-list">
                        <figure>
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/feture-style-img.jpg"></a>
                        </figure>
                        <article>
                            <h6><a href="#">Fashion News</a></h6>
                            <h4><a href="#">SXSW + Coachella + You</a></h4>
                        </article>
                    </div>
                    <!--experience-blog-list-->
                    <div class="experience-blog-list">
                        <figure>
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/feture-shop-img.jpg"></a>
                        </figure>
                        <article>
                            <h6><a href="#">from your hatshop</a></h6>
                            <h4><a href="#">Savannah Grand Opening Bash</a></h4>
                        </article>
                    </div>
                    <!--experience-blog-list-->
                    <div class="experience-blog-list">
                        <figure>
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/feture-shop-img.jpg"></a>
                        </figure>
                        <article>
                            <h6><a href="#">Shops</a></h6>
                            <h4><a href="#">Williamsburg Opening</a></h4>
                        </article>
                    </div>
                    <!--experience-blog-list-->
                    <div class="experience-blog-list">
                        <figure>
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/feture-style-img.jpg"></a>
                        </figure>
                        <article>
                            <h6><a href="#">Fashion News</a></h6>
                            <h4><a href="#">SXSW + Coachella + You</a></h4>
                        </article>
                    </div>
                    <!--experience-blog-list-->
                    <div class="experience-blog-list">
                        <figure>
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/feture-shop-img.jpg"></a>
                        </figure>
                        <article>
                            <h6><a href="#">from your hatshop</a></h6>
                            <h4><a href="#">Savannah Grand Opening Bash</a></h4>
                        </article>
                    </div>
                    <!--experience-blog-list-->
                    <div class="blog-one-row">
                        <div class="blog-image-content">
                            <figure class="spring-preview-image">
                                <img src="http://goorin.dev/wp-content/uploads/2015/05/home-feture-img.jpg">
                            </figure>
                            <article>
                                <h4>Fashion News</h4>
                                <div class="heading-content"><p>Fashion Week in London Part 1</p></div>
                            </article>
                        </div>
                        <div class="blog-preview-content">
                            <div class="experience-blog-list">
                                <figure>
                                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/feture-shop-img.jpg"></a>
                                </figure>
                                <article>
                                    <h6><a href="#">from your hatshop</a></h6>
                                    <h4><a href="#">Savannah Grand Opening Bash</a></h4>
                                </article>
                            </div>
                            <!--experience-blog-list-->
                            <div class="experience-blog-list">
                                <figure>
                                    <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/feture-shop-img.jpg"></a>
                                </figure>
                                <article>
                                    <h6><a href="#">from your hatshop</a></h6>
                                    <h4><a href="#">Savannah Grand Opening Bash</a></h4>
                                </article>
                            </div>
                            <!--experience-blog-list-->
                        </div>
                    </div>
                    <!--blog-one-row-->
                    <!--experience-blog-list-->
                    <div class="experience-blog-list">
                        <figure>
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/feture-shop-img.jpg"></a>
                        </figure>
                        <article>
                            <h6><a href="#">Shops</a></h6>
                            <h4><a href="#">Williamsburg Opening</a></h4>
                        </article>
                    </div>
                    <!--experience-blog-list-->
                    <div class="experience-blog-list">
                        <figure>
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/feture-style-img.jpg"></a>
                        </figure>
                        <article>
                            <h6><a href="#">Fashion News</a></h6>
                            <h4><a href="#">SXSW + Coachella + You</a></h4>
                        </article>
                    </div>
                    <!--experience-blog-list-->
                    <div class="experience-blog-list">
                        <figure>
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/feture-shop-img.jpg"></a>
                        </figure>
                        <article>
                            <h6><a href="#">from your hatshop</a></h6>
                            <h4><a href="#">Savannah Grand Opening Bash</a></h4>
                        </article>
                    </div>
                    <!--experience-blog-list-->
                    <!--experience-blog-list-->
                    <div class="experience-blog-list">
                        <figure>
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/feture-shop-img.jpg"></a>
                        </figure>
                        <article>
                            <h6><a href="#">Shops</a></h6>
                            <h4><a href="#">Williamsburg Opening</a></h4>
                        </article>
                    </div>
                    <!--experience-blog-list-->
                    <div class="experience-blog-list">
                        <figure>
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/feture-style-img.jpg"></a>
                        </figure>
                        <article>
                            <h6><a href="#">Fashion News</a></h6>
                            <h4><a href="#">SXSW + Coachella + You</a></h4>
                        </article>
                    </div>
                    <!--experience-blog-list-->
                    <div class="experience-blog-list">
                        <figure>
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/feture-shop-img.jpg"></a>
                        </figure>
                        <article>
                            <h6><a href="#">from your hatshop</a></h6>
                            <h4><a href="#">Savannah Grand Opening Bash</a></h4>
                        </article>
                    </div>
                    <!--experience-blog-list-->
                </div>
                <!--experience-blog-row-->
            </div>
        </div>
    </section>
</div>
<?//php get_sidebar(); ?>
<?php get_footer(); ?>
