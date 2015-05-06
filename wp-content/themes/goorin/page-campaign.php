<?php 
/*
Template Name: Campaign Page
*/

get_header();?>
<div class="category-campaign">
	<section class="breadcrumbs">
		<div class="container">
			<ul>
				<li class="home">
					<a title="Go to Home Page" href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
					<span>/ </span>
				</li>
				<li>
					<a title="" href="#">Campaigns</a>
					<span>/ </span>
				</li>
				<li>
					<strong>Rooftop Brunch</strong>
				</li>
			</ul>
		</div>
	</section>
	<!--breadcrumbs-->
	<?php 
	foreach ( get_field( 'layout' ) as $field ) {
		include locate_template( 'acf-layouts/campaign-' . $field[ 'acf_fc_layout' ] . '.php' );
	} ?>
	<section class="cat-bottom-block">
		<div class="container">
			<div class="cat-bottom-col">
				<div class="breadcrumbs">
					<ul>
						<li class="home">
							<a title="Go to Home Page" href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
							<span>/ </span>
						</li>
						<li>
							<a title="" href="#">Campaigns</a>
							<span>/ </span>
						</li>
						<li>
							<strong>Rooftop Brunch</strong>
						</li>
					</ul>
				</div>
				<a class="backtotop" href="#">Back to Top</a>
			</div>	
		</div>
	</section>
	<!--cat-bottom-block-->
</div>
<?php  get_footer(); ?>
