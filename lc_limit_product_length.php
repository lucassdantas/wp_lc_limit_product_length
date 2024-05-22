<?php 
/*
 * Plugin Name:       Limit product length
 * Plugin URI:        https://github.com/lucassdantas/wp_lc_limit_product_length.git
 * Description:       Limite a quantidade de caracteres dos produtos do woocommerce
 * Version:           1.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Lucas Dantas
 * Author URI:        https://www.linkedin.com/in/lucas-de-sousa-dantas/
 * License:           GPL v2 or later
 */


add_filter( 'the_title', 'shorten_woo_product_title', 10, 2 );
function shorten_woo_product_title( $title, $id ) {
    if ( ! is_singular( array( 'product' ) ) && get_post_type( $id ) === 'product' && strlen( $title ) > 30 ) {
        return substr( $title, 0, 30) . '…'; // change last number to the number of characters you want
    } else {
        return $title;
    }
}