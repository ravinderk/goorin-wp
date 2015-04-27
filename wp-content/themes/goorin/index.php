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
        </div>    
    </section>
    <!--home-content-block-->
<?//php get_sidebar(); ?>
<?php get_footer(); ?>
