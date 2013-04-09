<?php
/* Template Name: Home */
get_header(); 
?>
<div class="main-content">
  <div class="intro">
    <div class="intro-container">
      <a class="intro-hide-button" href="#">x</a>
      <p class='intro-copy'><strong>Hello there.</strong> Thanks for stopping by my <a href="blog">blog</a> and <a href="portfolio">portfolio</a> site. If it’s your first time here and you’re wondering who this <em>Matthew Birtch guy</em> is, I hope you’ll stick around and learn more <a href="about">about me</a> and my work.</p>
    </div>
  </div>
</div>
<div class="latest">
  <h3>Recent Work</h3>
</div>
<div class="portfolio preview">
  <?php query_posts('post_type=portfolio&posts_per_page=9'); ?>  
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
</div>
<?php rewind_posts(); ?>
<?php query_posts('posts_per_page=8'); ?>  
<div class="latest">
  <h3>Recent Posts</h3>
</div>
<div class="posts preview">
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
            <div class="clear"></div>
          </div>
      </article>

    <?php endwhile; ?>
      <a class="" href="blog/">More Posts</a>
     </div>
     <?php else : ?>
      <h2 class="center">Not Found</h2>
      <p class="center">
     <?php _e("Sorry, but you are looking for something that isn't here."); ?></p>
  <?php endif; ?>
</div>
<?php get_footer(); ?>