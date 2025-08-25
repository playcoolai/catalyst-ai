<?php

// Define constants for Vite
define('VITE_DEV_SERVER', 'http://localhost:3000');

// The main function to load our assets
function vite_enqueue_assets() {
    // In development, load scripts from the Vite dev server
    wp_enqueue_script('vite-client', VITE_DEV_SERVER . '/@vite/client', [], null, true);
    wp_enqueue_script('main-js', VITE_DEV_SERVER . '/src/main.js', [], null, true);
}

// This helper function adds the `type="module"` attribute to our script tags
function add_module_type_attribute($tag, $handle, $src) {
    // The handles must match the names we used in wp_enqueue_script()
    if ('vite-client' === $handle || 'main-js' === $handle) {
        $tag = '<script type="module" src="' . esc_url($src) . '"></script>';
    }
    return $tag;
}

// Add the main enqueueing function to the right hook
add_action('wp_enqueue_scripts', 'vite_enqueue_assets');

// Add the helper function to the script_loader_tag filter
add_filter('script_loader_tag', 'add_module_type_attribute', 10, 3);