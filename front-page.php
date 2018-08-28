<?php get_header('top'); ?>
<!-- トップページ新着記事 -->
      <div id="home_latestArticle_wrapper" class="clearfix">
        <div id="home_latestArticleList_header">
          <span class="whiteTitle">新着記事</span>
          <p class="to_list">一覧へ</p>
        </div><!-- #home_latestArticleList_header -->
        <div id="home_latestArticleList_wrapper">
          <div class="home_latestArticleList">
<?php
$latestArticle_leftPosts = new WP_Query('posts_per_page=3&post_type=post&orderby=date&order=desc&offset=1');
if($latestArticle_leftPosts->have_posts()) :
  while($latestArticle_leftPosts->have_posts()) :
    $latestArticle_leftPosts->the_post();
?>
            <div class="home_latestArticleList_item">
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail(
                      array(200,104),
                      array('alt' => the_title_attribute('echo=0'),'title' => the_title_attribute('echo=0'))
                    );
                ?>
                <div class="home_latestArticleList_statusWrapper">
                  <h3><?php the_title(); ?></h3>
                  <p><?php the_time('Y.m.d'); ?></p>
                </div><!-- home_latestArticleList_statusWrapper -->
              </a>
            </div><!-- home_latestArticleList_item -->
<?php
  endwhile;
endif;
wp_reset_postdata();
?>
            <div id="home_latestArticleList_featureBanner">
              <a href="#">
                <img src="<?php echo get_template_directory_uri(); ?>/images/feature_banner.jpg">
              </a>
            </div><!-- home_latestArticleList_featureBanner -->
          </div><!-- .home_latestArticleList -->

          <div class="home_latestArticleList">
<?php
$latestArticle_rightPosts = new WP_Query('posts_per_page=4&post_type=post&orderby=date&order=desc&offset=4');
if($latestArticle_rightPosts->have_posts()) :
  while($latestArticle_rightPosts->have_posts()) :
    $latestArticle_rightPosts->the_post();
?>
            <div class="home_latestArticleList_item">
              <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail(
                      array(200,104),
                      array('alt' => the_title_attribute('echo=0'),'title' => the_title_attribute('echo=0'))
                    );
                ?>
                <div class="home_latestArticleList_statusWrapper">
                  <h3><?php the_title(); ?></h3>
                  <p><?php the_time('Y.m.d'); ?></p>
                </div><!-- home_latestArticleList_statusWrapper -->
              </a>
            </div><!-- home_latestArticleList_item -->
<?php
  endwhile;
endif;
wp_reset_postdata();
?>
          </div><!-- .home_latestArticleList -->

        </div><!-- #home_latestArticleList_wrapper -->
      </div><!-- #home_latestArticle_wrapper -->
<!-- トップページ連載記事 -->
      <div id="home_seriesArticle_wrapper">
        <div id="home_seriesArticle_header">
          <span class="whiteTitle">連載記事</span>
          <a href="#">
            <p class="to_list">一覧へ</p>
          </a>
        </div><!-- #home_seriesArticle_header -->
        <div id="home_seriesArticle_background">
          <div id="home_seriesArticleContent_wrapper">
            <a href="#">
              <img src="<?php echo get_template_directory_uri(); ?>/images/seriesArticle_main.jpg" width="480" height="240">
            </a>
            <div id="home_seriesArticleList">
<?php
$asset_management_posts = new WP_Query('posts_per_page=3&post_type=post&orderby=date&order=desc&tag=asset_management');
if($asset_management_posts->have_posts()) :
  while($asset_management_posts->have_posts()) :
    $asset_management_posts->the_post();
?>
              <div class="verticalArticleCard">
                <a href="<?php the_permalink(); ?>">
                  <div class="verticalArticleCard_imageWrapper">
                    <?php the_post_thumbnail(
                      array(162,86),
                      array('alt' => the_title_attribute('echo=0'),'title' => the_title_attribute('echo=0'))
                     );
                    ?>
                    <span class="number_icon">No.2</span>
                  </div><!-- verticalArticleCard_imageWrapper -->
                  <div class="verticalArticleCard_headingWrapper">
                    <h3 class="verticalArticleCard_title"><?php the_title(); ?></h3>
                    <div class="verticalArticleCard_statusWrapper">
                     <p class="verticalArticleCard_publishdate"><?php the_time('Y.m.d'); ?></p>
                    </div><!-- verticalArticleCard_statusWrapper -->
                  </div><!-- verticalArticleCard_headingWrapper -->
                </a>
              </div><!-- verticalArticleCard -->
