<?php
// アイキャッチ画像を利用できるようにする
add_theme_support('post-thumbnails');

//カスタムメニュー
register_nav_menus(
  array(
    'place_global' => 'グローバル'
  )
);
