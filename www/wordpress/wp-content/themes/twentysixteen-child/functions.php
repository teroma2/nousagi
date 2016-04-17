<?php //子テーマで利用する関数を書く
 
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
 
}
// 最新の投稿を取得する
function is_first(){
  global $wp_query;
  return ($wp_query->current_post === 0);
}

/*
  get_the_modified_time()の結果がget_the_time()より古い場合はget_the_time()を返す。
  同じ場合はnullをかえす。
  それ以外はget_the_modified_time()をかえす。
*/
function get_mtime($format) {
    $mtime = get_the_modified_time('Ymd');
    $ptime = get_the_time('Ymd');
    if ($ptime > $mtime) {
        return get_the_time($format);
    } elseif ($ptime === $mtime) {
        return null;
    } else {
        return get_the_modified_time($format);
    }
}