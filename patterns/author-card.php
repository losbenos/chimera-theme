<?php
/**
 * Title: Author Card
 * Slug: chimera-master/author-card
 * Description: 
 * Categories: chimera-people
 * Keywords: 
 * Viewport Width: 600
 * Block Types: 
 * Post Types: 
 * Inserter: true
 */
?>
<!-- wp:group {"className":"","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"}},"border":{"radius":"4px"}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-background-color has-background" style="border-radius:4px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><!-- wp:group {"className":"","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"width":"100px","sizeSlug":"large","className":"is-style-rounded"} -->
<figure class="wp-block-image size-large is-resized is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/profile.svg" alt="" style="width:100px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"","style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-author-name {"className":"","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"medium"} /-->

<!-- wp:post-author-biography {"className":""} /--></div>
<!-- /wp:group -->

<!-- wp:social-links {"iconColor":"darkest","iconColorValue":"#000000","iconBackgroundColor":"lightest","iconBackgroundColorValue":"#ffffff","className":"","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|small","left":"var:preset|spacing|small"}}}} -->
<ul class="wp-block-social-links has-icon-color has-icon-background-color"><!-- wp:social-link {"url":"#","service":"twitter","className":""} /-->

<!-- wp:social-link {"url":"#","service":"facebook","className":""} /-->

<!-- wp:social-link {"url":"#","service":"instagram","className":""} /-->

<!-- wp:social-link {"url":"#","service":"github","className":""} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
