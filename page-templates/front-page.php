<?php
/**
 * Template Name: Front Page Template
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Pollak Vineyards
 * @since Pollak Vineyards 1.0
 */

get_header(); ?>

	<div class="banner homepage">
		<img src="<?php the_field('banner_homepage'); ?>" alt="" />
	</div>

	<div class="callout homepage">
		<span class="quote"><?php the_field('callout_banner_quote'); ?></span>
		<br />
		<span class="author">- <?php the_field('callout_banner_author'); ?></span>
	</div>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<!-- MODAL FOR 10 YEAR JAMBOREE -->
			<!-- Button trigger modal -->
			<!--
			<button type="button" class="btn btn-dark" data-toggle="modal" data-target="#myModal">
			  launch jamboree modal
			</button>
			-->
			<div id="myModal" class="modal fade bd-example-modal-lg" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h2 class="modal-title">Celebrate Pollak's 10 Year Jamboree!</h2>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
							<p>This summer just got a little more festive! Pollak Vineyards is hosting an exciting two-day celebration in honor of their ten-year anniversary. Mark your calendars for June 16th and 17th 2018. There will be activities for the whole family; including fly fishing clinics, games, vineyard tours on horseback, local music featuring Gina Sobel and Abbey Road, food options, and of course estate-grown wine!</p>
							<p>The event is open to the public. Everyone is free to attend, however, some events will require ticket purchases, and food will be available for sale on site. Please, no outside alcohol is allowed anywhere on the property.</p>
							<p><a href="http://www.pollakvineyards.com/visit/10-year-jamboree/">Click here for event details</a>.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

			<?php while ( have_posts() ) : the_post(); ?>

				<article class="entry-content home-content">

					<h1 class="hidden"><?php the_title(); ?></h1>
					<div class="hidden"><?php the_content(); ?></div>

					<section class="row 1">
						<div class="column 1">
							<dl class="notes welcome">
								<dt><span><?php the_field('callout_welcome_label'); ?></span></dt>
								<dd><?php the_field('callout_welcome_content'); ?></dd>
							</dl>
						</div>

						<div class="column 2">
							<dl class="notes callout1">
								<dt><span><?php the_field('callout_1_label'); ?></span></dt>
								<dd><?php the_field('callout_1_content'); ?></dd>
							</dl>
							<div class="button homepage"><a class="button" href="<?php the_field('button_1_url'); ?>"><span><?php the_field('button_1_label'); ?></span></a></div>
							<div class="button homepage"><a class="button" href="<?php the_field('button_2_url'); ?>"><span><?php the_field('button_2_label'); ?></span></a></div>
						</div>

						<div class="column 3">
							<dl class="notes callout2">
								<dt><span><?php the_field('callout_2_label'); ?></span></dt>
								<dd><?php the_field('callout_2_content'); ?></dd>
							</dl>
							<div class="button homepage"><a class="button" href="<?php the_field('button_3_url'); ?>"><span><?php the_field('button_3_label'); ?></span></a></div>
							<div class="button homepage"><a class="button" href="<?php the_field('button_4_url'); ?>"><span><?php the_field('button_4_label'); ?></span></a></div>
						</div>
					</section>

				</article>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
