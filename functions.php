<?php
    
    function styles(){
        wp_enqueue_style('style', get_stylesheet_uri());
    }
    //hook
    add_action('wp_enqueue_scripts', 'styles');
    
    function custom_theme(){
        add_theme_support('post-thumbnails');
    }
    
    add_action('after_setup_theme', 'custom_theme');
    
    
    //desactivar barra admin
    add_filter( 'show_admin_bar', '__return_false' );
?>