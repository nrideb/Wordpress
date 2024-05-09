<?php
/**
 * Title: Sidebar
 * Slug: blockstarter/sidebar
 * Categories: blockstarter
 * Inserter: no
 */
?>

<!-- wp:group {"style":{"spacing":{"blockGap":"36px","padding":{"right":"0","left":"0","top":"var:preset|spacing|xx-small","bottom":"var:preset|spacing|x-small"}}},"className":"sidebar","layout":{"type":"default"}} -->
<div class="wp-block-group sidebar" style="padding-top:var(--wp--preset--spacing--xx-small);padding-right:0;padding-bottom:var(--wp--preset--spacing--x-small);padding-left:0"><!-- wp:group {"style":{"spacing":{"blockGap":"16px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontSize":"1.6rem"}},"className":"wp-block-heading"} -->
<h2 class="wp-block-heading" style="font-size:1.6rem"><?php esc_html_e( 'Search the website', 'blockstarter' )?></h2>
<!-- /wp:heading -->

<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search here..","width":null,"widthUnit":"%","buttonText":"Search","buttonUseIcon":true} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"26px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"16px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"style":{"typography":{"fontSize":"1.6rem"}},"className":"wp-block-heading"} -->
<h2 class="wp-block-heading" style="font-size:1.6rem"><?php esc_html_e( 'Useful Links', 'blockstarter' )?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php esc_html_e( 'Links I found useful and wanted to share.', 'blockstarter' )?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"},"style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"spacing":{"blockGap":"var:preset|spacing|10"}},"fontSize":"small"} -->
<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Full site editing in WordPress', 'blockstarter' )?>","url":"#","isTopLevelLink":true,"className":"is-style-arrow-link","style":{"typography":{"textDecoration":"underline"}}} /-->

<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Classic themes vs block themes', 'blockstarter' )?>","url":"#","isTopLevelLink":true,"className":"is-style-arrow-link","style":{"typography":{"textDecoration":"underline"}}} /-->

<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Blockstarter theme documentation', 'blockstarter' )?>","url":"#","isTopLevelLink":true,"className":"is-style-arrow-link","style":{"typography":{"textDecoration":"underline"}}} /-->
<!-- /wp:navigation --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3,"fontSize":"base"} -->
<h3 class="wp-block-heading has-base-font-size"><?php esc_html_e( 'Follow Us', 'blockstarter' )?></h3>
<!-- /wp:heading -->

<!-- wp:social-links {"iconColor":"base","iconColorValue":"#fff","iconBackgroundColor":"primary","iconBackgroundColorValue":"#0b8276","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|small","left":"var:preset|spacing|small"}}},"className":"is-style-default"} -->
<ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-default"><!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /-->

<!-- wp:social-link {"url":"#","service":"chain"} /-->

<!-- wp:social-link {"url":"#","service":"github"} /-->

<!-- wp:social-link {"url":"#","service":"WordPress"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group -->
