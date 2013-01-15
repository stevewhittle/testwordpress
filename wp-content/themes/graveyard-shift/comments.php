<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');
	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
			?>
			<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
			<?php
			return;
		}
	}
	/* This variable is for alternating comment background */
	$oddcomment = 'class="alt" ';
?>
<div class="comments">
<?php if ($comments) : ?>
		<h2>Commnets</h2>
		<ol class="commentlist">
			<?php foreach ($comments as $comment) : ?>
				<li <?php echo $oddcomment; ?>id="comment-<?php comment_ID() ?>">
					<div class="meta">
						<?php echo get_avatar( $comment->comment_author_email, $size = '40' ); ?>
						<span class="name"><?php comment_author_link() ?> <small>Says:</small></span>
						<span class="datetime"><a href="#comment-<?php comment_ID() ?>" title=""><?php comment_date('F jS, Y') ?> at <?php comment_time() ?></a> <?php edit_comment_link('edit','&nbsp;&nbsp;',''); ?></span>
						<div class="clear"><!-- --></div>
					</div>
					<?php comment_text() ?>
					<?php if ($comment->comment_approved == '0') : ?><span><small>Your comment is awaiting moderation.</small></span> <?php endif; ?>
				</li>
			<?php $oddcomment = ( empty( $oddcomment ) ) ? 'class="alt" ' : ''; ?>
			<?php endforeach;?>
		</ol>
 <?php else : // this is displayed if there are no comments so far ?>
	<?php if ('open' == $post->comment_status) : ?>
		<!-- If comments are open, but there are no comments. -->
	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments">Comments are closed.</p>
	<?php endif; ?>
<?php endif; ?>


<?php if ('open' == $post->comment_status) : ?>

<h2>Leave a Comment</h2>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php echo urlencode(get_permalink()); ?>">logged in</a> to post a comment.</p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform" class="h">

<?php if ( $user_ID ) : ?>

<div class="body"><p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Logout &raquo;</a></p></div>

<?php else : ?>

<p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
<label for="author"><small>Name <?php if ($req) echo "(required)"; ?></small></label></p>

<p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
<label for="email"><small>Mail (will not be published) <?php if ($req) echo "(required)"; ?></small></label></p>

<p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
<label for="url"><small>Website</small></label></p>

<?php endif; ?>
<p><textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea></p>

<div class="button_wrapper"><input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" class="button" /></div>
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>"  />
<?php do_action('comment_form', $post->ID); ?>

</form>
</div>
<?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?>
