<section class="banner">
    <div class="banner-container">
        <div class="banner-carousel">
            <?php foreach ( $field['slides'] as $hero_section_slide ) { ?>
				<?php if ( isset( $hero_section_slide['background_image'] ) ) { ?>
					<div class="item">
		                <div class="banner-item item-1" style='background-image:url("<?php echo $hero_section_slide['background_image']['url']; ?>");'>
							<article>
								<div class="banner-content"><?php echo $hero_section_slide['pre-heading_text']; ?></div>
								<h2><?php echo $hero_section_slide['heading']; ?></h2>
								<?php if ( isset( $hero_section_slide['cta_text'] ) ) { ?>
									<div class="banner-btn">	
										<a href="<?php echo $hero_section_slide['cta_url']; ?>" class="btn">
											<?php echo $hero_section_slide['cta_text']; ?>
										</a>
									</div>
								<?php } ?>
							</article>
		                </div>
		            </div>
		        <?php } ?>    
			<?php } ?>
        </div>
    </div>    
</section>
