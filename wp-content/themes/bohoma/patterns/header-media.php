<?php

/**
 * Title: Header Media
 * Slug: bohoma/header-media
 * Categories: bohoma, header
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url(get_parent_theme_file_uri('/resource/images/slider01.jpg')); ?>","dimRatio":0,"align":"full","className":"wp-block-custom-header-media wp-block-section wp-block-no-padding"} -->
<div class="wp-block-cover alignfull wp-block-custom-header-media wp-block-section wp-block-no-padding"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url(get_parent_theme_file_uri('/resource/images/slider01.jpg')); ?>" data-object-fit="cover" />
	<div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","layout":{"inherit":true,"type":"constrained"}} -->
		<div class="wp-block-group alignwide"><!-- wp:media-text {"align":"wide","mediaPosition":"right","mediaType":"image","verticalAlignment":"center"} -->
			<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile is-vertically-aligned-center">
				<div class="wp-block-media-text__content"><!-- wp:group {"layout":{"type":"constrained","contentSize":"600px","justifyContent":"left"}} -->
					<div class="wp-block-group"><!-- wp:paragraph {"align":"left","style":{"typography":{"textTransform":"capitalize","fontStyle":"normal","fontWeight":"400","letterSpacing":"0px"},"spacing":{"margin":{"bottom":"7px"}}},"fontSize":"upper-heading"} -->
						<p class="has-text-align-left has-upper-heading-font-size" style="margin-bottom:7px;font-style:normal;font-weight:400;letter-spacing:0px;text-transform:capitalize"><?php esc_html_e('Be Stylish', 'bohoma'); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:heading {"textAlign":"left","style":{"spacing":{"margin":{"bottom":"0","top":"0px"}},"typography":{"lineHeight":1.3}},"fontSize":"huge"} -->
						<h2 class="wp-block-heading has-text-align-left has-huge-font-size" style="margin-top:0px;margin-bottom:0;line-height:1.3"><?php esc_html_e('Be Bohoma!', 'bohoma'); ?></h2>
						<!-- /wp:heading -->

						<!-- wp:paragraph {"align":"left","style":{"typography":{"letterSpacing":"2.1px"},"spacing":{"margin":{"top":"28px"}}},"textColor":"gray","className":"is-style-default"} -->
						<p class="has-text-align-left is-style-default has-gray-color has-text-color" style="margin-top:28px;letter-spacing:2.1px"><?php esc_html_e('Vestibulum velit nulla, feugiat et vehicula sed, dictum quis erat. Nullam non feugiat risus.', 'bohoma'); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"21px"}}}} -->
						<div class="wp-block-buttons" style="margin-top:21px"><!-- wp:button -->
							<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e('Explore Products', 'bohoma'); ?></a></div>
							<!-- /wp:button -->
						</div>
						<!-- /wp:buttons -->
					</div>
					<!-- /wp:group -->
				</div>
				<figure class="wp-block-media-text__media"><img src="" alt="" /></figure>
			</div>
			<!-- /wp:media-text -->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->
