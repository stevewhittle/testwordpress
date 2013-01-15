<?php get_header(); ?>
	<div id="content">
		<div id="col_left">
			<div class="inner">
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
						<div class="post" id="post-<?php the_ID(); ?>">
							<div class="meta">
								<div class="date">
									<div class="month"><?php the_time( 'M' ) ?></div>
									<div class="day"><?php the_time( 'j' ) ?></div>
								</div>
								<a class="title" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
								<div class="clear"><!-- --></div>
							</div>
							<div class="body">
								<?php the_content( 'Read the rest of this entry &raquo;' ); ?>
							</div>
							<p class="footer"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
						</div>
					<?php endwhile; ?>
					<div class="navigation">
						<div class="left"><?php next_posts_link('&laquo; Older Entries') ?></div>
						<div class="right"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
					</div>
				<?php else : ?>
					<h2 class="center">Not Found</h2>
					<p class="center">Sorry, but you are looking for something that isn't here.</p>
					<?php include (TEMPLATEPATH . "/searchform.php"); ?>
				<?php endif; ?>
					</div>
			</div>
			<div id="col_right">
				<?php get_sidebar(); ?>
			</div>
			<div class="clear"><!-- --></div>
		</div>
<?php get_footer(); ?>
