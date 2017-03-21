
<div class="widget artwork-seachform search" rol="search">
 
    <h3 class="widget-title"&gt;Search Artwork&lt;/h3>
 
    <form class="form-search search-404" role="search" action="<?php echo site_url('/'); ?>" method="get">
 
        <input class="span2 search-query" type="search"  value="<?php echo get_search_query(); ?>" name="s" />
 
        <input type="hidden" name="post_type" value="artworks" /> <!-- // hidden 'your_custom_post_type' value -->
 
        <input class="btn btn-primary" type="submit" alt="Search" value="Search"/>
 
    </form>
 
</div>
