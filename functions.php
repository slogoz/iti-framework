<?php
function iti_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'iti_theme_setup');

function iti_enqueue_scripts() {
    wp_enqueue_style('iti-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'iti_enqueue_scripts');
