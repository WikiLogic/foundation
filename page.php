
<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="page-detail">
			<div class="page-detail__header">

				<nav class="sub-nav" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
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
								'items_wrap'      => '<ul>%3$s</ul>',
								'depth'           => 3,
								'walker'          => ''
							)
						);

						if ( $menu ) {  echo $menu; }
					?>
				</nav>
				
			</div>

			<div class="page-detail__body">

				<?php
					// the content (pretty self explanatory huh)
					the_content();

					/*
						* Link Pages is used in case you have posts that are set to break into
						* multiple pages. You can remove this if you don't plan on doing that.
						*
						* Also, breaking content up into multiple pages is a horrible experience,
						* so don't do it. While there are SOME edge cases where this is useful, it's
						* mostly used for people to get more ad views. It's up to you but if you want
						* to do it, you're wrong and I hate you. (Ok, I still love you but just not as much)
						*
						* http://gizmodo.com/5841121/google-wants-to-help-you-avoid-stupid-annoying-multiple-page-articles
						*
					*/
					wp_link_pages( array(
						'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
						'after'       => '</div>',
						'link_before' => '<span>',
						'link_after'  => '</span>',
					) );
				?>
			</div>

			<?php //comments_template(); ?>

		</div>

	<?php endwhile; endif; ?>


<?php //get_sidebar(); ?>
<?php get_footer(); ?>