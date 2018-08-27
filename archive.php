<?php get_header(); ?>
<!-- カテゴリーページ_カテゴリーリスト -->
    <div id="categoryPage_contentWrapper">
      <div id="categoryArticleList_wrapper">
        <div id="categoryTitle_wrapper">
          <div id="categoryTitle_firstColumn">
            <span class="categoryTitle">ここからはじめる</span>
          </div><!-- #categoryTitle_firstColumn -->
          <div id="categoryTitle_secondColumn">
            <span class="categoryTitle">経済・マネー</span>
          </div><!-- #categoryTitle_secondColumn -->
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
      </div><!-- #categoryArticleList_wrapper -->
<!-- カテゴリーページ_新着記事リスト -->
      <div id="categoryPage_latestArticleList_wrapper">
        <div id="categoryPage_latestArticleList_titleWrapper">
          <span class="whiteTitle">新着記事</span>
        </div><!-- #categoryPage_latestArticleList_titleWrapper -->
        <div class="verticalArticleList">
          <div class="verticalArticle">
            <a href="#">
              <div class="verticalArticle_imageWrapper">
                <img src="images/cp_latestArticle1.jpg">
              </div><!-- verticalArticle_imageWrapper -->
              <div class="verticalArticle_headingWrapper">
                <h3 class="verticalArticle_title">熱意はこう伝えて、信頼を得よ。数多のチームを率いる西野亮廣流「リーダーの作法」</h3>
                <div class="verticalArticle_statusWrapper">
                  <span class="verticalArticle_categoryName">仕事・ビジネス</span>
                  <span class="verticalArticle_publishdate">2018.08.17</span>
                </div><!-- verticalArticle_statusWrapper -->
              </div><!-- verticalArticle_headingWrapper -->
            </a>
          </div><!-- verticalArticle -->
          <div class="verticalArticle">
            <a href="#">
              <div class="verticalArticle_imageWrapper">
                <img src="images/cp_latestArticle2.jpg">
              </div><!-- verticalArticle_imageWrapper -->
              <div class="verticalArticle_headingWrapper">
                <h3 class="verticalArticle_title">無駄に高価なモノも、コスパ至上主義もつまらない。そんな時代に“ドヤれる消費”とは？</h3>
                <div class="verticalArticle_statusWrapper">
                  <span class="verticalArticle_categoryName">ライフスタイル</span>
                  <span class="verticalArticle_publishdate">2018.08.16</span>
                </div><!-- verticalArticle_statusWrapper -->
              </div><!-- verticalArticle_headingWrapper -->
            </a>
          </div><!-- verticalArticle -->
          <div class="verticalArticle">
            <a href="#">
              <div class="verticalArticle_imageWrapper">
                <img src="images/cp_latestArticle3.jpg">
              </div><!-- verticalArticle_imageWrapper -->
              <div class="verticalArticle_headingWrapper">
                <h3 class="verticalArticle_title">自己資産はいくら？ 仮想通貨ブームに乗らなかったR25世代の資産運用状況を調査！</h3>
                <div class="verticalArticle_statusWrapper">
                  <span class="verticalArticle_categoryName">経済・マネー</span>
                  <span class="verticalArticle_publishdate">2018.08.13</span>
                </div><!-- verticalArticle_statusWrapper -->
              </div><!-- verticalArticle_headingWrapper -->
            </a>
          </div><!-- verticalArticle -->
          <div class="verticalArticle">
            <a href="#">
              <div class="verticalArticle_imageWrapper">
                <img src="images/cp_latestArticle4.jpg">
              </div><!-- verticalArticle_imageWrapper -->
              <div class="verticalArticle_headingWrapper">
                <h3 class="verticalArticle_title">「好きすぎて、食べちゃいたい」隠しつづけたコンプレックスを仕事にした“昆虫食伝道師”</h3>
                <div class="verticalArticle_statusWrapper">
                  <span class="verticalArticle_categoryName">仕事・ビジネス</span>
                  <span class="verticalArticle_publishdate">2018.08.16</span>
                </div><!-- verticalArticle_statusWrapper -->
              </div><!-- verticalArticle_headingWrapper -->
            </a>
          </div><!-- verticalArticle -->
          <div class="verticalArticle">
            <a href="#">
              <div class="verticalArticle_imageWrapper">
                <img src="images/cp_latestArticle5.jpg">
              </div><!-- verticalArticle_imageWrapper -->
              <div class="verticalArticle_headingWrapper">
                <h3 class="verticalArticle_title">吉田尚記アナ「ラジオは寂しさを埋めてくれる。絶対になくならない成長産業です」</h3>
                <div class="verticalArticle_statusWrapper">
                  <span class="verticalArticle_categoryName">芸能・エンタメ</span>
                  <span class="verticalArticle_publishdate">2018.08.15</span>
                </div><!-- verticalArticle_statusWrapper -->
              </div><!-- verticalArticle_headingWrapper -->
            </a>
          </div><!-- verticalArticle -->
          <div class="verticalArticle">
            <a href="#">
              <div class="verticalArticle_imageWrapper">
                <img src="images/cp_latestArticle6.jpg">
              </div><!-- verticalArticle_imageWrapper -->
              <div class="verticalArticle_headingWrapper">
                <h3 class="verticalArticle_title">「お客さんを選ぶのは、価値観の整理整頓をしたいから」居酒屋ガツン！のコミュニティづくり</h3>
                <div class="verticalArticle_statusWrapper">
                  <span class="verticalArticle_categoryName">ライフスタイル</span>
                  <span class="verticalArticle_publishdate">2018.08.15</span>
                </div><!-- verticalArticle_statusWrapper -->
              </div><!-- verticalArticle_headingWrapper -->
            </a>
          </div><!-- verticalArticle -->
        </div><!-- verticalArticleList -->
          <a href=# class="moreButton">
            <p class="to_list">一覧へ</p>
          </a>
      </div><!-- #categoryPage_latestArticleList_wrapper -->
    </div><!-- #categoryPage_contentWrapper -->
<?php get_footer(); ?>
