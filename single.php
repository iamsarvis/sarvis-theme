<?php get_header(); ?>
<article class="container mt-4">

<?php while ( have_posts() ) : the_post(); ?>
    <h2 class="title"><?php the_title(); ?></h2>
    <div class="info">
        <span class="date"><?php echo get_the_date(); ?></span>
        <span class="author"><?php the_author(); ?></span>
        <span class="category"><?php the_category(', '); ?></span>

    </div>
    <div class="content mt-2 mb-2">
        <?php the_content(); ?>
    </div>

    <div class="clearfix"></div>
<?php the_post_navigation( array(
        'screen_reader_text' => ' ',
        'next_text' => '<span class="screen-reader-text">' . __( 'Next post:', 'sarvis' ) . '</span> ' .
            '<span class="post-title">%title</span>',
        'prev_text' => '<span class="screen-reader-text">' . __( 'Previous post:', 'sarvis' ) . '</span> ' .
            '<span class="post-title">%title</span>',
    ) ); ?>
    <div class="clearfix"></div>
    <?php
    if ( comments_open() || get_comments_number() ) :
        comments_template();
    endif;
endwhile;
?>
</article>
<?php get_footer(); ?>