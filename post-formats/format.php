
  <?php
    /*
      * This is the default post format.
      *
      * So basically this is a regular post. if you don't want to use post formats,
      * you can just copy ths stuff in here and replace the post format thing in
      * single.php.
      *
      * The other formats are SUPER basic so you can style them as you like.
      *
      * Again, If you want to remove post formats, just delete the post-formats
      * folder and replace the function below with the contents of the "format.php" file.
    */
  ?>

  <article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">
    <div class="post-detail">

      <header class="post-detail__header">
        <h1 class="post-detail__header-text" itemprop="headline" rel="bookmark"><?php the_title(); ?></h1>
      </header>


      <section class="post-detail__body" itemprop="articleBody">
        <div class="post-detail__aside">
          <div class="post-detail-meta">
            <div class="post-detail-meta__left">
              By <?php the_author(); ?>, 
              <?php echo get_the_time(get_option('date_format')); ?>
            </div>

            <div class="post-detail-meta__right">
              <?php printf( '%1$s' , get_the_category_list(', ') ); ?>
            </div>
          </div>
        </div>
        <div class="post-detail__content">
          <?php the_content(); ?>
        </div>
      </section>

      <footer class="article-footer">
        <?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>
      </footer> <?php // end article footer ?>

    <?php //comments_template(); ?>

    </div>
  </article> <?php // end article ?>
