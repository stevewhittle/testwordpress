				<div id="footer">
					<div id="footer_left">
						<div class="header">
							<h3>More Widgets Can Go Here</h3>
						</div>
						<ul class="s49 left">
							<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(2) ) : ?>
								<li id="meta">
									<h2>Meta</h2>
									<ul>
										<?php wp_register(); ?>
										<li><?php wp_loginout(); ?></li>
										<li><a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional">Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></li>
										<li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
										<li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>
										<?php wp_meta(); ?>
									</ul>
								</li>
							<?php endif; ?>
						</ul>
						<ul class="s49 right">
							<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(3) ) : ?>
								<?php wp_list_bookmarks(); ?>
							<?php endif; ?>
						</ul>
					</div>
					<div id="footer_right">
						<div class="header">
							<h3>Did I Mention Widgets?</h3>
						</div>
						<ul>
							<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(4) ) : ?>
								<li>You can put some blurb here about your site, yourself and whatever.</li>
							<?php endif; ?>
						</ul>
					</div>
					<div class="clear"><!-- --></div>
					<hr />
					<p class="credit">Powered by <a href="http://wordpress.org/">WordPress</a>. Template by <a href="http://semlabs.co.uk/">SEM Labs</a>.</p>
					<?php wp_footer(); ?>
				</div>
			</div>
		</div>
	</body>
</html>
