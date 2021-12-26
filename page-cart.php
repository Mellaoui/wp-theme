

<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package storefront
 */

get_header(); ?>


<style>
.product-thumbnail > a > img{
    width: 5rem;
    border-radius: 0.25rem;

}

.cart_totals{
    display: flex;
    justify-content: center;
}
.cart_totals h2{
    display: none;
}

.cart_totals table{
    display: none;
}
.checkout-button{
    display: none;
}
.cart-pdf-button{
    display: flex;
    justify-content: center;
    width: 100%;
    padding-left: 2.5rem;
    padding-right: 2.5rem;
    padding-top: 0.75rem;
    padding-bottom: 0.75rem;
    margin-top: 2rem;
    margin: 1rem;
    color: white;
    background-color: red;
    border: 1px solid red;
    font-weight: 500;
    text-transform: uppercase;
    border-radius: 9999px;
}

.cart-pdf-button:hover{
    background-color: #fa2f5b;
}

</style>

<?php
/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.8.0
 */

defined( 'ABSPATH' ) || exit;

do_action( 'woocommerce_before_cart' ); ?>

<form class="woocommerce-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
	<?php do_action( 'woocommerce_before_cart_table' ); ?>
<div class="flex justify-center my-6">
<div class="flex flex-col w-full p-8 text-gray-800 bg-white shadow-lg pin-r pin-y md:w-4/5 lg:w-4/5">
    <div class="flex-1">
	<table class="w-full text-sm lg:text-base shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
		<thead>
			<tr class="h-12 uppercase">
				<th class="product-remove hidden md:table-cell">&nbsp;</th>
				<th class="product-thumbnail hidden md:table-cell">&nbsp;</th>
				<th class="product-name text-left"><?php esc_html_e( 'Product', 'woocommerce' ); ?></th>
				<th class="product-price hidden text-right md:table-cell"><?php esc_html_e( 'Price', 'woocommerce' ); ?></th>
				<th class="product-quantity lg:text-right text-left pl-5 lg:pl-0">
                        <span class="lg:hidden" title="Quantity">Qtd</span>
                        <span class="hidden lg:inline"><?php esc_html_e( 'Quantity', 'woocommerce' ); ?></span>
                </th>
				<th class="product-subtotal text-right"><?php esc_html_e( 'Subtotal', 'woocommerce' ); ?></th>
			</tr>
		</thead>
		<tbody>
			<?php do_action( 'woocommerce_before_cart_contents' ); ?>

			<?php
			foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
				$_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
				$product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

				if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
					$product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
					?>
					<tr class="woocommerce-cart-form__cart-item <?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">

						<td class="product-remove hidden pb-4 md:table-cell">
							<?php
								echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
									'woocommerce_cart_item_remove_link',
									sprintf(
										'<a href="%s" class="remove" aria-label="%s" data-product_id="%s" data-product_sku="%s">&times;</a>',
										esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
										esc_html__( 'Remove this item', 'woocommerce' ),
										esc_attr( $product_id ),
										esc_attr( $_product->get_sku() )
									),
									$cart_item_key
								);
							?>
						</td>

						<td class="product-thumbnail hidden pb-4 md:table-cell">
                            <?php
                                $thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

                                if ( ! $product_permalink ) {
                                    echo $thumbnail; // PHPCS: XSS ok.
                                } else {
                                    printf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $thumbnail ); // PHPCS: XSS ok.
                                }
                            ?>
						</td>

						<td class="product-name" data-title="<?php esc_attr_e( 'Product', 'woocommerce' ); ?>">
                           
                                <?php
                                        if ( ! $product_permalink ) {
                                            echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;' );
                                        } else {
                                            echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', sprintf( '<a href="%s">%s</a>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key ) );
                                        }

                                        do_action( 'woocommerce_after_cart_item_name', $cart_item, $cart_item_key );

                                        // Meta data.
                                        echo wc_get_formatted_cart_item_data( $cart_item ); // PHPCS: XSS ok.

                                        // Backorder notification.
                                        if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
                                            echo wp_kses_post( apply_filters( 'woocommerce_cart_item_backorder_notification', '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>', $product_id ) );
                                        }
                                    ?>
                            
						</td>

						<td class="product-price  text-right md:table-cell" data-title="<?php esc_attr_e( 'Price', 'woocommerce' ); ?>">
							<?php
								echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
							?>
						</td>

						<td class="product-quantity justify-center md:justify-end md:flex mt-6" data-title="<?php esc_attr_e( 'Quantity', 'woocommerce' ); ?>">
                            <div class="w-20 h-10">
                                 <div class="relative flex flex-row w-full h-8">
                                        <?php
                                        if ( $_product->is_sold_individually() ) {
                                            $product_quantity = sprintf( '1 <input class"w-full font-semibold text-center text-gray-700 bg-gray-200 outline-none focus:outline-none hover:text-black focus:text-black" type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
                                        } else {
                                            $product_quantity = woocommerce_quantity_input(
                                                array(
                                                    'input_name'   => "cart[{$cart_item_key}][qty]",
                                                    'input_value'  => $cart_item['quantity'],
                                                    'max_value'    => $_product->get_max_purchase_quantity(),
                                                    'min_value'    => '0',
                                                    'product_name' => $_product->get_name(),
                                                ),
                                                $_product,
                                                false
                                            );
                                        }

                                        echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item ); // PHPCS: XSS ok.
                                        ?>
                                 </div>
                            </div>
						</td>

						<td class="product-subtotal text-right md:table-cell " data-title="<?php esc_attr_e( 'Subtotal', 'woocommerce' ); ?>">
                            <span class="text-sm lg:text-base font-medium">
                                <?php
                                    echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); // PHPCS: XSS ok.
                                ?>
                            </span>
						</td>
					</tr>
					<?php
				}
			}
			?>

			<?php do_action( 'woocommerce_cart_contents' ); ?>

		

			<?php do_action( 'woocommerce_after_cart_contents' ); ?>
		</tbody>
	</table>
