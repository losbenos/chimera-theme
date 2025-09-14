<?php
/**
 * Title: Linktree
 * Slug: chimera-master/linktree
 * Description: 
 * Categories: chimera-greyd
 * Keywords: 
 * Viewport Width: 600
 * Block Types: 
 * Post Types: 
 * Inserter: true
 */
?>
<!-- wp:group {"className":"","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"100px","sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-rounded"} -->
<figure class="wp-block-image aligncenter size-full is-resized is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/profile.svg" alt="" style="width:100px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":1,"className":"","fontSize":"x-large"} -->
<h1 class="wp-block-heading has-text-align-center has-x-large-font-size">Jane Doe</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","className":"","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|large"}}}} -->
<p class="has-text-align-center" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--large)">
				<a href="mailto:jane@doe.com">jane@doe.com</a>
			</p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconBackgroundColor":"contrast","iconBackgroundColorValue":"#000","size":"has-normal-icon-size","className":"has-icon-base-color","style":{"spacing":{"blockGap":"10px","margin":{"bottom":"var:preset|spacing|medium"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links has-normal-icon-size has-icon-background-color has-icon-base-color" style="margin-bottom:var(--wp--preset--spacing--medium)"><!-- wp:social-link {"url":"#","service":"instagram","className":""} /-->

<!-- wp:social-link {"url":"#","service":"twitter","className":""} /-->

<!-- wp:social-link {"url":"#","service":"linkedin","className":""} /-->

<!-- wp:social-link {"url":"#","service":"facebook","className":""} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"","style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|small"},"blockGap":{"top":"0.5rem"}}},"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--small)"><!-- wp:button {"className":"has-custom-width wp-block-button__width-100"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button">Read my latest article</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"has-custom-width wp-block-button__width-100"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button">Listen to my latest interview</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"has-custom-width wp-block-button__width-100 is-style-fill"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-fill"><a class="wp-block-button__link wp-element-button">Visit my webshop</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"has-custom-width wp-block-button__width-100 is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button">Become a Patreon</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"has-custom-width wp-block-button__width-100 is-style-outline"} -->
<div class="wp-block-button has-custom-width wp-block-button__width-100 is-style-outline"><a class="wp-block-button__link wp-element-button">Make a donation</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
