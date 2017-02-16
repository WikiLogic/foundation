		<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

			<div class="footer__top">
				<!-- footer version of the main nav -->
				<nav class="nav nav--footer" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
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

			<div class="footer__bottom">
				<div class="footer__bottom-left">
					<div class="footer__util-nav">
						<nav class="nav nav--util" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
							<?php
								$menu = wp_nav_menu(
									array(
										'theme_location'  => 'util-nav',
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
					<p class="footer__copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>
				</div>
				<div class="footer__bottom-right">
					Social
				</div>
			</div>


		</footer>


		<?php wp_footer(); ?>
	</div>
</body>
</html>