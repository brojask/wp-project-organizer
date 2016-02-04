<?php

define('THEMEROOT', get_stylesheet_directory_uri());
define('TEMPLATE', get_template_directory_uri());
#define('IMAGES', THEMEROOT . '/images');

/*!@
 *	OPTION 1 : wp_enqueue_style('styles', get_stylesheet_uri());
 *	-Settings:
 *	-- Styles: wp_enqueue_style('name', THEMEROOT . '/css/name.css');
 *	--Scripts: wp_register_script('name', THEMEROOT . '/js/name.js', array('dependency'), 'version', true);
 *	---Enqueue: wp_enqueue_script('name');
*/

function register_scripts() {
    wp_enqueue_style('bootstrap', THEMEROOT . '/css/bootstrap.min.css');
    //wp_enqueue_style('owlcarousel', THEMEROOT . '/css/owl.carousel.css');
    //wp_enqueue_style('owltheme', THEMEROOT . '/css/owl.theme.css');
    wp_enqueue_style('styles', get_stylesheet_uri());
    
    wp_deregister_script('jquery');
    wp_register_script('jquery', THEMEROOT . '/js/jquery.min.js', array(), '1.11.1', true);
    wp_register_script('bootstrap', THEMEROOT . '/js/bootstrap.min.js', array('jquery'), '3.3.1', true);
    //wp_register_script('owlcarousel', THEMEROOT . '/js/owl.carousel.min.js', array('jquery'), 'version', true);
    wp_register_script('custom', THEMEROOT . '/js/custom.js', array('jquery'), '', true);
    
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap');
    //wp_enqueue_script('owlcarousel');
    wp_enqueue_script('custom');
}

add_action('wp_enqueue_scripts', 'register_scripts');

/*! @
 * 	Add custom classes to the WP Post Navigation
*/

add_filter('next_posts_link_attributes', 'posts_next_link_attributes');

function posts_next_link_attributes() {
    return 'class="next-projects"';
}

add_filter('previous_posts_link_attributes', 'posts_prev_link_attributes');

function posts_prev_link_attributes() {
    return 'class="previous-projects"';
}

/*!
 *	WP Advanced Search
*/
require_once ('wp-advanced-search/wpas.php');

function my_search_form() {
    $args = array();
    $args['form'] = array('action'=> site_url('index.php/search-page') ,'method'=>'GET');
    #$args['wp_query'] = array('post_type' => 'post', 'posts_per_page' => 5);
    $args['wp_query'] = array('post_type' => 'post', 'posts_per_page' => 9, 'order'=>'DESC', 'orderby'=>'date');
    $args['fields'][] = array('type' => 'search', 'title' => 'Search Projects', 'class' => 'form-control');
    $args['fields'][] = array('type'=>'submit','value'=>'Search', 'class'=>'btn btn-primary');
    register_wpas_form('my-form', $args);
}
add_action('init', 'my_search_form');