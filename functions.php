<?php
    
    function styles(){
        wp_enqueue_style('style', get_stylesheet_uri());
    }
    //hook
    add_action('wp_enqueue_scripts', 'styles');
?>