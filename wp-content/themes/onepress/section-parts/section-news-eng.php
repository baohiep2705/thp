<section id="tintuc" class="section-news section-padding onepage-section">
           		<div class="container">
                	<div class="section-title-area">
                    	<h2 class="section-title">NEWS</h2>
                        <div class="section-desc">
                        	<p>Recent news</p>
                        </div>
                    </div>
                    <div class="section-content">
                    	<div class="row">
                        	<div class="col-sm-12">
                            	<div class="blog-entry wow slideInUp" style="visibility: visible; animation-name: slideInUp;">
                                	 <?php
											$args = array( 'category' => 23, 'post_type' =>  'post' ); 
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