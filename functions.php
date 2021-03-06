<?php

//*************************************
// Change the breadcrumbs to be hidden for pages and be formatted differently
// for posts
function modify_breadcrumbs($breadcrumb) {
	if ( ! is_admin() ) {
		if ( is_page() ){
			$breadcrumb = "";
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
