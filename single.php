<?php get_header(); ?>
    
    
    <?php
        while( have_posts() ) : the_post();
            echo 'hola';
        endwhile;
    ?>
    
    
<?php get_footer(); ?>