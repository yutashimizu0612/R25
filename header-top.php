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
            <img src="<?php echo get_template_directory_uri(); ?>/images/mainicon.png" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>">
          </div><!-- #headerTitle -->
          <div id="headerTop_background">
            <div id="headerTop_content">
              <?php wp_nav_menu(array(
                'menu_id' => 'headerTop_categoryMenuList',
                'theme_location' => 'place_global'
                ));
              ?>
<?php
$home_pickupPost = new WP_Query('posts_per_page=1&post_type=post&orderby=date&order=desc');
if($home_pickupPost->have_posts()) :
  while($home_pickupPost->have_posts()) :
    $home_pickupPost->the_post();
?>
              <div id="pickup_content" class="clearfix">
                <a href="<?php the_permalink(); ?>">
                  <div id="pickup_imageWrapper">
                    <?php the_post_thumbnail(
                        array(560,294),
                        array('alt' => the_title_attribute('echo=0'),'title' => the_title_attribute('echo=0'))
                      );
                    ?>
                  </div><!-- #pickup_imageWrapper -->
                  <div id="pickup_headingWrapper">
                      <p class="pickup_subtitle">
                        <?php echo esc_html($post->subtitle); ?>
                      </p>
                    <h1 class="pickup_title">
                      <?php the_title(); ?>
                    </h1>
                    <ul class="pickup_status">
                      <li class="pickup_category"><?php the_category(); ?></li>
                      <li class="pickup_publishdate"><?php the_time('Y.m.d'); ?></li>
                    </ul>
                  </div><!-- #pickup_headingWrapper -->
                </a>
              </div><!-- #pickup_content -->
<?php
  endwhile;
endif;
wp_reset_postdata();
?>
            </div><!-- #headerTop_content -->
          </div><!-- #headerTop_background -->
      </header>
