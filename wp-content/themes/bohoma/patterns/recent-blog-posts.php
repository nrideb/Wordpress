<?php

/**
 * Title: Recent Blog Posts
 * Slug: bohoma/recent-blog-posts
 * Categories: bohoma, page
 */
?>

<!-- wp:group {"align":"full","className":"wp-block-section wp-block-recent-blog-posts","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull wp-block-section wp-block-recent-blog-posts"><!-- wp:group {"align":"wide","className":"alignwide wp-block-group-heading"} -->
	<div class="wp-block-group alignwide wp-block-group-heading"><!-- wp:heading {"textAlign":"center","fontSize":"product-heading"} -->
		<h2 class="wp-block-heading has-text-align-center has-product-heading-font-size">Recent Posts</h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"wp-block-group-content"} -->
	<div class="wp-block-group wp-block-group-content"><!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"align":"wide","layout":{"type":"constrained"}} -->
		<div class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|80"}},"layout":{"type":"constrained"}} -->
			<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","align":"wide","style":{"spacing":{"margin":{"bottom":"0"}}}} /-->

			<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
			<div class="wp-block-group alignwide has-secondary-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)"><!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"right":"0px","bottom":"0px","left":"0px","top":"0px"}},"typography":{"lineHeight":"1.41"}}} /-->

				<!-- wp:group {"style":{"spacing":{"margin":{"top":"14px","bottom":"0"}}},"className":"wp-block-post-meta","layout":{"type":"flex","allowOrientation":false}} -->
				<div class="wp-block-group wp-block-post-meta" style="margin-top:14px;margin-bottom:0">
					<!-- wp:post-date {"isLink":true} /-->

					<!-- wp:post-author {"showAvatar":false,"isLink":true} /-->

					<!-- wp:post-terms {"term":"category"} /-->
				</div>
				<!-- /wp:group -->

				<!-- wp:post-excerpt {"moreText":"Read More","style":{"spacing":{"margin":{"top":"28px"}}}} /-->
			</div>
			<!-- /wp:group -->
			<!-- /wp:post-template -->

			<!-- wp:query-pagination {"align":"full","layout":{"type":"flex","justifyContent":"center"}} -->
			<!-- wp:query-pagination-previous {"fontSize":"small"} /-->

			<!-- wp:query-pagination-next {"fontSize":"small"} /-->
			<!-- /wp:query-pagination -->
		</div>
		<!-- /wp:query -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
