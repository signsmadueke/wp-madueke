<?php
/**
 * Single Product Price
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/price.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

?>

<section class="animate reveal channels price">
	<div class="section-grid">
		<p class="name small-caps">Ebook (PDF)</p>
		<p class="<?php echo esc_attr( apply_filters( 'woocommerce_product_price_class', 'price' ) ); ?>"><?php echo $product->get_price_html(); ?></p>
	</div>
	
	
	<form class="cart" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data'>
		<?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>

		<?php
		do_action( 'woocommerce_before_add_to_cart_quantity' );

		woocommerce_quantity_input(
			array(
				'min_value'   => apply_filters( 'woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product ),
				'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product ),
				'input_value' => isset( $_POST['quantity'] ) ? wc_stock_amount( wp_unslash( $_POST['quantity'] ) ) : $product->get_min_purchase_quantity(), // WPCS: CSRF ok, input var ok.
			)
		);

		do_action( 'woocommerce_after_add_to_cart_quantity' );
		?>

		<button type="submit" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" class="w-icon single_add_to_cart_button button alt">
			<img class="svg" src="<?php bloginfo('template_directory');?>/assets/images/icons/cart.svg">
			<span>Add to Cart</span>
		</button>
		
		<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
	</form>
	
	
</section>

<?php if( has_term( array( 'eBook Bundles' ), 'product_cat' ) ) : ?>

<!-- <section class="section-grid animate reveal">
	<h6 class="lined-title">Books in this Bundle</h6>
	<div class="books-in-bundle">
		<div class="book-in-bundle">
			<div class="book-image">
				<img src="<?php bloginfo('template_directory');?>/assets/images/books/book6.jpg'; ?>">
			</div>
			<div class="details">
				<p class="book-name">21/40 Nights of Decrees and Your Enemies Will Surrender</p>
				<p class="book-price">$20.00</p>
			</div>
		</div>
		<div class="book-in-bundle">
			<div class="book-image">
				<img src="<?php bloginfo('template_directory');?>/assets/images/books/book6.jpg'; ?>">
			</div>
			<div class="details">
				<p class="book-name">21/40 Nights of Decrees and Your Enemies Will Surrender</p>
				<p class="book-price">$20.00</p>
			</div>
		</div>
		<div class="book-in-bundle">
			<div class="book-image">
				<img src="<?php bloginfo('template_directory');?>/assets/images/books/book6.jpg'; ?>">
			</div>
			<div class="details">
				<p class="book-name">21/40 Nights of Decrees and Your Enemies Will Surrender</p>
				<p class="book-price">$20.00</p>
			</div>
		</div>
	</div>
</section> -->

<?php else : ?>

<?php endif; ?>