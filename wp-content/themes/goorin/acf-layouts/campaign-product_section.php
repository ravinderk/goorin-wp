<?php
	$heading = isset( $field['heading'] ) ? $field['heading'] : '' ;
	$category_id = isset( $field['category_id'] ) ? $field['category_id'] : 0 ;
	$limit = isset( $field['product_count'] ) ? $field['product_count'] : 12 ;
	$products = get_magento_products( $category_id, $limit );
?>
<?php if ( $category_id !== 0 ) { ?>
	<section class="cat-product-block">
		<div class="container">
			<hgroup><?php echo $heading; ?></hgroup>
			<div class="category-products">
				<?php echo $products ?>
			</div>	
		</div>
	</section>
<?php } ?>
