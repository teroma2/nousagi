<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div><!-- .site-content -->

		<footer id="colophon" role="contentinfo">
		<!-- .footer -->
		<div class="footer">
			<div class="footer-inner">
				<?php
					/**
					 * Fires before the twentysixteen footer text for footer customization.
					 *
					 * @since Twenty Sixteen 1.0
					 */
					do_action( 'twentysixteen_credits' );
				?>
				<p class="footer-site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" title="<?php bloginfo( 'name' ); ?>">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/logo_rgb_horizontal_s.png" width="140" alt="HARES">
					</a>
				</p>

				<div>
					<ul class="footer-social">
						<li class="footer-social-item">
							<a href="https://www.facebook.com/souta6954">Facebook</a>
						</li>
						<li class="footer-social-item">
							<a href="https://twitter.com/souta6954">Twitter</a>
						</li>
					</ul>
				</div>

				<nav>
				<ul class="footer-corporate-menu">
					<li class="footer-corporate-menu-item"><a href="<?php echo home_url('/company'); ?>">運営会社</a></li>
					<li class="footer-corporate-menu-item"><a href="<?php echo home_url('/about'); ?>">このサイトについて</a></li>
					<li class="footer-corporate-menu-item"><a href="<?php echo home_url('/contact'); ?>">お問い合わせ</a></li>
					<li class="footer-corporate-menu-item"><a href="<?php echo home_url('/privacy-policy'); ?>">プライバシーポリシー</a></li>
				</ul>
				</nav>

				<aside>
				<ul class="footer-feeds">
					<li class="footer-feeds-item">
						<a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS'); ?>"><?php _e('RSS'); ?></a>
					</li>
					<li class="footer-feeds-item">
						<a href="<?php bloginfo('atom_url'); ?>" title="<?php _e('Syndicate this site using Atom'); ?>"><?php _e('Atom'); ?></a>
					</li>
				</ul>
				</aside>

				<p class="copyright">
					Copyright&nbsp;&copy;&nbsp;<script type="text/javascript">copyright();</script> HARES, Inc. All Rights Reserved.
				</p>

			</div><!-- .footer-info -->
		</div><!-- .footer -->
		</footer>

	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>
