<?php
//defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

// Silence is golden :)

add_action('woocommerce_add_to_cart', function (){



//	global $woocommerce;
//
//	$product_id = $_POST['assessories'];
//
//	$found = false;
//
//	//check if product already in cart
//	if ( sizeof( WC()->cart->get_cart() ) > 0 ) {
//		foreach ( WC()->cart->get_cart() as $cart_item_key => $values ) {
//			$_product = $values['data'];
//			if ( $_product->id == $product_id )
//				$found = true;
//		}
//		// if product not found, add it
//		if ( ! $found )
//			WC()->cart->add_to_cart( $product_id );
//	} else {
//		// if no products in cart, add it
//		WC()->cart->add_to_cart( $product_id );
//	}

//	return echo '<script type="text/javascript">alert("OK");</script>';

});

/**
 * Custom Add To Cart Messages
 * Add this to your theme functions.php file
 **/
//add_filter( 'wc_add_to_cart_message', 'custom_add_to_cart_message' );
function custom_add_to_cart_message() {
//	global $woocommerce;
//	// Output success messages
//	if (get_option('woocommerce_cart_redirect_after_add')=='yes') :
//		$return_to  = get_permalink(woocommerce_get_page_id('shop'));
//		$message    = sprintf('<a href="%s" class="button">%s</a> %s', $return_to, __('Continue Shopping &rarr;', 'woocommerce'), __('Product successfully added to your cart.', 'woocommerce') );
//	else :
//		$message    = sprintf('<a href="%s" class="button">%s</a> %s', get_permalink(woocommerce_get_page_id('cart')), __('View Cart &rarr;', 'woocommerce'), __('Product successfully added to your cart.', 'woocommerce') );
//	endif;
//	return $message;
	 return '<script type="text/javascript">alert("OK");</script>';


}
/* Custom Add To Cart Messages */


add_action('woocommerce_after_cart_contents', 'woocommerce_empty_cart_button');
function woocommerce_empty_cart_button( ) {
	echo '<script type="text/javascript">console.log("sdsasdasd")</script>';
}



