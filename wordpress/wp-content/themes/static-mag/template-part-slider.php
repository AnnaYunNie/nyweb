<div id="static-home" class="col-md-12" >										   									        									     
	<?php
  $sticky = get_option( 'sticky_posts' );
	$get_featured_posts	 = new WP_Query( array(
		'posts_per_page' => 3,
  	'post__in'  => $sticky,
  	'ignore_sticky_posts' => 1
	) );
  if ( isset($sticky[0]) ) {
  	$i					 = 1;
  	while ( $get_featured_posts->have_posts() ) : $get_featured_posts->the_post();
  		?>
  		<div class="static-post <?php if ( $i == 1 ) { echo 'col-md-8'; } else { echo 'col-md-4'; }?>"> 
  			<div class="flex-img">                    	           
  				<a href="<?php the_permalink(); ?>">                                         
  					<?php if ( has_post_thumbnail() ) { ?>        												           
  						<div class="featured-thumbnail"><?php the_post_thumbnail( 'first-mag-slider' ); ?></div> 											         
  					<?php } else { ?>                                       
  						<div class="featured-thumbnail"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/noprew-static-home.jpg" alt="<?php the_title(); ?>"></div>    									               
  					<?php } ?>                              
  				</a>                                                                
  			</div>                               
  			<div class="flex-caption">		                     						         
  				<div class="flex-title home-header">                      						                                                                                                     
  					<header>
  						<h2 class="page-header" itemprop="headline">                                
  							<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'static-mag' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark">
  								<?php the_title(); ?>
  							</a>                            
  						</h2> 
  					</header>                                                      
  					<div class="entry-summary" itemprop="text">
  						<?php if ( $i == 1 ) { the_excerpt(); } ?> 
  					</div><!-- .entry-summary -->                                                                                                                                                                                                              
  					<div class="flex-meta row">
  						<time class="posted-on published col-xs-6 text-left" datetime="<?php the_time( 'Y-m-d' ); ?>" itemprop="datePublished"><i class="fa fa-clock-o"></i><?php the_time( get_option( 'date_format' ) ); ?></time>
  						<div class="author-link col-xs-6 text-right" itemprop="author"><i class="fa fa-user"></i><?php the_author_posts_link(); ?></div>
  					</div> 
  				</div>                                 
  			</div>
  		</div>	
  	<?php $i++; 
  	endwhile;
  	wp_reset_postdata();
  } 
  ?>  										   								 
</div>

