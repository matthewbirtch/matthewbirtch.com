<?php
/**
 * @package WordPress
 * @subpackage mb_2_Theme */

get_header(); ?>
  <?php if (have_posts()) : ?>
	<div class="main-wrapper">
    <section class="main-container">
			<?php while (have_posts()) : the_post(); ?>
				<article class='post post-preview<?php the_category_unlinked(' '); ?>'>
	        <div class="page-curl"></div>
	        <header class='post-header'>
	          <div class='post-category'>
	            <?php the_category(', ') ?>
	          </div>
	          <?php if (in_category('portfolio')) : ?>
	          <?php else : ?>  
	            <time class='post-date'>
	              <?php the_time('F j, Y'); ?>
	            </time>
	          <?php endif; ?>  
	          <h2 class='post-title'>
	            <?php if (in_category('portfolio')) : ?>
	            <?php else :?>
	              <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
	                <?php the_title(); ?>
	              </a>
              <?php endif;?>
	          </h2>
	        </header>
	        <div class='post-content'>
						<div class="post-photo">
							<?php if (in_category('portfolio')) : ?>
							  <a href="<?php echo catch_that_image_url(); ?>" rel="fancybox" >
							<?php else : ?>
					      <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">	  
							<?php endif; ?>
								<img src="<?php echo catch_that_image(); ?>" />
							</a>
						</div>
						<?php the_excerpt();?>
	        </div>
	        <footer class='post-footer'>
	          <div class="post-tags"><?php the_tags('Tags: ', ', '); ?></div>
	        </footer>
	      </article>
			<?php endwhile; ?>
      </section>
      <div class="clear"></div>
      <div class="prev-next">
				<div class="alignleft next-posts"><?php next_posts_link('&laquo; Older Entries') ?></div>
				<div class="alignright previous-posts"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
			</div>

			<?php else : ?>

				<h2 class="center">Not Found</h2>
				<p class="center">Sorry, but you are looking for something that isn't here.</p>
				<?php get_search_form(); ?>

			<?php endif; ?>
<?php get_footer(); ?>