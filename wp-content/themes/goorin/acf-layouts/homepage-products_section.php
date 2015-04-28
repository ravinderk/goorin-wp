<section class="home-content-block">
    <div class="container">
		<?php foreach ( $field['featured_product'] as $featured_product ) { ?>

			<?php if ( isset( $featured_product['image'] ) ) { ?>
				<img src="<?php echo $featured_product['image']['url']; ?>" />
			<?php } ?>

			<?php if ( $featured_product['pre-heading_text'] ) { ?>
				<h3><?php echo $featured_product['pre-heading_text']; ?></h3>
			<?php } ?>

			<?php if ( $featured_product['heading'] ) { ?>
				<h3><?php echo $featured_product['heading']; ?></h3>
			<?php } ?>

			<?php if ( $featured_product['content'] ) { ?>
				<div><?php echo $featured_product['content']; ?></div>
			<?php } ?>

			<a href="<?php echo $featured_product['link']; ?>">Link</a>

		<?php } ?>

		<?php foreach ( $field['product'] as $product ) { ?>

			<?php if ( isset( $product['image'] ) ) { ?>
				<img src="<?php echo $product['image']['url']; ?>" />
			<?php } ?>

			<?php if ( $product['heading'] ) { ?>
				<h3><?php echo $product['heading']; ?></h3>
			<?php } ?>

			<?php if ( $product['post-heading_text'] ) { ?>
				<h3><?php echo $product['post-heading_text']; ?></h3>
			<?php } ?>

			<a href="<?php echo $product['link']; ?>">Link</a>

		<?php } ?>
	</div>
</section>		
