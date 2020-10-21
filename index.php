<?php get_header(); ?>
    <main class="container">
        <section class="mt-4">
            
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array('paged' => $paged );
        query_posts($args);

        if(have_posts()) : while ( have_posts() ) : the_post(); ?>
            <article class="post row mb-3">
                <div class="col-3">
                    <div class="thum">
                        <?php if(has_post_thumbnail()) : the_post_thumbnail();
                            else : ?><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                <img alt="<?php the_title_attribute(); ?>" src="<?php echo get_template_directory_uri(); ?>/assets/default.jpg" />
                                    </a>
                        <?php
                            endif;
                        ?>
                    </div>
                </div>
                <div class="post-info col-9">
                    <h4><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
                    <?php the_excerpt(); ?>
                    <p>
                    <?php echo get_the_date(); ?> </p>
                </div>
            </article>
        <?php endwhile; ?>
        <div class="clearfix"></div>
        <div class="nav-previous alignleft"><?php previous_posts_link( __('Older posts','sarvis') ); ?></div>
        <div class="nav-next alignright"><?php next_posts_link( __('Newer posts', 'sarvis') ); ?></div>
        <?php else : ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>
        </section>
    </main>
<?php get_footer(); ?>