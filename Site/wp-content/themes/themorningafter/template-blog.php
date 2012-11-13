<?php
/*
Template Name: Blog
*/
	get_header();
	global $woo_options;
	get_template_part( 'top-banner' );
?>    
		
        <div id="post_content" <?php post_class( 'column span-14 first' ); ?>>
            <?php if ( !$paged && get_option('woo_featured') == "true" ) include ( TEMPLATEPATH . '/includes/featured.php' ); ?>
    
		<div id="main" class="col-left">
            
			<?php  
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
				$args = array( 'post__not_in' => $GLOBALS['shownposts'], 'cat' => '-'.$GLOBALS[video_id], 'paged'=> $paged ); query_posts($args);		
			?>
            <?php if (have_posts()) : $count = 0; ?>
            <?php while (have_posts()) : the_post(); $count++; ?>
                                                                        
                <div class="box">
                    <div class="post">
                    
						<h2 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                        <p class="post-meta">
							<img src="<?php bloginfo('template_directory'); ?>/images/ico-time.png" alt="" /><?php the_time( get_option( 'date_format' ) ); ?>
                            <span class="comments"> <!--<img src="<?php /* bloginfo('template_directory'); */ ?>/images/ico-comment.png" alt="" /> --><?php comments_popup_link(__('0 Comments', 'woothemes'), __('1 Comment', 'woothemes'), __('% Comments', 'woothemes')); ?></span><span class="cat"><?php the_category(', ') ?></span>
                        </p>
						<?php woo_get_image('image',$GLOBALS['thumb_width'],$GLOBALS['thumb_height'],'thumbnail '.$GLOBALS['align']); ?> 
                        
                        <div class="entry">
                            
                            <?php if ( get_option('woo_home_content') == "true" ) { ?>
							<?php the_content(__('Read more...', 'woothemes')); ?>
                            <?php } else { ?>
							<?php the_excerpt(); ?><span class="read-more"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" class="btn"><?php _e('Read more', 'woothemes'); ?></a></span>
                            <?php } ?>

                        </div>
                        <div class="fix"></div>
                    </div><!-- /.post -->
                    
                    <h2 class="post_comm"></h2>                                    
                    <div class="post-bottom" style="display:none; visibility:hidden;">
                        <div class="fl"><span class="cat"><?php the_category(', ') ?></span></div>
                        <div class="fr"><?php the_tags('<span class="tags">', ', ', '</span>'); ?></div> 
                        <div class="fix"></div>                       
                    </div>
                </div><!-- /.box -->
                                                    
			<?php endwhile; else: ?>
                <div class="box">
                    <div class="post">
                        <p><?php _e('Sorry, no posts matched your criteria.', 'woothemes') ?></p>
                    </div><!-- /.post -->
                </div><!-- /.box -->
            <?php endif; ?>  
        
                <div class="more_entries">
                    <?php if (function_exists('wp_pagenavi')) wp_pagenavi(); else { ?>
                    <div class="fl"><?php previous_posts_link(__('Newer Entries', 'woothemes')) ?></div>
                    <div class="fr"><?php next_posts_link(__('Older Entries', 'woothemes')) ?></div>
                    <br class="fix" />
                    <?php } ?> 
                </div>		
                
		</div><!-- /#main -->

            
            
            
            
            
            
            
            
            
            
            
            
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