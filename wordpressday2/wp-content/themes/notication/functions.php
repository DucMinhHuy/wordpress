<?php
//アイキャッチ画像
add_theme_support( 'post-thumbnails' );


//phpファイルの呼び出し方法 [myphp file='filename']
function my_php_Include($params = array()) {
extract(shortcode_atts(array('file' => 'default'), $params));
ob_start();
include(STYLESHEETPATH . "/$file.php");
return ob_get_clean();
}
add_shortcode('myphp', 'my_php_Include');


function SearchFilter($query) {
  if ( !is_admin() && $query->is_main_query() && $query->is_search() ) {
  $query->set('post_type', array('shop', 'post'));
  $query->set('posts_per_page', '-1');
  }
}
add_action( 'pre_get_posts','SearchFilter' );
function enqueue_child_styles() {
  wp_enqueue_style('child-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'enqueue_child_styles');

function aiovg_custom_back_to_categories_link( $link ) {
  $link = 'ADD_YOUR_CUSTOM_CATEGORY_PAGE_URL';
  return $link;
}
add_filter( 'aiovg_back_to_categories_link', 'aiovg_custom_back_to_categories_link' );

function custom_post_type() {
  $args = array(
      'public' => true,
      'label'  => 'Books',
      'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
  );
  register_post_type('book', $args);
}
add_action('init', 'custom_post_type');



?>
