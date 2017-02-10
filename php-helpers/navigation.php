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

$arrow = '
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129 129" xmlns:xlink="http://www.w3.org/1999/xlink">
        <path d="m40.4,121.3c-0.8,0.8-1.8,1.2-2.9,1.2s-2.1-0.4-2.9-1.2c-1.6-1.6-1.6-4.2 0-5.8l51-51-51-51c-1.6-1.6-1.6-4.2 0-5.8 1.6-1.6 4.2-1.6 5.8,0l53.9,53.9c1.6,1.6 1.6,4.2 0,5.8l-53.9,53.9z"/>
    </svg>
';

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
        'link_after'      => '</span><span class="main-nav__link-arrow">' . $arrow . '</span>',
        'items_wrap'      => '<ul class="main-nav__list">%3$s</ul>',
        'depth'           => 3,
        'walker'          => ''
    )
);

if ( $menu ) {

    echo $menu;
}

?>