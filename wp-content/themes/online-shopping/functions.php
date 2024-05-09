<?php

if ( ! function_exists( 'online_shopping_support' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * @since 1.0.0
     *
     * @return void
     */

    function online_shopping_support() {

        add_editor_style( get_stylesheet_directory_uri().'/assets/css/editor.css' );
    }

endif;
add_action( 'after_setup_theme', 'online_shopping_support' );

function online_shopping_scripts() {
    // Enqueue parent theme's style
    wp_enqueue_style('online-shopping-parent-style', get_template_directory_uri() . '/style.css');

}
add_action('wp_enqueue_scripts', 'online_shopping_scripts');


/**
 * Registers pattern categories.
 *
 * @since Online Shopping 1.0.0
 *
 * @return void
 */
function online_shopping_register_pattern_category()
{

    $patterns = array();

    $block_pattern_categories = array(
        'online-shopping' => array('label' => __('Online Shopping Patterns', 'online-shopping'))
    );

    $block_pattern_categories = apply_filters('online_shopping_block_pattern_categories', $block_pattern_categories);

    foreach ($block_pattern_categories as $name => $properties) {
        if (!WP_Block_Pattern_Categories_Registry::get_instance()->is_registered($name)) {
            register_block_pattern_category($name, $properties);
        }
    }
}
add_action('init', 'online_shopping_register_pattern_category', 9);

