<?php
/*
Template Name: Custom Cart Page
*/
get_header();

// Handle form submission
if (isset($_POST['checkout'])) {

    $selectedItems = isset($_POST['selected_items']) ? $_POST['selected_items'] : array();
     $checkoutURL = home_url('/custom-checkout/') . '?selected_items=' . implode(',', $selectedItems);
    wp_redirect($checkoutURL);    
    exit;
}
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <!-- Add your custom cart content here -->
        <form method="post">
            <!-- Display cart items with checkboxes -->
            <?php
            foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
                echo '<label><input type="checkbox" name="selected_items[]" value="' . $cart_item_key . '"> ' . $cart_item['data']->get_name() . '</label><br>';
            }
            ?>
            <input type="submit" name="checkout" value="Proceed to Checkout">
        </form>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
?>
