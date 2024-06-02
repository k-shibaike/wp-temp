<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); wp_title('|', true, 'left'); ?></title>
  <?php wp_head(); ?>
</head>
<body>
  
<header id="header_pc">
      <div class="header-left">
        <a href="/">
          <img class="header-logo" src="<?php echo get_template_directory_uri() ?>/images/logo.png" alt="">
        </a>
      </div>
      <div class="header-right">
        <?php
        wp_nav_menu(array(
          'theme_location' => '',
          'container' => 'nav',
          'menu_class' => 'header-list',
          // 'menu_id' => 'header_list',
          'items_wrap' => '<ul class="%2$s">%3$s</ul>',
          'depth' => 3,
        ));
        ?>
      </div>
    </header>
