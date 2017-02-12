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

		<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">

			<div class="header__top">
					
				<label class="header__menu-button" for="menu-expander">
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 54 54">
						<circle cx="7" cy="47" r="7"/>
						<circle cx="27" cy="47" r="7"/>
						<circle cx="47" cy="47" r="7"/>
						<circle cx="7" cy="27" r="7"/>
						<circle cx="27" cy="27" r="7"/>
						<circle cx="47" cy="27" r="7"/>
						<circle cx="7" cy="7" r="7"/>
						<circle cx="27" cy="7" r="7"/>
						<circle cx="47" cy="7" r="7"/>
					</svg>
				</label>

				<div class="header__title">
					<a href="<?php echo home_url(); ?>" class="header__title-text" itemscope itemtype="http://schema.org/Organization"><?php bloginfo('name'); ?></a>
				</div>
					
				<div class="header__search-button">
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 250.313 250.313" >
						<path style="fill-rule:evenodd;clip-rule:evenodd;" d="M244.186,214.604l-54.379-54.378c-0.289-0.289-0.628-0.491-0.93-0.76
							c10.7-16.231,16.945-35.66,16.945-56.554C205.822,46.075,159.747,0,102.911,0S0,46.075,0,102.911
							c0,56.835,46.074,102.911,102.91,102.911c20.895,0,40.323-6.245,56.554-16.945c0.269,0.301,0.47,0.64,0.759,0.929l54.38,54.38
							c8.169,8.168,21.413,8.168,29.583,0C252.354,236.017,252.354,222.773,244.186,214.604z M102.911,170.146
							c-37.134,0-67.236-30.102-67.236-67.235c0-37.134,30.103-67.236,67.236-67.236c37.132,0,67.235,30.103,67.235,67.236
							C170.146,140.044,140.043,170.146,102.911,170.146z"/>
					</svg>
				</div>

				<!-- <?php get_search_form(true); ?> -->

			</div>

			<input type="checkbox" id="menu-expander" class="header__checkbox-expander"/>
			<div class="header__nav-area">
			
				<nav class="main-nav" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
					<?php require('php-helpers/navigation.php'); ?>
				</nav>

			</div>

		</header>
