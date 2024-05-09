<?php
/**
 * Title: Header Image
 * Slug: blockstarter/header-image
 * Categories: blockstarter
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/header-illustration.png","id":2257,"dimRatio":40,"overlayColor":"header-image-overlay","minHeightUnit":"vh","isDark":false,"align":"full","className":"hero-image fullheight"} -->
<div class="wp-block-cover alignfull is-light hero-image fullheight"><span aria-hidden="true" class="wp-block-cover__background has-header-image-overlay-background-color has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2257" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/header-illustration.png" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"42px"},"spacing":{"margin":{"bottom":"var:preset|spacing|xx-small"}}},"textColor":"white"} -->
<h1 class="has-text-align-center has-white-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--xx-small);font-size:42px"><?php esc_html_e( 'Blockstarter ', 'blockstarter' )?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","placeholder":"<?php esc_html_e( 'Write title…' , 'blockstarter' )?>","style":{"spacing":{"margin":{"top":"0"}}},"textColor":"white","fontSize":"large"} -->
<p class="has-text-align-center has-white-color has-text-color has-large-font-size" style="margin-top:0"><?php esc_html_e( 'Experience the magic of full site editing' , 'blockstarter' )?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->
