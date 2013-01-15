<?php get_header(); ?>
<div id="content">
		<div id="col_left">
			<div class="inner">
				<?php is_tag(); ?>
				<?php if (have_posts()) : ?>
				<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
				<?php /* If this is a category archive */ if (is_category()) { ?>
				<h2 class="pagetitle">Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h2>
				<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
				<h2 class="pagetitle">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>
				<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
				<h2 class="pagetitle">Archive for <?php the_time('F jS, Y'); ?></h2>
				<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
				<h2 class="pagetitle">Archive for <?php the_time('F, Y'); ?></h2>
				<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
				<h2 class="pagetitle">Archive for <?php the_time('Y'); ?></h2>
				<?php /* If this is an author archive */ } elseif (is_author()) { ?>
				<h2 class="pagetitle">Author Archive</h2>
				<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<h2 class="pagetitle">Blog Archives</h2>
				<?php } ?>
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
					<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
					<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
				</div>
		
			<?php else : ?>
				<h2 class="center">Not Found</h2>
				<?php include (TEMPLATEPATH . '/searchform.php'); ?>
			<?php endif; ?>
					</div>
			</div>
			<div id="col_right">
				<?php get_sidebar(); ?>
			</div>
			<div class="clear"><!-- --></div>
		</div>
<?php get_footer(); ?>
