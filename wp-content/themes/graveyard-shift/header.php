<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
		<head profile="http://gmpg.org/xfn/11">
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
		<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/mootools.js"></script>
		<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/site.js"></script>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
		<!--[if IE 6]><link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/ie6.css" media="all" /><![endif]-->
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>
		<?php wp_head(); ?>
	</head>
	<body>
		<div id="wrapper">
		<div id="container">
			<div id="scene">
				<img src="<?php bloginfo('stylesheet_directory');?>/images/scene.jpg" alt="" />
				<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
				<h2><?php bloginfo('description'); ?></h2>
				<div id="scale_area">
					<div id="scale_knob" title="Pull This To Increase the Site's Font Size">&raquo; Font Size &laquo;</div>
				</div>
				<?php wp_page_menu( array( 'show_home' => 1 ) ); ?>
			</div>
