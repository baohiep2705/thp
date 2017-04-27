<?php
/**
 *Template Name: News VN
 *
 * @package OnePress
 */
 get_header();
?>


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
                                <!--////////////////////list post and paging///////////-->
                                	         <?php
												// set the "paged" parameter (use 'page' if the query is on a static front page)
												$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
												
												// the query
												$the_query = new WP_Query( 'cat=21&posts_per_page=5&paged=' . $paged ); 
												?>
												
												<?php if ( $the_query->have_posts() ) : ?>
												
												<?php
												// the loop
												while ( $the_query->have_posts() ) : $the_query->the_post(); 
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
																																		
												<?php endwhile; ?>
                                                
                                                <nav class="navigation posts-navigation">
												<div class="nav-links">
                                                <p class="nav-previous" >
												<?php												
												previous_posts_link( '<<' );												
												?>
                                                </p>
                                                <p class="nav-next" >
                                                <?php												
												next_posts_link( '>>', $the_query->max_num_pages );												
												?>
                                                </p>
                                                </div>
                                                </nav>
												
												<?php 
												// clean up after the query and pagination
												wp_reset_postdata(); 
												?>
												
												<?php else:  ?>
												<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
												<?php endif; ?>     
                            <!--////////////////////End list post and paging///////////-->                       
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
