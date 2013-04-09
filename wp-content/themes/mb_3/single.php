<?php
get_header();
?>
<div id="main-content"> 
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <article class="post" id="post-<?php the_ID(); ?>">
            <div class="post-container">
              <time class="post-time"><?php the_time('F jS, Y') ?></time>
              <header class="post-header">
                <h2 class="post-title">
                    <?php the_title(); ?>
                </h2>
              </header>
              <section class="post-content">
                  <?php the_content(); ?>
              </section>          
              <footer class="post-footer">
                <p>Posted in <?php the_category(', ') ?> 
                <strong>|</strong>
                <?php edit_post_link('Edit','','<strong>|</strong>'); ?>  
                <?php comments_popup_link('No Comments »', '1 Comment »', '% Comments »'); ?></p>
              </footer>
            </div>
        </article>
      <?php endwhile; ?>
      <?php else : ?>
        <h2 class="center">Not Found</h2>
        <p class="center">
       <?php _e("Sorry, but you are looking for something that isn't here."); ?></p>
    <?php endif; ?>
</div>
<?php get_footer(); ?>
