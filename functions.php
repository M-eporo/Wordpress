<?php
function practice_theme_setup() {
    // 各ページタイトルタグを自動で出力する機能を有効化
    add_theme_support('title-tag');
    // アイキャッチ画像機能を有効化
    add_theme_support('post-thumbnails');
    // アイキャッチ画像のサイズを指定
    add_image_size('page_eyecatch', 1100, 610, true);
    // アーカイブページ用のサムネイルサイズを指定
    add_image_size('archive_thumbnail', 200, 150, true);
    // ナビゲーションメニューを有効化
    register_nav_menus(array(
        'main-menu' => 'メインメニュー',
        'footer-menu' => 'フッターメニュー',
        )
    );
    // 検索フォームのマークアップをHTML5に対応させる
    add_theme_support('html5', array('search-form'));
}
add_action('after_setup_theme', 'practice_theme_setup' );

function practice_enqueue_scripts() {
    wp_enqueue_script('jquery');
    wp_enqueue_script(
        'theme_common_js',
        get_template_directory_uri() . '/assets/js/theme-common.js',
        array('jquery'),
        '1.0.0',
        true,
    );
    wp_enqueue_style(
        'googlefonts',
        'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&display=swap',
        array(),
        '1.0.0'
    );
    wp_enqueue_style(
        'theme_style',
        get_template_directory_uri() . '/assets/css/theme-styles.css',
        array(),
        '1.0.0'
    );
}
add_action('wp_enqueue_scripts', 'practice_enqueue_scripts');