<section class="home-content-block spring-preview-block">
    <div class="container">
	    <?php if ( ! empty( $field['main_heading'] ) ) { ?>
		    <h1>
			    <?php echo $field['main_heading'] ?>
		    </h1>
	    <?php } ?>
        <div class="spring-preview-main">
        	<div class="spring-image-content">	
                <?php if ( isset( $field['main_image'] ) ) { ?>
    	    		<figure class="spring-preview-image">
    	                 <img src="<?php echo $field['main_image']['url']; ?>" />  
    	            </figure>
    	        <?php } ?>
                <article>
                    <?php if ( $field['heading'] ) { ?>
                        <h4><?php echo $field['heading']; ?></h4>
                    <?php } ?>  
                    <?php if ( $field['content'] ) { ?>
                        <div class="heading-content"><?php echo $field['content']; ?></div>
                    <?php } ?>     
                </article> 
             </div>      
	        <div class="spring-preview-content">
                <div class="spring-related-feature">
                	<div class="related-feature-content">
                		<?php foreach ( $field['related_features'] as $related_feature ) { ?>
							<div class="related-feature-box">
                                <?php if ( isset( $related_feature['image'] ) ) { ?>
	                                <figure>
	                                   <a href="<?php echo $related_feature['link']; ?>"><img src="<?php echo $related_feature['image']['url']; ?>" /></a>
	                                </figure>
                                <?php } ?>
                                <article>
                                    <?php if ( $related_feature['pre-heading_text'] ) { ?>
										<!--h6><?php //echo $related_feature['pre-heading_text']; ?></h6-->
									<?php } ?>
                                    <?php if ( $related_feature['heading'] ) { ?>
										<h4><a href="<?php echo $related_feature['link']; ?>"><?php echo $related_feature['heading']; ?></a></h4>
									<?php } ?>
                                    <?php if ( $related_feature['content'] ) { ?>
										<div class="box-content"><?php echo $related_feature['content']; ?></div>
									<?php } ?>
                                </article>
                            </div>
						<?php } ?>
                	</div>
                </div>
            </div> 
		</div>
	</div>
</section>		
