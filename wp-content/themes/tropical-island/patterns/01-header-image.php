<?php
/**
 * Title: Header Image
 * Slug: tropical-island/header-image
 * Categories: tropical-island
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/header-illustration.jpg","id":2257,"dimRatio":40,"overlayColor":"header-image-overlay","minHeightUnit":"vh","isDark":false,"align":"full","className":"hero-image fullheight has-text-primary-color"} -->
<div class="wp-block-cover alignfull is-light hero-image fullheight has-text-primary-color"><span aria-hidden="true" class="wp-block-cover__background has-header-image-overlay-background-color has-background-dim-40 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2257" alt="" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/header-illustration.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"42px"},"spacing":{"margin":{"bottom":"var:preset|spacing|xx-small"}}},"textColor":"text-primary"} -->
<h1 class="wp-block-heading has-text-align-center has-text-primary-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--xx-small);font-size:42px"><?php esc_html_e( 'Tropical Island', 'tropical-island' )?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","placeholder":"<?php esc_html_e( 'Write a description…' , 'tropical-island' )?>","style":{"spacing":{"margin":{"top":"0"}}},"textColor":"text-primary","fontSize":"large"} -->
<p class="has-text-align-center has-text-primary-color has-text-color has-large-font-size" style="margin-top:0"><?php esc_html_e( 'Enjoy the moment while it lasts' , 'tropical-island' )?></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->
