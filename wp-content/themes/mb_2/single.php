<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="main-wrapper">
	    <aside class="utilities">
	     <ul class='prev-next'>
	      <li class='prev'>
	        <a href="<?php echo get_permalink(get_adjacent_post(false,'',false)); ?>">
	          <span class='prev-icon'></span>
	          <span class='prev-label'>
	            Previous Post
	          </span>
	        </a>
	      </li>
	      <li class='next'>
	        <a href="<?php echo get_permalink(get_adjacent_post(false,'',true)); ?>">
	          <span class='next-label'>
	            Next Post
	          </span>
	          <span class='next-icon'></span>
	        </a>
	      </li>
	    </ul>
	    <?php get_search_form(); ?>
	    <div class='clear'></div>
	    </aside>
	    <section class="main-container">
				<article class='post<?php the_category_unlinked(' '); ?>'>
		      <header class='post-header'>
		        <div class='post-category'>
		          <?php the_category(', ') ?>
		        </div>
		        <time class='post-date'>
		          <?php the_time('F j, Y'); ?>
		        </time>
		        <div class="column">
							<h2 class='post-title'>
		          	<?php the_title(); ?>
			        </h2>
							<div class="post-photo">
								<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
									<img src="<?php echo catch_that_image(); ?>" />
								</a>
							</div>
							<div class="post-tags"><?php the_tags('Tags: ', ', '); ?></div>
			    </header>
		      <div class='post-content'>
		        <?php the_content(); ?>
		      </div>
				  <footer class='post-footer'>
		        <p class="postmetadata alt">
							<small>
								<?php if ( comments_open() && pings_open() ) {
									// Both Comments and Pings are open ?>
									You can <a href="#respond">leave a response</a>, or <a href="<?php trackback_url(); ?>" rel="trackback">trackback</a> from your own site.

								<?php } elseif ( !comments_open() && pings_open() ) {
									// Only Pings are Open ?>
									Responses are currently closed, but you can <a href="<?php trackback_url(); ?> " rel="trackback">trackback</a> from your own site.

								<?php } elseif ( comments_open() && !pings_open() ) {
									// Comments are open, Pings are not ?>
									You can skip to the end and leave a response. Pinging is currently not allowed.

								<?php } elseif ( !comments_open() && !pings_open() ) {
									// Neither Comments, nor Pings are open ?>
									Both comments and pings are currently closed.
								<?php } edit_post_link('Edit this entry','','.'); ?>
							</small>
						</p>
		  		  <?php comments_template(); ?>
		      </footer>
		      <div class="clear"></div>
		    </article>
	    </section>
	    <?php get_sidebar(); ?>
	<?php endwhile; else: ?>
		<p>Sorry, no posts matched your criteria.</p>
  <?php endif; ?>
<?php get_footer(); ?>
