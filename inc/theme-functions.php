<?php

/**
 * Theme utility functions
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/**
 * Get theme asset URL
 */
function multijob_asset_url($path)
{
    return MULTIJOB_URI . '/dist/' . ltrim($path, '/');
}

/**
 * Get theme image URL
 */
function multijob_image_url($filename)
{
    return multijob_asset_url('images/' . $filename);
}

/**
 * Get ACF field with fallback
 */
function multijob_get_field($field_name, $post_id = false, $default = '')
{
    if (function_exists('get_field')) {
        $value = get_field($field_name, $post_id);
        return $value !== null ? $value : $default;
    }
    return $default;
}

/**
 * Get ACF option with fallback
 */
function multijob_get_option($field_name, $default = '')
{
    return multijob_get_field($field_name, 'option', $default);
}

/**
 * Debug function
 */
function multijob_debug($data)
{
    if (WP_DEBUG) {
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }
}
