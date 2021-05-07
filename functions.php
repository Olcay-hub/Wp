<?php
function load_stylesheets(){
    wp_enqueue_style('stylesheet', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'load_stylesheets');