<!--coupone code-->
<hr class="pb-6 mt-6">
<div class="my-4 mt-6 -mx-2 lg:flex">
    <div class="lg:px-2 lg:w-1/2">
        <div class="p-4 bg-gray-900 ">
            <h1 class="ml-2 font-bold text-white uppercase">Coupon Code</h1>
        </div>
        <div class="p-4">
            <p class="mb-4 italic"> If you have a coupon, please enter it in the box below</p>
        </div>
        <?php if ( wc_coupons_enabled() ) : ?>
			<div class="coupon justify-center md:flex">
                <div class="flex items-center w-full h-13 pl-3  bg-gray-100 border rounded-full">
				     <input type="text" name="coupon_code" class="input-text w-full bg-gray-100 outline-none appearance-none focus:outline-none active:outline-none" id="coupon_code" value="" placeholder="<?php esc_attr_e( 'Coupon code', 'woocommerce' ); ?>" /> 
                        <button type="submit" class="text-sm flex items-center px-3 py-1 text-white bg-gray-900 rounded-full outline-none md:px-4  hover:text-red-700 focus:outline-none active:outline-none" name="apply_coupon" value="<?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?>">
                            <svg aria-hidden="true" data-prefix="fas" data-icon="gift" class="w-8 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M32 448c0 17.7 14.3 32 32 32h160V320H32v128zm256 32h160c17.7 0 32-14.3 32-32V320H288v160zm192-320h-42.1c6.2-12.1 10.1-25.5 10.1-40 0-48.5-39.5-88-88-88-41.6 0-68.5 21.3-103 68.3-34.5-47-61.4-68.3-103-68.3-48.5 0-88 39.5-88 88 0 14.5 3.8 27.9 10.1 40H32c-17.7 0-32 14.3-32 32v80c0 8.8 7.2 16 16 16h480c8.8 0 16-7.2 16-16v-80c0-17.7-14.3-32-32-32zm-326.1 0c-22.1 0-40-17.9-40-40s17.9-40 40-40c19.9 0 34.6 3.3 86.1 80h-86.1zm206.1 0h-86.1c51.4-76.5 65.7-80 86.1-80 22.1 0 40 17.9 40 40s-17.9 40-40 40z"/></svg>
                            <?php esc_attr_e( 'Apply coupon', 'woocommerce' ); ?>
                        </button>
					    <?php do_action( 'woocommerce_cart_coupon' ); ?>
                   
                    <?php do_action( 'woocommerce_cart_actions' ); ?>

					<?php wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' ); ?>
                </div>        
			</div>
		<?php endif ?>
    </div>
    <?php do_action( 'woocommerce_after_cart_table' ); ?>
    <?php do_action( 'woocommerce_before_cart_collaterals' ); ?>

   <!---order details--> 
    <div class="cart-collaterals g:px-2 lg:w-1/2">
            <div class="p-4 bg-gray-900 ">
                <h1 class="ml-2 font-bold text-white uppercase">Order Details</h1>
            </div>
            <div class="p-4 flex flex-col">
                <p class="mb-6 italic">Shipping and additionnal costs are calculated based on values you have entered</p>
                <div class="flex justify-between border-b">
                    <div class="lg:px-4 lg:py-2 m-2 text-lg lg:text-xl font-bold text-center text-gray-800">
                            Subtotal
                    </div>
                    <div class="lg:px-4 lg:py-2 m-2 lg:text-lg font-bold text-center text-gray-900">
                            <?php wc_cart_totals_subtotal_html(); ?>
                    </div>
                </div>

                <?php foreach ( WC()->cart->get_coupons() as $code => $coupon ) : ?>
                    <div class="flex justify-between pt-4 border-b">
                        <div class="flex lg:px-4 lg:py-2 m-2 text-lg lg:text-xl font-bold text-gray-800">
                            <form action="<?php echo esc_attr( wc_cart_totals_coupon_label( $coupon, false ) ); ?>" method="POST">
                                <button type="submit" class="mr-2 mt-1 lg:mt-2">
                                    <svg aria-hidden="true" data-prefix="far" data-icon="trash-alt" class="w-4 text-red-600 hover:text-red-800" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M268 416h24a12 12 0 0012-12V188a12 12 0 00-12-12h-24a12 12 0 00-12 12v216a12 12 0 0012 12zM432 80h-82.41l-34-56.7A48 48 0 00274.41 0H173.59a48 48 0 00-41.16 23.3L98.41 80H16A16 16 0 000 96v16a16 16 0 0016 16h16v336a48 48 0 0048 48h288a48 48 0 0048-48V128h16a16 16 0 0016-16V96a16 16 0 00-16-16zM171.84 50.91A6 6 0 01177 48h94a6 6 0 015.15 2.91L293.61 80H154.39zM368 464H80V128h288zm-212-48h24a12 12 0 0012-12V188a12 12 0 00-12-12h-24a12 12 0 00-12 12v216a12 12 0 0012 12z"/></svg>
                                </button>
                            </form>
                            Coupon "<?php echo esc_attr( sanitize_title( $code ) ); ?>f"
                        </div>
                        <div class="lg:px-4 lg:py-2 m-2 lg:text-lg font-bold text-center text-green-700">
                            <?php wc_cart_totals_coupon_label( $coupon ); ?>
                            <?php wc_cart_totals_coupon_html( $coupon ); ?>
                        </div>
                    </div>
                <?php endforeach; ?>
