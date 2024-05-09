<?php

/**
 * Title: Hero Content Default
 * Slug: bohoma/hero-content-default
 * Categories: bohoma, page
 */
?>


<!-- wp:group {"align":"full","className":"hero-section wp-block-section","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull hero-section wp-block-section">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"100%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:100%">
			<!-- wp:image {"id":941,"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full">
				<img src="<?php echo esc_url( get_parent_theme_file_uri( '/resource/images/frontpage-hero.jpg' ) ); ?>" alt="" class="wp-image-941"/>
			</figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center","width":"100%","className":"hero-content"} -->
		<div class="wp-block-column is-vertically-aligned-center hero-content" style="flex-basis:100%">
			<!-- wp:heading {"textAlign":"left","fontSize":"large-section-title"} -->
			<h2 class="wp-block-heading has-text-align-left has-large-section-title-font-size"><?php esc_html_e ( 'Our Story', 'bohoma' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p><?php esc_html_e ( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean mattis dui ac dui placerat viverra. Pellentesque tincidunt mollis orci et dignissim. Integer non nisl sapien. In sed eleifend nulla, ut vehicula tortor. Maecenas nec quam nec arcu rutrum ornare. Nam justo massa, egestas vel quam vel, tincidunt aliquam nulla. Quisque ullamcorper, mauris eget porttitor pretium, risus leo fermentum libero, sed viverra libero orci at ligula. Curabitur ultrices, libero at elementum ornare, nisl sapien maximus orci, quis venenatis quam eros ac diam.', 'bohoma' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button">
					<a class="wp-block-button__link wp-element-button" href="#"><?php esc_html_e ( 'Read More', 'bohoma' ); ?></a>
				</div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->