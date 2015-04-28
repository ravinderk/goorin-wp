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
	<section class="banner">
        <div class="banner-container">
            <div class="banner-carousel">
                <div class="item">
                    <div class="banner-item item-1">
                        <article>
                            <h6>Mr.&nbsp;&nbsp;Fitsallm’s Favorite</h6>
                            <h2>STYLING TIPS</h2>
                            <p><i>for</i> men <i>with</i> character</p>
                        </article>
                    </div>
                </div>
                <div class="item">
                    <div class="banner-item item-2">
                        <article>
                            <h6>Grenadier</h6>
                            <h2>ROADTRIP</h2>
                            <p>Collection <i>for</i> Women</p>
                        </article>    
                    </div>
                </div>
            </div>
        </div>    
    </section>
    <!--banner-->
    <section class="home-content-block">
        <div class="container">
            <div class="top-content-block">
                <div class="block">
                    <div class="post-box is_left block-1">
                        <figure>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/postimg-1.jpg" alt="">
                        </figure>
                        <article>
                            <h6>STYLE UP with</h6>
                            <h4>LTD. BOX SETS</h4>
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in.</p>
                        </article>
                    </div>
                    <div class="post-box is_right block-2">
                        <figure>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/postimg-2.jpg" alt="">
                        </figure>
                        <article>
                            <h6>Winter</h6>
                            <h4>Mens Lookbook</h4>
                            <small>in <span>West Philly</span></small>
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.rum. </p>
                        </article>
                    </div>
                    <div class="post-box is_left block-3">
                        <figure>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/postimg-3.jpg" alt="">
                        </figure>
                        <article>
                            <h6>Grenadier</h6>
                            <h4>Commuters</h4>
                            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in.</p>
                        </article>
                    </div>
                </div>
            </div>
            <!--top-content-block-->
            <div class="hollyday-content-block">
                <hgroup class="hide-desktop">
                    <h6>Just in time For the </h6>
                    <h2>Holiday</h2>
                </hgroup>
                <hgroup class="hide-mobile">
                    <h6>Just in time</h6>
                    <h2>For the holidays</h2>
                </hgroup>
                <div class="hollyday-product-block">
                    <div class="hollyday-left-block">
                        <div class="hollyday-box">
                            <figure>
                               <img src="<?php echo get_template_directory_uri(); ?>/images/hat-big.png" alt="">
                            </figure>
                            <article>
                                <h6>New Fall Heritage</h6>
                                <h3>HARRY GRIM</h3>
                                <hr/>
                                <p>We're all about quality here at Goorin Bros. And the Slappy wool fedora proves it. The well-loved classic shape and bold style of this hat will enhance any look. </p>
                            </article>
                        </div>    
                    </div>
                    <div class="hollyday-right-block">
                        <div class="hollyday-box">
                            <figure>
                               <img src="<?php echo get_template_directory_uri(); ?>/images/hat-men.png" alt="">
                            </figure>
                            <article>
                                <h4>Mens</h4>
                                <h6>New Styles <span>for</span> Winter</h6>
                            </article>
                        </div>
                        <div class="hollyday-box">
                            <figure>
                               <img src="<?php echo get_template_directory_uri(); ?>/images/hat-women.png" alt="">
                            </figure>
                            <article>
                                <h4>Womens</h4>
                                <h6>New Styles <span>for</span> Winter</h6>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
            <!--hollyday-content-block-->
            <div class="spring-preview-block">
                <figure class="spring-preview-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/spring-preview-img.jpg" alt="">   
                </figure>
                <div class="spring-preview-content">
                    <hgroup>
                        <h2>Spring 2015 sneak Preview</h2>
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.</p>
                    </hgroup>
                    <div class="spring-related-feature">
                        <h5>RELATED Features</h5>
                        <div class="related-feature-content">
                            <div class="related-feature-box">
                                <figure>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/related-img1.jpg" alt="">
                                </figure>
                                <article>
                                    <h6>Ephemera</h6>
                                    <h4>BOSTON hat FACTORY TOUR</h4>
                                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex...</p>
                                </article>
                            </div>
                            <!--related-feature-box-->
                            <div class="related-feature-box">
                                <figure>
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/related-img2.jpg" alt="">
                                </figure>
                                <article>
                                    <h6>Ephemera</h6>
                                    <h4>BOSTON hat FACTORY TOUR</h4>
                                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex...</p>
                                </article>
                            </div>
                            <!--related-feature-box-->
                        </div>
                    </div>
                </div>
            </div>
            <!--spring-preview-block-->
        </div>    
    </section>
    <!--home-content-block-->
<?//php get_sidebar(); ?>
<?php get_footer(); ?>
