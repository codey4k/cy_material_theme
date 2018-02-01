<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Codey4k</title>
        <?php wp_head() ?>
    </head>
    <body>
        <div class="fab-container"></div>
        <div class="wrap">
    <!-- Menu bar-->
            <div class="menu" id="menu">
                <div class="menu__container">
                    <a href="<?php echo home_url('/'); ?>">
                        <img src="<?php echo get_stylesheet_directory_uri()?>/images/y4k.png" alt="logo y4k" class="menu__logo" />
                    </a>
                    <div class="menu__icon"></div>
                    
                    <ul class="menu__nav">
                        <li class="menu__item">Home</li>
                        <li class="menu__item">Article</li>
                        <li class="menu__item">Downloads</li>
                    <ul>
                </div>
            </div>
            
