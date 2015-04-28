<section class="home-content-block">
    <div class="container">
		<?php foreach ( $field['left_column_entry'] as $showcase_entry ) { ?>
			<?php if ( isset( $showcase_entry['image'] ) ) { ?>
				<img src="<?php echo $showcase_entry['image']['url']; ?>" />
			<?php } ?>

			<?php if ( $showcase_entry['pre-heading_text'] ) { ?>
				<h3><?php echo $showcase_entry['pre-heading_text']; ?></h3>
			<?php } ?>

			<?php if ( $showcase_entry['heading'] ) { ?>
				<h3><?php echo $showcase_entry['heading']; ?></h3>
			<?php } ?>

			<?php if ( $showcase_entry['post-heading_text'] ) { ?>
				<h3><?php echo $showcase_entry['post-heading_text']; ?></h3>
			<?php } ?>

			<?php if ( $showcase_entry['content'] ) { ?>
				<div><?php echo $showcase_entry['content']; ?></div>
			<?php } ?>

		<?php } ?>

		<?php foreach ( $field['right_column_entry'] as $showcase_entry ) { ?>

			<?php if ( isset( $showcase_entry['image'] ) ) { ?>
				<img src="<?php echo $showcase_entry['image']['url']; ?>" />
			<?php } ?>

			<?php if ( $showcase_entry['pre-heading_text'] ) { ?>
				<h3><?php echo $showcase_entry['pre-heading_text']; ?></h3>
			<?php } ?>

			<?php if ( $showcase_entry['heading'] ) { ?>
				<h3><?php echo $showcase_entry['heading']; ?></h3>
			<?php } ?>

			<?php if ( $showcase_entry['post-heading_text'] ) { ?>
				<h3><?php echo $showcase_entry['post-heading_text']; ?></h3>
			<?php } ?>

			<?php if ( $showcase_entry['content'] ) { ?>
				<div><?php echo $showcase_entry['content']; ?></div>
			<?php } ?>

		<?php } ?>
	</div>
</section>		
