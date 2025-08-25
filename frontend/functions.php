<?php

function catalyst_ai_scripts() {
    wp_enqueue_script(
        'catalyst-ai-app',
        get_template_directory_uri() . '/js/app.js',
        array(),
        '1.0.0',
        true
    );
} // <--- ADD THIS CLOSING BRACE

add_action('wp_enqueue_scripts', 'catalyst_ai_scripts');