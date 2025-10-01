<?php
register_nav_menus(array(
    'header_menu' => 'Меню в header',
    'mob_menu1' => 'Меню мобильной верисии 1',
    'mob_menu2' => 'Меню мобильной верисии 2',
    'partner' => 'Меню для партнеров'
));
add_theme_support( 'post-thumbnails' );
add_theme_support('category-thumbnails');

require_once ( get_stylesheet_directory() . '/theme-options.php' );
add_theme_support( 'post-thumbnails' );

?>