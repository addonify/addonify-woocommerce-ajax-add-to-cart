<?php
/*
 * Plugin Name:       Addonify WooCommerce Ajax Add to Cart
 * Plugin URI:        https://github.com/addonify/addonify-woocommerce-ajax-add-to-cart
 * Description:       A WooCommerce addon that adds AJAX add to cart functionality in the product page.
 * Version:           1.0.0
 * Requires at least: 5.6
 * Requires PHP:      7.4
 * Tested:            6.7
 * Author:            Addonify
 * Author URI:        https://addonify.com/
 * License:           GPLv2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://github.com/addonify/addonify-woocommerce-ajax-add-to-cart
 * Text Domain:       addonify-woocommerce-ajax-add-to-cart
 * Domain Path:       /languages
 */


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! defined( 'ADDONIFY_AJAX_ADDTOCART_VERSION' ) ) {
	define( 'ADDONIFY_AJAX_ADDTOCART_VERSION', '1.0.0' );
}

if ( ! defined( 'ADDONIFY_AJAX_ADDTOCART_PATH' ) ) {
	define( 'ADDONIFY_AJAX_ADDTOCART_PATH', plugin_dir_path( __FILE__ ) );
}

require_once ADDONIFY_AJAX_ADDTOCART_PATH . 'inc/class-addonify-woocommerce-ajax-add-to-cart.php';

add_action(
	'plugins_loaded',
	function () {
		if ( class_exists( 'WooCommerce' ) ) {
			new Addonify_Woocommerce_Ajax_Add_To_Cart();
		}
	}
);