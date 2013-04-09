<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

get_header();
?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
		  <div class="post_navigation">
    		<div class="post_date"><div class="post_date_month"><?php the_time('M') ?></div><div class="post_date_date"><?php the_time('d') ?></div></div>
    		<div class="post_category">Posted in: <?php the_category(', ') ?> </div>
        <ul id="prevnext_navigation">
  		    <li class="prev"><?php previous_post_link('%link') ?></li>
    			<li class="next"><?php next_post_link('%link') ?></li>
    		</ul>
    		<div class="clear"></div>
    	</div>
			<div class="post_wrapper">
			  <h2><?php the_title(); ?></h2>

  			<div class="entry">
  				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
        </div>
  				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
        
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
  		</div>
  		
		</div>

	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>


<?php get_footer(); ?>
