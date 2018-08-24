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
<!-- 共通ヘッダー（トップページを除く） -->
    <header id="header">
      <div id="header_wrapper">
        <a href="https://r25.jp/">
          <h2 class="R25_logo">新R25</h2>
        </a>
        <ul id="header_categoryMenuList">
          <li>
            <a href=#>仕事・ビジネス</a>
          </li>
          <li>
            <a href=#>社会・政治</a>
          </li>
          <li>
            <a href=#>経済・マネー</a>
          </li>
          <li>
            <a href=#>芸能・エンタメ</a>
          </li>
          <li>
            <a href=#>ライフスタイル</a>
          </li>
        </ul>
      </div>
    </header>
