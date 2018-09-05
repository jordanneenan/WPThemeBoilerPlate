
<?php wp_footer(); ?>
			</div><!--close page_wrapper -->
			<footer>
				<div class="footer-wrapper cfx">

					<div class="left">
						<div class="content">
							<div class="footer_logo">
								<img src="<?php echo $GLOBALS['pathImg']; ?>footer_logo.svg" alt="Driven">
							</div>
						</div>
					</div>

					<div class="right cfx">
						<div class="nav mob_hide">
							<?php wp_nav_menu( array( 'theme_location' => 'main_nav', 'sort_column' => 'menu_order', 'container_class' => 'footer-nav' ) ); ?>
						</div>
						<div class="social">
							<a href="#">
								<img src="<?php echo $GLOBALS['pathIcon']; ?>icon-instragram.svg" alt="Find us on Instagram">
							</a>

							<a href="#">
								<img src="<?php echo $GLOBALS['pathIcon']; ?>icon-facebook.svg" alt="Find us on Facebook">
							</a>

							<a href="#">
								<img src="<?php echo $GLOBALS['pathIcon']; ?>icon-twitter.svg" alt="Find us on Twitter">
							</a>

							<a href="#">
								<img src="<?php echo $GLOBALS['pathIcon']; ?>icon-linkedin.svg" alt="Find us on Linked In">
							</a>

							<a href="#">
								<img src="<?php echo $GLOBALS['pathIcon']; ?>icon-vimeo.svg" alt="Find us on Vimeo">
							</a>
						</div>
					</div>

				</div>

				<div class="footer-wrapper cfx">

					<div class="left address_container">
						<div class="address">
							<p>8 Philips Street <br>Spring Hill 4000</p>
							<p>07 38312801 <br>info@wearedriven.com.au</p>
						</div>
					</div>

					<div class="right cfx">
						<div class="nav top_link mob_hide">
							<ul>
								<li>
									<a href="#">Back to top</a>
								</li>
							</ul>
						</div>
						<div class="form">
							<p>Sign up for our newletter</p>
							<?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]'); ?>
						</div>
					</div>

				</div>
			</footer>

        </div>

        <!-- Animation libraries -->
        <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.3/ScrollMagic.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
        <!-- <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/vendor/animation.gsap.js'></script> -->
        
    </body>
</html>