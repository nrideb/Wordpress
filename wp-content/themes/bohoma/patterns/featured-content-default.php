<?php

/**
 * Title: Featured Content Default
 * Slug: bohoma/featured-content-default
 * Categories: bohoma, page
 */
?>

<!-- wp:group {"align":"full","className":"wp-block-section wp-block-feature-content-default","layout":{"inherit":true}} -->
<div class="wp-block-group alignfull wp-block-section wp-block-feature-content-default">
	<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"14px"}},"className":"alignwide wp-block-group-heading"} -->
	<div class="wp-block-group alignwide wp-block-group-heading">

		<!-- wp:heading {"textAlign":"center","fontSize":"product-heading"} -->
		<h2 class="wp-block-heading has-text-align-center has-product-heading-font-size"><?php esc_html_e('Latest News', 'bohoma'); ?></h2>
		<!-- /wp:heading -->

	</div>
	<!-- /wp:group -->
	<!-- wp:group {"align":"wide","className":"wp-block-group-content"} -->
	<div class="wp-block-group alignwide wp-block-group-content">
		<!-- wp:columns {"align":"wide"} -->
		<div class="wp-block-columns alignwide">
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"className":"wp-block-post-group"} -->
				<div class="wp-block-group wp-block-post-group">
					<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_parent_theme_file_uri('/resource/images/bohoma-featured-1.jpg')); ?>" alt="" class="" /></figure>
					<!-- /wp:image -->
					<!-- wp:group {"className":"wp-block-entry-content"} -->
					<div class="wp-block-group wp-block-entry-content">
						<!-- wp:heading {"fontSize":"content-heading"} -->
						<h2 class="has-content-heading-font-size"><?php esc_html_e('Gift For Her', 'bohoma'); ?></h2>
						<!-- /wp:heading -->
						<!-- wp:paragraph -->
						<p><?php esc_html_e('Nunc ac placerat elit. Cras blandit mauris quis erat porttitor, a laoreet ligula fermentum. Proin.', 'bohoma'); ?></p>
						<!-- /wp:paragraph -->
						<!-- wp:buttons -->
						<div class="wp-block-buttons">
							<!-- wp:button {"className":"is-style-outline is-style-only-line"} -->
							<div class="wp-block-button is-style-outline is-style-only-line">
								<a class="wp-block-button__link"><?php esc_html_e('Read More', 'bohoma'); ?></a>
							</div>
							<!-- /wp:button -->
						</div>
						<!-- /wp:buttons -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"className":"wp-block-post-group"} -->
				<div class="wp-block-group wp-block-post-group">
					<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_parent_theme_file_uri('/resource/images/bohoma-featured-2.jpg')); ?>" alt="" class="" /></figure>
					<!-- /wp:image -->
					<!-- wp:group {"className":"wp-block-entry-content"} -->
					<div class="wp-block-group wp-block-entry-content">
						<!-- wp:heading {"fontSize":"content-heading"} -->
						<h2 class="has-content-heading-font-size"><?php esc_html_e('Gift For Him', 'bohoma'); ?></h2>
						<!-- /wp:heading -->
						<!-- wp:paragraph -->
						<p><?php esc_html_e('At augue nulla. Morbi elit nisi, consequat id ligula ac, luctus ultricies mauris. Pellentesque nunc.', 'bohoma'); ?></p>
						<!-- /wp:paragraph -->
						<!-- wp:buttons -->
						<div class="wp-block-buttons">
							<!-- wp:button {"className":"is-style-outline is-style-only-line"} -->
							<div class="wp-block-button is-style-outline is-style-only-line">
								<a class="wp-block-button__link"><?php esc_html_e('Read More', 'bohoma'); ?></a>
							</div>
							<!-- /wp:button -->
						</div>
						<!-- /wp:buttons -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"className":"wp-block-post-group"} -->
				<div class="wp-block-group wp-block-post-group">
					<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
					<figure class="wp-block-image size-full"><img src="<?php echo esc_url(get_parent_theme_file_uri('/resource/images/bohoma-featured-3.jpg')); ?>" alt="" class="" /></figure>
					<!-- /wp:image -->
					<!-- wp:group {"className":"wp-block-entry-content"} -->
					<div class="wp-block-group wp-block-entry-content">
						<!-- wp:heading {"fontSize":"content-heading"} -->
						<h2 class="has-content-heading-font-size"><?php esc_html_e('Special Offer', 'bohoma'); ?></h2>
						<!-- /wp:heading -->
						<!-- wp:paragraph -->
						<p><?php esc_html_e('Tortor, efficitur quis viverra vel, posuere eget purus. Morbi vitae ex nec sapien posuere interdum.', 'bohoma'); ?></p>
						<!-- /wp:paragraph -->
						<!-- wp:buttons -->
						<div class="wp-block-buttons">
							<!-- wp:button {"className":"is-style-outline is-style-only-line"} -->
							<div class="wp-block-button is-style-outline is-style-only-line">
								<a class="wp-block-button__link"><?php esc_html_e('Read More', 'bohoma'); ?></a>
							</div>
							<!-- /wp:button -->
						</div>
						<!-- /wp:buttons -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
