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
article{
	width: 90%;
}


.entry-header{
	display: none;
	justify-content: center;
	align-items: center;
	padding-top: 1rem;
	padding-bottom: 2rem;
}
.woocommerce{
	display: flex;
	background-color: white;
	-webkit-box-shadow: -2px -1px 15px 7px rgba(0,0,0,0.5);
  -moz-box-shadow: -3px -2px 30px 14px rgba(0,0,0,0.425);
  box-shadow: -2px -2px 4px 2px rgba(0,0,0,0.35);
}
.woocommerce-cart-form{
	height: 100%;
}
.cart-collaterals{
	padding-left: 2rem;
	height: 100%;
}
.cart_totals  h2{
	font-size: 24px;
    font-weight: 500;
    margin-bottom: 30px;
    color: #121212;
}
.shop_table{
	table-layout: auto;
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    text-align: left;
}
thead {
    display: table-header-group;
    vertical-align: middle;
    border-color: inherit;
}
.shop_table tbody tr {
    border-bottom: 1px solid #eee;
	height: 20px;
}
.cart-subtotal{
	padding-bottom: 3rem;
}
table {
	display: table;
    border-spacing: 0;
    width: 100%;
    margin: 0 0 1.41575em;
    border-collapse: separate;
	border-color: grey;
}

table thead th {
    padding: 1.41575em;
    vertical-align: middle;
}

table th {
    font-weight: 600;
}

tbody {
    display: table-row-group;
    vertical-align: middle;
    border-color: inherit;
}
.product-remove a{
	color: white;
	border-color: grey;
	height: 1rem;
	width: 2rem;
	border: 1px solid red;
	border-radius: 50%;
	background-color: red;
	margin-left: 4rem;
}
.quantity input{
	padding: .326em;
    width: 3.706325903em;
	border: 1px solid #121212;
	border-radius: 15px;
	margin-left: 2rem;
	margin-right: 2rem;
}

.quantity input:focus{
	outline: none;
}
.actions{
	display: flex;
	flex-direction: column;
	justify-content: space-between;
}
.actions button{
	background-color: black;
	color: white;
}
.coupon button{
	background-color: #18a605;
	color: white;
}
@media (min-width: 1024px){
		.wc-proceed-to-checkout{
			display: flex;
			flex-direction: column;
			width: 15rem;
	}
}


</style>

	<div id="primary" class="content-area ">
		<main id="main" class="site-main flex mb-8 justify-center items-center space-x-4 space-y-4 pt-8" role="main">

			<?php
			while ( have_posts() ) :
				the_post();

				do_action( 'storefront_page_before' );

				get_template_part( 'content', 'page' );

				/**
				 * Functions hooked in to storefront_page_after action
				 *
				 * @hooked storefront_display_comments - 10
				 */
				do_action( 'storefront_page_after' );

			endwhile; // End of the loop.

			?>
			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//do_action( 'storefront_sidebar' );
get_footer();
