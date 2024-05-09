<?php
/**
 * Title: Newsletter
 * Slug: woo-booster/newsletter
 * Categories: woo-booster
 *
 * @package Woo Booster
 * @since 1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"border":{"radius":"8px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"backgroundColor":"tertiary","layout":{"type":"default"}} -->
<div class="wp-block-group has-tertiary-background-color has-background" style="border-radius:8px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|70","right":"var:preset|spacing|70"}}}} -->
<div class="wp-block-columns" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70)"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"style":{"typography":{"fontSize":"32px","fontStyle":"normal","fontWeight":"700","lineHeight":"1.2"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"fontFamily":"hind"} -->
<h2 class="wp-block-heading has-hind-font-family" style="margin-bottom:var(--wp--preset--spacing--20);font-size:32px;font-style:normal;font-weight:700;line-height:1.2"><?php echo esc_html__( 'Stay in the Loop: Subscribe to Our Newsletter!', 'woo-booster' ); ?></h2>
<!-- /wp:heading -->
<?php
if (class_exists('MC4WP\\Plugin')) {
    ?>
    <!-- wp:shortcode -->
	[mc4wp_form id=136]
	<!-- /wp:shortcode -->
    <?php
}
?>
</div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":181,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["rgb(29, 153, 210)","#f0f0f0"]}}} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() );?>/assets/images/banner.png" alt="" class="wp-image-181"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->