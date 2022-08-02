<?php
/**
 * Functions.php
 *
 * @package  Theme_Customisations
 * @author   WooThemes
 * @since    1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * functions.php
 * Add PHP snippets here
 */


add_action( 'woocommerce_add_to_cart', 'echoGreetUser',10,6 );

function echoGreetUser( $cart_id, $product_id, $request_quantity, $variation_id, $variation, $cart_item_data) {
	global $woocommerce;
	if ($woocommerce->cart->get_cart_contents_count() == 1) {
		echo '<h2 class="greet-message">Thank you for adding product to cart!</h2>'; 
	}
}
