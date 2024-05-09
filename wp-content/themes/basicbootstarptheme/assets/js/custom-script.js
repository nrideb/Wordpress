jQuery(document).ready(function($) {
    // Handle checkout button click event
    $('.checkout-button').on('click', function(e) {
        e.preventDefault();

        // Get the selected item keys
        var selectedItems = $('input[name="cart_item_checkbox[]"]:checked').map(function() {
            return $(this).val();
        }).get();

        // Send AJAX request to update cart data
        $.ajax({
            url: ajax_object.ajax_url, // AJAX URL
            type: 'POST',
            data: {
                action: 'update_cart_data', // Custom AJAX action
                selected_items: selectedItems // Selected item keys
            },
            success: function(response) {
                // Redirect to checkout page after updating cart data
                window.location.href = '<?php echo esc_url(wc_get_checkout_url()); ?>';
            },
            error: function (error) {
                console.log("here");
                console.log(error);
            }
        });
    });
});
