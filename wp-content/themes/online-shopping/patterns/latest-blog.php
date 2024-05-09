<?php
/**
 * Title: Latest Blog
 * Slug: online-shopping/latest-blog
 * Categories: online-shopping
 *
 * @package Online Shopping
 * @since 1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"className":"online-shopping-latest-blog-section","layout":{"type":"constrained"},"metadata":{"name":"Latest Blog"}} -->
<div class="wp-block-group online-shopping-latest-blog-section" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"24px"},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}},"fontFamily":"hind"} -->
<h2 class="wp-block-heading has-hind-font-family" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;font-size:24px;font-style:normal;font-weight:700"><?php echo esc_html__( 'LATEST FROM BLOG', 'online-shopping' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"primary","textColor":"base","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-base-color has-primary-background-color has-text-color has-background has-link-color wp-element-button" href="#"><?php echo esc_html__( 'SEE ALL', 'online-shopping' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":59,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","bottom":"30px"}}},"layout":{"inherit":false}} -->
<div class="wp-block-group" style="padding-top:30px;padding-bottom:30px"><!-- wp:post-featured-image /-->

<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"0","top":"5px","right":"5px","left":"26px"},"blockGap":"var:preset|spacing|20"}},"backgroundColor":"base","className":"blog-text","layout":{"type":"constrained"}} -->
<div class="wp-block-group blog-text has-base-background-color has-background" style="padding-top:5px;padding-right:5px;padding-bottom:0;padding-left:26px"><!-- wp:post-title {"isLink":true,"style":{"typography":{"textTransform":"uppercase"}},"fontSize":"medium"} /-->

<!-- wp:post-excerpt /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->