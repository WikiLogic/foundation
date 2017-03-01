<!doctype html>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="utf-8">

	<?php // force Internet Explorer to use the latest rendering engine available ?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title><?php wp_title(''); ?></title>

	<?php // mobile meta (hooray!) ?>
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>

	<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
	<!--[if IE]>
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
	<![endif]-->
	<?php // or, set /favicon.ico for IE10 win ?>
	<meta name="msapplication-TileColor" content="#f01d4f">
	<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
		<meta name="theme-color" content="#121212">

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php // wordpress head functions ?>
	<?php wp_head(); ?>
	<?php // end of wordpress head ?>
</head>
<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
	<div class="body">

		<input type="checkbox" id="search-toggler" class="header__search-toggler"/><!-- Search toggling mutates a few elements within the header, so it has to be up here -->
		<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">
			
			<!-- For smaller screens this toggles the checkbox used to hide / show the nav -->
			<label class="header__menu-toggle" for="main-nav-toggler">
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 54 54">
					<circle cx="7" cy="47" r="7"/> <circle cx="27" cy="47" r="7"/> <circle cx="47" cy="47" r="7"/>
					<circle cx="7" cy="27" r="7"/> <circle cx="27" cy="27" r="7"/> <circle cx="47" cy="27" r="7"/>
					<circle cx="7" cy="7" r="7"/> <circle cx="27" cy="7" r="7"/> <circle cx="47" cy="7" r="7"/>
				</svg>
			</label>

			<div class="header__title">
				<a href="<?php echo home_url(); ?>" class="header__title-text" itemscope itemtype="http://schema.org/Organization"><?php bloginfo('name'); ?></a>
			</div>

			<input type="checkbox" id="main-nav-toggler" name="main-nav-toggler" class="header__nav-toggler"/>
			<div class="header__nav">
				<nav class="nav nav--header" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
					<?php
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
								'link_before'     => '',
								'link_after'      => '',
								'items_wrap'      => '<ul class="nav__list">%3$s</ul>',
								'depth'           => 3,
								'walker'          => ''
							)
						);

						if ( $menu ) {  echo $menu; }
					?>
				</nav>
			</div>

			<div class="header__search">
				<?php get_search_form(true); ?>
			</div>
			
			<label class="header__search-toggle" for="search-toggler">
				<!-- Maginfying glass -->
				<svg class="header__search-toggle-magnifyer" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 56.966 56.966">
					<path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23
					s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92
					c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17
					s-17-7.626-17-17S14.61,6,23.984,6z"/>
				</svg>

				<!-- X -->
				<svg class="header__search-toggle-x" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21.9 21.9" xmlns:xlink="http://www.w3.org/1999/xlink">
					<path d="M14.1,11.3c-0.2-0.2-0.2-0.5,0-0.7l7.5-7.5c0.2-0.2,0.3-0.5,0.3-0.7s-0.1-0.5-0.3-0.7l-1.4-1.4C20,0.1,19.7,0,19.5,0  c-0.3,0-0.5,0.1-0.7,0.3l-7.5,7.5c-0.2,0.2-0.5,0.2-0.7,0L3.1,0.3C2.9,0.1,2.6,0,2.4,0S1.9,0.1,1.7,0.3L0.3,1.7C0.1,1.9,0,2.2,0,2.4  s0.1,0.5,0.3,0.7l7.5,7.5c0.2,0.2,0.2,0.5,0,0.7l-7.5,7.5C0.1,19,0,19.3,0,19.5s0.1,0.5,0.3,0.7l1.4,1.4c0.2,0.2,0.5,0.3,0.7,0.3  s0.5-0.1,0.7-0.3l7.5-7.5c0.2-0.2,0.5-0.2,0.7,0l7.5,7.5c0.2,0.2,0.5,0.3,0.7,0.3s0.5-0.1,0.7-0.3l1.4-1.4c0.2-0.2,0.3-0.5,0.3-0.7  s-0.1-0.5-0.3-0.7L14.1,11.3z"/>
				</svg>
			</label>

		</header>