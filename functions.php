<?php

/**
 * Multijob functions and definitions
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

// Define theme constants
define('MULTIJOB_VERSION', '1.0.0');
define('MULTIJOB_DIR', get_template_directory());
define('MULTIJOB_URI', get_template_directory_uri());

// Include required files
require_once MULTIJOB_DIR . '/inc/theme-functions.php';

/**
 * Theme setup
 */
function multijob_setup()
{
    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails on posts and pages
    add_theme_support('post-thumbnails');

    // Register navigation menus
    register_nav_menus(array(
        'primary' => esc_html__('Primary Menu', 'multijob'),
        'footer' => esc_html__('Footer Menu', 'multijob'),
    ));

    // Switch default core markup to output valid HTML5
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    // Add theme support for selective refresh for widgets
    add_theme_support('customize-selective-refresh-widgets');

    // Add support for editor styles
    add_theme_support('editor-styles');

    // Add support for responsive embeds
    add_theme_support('responsive-embeds');
}
add_action('after_setup_theme', 'multijob_setup');

/**
 * Enqueue scripts and styles
 */
function multijob_scripts()
{
    // Enqueue main stylesheet
    wp_enqueue_style('multijob-style', get_stylesheet_uri(), array(), MULTIJOB_VERSION);

    // Enqueue compiled assets
    wp_enqueue_style('multijob-main', MULTIJOB_URI . '/dist/css/main.css', array(), MULTIJOB_VERSION);
    wp_enqueue_script('multijob-main', MULTIJOB_URI . '/dist/js/main.js', array(), MULTIJOB_VERSION, true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'multijob_scripts');

/**
 * ACF Options Page
 */
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => 'Theme Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug' => 'theme-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
}

/**
 * Register ACF Blocks
 */
function multijob_register_acf_blocks()
{
    if (function_exists('acf_register_block_type')) {
        // Register blocks here
    }
}
add_action('acf/init', 'multijob_register_acf_blocks');
