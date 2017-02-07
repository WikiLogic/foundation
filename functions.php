<?php

/* php helpers */
require_once( 'php-helpers/wp-cleanup.php' );
require_once( 'php-helpers/enqueueing.php' );
require_once( 'php-helpers/pagination.php' );
require_once( 'php-helpers/related-posts.php' );
require_once( 'php-helpers/theme-support.php' );
require_once( 'php-helpers/wp-cleanup.php' );
// require_once( 'php-helpers/customize-admin.php' );

/* Run the helpers */
function bones_ahoy() {
  load_theme_textdomain( 'bonestheme', get_template_directory() . '/translation' ); // let's get language support going, if you need it
  add_action( 'init', 'bones_head_cleanup' ); // launching operation cleanup
  add_filter( 'wp_title', 'rw_title', 10, 3 ); // A better title 
  add_filter( 'the_generator', 'bones_rss_version' ); // remove WP version from RSS
  add_filter( 'wp_head', 'bones_remove_wp_widget_recent_comments_style', 1 ); // remove pesky injected css for recent comments widget
  add_action( 'wp_head', 'bones_remove_recent_comments_style', 1 ); // clean up comment styles in the head
  add_filter( 'gallery_style', 'bones_gallery_style' ); // clean up gallery output in wp
  add_action( 'wp_enqueue_scripts', 'bones_scripts_and_styles', 999 ); // enqueue base scripts and styles
  bones_theme_support(); // launching this stuff after theme setup
  add_action( 'widgets_init', 'bones_register_sidebars' ); // adding sidebars to Wordpress (these are created in functions.php)
  add_filter( 'the_content', 'bones_filter_ptags_on_images' ); // cleaning up random code around images
  add_filter( 'excerpt_more', 'bones_excerpt_more' ); // cleaning up excerpt
}

// let's get this party started
add_action( 'after_setup_theme', 'bones_ahoy' );


/************* OEMBED SIZE OPTIONS *************/

if ( ! isset( $content_width ) ) {
	$content_width = 680;
}

require_once( 'php-helpers/thumbnail-image-sizes.php' );
require_once( 'php-helpers/add-sidebars.php' );
require_once( 'php-helpers/comment-layout.php' );

?>
