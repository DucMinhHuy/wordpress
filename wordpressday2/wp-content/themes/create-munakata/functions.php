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
  $query->set('post_type', array('shop'));
  $query->set('posts_per_page', '-1');
  }
}
add_action( 'pre_get_posts','SearchFilter' );

?>
