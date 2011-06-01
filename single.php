<?php
/**
 * The Template for displaying all single posts.
 */

get_header(); ?>
	
	<section id="content">
	
		<?php /* Start loop */ ?>
		<?php while (have_posts()) : the_post(); ?>
			
			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				
				<header>
					<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					<time pubdate datetime="<?php the_time('c'); ?>"><?php printf( __('Posted on %s at %s.','roots'), get_the_time('l, F jS, Y'), get_the_time()) ?></time>
					<p class="byline author vcard"><span class="fn"><?php the_author(); ?></span></p>
				</header>
				
				<?php the_content('Weiterlesen >>'); ?>
				
				<footer>
					<p>Posted in <?php the_category(', ') ?></p>
				</footer>
				
			</article>
			
		<?php endwhile; ?>
	
	</section>
	
<?php get_sidebar(); ?>
<?php get_footer(); ?>
