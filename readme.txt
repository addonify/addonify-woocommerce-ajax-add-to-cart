=== Addonify Floating Cart For WooCommerce ===

Contributors: addonify
Tags: woocommerce, ajax add to cart, add to cart, woocommerce ajax
Requires at least: 6.0
Requires PHP: 7.4
Tested up to: 6.7
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A WooCommerce addon that adds AJAX add to cart functionality in the product page.


== Description ==

In WooCommerce, after a product is added into the cart from a product page, the product page gets reloaded. So, to avoid issue of reloading the page, this plugin adds the product into the cart via AJAX.


== Frequently Asked Questions ==

= Does AJAX add to cart work on other pages other than the product page?

No. AJAX add to cart works only on the product page. There is already an option called "Enable AJAX add to cart buttons on archives" in the WooCommerce setting page: WooCommerce > Settings > Products > General.

= Why AJAX add to cart is not working? =

If you are using third-party WooCommerce addons for product variations, types, etc. then AJAX add to cart might not work.

= What product types does AJAX add to cart support? =

AJAX add to cart supports the default WooCommerce product types: external, simple, grouped, and variation. Product types defined by third-party WooCommerce addons are not supported.

= Does any JS event trigger after a product is added into the cart?

- Yes. A JS event called 'added_to_cart' is triggered after a product is added into the cart. The event is passed with fragments, cart hash, and add to cart button element.


== Installation ==

1. Download the plugin.
2. Unzip the downloaded zip file.
3. Upload the plugin folder into the `wp-content/plugins/` directory of your WordPress site.
4. Activate `Addonify Floating Cart` from Dashboard > Plugins.


== Changelog ==

= 1.0.0 - 13 April 2025 =

- New: Initial release.
