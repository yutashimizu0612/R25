<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php bloginfo('name'); ?></title>
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
<?php wp_head(); ?>
  </head>
  <body>
<!-- 共通ヘッダー（トップページを除く） -->
    <header id="header">
      <div id="header_wrapper">
        <a href="<?php echo home_url(); ?>">
          <h2 class="R25_logo">新R25</h2>
        </a>
        <?php wp_nav_menu(array(
          'menu_id' => 'header_categoryMenuList',
          'theme_location' => 'place_global'
          ));
        ?>
      </div>
    </header>
