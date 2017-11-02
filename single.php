<?php get_header(); ?>
    
<?php while( have_posts() ) : the_post(); ?>
    <section class="post__header">
        <?php
            echo get_the_post_thumbnail( 
                $post_id, 
                'full', 
                array('class'=>'post__thumbnail-header', 'alt'=> get_the_title() )
            );
        ?>
        <?php the_title('<h3 class="post__title-header">', '</h3>'); ?>
    </section>
    
    <section class="post__content">
        <div class="post__content-center">
            <div class="post__content-bg">
                <?php the_content(); ?>
            </div>
        </div>
    </section>
    
<?php endwhile;?>
    
<?php get_footer(); ?>