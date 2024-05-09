<?php
function load_theme_scripts()
{

    wp_enqueue_style('styles-css', get_template_directory_uri() . '/assets/css/styles.css');
    wp_enqueue_script("fontawsm", "https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js");
    wp_enqueue_script('jquery', get_template_directory_uri() . "/assets/js/jquery.js");
    wp_enqueue_script('script-js', get_template_directory_uri() . "/assets/js/scripts.js");
}

add_action('wp_enqueue_scripts', 'load_theme_scripts');


function menu_set()
{
    register_nav_menus(array(
        'theme_primary_menu' => 'Primary menu sbt',
        'theme_footer_menu' => 'footer menu sbt',
        'theme_sidebar_menu' => 'side menu sbt',
    ));
    add_theme_support('woocommerce', array(
        // "thumnail_image_width"=>50,
        // "thumnail_image_height"=>50,
        // "single_image_width"=>500,
        // "single_image_height"=>500,
        "product_grid" => array()
    ));
    add_theme_support("custom-logo", [
        "height" => 90,
        "width" => 90,
        "flex_height" => true,
        "flex_width" => true,
    ]); 
    add_theme_support("wc-product-gallery-zoom");
    add_theme_support("wc-product-gallery-lightbox");
    add_theme_support("wc-product-gallery-slider");
}
add_action("after_setup_theme", "menu_set");
//add_theme_support("woocommerce");

function nav_li_class_add($classes, $item, $args)
{
    $classes[] = "nav-item";
    return  $classes;
}
add_filter("nav_menu_css_class", "nav_li_class_add", 1, 3);

function nav_link_class_add($classes, $item, $args)
{
    $classes['class'] = "nav-link";
    return  $classes;
}
add_filter("nav_menu_link_attributes", "nav_link_class_add", 1, 3);

add_theme_support('post-thumbnails');

// function add_text($val,$v1){
//     echo $val[0]."+".$v1;
// }
// add_action("show_text","add_text",1,2);



if (class_exists("Woocommerce")) {

    include_once 'include/wc-modifications.php';
}

add_filter('woocommerce_add_to_cart_fragments', 'simple_bootstrap_theme_woocommerce_header_add_to_cart_fragment');

function simple_bootstrap_theme_woocommerce_header_add_to_cart_fragment($fragments)
{
    global $woocommerce;

    ob_start();

?>
    <span class="items-count"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
    <?php
    $fragments['span.items-count'] = ob_get_clean();
    return $fragments;
}

// Add custom validation to include only selected items in the cart
// add_filter('woocommerce_add_to_cart_validation', 'custom_add_to_cart_validation', 10, 3);
// function custom_add_to_cart_validation($passed, $product_id, $quantity) {
//     if (isset($_POST['selected_items'])) {
//         // Convert selected item keys to an array
//         $selected_items = explode(',', $_POST['selected_items']);

//         // Check if the product being added is not in the selected items array
//         if (!in_array($product_id, $selected_items)) {
//             // Remove the product from the cart
//             WC()->cart->remove_cart_item(WC()->cart->generate_cart_id($product_id));
//             WC()->cart->calculate_totals();
//         }
//     }
//     return $passed;
// }

// // Redirect default cart page
// add_filter('woocommerce_cart_redirect_after_error', 'custom_cart_redirect');
// function custom_cart_redirect($url) {
//     return home_url('/custom-cart/'); // Change 'custom-cart' to your actual custom cart page slug
// }

// // Redirect default checkout page
// add_filter('woocommerce_checkout_redirect_after_error', 'custom_checkout_redirect');
// function custom_checkout_redirect($url) {
//     return home_url('/custom-checkout/'); // Change 'custom-checkout' to your actual custom checkout page slug
// }

// Add selected product to checkout on cart update
// Add checkbox field to cart page
// Add checkbox field to cart page
// add_action( 'woocommerce_cart_item_name', 'add_checkbox_to_cart_item', 10, 3 );
// function add_checkbox_to_cart_item( $product_name, $cart_item, $cart_item_key ) {
//     // Get the current product ID
//     $product_id = $cart_item['product_id'];

