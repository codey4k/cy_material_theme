<?php get_header()?>

<section class="features">
    <div class="features__container">
        <div class="features__bg"></div>
        <h1 class="features__title">Features</h1>
        <p class="features__description">Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
        sed diam nonummy nibh euismod tincidunt ut laoreet dolore
        magna aliquam erat volutpat. 
        </p>
    </div>
</section>


<section class="main">
    <div class="main__container">
        <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
            <article class="post"> <!--wrap article-->
                <!--post title-->
                <div class="">
                    <h2> 
                        <a href="<?php the_excerpt(); ?>"><?php the_title(); ?></a>
                    </h2>
                </div>
                
                <?php
                    echo get_the_post_thumbnail( 
                        $post_id, 
                        'thumbnail', 
                        array('class'=>'post__thumbnail', 'alt'=> get_the_title() )
                    );
                ?>
                
                <div class="post__description">
                    <p><?php the_excerpt(); ?></p>
                </div>
                
            </article>
        <?php endwhile; endif;?>
    </div>
</section>


<?php get_footer()?>