<?php
/**
 * Title: Subscribe Us
 * Slug: online-shopping/subscribe-us
 * Categories: online-shopping
 *
 * @package Online Shopping
 * @since 1.0.0
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"backgroundColor":"secondary-bg","layout":{"type":"constrained"},"metadata":{"name":"Subscribe"}} -->
<div class="wp-block-group has-secondary-bg-background-color has-background" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"border":{"radius":"8px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="border-radius:8px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:image {"id":587,"width":"304px","height":"auto","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() );?>/assets/images/image5.png" alt="" class="wp-image-587" style="width:304px;height:auto"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"60%","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|70","right":"var:preset|spacing|70"},"blockGap":"0"}},"backgroundColor":"white"} -->
<div class="wp-block-column is-vertically-aligned-center has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--70);flex-basis:60%"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}}},"textColor":"black"} -->
<p class="has-text-align-center has-black-color has-text-color has-link-color"><?php echo esc_html__( 'SPECIAL OFFER', 'online-shopping' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}}},"textColor":"black"} -->
<h2 class="wp-block-heading has-text-align-center has-black-color has-text-color has-link-color"><?php echo esc_html__( 'SUBSCRIBE', 'online-shopping' ); ?><br><?php echo esc_html__( 'AND', 'online-shopping' ); ?> <mark style="background-color:rgba(0, 0, 0, 0);color:#f90000" class="has-inline-color"><?php echo esc_html__( 'GET 10% OFF', 'online-shopping' ); ?></mark></h2>
<!-- /wp:heading -->

<?php
if (function_exists('_mc4wp_load_plugin')) {
    ?>
    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group">
        <!-- wp:shortcode -->
        [mc4wp_form id=594]
        <!-- /wp:shortcode -->
    </div>
    <!-- /wp:group -->
    <?php
} 
?>
</div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->