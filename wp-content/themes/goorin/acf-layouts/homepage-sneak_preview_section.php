<section class="home-content-block">
    <div class="container">
		<?php if ( $field['heading'] ) { ?>
			<h3><?php echo $field['heading']; ?></h3>
		<?php } ?>

		<?php if ( $field['content'] ) { ?>
			<div><?php echo $field['content']; ?></div>
		<?php } ?>

		<?php if ( isset( $field['main_image'] ) ) { ?>
			<img src="<?php echo $field['main_image']['url']; ?>" />
		<?php } ?>

		<?php foreach ( $field['related_features'] as $related_feature ) { ?>

			<?php if ( isset( $related_feature['image'] ) ) { ?>
				<img src="<?php echo $related_feature['image']['url']; ?>" />
			<?php } ?>

			<?php if ( $related_feature['pre-heading_text'] ) { ?>
				<h3><?php echo $related_feature['pre-heading_text']; ?></h3>
			<?php } ?>

			<?php if ( $related_feature['heading'] ) { ?>
				<h3><?php echo $related_feature['heading']; ?></h3>
			<?php } ?>

			<?php if ( $related_feature['content'] ) { ?>
				<div><?php echo $related_feature['content']; ?></div>
			<?php } ?>

			<a href="<?php echo $related_feature['link']; ?>">Link</a>

		<?php } ?>
	</div>
</section>		
