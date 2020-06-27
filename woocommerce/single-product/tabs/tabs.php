<?php
/**
 * Single Product tabs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/tabs.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.8.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Filter tabs and allow third parties to add their own.
 *
 * Each tab is an array containing title, callback and priority.
 *
 * @see woocommerce_default_product_tabs()
 */
$product_tabs = apply_filters( 'woocommerce_product_tabs', array() );
global $post;

$heading = apply_filters( 'woocommerce_product_description_heading', __( 'Book Description', 'woocommerce' ) );

if ( ! empty( $product_tabs ) ) : ?>

	<div id="tab-description" class="woocommerce-tabs wc-tabs-wrapper">
		<?php if ( $heading ) : ?>
		<?php endif; ?>

		<section class="section-grid">
			<h1 class="lined-heading"><?php echo esc_html( $heading ); ?></h1>
			<div>
				<?php the_content(); ?>
			</div>
		</section>
	</div>

<?php endif; ?>
