<footer class="site-footer">
	<div class="container">
		<div class="footer-col-row">
			<?php
			get_template_part( 'inc/Footer_Walker' );
			wp_nav_menu( array(
							'theme_location' => 'footer',
							'walker'         => new Goorin_Footer_Walker(),
							'container'      => 'div',
							'menu_class'     => 'footer-col-right'
					)
			);
			?>
			<div class="footer-col-left">
				<article>
					<h3>Keep me posted.</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore. Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
				</article>
				<div class="subscribe-form">
					<form method="get" action="<?php echo magento_url(); ?>email-signup">
						<div class="form-field">
							<input type="text" placeholder="Enter your email address" name="email">
						</div>
						<div class="form-field">
							<input type="submit" class="submit-btn" value="Subscribe">
						</div>
					</form>
				</div>
				<p class="copyright hidden-mobile">
					<?php echo get_theme_mod('terms_conditions_text', 'Gorin Bros. Inc.'); ?>
					<a href="<?php echo get_theme_mod('terms_conditions_link1', '#'); ?>"><?php echo get_theme_mod('terms_conditions_link1_text', 'Privacy Policy'); ?></a>
					<a href="<?php echo get_theme_mod('terms_conditions_link2', '#'); ?>"><?php echo get_theme_mod('terms_conditions_link2_text', 'Terms & Conditions'); ?></a>
				</p>
			</div>
		</div>
		<!--footer-col-row-->
		<div class="footer-social-row">
			<div class="footer-social-col">
				<h6>Find Us</h6>
				<ul>
					<li><a href="<?php echo get_theme_mod('twitter_link', '#'); ?>" class="twitter"><span></span></a></li>
					<li><a href="<?php echo get_theme_mod('facebook_link', '#'); ?>" class="facebook"><span></span></a></li>
					<li><a href="<?php echo get_theme_mod('instagram_link', '#'); ?>" class="instagram"><span></span></a></li>
					<br/>
					<li><a href="<?php echo get_theme_mod('pinterest_link', '#'); ?>" class="pinterest"><span></span></a></li>
					<li><a href="<?php echo get_theme_mod('tumblr_link', '#'); ?>" class="tumbler"><span></span></a></li>
				</ul>
			</div>
		</div>
		<!--footer-social-row-->
		<p class="copyright visible-mobile">
			<?php echo get_theme_mod('terms_conditions_text', 'Gorin Bros. Inc.'); ?> <br />
			<a href="<?php echo get_theme_mod('terms_conditions_link1', '#'); ?>"><?php echo get_theme_mod('terms_conditions_link1_text', 'Privacy Policy'); ?></a>
			<a href="<?php echo get_theme_mod('terms_conditions_link2', '#'); ?>"><?php echo get_theme_mod('terms_conditions_link2_text', 'Terms & Conditions'); ?></a>
		</p>
	</div>
</footer>
