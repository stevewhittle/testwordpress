<?php include (TEMPLATEPATH . '/searchform.php'); ?>
<div id="sidebar">
	<ul>
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) : ?>
		<?php if ( is_404() || is_category() || is_day() || is_month() || is_year() || is_search() || is_paged() ) { ?>
			<?php }?>
			<?php wp_list_pages('title_li=<h2>Pages</h2>' ); ?>
			<li id="archives">
				<h2>Archives</h2>
				<ul>
					<?php wp_get_archives('type=monthly'); ?>
				</ul>
			</li>
			<?php wp_list_categories('show_count=0&title_li=<h2>Categories</h2>'); ?>
			<li id="feed">
				<h2>Feed</h2>
				<ul>
					<li><a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a></li>
					<li><a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a></li>
				</ul>
			</li>
		<?php endif; ?>
	</ul>
</div>
