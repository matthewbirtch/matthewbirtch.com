<?php
/**
 * @package WordPress
 * @subpackage mb_1_Theme */

get_header(); ?>

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>
			<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<div class="post_navigation">
    		  <div class="post_date"><div class="post_date_month"><?php the_time('M') ?></div><div class="post_date_date"><?php the_time('d') ?></div></div>
    		  <div class="post_category">Posted in: <?php the_category(', ') ?> </div>
      		<div class="clear"></div>
      	</div>
      	<div class="post_wrapper">
				  <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
  				<div class="entry">
  					<?php the_content('Read more &raquo;'); ?>
  				</div>
          <div class="post_footer">
            <div class="post_date"><?php the_time('l, F jS, Y') ?> at <?php the_time() ?></div>
  				  <div class="post_tags"><?php the_tags('Tags: ', ', '); ?></div>
  				  <div class="comments"><?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></div>
          </div>
			  </div>
		  </div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php get_search_form(); ?>

	<?php endif; ?>



<?php get_footer(); ?>
