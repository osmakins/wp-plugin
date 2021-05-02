<?php
// Declare variables
$handle_css = 'wp_plugin_style.css';
$handle_js = 'wp-plugin-script.js';
$url_style = plugins_url().'/wp-plugin/css/main.css';
$url_script = plugins_url().'/wp-plugin/js/script.js';

// Add scripts
function wp_plugin_scripts(){
  // Add master style sheet
  wp_enqueue_style($handle_css, $url_style);

  // Add master scripts document
  wp_enqueue_script($handle_js, $url_script);
}

add_action('wp_enqueue_scripts', 'wp_plugin_scripts');