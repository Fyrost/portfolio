<?php
/**
 * Plugin Name: Skyboot - Custom Icons for Elementor
 * Description: This is a elementor based plugin. it's a custom icon font library for elementor page builder.
 * Plugin URI:  https://skybootstrap.com/custom-icons-for-elementor
 * Version:     1.0.2
 * Author:      Skybootstrap
 * Author URI:  https://skybootstrap.com
 * License:     GPL2
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: skb_cife
 * Domain Path: /languages
**/

	// Exit if accessed directly
	if ( ! defined( 'ABSPATH' ) ) exit; 

	// Define Useful Contastant
	define( 'SKB_CIFE_VERSION', '1.0.2' );
	define( 'SKB_CIFE_PL_ROOT', __FILE__ );
	define( 'SKB_CIFE_PL_URL', plugin_dir_url(  SKB_CIFE_PL_ROOT ) );
	define( 'SKB_CIFE_PL_PATH', plugin_dir_path( SKB_CIFE_PL_ROOT ) );
	define( 'SKB_CIFE_PLUGIN_BASE', plugin_basename( SKB_CIFE_PL_ROOT ) );
	define( 'SKB_CIFE_ASSETS', trailingslashit( SKB_CIFE_PL_URL . 'assets' ) );

	// Include base class file
	if ( !file_exists('class-base.php') ){
		require ( SKB_CIFE_PL_PATH . 'includes/class-base.php' );
	}

    // Helper Function
    if ( !file_exists('helper-functions.php') ){
        require( SKB_CIFE_PL_PATH . 'includes/helper-functions.php' );
    }
	 
	// Instance
	\Skb_Cife\Skb_Cife_Base::instance();

