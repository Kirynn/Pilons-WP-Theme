<?php

    add_theme_support('thumbnail_filename');

    function add_components() {
        wp_enqueue_script(
            'components',
            get_template_directory_uri() . '/js/components.js',
            array('jquery'),
            '1.0.0',
            true
        );
    }

    function register_my_menus() {
        register_nav_menus(
            array(
                'header-menu'   => __('Header Menu'),
                'footer-menu'   => __('Footer Menu'),
                'about-sidebar' => __('About Sidebar')
            )
        );
    }

    add_filter('nav_menu_item_id', 'clear_nav_menu_item_id', 10, 3);
    function clear_nav_menu_item_id($id, $item, $args) {
        return "";
    }

//    add_filter('nav_menu_css_class', 'clear_nav_menu_item_class', 10, 3);
//    function clear_nav_menu_item_class($classes, $item, $args) {
//        return array();
//    }


    add_action('init', 'register_my_menus');
    add_action('wp_enqueue_scripts', 'add_components' );
?>
