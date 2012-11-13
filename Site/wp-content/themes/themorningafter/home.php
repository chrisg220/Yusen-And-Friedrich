<?php
	get_header();
	global $woo_options;
	get_template_part( 'top-banner' );
?> 		
        <div id="home_content" class="column span-14">
        	<div id="home_top">
            	
                <p>Located in Seattle, Washington, Yusen & Friedrich is a boutique Pacific Northwest law firm. We specialize in surety and fidelity law, with an emphasis on construction law, complex commercial litigation, real estate, insurance coverage and defense, and bankruptcy. </p>
                <p>Founded in 1988 by Jeff Yusen and Alexander Friedrich, Yusen & Friedrich is only firm in the State of Washington exclusively representing sureties in construction and fidelity matters. Each attorney in the firm has extensive experience in surety, fidelity, and construction-related litigation. As a boutique law firm, we give clients high quality service and personal attention. One of the firm's primary objectives is to get to know its clients on a personal level so that it can meet your legal needs in a cost-effective and timely manner. The firm enjoys a superior reputation for excellent, competitive, and cost-effective legal services.  <a href="http://yusenandfriedrich.com/about-us/" alt="about us"> Read More</a><!--<a href="http://yusenandfriedrich.com/about-us/" class="btn read-more" alt="about us"></a> --> </p>
            </div>
            <div id="home_left" class="column span-7 first home-page">
         
				<?php 
				while ( have_posts() ) { the_post();

				$do_not_duplicate = $post->ID; ?>
        		
                 <!-- TURN OFF LATEST POSTa
                -------------------------------------------------------------------------------------------------------------
				<div id="latest_post" class>
					<h3 class="mast"><?php  /* _e( 'Latest Post', 'woothemes' ); */  ?></h3>
					
					<div id="latest_post_image">
					<?php /*  woo_image( 'width=470&height=210' );  */ ?>
					</div>
					
					<h3 class="latest_post_title" id="post-<?php  /* the_ID();  */ ?>"><a href="<?php /*  the_permalink();  */ ?>" rel="bookmark" title="<?php  /* _e( 'Permanent Link to', 'woothemes' );?> <?php /*  the_title_attribute();  */ ?>"><?php  /* the_title(); */  ?></a></h3>
					
					<p><?php  /* if ( $woo_options['woo_post_content_home'] == 'true' ) { the_content(); } else { the_excerpt(); }  */ ?></p>
					
					<div class="latest_post_meta">
						<span class="latest_read_on"><a href="<?php /*  the_permalink();  */ ?>" rel="bookmark" title="Permanent Link to <?php /*  the_title_attribute();  */ ?>"><?php /*  _e( 'Continue Reading', 'woothemes' );  */ ?></a></span>
						<span class="latest_comments"><?php /*  comments_popup_link( __( 'Post a comment', 'woothemes' ), __( 'One comment', 'woothemes' ), '% comments', '', __( 'Comments off', 'woothemes' ) );  */ ?></span>						
						<?php /*  $cat = get_the_category(); $cat = $cat[0];  */ ?>
						<span class="latest_category"><a href="<?php /*  echo get_category_link( $cat->cat_ID ); */ ?>"><?php /*  echo $cat->cat_name;  */ ?></a></span>
					</div>
				</div>
                -------------------------------------------------------------------------------------------------------------->
				
				<?php 
				break;
					} // End WHILE Loop
				?>
				
				<h3 class="tab home"><?php echo $woo_options['woo_featured_heading']; ?></h3>
				<div id="home_featured">
				
					<?php
                    $limit = $woo_options['woo_featured_limit'];
                    
                    if ($limit > 0) {
					?>
				
					
					
					<?php 
					$feat_id = get_cat_id($woo_options['woo_featured_category']);           
					$limit = $woo_options['woo_featured_limit'];
					$the_query = new WP_Query( 'cat=' . $feat_id . '&showposts=' . $limit );
			
					while ( $the_query->have_posts() ) { $the_query->the_post();

					$do_not_duplicate = $post->ID; ?>
					
					<div <?php post_class( 'feat_content' ); ?>>
					
						<?php woo_image( 'width=70&height=70	' ); ?>
						
						<div class="feat_title"><a href="<?php the_permalink(); ?>" class="post-title" rel="bookmark" title="<?php _e( 'Permanent Link to', 'woothemes' );?> <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                            <div class="post_meta">
                        <?php _e( 'By','woothemes' );?> <?php the_author_posts_link(); ?> <span class="dot">&sdot;</span> <?php the_time( get_option( 'date_format' ) ); ?> <span class="dot">&sdot;</span> <?php if( function_exists( 'wp_email' ) ) { ?> <?php email_link(); ?> <span class="dot">&sdot;</span> <?php } ?> <?php if( function_exists( 'wp_print' ) ) { ?> <?php print_link(); ?> <!-- <span class="dot">&sdot;</span> --> <?php  } ?>  <!-- <a href="#comments"> --> <?php /* _e( 'Post a comment','woothemes' ); */?> <!-- </a> -->
                            </div>
                        </div>
                        
                        
						
						<div class="feat_exc">						
							<?php if ( $woo_options['woo_post_content_home'] == 'true' ) { the_content(); } else { the_excerpt(); } ?> 
                            <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php _e( 'Permanent Link to', 'woothemes' );?> <?php the_title_attribute(); ?>">Read More</a>
						</div>
											
					</div>
					
					<?php
							} // End WHILE Loop
						} // End IF Statement
					?>
					 
				</div>
				<?php 
				$limit = $woo_options['woo_updates_limit'];
				$the_query = new WP_Query( 'post_type=updates&showposts=' . $limit ); 
				
				if( $the_query->have_posts() ) {
				?>
				
				<div id="home_asides">
				
					<h3 class="mast"><?php echo $woo_options['woo_updates_heading']; ?></h3>
					
					<ul class="arrow">
						
						<?php 
						while ( $the_query->have_posts() ) { $the_query->the_post();

						$do_not_duplicate = $post->ID; ?>
						
						<li><?php echo strip_tags( get_the_content(), '<a>' ); ?> <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php _e( 'Permanent Link to','woothemes' ); ?> <?php the_title_attribute(); ?>">#</a></li>
						
						<?php } // End WHILE Loop ?>
					</ul>
				</div>
				<?php } ?>           
            </div>            
            
            <div id="home_right" class="column span-7 last">
            	<?php if( ! empty( $woo_options['woo_home_heading'] ) && ! empty( $woo_options['woo_home_text'] ) ) { ?>
                 <!-- TURN OFF HOME ABOUT
                -------------------------------------------------------------------------------------------------------------
            	<div id="home_about">
					
					<?php /* if ( ! empty( $woo_options['woo_home_heading'] ) ) {  */ ?><h3 class="mast3"><?php /* echo stripslashes( $woo_options['woo_home_heading'] );  */ ?></h3><?php /* }  */ ?>
					<?php /* if (  !empty( $woo_options['woo_home_text'] ) ) {  */ ?><p><?php /* echo stripslashes( $woo_options['woo_home_text'] );  */ ?><p><?php /* }  */ ?>		
							
				</div>
                -------------------------------------------------------------------------------------------------------------->
				<?php } ?>
					
				<div class="column span-4 first home-side-bar">
					<?php if ( ! function_exists( 'woo_sidebar' ) || ! woo_sidebar( 'middle_sidebar' ) ) { /* Silence is golden. */ } ?>
            	</div>
            
                <?php get_sidebar(); ?>         
            	
            
            </div>
        
        </div>    
        
<?php get_footer(); ?> 