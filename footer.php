		<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

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

			<div class="footer__bottom">

				<div class="footer__bottom-right">
					<div class="social-icons-row">
						
						<a class="social-icons-row__icon" href="https://www.facebook.com/pg/The-Wikilogic-Foundation-1865544183686261/">
							<svg class="svg-icon" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60.734 60.733">
								<path d="M57.378,0.001H3.352C1.502,0.001,0,1.5,0,3.353v54.026c0,1.853,1.502,3.354,3.352,3.354h29.086V37.214h-7.914v-9.167h7.914
									v-6.76c0-7.843,4.789-12.116,11.787-12.116c3.355,0,6.232,0.251,7.071,0.36v8.198l-4.854,0.002c-3.805,0-4.539,1.809-4.539,4.462
									v5.851h9.078l-1.187,9.166h-7.892v23.52h15.475c1.852,0,3.355-1.503,3.355-3.351V3.351C60.731,1.5,59.23,0.001,57.378,0.001z"/>
							</svg>
						</a>

						<a class="social-icons-row__icon" href="https://github.com/WikiLogic">
							<svg class="svg-icon" version="1.1" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0 0 16 8c0-4.42-3.58-8-8-8z"></path></svg>
						</a>

						<!-- <div class="social-icons-row__icon">TW</div> -->

					</div>
				</div>

				<div class="footer__bottom-left">
					<div class="footer__util-nav">
						<nav class="nav nav--util" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
							<?php
								$menu = wp_nav_menu(
									array(
										'theme_location'  => 'footer-utility',
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
										'depth'           => 1,
										'walker'          => ''
									)
								);

								if ( $menu ) {  echo $menu; }
							?>
						</nav>
					</div>
					<p class="footer__copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>
					<p class="footer__copyright">Note: Wikilogic shares many of the same ideals as Wikipedia and<br />the Wikimedia foundation but we are unaffiliated in anyway.</p>
				</div>

			</div>

		</footer>

		<?php wp_footer(); ?>
	</div>
</body>
</html>