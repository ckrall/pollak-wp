<?php
/**
 * The sidebar containing the main widget area.
 *
 * If no active widgets in sidebar, let's hide it completely.
 *
 * @package WordPress
 * @subpackage Pollak Vineyards
 * @since Pollak Vineyards 1.0
 */
?>

	<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<div id="aside-page" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div><!-- #secondary -->
	<?php endif; ?>
	
	<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
		<div id="aside-post" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-2' ); ?>
		</div><!-- #secondary -->
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
		<div id="aside-event" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-3' ); ?>
		</div><!-- #secondary -->
	<?php endif; ?>
	
	<?php if ( is_active_sidebar( 'sidebar-4' ) ) : ?>
		<div id="aside-news" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-4' ); ?>
		</div><!-- #secondary -->
	<?php endif; ?>