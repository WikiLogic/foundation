<?php get_header(); ?>

		
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
			<h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
			<p class="byline entry-meta vcard">
				<?php printf( __( 'Posted', 'bonestheme' ).' %1$s %2$s',
					/* the time the post was published */
					'<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
					/* the author of the post */
					'<span class="by">'.__( 'by', 'bonestheme').'</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
				); ?>
			</p>

			<?php the_content(); ?>

			<p class="footer-comment-count">
				<?php comments_number( __( '<span>No</span> Comments', 'bonestheme' ), __( '<span>One</span> Comment', 'bonestheme' ), __( '<span>%</span> Comments', 'bonestheme' ) );?>
			</p>

			<?php printf( '<p class="footer-category">' . __('filed under', 'bonestheme' ) . ': %1$s</p>' , get_the_category_list(', ') ); ?>
			<?php the_tags( '<p class="footer-tags tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>


		<?php endwhile; ?>
		
		<?php pagination(); ?>

		<?php else : ?>

			<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
			<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
			<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>

		<?php endif; ?>


<?php get_sidebar(); ?>
<?php get_footer(); ?>
