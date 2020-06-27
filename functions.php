<?php

// Load Stylesheets
function load_stylesheets() {
	wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', '', 1, 'all');
	wp_enqueue_style('stylesheet');

	wp_register_style('styles', get_template_directory_uri() . '/assets/css/styles.css', '', 1, 'all');
	wp_enqueue_style('styles');
}
// Run Stylesheets
add_action('wp_enqueue_scripts', 'load_stylesheets');

// Load Scripts
function load_javascripts() {
	wp_deregister_script('jquery');

	wp_register_script('popper', get_template_directory_uri() . '/assets/js/popper.js', '', 1, true);
	wp_enqueue_script('popper');
	
	wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery.js', '', 1, true);
	wp_enqueue_script('jquery');
	
	wp_register_script('custom', get_template_directory_uri() . '/assets/js/custom.js', '', 1, true);
	wp_enqueue_script('custom');

	wp_register_script('smooth-scroll', get_template_directory_uri() . '/assets/js/smooth-scroll.js', '', 1, true);
	wp_enqueue_script('smooth-scroll');

	wp_register_script('animations', get_template_directory_uri() . '/assets/js/animations.js', '', 1, true);
	wp_enqueue_script('animations');
}
// Run Javascripts
add_action('wp_enqueue_scripts', 'load_javascripts');

// Add Menus
add_theme_support('menus');

// Register Menus
register_nav_menus(
	array(
		'top-menu' => 'Top Menu',
	)
);

// Add Image Sizes
add_image_size('post_image', 1100, 750, false);

// Allow Woocomerce
function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

/* Remove Quantity in all product type */
function woo_remove_all_quantity_fields( $return, $product ) {
  return true;
}
add_filter( 'woocommerce_is_sold_individually', 'woo_remove_all_quantity_fields', 10, 2 );

// First, remove Add to Cart Button
  
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
  
// Second, add View Product Button
  
add_action( 'woocommerce_after_shop_loop_item', 'bbloomer_view_product_button', 10 );
  
function bbloomer_view_product_button() {
global $product;
$link = $product->get_permalink();
echo '<a href="' . $link . '" class="btn btn-chevron btn-view"><span>View Details</span><img class="svg" src="' . get_stylesheet_directory_uri() . '/assets/images/icons/chevron-right.svg"></a>';
}

remove_action( 'woocommerce_no_products_found', 'wc_no_products_found' );

remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );



// add_filter( 'woocommerce_get_order_item_totals', 'adjust_woocommerce_get_order_item_totals' );

// add_filter( 'woocommerce_get_order_item_totals', 'remove_subtotal_from_orders_total_lines', 100, 1 );

// function remove_subtotal_from_orders_total_lines( $totals ) {
//     unset($totals['cart_subtotal']  );
//     return $totals;
// }



// remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );

// function woocommerce_template_single_excerpt() {
//         return;
// }

// function remove_short_description() {
//   remove_meta_box( 'postexcerpt', 'product', 'normal');
// }
// add_action('add_meta_boxes', 'remove_short_description', 999);



// function add_custom_html() {
//             echo "Hello World";
// }

// function __construct() {
//      add_action( 'woocommerce_single_product_summary', array( &$this, 'add_custom_html' ), 15 );
// }





/* WooCommerce: The Code Below Removes Checkout Fields */
add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );
function custom_override_checkout_fields( $fields ) {
// unset($fields['billing']['billing_first_name']);
// unset($fields['billing']['billing_last_name']);
unset($fields['billing']['billing_company']);
unset($fields['billing']['billing_address_1']);
unset($fields['billing']['billing_address_2']);
unset($fields['billing']['billing_city']);
unset($fields['billing']['billing_postcode']);
unset($fields['billing']['billing_country']);
unset($fields['billing']['billing_state']);
unset($fields['billing']['billing_phone']);
unset($fields['order']['order_comments']);
// unset($fields['billing']['billing_email']);
unset($fields['account']['account_username']);
unset($fields['account']['account_password']);
unset($fields['account']['account_password-2']);
return $fields;
}



remove_action( 'woocommerce_cart_collaterals', 'woocommerce_cross_sell_display');


add_filter( 'wc_stripe_hide_payment_request_on_product_page', '__return_true' );
add_action( 'init', 'remove_stripe_payment_request_from_cart_20200608', 99 );
function remove_stripe_payment_request_from_cart_20200608() {
remove_action( 'woocommerce_proceed_to_checkout', array( WC_Stripe_Payment_Request::instance(), 'display_payment_request_button_html' ), 1 );
remove_action( 'woocommerce_proceed_to_checkout', array( WC_Stripe_Payment_Request::instance(), 'display_payment_request_button_separator_html' ), 2 );
}
