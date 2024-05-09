<?php 
function load_theme_scripts(){
    wp_enqueue_style('theme-css',get_template_directory_uri() . '/assets/css/theme.css');
    wp_enqueue_style('theme-style',get_stylesheet_uri(),array(),'1.0','all');
    wp_enqueue_script('script-js', get_template_directory_uri()."/assets/js/script.js");

}

add_action('wp_enqueue_scripts','load_theme_scripts');
function menu_set() {
    register_nav_menus (array(
        'theme_primary_menu'=>'Primary menu sbt',
        'theme_footer_menu'=>'footer menu sbt',
        'theme_sidebar_menu'=>'side menu sbt',
    ));
}
add_action("after_setup_theme","menu_set");

// register_nav_menus(
//     array('primary-menu'=>'Header Menu')
// ); 


?>