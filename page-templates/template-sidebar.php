<?php
/**
 * Template Name: Page Custom Sidebar
 *
 * Description: Twenty Twelve loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 *
 * @package WordPress
 * @subpackage Pollak Vineyards
 * @since Pollak Vineyards 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<article class="entry-content">

					<section class="column column-content">
						<h1 class="entry-title"><?php the_title(); ?></h1>
						<div><?php the_content(); ?></div>
					</section>

					<section class="column column-sidebar">
						<div><img src="<?php the_field('image_side'); ?>" alt="" /></div>
						<br />
						<dl class="notes sidebar">
							<dt><?php the_field('label_side'); ?></dt>
							<dd><?php the_field('notes_side'); ?></dd>
						</dl>
					</section>

				</article>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>