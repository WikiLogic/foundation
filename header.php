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

	<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">
		<div class="header__col">
			<a href="<?php echo home_url(); ?>" class="site-flag__title" itemscope itemtype="http://schema.org/Organization"><?php bloginfo('name'); ?></a>
		</div>
		

		<div class="header__col">

			<nav class="main-nav" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
				<?php require('php-helpers/navigation.php'); ?>
			</nav>

		</div>

		<div class="header__col">
			<?php get_search_form(true); ?>
		</div>

	</header>
