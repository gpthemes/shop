<?php
/**
 * The template for displaying 404 pages (not found)
 */

get_header(); ?>

<div class="row margin-vert-30">
    <div class="col-md-12">
        <div class="error-404-page text-center">
            <h2>404!</h2>
            <h3>The page can not be found</h3>
            <p>The page you are looking for might have been removed, <br> had its name changed or is temporarily unavailable.</p>
            <?php get_search_form(); ?>
        </div>
    </div>
</div>

<?php get_footer();