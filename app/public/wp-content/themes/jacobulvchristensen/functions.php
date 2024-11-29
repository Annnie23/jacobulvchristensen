<?php
function jacobulvchristensen_enqueue_scripts() {
    wp_enqueue_style("theme-style", get_template_directory_uri() . "/style.css");
}
add_action("wp_enqueue_scripts", "jacobulvchristensen_enqueue_scripts");



function jacobulvchristensen_remove_gutenberg() {
    remove_post_type_support("page", "editor");
    remove_post_type_support("post", "editor");
    remove_post_type_support("service", "editor");
}

add_action("init", "jacobulvchristensen_remove_gutenberg");

function jacobulvchristensen_register_menus() {
    register_nav_menus( array(
        'main_menu' => 'Main Navigation Menu',
    ) );
}
add_action( 'after_setup_theme', 'jacobulvchristensen_register_menus' );

function enqueue_bootstrap() {
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_bootstrap');
