<?php get_header(); ?>
<!-- 記事 -->
  <div id="seriesArticle_wrapper">
    <div id="seriesArticle_imageWrapper">
      <img src="<?php if (function_exists('z_taxonomy_image_url')) echo z_taxonomy_image_url(); ?>">
    </div><!-- #seriesArticle_imageWrapper -->
    <div id="seriesArticle_contents">
      <div id="seriesArticle_summary">
        <h2 class="seriesArticle_title">
          <?php single_tag_title(); ?>
        </h2>
        <p class="seriesArticle_description">
          <?php echo strip_tags(tag_description()); ?>
        </p>
      </div><!-- #seriesArticle_summary -->
      <ul class="snsBar">
          <li>
            <a href=#>
              <img src="<?php echo get_template_directory_uri(); ?>/images/f-ogo_RGB_HEX-58.svg">
            </a>
          </li>
          <li>
            <a href=#>
              <img src="<?php echo get_template_directory_uri(); ?>/images/icons8-twitter-48.png">
            </a>
          </li>
          <li>
            <a href=#>
              <img src="<?php echo get_template_directory_uri(); ?>/images/LINE_SOCIAL_Fukidashi_typeA.png">
            </a>
          </li>
          <li>
            <a href=#>
              <img src="<?php echo get_template_directory_uri(); ?>/images/hatenabookmark-logomark.svg">
            </a>
          </li>
        </ul>
      <div id="seriesArticleList">
<?php
if(have_posts()) :
  while(have_posts()) :
    the_post();
?>
        <div class="seriesArticleListItem">
          <a href="<?php the_permalink(); ?>">
            <div class="seriesArticleListItem_imageWrapper">
              <?php the_post_thumbnail(
                  array(240,126),
                  array('alt' => the_title_attribute('echo=0'),'title' => the_title_attribute('echo=0'))
                 );
              ?>
            </div>
            <div class="seriesArticleListItem_headingWrapper">
              <h3 class="seriesArticleListItem_title">
                <?php the_title(); ?>
              </h3>
              <div class="seriesArticleListItem_statusWrapper">
                <p class="seriesArticleListItem_publishdate"><?php the_time('Y.m.d'); ?></p>
              </div>
            </div>
          </a>
        </div><!-- seriesArticleList_item -->
<?php
  endwhile;
endif;
wp_reset_postdata();
?>
      </div><!-- #seriesArticleList -->
    </div><!-- #seriesArticle_contents -->
  </div><!-- #seriesArticle_wrapper -->
<?php get_footer(); ?>