//     // Add checkbox HTML
//     $product_name .= '<br><label><input type="checkbox" class="add-to-checkout-checkbox" name="add_to_checkout[]" value="' . esc_attr( $product_id ) . '"> Add to checkout</label>';

//     return $product_name;
// }

// Handle AJAX request to add product to checkout
// add_action( 'wp_ajax_add_to_checkout', 'add_to_checkout_ajax_handler' );
// add_action( 'wp_ajax_nopriv_add_to_checkout', 'add_to_checkout_ajax_handler' );

// function add_to_checkout_ajax_handler() {
//     // Verify nonce
//     check_ajax_referer( 'add_to_checkout_nonce', 'nonce' );

//     // Get the product ID from the AJAX request
//     $product_id = isset( $_POST['product_id'] ) ? intval( $_POST['product_id'] ) : 0;

//     // Validate the product ID
//     if ( $product_id <= 0 ) {
//         wp_send_json_error( 'Invalid product ID' );
//     }

//     // Add the product to checkout
//     WC()->cart->add_to_cart( $product_id );

//     // Send success response
//     wp_send_json_success( 'Product added to checkout' );
// }


// add_action('wp_ajax_store_product_in_session', 'store_product_in_session_ajax');
// add_action('wp_ajax_nopriv_store_product_in_session', 'store_product_in_session_ajax');
// function store_product_in_session_ajax() {
//     // Start session if not already started
//     if (!session_id()) {
//         session_start();

//     }

//     // Get product ID from AJAX request
//     $product_id = isset($_POST['product_id']) ? $_POST['product_id'] : '';

//     // Store product ID in session
//     if (!empty($product_id)) {
//         $_SESSION['stored_product_ids'][] = $product_id;
//         wp_send_json_success();
//     } else {
//         wp_send_json_error('Product ID is empty');
//     }
// }

// add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');
// function enqueue_custom_scripts() {
//     // Enqueue your JavaScript file
//     wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/custom-script.js', array('jquery'), '1.0', true);

//     // Localize AJAX URL
//     wp_localize_script('custom-script', 'ajax_object', array('ajax_url' => admin_url('admin-ajax.php')));
// }

// Step 1: Add Checkbox to Cart Page
// add_action('woocommerce_cart_item_name', 'add_custom_checkbox_to_cart', 10, 3);
// function add_custom_checkbox_to_cart($product_name, $cart_item, $cart_item_key) {
//     // Add a checkbox before each item
//     return '<input type="checkbox" class="item-checkbox" data-product-id="' . $cart_item['product_id'] . '">' . $product_name;
// }

// Step 2: JavaScript Functionality
add_action('wp_ajax_update_selected_items_session', 'update_selected_items_session');
add_action('wp_ajax_nopriv_update_selected_items_session', 'update_selected_items_session');
function update_selected_items_session() {
    // if (!session_id()) {
    //     session_start();
    //     // session_destroy();
    // }

    // if (isset($_POST['selected_items'])) {
    //     $_SESSION['selected_items'] = $_POST['selected_items'];
        
    // }
    update_option('selected_items',$_POST['selected_items']);
    
    // Calculate subtotal based on selected items
    $subtotal = calculate_subtotal($_SESSION['selected_items']);
    
    // Return updated subtotal
    $response = array(
        'cart_subtotal' => wc_price($subtotal)
    );
    
    echo json_encode($response);
    wp_die();
}

// Function to calculate subtotal based on selected items
function calculate_subtotal($selected_items) {
    $subtotal = 0;
    foreach ($selected_items as $item_id) {
        $product = wc_get_product($item_id);
        $subtotal += $product->get_price();
    }
    return $subtotal;
}

// add_action('woocommerce_before_cart', 'store_session_data_in_cart');
// function store_session_data_in_cart() {
//     // Start the session if not already started
//     if (!session_id()) {
//         session_start();
//     }

