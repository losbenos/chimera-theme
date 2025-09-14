<?php
/**
 * Title: Layout 2
 * Slug: chimera-master/layout-2
 * Description: 
 * Categories: chimera-layout
 * Keywords: 
 * Viewport Width: 1280
 * Block Types: 
 * Post Types: 
 * Inserter: true
 * Custom Categories: Chimera Layout
 */
register_block_pattern_category( 'chimera-layout', [ 'label' => __( 'Chimera Layout', 'chimera-master' ), 'pm_custom' => true ] );
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","className":"is-style-asterisk"} -->
<h2 class="wp-block-heading has-text-align-center is-style-asterisk">An array of resources</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"layout":{"selfStretch":"fit","flexSize":null}}} -->
<p class="has-text-align-center">Our comprehensive suite of professional services caters to a diverse clientele, ranging from homeowners to commercial developers.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:heading {"level":3,"className":"is-style-asterisk","fontSize":"larger"} -->
<h3 class="wp-block-heading is-style-asterisk has-larger-font-size">Études Architect App</h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-checkmark-list"} -->
<ul class="wp-block-list is-style-checkmark-list"><!-- wp:list-item -->
<li>Collaborate with fellow architects.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Showcase your projects.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Experience the world of architecture.</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"is-style-default"} -->
<figure class="wp-block-image size-large is-style-default"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/16x9.svg" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"is-style-default"} -->
<figure class="wp-block-image size-large is-style-default"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/16x9.svg" alt=""/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:heading {"level":3,"className":"is-style-asterisk","fontSize":"larger"} -->
<h3 class="wp-block-heading is-style-asterisk has-larger-font-size">Études Newsletter</h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-checkmark-list"} -->
<ul class="wp-block-list is-style-checkmark-list"><!-- wp:list-item -->
<li>A world of thought-provoking articles.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Case studies that celebrate architecture.</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Exclusive access to design insights.</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
