<?php
/**
 * The template for displaying all single posts.
 *
 * @package goorin
 */

get_header(); ?>
<div class="experience-page experience-detail-page">
	<?php while ( have_posts() ) : the_post(); ?>
		<section class="breadcrumbs">
			<div class="container">
				<ul>
					<li class="home">
						<a title="Go to Home Page" href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
						<span>/ </span>
					</li>
					<li>
						<a href="#">Features </a> <span>/ </span>
					</li>
					<li>
						<?php $_category = get_the_category() ?>
						<a href="<?php echo get_category_link( $_category[ 0 ] ) ?>"><?php echo $_category[ 0 ]->name ?></a>
						<span>/ </span>
					</li>
					<li>
						<strong><?php the_title() ?></strong>
					</li>
				</ul>
			</div>
			<div class="social-links">
				<ul>
					<li class="twitter"><a target="_blank" href="https://twitter.com/intent/tweet?url=<?php echo rawurlencode( get_permalink() ); ?>&text=<?php echo rawurlencode( get_the_title() ); ?>&via=mitm">Twitter</a></li>
					<li class="facebook"><a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php echo rawurlencode( get_permalink() ) ; ?>">Facebook</a></li>
					<li class="instagram"><a target="_blank" href="http://pinterest.com/pin/create/button/?url=<?php echo rawurlencode( get_permalink() ); ?>&media=<?php echo rawurlencode( wp_get_attachment_url( get_post_thumbnail_id() ) ); ?>&description=<?php echo rawurlencode( get_the_title() ); ?>">Instagram</a></li>
					<li class="pinterest"><a target="_blank" href="https://www.pinterest.com/pin/create/button/?url=<?php echo rawurlencode( get_permalink() ); ?>&media=<?php echo rawurlencode( wp_get_attachment_url( get_post_thumbnail_id() ) ); ?>&description=<?php echo rawurlencode( get_the_title() ); ?>">Pinterest</a></li>
					<li class="tumbler"><a target="_blank" href="http://www.tumblr.com/share?v=3&u=<?php echo rawurlencode( get_permalink() ); ?>&t=<?php echo rawurlencode( get_the_title() ); ?>">Tumbler</a></li>
				</ul>
			</div>
		</section>
		<!--breadcrumbs-->
		<section class="experience-hero-block">
			<div class="container">
				<div class="experience-hero-detail">
					<div class="item">
						<figure>
							<a href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a>
						</figure>
						<article>
							<h6><?php the_category( ', ' ) ?></h6>

							<h1><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h1>
						</article>
					</div>
				</div>
			</div>
		</section>
		<section class="experience-detail-content">
			<div class="container">
				<div class="experience-content-main">
					<div class="exp-top-heading">
						<p><?php the_excerpt() ?></p>

						<div class="exp-posted"><?php goorin_posted_on(); ?></div>
					</div>
					<div class="exp-content">
						<?php get_template_part( 'content', 'single' ); ?>
					</div>
				</div>
			</div>
		</section>
		<section class="experience-detail-related">
			<div class="container">
				<?php if ( class_exists( 'AuthorRecommendedPosts' ) ) { ?>
					<?php
					$author_recommended_posts = new AuthorRecommendedPosts();
					$namespace = $author_recommended_posts->namespace;
					$recommended_ids = get_post_meta( $post->ID, $namespace, true );
					?>
					<h1><?php echo $author_recommended_posts->get_option( "{$namespace}_title" ); ?></h1>
					<div class="experience-preview-main">
						<?php foreach ( $recommended_ids as $key => $id ) { ?>
							<?php if ( $key == 0 ) { ?>
								<div class="experience-image-content">
									<figure class="experience-preview-image">
										<a href="<?php echo get_the_permalink( $id ) ?>"><?php echo get_the_post_thumbnail( $id ) ?></a>
									</figure>
									<article>
										<h4><?php the_category( ', ', '', $id ) ?></h4>

										<div class="heading-content"><p>
												<a href="<?php echo get_the_permalink( $id ) ?>"><?php echo get_the_title( $id ) ?></a>
											</p></div>
									</article>
								</div>
							<?php } else { ?>
								<!--experience-image-content-->
								<div class="experience-preview-content">
									<div class="experience-related-feature">
										<div class="experience-feature-content">
											<div class="experience-feature-box">
												<figure>
													<a href="<?php echo get_the_permalink( $id ) ?>"><?php echo get_the_post_thumbnail( $id, 'post_custom_size' ) ?></a>
												</figure>
												<article>
													<h6><?php the_category( ', ', '', $id ) ?></h6>
													<h4>
														<a href="<?php echo get_the_permalink( $id ) ?>"><?php echo get_the_title( $id ) ?></a>
													</h4>
												</article>
											</div>
										</div>
									</div>
								</div>
								<!--experience-preview-content-->
							<?php } ?>
						<?php } ?>
					</div>
					<!--experience-preview-main-->
				<?php } ?>
			</div>
		</section>
		<!--experience-detail-related-->
	<?php endwhile; // end of the loop. ?>
</div>
<?php get_footer(); ?>
