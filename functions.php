<?php
// アイキャッチ画像を利用できるようにする
add_theme_support('post-thumbnails');

//投稿記事トップ用画像サイズ設定
add_image_size('single_thumbnail',680,356,true);

//カスタムメニュー
register_nav_menus(
  array(
    'place_global' => 'グローバル'
  )
);
