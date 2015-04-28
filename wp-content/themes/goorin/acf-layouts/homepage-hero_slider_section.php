<section class="banner">
    <div class="banner-container">
        <div class="banner-carousel">
            <?php foreach ( $field['slides'] as $hero_section_slide ) { ?>
				<?php if ( isset( $hero_section_slide['background_image'] ) ) { ?>
					<div class="item">
		                <div class="banner-item item-1" style='background-image:url("<?php echo $hero_section_slide['background_image']['url']; ?>");'>
		                	<?php if ( $hero_section_slide['content'] ) { ?>
								<article>
									<?php echo $hero_section_slide['content']; ?>
								</article>
							<?php } ?>
		                </div>
		            </div>
		        <?php } ?>    
			<?php } ?>
        </div>
    </div>    
</section>
