<?php get_header(); ?>

<section class="notfoundpage">
    <div class="error404"><?php _e('404', 'sarvis'); ?></div>
    <div class="notfound"><?php _e('Page Not Found!', 'sarvis'); ?></div>
    <div class="notfoundtext"><?php _e('It looks like nothing was found at this location. Maybe try a search?', 'sarvis'); ?></div>
    <div class="notfoundsearch"><?php get_search_form(); ?></div>
</section>

<?php get_footer(); ?>