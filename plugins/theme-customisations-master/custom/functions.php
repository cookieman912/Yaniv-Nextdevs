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


add_action( 'woocommerce_add_to_cart', 'echoGreetUser' );

function echoGreetUser() {
	echo '<h2 class="greet-message">Thank you for adding product to cart!</h2>';
}
