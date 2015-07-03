<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package goorin
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
					<a href="<?php echo get_site_url( '', 'experience/' ); ?>">Features</a>
					<span>/ </span>
				</li>
				<li>
					<strong><?php echo $GLOBALS['wp_the_query']->queried_object->name ?></strong>
				</li>
			</ul>
		</div>
	</section>
	<section class="experience-cat-block">
		<hgroup>
			<h1 id="category-id" data-category_id="<?php echo $GLOBALS['wp_the_query']->queried_object->cat_ID ?>"><?php echo $GLOBALS['wp_the_query']->queried_object->name ?></h1>
		</hgroup>
		<div class="container">
			<div class="experience-cat-list">
				<a href="#" class="experience-cat-toggle"><span>All Features</span></a>
				<ul class="experience-list-toggle">
					<li><a href="<?php echo get_site_url( '', 'experience/' ); ?>">All</a></li>
					<?php foreach( get_categories() as $category ) { ?>
						<li class="<?php if ( $category->slug == $GLOBALS['wp_the_query']->queried_object->slug ) { ?>active<?php } ?>"><a href="<?php echo get_category_link( $category ) ?>"><?php echo $category->name ?></a></li>
					<?php } ?>
				</ul>
			</div>
		</div>
	</section>
	<section class="categories-blog-block">
		<div class="container">
			<div class="categories-blog-main">
				<div class="categories-blog-row">
					<?php if ( have_posts() ) { ?>
						<?php while ( have_posts() ) { the_post(); ?>
							<div class="categories-blog-list">
								<figure>
									<a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'post_custom_size' ) ?></a>
								</figure>
								<article>
									<h6><?php the_category( ', ' ) ?></h6>
									<h4><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
									<p><?php the_excerpt() ?></p>
								</article>
							</div>

						<?php } ?>
					<?php } else { ?>
						<div class="no-categories-main">
							<div class="no-categories">
								<h2>
									No results found for <?php echo $GLOBALS['wp_the_query']->queried_object->name; ?>
									<a href="#" class="btn btnsearch">Search</a>
								</h2>	
							</div>
							<div class="no-categories-search">	
								<?php get_template_part( 'content', 'none' ); ?>
							</div>
						</div>	

					<?php } ?>
				</div>
			</div>
		</div><!-- #primary -->
	</section>
	

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
