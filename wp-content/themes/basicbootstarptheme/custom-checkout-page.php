<?php
/*
Template Name: Custom Checkout Page
*/
get_header();

// Handle selected items
if (isset($_GET['selected_items'])) {
    $selectedItems = explode(',', $_GET['selected_items']);

    // Clear existing cart items
    WC()->cart->empty_cart();

    // Add selected items to cart
    foreach ($selectedItems as $item_key) {
        WC()->cart->add_to_cart($item_key);
    }
}
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <!-- Add your custom checkout content here -->
        <section class="woocommerce-checkout">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h2>Checkout</h2>
                        <!-- Add your checkout form here -->
                        <?php
                        // Display the WooCommerce checkout form
                        if (function_exists('woocommerce_checkout')) {
                            woocommerce_checkout();
                        } else {
                            echo '<p>Please enable WooCommerce plugin.</p>';
                        }
                        ?>
                    </div>
                    <div class="col-md-4">
                        <!-- Add any additional checkout information or sidebars here -->
                        <h3>Order Summary</h3>
                        <?php
                        // Display the WooCommerce order summary
                        if (function_exists('woocommerce_order_review')) {
                            woocommerce_order_review();
                        } else {
                            echo '<p>Please enable WooCommerce plugin.</p>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
?>
