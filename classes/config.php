<?php
/**
 * replaceMe
 *
 * Various definitions to help development.
 */

# Set JPEG quality to 100%
add_filter('jpeg_quality', function() { return 100; });

# Fix YOAST + w3tc bug
add_filter('wpseo_robots', function($robots) {
	return 'index,follow';
});

# Assets directory
DEFINE('assetDir', get_template_directory_uri() . '/assets');

# Relative path
DEFINE('relPath', '');

# Various page IDs
DEFINE('HOME', get_home_url());
// DEFINE('BLOG', xyz);