<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>

</head>

<body class="blog wp-custom-logo group-blog sticky-header body-desktop">
<?php do_action( 'onepress_before_site_star' ); ?>
<div id="page" class="hfeed site">
<!--	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'onepress' ); ?></a>-->
    <?php
    /**
     * Hooked: onepress_site_header
     *
     * @see onepress_site_header
     */
    do_action( 'onepress_site_start' );
    ?>
 <!----------end header------------> 

	<div id="content" class="site-content">

		<div class="page-header">
			<div class="container">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</div>
		</div>

        <?php echo onepress_breadcrumb(); ?>

		<div id="content-inside" class="container right-sidebar">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

					<section id="tintuc" class="section-news onepage-section">
           		<div class="container">
                	
                    <div class="section-content">
                    	<div class="row">
                        	<div class="col-sm-12">
                            	<div class="blog-entry wow slideInUp" style="visibility: visible; animation-name: slideInUp;">
                                	 <?php
											$args = array( 'category' => 21, 'post_type' =>  'post' ); 
											$postslist = get_posts( $args );    
											foreach ($postslist as $post) :  setup_postdata($post); 
											?>     
           
           <article id="post-<?php the_ID(); ?>" <?php post_class( array('list-article', 'clearfix') ); ?>>

	<div class="list-article-thumb">
		<a href="<?php echo esc_url( get_permalink() ); ?>">
			<?php
			if ( has_post_thumbnail( ) ) {
				the_post_thumbnail( 'onepress-blog-small' );
			} else {
				echo '<img alt="" src="'. get_template_directory_uri() . '/assets/images/placholder2.png' .'">';
			}
			?>
		</a>
	</div>

	<div class="list-article-content">
		<div class="list-article-meta">
			<?php the_category(' / '); ?>
		</div>
		<header class="entry-header">
			<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		</header><!-- .entry-header -->
		<div class="entry-excerpt">
			<?php
				the_excerpt();
			?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'onepress' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->
	</div>

</article><!-- #post-## -->
<?php endforeach; ?>
                                    
                                </div>                                
                            </div>                            
                        </div>
                    </div>
                </div>
           </section>

				</main><!-- #main -->
			</div><!-- #primary -->

			<?php get_sidebar(); ?>

		</div><!--#content-inside -->
	</div><!-- #content -->

<?php get_footer(); ?>
