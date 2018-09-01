<!-- アプリダウンロード -->
      <div id="appDownload">
        <div id="appDownload_imageWrapper">
          <img src="<?php echo get_template_directory_uri(); ?>/images/home-app-download.jpg">
        </div><!-- #appDownload_imageWrapper -->
        <div id="appDownload_bannerWrapper">
          <a href="https://itunes.apple.com/jp/app/id909585120">
            <img src="<?php echo get_template_directory_uri(); ?>/images/ios-badge.png">
          </a>
          <a href="https://play.google.com/store/apps/details?id=jp.co.cyberagent.spotlight&hl=ja" id="googleBanner">
            <img src="<?php echo get_template_directory_uri(); ?>/images/android-badge.png">
          </a>
        </div><!-- #appDownload_bannerWrapper -->
      </div><!-- #appDownload -->
<!-- フッター -->
      <footer id="footer">
        <div id="footer_snsWrapper">
          <p>新R25をフォローして新着記事を受け取ろう！</p>
          <div id="footer_facebook">
            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FshinR25%2F&tabs=timeline&width=340&height=121&small_header=false&adapt_container_width=true&hide_cover=true&show_facepile=false&appId" width="340" height="121" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
          </div>
          <div id="footer_twitter">
            <a href="https://twitter.com/shin_R25?ref_src=twsrc%5Etfw" class="twitter-follow-button" width="340px" height="44px" data-show-count="false">新R25をフォローする</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
          </div>
        </div><!-- #footer_snsWrapper -->
        <div id="footer_linkWrapper">
          <a href="https://r25.jp/" id="footer_linkTitle">新R25</a>
          <ul class="footer_linkWrapper_linkList">
            <a href="#">
              <li>新R25とは？</li>
            </a>
            <a href="#">
              <li>運用会社</li>
            </a>
            <a href="#">
              <li>お問い合わせ</li>
            </a>
          </ul>
          <ul class="footer_linkWrapper_linkList">
            <a href="#">
              <li>プライバシーポリシー</li>
            </a>
            <a href="#">
              <li>ご利用にあたって</li>
            </a>
          </ul>
          <p class="copyRight">© 2018 ShinR25</p>
          <a href="https://cyberagent-career.jp/recruit/joboffer/84/144894/1865-2524">
            <img src="<?php echo get_template_directory_uri(); ?>/images/writer-recruitment.jpg" class="footer_writerRecruit" alt="R25世代のバイブルをつくる 編集スタッフ募集中">
          </a>
        </div><!-- #footer_linkWrapper -->
      </footer>
    </div><!-- #all_wrapper -->
<?php wp_footer(); ?>
  </body>
</html>
