<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer animate__animated animate__bounceInUp wow animated" id="colophon">

					<div class="site-info">
						<div class="footer-menu-wrapper">

							<ul class="footer-menu">
								<li class="footer-menu-item">
									<a href="#">
										contact us
									</a>
								</li>
										
								<li class="footer-menu-item">
									<a href="#">
										lp sign in
									</a>
								</li>
								<li class="footer-menu-item">
									<a href="#">
										jobs
									</a>
								</li>
							</ul>
							<div class="divider-xs"></div>
						</div>

						<div class="row">
							<div class="col-md-6">
								<div class="footer-about-shasta">
									<h3>
										about shasta
									</h3>
									<div class="footer-about-shasta-description">
										<p>

											At Shasta, we elevate early stage enterprise SaaS companies. For 15 years we've helped over 30 startups go public or get acquired by providing the capital and expertise to become market-changing enterprises.
										</p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="footer-about-shasta">

									<h3> Sign Up</h3>
									<form class="form-horizontal" action="" method="">
										<div class="row">
											
											<div class="col-md-9">
												<input type="text" class="form-control input-email" placeholder="EMAIL"/>
											</div>
											<div class="col-md-3">
												<input type="submit" class="form-control input-email" value="SUBMIT"/>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
								<div class="footer-social-media">

									<ul>
										<li class="social-media-item-linked-in">
											<a href="#">
												<i class="fa fa-linkedin fa-lg"></i>
											</a>
										</li>
										<li class="social-media-item-twitter">
											<a href="#">
												<i class="fa fa-twitter fa-lg"></i>
											</a>
										</li>
										<li class="social-media-item-facebook">
											<a href="#">
												<i class="fa fa-facebook fa-lg"></i>
											</a>
										</li>
									</ul>
								</div>
							</div>
							
						</div>
						<div class="row">
							<div class="col-md-12">

								<div class="footer-credit">
									<p>
									©2020 Shasta Ventures. All rights reserved.
									</p>
								</div>
							</div>
						</div>
						
						<?php // understrap_site_info(); ?>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

