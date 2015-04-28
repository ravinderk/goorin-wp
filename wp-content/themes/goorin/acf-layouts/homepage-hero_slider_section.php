<section class="banner">
    <div class="banner-container">
        <div class="banner-carousel">
            <?php foreach ( $field['slides'] as $hero_section_slide ) { ?>
				<div class="item">
	                <div class="banner-item item-1">
	                	<?php if ( $hero_section_slide['content'] ) { ?>
							<article>
								<?php echo $hero_section_slide['content']; ?>
							</article>
						<?php } ?>
	                </div>
	            </div>
				<?php if ( isset( $hero_section_slide['background_image'] ) ) { ?>
					<img src="<?php $hero_section_slide['background_image']['url']; ?>" />
				<?php } ?>
			<?php } ?>
        </div>
    </div>    
</section>
