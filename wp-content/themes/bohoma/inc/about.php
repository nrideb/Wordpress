<?php
/**
 * Theme About Page
 *
 * @package Bohoma
 * @since 1.0
 */

function bohoma_theme_page_admin_style( $hook ) {
	if ( 'appearance_page_bohoma-theme' === $hook ) {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_enqueue_style(
			'bohoma-theme-admin-style',
			get_theme_file_uri( 'resource/css/about-admin.css' ),
			array(),
			$version_string
		);
	}
}
add_action( 'admin_enqueue_scripts', 'bohoma_theme_page_admin_style' );

/**
 * Add theme page
 */
function bohoma_menu() {
	add_theme_page( esc_html__( 'Bohoma', 'bohoma' ), esc_html__( 'Bohoma', 'bohoma' ), 'edit_theme_options', 'bohoma-theme', 'bohoma_theme_page_display' );
}
add_action( 'admin_menu', 'bohoma_menu' );

/**
 * Display About page
 */
function bohoma_theme_page_display() {
	$theme = wp_get_theme();
	
	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	}
	?>
	
	<div id="welcome-panel" class="welcome-panel">
		<div class="welcome-panel-content">
			<div class="welcome-panel-header">
				<h2><?php echo esc_html( $theme->Name ); ?></h2>
				<p><?php esc_html_e( 'By Nordic WP Theme', 'bohoma' ); ?></p>
			</div>
			
			<div class="welcome-panel-column-container">
				<div class="container-wrap">
					<div class="welcome-panel-column two-columns">
						<!-- <div class="welcome-panel-icon-pages"></div> -->
						<div class="welcome-panel-column-content">
							<h3><?php esc_html_e( 'Welcome to the Bohoma - Premium WordPress Themes', 'bohoma' ); ?></h3>
							<p><?php esc_html_e( 'Bohoma Store, fashion Shop and responsive multipurpose Theme. Bohoma Store is a stylish and modern WordPress theme with an integrated WooCommerce system. The theme is a perfect solution for customers willing to start online fashion shop. Flexible & modern design make it easy to manage the user interface of the website easily without any programming skills and for readers to focus on your content. You can create your own type of design as you like but we have provided One-click demo sample that can be obtained using Elementor. Perfect for any other types of amazing industry. This beautiful and clean code theme is compatible with the latest version of WordPress.', 'bohoma' ); ?></p>
							<a target="_blank" href="https://www.nordicwptheme.com/Documentation/"><?php esc_html_e( 'Theme documentation', 'bohoma' ); ?></a>
						</div>
					</div>
					
					<div class="welcome-panel-column two-columns">
						<div class="welcome-panel-column-content">
							<h3><?php esc_html_e( 'Premium Features - Bohoma Pro', 'bohoma' ); ?></h3>
							<p><?php esc_html_e( 'Including all free features, Bohoma Pro comes with 40+ advanced blocks that enhance & power up the e-commerce website. By seamlessly integrating these blocks with our ready Demo, you have the flexibility to create a wide selection of captivating online store.', 'bohoma' ); ?></p>
							<p><?php esc_html_e( 'Compatible with latest WordPress version', 'bohoma' ); ?></p>
							<p><?php esc_html_e( 'Compatibility with major browsers. Perfect on all device and platforms.', 'bohoma' ); ?></p>
							<p><?php esc_html_e( 'Import demo easily. All contents pages & homepage can be easily set up.', 'bohoma' ); ?></p>
							<p><?php esc_html_e( 'You will get free installation if you request us to install.', 'bohoma' ); ?></p>
							<a target="_blank" class="button green button-primary button-hero green" href="https://www.nordicwptheme.com/product/bohoma-pro-wordpress-theme-for-multipurpose/"><?php esc_html_e( 'Upgrade Bohoma Pro Version', 'bohoma' ); ?></a>
						</div>
					</div>

				</div>
				<div class="sidebar">
					<div class="welcome-panel-column important-links">
					<!-- <div class="welcome-panel-icon-pages"></div> -->
					<div class="welcome-panel-column-content">
						<h3><?php esc_html_e( 'Important Links', 'bohoma' ); ?></h3>
						<a target="_blank" href="<?php echo esc_url( $theme->get( 'ThemeURI' ) ); ?>"><?php esc_html_e( 'About Bohoma', 'bohoma' ); ?></a>
						<a  target="_blank" href="<?php echo esc_url( $theme->get( 'ThemeURI' ) . '/#theme-instructions' ); ?>"><?php esc_html_e( 'Theme Instructions', 'bohoma' ); ?></a>
						<a target="_blank" href="https://nordicwptheme.se/bohoma/"><?php esc_html_e( 'View Demo', 'bohoma' ); ?></a>
					</div>
				</div>

				<div class="welcome-panel-column review">
					<!-- <div class="welcome-panel-icon-pages"></div> -->
					<div class="welcome-panel-column-content">
						<h3><?php esc_html_e( 'Create a Ticket', 'bohoma' ); ?></h3>
						<p><?php esc_html_e( 'We do not provide any support via email, comments, phone call, Skype or any other means.', 'bohoma' ); ?></p>
						<a target="_blank" href="https://www.nordicwptheme.com/contact/" class="button button-primary button-hero" style="text-decoration: none;" target="_blank"><?php esc_html_e( 'Create a Ticket', 'bohoma' ); ?></a>
					</div>
				</div>
				<div class="welcome-panel-column review">
					<!-- <div class="welcome-panel-icon-pages"></div> -->
					<div class="welcome-panel-column-content">
						<h3><?php esc_html_e( 'Leave us a review', 'bohoma' ); ?></h3>
						<p><?php esc_html_e( 'Loved Bohoma Blocks? Feel free to leave your feedback. Your opinion helps us reach more audiences!', 'bohoma' ); ?></p>
						<a target="_blank" href="https://wordpress.org/support/theme/bohoma/reviews/" class="button button-primary button-hero" style="text-decoration: none;" target="_blank"><?php esc_html_e( 'Review', 'bohoma' ); ?></a>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
	<?php
}
