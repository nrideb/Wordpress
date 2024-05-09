<?php

/**
 * Title: Footer Default
 * Slug: bohoma/footer-default
 * Categories: bohoma, footer
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0"}}},"backgroundColor":"footer-bg","className":"footer-default","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull footer-default has-footer-bg-background-color has-background" style="margin-top:0"><!-- wp:group {"align":"full","className":"wp-block-footer  wp-block-site-generator","layout":{"inherit":true,"type":"constrained"}} -->
	<div class="wp-block-group alignfull wp-block-footer wp-block-site-generator"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group alignwide"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
			<div class="wp-block-group alignwide" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|gray"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"gray","fontSize":"tiny"} -->
				<p class="has-text-align-center has-gray-color has-text-color has-link-color has-tiny-font-size">
					<?php printf( 
						_x( 'Copyright &copy; %1$s %2$s', '1: Year, 2: Site Title with home URL, 3: Privacy Policy Link', 'bohoma' ),
						esc_attr( date_i18n( __( 'Y', 'bohoma') ) ),
						'<a href="' . esc_url( home_url( '/' ) ) . '">' . esc_attr( get_bloginfo( 'name', 'display') ) . '</a><span class="sep"> </span>  by <a target="_blank" href="https://www.nordicwptheme.com">Nordic WP Theme</a>'
					); ?> </p>
				<!-- /wp:paragraph -->

				<!-- wp:navigation {"overlayMenu":"never","style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontSize":"tiny"} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
