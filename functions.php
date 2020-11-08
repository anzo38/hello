<?php

// type属性をけすfunction 
function html5_validation( $buffer ) {
    $buffer = preg_replace( '/\s?type=(\'|")text\/(javascript|css)(\'|")/is', '', $buffer );
    return $buffer;
}
function buf_start() { ob_start( 'html5_validation' ); }
function buf_end() { ob_end_flush(); }
add_action( 'after_setup_theme', 'buf_start' );
add_action( 'shutdown', 'buf_end' );
// css,animate
function register_stylesheet() { 
  wp_register_style('style', get_template_directory_uri().'/style.css');




  
  

  wp_register_script('main.js', get_template_directory_uri().'/main.js');

}   add_action( 'wp_register_style', 'wp_register_script','register_stylesheet' );



function add_stylesheet() { //登録したCSSを以下の順番で読み込む
	register_stylesheet();
  wp_enqueue_style('style');

  
  wp_enqueue_script('jquery');


  wp_enqueue_script('main.js', '', array(), '1.0', false);
  
 
}
add_action('wp_enqueue_scripts', 'add_stylesheet');



// jq
// function my_script() {
//   wp_deregister_script('jquery');
//   wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-1.12.4.min.js', array(), '1.12.4');

// }
// add_action( 'wp_enqueue_scripts', 'my_script' );

// function add_my_scripts() {
  // wp_enqueue_script( 
  //   'mainJs', 
  //   get_theme_file_uri( '/main.js' ), 
  //   array( 'jquery' ), 
  //   '20201012', 
  //   false);
    // textjpfaile
//     wp_enqueue_script( 
//       'fittext',  get_theme_file_uri( '/jquery.fittext.js' ), 
//   );
//   wp_enqueue_script( 
//     'lettering',  get_theme_file_uri( '/jquery.lettering.js' ), 
// );
// }
// add_action('wp_enqueue_scripts', 'add_my_scripts');

// fontawsome
function enqueue_scripts(){
  wp_enqueue_style('fontawesome','https://use.fontawesome.com/releases/v5.2.0/css/all.css');
  wp_enqueue_style( 'google-webfont-style', '//fonts.googleapis.com/css?family=Lato:400,700' );


  }
  add_action('wp_enqueue_scripts','enqueue_scripts');
  

  

// ↓メニュー画面設定


function register_my_menu() {
  register_nav_menu( 'main-menu','Main Menu');
  register_nav_menu( 'footer-menu','Footer Menu');
}
add_action( 'after_setup_theme', 'register_my_menu' );
 
function register_my_menus() {
  register_nav_menus( array(
    'main-menu' => 'Main Menu',
    'footer-menu'  => 'Footer Menu',
  ) );

}
add_action( 'after_setup_theme', 'register_my_menus' );



//register_nav_menu() のソース（定義）
// function register_nav_menu( $location, $description ) {
//   register_nav_menus( array( $location => $description ) );
// }
// アイキャッチ管理

function my_theme_setup() {
  add_theme_support('post-thumbnails');
}
add_action( 'after_setup_theme', 'my_theme_setup');

