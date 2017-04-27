<?php
/*
Single Post Template: single-eng
Description: template single cho english
*/


$layout = get_theme_mod( 'onepress_layout', 'right-sidebar' );
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

		<?php echo onepress_breadcrumb(); ?>

		<div id="content-inside" class="container <?php echo esc_attr( $layout ); ?>">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'single-eng' ); ?>

					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					?>

				<?php endwhile; // End of the loop. ?>

				</main><!-- #main -->
			</div><!-- #primary -->

            <?php
				if ( ! is_active_sidebar( 'sidebar-2' ) ) {
					return;
				}
				?>
			<div id="secondary" class="widget-area sidebar" role="complementary">
				<?php dynamic_sidebar( 'sidebar-2' ); ?>
			</div>

		</div><!--#content-inside -->
	</div><!-- #content -->

<?php include 'footer-eng.php'; ?>
