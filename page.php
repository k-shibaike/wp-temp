<?php get_header(); ?>
<div class="main">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <!-- 日付 -->
      <?php the_time(get_option('date_format')); ?>
      <!-- 記事のタイトル -->
      <?php the_title(); ?>
      <!-- アイキャッチ画像 -->
      <?php if (has_post_thumbnail()) : ?>
        <?php the_post_thumbnail(); ?>
      <?php endif ?>
      <!-- 記事の本文 -->
      <?php the_content(); ?>
    <?php endwhile; ?>
  <?php else : ?>
    <p>no content</p>
  <?php endif; ?>
  <!-- サイトバー -->
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>