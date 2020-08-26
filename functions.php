<?php

// Load Stylesheets
function load_stylesheets() {
	wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', '', 1, 'all');
	wp_enqueue_style('stylesheet');

	wp_register_style('styles', get_template_directory_uri() . '/assets/css/styles.css', '', 1, 'all');
	wp_enqueue_style('styles');

	wp_register_style('flickity', 'https://unpkg.com/flickity@2/dist/flickity.min.css', '', 1, 'all');
	wp_enqueue_style('flickity');
}
// Run Stylesheets
add_action('wp_enqueue_scripts', 'load_stylesheets');

// Load Scripts
function load_javascripts() {
	wp_deregister_script('jquery');

	wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.4.4/umd/popper.min.js', '', 1, true);
	wp_enqueue_script('popper');
	
	wp_register_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js', '', 1, true);
	wp_enqueue_script('jquery');
	
	wp_register_script('custom', get_template_directory_uri() . '/assets/js/custom.js', '', 1, true);
	wp_enqueue_script('custom');

	wp_register_script('smooth-scroll', get_template_directory_uri() . '/assets/js/smooth-scroll.js', '', 1, true);
	wp_enqueue_script('smooth-scroll');

	wp_register_script('animations', get_template_directory_uri() . '/assets/js/animations.js', '', 1, true);
	wp_enqueue_script('animations');

	wp_register_script('flickity', 'https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js', '', 1, true);
	wp_enqueue_script('flickity');
}
// Run Javascripts
add_action('wp_enqueue_scripts', 'load_javascripts');

// Add Menus
add_theme_support('menus');

// Register Menus
register_nav_menus(
	array(
		'top-menu' => 'Top Menu',
		'mobile-menu' => 'Mobile Menu',
	)
);

// Add Image Sizes
add_image_size('post_image', 100, 100, false);
add_image_size('post_image', 200, 200, false);
add_image_size('post_image', 500, 500, false);
add_image_size('post_image', 800, 800, false);
add_image_size('post_image', 1000, 1000, false);


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
  
// remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
  
// Second, add View Product Button
  
// add_action( 'woocommerce_after_shop_loop_item', 'bbloomer_view_product_button', 10 );
  
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

//* Make Font Awesome available
add_action( 'wp_enqueue_scripts', 'enqueue_font_awesome' );
function enqueue_font_awesome() {

	wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css' );

}





add_filter('woocommerce_sale_flash', 'lw_hide_sale_flash');
function lw_hide_sale_flash()
{
return false;
}







// add_filter( 'woocommerce_loop_add_to_cart_link', 'ts_replace_add_to_cart_button', 10, 2 );
// function ts_replace_add_to_cart_button( $button, $product ) {
// 	// if (is_product_category() || is_shop()) {
// 	// 	$button_text = __("View Product", "woocommerce");
// 	// 	$button_link = $product->get_permalink();
// 	// 	$button = '<a href="' . $button_link . '">' . $button_text . '</a>';
// 	// 	return $button;
// 	// }
// }







// /*STEP 1 - REMOVE ADD TO CART BUTTON ON PRODUCT ARCHIVE (SHOP) */

// function remove_loop_button(){
// remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
// }
// add_action('init','remove_loop_button');



// /*STEP 2 -ADD NEW BUTTON THAT LINKS TO PRODUCT PAGE FOR EACH PRODUCT */

// add_action('woocommerce_after_shop_loop_item','replace_add_to_cart');
// function replace_add_to_cart() {
// global $product;
// $link = $product->get_permalink();
// echo do_shortcode('<br>[button link="' . esc_attr($link) . '"]Read more[/button]');
// }






remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10 );













/**
 * Change number of related products output
 */ 
function woo_related_products_limit() {
  global $product;
	
	$args['posts_per_page'] = 6;
	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'jk_related_products_args', 20 );
  function jk_related_products_args( $args ) {
	$args['posts_per_page'] = 3; // 3 related products
	$args['columns'] = 3; // arranged in 3 columns
	return $args;
}






/**
 * Change number of upsells output
 */
add_filter( 'woocommerce_upsell_display_args', 'wc_change_number_related_products', 20 );

function wc_change_number_related_products( $args ) {
 
 $args['posts_per_page'] = 1;
 $args['columns'] = 3; //change number of upsells here
 return $args;
}





/*
 * Change button text on product pages
 */

add_filter('add_to_cart_redirect', 'cw_redirect_add_to_cart');
function cw_redirect_add_to_cart() {
    global $woocommerce;
    $cw_redirect_url_checkout = $woocommerce->cart->get_checkout_url();
    return $cw_redirect_url_checkout;
}

add_filter( 'woocommerce_product_single_add_to_cart_text', 'cw_btntext_cart' );
add_filter( 'woocommerce_product_add_to_cart_text', 'cw_btntext_cart' );
function cw_btntext_cart() {
    return __( 'Buy now', 'woocommerce' );
}


add_filter( 'woocommerce_add_to_cart_sold_individually_found_in_cart', 'redirect_to_checkout' );

function redirect_to_checkout( $found_in_cart ) {
	if ( $found_in_cart ) {
		wp_safe_redirect( wc_get_page_permalink( 'checkout' ) );
		exit;
	}
	return $found_in_cart;
}














add_filter( 'woocommerce_product_add_to_cart_text', 'bbloomer_archive_custom_cart_button_text' );
  
function bbloomer_archive_custom_cart_button_text() {
global $product;
 
$terms = get_the_terms( $product->ID, 'product_cat' );
 foreach ($terms as $term) {
            $product_cat = $term->name;
            break;
}
 
switch($product_cat)
{
    case 'eBook Bundles';
        return 'Buy Bundle'; break;
    case 'eBooks';
        return 'Buy eBook'; break;
// case 'category3'; etc...
// return 'Category 3 button text'; break;
 
    default;
        return 'Buy Now'; break;
}
}