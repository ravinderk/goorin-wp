<section class="cat-hero-block">
	<div class="container">
		<figure>
			<img src="<?php echo $field['image']['url']; ?>" />
		</figure>
		<article>
			<hgroup class="cat-sub-head">
				<?php echo $field['small_heading']; ?>
			</hgroup>
			<h1><?php echo $field['heading']; ?></h1>
			<div class="cat-hero-content">
				<?php echo $field['content']; ?>
			</div>
		</article>
	</div>
</section>