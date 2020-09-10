<?php
/**
 * Single Product Meta
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/meta.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce/Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;
?>

<?php if( has_term( array( 'eBook Bundles' ), 'product_cat' ) ) : ?>

	<?php $bitb = get_field('bitb'); ?>

	<?php if( have_rows('bitb') ): ?>

		<section class="section-grid animate reveal">

			<h6 class="lined-title">Books in this Bundle</h6>

			<div class="books-in-bundle">

				<?php while( have_rows('bitb') ): the_row();
					$image = get_sub_field('bitb_image');
					$name = get_sub_field('bitb_name');
					$price = get_sub_field('bitb_price');
				?>

				<div class="book-in-bundle">
					<div class="book-image">
						<img src="<?php echo $image['url']; ?>">
					</div>
					<div class="details">
						<p class="book-name"><?php echo $name; ?></p>
						<p class="book-price">$<?php echo $price; ?>.00</p>
					</div>
				</div> 

				<?php endwhile; ?>

			</div> 

		</section>

	<?php endif; ?>

	<?php else : ?>

<?php endif; ?>