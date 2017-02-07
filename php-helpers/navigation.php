<?php 
//creates the menu with BEM classes

// Remove id from nav menu items
add_filter( 'nav_menu_item_id', '__return_empty_string' );

// Add 'main-nav__item' class
add_filter( 'nav_menu_css_class', 'My_Theme_nav_menu_item_class', 10, 4 );

function My_Theme_nav_menu_item_class( $classes , $item, $args, $depth ) {

	$new_classes = array( 'main-nav__item' );
	if ( in_array( 'current-menu-item', $classes ) ) {
		$new_classes[] = 'selected';
	}

	return $new_classes;
}

// Add 'main-nav__link' class
add_filter( 'nav_menu_link_attributes', 'My_Theme_nav_menu_link_atts', 10, 4 );

function My_Theme_nav_menu_link_atts( $atts, $item, $args, $depth ) {
	$new_atts = array( 'class' => 'main-nav__link' );
	if ( isset( $atts['href'] ) ) {
		$new_atts['href'] = $atts['href'];
	}

	return $new_atts;
}


$menu = wp_nav_menu(
    array(
        'theme_location'  => 'main-nav',
        'menu'            => '',
        'container'       => '',
        'container_class' => '',
        'container_id'    => '',
        'menu_class'      => '',
        'menu_id'         => '',
        'echo'            => false,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '<span class="main-nav__link-text">',
        'link_after'      => '</span><span class="main-nav__link-arrow">></span>',
        'items_wrap'      => '<ul class="main-nav__list">%3$s</ul>',
        'depth'           => 1,
        'walker'          => ''
    )
);

if ( $menu ) {

    echo $menu;
}

?>