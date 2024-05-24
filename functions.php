<?php


// Pattern filters
require_once 'includes/pattern-filters.php';
require_once 'includes/pattern-filters/menu.php';
require_once 'includes/pattern-filters/header.php';
require_once 'includes/pattern-filters/footer.php';
require_once 'includes/pattern-filters/hero.php';
require_once 'includes/pattern-filters/content.php';

// Register patterns
require_once 'includes/register-patterns.php';


/**
 * Loads the translation files for WordPress.
 *
 * @since 2.0.0
 */
function real_estate_theme_setup()
{
	load_child_theme_textdomain( 'real-estate-listings', get_stylesheet_directory() . '/languages' );
}
add_action('after_setup_theme', 'real_estate_theme_setup');

// include admin classes
add_action('after_setup_theme','real_estate_theme_load_admin');
function real_estate_theme_load_admin(){
	if ( is_admin() ) {
		// Theme admin stuff
		require_once 'includes/class-blockstrap-admin-child.php';
	}
}

