<?php
/**
 * Title: Latest Product
 * Slug: woo-booster/latest-product
 * Categories: woo-booster
 *
 * @package Woo Booster
 * @since 1.0.0
 */

?>
<?php
if ( ! function_exists( 'is_woocommerce_activated' ) ) {
	if ( class_exists( 'woocommerce' ) ) {
		?>
		<!-- wp:group {"style":{"spacing":{"blockGap":"0px","padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"900px","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontSize":"32px","fontStyle":"normal","fontWeight":"700","lineHeight":"1.2"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"fontFamily":"hind"} -->
<h2 class="wp-block-heading has-hind-font-family" style="margin-bottom:var(--wp--preset--spacing--20);font-size:32px;font-style:normal;font-weight:700;line-height:1.2"><?php echo esc_html__( 'Style Haven: Discover Trendsetting Fashion Must-Haves!', 'woo-booster' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"contrast","fontSize":"small","fontFamily":"hind"} -->
<p class="has-text-align-left has-contrast-color has-text-color has-hind-font-family has-small-font-size" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;font-style:normal;font-weight:400"><?php echo esc_html__( 'Discover The Cutting-Edge Features Of Our Newest Products', 'woo-booster' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"46px"} -->
<div style="height:46px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="margin-top:0px"><!-- wp:query {"queryId":0,"query":{"perPage":"8","pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","author":"","search":"","exclude":[],"sticky":"","inherit":false,"__woocommerceAttributes":[],"__woocommerceStockStatus":["instock","onbackorder"]},"namespace":"woocommerce/product-query","layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"typography":{"fontSize":"14px"}},"textColor":"primary","className":"products-block-post-template","layout":{"type":"grid","columnCount":4},"__woocommerceNamespace":"woocommerce/product-query/product-template"} -->
<!-- wp:woocommerce/product-image {"imageSizing":"thumbnail","isDescendentOfQueryLoop":true} /-->

<!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"style":{"spacing":{"margin":{"bottom":"0.75rem","top":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}},"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"black","__woocommerceNamespace":"woocommerce/product-query/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} /-->

<!-- wp:woocommerce/product-rating {"isDescendentOfQueryLoop":true,"textAlign":"center","style":{"spacing":{"margin":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} /-->

<!-- wp:woocommerce/product-button {"textAlign":"center","isDescendentOfQueryLoop":true,"textColor":"white","style":{"elements":{"link":{"color":{"text":"var:preset|color|Theme"},":hover":{"color":{"text":"var:preset|color|white"}}}},"typography":{"fontSize":"14px","lineHeight":"2"}}} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"80px"} -->
<div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->
		<?php
	}
}
?>
