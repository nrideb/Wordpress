<?php
/**
 * Title: Footer
 * Slug: blockstarter/footer
 * Categories: blockstarter
 * Inserter: no
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small"},"blockGap":"var:preset|spacing|x-large"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"backgroundColor":"footer","className":"site-footer","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull site-footer has-footer-background-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|x-large","left":"var:preset|spacing|x-large"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">
				<!-- wp:image {"align":"left","id":2093,"width":32,"height":32,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"unset"}}} -->
				<figure class="wp-block-image alignleft size-full is-resized">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo-white.png" alt="" class="wp-image-2093" width="32" height="32"/>
				</figure>
				<!-- /wp:image -->
				<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"white"} -->
				<p class="has-white-color has-text-color" style="font-style:normal;font-weight:600">
					<?php esc_html_e( 'Blockstarter', 'blockstarter' ); ?>
				</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
			<!-- wp:paragraph {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|x-small"}}},"textColor":"white","fontSize":"small"} -->
			<p class="has-white-color has-text-color has-small-font-size" style="padding-bottom:var(--wp--preset--spacing--x-small)">
				<?php esc_html_e( 'Easily create beautiful, fully-customizable websites with the new WordPress Site Editor and the Blockstarter theme. No coding skills required. Download Blockstarter for free today!', 'blockstarter' ); ?>
			</p>
			<!-- /wp:paragraph -->
			<!-- wp:social-links {"iconColor":"white","iconColorValue":"#fff","style":{"spacing":{"blockGap":{"top":"24px","left":"24px"}}},"className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"left"}} -->
			<ul class="wp-block-social-links has-icon-color is-style-logos-only">
				<!-- wp:social-link {"url":"#","service":"facebook"} /-->
				<!-- wp:social-link {"url":"#","service":"linkedin"} /-->
				<!-- wp:social-link {"url":"#","service":"instagram"} /-->
				<!-- wp:social-link {"url":"#","service":"twitter"} /-->
			</ul>
			<!-- /wp:social-links -->
			<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|small","top":"var:preset|spacing|x-small"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--small)">
				<!-- wp:search {"label":"","placeholder":"Search here..","width":null,"widthUnit":"%","buttonText":"Search","buttonUseIcon":true} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:columns -->
			<div class="wp-block-columns">
				<!-- wp:column {"textColor":"white"} -->
				<div class="wp-block-column has-white-color has-text-color">
					<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
					<p style="font-style:normal;font-weight:600">
						<?php esc_html_e( 'Company', 'blockstarter' ); ?>
					</p>
					<!-- /wp:paragraph -->
					<!-- wp:group {"style":{"spacing":{"blockGap":"24px"}},"textColor":"main-accent","layout":{"type":"constrained"},"fontSize":"small"} -->
					<div class="wp-block-group has-main-accent-color has-text-color has-small-font-size">
						<!-- wp:paragraph -->
						<p><a href="#"><?php esc_html_e( 'About', 'blockstarter' ); ?></a></p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph -->
						<p><a href="#"><?php esc_html_e( 'Careers', 'blockstarter' ); ?></a></p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph -->
						<p><a href="#"><?php esc_html_e( 'Brand Assets', 'blockstarter' ); ?></a></p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph -->
						<p><a href="#"><?php esc_html_e( 'Contact', 'blockstarter' ); ?></a></p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph -->
						<p><a href="#"><?php esc_html_e( 'Privacy Policy', 'blockstarter' ); ?></a></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"textColor":"white"} -->
				<div class="wp-block-column has-white-color has-text-color">
					<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
					<p style="font-style:normal;font-weight:600">
						<?php esc_html_e( 'Resources', 'blockstarter' ); ?>
					</p>
					<!-- /wp:paragraph -->
					<!-- wp:group {"style":{"spacing":{"blockGap":"24px"}},"textColor":"main-accent","layout":{"type":"constrained"},"fontSize":"small"} -->
					<div class="wp-block-group has-main-accent-color has-text-color has-small-font-size">
						<!-- wp:paragraph -->
						<p><a href="#"><?php esc_html_e( 'Blog', 'blockstarter' ); ?></a></p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph -->
						<p><a href="#"><?php esc_html_e( 'Contact', 'blockstarter' ); ?></a></p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph -->
						<p><a href="#"><?php esc_html_e( 'Support Docs', 'blockstarter' ); ?></a></p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph -->
						<p><a href="#"><?php esc_html_e( 'Get Help', 'blockstarter' ); ?></a></p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph -->
						<p><a href="#"><?php esc_html_e( 'Documentation', 'blockstarter' ); ?></a></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"textColor":"white"} -->
				<div class="wp-block-column has-white-color has-text-color">
					<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}}} -->
					<p style="font-style:normal;font-weight:600">
						<?php esc_html_e( 'Product', 'blockstarter' ); ?>
					</p>
					<!-- /wp:paragraph -->
					<!-- wp:group {"style":{"spacing":{"blockGap":"24px"}},"textColor":"main-accent","layout":{"type":"constrained"},"fontSize":"small"} -->
					<div class="wp-block-group has-main-accent-color has-text-color has-small-font-size">
						<!-- wp:paragraph -->
						<p><a href="#"><?php esc_html_e( 'Features', 'blockstarter' ); ?></a></p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph -->
						<p><a href="#"><?php esc_html_e( 'Pricing', 'blockstarter' ); ?></a></p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph -->
						<p><a href="#"><?php esc_html_e( 'Use Cases', 'blockstarter' ); ?></a></p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph -->
						<p><a href="#"><?php esc_html_e( 'Demo', 'blockstarter' ); ?></a></p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph -->
						<p><a href="#"><?php esc_html_e( 'Case Studies', 'blockstarter' ); ?></a></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
	<!-- wp:group {"align":"wide","textColor":"white"} -->
	<div class="wp-block-group alignwide has-white-color has-text-color">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"},"elements":{"link":{"color":{"text":"var:preset|color|main-accent"}}}},"textColor":"main-accent","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left"}} -->
		<div class="wp-block-group has-main-accent-color has-text-color has-link-color">
			<!-- wp:paragraph {"textColor":"white","fontSize":"small"} -->
			<p class="has-white-color has-text-color has-small-font-size">
				<?php esc_html_e( 'Designed by ', 'blockstarter' ); 
				printf('<a href="%1$s">', 'https://nasiothemes.com');
				esc_html_e( 'Nasio Themes', 'blockstarter' ); ?></a>
			</p>
			<!-- /wp:paragraph -->
			<!-- wp:paragraph {"textColor":"white","fontSize":"small"} -->
			<p class="has-white-color has-text-color has-small-font-size">
				<?php esc_html_e( 'Powered by', 'blockstarter' );?> 
				<a href="https://wordpress.org">
					<?php esc_html_e( 'WordPress', 'blockstarter' );?>
				</a>
			</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
