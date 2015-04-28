<section class="home-content-block top-content-block">
	<div class="container">
		<div class="top-content-main">
			<div class="block">
				<?php
				$block_counter = 1;
				for (
					$anatta_counter = 0;
					$anatta_counter < max( count( $field['left_column_entry'] ), count( $field['right_column_entry'] ) );
					$anatta_counter++
				) {
				?>
					<?php if ( isset( $field['left_column_entry'][ $anatta_counter ] ) ) { ?>
						<div class="post-box is_left block-<?php echo $block_counter; ?>">
							<?php if ( isset( $field['left_column_entry'][ $anatta_counter ]['image'] ) ) { ?>
								<figure>
									<img src="<?php echo $field['left_column_entry'][ $anatta_counter ]['image']['url']; ?>" />
								</figure>	
							<?php } ?>
							<article>
								<?php if ( $field['left_column_entry'][ $anatta_counter ]['pre-heading_text'] ) { ?>
									<h6><?php echo $field['left_column_entry'][ $anatta_counter ]['pre-heading_text']; ?></h6>
								<?php } ?>
								<?php if ( $field['left_column_entry'][ $anatta_counter ]['heading'] ) { ?>
									<h4><?php echo $field['left_column_entry'][ $anatta_counter ]['heading']; ?></h4>
								<?php } ?>
								<?php if ( $field['left_column_entry'][ $anatta_counter ]['post-heading_text'] ) { ?>
									<h6><?php echo $field['left_column_entry'][ $anatta_counter ]['post-heading_text']; ?></h6>
								<?php } ?>
								<?php if ( $field['left_column_entry'][ $anatta_counter ]['content'] ) { ?>
									<div class="post-box-content"><?php echo $field['left_column_entry'][ $anatta_counter ]['content']; ?></div>
								<?php } ?>
							</article>
						</div>
						
						<?php
						if ( $block_counter == 3 ) {
							$block_counter = 1;
						} else {
							$block_counter++;
						}
						?>

					<?php } ?>

					<?php if ( isset( $field['right_column_entry'][ $anatta_counter ] ) ) { ?>
						<div class="post-box is_right block-<?php echo $block_counter; ?>">
							<?php if ( isset( $field['right_column_entry'][ $anatta_counter ]['image'] ) ) { ?>
								<figure>
									<img src="<?php echo $field['right_column_entry'][ $anatta_counter ]['image']['url']; ?>" />
								</figure>
							<?php } ?>
							<article>
								<?php if ( $field['right_column_entry'][ $anatta_counter ]['pre-heading_text'] ) { ?>
									<h6><?php echo $field['right_column_entry'][ $anatta_counter ]['pre-heading_text']; ?></h6>
								<?php } ?>
								<?php if ( $field['right_column_entry'][ $anatta_counter ]['heading'] ) { ?>
									<h4><?php echo $field['right_column_entry'][ $anatta_counter ]['heading']; ?></h4>
								<?php } ?>
								<?php if ( $field['right_column_entry'][ $anatta_counter ]['post-heading_text'] ) { ?>
									<h6><?php echo $field['right_column_entry'][ $anatta_counter ]['post-heading_text']; ?></h6>
								<?php } ?>
								<?php if ( $field['right_column_entry'][ $anatta_counter ]['content'] ) { ?>
									<div class="post-box-content"><?php echo $field['right_column_entry'][ $anatta_counter ]['content']; ?></div>
								<?php } ?>
							</article>
						</div>

						<?php
						if ( $block_counter == 3 ) {
							$block_counter = 1;
						} else {
							$block_counter++;
						}
						?>
			
					<?php } ?>

				<?php } ?>
			</div>
		</div>		
	</div>
</section>		
