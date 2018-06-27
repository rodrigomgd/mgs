<?php
    function add_thumbnails(){
        
        add_theme_support( 'post-thumbnails' ); 
    
    }

    function default_setup(){

        add_theme_support(
            'html5', array(
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
            )
        );
        
        register_nav_menu('header-menu', __('Header Menu'));
        }

    function themename_widgets_init() {
        register_sidebar( array(
            'name'          => __( 'Primary Sidebar', 'theme_name' ),
            'id'            => 'sidebar-1',
            'before_widget' => '<aside id="%1$s" class="col %2$s">',
            'after_widget'  => '</aside>',
            'before_title'  => '<h5>',
            'after_title'   => '</h5> <hr>',
        ) );
    }

    add_action( 'after_setup_theme', 'add_thumbnails' );

    add_action( 'widgets_init', 'themename_widgets_init' );

    add_action('init','default_setup');