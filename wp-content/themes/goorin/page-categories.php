<?php 
/*
Template Name: categories
*/

get_header(); ?>
<div class="experience-page categories-page">
	<section class="breadcrumbs">
        <div class="container">
            <ul>
                <li class="home">
                    <a title="Go to Home Page" href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
                    <span>/ </span>
                </li>
                 <li class="home">
                    <a href="#">Features</a>
                    <span>/ </span>
                </li>
                <li>
                    <strong>Style</strong>
                </li>
            </ul>
        </div>
    </section>
    <!--breadcrumbs-->
    <section class="experience-cat-block">
        <hgroup>
        	<h1>Styling Tips</h1>
        </hgroup>
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
    <section class="categories-blog-block">
        <div class="container">
            <div class="categories-blog-main">
                <div class="categories-blog-row">
                    <div class="categories-blog-list">
                        <figure>
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/feture-shop-img.jpg"></a>
                        </figure>
                        <article>
                            <h6><a href="#">Shops</a></h6>
                            <h4><a href="#">Williamsburg Opening</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.</p>
                        </article>
                    </div>
                    <!--categories-blog-list-->
                    <div class="categories-blog-list">
                        <figure>
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/feture-style-img.jpg"></a>
                        </figure>
                        <article>
                            <h6><a href="#">Fashion News</a></h6>
                            <h4><a href="#">SXSW + Coachella + You</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.</p>
                        </article>
                    </div>
                    <!--categories-blog-list-->
                    <div class="categories-blog-list">
                        <figure>
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/feture-shop-img.jpg"></a>
                        </figure>
                        <article>
                            <h6><a href="#">from your hatshop</a></h6>
                            <h4><a href="#">Savannah Grand Opening Bash</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.</p>
                        </article>
                    </div>
                    <!--categories-blog-list-->
                    <div class="categories-blog-list">
                        <figure>
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/feture-shop-img.jpg"></a>
                        </figure>
                        <article>
                            <h6><a href="#">Shops</a></h6>
                            <h4><a href="#">Williamsburg Opening</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.</p>
                        </article>
                    </div>
                    <!--categories-blog-list-->
                    <div class="categories-blog-list">
                        <figure>
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/feture-style-img.jpg"></a>
                        </figure>
                        <article>
                            <h6><a href="#">Fashion News</a></h6>
                            <h4><a href="#">SXSW + Coachella + You</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.</p>
                        </article>
                    </div>
                    <!--categories-blog-list-->

                </div>
                <!--categories-blog-row-->
            </div>
        </div>
    </section>
</div>


<?php get_footer(); ?>
