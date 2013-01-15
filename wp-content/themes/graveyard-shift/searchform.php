<div id="search_box">
	<form action="<?php bloginfo('url'); ?>/" method="get">
		<input type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
		<div class="button_wrapper">
			<input type="submit" value="Search" class="button" />
		</div>
		<div class="clear"><!-- --></div>
	</form>
</div>
