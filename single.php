<?php get_header(); ?>
    
<?php while( have_posts() ) : the_post(); ?>
    <figure>
        <?php
            echo get_the_post_thumbnail( 
                $post_id, 
                'full', 
                array('class' => 'post__thumbnail', 'alt' => get_the_title() )
            );
        ?>
    </figure>
    <div>
        <?php the_content(); ?>
    </div>
    
<?php endwhile;?>
    
<?php get_footer(); ?>