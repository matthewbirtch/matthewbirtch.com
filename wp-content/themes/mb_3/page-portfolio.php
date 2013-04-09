<?php
/* Template Name: Portfolio */
get_header(); 
?>
<div class="portfolio preview">
  <?php query_posts('post_type=portfolio&posts_per_page=27'); ?>  
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  	<?php
  		$title= str_ireplace('"', '', trim(get_the_title()));
  		$desc= str_ireplace('"', '', trim(get_the_content()));
  	?>	
  	  <div class="portfolio-item">
        <div class="portfolio-item-container">
          <div class="portfolio-item-thumb">
            <?php the_post_thumbnail(); ?>
          </div>
          <div class="portfolio-item-info">
            <h3 class="portfolio-item-info-title"><a title="" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p classs="portfolio-item-info-description"><?php the_excerpt(); ?></p>
            <?php 
              echo '<ul class="portfolio-item-info-categories">';
              echo get_the_term_list($post->ID, 'project-type','<li>', '</li><li>', '</li>' );
              echo '</ul>';
            ?>
          </div>
        </div>
      </div>
  <?php endwhile; endif; ?>
  <div class="posts-navigation">
   <div class="previous-posts"><?php previous_posts_link('&laquo; Previous Entries') ?></div>
   <div class="next-posts"><?php next_posts_link('Next Entries &raquo;','') ?></div>
  </div>
</div>
<?php get_footer(); ?>