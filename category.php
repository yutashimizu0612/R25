<?php get_header(); ?>
<!-- カテゴリーページ_カテゴリーリスト -->
    <div id="categoryPage_contentWrapper">
      <div id="categoryArticleList_wrapper">
        <div id="categoryTitle_wrapper">
          <div id="categoryTitle_wrapper">
            <div id="categoryTitle_firstColumn">
              <span class="categoryTitle">
                <?php $cat=get_the_category();echo $cat[0]->description; ?>
              </span>
            </div><!-- #categoryTitle_firstColumn -->
            <div id="categoryTitle_secondColumn">
              <span class="categoryTitle">
                <?php $cat=get_the_category();echo $cat[0]->name; ?>
              </span>
            </div><!-- #categoryTitle_secondColumn -->
          </div><!-- #categoryTitle -->
        </div><!-- #categoryTitle_wrapper -->
        <div class="verticalArticleList">
<?php
if(have_posts()) :
  while(have_posts()) :
    the_post();
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
      </div><!-- #categoryArticleList_wrapper -->
<!-- カテゴリーページ_新着記事リスト -->
      <div id="latestArticleList_wrapper">
        <div id="latestArticleList_titleWrapper">
          <span class="whiteTitle">新着記事</span>
        </div><!-- #latestArticleList_titleWrapper -->
        <div class="verticalArticleList">
<?php
$latestArticlePosts = new WP_Query('posts_per_page=6&post_type=post&orderby=date&order=desc');
if($latestArticlePosts->have_posts()) :
  while($latestArticlePosts->have_posts()) :
    $latestArticlePosts->the_post();
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
                <h3 class="verticalArticle_title">
                  <?php the_title(); ?>
                </h3>
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
          <a href=# class="moreButton">
            <p class="to_list">一覧へ</p>
          </a>
      </div><!-- #latestArticleList_wrapper -->
    </div><!-- #categoryPage_contentWrapper -->
<?php get_footer(); ?>