//     // Store the data you want to pass to the checkout page in session variables
//     $_SESSION['cart_session_data'] = array(
//         // Example: Store the selected items
//         'selected_items' => $_POST['selected_items'] ?? array(),
//     );
// }




add_action('woocommerce_cart_totals_before_shipping', 'add_hidden_input_fields_to_cart');
function add_hidden_input_fields_to_cart() {
    // Retrieve the selected items from the session
    // $selected_items = $_SESSION['cart_session_data']['selected_items'] ?? array();
    
    $selected_items = get_option('selected_items');
    // echo "<pre>";
    // print_r($selected_items);die;
    // Output hidden input fields for each selected item
    foreach ($selected_items as $item_id) {
        echo '<input type="hidden" name="selected_items[]" value="' . esc_attr($item_id) . '">';
    }


}

add_action('woocommerce_before_checkout_form', 'display_selected_items_on_checkout',1,1);
function display_selected_items_on_checkout() {
    global $woocommerce;
    $items = $woocommerce->cart->get_cart();
        $data=array();
       
        foreach($items as $item => $values) { 
            $_product =  wc_get_product( $values['data']->get_id()); 
            // echo "<b>".$_product->get_title().'</b>  <br> Quantity: '.$values['quantity'].'<br>'; 
            // echo "<b>".$_product->get_id().'</b> '; 
            // $price = get_post_meta($values['product_id'] , '_price', true);
            // echo "  Price: ".$price."<br>";

            // $data1['id'][$item]=$_product->get_id();
            // // $data['name']=$_product->get_id();
            // $data2['quntity'][$item]=$values['quantity'];

            $data[$_product->get_id()]=$values['quantity'];
        } 
        // foreach()
        // echo "<pre>";
        // print_r($data);die;
        // session_start();
        // $_SESSION['cart_items'] = $data;
        update_option('cart_items',$data);
        
    // Retrieve the selected items from the hidden input fields
    // $selected_items = isset($_SESSION['selected_items']) ? array_map('intval', $_SESSION['selected_items']) : array();
    $selected_items = (!empty(get_option('selected_items'))) ? get_option('selected_items') : array();

    // echo "<pre>";
    // print_r($selected_items);

    // Display the selected items
    if (!empty($selected_items)) {
        WC()->cart->empty_cart();
         foreach ($selected_items as $item_id) {
            $product = wc_get_product($item_id);
            if ($product) {
                
                WC()->cart->add_to_cart( $item_id ,get_option('cart_items')[$item_id]);
                
                
            }
        }

        // echo '<h2>Selected Items:</h2>';
        // echo '<ul>';
        // foreach ($selected_items as $item_id) {
        //     $product = wc_get_product($item_id);
        //     if ($product) {
                
        //         // WC()->cart->add_to_cart( $item_id );
        //         echo '<li>' . $product->get_name() . '</li>';
        //     }
        // }
        // echo '</ul>';
    }
}


// // Function to store selected items in a transient
// function store_session_data_in_transient() {
//     if (!session_id()) {
//         session_start();
//     }

//     // Retrieve the session data
//     $selected_items = $_SESSION;

//     // Store the session data in a transient
//     set_transient('selected_items_transient', $selected_items, 60 * 60); // Set the transient expiration time as needed
// }
// add_action('woocommerce_before_cart', 'store_session_data_in_transient');
// if (!session_id()) {
//     session_start();
// }

// Retrieve the session data
// $selected_items = $_SESSION;
// print_r($selected_items);

// function my_custom_function() {
//     // if (!session_id()) {
//     //     session_start();
//     // }
    
//     // Retrieve the session data
//     $selected_items = $_SESSION;
//     return $selected_items;
// }

