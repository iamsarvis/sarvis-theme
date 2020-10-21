<?php get_header(); ?>

<article class="container mt-4">

<?php while ( have_posts() ) : the_post(); ?>
    <h2 class="title"><?php the_title(); ?></h2>
    <div class="content mt-2 mb-2">
        <?php the_content(); ?>
    </div>
<?php endwhile; ?>
</article>

<?php get_footer(); ?>