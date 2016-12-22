<?php

/**
 * Register custom menus
 */
register_nav_menus();

/**
 * アイキャッチ画像の有効化
 */
add_theme_support('post-thumbnails');
/**
 * 画像サイズの登録
 */
add_image_size('news-thumb', 64, 64, true);
/**
 * カスタム投稿タイプ（新着情報）の登録
 */
register_post_type(
		'news',
		array(
				'labels' => array(
						'name' => 'News',
						'add_new_item' => 'Add News',
						'edit_item' => 'Edit News'
				),
				'public' => true,
				'supports' => array('title', 'editor', 'thumbnail')
		)
);

?>