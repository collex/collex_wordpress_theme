<?php
//*************************************
// Use the primary sidebar for post type pages and
// the secondary sidebar for about type pages.
function disable_blog_primary($sidebars_widgets) {
	if ( ! is_admin() ) {
		if ( is_page() ){
			$sidebars_widgets['primary'] = false;
		} else {
			$sidebars_widgets['secondary'] = false;
		}
	}

	return $sidebars_widgets;
}

add_filter( 'sidebars_widgets', 'disable_blog_primary');

//*************************************
// Change the breadcrumbs to be hidden for pages and be formatted differently
// for posts
function modify_breadcrumbs($breadcrumb, $args) {
	if ( ! is_admin() ) {
		if ( is_page() ){
			$breadcrumb = "";
		} else {
			
		}
	}

	return $breadcrumb;
}

add_filter( 'breadcrumb_trail', 'modify_breadcrumbs');

//*************************************
// Add specific CSS class by filter
function my_class_names($classes) {
	// add yui to the $classes array
	$classes[] = 'yui-skin-sam';
	// return the $classes array
	return $classes;
}

add_filter('body_class','my_class_names');

?>
