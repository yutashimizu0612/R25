<?php get_header(); ?>
<!-- 記事 -->
    <div id="articleWrapper">
      <div id="articleImageWrapper">
        <?php the_post_thumbnail(
          'single_thumbnail',
          array('alt' => the_title_attribute('echo=0'),'title' => the_title_attribute('echo=0'))
         );
        ?>
      </div><!-- #articleImageWrapper -->
     <div class="articleContentsWrapper">
      <div class="articleHeadingWrapper">
          <p class="articleSubtitle">
            <?php echo esc_html($post->subtitle); ?>
          </p><!-- articleSubtitle -->
          <h2 class="articleTitle">
            <?php the_title(); ?>
          </h2>
        <div class="articleStatusWrapper">
          <span class="articleCategoryName"><?php the_category(); ?></span>
          <span class="articlePublishdate"><?php the_time('Y.m.d');?>  by 新R25編集部</span>
        </div><!-- articleStatusWrapper -->
      </div><!-- articleHeadingWrapper -->
<!-- 記事本文 -->
<?php
if(have_posts()) :
  while(have_posts()) :
    the_post();
?>
    <div class="singleArticle_content">
      <?php the_content(); ?>
    </div>
<?php
  endwhile;
endif;
?>
<!-- 単体記事後半部分 -->
     <div class="articleBottom_wrapper">
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
      <div class="articleBottom_catchWrapper">
        <span class="articleBottom_R25Logo"><?php bloginfo('name'); ?></span>
        <span class="articleBottom_catch"><?php bloginfo('description'); ?></span>
      </div>
      <ul class="articleBottom_marketing">
        <li>
          <a href=#>
            <p class="articleBottom_marketing_linkText">ライター・コラムニスト募集中！</p>
          </a>
        </li>
        <li>
          <a href=#>
            <p class="articleBottom_marketing_linkText">商品や企業の魅力をPRしませんか？</p>
          </a>
        </li>
      </ul>
     </div><!-- #articleBottom_wrapper -->
     </div><!-- articleContentsWrapper -->
    </div><!-- #articleWrapper -->
<?php get_footer(); ?>
