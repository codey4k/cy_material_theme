<?php
    
    function styles(){
        wp_enqueue_style('style', get_stylesheet_uri());
        
        
        wp_register_script('mi-script', get_bloginfo('template_directory'). '/js/yakscript.js', array('jquery'), '1', true );
        wp_enqueue_script('mi-script');
        
        // if(!is_admin()){
        //     wp_deregister_script('jquery');
        //     wp_register_script('jquery', "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js", false,'2.2.1',true);
        //     wp_enqueue_script('jquery');
        // }
        
    }
    //hook
    add_action('wp_enqueue_scripts', 'styles');
    
    //personalizando funcion the_excerpt()
    function custom_excerpt_length($length) {
        return 20;
    }
    add_filter('excerpt_length', 'custom_excerpt_length');
    
    //funcion para configurara el final de el extracto
    function excerpt_final($more) {
        return '...';
    }
    add_filter('excerpt_more', 'excerpt_final');
    
    function custom_theme(){
        add_theme_support('post-thumbnails');
    }
    
    add_action('after_setup_theme', 'custom_theme');
    
    
    //desactivar barra admin
    add_filter( 'show_admin_bar', '__return_false' );
?>