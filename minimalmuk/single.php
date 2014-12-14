<?php
/**
 * The Template for displaying all single posts.
 *
 * @package minimalMuk
 * @since minimalMuk 1.1.1
 */

get_header(); ?>

  <section class="content">

    <?php /* Start loop */ ?>
    <?php while (have_posts()) : the_post(); ?>

      <article <?php post_class() ?> id="post-<?php the_ID(); ?>">

        <header>
          <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
          <time pubdate datetime="<?php the_time('c'); ?>"><?php printf( __('Posted on %s at %s.','minimalmuk'), get_the_date(), get_the_time()) ?></time>
          <p class="byline author vcard"><span class="fn"><?php the_author(); ?></span></p>
        </header>

        <?php the_content(); ?>

        <footer>
          <p><?php print(__('Category', 'minimalmuk') .": "); the_category(', ') ?></p>
          <p><?php print(__('Tags', 'minimalmuk') .": "); the_tags(', ') ?></p>
        </footer>

      </article>

    <?php endwhile; ?>

  </section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
