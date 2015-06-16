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
	        <?php $query = new WP_Query( 'tag=featured' ); ?>
            <div class="experience-hero-slider">
	            <?php while( $query->have_posts() ) { ?>
		            <?php $query->the_post(); ?>
	                <div class="item">
	                    <figure>
		                    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
	                    </figure>
	                    <article>
	                        <h6><a href="<?php the_permalink() ?>"><?php the_category() ?></a></h6>
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
                    <li class="active"><a href="#">All</a></li>
	                <?php foreach( get_categories( array( 'hide_empty' => 0 ) ) as $category ) { ?>
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
					    <?php $index = 1; // use for matching the design as we have a different design after 6 post?>
					    <?php while( have_posts() ) { the_post() ?>
						    <?php if ( $index == 7 ) { ?>
							    <div class="blog-one-row">
								    <div class="blog-image-content">
									    <figure class="spring-preview-image">
										    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a>
									    </figure>
									    <article>
										    <h4><a href="<?php the_permalink() ?>"><?php the_category() ?></a></h4>
										    <div class="heading-content"><p><a href="<?php the_permalink() ?>"><?php the_title() ?></a></p></div>
									    </article>
								    </div>
								    <div class="blog-preview-content">
							<?php } else if ( $index == 9 ) { ?>
									    <div class="experience-blog-list">
										    <figure>
											    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a>
										    </figure>
										    <article>
											    <h6><a href="<?php the_permalink() ?>"><?php the_category() ?></a></h6>
											    <h4><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
										    </article>
									    </div>
							        </div>
							    </div>
							<?php } else { ?>
							    <div class="experience-blog-list">
								    <figure>
									    <a href="<?php echo the_permalink() ?>"><?php the_post_thumbnail() ?></a>
								    </figure>
								    <article>
									    <h6><a href="<?php the_permalink() ?>"><?php the_category() ?></a></h6>
									    <h4><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
								    </article>
							    </div>
							<?php } ?>
					    <?php $index++; } ?>
					    <?php if ( $index > 7 && $index <= 9 ) { ?>
							    </div>
						    </div>
						<?php } ?>
				    <?php } ?>
				</div>
			</div>
		</div>
    </section>
	<div id="loader" style="display: none">Loading more post...</div>
</div>
<?//php get_sidebar(); ?>
<?php get_footer(); ?>
