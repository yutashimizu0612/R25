<?php
/**
* Template Name:全カテゴリーを表示
*/
?>

<?php get_header(); ?>
    <div id="allLatestArticle_wrapper">
      <div class="latestArticleList_titleWrapper">
        <span class="whiteTitle">新着記事</span>
      </div><!-- latestArticleList_titleWrapper -->
        <div class="verticalArticleList">
<?php
$args = array(
  'posts_per_page' => 24,
  'orderby' => 'date',
  'order' => 'desc',
  'post_type' => 'post',
  'post_status' => 'publish',
);
$allCategory_posts = new WP_query($args);
if($allCategory_posts->have_posts()) :
  while($allCategory_posts->have_posts()) :
    $allCategory_posts->the_post();
?>
          <div class="verticalArticle">
            <a href="<?php the_permalink(); ?>">
              <div class="verticalArticle_imageWrapper">
                <?php the_post_thumbnail(
                      array(314,164),
                      array('alt' => the_title_attribute('echo=0'),'title' => the_title_attribute('echo=0'))
                    );
                ?>
              </div><!-- verticalArticle_imageWrapper -->
              <div class="verticalArticle_headingWrapper">
                <h3 class="verticalArticle_title"><?php the_title(); ?></h3>
                <div class="verticalArticle_statusWrapper">
                  <span class="verticalArticle_categoryName"><?php the_category(); ?></span>
                  <span class="verticalArticle_publishdate"><?php the_time('Y.m.d'); ?></span>
                </div><!-- verticalArticle_statusWrapper -->
              </div><!-- verticalArticle_headingWrapper -->
            </a>
          </div><!-- verticalArticle -->
<?php
  endwhile;
endif;
wp_reset_postdata();
?>
        </div><!-- verticalArticleList -->
<!-- ページャーの表示 -->
        <div class="pageNavi_wrapper">
<?php
  if(function_exists('page_navi')) :
    page_navi('elm_class=page_navi&edge_type=link');
  endif;
?>
        </div><!-- pageNavi_wrapper -->
    </div><!-- #allLatestArticle_wrapper -->
<?php get_footer(); ?>
