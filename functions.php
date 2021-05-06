<?php

    function devblog_theme_support() {
        // Add title tag
        add_theme_support('title-tag');
        add_theme_support('custom-logo');
    }

    add_action('after_setup_theme', 'devblog_theme_support');

    function devblog_menus() {
        $locations = array(
            'primary' => 'Desktop Primary Left Sidebar',
            'footer'  => 'Footer Menu Items'
        );

        register_nav_menus($locations);
    }

    add_action('init', 'devblog_menus');

    function devblog_register_styles() {

        wp_enqueue_style('devblog-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css");
        wp_enqueue_style('devblog-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css");
        wp_enqueue_style('devblog-custom', get_template_directory_uri() . "/style.css");
    }

    add_action('wp_enqueue_scripts', 'devblog_register_styles');


    function devblog_register_scripts() {
        wp_enqueue_script('devblog-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', true); 
        wp_enqueue_script('devblog-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', true);
        wp_enqueue_script('devblog-bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', true);
        wp_enqueue_script('devblog-custom-js', get_template_directory_uri() . "/assets/js/main.js", true);

    }

    add_action('wp_enqueue_scripts', 'devblog_register_scripts');

?>