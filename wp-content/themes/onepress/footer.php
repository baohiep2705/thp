<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package OnePress
 */
?>
    <footer id="colophon" class="site-footer" role="contentinfo">
        <?php
        $onepress_btt_disable = get_theme_mod('onepress_btt_disable');
        $onepress_social_footer_title = get_theme_mod('onepress_social_footer_title', esc_html__('Keep Updated', 'onepress'));

        $onepress_newsletter_disable = get_theme_mod('onepress_newsletter_disable', '1');
        $onepress_social_disable = get_theme_mod('onepress_social_disable', '1');
        $onepress_newsletter_title = get_theme_mod('onepress_newsletter_title', esc_html__('Join our Newsletter', 'onepress'));
        $onepress_newsletter_mailchimp = get_theme_mod('onepress_newsletter_mailchimp');

        if ( $onepress_newsletter_disable != '1' || $onepress_social_disable != '1' ) : ?>
            <div class="footer-connect">
                <div class="container">
                    <div class="row">
			<div class="col-sm-2">
				<a href=""><img src="http://www.thp.com.vn/wp-content/uploads/2017/01/thp.png" /></a>
			</div>
                        <div class="col-sm-4">
				<div class="contact-footer"  style="text-align:left">
					<h5 class="follow-heading">LIÊN HỆ VỚI CHÚNG TÔI</h5>
					<div>
						<a style="float:left;width:100%" href="#"><i class="fa fa-envelope"></i><span> info@thp.com.vn</span> </a>
						<a href="#"><i class="fa fa-envelope"></i><span> info@artemisassociates.com</span> </a>
					</div>
				</div>
			</div>
			 
                       <!-- <?php if ($onepress_newsletter_disable != '1') : ?>
                            <div class="col-sm-2">
                                <div class="footer-subscribe">
                                    <?php if ($onepress_newsletter_title != '') echo '<h5 class="follow-heading">' . $onepress_newsletter_title . '</h5>'; ?>
                                    <form novalidate="" target="_blank" class="" name="mc-embedded-subscribe-form" id="mc-embedded-subscribe-form" method="post"
                                          action="<?php if ($onepress_newsletter_mailchimp != '') echo $onepress_newsletter_mailchimp; ?>">
                                        <input type="text" placeholder="<?php esc_attr_e('Enter your e-mail address', 'onepress'); ?>" id="mce-EMAIL" class="subs_input" name="EMAIL" value="">
                                        <input type="submit" class="subs-button" value="<?php esc_attr_e('Subscribe', 'onepress'); ?>" name="subscribe">
                                    </form>
                                </div>
                            </div>
                        <?php endif; ?>-->

                        <div class="<?php if ( $onepress_newsletter_disable == '1' ) {
                            echo 'col-sm-6';
                        } else {
                            echo 'col-sm-6';
                        } ?>">
                            <?php
                            if ($onepress_social_disable != '1') {
                                ?>
                                <div class="footer-social">
                                    <?php
                                    if ($onepress_social_footer_title != '') echo '<h5 class="follow-heading">' . $onepress_social_footer_title . '</h5>';

                                    $socials = onepress_get_social_profiles();
                                    /**
                                     * New Socials profiles
                                     *
                                     * @since 1.1.4
                                     * @change 1.2.1
                                     */
                                    echo '<div class="footer-social-icons">';
                                    if ( $socials ) {
                                        echo $socials;
                                    } else {
                                        /**
                                         * Deprecated
                                         * @since 1.1.4
                                         */
                                        $twitter = get_theme_mod('onepress_social_twitter');
                                        $facebook = get_theme_mod('onepress_social_facebook');
                                        $google = get_theme_mod('onepress_social_google');
                                        $instagram = get_theme_mod('onepress_social_instagram');
                                        $rss = get_theme_mod('onepress_social_rss');

                                       /* if ($twitter != '') echo '<a target="_blank" href="' . $twitter . '" title="Twitter"><i class="fa fa-twitter"></i></a>';
                                        if ($facebook != '') echo '<a target="_blank" href="' . $facebook . '" title="Facebook"><i class="fa fa-facebook"></i></a>';
                                        if ($google != '') echo '<a target="_blank" href="' . $google . '" title="Google Plus"><i class="fa fa-google-plus"></i></a>';
                                        if ($instagram != '') echo '<a target="_blank" href="' . $instagram . '" title="Instagram"><i class="fa fa-instagram"></i></a>';
                                        if ($rss != '') echo '<a target="_blank" href="' . $rss . '"><i class="fa fa-rss"></i></a>';*/

					 if ($facebook != '') echo '<a target="_blank" href="https://www.facebook.com/tanhiepphatbeveragegroup/" title="Facebook"><i class="fa fa-facebook"></i></a>';
                                        if ($google != '') echo '<a target="_blank" href="https://www.linkedin.com/company/thp-group" title="linkedin"><i class="fa fa-linkedin"></i></a>';
                                        if ($instagram != '') echo '<a target="_blank" href="https://www.youtube.com/user/mediathp" title="Youtube"><i class="fa fa-youtube"></i></a>';
                                        if ($rss != '') echo '<a target="_blank" href="' . $rss . '"><i class="fa fa-rss"></i></a>';
                                    }
                                    echo '</div>';
                                    ?>
                                </div>
                            <?php } ?>
                        </div>
                       
                    </div>


		<div class="row">
			<div class="col-sm-9"></div>
			<div class="col-sm-3">
				<div class="sitemap">
					<h5 class="follow-heading"></h5>
					<div>
						<a href="#">Sitemap</a> |
						<a href="http://www.thp.com.vn/chinh-sach-bao-mat/">Chính sách bảo mật</a>
					</div>
				</div>
			</div>
		</div>



                </div>
            </div>
        <?php endif; ?>

	 <div class="site-info sitemap1">
            <div class="container">
		<a href="#">Sitemap</a> |
		<a href="http://www.thp.com.vn/chinh-sach-bao-mat/">Chính sách bảo mật</a>
		</div>
	</div>

        <div class="site-info">
            <div class="container">
                <?php if ($onepress_btt_disable != '1') : ?>
                    <div class="btt">
                        <a class="back-top-top" href="#page" title="<?php echo esc_html__('Back To Top', 'onepress') ?>"><i class="fa fa-angle-double-up wow flash" data-wow-duration="2s"></i></a>
                    </div>
                <?php endif; ?>
                <?php
                /**
                 * hooked onepress_footer_site_info
                 * @see onepress_footer_site_info
                 */
                do_action('onepress_footer_site_info');
                ?>
            </div>
        </div>
        <!-- .site-info -->

    </footer><!-- #colophon -->
<?php
/**
 * Hooked: onepress_site_footer
 *
 * @see onepress_site_footer
 */
do_action( 'onepress_site_end' );
?>
</div><!-- #page -->

<?php wp_footer(); ?>
<script type=”text/javascript” src=”http://l2.io/ip.js?var=myip”></script>
</body>
</html>
