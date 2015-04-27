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

<?//php get_sidebar(); ?>
<?php get_footer(); ?>
