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
                <ul>
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
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

        <?php if ( have_posts() ) : ?>

            <?php /* Start the Loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>

                <?php
                    /* Include the Post-Format-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                     */
                    get_template_part( 'content', get_post_format() );
                ?>

            <?php endwhile; ?>

            <?php the_posts_navigation(); ?>

        <?php else : ?>

            <?php get_template_part( 'content', 'none' ); ?>

        <?php endif; ?>

        </main><!-- #main -->
    </div><!-- #primary -->
</div>
<?//php get_sidebar(); ?>
<?php get_footer(); ?>
