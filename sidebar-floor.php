<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package _bootstraps
 * @package _bootstraps - 2013 1.0
 */
?>
<div id="floor" class="span12" role="complementary">
    <div class="floor-area">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('floor') ) : endif; ?>
    </div>
</div><!-- #floor .floor-area -->
