<?php
    add_action('wp_enqueue_scrpits', 'theme_name_scripts' );
    function theme_name_scripts(){
        wp_enqueue_style('style', get_stylesheet_uri());
    }
?>