<?php
  endwhile;
endif;
wp_reset_postdata();
?>
            </div><!-- #home_seriesArticleList -->
          </div><!-- #home_seriesArticleContent_wrapper -->
        </div><!-- #home_seriesArticle_background -->
      </div><!-- #home_seriesArticle_wrapper -->
<!-- トップページカテゴリー別 -->
      <div id="home_category_wrapper">
<?php
$category_names = array('business','society','money','entertainment','life');//スラッグを使用してループ。カテゴリー別に#categoryBlockを生成する
foreach($category_names as $category_name):
  $category_mainPost = new WP_Query('posts_per_page=1&post_type=post&orderby=date&order=desc&category_name='.$category_name);
  if($category_mainPost->have_posts()) :
    while($category_mainPost->have_posts()) :
      $category_mainPost->the_post();
?>
        <div class="home_categoryBlock">
          <div class="home_categoryArticle_wrapper">
            <div class="home_categoryBlock_title">
              <img src="<?php echo get_template_directory_uri(); ?>/images/home_categoryBlock_title_<?php echo $category_name; ?>.png">
            </div><!-- home_categoryBlock_title -->
              <div class="home_categoryBlock_mainArticle">
                <a href="<?php the_permalink(); ?>">
                  <div class="home_categoryBlock_mainArticle_imageWrapper">
                    <?php the_post_thumbnail(
                        array(436,230),
                        array('alt' => the_title_attribute('echo=0'),'title' => the_title_attribute('echo=0'))
                       );
                    ?>
                  </div><!-- home_categoryBlock_mainArticle_imageWrapper -->
                  <div class="home_categoryBlock_mainArticle_headingWrapper">
                    <p class="home_categoryBlock_mainArticle_subtitle"><?php echo esc_html($post->subtitle); ?></p>
                    <h2><?php the_title(); ?></h2>
                    <div class="home_categoryBlock_mainArticle_statusWrapper">
                     <p class="home_categoryBlock_publishdate"><?php the_time('Y.m.d'); ?></p>
                    </div><!-- home_categoryBlock_mainArticle_statusWrapper -->
                  </div><!-- home_categoryBlock_mainArticle_headingWrapper -->
                </a>
              </div><!-- home_categoryBlock_mainArticle -->
  <?php
    endwhile;
  endif;
  wp_reset_postdata();
  ?>
              <div class="home_categoryBlock_articleList">
  <?php
  $category_subPosts = new WP_Query('posts_per_page=3&post_type=post&orderby=date&order=desc&offset=1&category_name='.$category_name);
  if($category_subPosts->have_posts()) :
    while($category_subPosts->have_posts()) :
      $category_subPosts->the_post();
  ?>
                <div class="home_categoryBlock_articleListItem">
                  <a href="<?php the_permalink(); ?>">
                    <div class="home_categoryBlock_articleListItem_imageWrapper">
                      <?php the_post_thumbnail(
                        array(182,96),
                        array('alt' => the_title_attribute('echo=0'),'title' => the_title_attribute('echo=0'))
                       );
                      ?>
                    </div><!-- home_categoryBlock_articleListItem_imageWrapper -->
                    <div class="home_categoryBlock_articleListItem_headingWrapper">
                      <h3><?php the_title(); ?></h3>
                      <div class="home_categoryBlock_articleListItem_statusWrapper">
                       <p class="home_categoryBlock_publishdate"><?php the_time('Y.m.d'); ?></p>
                      </div><!-- home_categoryBlock_articleListItem_statusWrapper -->
                    </div><!-- home_categoryBlock_articleListItem_headingWrapper -->
                  </a>
                </div><!-- home_categoryBlock_articleListItem -->
  <?php
    endwhile;
  endif;
  wp_reset_postdata();
  ?>
              </div><!-- home_categoryBlock_articleList -->
            </div><!-- home_categoryArticle_wrapper -->
              <a href=# class="moreButton">
                <p class="to_list">一覧へ</p>
              </a>
          </div><!-- home_categoryBlock -->
<?php endforeach; ?>
      </div><!-- #home_category_wrapper -->
<?php get_footer(); ?>
