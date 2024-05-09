<?php
/**
 * Title: Header
 * Slug: online-shopping/header
 * Categories: online-shopping
 *
 * @package Online Shopping
 * @since 1.0.0
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"0.5rem","bottom":"0.5rem","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"backgroundColor":"black","textColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-white-color has-black-background-color has-text-color has-background has-link-color" style="padding-top:0.5rem;padding-right:var(--wp--preset--spacing--40);padding-bottom:0.5rem;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"80%"} -->
<div class="wp-block-column" style="flex-basis:80%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontSize":"14px"}}} -->
<p style="font-size:14px">+38 (050)12 34 567</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"layout":{"selfStretch":"fit","flexSize":null},"typography":{"fontSize":"14px"}}} -->
<p style="font-size:14px">Kathmandu, Nepal</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px"}}} -->
<p style="font-size:14px"><?php echo esc_html__( 'All week 24/7', 'online-shopping' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"20%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%"><!-- wp:social-links {"iconColor":"white","iconColorValue":"#ffffff","openInNewTab":true,"size":"has-small-icon-size","align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":{"top":"0","left":"var:preset|spacing|40"}}},"className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"right"}} -->
<ul class="wp-block-social-links aligncenter has-small-icon-size has-icon-color is-style-logos-only" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><!-- wp:social-link {"url":"facebook.com","service":"facebook"} /-->

<!-- wp:social-link {"url":"instagram.com","service":"instagram"} /-->

<!-- wp:social-link {"url":"twitter.com","service":"twitter"} /-->

<!-- wp:social-link {"url":"pinterest.com","service":"pinterest"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"className":"wb-header-wrapper","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wb-header-wrapper" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:site-title {"style":{"typography":{"fontSize":"32px","fontStyle":"normal","fontWeight":"800"}},"fontFamily":"hind"} /-->

<!-- wp:navigation {"style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"700","lineHeight":"1"},"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"blockGap":"8px"}}} /-->

<!-- wp:group {"style":{"typography":{"lineHeight":"1"},"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"right"}} -->
<div class="wp-block-group" style="line-height:1">

<?php
if ( ! function_exists( 'is_woocommerce_activated' ) ) {
	if ( class_exists( 'woocommerce' ) ) {
		?>
<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search products…","buttonText":"Search","buttonPosition":"button-only","buttonUseIcon":true,"query":{"post_type":"product"},"isSearchFieldHidden":true} /-->
		<?php
	}
}
?>
<!-- wp:paragraph {"style":{"typography":{"fontSize":"28px"},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"0","left":"0","right":"0"}}},"className":"is-style-admin-icon"} -->
<p class="is-style-admin-icon" style="padding-top:var(--wp--preset--spacing--20);padding-right:0;padding-bottom:0;padding-left:0;font-size:28px"></p>
<!-- /wp:paragraph -->
<?php
if ( ! function_exists( 'is_woocommerce_activated' ) ) {
	if ( class_exists( 'woocommerce' ) ) {
		?>
<!-- wp:woocommerce/mini-cart {"miniCartIcon":"bag-alt","style":{"typography":{"fontSize":"17px"}}} /-->
		<?php
	}
}
?>
</div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->