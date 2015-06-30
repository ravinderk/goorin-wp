<?php
/**
 * The template for displaying all single posts.
 *
 * @package goorin
 */

get_header(); ?>
<div class="experience-page experience-detail-page">
    <section class="breadcrumbs">
        <div class="container">
            <ul>
                <li class="home">
                    <a title="Go to Home Page" href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
                    <span>/ </span>
                </li>
                <li>
                    <a href="#">Features </a>
                    <span>/ </span>
                </li>
                <li>
                    <a href="">Styling Tips</a>
                    <span>/ </span>
                </li>
                <li>
                    <strong>The Kentucky Derby</strong>
                </li>
            </ul>
        </div>
    </section>
    <!--breadcrumbs-->
    <section class="experience-hero-block">
        <div class="container">
	        <div class="experience-hero-detail">
	                <div class="item">
	                    <figure>
		                    <a href="<?php the_permalink() ?>"><img src="<?php bloginfo('template_url'); ?>/images/detail-hero-image.jpg"></a>
	                    </figure>
	                    <article>
	                        <h6><a href="<?php the_permalink() ?>">Styling Tips</a></h6>
	                        <h1><a href="<?php the_permalink() ?>">The Kentucky Derby</a></h1>
	                    </article>
	                </div>
            </div>    
        </div>
    </section>
    <section class="experience-detail-content">
        <div class="container">
            <div class="experience-content-main">
                <div class="exp-top-heading">
                    <p>The “most exciting two minutes in sports” deserves an equally exciting celebration, don’t you think? Here’s how we’re gearing up for the big day.</p>
                    <div class="exp-posted">08 / 02 / 2015 <em>by</em> kendra collins</div>
                </div>
                <div class="exp-content">
                    <?php while ( have_posts() ) : the_post(); ?>

                        <?php get_template_part( 'content', 'single' ); ?>

                        <?php //the_post_navigation(); ?>

                        <?php /*
                            // If comments are open or we have at least one comment, load up the comment template
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;
                        */?>

                    <?php endwhile; // end of the loop. ?>

                </div>
            </div>
        </div>
    </section>
    <section class="experience-detail-related">
        <div class="container">
            <h1>You might <span>also</span> like</h1>
            <div class="experience-preview-main">
                <div class="experience-image-content">
                    <figure class="experience-preview-image">
                        <img src="http://redesign.goorin.com/wp-content/uploads/2015/04/f1.png">
                    </figure>
                    <article>
                        <h4>Fashion News / Goorin Stories</h4>
                        <div class="heading-content"><p>Fashion Week in London Part 1</p></div>
                    
                    </article>
                </div>
                <!--experience-image-content-->
                <div class="experience-preview-content">
                    <div class="experience-related-feature">
                        <div class="experience-feature-content">
                            <div class="experience-feature-box">
                                <figure>
                                    <a href="http://redesign.goorin.com/mens/"><img src="http://redesign.goorin.com/wp-content/uploads/2015/04/f2.png"></a>
                                </figure>
                                <article>
                                    <h6><a href="http://redesign.goorin.com/mens/">Shops</a></h6>
                                    <h4>Savannah Grand Opening Party</h4>
                                </article>
                            </div>
                            <div class="experience-feature-box">
                                <figure>
                                    <a href="http://redesign.goorin.com/mens/"><img src="http://redesign.goorin.com/wp-content/uploads/2015/04/f2.png"></a>
                                </figure>
                                <article>
                                    <h6><a href="http://redesign.goorin.com/mens/">Shops</a></h6>
                                    <h4>Savannah Grand Opening Party</h4>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
                <!--experience-preview-content-->
            </div>
            <!--experience-preview-main-->
        </div>
    </section>
    <!--experience-detail-related-->
</div>
<?php get_footer(); ?>