<!--shipping-->
                <?php if ( WC()->cart->needs_shipping() && WC()->cart->show_shipping() ) : ?>
                    <div class="flex justify-between pt-4 border-b">
                        <?php do_action( 'woocommerce_cart_totals_before_shipping' ); ?>
                            <div class="lg:px-4 lg:py-2 m-2 text-lg lg:text-xl font-bold text-center text-gray-800">
                                <?php wc_cart_totals_shipping_html(); ?>
                            </div>
                        <?php do_action( 'woocommerce_cart_totals_after_shipping' ); ?>
                        <?php elseif ( WC()->cart->needs_shipping() && 'yes' === get_option( 'woocommerce_enable_shipping_calc' ) ) : ?>
                        <div class="lg:px-4 lg:py-2 m-2 lg:text-lg font-bold text-center text-gray-900">
                            <?php woocommerce_shipping_calculator(); ?>
                        </div>
                    </div>
                <?php endif; ?>
<!--end shipping-->

                <a href="<?php echo esc_url( wc_get_checkout_url() ); ?>" class=" button alt wc-forward flex justify-center w-full px-10 py-3 mt-6 font-medium text-white uppercase bg-gray-800 rounded-full shadow item-center hover:bg-gray-700 focus:shadow-outline focus:outline-none">
                    <svg aria-hidden="true" data-prefix="far" data-icon="credit-card" class="w-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M527.9 32H48.1C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48.1 48h479.8c26.6 0 48.1-21.5 48.1-48V80c0-26.5-21.5-48-48.1-48zM54.1 80h467.8c3.3 0 6 2.7 6 6v42H48.1V86c0-3.3 2.7-6 6-6zm467.8 352H54.1c-3.3 0-6-2.7-6-6V256h479.8v170c0 3.3-2.7 6-6 6zM192 332v40c0 6.6-5.4 12-12 12h-72c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h72c6.6 0 12 5.4 12 12zm192 0v40c0 6.6-5.4 12-12 12H236c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h136c6.6 0 12 5.4 12 12z"/></svg>
                    <span><?php esc_html_e( 'Proceed to checkout', 'woocommerce' ); ?></span>
                </a>
                <?php do_action( 'woocommerce_after_cart_totals' ); ?>
                
                
                <?php
                    /**
                     * Cart collaterals hook.
                     *
                     * @hooked woocommerce_cross_sell_display
                     * @hooked woocommerce_cart_totals - 10
                     */
                    do_action( 'woocommerce_cart_collaterals' );
                ?>
            </div>

    </div>
</div>			
</div>
</div>
</div>
	
</form>



<?php do_action( 'woocommerce_after_cart' ); ?>


<?php
//do_action( 'storefront_sidebar' );
get_footer();
?>