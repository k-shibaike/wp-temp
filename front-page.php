<?php get_header(); ?>
<div class="main">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <?php the_title(); ?>
      <?php the_content(); ?>
      <?php the_permalink(); ?>
    <?php endwhile; ?>
  <?php else : ?>
    <p>no content</p>
  <?php endif; ?>
</div>
<?php get_footer(); ?>