<?php
    add_theme_support('post-thumbnail');

    function custom_post_type() {
        //Cabeçalho
        register_post_type('header',
            array(
                'labels'            => array(
                    'name'          => __('Cabeçalho do site')
                ),
                'public'            => true,
                'has_archive'       => true,
                'menu_icon'         => 'dashicons-admin-customizer',
                'supports'          => array('title', 'thumbnail', 'page-attributes'),
            )
        );

        //Sobre
        register_post_type('sobre',
            array(
                'labels'            => array(
                    'name'          => __('Sobre')
                ),
                'public'            => true,
                'has_archive'       => true,
                'menu_icon'         => 'dashicons-book',
                'supports'          => array('title', 'thumbnail', 'page-attributes'),
            )
        );
    }

    add_action('init', 'custom_post_type');
?>