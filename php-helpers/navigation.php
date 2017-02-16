<?php 
//creates the menu with BEM classes

// Remove id from nav menu items
add_filter( 'nav_menu_item_id', '__return_empty_string' );

// Add 'nav__item' class
add_filter( 'nav_menu_css_class', 'My_Theme_nav_menu_item_class', 10, 4 );

function My_Theme_nav_menu_item_class( $classes , $item, $args, $depth ) {

	$new_classes = array( 'nav__item' );
	if ( in_array( 'current-menu-item', $classes ) ) {
		$new_classes[] = 'selected';
	}

	return $new_classes;
}

// Add 'nav__link' class
add_filter( 'nav_menu_link_attributes', 'My_Theme_nav_menu_link_atts', 10, 4 );

function My_Theme_nav_menu_link_atts( $atts, $item, $args, $depth ) {
	$new_atts = array( 'class' => 'nav__link' );
	if ( isset( $atts['href'] ) ) {
		$new_atts['href'] = $atts['href'];
	}

	return $new_atts;
}

?>