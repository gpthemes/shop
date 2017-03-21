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
  <?php if(is_single()): ?>
  
        <h2><?php the_title(); ?></h2>
  
  <?php else: ?>      
  
        <h2><a href="<?php echo get_permalink( $post->ID ); ?>"><?php the_title(); ?></a></h2>
  
  <?php endif; ?>      
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
        
        <!-- Post Thumbnail -->    
    <?php if( has_post_thumbnail() ): ?>
        
        <div class="col-md-5 pull-left">
            <img class="pull-left" src="<?php the_post_thumbnail_url(); ?>" alt="thumb1">
        </div>
   
    <?php endif; ?>
        <!-- End Post Thumbnail -->
        
        <!-- Post text -->                
        
    <?php if( has_post_thumbnail() ): ?> 
        <div class="col-md-7 pull-left">
    <?php else: ?>
        <div class="col-md-12 pull-left">
    <?php endif; ?>
            <p><?php the_excerpt(); ?></p>
        </div>
        <!-- End Post text -->
        
        </div>
    </div>
    <!-- End Blog Item Body -->
</div>