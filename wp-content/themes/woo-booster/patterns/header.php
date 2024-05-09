<?php
/**
 * Title: Header
 * Slug: woo-booster/header
 * Categories: woo-booster
 *
 * @package Woo Booster
 * @since 1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0.5rem","bottom":"0.5rem","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"Theme","textColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-base-color has-theme-background-color has-text-color has-background" style="padding-top:0.5rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:0.5rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"500","lineHeight":"1.4"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontFamily":"newsreader"} -->
<p class="has-text-align-center has-white-color has-text-color has-link-color has-newsreader-font-family" style="font-size:14px;font-style:normal;font-weight:500;line-height:1.4"><?php echo esc_html__( 'Free express shipping ➺ On all orders $40 + Easy returns', 'woo-booster' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"className":"wb-header-wrapper","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wb-header-wrapper" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:site-title {"style":{"typography":{"fontSize":"32px","fontStyle":"normal","fontWeight":"800"}},"fontFamily":"hind"} /-->

<!-- wp:navigation {"style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"700","lineHeight":"1"},"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"blockGap":"9px"}}} /-->

<!-- wp:group {"style":{"typography":{"lineHeight":"1"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group" style="line-height:1"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search products…","width":100,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-only","buttonUseIcon":true,"query":{"post_type":"product"},"isSearchFieldHidden":true,"backgroundColor":"transparent","textColor":"primary"} /-->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"28px"},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"0","left":"0","right":"0"}}},"className":"is-style-admin-icon"} -->
<p class="is-style-admin-icon" style="padding-top:var(--wp--preset--spacing--20);padding-right:0;padding-bottom:0;padding-left:0;font-size:28px"></p>
<!-- /wp:paragraph -->


<?php
if ( ! function_exists( 'is_woocommerce_activated' ) ) {
	if ( class_exists( 'woocommerce' ) ) {
		?>
		<!-- wp:woocommerce/mini-cart {"miniCartIcon":"bag-alt","hasHiddenPrice":true,"style":{"typography":{"fontSize":"17px"}}} /-->
		<?php
	}
}
?></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->