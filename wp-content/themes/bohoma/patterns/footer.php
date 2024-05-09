<?php

/**
 * Title: Footer
 * Slug: bohoma/footer
 * Categories: bohoma, footer
 */
?>

<!-- wp:group {"align":"full","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull"><!-- wp:group {"align":"full","className":"wp-block-footer  wp-block-site-generator","layout":{"inherit":true,"type":"constrained"}} -->
	<div class="wp-block-group alignfull wp-block-footer wp-block-site-generator"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group alignwide"><!-- wp:group {"align":"wide","style":{"border":{"bottom":{"color":"var:preset|color|border-color","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group alignwide" style="border-bottom-color:var(--wp--preset--color--border-color);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:social-links {"showLabels":true,"style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
				<ul class="wp-block-social-links has-visible-labels is-style-logos-only" style="padding-top:0;padding-bottom:0"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

					<!-- wp:social-link {"url":"#","service":"twitter"} /-->

					<!-- wp:social-link {"url":"#","service":"linkedin"} /-->

					<!-- wp:social-link {"url":"#","service":"youtube"} /-->

					<!-- wp:social-link {"url":"#","service":"instagram"} /-->
				</ul>
				<!-- /wp:social-links -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--40)"><!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","justifyContent":"center"},"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"600"}},"fontSize":"tiny"} /--></div>
			<!-- /wp:group -->

			<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}}} -->
				<p class="has-text-align-center has-link-color">
				<?php
				printf(
					/* Translators: WordPress link. */
					' Copyright &copy; ' . esc_attr( date_i18n( __( 'Y', 'bohoma' ) ) ) . esc_html__( '. Powered by %s', 'bohoma' ),
					'<a href="' . esc_url( esc_html__( 'https://www.nordicwptheme.com', 'bohoma' ) ) . '" rel="nofollow">' . esc_html__( 'Nordic WP Theme', 'bohoma' ) . '</a>'
				)
				?>
				</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

