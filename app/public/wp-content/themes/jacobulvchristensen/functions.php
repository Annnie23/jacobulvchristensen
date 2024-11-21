<?php
function jacobulvchristensen_load_styles_and_script() {
    wp_enqueue_style("theme-style", get_template_directory_uri() . "/style.css");
}
add_action("wp_enqueue_scripts", "jacobulvchristensen_load_styles_and_script");

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

