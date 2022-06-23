<?php
/**
 @ Khai báo hằng giá trị 
    @ THEME_URL = lấy đường dẫn thư mục theme
    @ CORE = lấy đường dẫn của thư mục /core 
**/
define( 'THEME_URL', get_stylesheet_directory() );
define('CORE', THEME_URL . "/core" );
/** 
@ Nhúng file /core/init.php
**/
require_once( CORE . "/init.php" );
/**
 @ Thiết lập chiều rộng nội dung
 **/
if ( !isset($content_width) ){
    $content_width = 620;
}
/**
 @Khai báo chức năng của theme
 **/
if ( !function_exists('thoaiha_theme_setup') ){
    function thoaiha_theme_setup() {

        /* Thiết lập textdomain */
        $language_folder = THEME_URL . '/languages';
        load_theme_textdomain( 'thoaiha', $language_folder );
        
        /* Tự động thêm link RSS lên <heaad>**/
        add_theme_support ('automatic-feed-Links');

        /* Them post thumbnail */
        add_theme_support( 'post-thumbnail' );

        /* Post Format */
        add_theme_support( 'post-formats', array(
            'image',
            'video',
            'gallery',
            'quote',
            'link',
        ) );

        /* Them title-tag */
        add_theme_support( 'title-tag' );

        /* Them custom background */
        $default_background = array(
            'default-color' => '#eBeBeB'
        );
        add_theme_support( 'custom-background', $default_background );

        /* Them menu */
        register_nav_menu( 'primary-menu', __('Primary Menu', 'thoaiha'));

        /* Tạo sidebar */
        $sidebar = array(
            'name' => __('Main Sidebar', 'thoaiha'),
            'id' => 'main-sidebar',
            'description' => __('Default sidebar'),
            'class' => 'main-sidebar',
            'before_title' => '<h3 class="widgettitle">',
            'after_title' => '</h3>'

        );
        register_sidebar( $sidebar );
    }
    add_action('init','thoaiha_theme_setup' );

}

