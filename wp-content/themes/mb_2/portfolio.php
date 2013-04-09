<?php
/*
 Template Name: Portfolio
 */
?>
<?php get_header(); ?>
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="main-wrapper">
	    <section class="main-container">
		    <?php the_content(); ?>
		  </section>
	  </div>
	<?php endwhile; else: ?>
		<p>Sorry, no posts matched your criteria.</p>
  <?php endif; ?>
<?php get_footer(); ?>
<script>
$('.main-container').masonry({
  itemSelector: 'img',
  isAnimated: true, 
  animationOptions: {
    duration: 400
  }
});
</script>