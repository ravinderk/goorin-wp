<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package goorin
 */

get_header(); ?>
<?php $_category = get_the_category(); ?>
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
					<strong><?php echo isset( $_category[0] ) ? $_category[0]->name : ''; ?></strong>
				</li>
			</ul>
		</div>
	</section>
	<section class="experience-cat-block">
		<hgroup>
			<h1 id="category-id" data-category_id="<?php echo isset( $_category[0] ) ? $_category[0]->cat_ID : 0 ?>"><?php echo isset( $_category[0] ) ? $_category[0]->name : 0; ?></h1>
		</hgroup>
		<div class="container">
			<div class="experience-cat-list">
				<a href="#" class="experience-cat-toggle"><span>All Features</span></a>
				<ul class="experience-list-toggle">
					<li><a href="<?php echo get_site_url( '', 'experience/' ); ?>">All</a></li>
					<?php foreach( get_categories() as $category ) { ?>
						<li class="<?php if ( $category->cat_ID == ( isset( $_category[0] ) ? $_category[0]->cat_ID : 0 ) ) { ?>active<?php } ?>"><a href="<?php echo get_category_link( $category ) ?>"><?php echo $category->name ?></a></li>
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
							<?php $_category = get_the_category(); ?>
							<div class="categories-blog-list">
								<figure>
									<a href="<?php the_permalink() ?>"><?php the_post_thumbnail( 'post_custom_size' ) ?></a>
								</figure>
								<article>
									<h6><a href="<?php the_permalink() ?>"><?php echo $_category[0]->name ?></a></h6>
									<h4><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
									<p><?php the_excerpt() ?></p>
								</article>
							</div>

						<?php } ?>
						<div id="loader" class="loader"  style="display: none">Loading more post...</div>
					<?php } else { ?>
						<div class="no-categories-main">
							<div class="no-categories">
								<h2>
									No results found for <?php echo $_category[0]->name; ?> 
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
