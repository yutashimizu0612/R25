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

//記事本文の画像をpタグで囲わない
function remove_p_on_images($content){
  return preg_replace('/<p>(\s*)(<img .* \/>)(\s*)<\/p>/iU', '\2', $content);
}
add_filter('the_content','remove_p_on_images');
