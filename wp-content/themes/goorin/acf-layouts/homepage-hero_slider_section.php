<?php foreach ( $field['slides'] as $hero_section_slide ) { ?>

	<?php if ( $hero_section_slide['content'] ) { ?>
		<div><?php echo $hero_section_slide['content']; ?></div>
	<?php } ?>

	<?php if ( isset( $hero_section_slide['background_image'] ) ) { ?>
		<img src="<?php $hero_section_slide['background_image']['url']; ?>" />
	<?php } ?>

<?php } ?>