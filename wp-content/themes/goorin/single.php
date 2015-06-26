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
</div>
<?php get_footer(); ?>
