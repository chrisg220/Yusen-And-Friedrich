<?php
/*
Template Name: Blog
*/
	get_header();
	global $woo_options;
	get_template_part( 'top-banner' );
?>    
        <div id="post_content" <?php post_class( 'column span-14 first' ); ?>>
            <?php
                    $limit = $woo_options['woo_featured_limit'];
                    
                    if ($limit > 0) {
					?>
				
					<h3 class="tab"><?php /* echo $woo_options['woo_featured_heading']; */ ?> Legal News</h3>
					
					<?php 
					$feat_id = get_cat_id($woo_options['woo_featured_category']);           
					$limit = $woo_options['woo_featured_limit'];
					$the_query = new WP_Query( 'cat=' . $feat_id . '&showposts=' . $limit );
			
					while ( $the_query->have_posts() ) { $the_query->the_post();

					$do_not_duplicate = $post->ID; ?>
					
					<div <?php post_class( 'feat_content' ); ?>>
					
						<?php woo_image( 'width=70&height=70	' ); ?>
						
						<div class="feat_title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php _e( 'Permanent Link to', 'woothemes' );?> <?php the_title_attribute(); ?>"><?php the_title(); ?></a></div> <?php _e( 'By','woothemes' );?> <?php the_author_posts_link(); ?> <span class="dot">&sdot;</span> <?php the_time( get_option( 'date_format' ) ); ?>
						
						<div class="feat_exc">						
							<?php if ( $woo_options['woo_post_content_home'] == 'true' ) { the_content(); } else { the_excerpt(); } ?>
						</div>
											
					</div>
					
					<?php
							} // End WHILE Loop
						} // End IF Statement
					?>
            
            
            
            
            
            
            
            
            
            
            
            
            <?php /*if ( have_posts() ) { $count = 0; ?>
            <?php while ( have_posts() ) { the_post(); $count++; ?>
            
        	<div class="column">
           
                <div class="entry">
	               	<?php the_content(); ?>
	          	</div>
             
             </div>
                                                    
        	<?php
	        		} // End WHILE Loop
				} else {
					printf( __( '<p>Lost? Go back to the <a href="%s">home page</a></p>', 'woothemes' ), get_home_url() );
				}
			*/	
			?>  
            

        
        </div>         
<?php get_footer(); ?>