<section class="banner">
    <div class="banner-container">
        <div class="banner-carousel">
            <?php foreach ( $field['slides'] as $hero_section_slide ) { ?>
				<?php if ( isset( $hero_section_slide['background_image'] ) ) { ?>
					<div class="item">
		                <div class="banner-item item-1" style='background-image:url("<?php echo $hero_section_slide['background_image']['url']; ?>");'>
		                	<?php if ( $hero_section_slide['content'] ) { ?>
								<article>
									<h6><?php echo $hero_section_slide['pre-heading_text']; ?></h6>
									<h2><?php echo $hero_section_slide['heading']; ?></h2>
									<div class="slider-content">
										<?php echo $hero_section_slide['content']; ?>
									</div>
									<?php if ( isset( $hero_section_slide['cta_text'] ) ) { ?>
										<a href="<?php echo $hero_section_slide['cta_url']; ?>">
											<?php echo $hero_section_slide['cta_text']; ?>
										</a>
									<?php } ?>
								</article>
							<?php } ?>
		                </div>
		            </div>
		        <?php } ?>    
			<?php } ?>
        </div>
    </div>    
</section>
