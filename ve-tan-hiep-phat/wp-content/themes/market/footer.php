<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Market
 */
?>
	</div>
	</div><!-- #content -->
	<?php get_sidebar('footer'); ?>
	<footer id="colophon" class="site-footer row" role="contentinfo">
	<div class="container">
		<div class="site-info col-md-4">
			<p style="width:15%;float:left;"><a href="http://thp.com.vn/"><img src="http://thp.com.vn/ve-tan-hiep-phat/wp-content/uploads/2016/07/thp-small.png" /></a></p>
			<div>219 đại lộ Bình Dương, Thị xã Thuận An, Tỉnh Bình Dương, Việt Nam</div>
		</div><!-- .site-info -->
		<div id="footertext" class="col-md-7">
			<?php echo esc_html(get_theme_mod('market_footer_text')); ?> 
        </div>
	</div>   
	</footer><!-- #colophon -->
	
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>