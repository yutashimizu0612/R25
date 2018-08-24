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
    <div id="all_wrap">
<!-- トップページヘッダー -->
      <header id="headerTop">
          <div id="headerTitle">
            <img src="<?php echo get_template_directory_uri(); ?>/images/mainicon.png" alt="<?php bloginfo('name'); ?>">
          </div><!-- #headerTitle -->
          <div id="headerTop_background">
            <div id="headerTop_content">
              <?php wp_nav_menu(array(
                'menu_id' => 'headerTop_categoryMenuList',
                'theme_location' => 'place_global'
                ));
                ?>
              <div id="pickup_content" class="clearfix">
                <a href="#">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/headerimage.jpg" id="header_image">
                  <div id="pickup_heading">
                    <p class="pickup_subtitle">
                      日本の朝を変えるために会社を辞めた男
                    </p>
                    <h1 class="pickup_title">
                      5時こーじが語る「朝活の魅力」が想像以上だった
                    </h1>
                    <ul class="pickup_status">
                      <li class="pickup_category">ライフスタイル</li>
                      <li class="pickup_publishdate">2018.08.13</li>
                    </ul>
                  </div><!-- #pickup_heading -->
                </a>
              </div><!-- #pickup_content -->
            </div><!-- #headerTop_content -->
          </div><!-- #headerTop_background -->
      </header>
