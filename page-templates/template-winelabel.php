<?php
/*
Template Name: Wine Label
*/
?>

<?php get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<article class="entry-content">
					<div class="row 1">
						<div class="content-right">
							<img src="<?php the_field('image_wine'); ?>" alt="" />
						</div>

						<div class="content-left">
							<header class="wine entry-header">
								<h1 class="hidden"><?php the_title(); ?></h1>
								<h1 class="entry-title"><?php the_field('header_wine'); ?></h1>
								<a class="button header" href="<?php the_field('url_button_buy'); ?>"><!-- [button] --></a>
							</header>

							<table class="wine details">
								<tr>
									<td>
										<span><i>price:</i></span>
									</td>
									<td>
										<span><?php the_field('price'); ?></span>
									</td>
								</tr>
								<tr>
									<td>
										<span><i>availability:</i></span>
									</td>
									<td>
										<span><?php the_field('availability'); ?></span>
									</td>
								</tr>
								<tr>
									<td>
										<span><i>cases produced:</i></span>
									</td>
									<td>
										<span><?php the_field('cases'); ?></span>
									</td>
								</tr>
								<tr>
									<td>
										<span><i>date picked:</i></span>
									</td>
									<td>
										<span><?php the_field('picked'); ?></span>
									</td>
								</tr>
								<tr>
									<td>
										<span><i>date bottled:</i></span>
									</td>
									<td>
										<span><?php the_field('bottled'); ?></span>
									</td>
								</tr>
								<tr>
									<td>
										<span><i>varietals:</i></span>
									</td>
									<td>
										<span><?php the_field('varietals'); ?></span>
									</td>
								</tr>
							</table>
						</div>
					</div>

					<div class="row 2">
						<dl class="notes winemaking">
							<dt><span>winemaking notes</span></dt>
							<dd><?php the_field('notes_winemaking'); ?></dd>
						</dl>
						<dl class="notes tasting">
							<dt><span>tasting notes</span></dt>
							<dd><?php the_field('notes_tasting'); ?></dd>
						</dl>
						<dl class="notes other">
							<dt><?php the_field('label_other'); ?></dt>
							<dd><?php the_field('notes_other'); ?></dd>
						</dl>
					</div>
				</article>

				<footer class="entry-meta">
					<?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>
				</footer><!-- .entry-meta -->

			<?php endwhile; // end of the loop. ?>

		</div>
	</div>

<?php get_footer(); ?>