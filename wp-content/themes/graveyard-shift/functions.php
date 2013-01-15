<?php
if ( function_exists('register_sidebar') ) {
    register_sidebar(array(
	'name'=>'sidebar_right',
        'before_widget' => '<li id="%1$s" class="sidebaritem %2$s"><div class="sidebarbox">',
        'after_widget' => '</div></li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));
	
	register_sidebar(array(
	'name'=>'sidebar_footer_left',
        'before_widget' => '<li id="%1$s" class="sidebaritem %2$s"><div class="sidebarbox">',
        'after_widget' => '</div></li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));
	
	register_sidebar(array(
	'name'=>'sidebar_footer_center',
        'before_widget' => '<li id="%1$s" class="sidebaritem %2$s"><div class="sidebarbox">',
        'after_widget' => '</div></li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));
	
	register_sidebar(array(
	'name'=>'sidebar_footer_right',
        'before_widget' => '<li id="%1$s" class="sidebaritem %2$s"><div class="sidebarbox">',
        'after_widget' => '</div></li>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));
}
?>
