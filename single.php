<?php get_header(); ?>
<!-- 記事 -->
    <div id="articleWrapper">
      <div id="articleImageWrapper">
        <img src="images/single.jpg">
      </div><!-- #articleImageWrapper -->
     <div class="articleContentsWrapper">
      <div class="articleHeadingWrapper">
          <p class="articleSubtitle">
            「自然体でいたほうが、テレビで長く生き残れる」
          </p><!-- articleSubtitle -->
          <h2 class="articleTitle">
            <?php the_title(); ?>
          </h2>
        <div class="articleStatusWrapper">
          <span class="articleCategoryName"><?php the_category(); ?></span>
          <span class="articlePublishdate">2018.05.22  by 新R25編集部</span>
        </div><!-- articleStatusWrapper -->
      </div><!-- articleHeadingWrapper -->
<!-- 単体記事後半部分 -->
     <div class="articleBottom_wrapper">
      <ul class="articleBottom_sns">
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
