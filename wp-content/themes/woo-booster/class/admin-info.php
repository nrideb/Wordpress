<?php
/**
 * Theme Admin Info class
 */
class Woo_Booster_Admin_Info {
    /**
     * Initialize the theme
     */
    public function __construct() {
        add_action('admin_menu', array($this, 'add_menu'));
        add_action('after_switch_theme', array($this, 'reset_notification_dismissal'));
        $this->check_rt_easy_builder_freemius();
    }
    
    /**
     * Add theme page
     */
    public function add_menu() {
        add_theme_page(
            esc_html__('Woo Booster Theme', 'woo-booster'),
            esc_html__('Woo Booster Theme', 'woo-booster'),
            'edit_theme_options',
            'woo-booster',
            array($this, 'theme_page_display')
        );
    }

    /**
     * Display About page
     */
    public function theme_page_display() {
        $theme = wp_get_theme();
        include_once dirname( __FILE__ ) . '/../inc/admin/theme-info.php';
    }
    
    /**
     * Check RT Easy Builder Freemius integration and handle actions accordingly
     */
    public function check_rt_easy_builder_freemius() {
        if ( function_exists( 'RT_Easy_Builder\rt_freemius' ) && ! RT_Easy_Builder\rt_freemius()->is_not_paying() ) {
            // RT_Easy_Builder\rt_freemius() function exists and is not paying
            return;
        } else {
            // Add your actions
            add_action( 'admin_notices', array( $this, 'compatible_check' ) );
            add_action( 'admin_footer', array( $this, 'admin_notice_script' ) );
            add_action( 'wp_ajax_dismiss_woo_booster_notification', array( $this, 'dismiss_notification_ajax_handler' ) );
        }
    }

    /**
     * Reset the notification dismissal state when the theme is activated
     */
    public function reset_notification_dismissal() {
        delete_transient('woo_booster_notification_dismissed');
    }

    /**
     * Check compatibility and display notification
     */
    public function compatible_check() {
        // Check if the notification has been dismissed
        $dismissed = get_option('woo_booster_notification_dismissed');
        if (!$dismissed) {
            include_once dirname( __FILE__ ) . '/../inc/admin/theme-notice.php';
        }
    }
    
    /**
     * Dismiss the notification
     */
    public function dismiss_notification() {
        // Set the notification dismissal state permanently
        update_option('woo_booster_notification_dismissed', true);
    }
    
    /**
     * Dismiss the notification via AJAX
     */
    public function dismiss_notification_ajax_handler() {
        check_ajax_referer('dismiss_notification_nonce', 'nonce');
        $this->dismiss_notification();
        echo 'success'; // Add this line to send a response
        wp_die();
    }

    /**
     * Enqueue admin notice script
     */
    public function admin_notice_script() {
        ?>
        <script>
            (function($) {
                $(document).on('click', '.notice.is-dismissible .notice-dismiss', function() {
                    $.ajax({
                        url: ajaxurl,
                        type: 'POST',
                        data: {
                            action: 'dismiss_woo_booster_notification',
                            nonce: '<?php echo wp_create_nonce( 'dismiss_notification_nonce' ); ?>'
                        }
                    });
                });
            })(jQuery);
        </script>
        <?php
    }

}

// Instantiate the Woo Booster Admin Info class
new Woo_Booster_Admin_Info();