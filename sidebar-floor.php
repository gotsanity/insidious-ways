<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package _bootstraps
 * @package _bootstraps - 2013 1.0
 */
?>
<div id="callout" role="complementary">
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="callout">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('callout') ) : endif; ?>
                </div><!-- .site-info -->
            </div>
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- #callout .callout -->
<div id="floor" class="span12" role="complementary">
    <div class="container">
        <div class="row">
			<div class="span3">
				<div class="floor-area">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('floor1') ) : endif; ?>
				</div>
			</div>
			<div class="span3">
				<div class="floor-area">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('floor2') ) : endif; ?>
				</div>
			</div>
			<div class="span3">
				<div class="floor-area">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('floor3') ) : endif; ?>
				</div>
			</div>
			<div class="span3">
				<div class="floor-area">
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('floor4') ) : endif; ?>
				</div>
			</div>
        </div><!-- .row -->
    </div><!-- .container -->
</div><!-- #floor .floor-area -->
