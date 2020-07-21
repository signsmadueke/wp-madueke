<?php
/**
 * Single product short description
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/short-description.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

global $post;

$short_description = apply_filters( 'woocommerce_short_description', $post->post_excerpt );

if ( ! $short_description ) {
	return;
}

?>

	
<?php if( has_term( array( 'eBook Bundles' ), 'product_cat' ) ) : ?>

<section class="section-grid animate reveal">
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
</section>

<?php else : ?>

<section class="section-grid animate reveal">
	<h6 class="lined-title">Book Description</h6>
	<div class="woocommerce-product-details__short-description">
		<?php echo $short_description; ?>
	</div>
</section>

<?php endif; ?>