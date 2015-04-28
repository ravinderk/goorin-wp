<section class="home-content-block hollyday-content-block">
    <div class="container">
    	<div class="hollyday-content-main">
			<hgroup>
                <h6>Just in time For  </h6>
                <h2>The Holiday</h2>
            </hgroup>
            <div class="hollyday-product-block">
            	<div class="hollyday-left-block">
            		<?php foreach ( $field['featured_product'] as $featured_product ) { ?>
	                    <div class="hollyday-box">
	                        <?php if ( isset( $featured_product['image'] ) ) { ?>
								<figure>
									<a href="<?php echo $featured_product['link']; ?>"><img src="<?php echo $featured_product['image']['url']; ?>" /></a>
								</figure>	
							<?php } ?>
	                        <article>
	                            <?php if ( $featured_product['pre-heading_text'] ) { ?>
									<h6><?php echo $featured_product['pre-heading_text']; ?></h6>
								<?php } ?>
	                            <?php if ( $featured_product['heading'] ) { ?>
									<h3><a href="<?php echo $featured_product['link']; ?>"><?php echo $featured_product['heading']; ?></a></h3>
								<?php } ?>
	                            <hr/>
	                            <?php if ( $featured_product['content'] ) { ?>
									<div class="hollyday-box-content"><?php echo $featured_product['content']; ?></div>
								<?php } ?>
	                        </article>
	                    </div>   
                    <?php } ?> 
                </div>
                <div class="hollyday-right-block">
                    <?php foreach ( $field['product'] as $product ) { ?>
	                    <div class="hollyday-box">
	                        <?php if ( isset( $product['image'] ) ) { ?>
								<figure>
									<a href="<?php echo $product['link']; ?>"><img src="<?php echo $product['image']['url']; ?>" /></a>
								</figure>
							<?php } ?>
	                        <article>
	                            <?php if ( $product['heading'] ) { ?>
									<h4><?php echo $product['heading']; ?></h4>
								<?php } ?>
	                            <?php if ( $product['post-heading_text'] ) { ?>
									<h6><?php echo $product['post-heading_text']; ?></h6>
								<?php } ?>
	                        </article>
	                    </div>
                    <?php } ?>
                </div>
			</div>	
		</div>	
	</div>
</section>		
