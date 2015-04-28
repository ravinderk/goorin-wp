<section class="home-content-block top-content-block">
    <div class="container">
    	<div class="top-content-block">
                <div class="block">
                	<?php foreach ( $field['left_column_entry'] as $showcase_entry ) { ?>
						<div class="post-box is_left block-1">
							<!--we need to cjhange this class like this in loop
								<div class="post-box is_right block-2">
								<div class="post-box is_left block-3">
							-->	
	                        <?php if ( isset( $showcase_entry['image'] ) ) { ?>
								<figure>
									<img src="<?php echo $showcase_entry['image']['url']; ?>" />
								</figure>	
							<?php } ?>
	                        <article>
	                            <?php if ( $showcase_entry['pre-heading_text'] ) { ?>
									<h6><?php echo $showcase_entry['pre-heading_text']; ?></h6>
								<?php } ?>
								<?php if ( $showcase_entry['heading'] ) { ?>
									<h4><?php echo $showcase_entry['heading']; ?></h4>
								<?php } ?>
	                            <?php if ( $showcase_entry['post-heading_text'] ) { ?>
									<h6><?php echo $showcase_entry['post-heading_text']; ?></h6>
								<?php } ?>
	                            <?php if ( $showcase_entry['content'] ) { ?>
									<div class="post-box-content"><?php echo $showcase_entry['content']; ?></div>
								<?php } ?>
	                        </article>
	                    </div>
                    <?php } ?>
				</div>
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
	</div>
</section>		
