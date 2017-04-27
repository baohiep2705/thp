<?php
/**
 *Template Name: Frontpage-eng
 *
 * @package OnePress
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<?php do_action( 'onepress_before_site_star' ); ?>
<div id="page" class="hfeed site">
<!--	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'onepress' ); ?></a>-->
    <?php
    /**
     * Hooked: onepress_site_header
     *
     * @see onepress_site_header
     */
    do_action( 'onepress_site_start_en' );
    ?>
 <!----------end header------------>   

	<div id="content" class="site-content">
		<main id="main" class="site-main" role="main">
          <?php include 'section-parts/section-hero-eng.php'; ?>
           <?php include 'section-parts/section-features-eng.php'; ?>
           <?php include 'section-parts/section-about-eng.php'; ?>
           <?php include 'section-parts/section-services-eng.php'; ?>
           <?php include 'section-parts/section-news-eng.php'; ?>
		</main><!-- #main -->
	</div><!-- #content -->

<?php include 'footer-eng.php'; ?>
