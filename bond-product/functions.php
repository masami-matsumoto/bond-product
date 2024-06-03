<?php
// アイキャッチ画像を有効にする
function my_after_setup_theme(){
	// アイキャッチ画像を有効にする
	add_theme_support( 'post-thumbnails' ); 
	// アイキャッチ画像サイズを指定する（横：640px 縦：384）
	// 画像サイズをオーバーした場合は切り抜き
	set_post_thumbnail_size( 306, 230, true ); 
}
add_action( 'after_setup_theme', 'my_after_setup_theme' );

/**
 *ヘッダー、フッターのカスタムメニュー化
 */
register_nav_menus(
array(
'place_global' => 'グローバル',
'place_contact' => 'コンタクト',
'place_footer' => 'フッターナビ',
)
);

// wp_nav_menuのliにclass追加
function add_additional_class_on_li($classes, $item, $args)
{
  if (isset($args->add_li_class)) {
    $classes['class'] = $args->add_li_class;
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

// wp_nav_menuのaにclass追加
function add_additional_class_on_a($atts, $item, $args)
{
    if (isset($args->add_a_class)) {
        $atts['class'] = $args->add_a_class;
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 10, 3);

// 固定ページでカテゴリーを有効化
function add_category_to_page() {
	register_taxonomy_for_object_type('category','page');
}
add_action('init','add_category_to_page');
// カテゴリアーカイブに固定ページを含める
function add_page_to_category_archive($query) {
	if ($query->is_category== true && $query->is_main_query()) {
		$query->set('post_type', array('post','page'));
	}
}
add_action('pre_get_posts','add_page_to_category_archive');

// 固定ページでタグを有効化
function add_tag_to_page() {
	register_taxonomy_for_object_type('post_tag','page');
}
add_action('init','add_tag_to_page');
// タグアーカイブに固定ページを含める
function add_page_to_tag_archive($obj) {
	if (is_tag()) {
		$obj->query_vars['post_type'] = array('post','page');
	}
}
add_action('pre_get_posts','add_page_to_tag_archive');

function original_pagenation(){

    the_posts_pagination(
        array(
            'mid_size' => 2,
			'format' => '?=%#%',
            'prev_text' => '前へ',
            'next_text' => '次へ',
        )
    );
}

function searchFilter($query){
  if(!is_admin() && $query->is_main_query() && $query->is_search()){
    $query->set('post_type','case-study');
    $query->set('posts_per_page',6);
    $query->set('paged', ( get_query_var('paged') ) ? get_query_var('paged') : 1 );
  }
}

add_action('pre_get_posts','searchFilter');

// Contact Form7に確認用メールアドレス入力欄を設置
function wpcf7_custom_email_validation_filter( $result, $tag ) {
  if ( 'your-email-confirm' == $tag->name ) {
    $your_email = isset( $_POST['your-email'] ) ? trim( $_POST['your-email'] ) : '';
    $your_email_confirm = isset( $_POST['your-email-confirm'] ) ? trim( $_POST['your-email-confirm'] ) : '';
    if ( $your_email != $your_email_confirm ) {
      $result->invalidate( $tag, "メールアドレスが一致しません" );
    }
  }
  return $result;
}
add_filter( 'wpcf7_validate_email', 'wpcf7_custom_email_validation_filter', 20, 2 );
add_filter( 'wpcf7_validate_email*', 'wpcf7_custom_email_validation_filter', 20, 2 );

// お問い合わせフォーム確認画面用javascript
function enqueue_confirmation_script() {
  wp_enqueue_script('confirmation-script', get_template_directory_uri() . '/js/confirmation.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_confirmation_script');

