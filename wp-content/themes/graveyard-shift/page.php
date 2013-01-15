<?php get_header(); ?>
	<div id="content">
		<div id="col_left">
			<div class="inner">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div class="post" id="post-<?php the_ID(); ?>">
						<div class="meta">
							<div class="date">
								<div class="month"><?php the_time( 'M' ) ?></div>
								<div class="day"><?php the_time( 'j' ) ?></div>
							</div>
							<h1><?php the_title(); ?></h1>
							<div class="clear"><!-- --></div>
						</div>
						<div class="body">
							<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
						</div>
						<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			<?php endwhile; endif; ?>
			<div class="body"><p><?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?></p></div>
		</div>
	</div>
</div>
			<div id="col_right">
				<?php get_sidebar(); ?>
			</div>
			<div class="clear"><!-- --></div>
		</div>
<?php get_footer(); ?>