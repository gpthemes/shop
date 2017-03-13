<?php 
/**
 *	Template Name : Default
 *
 */

//pree($theme_mods_extreme);
get_header();
 ?>


		        
            <!-- Start Before Content -->
        	<?php if ( is_active_sidebar( 'before-content' ) ) : ?>
            <div class="row margin-top-30">
				
				<?php dynamic_sidebar( 'before-content' ); ?>

			</div>
            <?php else : ?>
            <div class="row margin-top-30">
            	<div class="col-md-12 text-center"  style="border:2px dashed #333; padding: 30px;">
            		<h3><a href="<?php echo get_bloginfo('wpurl').'/wp-admin/widgets.php'; ?> ">Click here to add Before Content widget</a></h3>
                </div>
                    <!-- Time to add some widgets! -->
            </div>
            <?php endif; ?>
            <!-- End Before Content -->
            
            <!-- Start Extreme Slider -->
			
			<div class="row margin-top-10">
				<!-- Carousel Slideshow -->
            <?php if ( is_active_sidebar( 'gp-extreme-slider' ) ) : ?>
			
            	<?php dynamic_sidebar( 'gp-extreme-slider' ); ?>
                
			<?php else : ?>
            <div id="carousel-example" class="carousel slide" data-ride="carousel" style="border:2px dashed #333; padding: 30px;border-radius:0;">
                <h3 class="text-center"><a href="<?php echo get_bloginfo('wpurl').'/wp-admin/widgets.php'; ?> ">Click here to add slider widget</a></h3>
            </div>
			<?php endif; ?>
				<!-- End Carousel Slideshow -->
			</div>

            <!-- Start Extreme Slider -->
            
			<div class="row margin-vert-30">
				<!-- Main Text -->
				<div id="primary" class="content-area col-md-9">
                	<main id="main" class="site-main" role="main">
                 <?php if(is_single()){ ?>
	
					<?php while( have_posts() ): the_post(); ?>
					
					<div class="blog-post padding-bottom-20">
						<!-- Blog Item Header -->
						<div class="blog-item-header">
							<!-- Date -->
							<div class="blog-post-date pull-left">
                            	<span class="day"><?php the_time(' j'); ?></span>
                        	    <span class="month"><?php the_time('M'); ?></span>
							</div>
							<!-- End Date -->
							<!-- Title -->
							<h2><?php the_title(); ?></h2>
							<div class="clearfix"></div>
							<!-- End Title -->
						</div>
						<!-- End Blog Item Header -->
						<!-- Blog Item Details -->
						<div class="blog-post-details">
							<!-- Author Name -->
							<div class="blog-post-details-item blog-post-details-item-left user-icon">
								<i class="fa fa-user"></i>
								<a href="#"><?php echo get_the_author(); ?></a>
							</div>
							<!-- End Author Name -->
							<!-- Tags -->
							<div class="blog-post-details-item blog-post-details-item-left blog-post-details-tags tags-icon">
								<i class="fa fa-tag"></i>
								<a href="#"><?php the_category(', '); ?></a>
							</div>
							<!-- End Tags -->
							<!-- # of Comments -->
							<div
								class="blog-post-details-item blog-post-details-item-left blog-post-details-item-last comments-icon">
								<a href="#"><i class="fa fa-comments"></i><?php echo "comments ".get_comments_number(); ?></a>
							</div>
							<!-- End # of Comments -->
						</div>
						<!-- End Blog Item Details -->
						<!-- Blog Item Body -->
						<div class="blog">
							<div class="clearfix"></div>
							<div class="blog-post-body row margin-top-15">
                            <?php if( has_post_thumbnail() ){ ?>
    							    <div class="col-md-12">
                                        <img class="pull-left" src="<?php the_post_thumbnail_url(); ?>" alt="thumb1">
                                    </div>
                            <?php }	?>
								
                                <div class="col-md-12"><?php the_content(); ?></div>
                                
							</div>
						</div>
						<!-- End Blog Item Body -->
					</div>
					<?php endwhile; ?>		
				
				<?php }	else { ?>
					
					<?php while( have_posts() ): the_post(); ?>
                    <div class="blog-post padding-bottom-20">
						<!-- Blog Item Header -->
						<div class="blog-item-header">
							<!-- Date -->
							<div class="blog-post-date pull-left">
                            	<span class="day"><?php the_time(' j'); ?></span>
                        	    <span class="month"><?php the_time('M'); ?></span>
							</div>
							<!-- End Date -->
							<!-- Title -->
							<h2>
							<a href="<?php echo get_permalink( $post->ID ); ?>"><?php the_title(); ?></a>
							</h2>
							<div class="clearfix"></div>
							<!-- End Title -->
						</div>
						<!-- End Blog Item Header -->
						<!-- Blog Item Details -->
						<div class="blog-post-details">
							<!-- Author Name -->
							<div class="blog-post-details-item blog-post-details-item-left user-icon">
								<i class="fa fa-user"></i>
								<a href="#"><?php echo get_the_author(); ?></a>
							</div>
							<!-- End Author Name -->
							<!-- Tags -->
							<div class="blog-post-details-item blog-post-details-item-left blog-post-details-tags tags-icon">
								<i class="fa fa-tag"></i>
								<a href="#"><?php the_category(', '); ?></a>
							</div>
							<!-- End Tags -->
							<!-- # of Comments -->
							<div
								class="blog-post-details-item blog-post-details-item-left blog-post-details-item-last comments-icon">
								<a href="#">
									<i class="fa fa-comments"></i>
									<?php echo "comments ".get_comments_number(); ?>
								</a>
							</div>
							<!-- End # of Comments -->
						</div>
						<!-- End Blog Item Details -->
						<!-- Blog Item Body -->
						<div class="blog">
							<div class="clearfix"></div>
							<div class="blog-post-body row margin-top-15">
                            
							<?php if( has_post_thumbnail() ){ ?>
    							<div class="col-md-5">
									<img class="pull-left" src="<?php the_post_thumbnail_url(); ?>" alt="thumb1">
								</div>
                            <?php }	?>
								
                                <div class="col-md-7">
									<p><?php the_excerpt(); ?></p>
								</div>
							</div>
						</div>
						<!-- End Blog Item Body -->
					</div>

                    <?php 
						
						// End the loop.
				        endwhile;
						the_posts_pagination( array( 
							'mid_size' 			 => 1,
							'prev_text'          => __('«'),
							'next_text'          => __('»'),
							'before_page_number' => '',
							'after_page_number'  => '' 
						) );
					?>
                    
				<?php }	?>
                
                    </main>
				</div>
				<!-- End Main Text -->
				
                <!-- Side Column -->
				<div id="sidebar-primary" class="col-md-3 sidebar">
                	 
					<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
                        <?php dynamic_sidebar( 'sidebar-1' ); ?>
                    <?php else : ?>
                    <aside class="widget"  style="border: 2px dashed rgb(51, 51, 51); height: 160px; padding: 30px;">
                
                    <h3 class="text-center"><a href="<?php echo get_bloginfo('wpurl').'/wp-admin/widgets.php'; ?> ">Click here to add sidebar widgets</a></h3>
            		</aside>                        
                	<!-- Time to add some widgets! -->
                    <?php endif; ?>
					
				</div>
				<!-- End Side Column -->
			</div>
            
            <?php if ( is_active_sidebar( 'bottom-1' ) && gp_dynamic_sidebar('bottom-1') != '' ) : ?>
			<div class="row margin-top-30">
				
					<?php dynamic_sidebar( 'bottom-1' ); ?>				
				
			</div>
			<?php else : ?>
            <div class="row margin-top-30">
                <div class="portfolio-item col-md-4 animate fadeIn animated">
                    <div class="image-hover" style="border:2px dashed #333;height:80px; padding: 30px; display:block;">
                        <h3><a href="<?php echo get_bloginfo('wpurl').'/wp-admin/widgets.php'; ?> ">Click here to add widgets</a></h3>
                        <!-- Time to add some widgets! -->
                    </div>
                </div>
                
                <div class="portfolio-item col-md-4 animate fadeIn animated">
                    <div class="image-hover" style="border:2px dashed #333;height:80px; padding: 30px; display:block;">
                        <h3><a href="<?php echo get_bloginfo('wpurl').'/wp-admin/widgets.php'; ?> ">Click here to add widgets</a></h3>
                        <!-- Time to add some widgets! -->
                    </div>
                </div>
                
                <div class="portfolio-item col-md-4 animate fadeIn animated">
                    <div class="image-hover" style="border:2px dashed #333;height:80px; padding: 30px; display:block;">
                        <h3><a href="<?php echo get_bloginfo('wpurl').'/wp-admin/widgets.php'; ?> ">Click here to add widgets</a></h3>
                        <!-- Time to add some widgets! -->
                    </div>
                </div>
            </div>
                <?php endif; ?>
                <!-- //Portfolio Item// -->
            
            <!-- Start Footer Top! -->
            <?php if ( is_active_sidebar( 'footer-top' ) && gp_dynamic_sidebar('footer-top') != '' ) : ?>
			<div class="row margin-top-30">
				
				<?php dynamic_sidebar( 'footer-top' ); ?>
                
			</div>
            <?php else : ?>
            <div class="row margin-top-30" >
            	<div class="col-md-12 text-center" style="border:2px dashed #333;height:100px;padding:30px;margin-bottom:30px;">
	            	<h3 class="text-center margin-top-10">
                	<a href="<?php echo get_bloginfo('wpurl').'/wp-admin/widgets.php'; ?> ">Click here to add footer top widgets</a>
                	</h3>
                </div>
            </div>
                <!-- Time to add some widgets! -->
            <?php endif; ?>

            <!-- End Footer Top! -->
 <?php 
 get_footer();
  ?>