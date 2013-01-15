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
				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
				<p class="postmetadata alt">
					<small>
						This entry was posted
						on <?php the_time('l, F jS, Y') ?> at <?php the_time() ?>
						and is filed under <?php the_category(', ') ?>.
						You can follow any responses to this entry through the <?php comments_rss_link('RSS 2.0'); ?> feed.

						<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) { ?>
							You can <a href="#respond">leave a response</a>, or <a href="<?php trackback_url(); ?>" rel="trackback">trackback</a> from your own site.
						<?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) { ?>
							Responses are currently closed, but you can <a href="<?php trackback_url(); ?> " rel="trackback">trackback</a> from your own site.

						<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) { ?>
							You can skip to the end and leave a response. Pinging is currently not allowed.
						<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) { ?>
							Both comments and pings are currently closed.
						<?php } edit_post_link('Edit this entry.','',''); ?>
					</small>
				</p>
			</div>
	<?php comments_template(); ?>
	<?php endwhile; else: ?>
		<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
			</div>
	</div>
</div>
			<div id="col_right">
				<?php get_sidebar(); ?>
			</div>
			<div class="clear"><!-- --></div>
		</div>
<?php get_footer(); ?>
