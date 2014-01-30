<?php
/**
 * Clean wp_head()
 *
 * @since CML 1.0
 *
 * Remove RSD & Windows Live Writer links
 * Remove WP version
 */

function cml_clean_head() {
    // Originally from http://wpengineer.com/1438/wordpress-header/
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'wp_generator');
}
add_action('init', 'cml_clean_head');

/**
 * Clean up output of stylesheet <link> tags
 */
function cml_clean_style($input) {
    preg_match_all("!<link rel='stylesheet'\s?(id='[^']+')?\s+href='(.*)' type='text/css' media='(.*)' />!", $input, $matches);
    // Only display media if it is meaningful
    $media = $matches[3][0] !== '' && $matches[3][0] !== 'all' ? ' media="' . $matches[3][0] . '"' : '';
    return '<link rel="stylesheet" href="' . $matches[2][0] . '"' . $media . '>' . "\n";
}
add_filter('style_loader_tag', 'cml_clean_style');
