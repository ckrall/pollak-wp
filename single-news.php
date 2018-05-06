<?php
/*Template Name: Single News
 *
 *You can customize this view by putting a replacement file of the same name single-news.php) in the directory of your theme.
 *
 */
 
get_header(); ?>

<section id="primary" class="site-content">
    <div id="content" role="main" class="news-cpt widecolumn">
		
	<?php if( have_posts() ) : ?><?php while( have_posts() ) : the_post(); ?>
      
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="entry-header">
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<div class="entry-meta post-info">
					<span class="date published time" title="<?php the_time('c') ?>"><?php the_time('F j, Y') ?></span>
				</div> <!-- .entry-meata .post-info -->
			</div> <!-- .entry-header -->

			<div class="entry-content">
			<?php
				if ( function_exists('has_post_thumbnail') && has_post_thumbnail() ) {
				the_post_thumbnail();
				} ?>
				<div class="summary"><?php the_content(); ?></div>
			</div> <!-- .entry-content -->

		</div> <!-- post -->
     
		<div class="navigation">  
			<?php previous_post_link('&laquo; %link') ?> <?php next_post_link(' %link >') ?>
		</div>

		<?php endwhile; ?>
    
		<?php else: ?>
    
			<p>There are no news items to display.</p>
    
		<?php endif; ?>

		<div class="navigation news">  
			<span class="back">&laquo; <a href="/news/"><?php _e('Back to News Archives'); ?></a></span>
		</div>
   
	</div><!-- #content -->
    
</section><!--#primary-->

<?php get_sidebar(); ?>
<?php get_footer(); ?>