<?php


// アイキャッチ画像を有効にする。
add_theme_support('post-thumbnails');

// ナブメニュー
add_theme_support( 'menus' );

//アイキャッチ画像
add_image_size('newpost', 340, 200, true);
add_image_size('single', 800, 494, true);
// add_image_size('single_thumbnail', 1200, 441, true);


// ウィジェット
register_sidebar();
