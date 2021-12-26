<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="welcome">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


<?php wp_head(); ?>
</head>

<body  onload="Loader()" <?php body_class(); ?>>

<?php wp_body_open(); ?>
<style>
body{
	overflow-x: hidden;
}

/*sidebar mobile*/

.overlay {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.9);
  overflow-x: hidden;
  transition: 0.5s;
}

.overlay-content {
  position: relative;
  top: 25%;
  width: 100%;
  text-align: center;
  margin-top: 30px;
}

.overlay a {
  padding: 8px;
  text-decoration: none;
  font-size: 36px;
  color: #818181;
  display: flex;
  flex-direction: column;
  transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
  color: #f1f1f1;
}

.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
}

@media screen and (max-height: 450px) {
  .overlay a {font-size: 20px}
  .overlay .closebtn {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }
}
/*end sidebar */


.header{
	position: fixed;
	height:auto;
  	width: 100%;
	z-index:999;
  	background-color: black;
	justify-content: space-around;
}


#mobilefooter{
	position: fixed;
  	bottom: 0;
  	width: 100%;
}

.active{
	display: flex;
	flex-direction: row;
	padding-left: 1rem;
	padding-right: 1rem;
	padding-top: 0px;	
	transition: all 1s ease-in-out;	
}

.scroll{
	display: none;
}

.col-full{
 display: flex;
}


#menu-top-menu{
	color: white;
	padding-left: 60px;
	display: flex;
	justify-content: space-between;
	gap: 10px 20px;
	
  }
#menu-item-51 a{
	color: #fcfbf7;
}

.main-navigation{
	padding-right: 2rem;
	padding-top: 0.50rem;
}

#site-header-cart{
	padding-top: 0.5rem;
	
}
#site-header-cart > li > a{
	color: white;
}

.main-navigation ul.menu ul.sub-menu{
	display: none;
	position: absolute;
	background-color: black;
	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	padding: 12px 16px;
	
}



.main-navigation ul li a{
	color: white;
	margin: 0px 6px 0 0;
	
}

.widget_product_search > .woocommerce-product-search > input{
	padding-top: 0.5rem;
	padding-bottom: 0.5rem;
	border-radius: 0.375rem;
	padding-left: 2.5rem;
	outline: 2px solid transparent;
	outline-offset: 2px;
}
.widget_product_search > .woocommerce-product-search > button{
	padding: 0.25rem;
	border-radius: 0.375rem;
}

.storefront-sticky-add-to-cart{
	display: none;
}

#dropdownshop{
	display: none;
}

.shops:hover .dropdown{
	display: block;
}
#search{
	height: 0; /*change with javascript*/
	width: 100%;
	top: 0;
	-webkit-box-shadow: 0px 0px 15px -6px #000000; 
	box-shadow: 0px 0px 15px -6px #000000;
	-webkit-transition: all 2s ease;  
  	-moz-transition: all 2s ease;  
  	-o-transition: all 2s ease;  
  	-ms-transition: all 2s ease;  
 	transition: all 2s ease;
} 


.search-field{
	background-color: #121211;
	height: 2rem;	
	border-radius: 15px;
	margin-bottom: 3rem;
}

#woocommerce-product-search-field-0{
	width: 15rem;
	height: 3rem;
}
.search-field:focus{
	background-color: white;
	outline: none;
	border-bottom: 1px solid;
}
.woocommerce-product-search button{
	display: none;
	border-radius: 5px;
	background-color: #121211;
	color: white;
}


.dropdown:hover .dropdown-content {
	display: flex;
	flex-direction: row;
	height: 10rem;
	z-index: 999;
}

/*search*/

.overlay-content-search {
  display: flex;
  justify-content: center;
  justify-items: center;
  position: relative;
  top: 25%;
  text-align: center;
  margin-top: 30px;
}

/* The sidebar menu */
.sidebar {
  height: 100%; /* 100% Full-height */
  width: 0; /* 0 width - change this with JavaScript */
  position: fixed; /* Stay in place */
  z-index: 1; /* Stay on top */
  top: 0;
  right: 0;
  background-color: #f1f1f1; /* Black*/
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 60px; /* Place content 60px from the top */
  transition: 0.5s; /* 0.5 second transition effect to slide in the sidebar */
}

/* The sidebar links */
.sidebar a {
  
  text-decoration: none;
  transition: 0.3s;
}

