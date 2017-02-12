
<?php get_header(); ?>

		
	<div class="post-list">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="post-list__post">

				<div class="post-list__post-header">
					<h2 class="post-list__post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

					<div class="post-meta">
						<div class="post-meta__date">
							<?php echo get_the_time(get_option('date_format')); ?>
						</div>

						<div class="post-meta__category">
							<?php printf( '%1$s' , get_the_category_list(', ') ); ?>
						</div>
					</div>
				</div>

				<!--
				<p class="byline entry-meta vcard">
					<?php printf( __( 'Posted', 'bonestheme' ).' %1$s %2$s',
						/* the time the post was published */
						'<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
						/* the author of the post */
						'<span class="by">'.__( 'by', 'bonestheme').'</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
					); ?>
				</p>
				-->

				<div class="post-liat__post-body">
					<?php the_content(); ?>
				</div>

				<!--
				<p class="footer-comment-count">
					<?php comments_number( __( '<span>No</span> Comments', 'bonestheme' ), __( '<span>One</span> Comment', 'bonestheme' ), __( '<span>%</span> Comments', 'bonestheme' ) );?>
				</p>
				-->
				<div class="post-list__post-footer">
					<div class="post-tags">
						<?php the_tags( '<div class="post-tags__tag">' . __( 'Tags:', 'bonestheme' ) . '</div> '); ?>
					</div>
				</div>

			</div>
		<?php endwhile; ?>
	</div>
		
		<?php pagination(); ?>
		

		<?php else : ?>

			<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
			<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
			<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>

		<?php endif; ?>


<?php get_sidebar(); ?>
<?php get_footer(); ?>	
