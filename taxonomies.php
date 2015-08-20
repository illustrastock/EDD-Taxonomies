<?php

/**
 * The plugin file
 *
 *
 * @link              on-lingua.com
 * @since             0.1
 * @package           Taxonomies
 *
 * @wordpress-plugin
 * Plugin Name:       Taxonomies
 * Plugin URI:        on-lingua.com
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           0.1
 * Author:            Toni
 * Author URI:        on-lingua.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       taxonomies
 * Domain Path:       /languages
 */


/* Start Adding Functions Below this Line */

add_action( 'init', 'register_taxonomy_styles' );

function register_taxonomy_styles() {

    $labels = array( 
        'name' => _x( 'Styles', 'styles' ),
        'singular_name' => _x( 'Style', 'styles' ),
        'search_items' => _x( 'Search Styles', 'styles' ),
        'popular_items' => _x( 'Popular Styles', 'styles' ),
        'all_items' => _x( 'All Styles', 'styles' ),
        'parent_item' => _x( 'Parent Style', 'styles' ),
        'parent_item_colon' => _x( 'Parent Style:', 'styles' ),
        'edit_item' => _x( 'Edit Style', 'styles' ),
        'update_item' => _x( 'Update Style', 'styles' ),
        'add_new_item' => _x( 'Add New Style', 'styles' ),
        'new_item_name' => _x( 'New Style', 'styles' ),
        'separate_items_with_commas' => _x( 'Separate styles with commas', 'styles' ),
        'add_or_remove_items' => _x( 'Add or remove styles', 'styles' ),
        'choose_from_most_used' => _x( 'Choose from the most used styles', 'styles' ),
        'menu_name' => _x( 'Styles', 'styles' ),
    );

    $args = array( 
        'labels' => $labels,
        'public' => true,
        'show_in_nav_menus' => true,
        'show_ui' => true,
        'show_tagcloud' => true,
        'show_admin_column' => true,
        'hierarchical' => true,

        'rewrite' => true,
        'query_var' => true
    );

    register_taxonomy( 'styles', array('download'), $args );
}


/* Stop Adding Functions Below this Line */

?>