function simple_bootstrap_theme_load_wp_customizer($wp_customize)
{
/// customizer code

    // adding section
    $wp_customize->add_section("sec_copyright", array(
        "title" => "Copyright Section",
        "description" => "This is a copyright section",
    ));

    // adding settings/field
    $wp_customize->add_setting("set_copyright", array(
        "type" => "theme_mod",
        "default" => "",
        "sanitize_callback" => "sanitize_text_field",
    ));

    // add control
    $wp_customize->add_control("set_copyright", array(
        "label" => "Copyright",
        "description" => "Please fill the copyright text",
        "section" => "sec_copyright",
        "type" => "text",
    ));

    /* section of new arrival / popularity control limit and columns */

    // adding section
    $wp_customize->add_section("sec_product_panel", array(
        "title" => "Product Panel Limit & Columns",
        "description" => "This is a section which is going to provide the controls for home page product panels",
    ));

        // adding settings/field
        $wp_customize->add_setting("set_new_arrival_limit", array(
            "type" => "theme_mod",
            "default" => "",
            "sanitize_callback" => "absint",
        ));

        // add control
        $wp_customize->add_control("set_new_arrival_limit", array(
            "label" => "New Arrival - Product Limit",
            "description" => "Please fill provide the limit of new arrival",
            "section" => "sec_product_panel",
            "type" => "number",
        ));

        // adding settings/field
        $wp_customize->add_setting("set_new_arrival_column", array(
            "type" => "theme_mod",
            "default" => "",
            "sanitize_callback" => "absint",
        ));

        // add control
        $wp_customize->add_control("set_new_arrival_column", array(
            "label" => "New Arrival - Product Columns",
            "description" => "Please fill provide the columns of new arrival",
            "section" => "sec_product_panel",
            "type" => "number",
        ));


        // adding settings/field
        $wp_customize->add_setting("set_popular_limit", array(
            "type" => "theme_mod",
            "default" => "",
            "sanitize_callback" => "absint",
        ));

        // add control
        $wp_customize->add_control("set_popular_limit", array(
            "label" => "Popularity - Product Limit",
            "description" => "Please fill provide the limit of popularity",
            "section" => "sec_product_panel",
            "type" => "number",
        ));

        // adding settings/field
        $wp_customize->add_setting("set_popular_columns", array(
            "type" => "theme_mod",
            "default" => "",
            "sanitize_callback" => "absint",
        ));

        // add control
        $wp_customize->add_control("set_popular_columns", array(
            "label" => "Popularity - Product Columns",
            "description" => "Please fill provide the columns of popularity",
            "section" => "sec_product_panel",
            "type" => "number",
        ));
}

add_action("customize_register", "simple_bootstrap_theme_load_wp_customizer");


add_action( 'init', 'create_custom_post_type' );

function create_custom_post_type() {
 
    $supports = array(
        'title', // post title
        'editor', // post content
        'author', // post author
        'thumbnail', // featured images
        'excerpt', // post excerpt
        'custom-fields', // custom fields
        'comments', // post comments
        'revisions', // post revisions
        'post-formats', // post formats
        );
         
        $labels = array(
        'name' => _x('news', 'plural'),
        'singular_name' => _x('news', 'singular'),
        'menu_name' => _x('news', 'admin menu'),
        'name_admin_bar' => _x('news', 'admin bar'),
        'add_new' => _x('Add New', 'add new'),
        'add_new_item' => __('Add New news'),
        'new_item' => __('New news'),
        'edit_item' => __('Edit news'),
        'view_item' => __('View news'),
        'all_items' => __('All news'),
        'search_items' => __('Search news'),
        'not_found' => __('No news found.'),
        );
         
        $args = array(
        'supports' => $supports,
        'labels' => $labels,
        'description' => 'Holds our News and specific data',
        'public' => true,
        'taxonomies' => array( 'category', 'post_tag' ),
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'can_export' => true,
        'capability_type' => 'post',
         'show_in_rest' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'news'),
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => 6,
        'menu_icon' => 'dashicons-megaphone',
        );
     
    register_post_type( 'news',$args);
    }





