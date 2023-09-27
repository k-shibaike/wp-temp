<div class="main">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <a href="<?php the_permalink(); ?>">
        <?php the_title(); ?>
        <?php echo get_the_excerpt(); ?>
        <?php the_time('Y.m.d'); ?>

        <?php if (has_post_thumbnail()) : ?>
          <?php the_post_thumbnail(); ?>
        <?php else : ?>

          <img class="" src="<?php echo get_template_directory_uri(); ?>/img/dammy.png" alt="">
        <?php endif; ?>

        <?php
        $categories = get_the_category();
        if ($categories) {
          echo $categories[0]->name;
        }
        ?>
      </a>
  <?php endwhile;
  endif;
  wp_reset_query(); ?>
</div>