<?php
/* Template Name: Resume */
get_header();
?>
<div id="main-content"> 
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <article class="post" id="post-<?php the_ID(); ?>">
          <div class="post-container">
            <section class="post-content">
                <?php the_content(); ?>
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
<?php get_footer(); ?>
