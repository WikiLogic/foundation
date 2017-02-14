<?php 
/*
Template Name: Home page
Template Post Type: page
*/

get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="page-detail">

			<!-- big jumbotron with CTA button -->
			<div class="page-hero">

				<h2 class="page-hero__title">What is Wikilogic?</h2>
				<button class="page-hero__button">
					<span class="page-hero__button-text">
						Intro video
					</span>
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 60 60">
						<path d="M30,0C13.458,0,0,13.458,0,30s13.458,30,30,30s30-13.458,30-30S46.542,0,30,0z M45.563,30.826l-22,15
							C23.394,45.941,23.197,46,23,46c-0.16,0-0.321-0.038-0.467-0.116C22.205,45.711,22,45.371,22,45V15c0-0.371,0.205-0.711,0.533-0.884
							c0.328-0.174,0.724-0.15,1.031,0.058l22,15C45.836,29.36,46,29.669,46,30S45.836,30.64,45.563,30.826z"/>
					</svg>
				</button>

			</div>

			<!-- Loop through "uses" as cards -->

			<div class="uses">
				<div class="uses__use">
					<div class="uses__use-title">Title</div>
					<div class="uses__use-body">Lorem ipsum</div>
				</div>
				<div class="uses__use">
					<div class="uses__use-title">Title</div>
					<div class="uses__use-body">Lorem ipsum</div>
				</div>
				<div class="uses__use">
					<div class="uses__use-title">Title</div>
					<div class="uses__use-body">Lorem ipsum</div>
				</div>
				<div class="uses__use">
					<div class="uses__use-title">Title</div>
					<div class="uses__use-body">Lorem ipsum</div>
				</div>

			</div>

			<div class="page-detail__body">

				<?php
					// the content (pretty self explanatory huh)
					//the_content();

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