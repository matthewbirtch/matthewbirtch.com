<?php
get_header();
query_posts('posts_per_page=8');
?>
<div id="main-content">
  <div class="posts">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <article class="post preview" id="post-<?php the_ID(); ?>">
          <div class="post-container">
            <header class="post-header">
              <h2 class="post-title">
                <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
                  <?php the_title(); ?>
                </a>
              </h2>
            </header>
            <div class="post-thumbnail">
              <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
                <?php 
                if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                  the_post_thumbnail();
                } 
                ?>
              </a>
            </div>
            <time class="post-time"><?php the_time('F jS, Y') ?></time>
            <?php echo get_the_category_list(); ?>
            <section class="post-content">
                <?php the_excerpt(); ?>
            </section>          
          </div>
      </article>
    <?php endwhile; ?>
     <?php else : ?>
      <h2 class="center">Not Found</h2>
      <p class="center">
     <?php _e("Sorry, but you are looking for something that isn't here."); ?></p>
  <?php endif; ?>
  </div>
  <div class="posts-navigation">
   <div class="previous-posts"><?php previous_posts_link('&laquo; Previous Entries') ?></div>
   <div class="next-posts"><?php next_posts_link('Next Entries &raquo;','') ?></div>
  </div>
</div>
<?php get_footer(); ?>