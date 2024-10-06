<?php
/**
 * Theme Functions File
 *
 * This file contains functions and hooks that enhance the functionality of the theme.
 */

// Add Theme Support
function theme_setup() {
    // Add support for featured images
    add_theme_support('post-thumbnails');

    // Add support for custom logo
    add_theme_support('custom-logo');

    // Add support for title tag
    add_theme_support('title-tag');

    // Add support for widgets
    add_theme_support('widgets');
}
add_action('after_setup_theme', 'theme_setup');

function register_primary_menus() {
    register_nav_menus(
        array(
            'primary-menu' => __( 'Primary Menu', 'streetfashioner' ),
        )
    );
}
add_action( 'init', 'register_primary_menus' );


// Enqueue styles
function my_theme_enqueue_styles() {
    // Google Font
    wp_enqueue_style('google-fonts', 'http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800', false);

    // CSS Files
    wp_enqueue_style('prettyPhoto-css', get_template_directory_uri() . '/css/prettyPhoto.css');
    wp_enqueue_style('camera-css', get_template_directory_uri() . '/css/camera.css');
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.css');
    wp_enqueue_style('theme-css', get_template_directory_uri() . '/css/theme.css');
    wp_enqueue_style('skin-css', get_template_directory_uri() . '/css/skins/tango/skin.css');
    wp_enqueue_style('bootstrap-responsive-css', get_template_directory_uri() . '/css/bootstrap-responsive.css');

    // HTML5 Shim for IE < 9
    wp_enqueue_script('html5-shiv', 'http://html5shim.googlecode.com/svn/trunk/html5.js');
    wp_script_add_data('html5-shiv', 'conditional', 'lt IE 9');
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

// Custom Post Template
function custom_single_post_template( $template ) {
    if ( is_single() ) {
        // Path to your custom template file
        $custom_template = dirname( __FILE__ ) . '/custom-single.php';

        if ( file_exists( $custom_template ) ) {
            return $custom_template;
        }
    }

    return $template;
}
add_filter( 'template_include', 'custom_single_post_template' );

// Custom Comment Form
function custom_comment_form_fields($fields) {
    $fields['author'] = '<input class="span5" type="text" name="author" value="Name" onFocus="if (this.value == \'Name\') this.value = \'\';" onBlur="if (this.value == \'\') this.value = \'Name\';" />';
    
    $fields['email'] = '<input class="span5" type="text" name="email" value="Email" onFocus="if (this.value == \'Email\') this.value = \'\';" onBlur="if (this.value == \'\') this.value = \'Email\';" />';
    
    return $fields;
}
add_filter('comment_form_default_fields', 'custom_comment_form_fields');

function custom_comment_field($comment_field) {
    $comment_field = '<textarea name="comment" class="span7" onFocus="if (this.value == \'Message...\') this.value = \'\';" onBlur="if (this.value == \'\') this.value = \'Message...\';">Message...</textarea>';
    
    return $comment_field;
}
add_filter('comment_form_field_comment', 'custom_comment_field');

function custom_comment_form_submit_button($submit_button, $args) {
    $submit_button = '<input type="reset" class="btn dark_btn" value="Clear form" />
                      <input type="submit" class="btn send_btn" value="Post Comment" />';
    
    return $submit_button;
}
add_filter('comment_form_submit_button', 'custom_comment_form_submit_button', 10, 2);

if (comments_open()) :
    comment_form();
endif;


// Register Sidebar
function street_custom_sidebar_init() {
    register_sidebar(array(
        'name'          => __('Blog Sidebar', 'text_domain'), // Name of the widget area
        'id'            => 'blog-sidebar', // Unique ID for the widget area
        'before_widget' => '<div class="widget">', // HTML before each widget
        'after_widget'  => '</div>', // HTML after each widget
        'before_title'  => '<h2 class="title">', // HTML before widget title
        'after_title'   => '</h2>', // HTML after widget title
    ));
}
add_action('widgets_init', 'street_custom_sidebar_init');



// require files customize function file
require_once('customize-function.php');

// include widgets
include_once('widgets/text-widget.php');
include_once('widgets/recent-posts-widget.php');
include_once('widgets/tags-widget.php');
include_once('widgets/links-widget.php');