/* When you mouse over the navigation links, change their color */
.sidebar a:hover {
  color: #000;
}

/* Position and style the close button (top right corner) */
.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.closebtn {
 
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.closebtn-search{
	position: relative;
	height: auto;
}

/* The button used to open the sidebar */
.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #111;
  color: white;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  background-color: #444;
}

.storefront-breadcrumb{
    background-color: #121212;
    height: 10rem;
}
.woocommerce-breadcrumb{
    padding-top: 2rem;
}
.woocommerce-breadcrumb a{
    color: #ffffff;
}



/* Style page content - use this if you want to push the page content to the right when you open the side navigation */
#content {
  transition: margin-left .5s; /* If you want a transition effect */
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}


	/* since nested groupes are not supported we have to use 
									regular css for the nested dropdowns 
								*/
								li>ul                 { transform: translatex(100%) scale(0) }
								li:hover>ul           { transform: translatex(101%) scale(1) }
								li > button svg       { transform: rotate(-90deg) }
								li:hover > button svg { transform: rotate(-270deg) }

								/* Below styles fake what can be achieved with the tailwind config
									you need to add the group-hover variant to scale and define your custom
									min width style.
									See https://codesandbox.io/s/tailwindcss-multilevel-dropdown-y91j7?file=/index.html
									for implementation with config file
								*/
								.group:hover .group-hover\:scale-100 { transform: scale(1) }
								.group:hover .group-hover\:-rotate-180 { transform: rotate(180deg) }
								.scale-0 { transform: scale(0) }
								.min-w-32 { min-width: 8rem }
</style>

<?php do_action( 'storefront_before_site' ); ?>

