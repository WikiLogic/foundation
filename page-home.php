<?php 
/*
Template Name: Home page
Template Post Type: page
*/

get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="page-detail">

			<!-- big jumbotron with CTA button -->
			<input type="checkbox" name="video-expander" id="video-expander" class="page-hero__video-expander-checkbox">
			<div class="page-hero">

				<h2 class="page-hero__title">The Wikilogic Foundation</h2>
				
				<p class="page-hear__sub-title">
				“Don’t raise your voice, improve your argument”<br />
				<small>– Demond Tutu</small></p>
				
				<label class="page-hero__button" for="video-expander">
					<span class="page-hero__button-text">
						What is Wikilogic?
					</span>
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 60 60">
						<path d="M30,0C13.458,0,0,13.458,0,30s13.458,30,30,30s30-13.458,30-30S46.542,0,30,0z M45.563,30.826l-22,15
							C23.394,45.941,23.197,46,23,46c-0.16,0-0.321-0.038-0.467-0.116C22.205,45.711,22,45.371,22,45V15c0-0.371,0.205-0.711,0.533-0.884
							c0.328-0.174,0.724-0.15,1.031,0.058l22,15C45.836,29.36,46,29.669,46,30S45.836,30.64,45.563,30.826z"/>
					</svg>
				</label>

				<div class="page-hero__video">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/Yn193xNaMHg" frameborder="0" allowfullscreen></iframe>
				</div>
				<label class="page-hero__turn-off-the-lights" for="video-expander"></label>

				<!--
				<a href="/what-is-wikilogic" class="page-hero__link">
					In depth article
				</a>
				-->

			</div>

			<div class="homepage-callouts">
				<div class="homepage-callouts__max-width-wrap">
					<div class="homepage-callout homepage-callout--left">
						<div class="homepage-callout__title">Who We Are</div>
						<div class="homepage-callout__body">A group of exceedingly clever people. Or mad.</div>
					</div>
					<div class="homepage-callout homepage-callout--center">
						<div class="homepage-callout__title">What We Do</div>
						<div class="homepage-callout__body">Working to promote international discussion, free and open access to high quality interdisciplinary knowledge and the development of reasoned argument for the global population.</div>
					</div>
					<div class="homepage-callout homepage-callout--right">
						<div class="homepage-callout__title">Get Involved</div>
						<div class="homepage-callout__body">Blurb</div>
					</div>
				</div>
			</div>

			<div class="homepage-explainer">
				<div class="homepage-explainer__max-width-wrap">
				<p>Everyone knows about our inspiration site, Wikipedia: a place where you can share your own knowledge, correct other people's or learn something new. It stays relevant and up to date by allowing everyone the right to edit.</p>
				<p class="text-align-center"><strong>Wikipedia deals with the raw information.</strong></p>
				<p>Wikilogic aims to follow the same model, except we look at the evidence which backs up that information. Evidence that is also information.</p> 
				<p class="text-align-center"><strong>We deal with how information is linked.</strong></p>
				<p>You may recognize this as an <a href="http://en.wikipedia.org/wiki/Argument_map">argument map</a>. The Wikilogic Foundation aims to map out the links between ALL THE INFORMATION.</p>
				</div>
			</div>

<!--
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
			-->
<!--
			<div class="uses">
				<?php
					$args = array( 'post_type' => 'use', 'posts_per_page' => 10 );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
						?>
							<div class="uses__use">
								<div class="uses__use-title"><?php the_title(); ?></div>
								<div class="uses__use-body"><?php the_content(); ?></div>
							</div>
						<?php
					endwhile;
				?>
			</div>
-->

			<?php //comments_template(); ?>

		</div>

	<?php endwhile; endif; ?>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>