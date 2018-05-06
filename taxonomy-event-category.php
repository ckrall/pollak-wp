<?php
/**
 * The template for displaying an event-category page
 *
 * @package Event Organiser (plug-in)
 * @since 1.0.0
 */

//Call the template header
get_header(); ?>

	<!-- This template follows the TwentyTwelve theme-->
	<section id="primary" class="site-content">
		<div id="content" role="main">

		<?php if ( have_posts() ) : ?>

			<!-- Page header, display category title-->
			<header class="archive-header">
				<h1 class="archive-title"><?php
					printf( __( '%s', 'eventorganiser' ), '<span>' . single_cat_title( '', false ) . '</span>' );
				?></h1>

			<!-- If the category has a description display it-->
				<?php
					$category_description = category_description();
					if ( ! empty( $category_description ) )
						echo apply_filters( 'category_archive_meta', '<div class="category-archive-meta">' . $category_description . '</div>' );
				?>
			</header>

			<!-- Navigate between pages-->
			<!-- In TwentyEleven theme this is done by twentyeleven_content_nav-->
			<?php 
				global $wp_query;
				if ( $wp_query->max_num_pages > 1 ) : ?>
					<nav id="nav-above">
						<div class="nav-next events-nav-newer"><?php next_posts_link( __( 'Later events <span class="meta-nav">&rarr;</span>', 'eventorganiser' ) ); ?></div>
						<div class="nav-previous events-nav-newer"><?php previous_posts_link( __( ' <span class="meta-nav">&larr;</span> Newer events', 'eventorganiser' ) ); ?></div>
					</nav><!-- #nav-above -->
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
							
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">

			<h1 class="entry-title" style="display: inline;">
			<a href="<?php the_permalink(); ?>">
				<?php 
					//If it has one, display the thumbnail
					if( has_post_thumbnail() )
						the_post_thumbnail('thumbnail', array('style'=>'float:left;margin-right:20px;'));

					//Display the title
					the_title()
				;?>
			</a>
			</h1>
				<div style="clear:both;"></div>
				</header><!-- .entry-header -->

			<div class="post-info event-entry-meta">
				<!-- Output the date of the occurrence-->
				<?php
				//Format date/time according to whether its an all day event.
				//Use microdata http://support.google.com/webmasters/bin/answer.py?hl=en&answer=176035
				if( eo_is_all_day() ){
					$format = 'd F Y';
					$microformat = 'Y-m-d';
				}else{
					$format = 'd F Y '.get_option('time_format');
					$microformat = 'c';
				}?>
				<time class="date published time" itemprop="startDate" datetime="<?php eo_the_start($microformat); ?>"><?php eo_the_start($format); ?></time>
				
				<!-- Display event meta list -->
				<?php echo eo_get_event_meta_list(); ?>
			</div><!-- .event-entry-meta -->

			<div class="entry-content">
			<!-- Event excerpt -->
			<?php the_excerpt(); ?>
			</div>

			</article><!-- #post-<?php the_ID(); ?> -->

				<?php endwhile; ?><!--The Loop ends-->

			<!-- Navigate between pages-->
			<?php 
			if ( $wp_query->max_num_pages > 1 ) : ?>
				<nav id="nav-below">
					<div class="nav-next events-nav-newer"><?php next_posts_link( __( 'Later events <span class="meta-nav">&rarr;</span>', 'eventorganiser' ) ); ?></div>
					<div class="nav-previous events-nav-newer"><?php previous_posts_link( __( ' <span class="meta-nav">&larr;</span> Newer events', 'eventorganiser' ) ); ?></div>
				</nav><!-- #nav-below -->
			<?php endif; ?>

		<?php else : ?>

			<!-- If there are no events -->
			<article id="post-0" class="post no-results not-found">
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'Nothing Found', 'eventorganiser' ); ?></h1>
				</header><!-- .entry-header -->

				<div class="entry-content">
					<p><?php _e( 'Apologies, but no events were found for the requested category. ', 'eventorganiser' ); ?></p>
				</div><!-- .entry-content -->
			</article><!-- #post-0 -->

		<?php endif; ?>

		</div><!-- #content -->
	</section><!-- #primary -->

<!-- Call template sidebar and footer -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
