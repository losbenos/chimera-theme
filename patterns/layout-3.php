<?php
/**
 * Title: Layout 3
 * Slug: chimera-master/page-rsvp-landing
 * Description: A large RSVP heading sideways, a description, and a CTA button.
 * Categories: chimera-master_page
 * Keywords: starter
 * Viewport Width: 1100
 * Block Types: core/post-content
 * Post Types: page, wp_template
 * Inserter: true
 */
?>
<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:heading {"textAlign":"right","level":1,"style":{"typography":{"fontSize":"12rem","writingMode":"vertical-rl","lineHeight":"1"},"spacing":{"margin":{"right":"0","left":"calc( var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d20) * -1)"}}}} -->
<h1 class="wp-block-heading has-text-align-right" style="margin-right:0;margin-left:calc( var(--wp--preset--spacing--20) * -1);font-size:12rem;line-height:1;writing-mode:vertical-rl">RSVP</h1>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0"}}},"layout":{"type":"constrained","contentSize":"75%","justifyContent":"left"}} -->
<div class="wp-block-group" style="padding-right:0;padding-left:0"><!-- wp:paragraph {"style":{"layout":{"selfStretch":"fixed","flexSize":"50%"}}} -->
<p>Experience the fusion of imagination and expertise with Études Arch Summit, February 2025.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Reserve your spot</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"60%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:60%"><!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"large","linkDestination":"none","className":"is-style-default"} -->
<figure class="wp-block-image size-large is-style-default"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/portrait.svg" alt="" style="aspect-ratio:3/4;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
