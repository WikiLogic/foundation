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
				<nav class="main-nav" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
					<?php require('php-helpers/navigation.php'); ?>
				</nav>
			</div>

			<div class="header__search">
				<?php get_search_form(true); ?>
			</div>
			
			<label class="header__search-toggle" for="search-toggler">
				<!-- Maginfying glass -->
				<svg class="header__search-toggle-magnifyer" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 250.313 250.313" >
					<path style="fill-rule:evenodd;clip-rule:evenodd;" d="M244.186,214.604l-54.379-54.378c-0.289-0.289-0.628-0.491-0.93-0.76
						c10.7-16.231,16.945-35.66,16.945-56.554C205.822,46.075,159.747,0,102.911,0S0,46.075,0,102.911
						c0,56.835,46.074,102.911,102.91,102.911c20.895,0,40.323-6.245,56.554-16.945c0.269,0.301,0.47,0.64,0.759,0.929l54.38,54.38
						c8.169,8.168,21.413,8.168,29.583,0C252.354,236.017,252.354,222.773,244.186,214.604z M102.911,170.146
						c-37.134,0-67.236-30.102-67.236-67.235c0-37.134,30.103-67.236,67.236-67.236c37.132,0,67.235,30.103,67.235,67.236
						C170.146,140.044,140.043,170.146,102.911,170.146z"/>
				</svg>
				<!-- X -->
				<svg class="header__search-toggle-x" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21.9 21.9" xmlns:xlink="http://www.w3.org/1999/xlink">
					<path d="M14.1,11.3c-0.2-0.2-0.2-0.5,0-0.7l7.5-7.5c0.2-0.2,0.3-0.5,0.3-0.7s-0.1-0.5-0.3-0.7l-1.4-1.4C20,0.1,19.7,0,19.5,0  c-0.3,0-0.5,0.1-0.7,0.3l-7.5,7.5c-0.2,0.2-0.5,0.2-0.7,0L3.1,0.3C2.9,0.1,2.6,0,2.4,0S1.9,0.1,1.7,0.3L0.3,1.7C0.1,1.9,0,2.2,0,2.4  s0.1,0.5,0.3,0.7l7.5,7.5c0.2,0.2,0.2,0.5,0,0.7l-7.5,7.5C0.1,19,0,19.3,0,19.5s0.1,0.5,0.3,0.7l1.4,1.4c0.2,0.2,0.5,0.3,0.7,0.3  s0.5-0.1,0.7-0.3l7.5-7.5c0.2-0.2,0.5-0.2,0.7,0l7.5,7.5c0.2,0.2,0.5,0.3,0.7,0.3s0.5-0.1,0.7-0.3l1.4-1.4c0.2-0.2,0.3-0.5,0.3-0.7  s-0.1-0.5-0.3-0.7L14.1,11.3z"/>
				</svg>
			</label>

		</header>