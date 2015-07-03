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
<div class="experience-page experience-landing">
    <!--section class="breadcrumbs">
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
    </section-->
    <!--breadcrumbs-->
    <section class="experience-hero-block">
        <div class="container">
	        <?php $query = new WP_Query( 'tag=featured' ); ?>
            <div class="experience-hero-slider">
	            <?php while( $query->have_posts() ) { ?>
		            <?php $query->the_post(); ?>
	                <div class="item">
	                    <figure>
		                    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
	                    </figure>
	                    <article>
	                        <h6><?php the_category( ', ' ) ?></h6>
	                        <h1><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h1>
	                    </article>
	                </div>
	            <?php } ?>
	            <?php $query->reset_postdata() ?>
            </div>    
        </div>
    </section>
    <section class="experience-cat-block">
        <div class="container">
            <div class="experience-cat-list">
                <a href="#" class="experience-cat-toggle"><span>All Features</span></a>
                <ul class="experience-list-toggle">
                    <li class="active"><a href="<?php echo get_site_url( '', 'experience/' ); ?>">All</a></li>
	                <?php foreach( get_categories() as $category ) { ?>
	                    <li><a href="<?php echo get_category_link( $category ) ?>"><?php echo $category->name ?></a></li>
	                <?php } ?>
                </ul>
            </div>
        </div>
    </section>
    <section class="experience-blog-block">
	    <div class="container">
		    <div class="experience-blog-main">
			    <div class="experience-blog-row">
				    <?php if ( have_posts() ) { ?>
					    <?php $featured_side_post = 0; $index = 0;// use for matching the design as we have a different design after 6 post?>
					    <?php while( have_posts() ) { the_post(); ?>
						    <?php $featured_post_location = explode( ',', get_field('feature_post_location', 'option') ); ?>
						    <?php if ( in_array( $index, $featured_post_location ) && $featured_side_post == 0 ) { $featured_side_post = 2;  ?>
							    <div class="blog-one-row">
								    <div class="blog-image-content">
									    <figure class="spring-preview-image">
										    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a>
									    </figure>
									    <article>
										    <h4><?php the_category( ', ' ) ?></h4>
										    <div class="heading-content"><p><a href="<?php the_permalink() ?>"><?php the_title() ?></a></p></div>
									    </article>
								    </div>
								    <div class="blog-preview-content">
							<?php } else if ( $featured_side_post == 1 ) { $featured_side_post--; ?>
									    <div class="experience-blog-list">
										    <figure>
											    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'post_custom_size' ) ?></a>
										    </figure>
										    <article>
											    <h6><?php the_category( ', ' ) ?></h6>
											    <h4><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
										    </article>
									    </div>
							<?php } else { ?>
							    <?php if ( $featured_side_post != 0 ) $featured_side_post--; ?>
							    <div class="experience-blog-list">
								    <figure>
									    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'post_custom_size' ) ?></a>
								    </figure>
								    <article>
									    <h6><?php the_category( ', ' ) ?></h6>
									    <h4><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
								    </article>
							    </div>
							<?php } ?>
					    <?php $index ++; } ?>
					    <?php if ( $featured_side_post != 0 ) { ?>
							    </div>
						    </div>
						<?php } ?>
				    <?php } ?>
				</div>
			</div>
		</div>
		<div class="grBg"></div>
    </section>
</div>
<?//php get_sidebar(); ?>
<?php get_footer(); ?>