<div id="page" class="hfeed site">
	<?php do_action( 'storefront_before_header' ); ?>
			<!--mobile nav-->
			<div id="myNav" class="overlay lg:hidden">
				<a href="javascript:void(0)" class="closebtn" onclick="closeNavmobile()">&times;</a>
				
				<div class="overlay-content">		
					<form role="search" method="get" class="woocommerce-product-search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
						<input type="search" name="q" id="woocommerce-product-search-field-<?php echo isset( $index ) ? absint( $index ) : 0; ?>"  class="w-full py-2 text-sm text-white bg-gray-300 rounded-md pl-10 focus:outline-none focus:bg-white focus:text-gray-900" placeholder="Search..." autocomplete="off">
					</form>			
					<a href="#">Services</a>
					<a href="#">Clients</a>
					<a href="#">Contact</a>
				</div>
			</div>
			<!--end-->	
	<header id="masthead" class="hidden lg:flex header w-screen lg:flex-wrap" role="banner" style="<?php storefront_header_styles(); ?>">

			<?php
				/**
				 * Functions hooked into storefront_header action
				 *
				 * @hooked storefront_header_container                 - 0
				 * @hooked storefront_skip_links                       - 5
				 * @hooked storefront_social_icons                     - 10
				 * @hooked storefront_site_branding                    - 20
				 * @hooked storefront_secondary_navigation             - 30
				 * @hooked storefront_product_search                   - 40
				 * @hooked storefront_header_container_close           - 41
				 * @hooked storefront_primary_navigation_wrapper       - 42
				 * @hooked storefront_primary_navigation               - 50
				 * @hooked storefront_header_cart                      - 60
				 * @hooked storefront_primary_navigation_wrapper_close - 68
				 * do_action( 'storefront_header');
				 */		
			?>
					
						<div id="search" class="overlay fixed flex items-center  w-screen h-screen bg-gray-800 z-50">
							<a href="javascript:void(0)" class="closebtn-search " onclick="hide()">&times;</a>
							<form role="search" method="get" class="woocommerce-product-search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
								<div class="overlay-content-search relative  flex flex-col items-center justify-center w-screen text-gray-600 focus-within:text-gray-400">
									<span class="absolute inset-y-0 left-0 flex items-center pl-2">
										<button type="submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'woocommerce' ); ?>" class="p-1 focus:outline-none focus:shadow-outline"><?php echo esc_html_x( 'Search', 'submit button', 'woocommerce' ); ?>
										<svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-6 h-6"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
										</button>
									</span>
									<input type="search" name="q" id="woocommerce-product-search-field-<?php echo isset( $index ) ? absint( $index ) : 0; ?>"  class="w-full py-2 text-sm text-white bg-gray-300 rounded-md pl-10 focus:outline-none focus:bg-white focus:text-gray-900" placeholder="Search..." autocomplete="off">
								</div>
							</form>
						</div>

			<div id="banner" class="flex bg-red-500 h-10 w-screen justify-center items-center ">
				<h3 class="text-white text-sm uppercase">order 100$ + free shipping</h3>
			</div>

			<!--sidebar cart-->

			<div id="mySidebar" class="sidebar flex justify-center items-center">
				<a href="javascript:void(0)" class="closebtn pt-10" onclick="closeNav()">&times;</a>
				<?php
					defined( 'ABSPATH' ) || exit;

					do_action( 'woocommerce_before_cart' ); 
				?>
				<!---order details--> 
					<div class="cart-collaterals  flex flex-col justify-center items-center lg:px-2 lg:w-1/2">
							<div class="p-4 bg-gray-900 rounded-full">
								<h1 class="ml-2 font-bold text-xs text-white uppercase">cart details</h1>
							</div>
							<div class="p-4">
								<p class="mb-6 text-sm italic">Shipping and additionnal costs are calculated based on values you have entered</p>
								<div class="flex justify-between border-b">
									<div class="lg:px-4 lg:py-2 m-2 text-lg lg:text-xl font-bold text-center text-gray-800">
											Subtotal
									</div>
									<div class="lg:px-4 lg:py-2 m-2 lg:text-lg font-bold text-center text-gray-900">
											<?php wc_cart_totals_subtotal_html(); ?>
									</div>
								</div>	
								<div class="flex flex-row justify-between">
										<a href="<?php echo esc_url( wc_get_checkout_url() ); ?>" class=" flex justify-center items-center px-2 py-2 text-xs font-light leading-none text-center  uppercase transition bg-blue-700 rounded shadow ripple hover:shadow-lg hover:bg-blue-800 focus:outline-none">
											<svg aria-hidden="true" data-prefix="far" data-icon="credit-card" class="w-4 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M527.9 32H48.1C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48.1 48h479.8c26.6 0 48.1-21.5 48.1-48V80c0-26.5-21.5-48-48.1-48zM54.1 80h467.8c3.3 0 6 2.7 6 6v42H48.1V86c0-3.3 2.7-6 6-6zm467.8 352H54.1c-3.3 0-6-2.7-6-6V256h479.8v170c0 3.3-2.7 6-6 6zM192 332v40c0 6.6-5.4 12-12 12h-72c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h72c6.6 0 12 5.4 12 12zm192 0v40c0 6.6-5.4 12-12 12H236c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h136c6.6 0 12 5.4 12 12z"/></svg>
											<span class="text-sm text-white"><?php esc_html_e( 'checkout', 'woocommerce' ); ?></span>
										</a>
										<a href="<?php echo esc_url( wc_get_cart_url() ); ?>" class=" flex justify-center items-center px-2 py-2 text-xs font-light leading-6 text-center text-pink-500 uppercase transition bg-transparent border-2 border-pink-500 rounded ripple hover:bg-pink-100 focus:outline-none">
											<svg xmlns="http://www.w3.org/2000/svg" class="w-4 text-white" viewBox="0 0 511.999 511.999"><path d="M508.745 246.041c-4.574-6.257-113.557-153.206-252.748-153.206S7.818 239.784 3.249 246.035a16.896 16.896 0 000 19.923c4.569 6.257 113.557 153.206 252.748 153.206s248.174-146.95 252.748-153.201a16.875 16.875 0 000-19.922zM255.997 385.406c-102.529 0-191.33-97.533-217.617-129.418 26.253-31.913 114.868-129.395 217.617-129.395 102.524 0 191.319 97.516 217.617 129.418-26.253 31.912-114.868 129.395-217.617 129.395z"/><path d="M255.997 154.725c-55.842 0-101.275 45.433-101.275 101.275s45.433 101.275 101.275 101.275S357.272 311.842 357.272 256s-45.433-101.275-101.275-101.275zm0 168.791c-37.23 0-67.516-30.287-67.516-67.516s30.287-67.516 67.516-67.516 67.516 30.287 67.516 67.516-30.286 67.516-67.516 67.516z"/></svg>
											<span class="text-sm"><?php esc_html_e( 'view cart', 'woocommerce' ); ?></span>
										</a>
								</div>
								<?php do_action( 'woocommerce_after_cart_totals' ); ?>		
							</div>
					</div>
					<?php do_action( 'woocommerce_after_cart' ); ?>
			</div>
		
			<div id="navbar" class=" hidden w-screen shadow-lg lg:flex lg:flex-col lg:items-center p-1 lg:justify-between bg-white shadow-xs">
					<div id="logo" class="logo block items-center justify-center h-16 w-16 pt-3">
						<?php
							$custom_logo_id = get_theme_mod( 'custom_logo' );
							$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
							 
							if ( has_custom_logo() ) {
								echo '
								<a href="/" class="logolink" title="Jiju" accessibility-size="16">
									<img height="25" width="44" src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">
								</a>	
									';
							} else {
								echo '<h1>' . get_bloginfo('name') . '</h1>';
							}
						?>
						
					</div>
					<div class="w-screen flex flex-row items-center p-1 justify-between shadow-xs">
						<div id="social" class="ml-8 text-lg text-gray-900 hidden md:flex">
							<div class="md:flex-auto md:flex-row-reverse mt-2 flex-row flex">
								<a href="#" class="w-6 mx-1 text-black">
									<i class="fab fa-facebook"></i>
								</a>
								<a href="#" class="w-6 mx-1 text-black">
									<i class="fab fa-twitter"></i>
								</a>
								<a href="#" class="w-6 mx-1 text-black">
									<i class="fab fa-youtube"></i>
								</a>
								<a href="#" class="w-6 mx-1 text-black">
									<i class="fab fa-instagram"></i>
								</a>
							</div>
						</div>
	
							<div id="nav-links" class="w-screen md:w-1/3 h-auto pl-16 border-gray-300 text-sm rounded-full flex">
								<div class="text-gray-900 text-center  px-4 py-2 m-2">
								<!--dorpdown shops list-->
										<div class="group inline-block">
											<button
												class=" outline-none focus:outline-none border-none lg:px-3 py-1 text-black bg-white rounded-sm flex items-center min-w-32"
											>
												<span class="tracking-widest rounded-lg focus:outline-none focus:shadow-outline text-black lg:pr-1 font-semibold flex-1 hover:text-gray-900">Shops</span>
												<span>
												<svg
													class="hidden lg:block fill-current h-4 w-4 transform group-hover:-rotate-180
													transition duration-150 ease-in-out"
													xmlns="http://www.w3.org/2000/svg"
													viewBox="0 0 20 20"
												>
													<path
													d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
													/>
												</svg>
												</span>
											</button>
												
													<ul
														class=" bg-white border rounded-sm transform scale-0 group-hover:scale-100 absolute 
													transition duration-150 ease-in-out origin-top min-w-32"
													>
														<!--CAT-->	
														<li class="rounded-sm px-3 py-1 hover:bg-gray-300">
															<button class="w-full bg-white text-left flex items-center outline-none focus:outline-none">
																<span class="pr-1 flex-1 uppercase font-light lg:font-bold text-black">for dry herbs</span>
																<span class="mr-auto">
																<svg
																	class="fill-current h-4 w-4
																	transition duration-150 ease-in-out"
																	xmlns="http://www.w3.org/2000/svg"
																	viewBox="0 0 20 20"
																>
																	<path
																	d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
																	/>
																</svg>
															</button>
															<ul class="bg-white border rounded-sm absolute top-0 right-0 
																transition duration-150 ease-in-out origin-top-left
																min-w-32">
																<li class="px-3 py-1 hover:bg-gray-300"><a class="text-black font-light lg:font-normal " href="https://staging.jiju.co/product-category/bongs/">Bongs</a></li>
																<li class="px-3 py-1 hover:bg-gray-300"><a href="https://staging.jiju.co/product-category/grinders/" class="text-black font-light lg:font-normal">Grinders</a></li>
																<li class="px-3 py-1 hover:bg-gray-300"><a class="text-black font-light lg:font-normal "  href="https://staging.jiju.co/product-category/pipes/">Pipes</a></li>
																<li class="px-3 py-1 hover:bg-gray-300"><a class="text-black font-light lg:font-normal "  href="https://staging.jiju.co/product-category/jars/">Jars</a></li>
																<li class="px-3 py-1 hover:bg-gray-300"><a class="text-black font-light lg:font-normal "  href="https://staging.jiju.co/product-category/rolling-trays/">Rolling Trays</a></li>
															</ul>
														</li>
														<!--CAT-->
														<li class="rounded-sm px-3 py-1 hover:bg-gray-300">
															<button	class="w-full bg-white text-left flex items-center outline-none focus:outline-none">
																<span class="pr-1 flex-1 uppercase font-light lg:font-bold  text-black">for concentrates</span>
																<span class="mr-auto">
																<svg
																	class="fill-current h-4 w-4
																	transition duration-150 ease-in-out"
																	xmlns="http://www.w3.org/2000/svg"
																	viewBox="0 0 20 20"
																>
																	<path
																	d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
																	/>
																</svg>
																</span>
															</button>
															<ul class="bg-white border rounded-sm absolute top-0 right-0 
																transition duration-150 ease-in-out origin-top-left
																min-w-32">
																<li class="px-3 py-1 hover:bg-gray-300"><a class="text-black font-light lg:font-normal "  href="#">Dab Rigs</a></li>
																<!---
																	<li class="rounded-sm relative px-3 py-1 hover:bg-gray-100">
																	<button
																		class="w-full text-left flex items-center outline-none focus:outline-none"
																	>
																		<span class="pr-1 flex-1">Python</span>
																		<span class="mr-auto">
																		<svg
																			class="fill-current h-4 w-4
																			transition duration-150 ease-in-out"
																			xmlns="http://www.w3.org/2000/svg"
																			viewBox="0 0 20 20"
																		>
																			<path
																			d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
																			/>
																		</svg>
																		</span>
																	</button>
																	</li>
																-->
																<li class="px-3 py-1 hover:bg-gray-300"><a class="text-black font-light lg:font-normal "  href="https://staging.jiju.co/shop/dab-mat/silicone-dab-mat-luminous/">Dab Mats</a></li>
																<li class="px-3 py-1 hover:bg-gray-300"><a class="text-black font-light lg:font-normal "  href="#">Dab Accessories</a></li>
															</ul>
														</li>
														<!--CAT-->
														<li class="rounded-sm relative px-3 py-1 hover:bg-gray-300">
															<button
																class="w-full bg-white text-left flex items-center outline-none focus:outline-none "
															>
																<span class="pr-1 flex-1 uppercase font-light lg:font-bold  text-black">Other Accessories</span>
																<span class="mr-auto">
																<svg
																	class="fill-current h-4 w-4
																	transition duration-150 ease-in-out"
																	xmlns="http://www.w3.org/2000/svg"
																	viewBox="0 0 20 20"
																>
																	<path
																	d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
																	/>
																</svg>
																</span>
															</button>
															<ul class="bg-white border rounded-sm absolute top-0 right-0 
																transition duration-150 ease-in-out origin-top-left
																min-w-32">
																<li class="px-3 py-1 hover:bg-gray-300"> <a class="text-black font-light lg:font-normal "  href="#">Ashtrays</a></li>
																<!--
																	<li class="rounded-sm relative px-3 py-1 hover:bg-gray-100">
																	<button
																		class="w-full text-left flex items-center outline-none focus:outline-none"
																	>
																		<span class="pr-1 flex-1">Python</span>
																		<span class="mr-auto">
																		<svg
																			class="fill-current h-4 w-4
																			transition duration-150 ease-in-out"
																			xmlns="http://www.w3.org/2000/svg"
																			viewBox="0 0 20 20"
																		>
																			<path
																			d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
																			/>
																		</svg>
																		</span>
																	</button>
																	</li>
																-->
																<li class="px-3 py-1 hover:bg-gray-300"> <a class="text-black font-light lg:font-normal "  href="#">Lighters</a></li>
																<li class="px-3 py-1 hover:bg-gray-300"> <a class="text-black font-light lg:font-normal "  href="#">Rolling Machines</a></li>
															</ul>
														</li>
														<!--CAT-->
														<li class="rounded-sm relative px-3 py-1 hover:bg-gray-300">
															<button
																class="w-full bg-white text-left flex items-center outline-none focus:outline-none"
															>
																<span class="pr-1 flex-1 uppercase font-light lg:font-bold  text-black">Hookahs</span>
																<span class="mr-auto">
																<svg
																	class="fill-current h-4 w-4
																	transition duration-150 ease-in-out"
																	xmlns="http://www.w3.org/2000/svg"
																	viewBox="0 0 20 20"
																>
																	<path
																	d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
																	/>
																</svg>
																</span>
															</button>
															<ul class="bg-white border rounded-sm absolute top-0 right-0 
																transition duration-150 ease-in-out origin-top-left
																min-w-32">
																<li class="px-3 py-1 hover:bg-gray-300"> <a class="text-black font-light lg:font-normal " href="https://staging.jiju.co/hookah-series/"> Latest Series</a></li>
																<li class="px-3 py-1 hover:bg-gray-300"> <a class="text-black font-light lg:font-normal" href="https://staging.jiju.co/product-category/hookah/">All Hookahs</a></li>
															</ul>
														</li>

														<li class="rounded-sm relative px-3 py-1 hover:bg-gray-300">
															<button
																class="w-full bg-white text-left flex items-center outline-none focus:outline-none"
															>
																<span class="pr-1 flex-1 uppercase font-light lg:font-bold  text-black">Vaporizes</span>
																<span class="mr-auto">
																<svg
																	class="fill-current h-4 w-4
																	transition duration-150 ease-in-out"
																	xmlns="http://www.w3.org/2000/svg"
																	viewBox="0 0 20 20"
																>
																	<path
																	d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
																	/>
																</svg>
																</span>
															</button>
															<ul class="bg-white border rounded-sm absolute top-0 right-0 
																transition duration-150 ease-in-out origin-top-left
																min-w-32">
																<li class="px-3 py-1 hover:bg-gray-300"> <a class="text-black font-light lg:font-normal " href="https://staging.jiju.co/shop/vaporizers/curer/"> Curer</a></li>
																<li class="px-3 py-1 hover:bg-gray-300"> <a class="text-black font-light lg:font-normal" href="https://staging.jiju.co/shop/vaporizers/tokes-vape-phuse/">SOC</a></li>
																<li class="px-3 py-1 hover:bg-gray-300"> <a class="text-black font-light lg:font-normal" href="https://staging.jiju.co/shop/vaporizers/lookah-q7-portable-enail-vaporizer/">LOOKAH</a></li>
															</ul>
														</li>
													</ul>
											</div>
								</div>
								<div class=" px-4 pt-3 m-2">
									<a class="text-black font-semibold text-center" href="#">Account</a>
								</div>
								<div class="group px-4 pt-2 m-2">
											<button
												class=" outline-none focus:outline-none border-none lg:px-3 py-1 text-black bg-white rounded-sm flex items-center min-w-32"
											>
												<span class="tracking-widest rounded-lg focus:outline-none focus:shadow-outline text-black lg:pr-1 font-semibold flex-1 hover:text-gray-300">Brands</span>
												<span>
												<svg
													class="hidden lg:block fill-current h-4 w-4 transform group-hover:-rotate-180
													transition duration-150 ease-in-out"
													xmlns="http://www.w3.org/2000/svg"
													viewBox="0 0 20 20"
												>
													<path
													d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"
													/>
												</svg>
												</span>
											</button>
									
											<ul class="flex flex-row bg-white border rounded-sm transform scale-0 group-hover:scale-100 absolute 
													transition duration-150 ease-in-out origin-top min-w-32">
													<li class="px-3 py-1 hover:bg-gray-300"><a class="text-black font-light lg:font-normal " href="https://www.amazon.com/stores/HOKirin/page/697A60E9-46E6-4089-BB3F-E2D320284003?ref_=ast_bln">
														<img class="image" src="https://jiju.co/wp-content/uploads/2021/04/yeah-e1617978643814.png" alt="" width="95" height="95">
													</a></li>
													<li class="px-3 py-1 hover:bg-gray-300"><a class="text-black font-light lg:font-normal " href="https://staging.jiju.co/product-category/bongs/">
														<img width="80" height="80" src="https://jiju.co/wp-content/uploads/2021/01/yufan-100x100.png" class="image wp-image-4134  attachment-80x80 size-80x80" alt="" loading="lazy" style="max-width: 100%; height: auto;" srcset="https://jiju.co/wp-content/uploads/2021/01/yufan-100x100.png 100w, https://jiju.co/wp-content/uploads/2021/01/yufan-20x20.png 20w" sizes="(max-width: 80px) 100vw, 80px">
													</a></li>
													<li class="px-3 py-1 hover:bg-gray-300"><a class="text-black font-light lg:font-normal " href="https://staging.jiju.co/product-category/bongs/">
														<img width="80" height="80" src="https://jiju.co/wp-content/uploads/2021/01/onuoss-100x100.png" class="image wp-image-4133  attachment-80x80 size-80x80" alt="" loading="lazy" style="max-width: 100%; height: auto;" srcset="https://jiju.co/wp-content/uploads/2021/01/onuoss-100x100.png 100w, https://jiju.co/wp-content/uploads/2021/01/onuoss-20x20.png 20w" sizes="(max-width: 80px) 100vw, 80px">
													</a></li>
											</ul>
								</div>
									

								<div class=" px-4 pt-3 m-2">
									<a class="text-black font-semibold text-center" href="#">Wishlist</a>
								</div>
								
							</div>
							
							<div class="flex flex-row-reverse mr-8  md:flex">
								<div class=" text-center  px-4 py-2 m-2">
									<a href="#" onclick="openNav()"  class="flex rounded-lg focus:outline-none focus:shadow-outline text-blue-800">
										<svg aria-hidden="true" data-prefix="fas" data-icon="shopping-cart" class="svg-inline--fa fa-shopping-cart fa-w-18 h-6 lg:w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M528.12 301.319l47.273-208C578.806 78.301 567.391 64 551.99 64H159.208l-9.166-44.81C147.758 8.021 137.93 0 126.529 0H24C10.745 0 0 10.745 0 24v16c0 13.255 10.745 24 24 24h69.883l70.248 343.435C147.325 417.1 136 435.222 136 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-15.674-6.447-29.835-16.824-40h209.647C430.447 426.165 424 440.326 424 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-22.172-12.888-41.332-31.579-50.405l5.517-24.276c3.413-15.018-8.002-29.319-23.403-29.319H218.117l-6.545-32h293.145c11.206 0 20.92-7.754 23.403-18.681z"/></svg>
										<span class="hidden lg:flex font-thin">
											<?php echo WC()->cart->get_cart_total(); ?>
										</span>
										<span class="flex lg:hidden font-light text-blue-800 items-center text-right relative rounded-full w-4 h-5 bg-red-500 shadow-xl  ">
											<?php echo WC()->cart->get_cart_contents_count(); ?>
										</span>
									</a>
								</div>
								<div class="text-center px-4 py-2 m-2">
									<a onclick="show()" href="#">
										<i class="fas fa-search text-black px-6"></i>
									</a>
									<script>
										function show(){
											document.getElementById("search").style.height="550px";
										}
										function hide(){
											document.getElementById("search").style.height="0px";
										}

									
									</script>
								</div>
						    </div>
					</div>	

				
			</div> 

			
					
			<!--<a class="cart-contents" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> - <?php echo WC()->cart->get_cart_total(); ?></a>-->
			
	</header><!-- #masthead -->
	
	<script>
		var myNav =$("#navbar");
		var myBanner =$("#banner")
		$(window).on('scroll', function(){
			if($(window).scrollTop() >= 280){
				myNav.addClass('active');
			}else{
				myNav.removeClass('active');
			}
		});

		$(window).on('scroll',function(){
			if($(window).scrollTop() >= 280){
				myBanner.addClass('scroll');
			}else{
				myBanner.removeClass('scroll');
			}
		})

		function openNav() {
  			document.getElementById("mySidebar").style.width = "350px";
			document.getElementById("main").style.marginLeft = "250px";
			}

			/* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
			function closeNav() {
			document.getElementById("mySidebar").style.width = "0";
			document.getElementById("main").style.marginLeft = "0";
		}


		

		function openNavmobile() {
			document.getElementById("myNav").style.width = "100%";
		}

			function closeNavmobile() {
			document.getElementById("myNav").style.width = "0%";
		}
	</script>




<style>



</style>

	<?php
	/**
	 * Functions hooked in to storefront_before_content
	 *
	 * @hooked storefront_header_widget_region - 10
	 * @hooked woocommerce_breadcrumb - 10
	 */
	do_action( 'storefront_before_content' );
	?>
	

	<main  id="content" class="site-content justify-center items-center w-full pt-0 lg:pt-40" tabindex="-1">
		<div class="relative">
						
			<?php
			do_action( 'storefront_content_top' );
