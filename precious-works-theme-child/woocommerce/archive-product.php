<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 8.6.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' ); ?>

<section class="archive-product-section">
	<div class="archive-product-container container">

		<div class="archive-product-title-row row">
			<?php do_action( 'woocommerce_shop_loop_header' ); ?>
		</div>

		<?php if ( woocommerce_product_loop() ) : ?>

			<?php do_action( 'woocommerce_before_shop_loop' ); ?>

			<?php woocommerce_product_loop_start(); ?>

				<div class="archive-product-row row">
					<?php while ( have_posts() ) : the_post(); ?>
						<?php do_action( 'woocommerce_shop_loop' ); ?>
						<?php wc_get_template_part( 'content', 'product' ); ?>
					<?php endwhile; ?>
				</div>

			<?php woocommerce_product_loop_end(); ?>

			<?php do_action( 'woocommerce_after_shop_loop' ); ?>

		<?php else : ?>

			<?php do_action( 'woocommerce_no_products_found' ); ?>

		<?php endif; ?>

	</div>
</section>

<?php
do_action( 'woocommerce_after_main_content' );
// Uncomment if you want sidebar
// do_action( 'woocommerce_sidebar' );

get_footer( 'shop' );