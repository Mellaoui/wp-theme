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

    

.columns-3{ 
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 5fr));
    justify-content: space-between;
    column-gap: 10px;
    row-gap: 5rem;
}

@media (max-width: 767px) {
    .columns-3{
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    justify-content: center;
    }
    .product{
        padding-left: 0rem;
        display: flex;
        flex-direction: column;
        position: relative;
        background: white;
        justify-content: center;
        justify-items: center;
    }
    .storefront-product-pagination{
       display: none;
    }
    .storefront-sorting form{
        display:none;
    }
    .storefront-sorting p{
        display: none;
    }
    .woocommerce-pagination{
        display:flex;
        padding: 1em 0;
        border: 1px solid rgba(0,0,0,.05);
        border-width: 1px 0;
        text-align: center;
        clear: both;
    }
    .products{
        display: flex;
        flex-direction: column;
    }

    .button{
        height: 24px;
        width: 10rem;
        display: flex;
        background-color: #121212;
        color: #ffffff;
        text-align: center;
        flex-direction: column;
    }
}


.pagination, .woocommerce-pagination {
    padding: 1em 0;
    border: 1px solid rgba(0,0,0,.05);
    border-width: 1px 0;
    text-align: center;
    clear: both;
}
.product{
        display: flex;
        flex-direction: column;
        position: relative;
        background: white;
        padding-bottom: 2rem;
        padding-block: 2rem;
        height: inherit!important;
        overflow: hidden;
        justify-content: center;
        justify-items: center;
                 }

.product img{
    
    align-items: center;
}              

.product a .price span{
    color:black ;

}

#secondary{
    display: none;
}
.products{
    background-color: white;
}






       


.add-to-wishlist-before_image .yith-wcwl-add-to-wishlist {
    position: absolute;
    z-index: 0;
    margin: 0;
    top: 10px;
    left: 10px;
}

.products ul li{
       list-style: none;
       padding-right: 2rem;
    }

    ul.products li.product .onsale {
    top: 0;
    left: 0;
    right: auto;
    margin: 0;
    border: 1px solid #911904;
    border-radius: 15px;
    background-color: #911904;
    color: white;
}


@media (min-width: 768px) {
    .product:hover a.button{
    visibility: visible;
    opacity: 1;
    background-color: #111827;
    color: white;
    transition: visibility 0.5s, opacity 0.5s linear;
}

.product:hover .price span{
    visibility: hidden;
    opacity: 0;
  transition: visibility 0.5s, opacity 0.5s linear;
}
.product:hover .onsale{
    visibility: hidden;
    opacity: 0;
    transition: visibility 0.5s, opacity 0.5s linear;
}



.product:hover .yith-wcwl-add-button{
    visibility: visible;
    opacity: 0.8;
    background:white;
    transition: visibility 0.5s, opacity 0.5s linear;
    color: black;
    position: absolute;
    z-index: 0;
    margin: 0;
    top: 30px;
    left:220px;
    border-radius: 50%;
    width: 30px;
    height: 30px;
}

.yith-wcwl-add-button{
    visibility: hidden;
    opacity: 0;
}


.yith-wcwl-add-button .yith-wcwl-icon {
    color: black;
    opacity: 1;
    justify-content: center;
    justify-items: center;
    padding-top: 2px;
    padding-left: 2px;
    padding-bottom: 2px;
}

.yith-wcwl-wishlistaddedbrowse .yith-wcwl-icon{
    color: brown;
}
a.button {
    text-align: center;
    margin-top: 0.5rem;
    background-color: white;
    border-radius: 2rem;
    visibility:hidden;
    color: black;
}

}


            @media(min-width: 768px){
                .woocommerce-ordering{
                    
                    background-color: #111827;
                    color: whitesmoke;
                    margin-right: 1em;
                    margin-bottom: 0;
                    padding: .327em 0;
                   
                }
                .orderby{
                    background-color: #111827;
                    color: whitesmoke;
                }
                .woocommerce-result-count{
                    color:black;
                }
            }
            @media (min-width: 768px){
                .woocommerce-pagination{
                    float: right;
                    border: none;
                    clear: none;
                    padding: 0;
                    margin-bottom: 0;
                }
            }
          .storefront-sorting{
                
                font-size: .875em;
                width: auto;
                display: flex;
                justify-content: space-between;
            }
            

            .woocommerce-pagination ul{
                float: right;
                display: flex;
                flex-direction: row;
            }
            .woocommerce-pagination .page-numbers{
                border-left-width: 0;
                list-style: none;
                margin: 0;
                vertical-align: middle;
                padding: .3342343017em .875em;
                background-color: rgba(0,0,0,.025);
                color: black;
            }
            .woocommerce-Price-amount bdi{
                font-size: 20px;
            }

            .woocommerce-message {
                    background-color: #34a855;
                    top: 45px;
                    right: 45px;
                    padding: 20px 20px 20px 100px;
                    position: fixed;
                    top: 15px;
                    right: 15px;
                    max-width: calc(100% - 30px);
                    display: flex;
                    align-items: center;
                    margin: 0;
                    padding: 15px 15px 15px 60px;
                    overflow: hidden;
                    transform: translateX(150%);
                    font-weight: 400;
                    color: #fff;
                    font-size: 16px;
                    animation: thb-slide-in,thb-slide-out;
                    animation-duration: 1s,1.5s;
                    animation-delay: .5s,5s;
                    animation-fill-mode: forwards;
                    animation-timing-function: ease;
                    -moz-box-shadow: 0 4px 18px rgba(0,0,0,.15);
                    -webkit-box-shadow: 0 4px 18px rgb(0 0 0 / 15%);
                    box-shadow: 0 4px 18px rgb(0 0 0 / 15%);
             }
     
    .price_slider_wrapper{
        padding-top:5px
     }

     .price_slider{
        height:2px;
        background:#d4d4d4;
        position:relative;
        margin-bottom:20px
     }   

     .price_slider{
        height:2px;
        background:#d4d4d4;
        position:relative;
        margin-bottom:20px
     }

     .ui-slider-range{
        height:2px;
        background:#121212;
        position:absolute
     }

     .ui-slider-handle{
     display:block;
    outline:none;
    position:absolute;
    top:-5px;
    width:12px;
    height:12px;
    border-radius:6px;
    border:2px solid #121212;
    background:#fff;
    -moz-transition-duration:0s;
    -o-transition-duration:0s;
    -webkit-transition-duration:0s;
    transition-duration:0s
 }

 ui-slider-handle:last-child{
     margin-left:-12px
     }

     .price_slider_amount{
         display:flex;
         flex-direction:row-reverse;
         align-items:center;
         justify-content:space-between;
         font-size:13px;
         font-weight:400
    }

    .price_slider_amount .clear{
        display:none
        }

    .price_slider_amount input[type="text"]{
        display:none
    }

    .price_slider_amount .button{
        font-size:13px;font-weight:500;line-height:1;
    }
    #menu-top-menu {
    color: black;
    padding-left: 60px;
    display: flex;
    justify-content: space-between;
    gap: 10px 20px;
    align-content: center;
    flex-direction: column;
}
#menu-item-51 a {
    color: #444343;
}
</style>



	<div class="flex flex-row wrapper w-auto bg-white">
        
        
               
        <nav class=" hidden lg:block mt-10">

        <?php
/**
 * The template for displaying product price filter widget.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-widget-price-filter.php
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.7.1
 */

defined( 'ABSPATH' ) || exit;

?>
<?php
 
do_action( 'woocommerce_widget_price_filter_start' ); ?>

<form method="get" action="<?php echo esc_url( $form_action ); ?>">
	<div class="price_slider_wrapper">
		<div class="price_slider" ></div>
		<div class="price_slider_amount" data-step="<?php echo esc_attr( $step ); ?>">
			<input type="text" id="min_price" name="min_price" value="<?php echo esc_attr( $current_min_price ); ?>" data-min="<?php echo esc_attr( $min_price ); ?>" placeholder="<?php echo esc_attr__( 'Min price', 'woocommerce' ); ?>" />
			<input type="text" id="max_price" name="max_price" value="<?php echo esc_attr( $current_max_price ); ?>" data-max="<?php echo esc_attr( $max_price ); ?>" placeholder="<?php echo esc_attr__( 'Max price', 'woocommerce' ); ?>" />
			<?php /* translators: Filter: verb "to filter" */ ?>
			<button type="submit" class="button"><?php echo esc_html__( 'Filter', 'woocommerce' ); ?></button>
			<div class="price_label">
				<?php echo esc_html__( 'Price:', 'woocommerce' ); ?> <span class="from"></span> &mdash; <span class="to"></span>
			</div>
			<?php echo wc_query_string_form_fields( null, array( 'min_price', 'max_price', 'paged' ), '', true ); ?>
			<div class="clear"></div>
		</div>
	</div>
</form>

<?php do_action( 'woocommerce_widget_price_filter_end' ); ?>
<?php //dynamic_sidebar( 'sidebar-1' ); ?>
                <a class="flex items-center py-2 px-8 bg-gray-900 text-gray-700 border-r-4 border-gray-700" href="#">
                    <span class="mx-4 w-40 font-normal text-white">NEW ARRIVALS</span>
                </a>

                <a class="flex items-center my-10 py-2 px-8 bg-gray-900 text-gray-700 border-r-4 border-gray-700" href="#">
                    
                    <span class="mx-4 w-40 font-normal text-white">FOR DRY HERBS</span>
                </a>

                <h1 class="px-8">Bongs</h1>
                <ul class="ml-12">
                    <li><a class="font-light text-gray-900" href="">Acrylic Bongs</a></li>
                    <li><a class="font-light text-gray-900" href="">Glass Bongs</a></li>
                    <li><a class="font-light text-gray-900" href="">Masks</a></li>
                    <li><a class="font-light text-gray-900" href="">Silicon Bongs</a></li>
                </ul>
               
                <h1 class="px-8 py-2 text-gray-900">Grinders</h1>
                <h1 class="px-8 py-2 text-gray-900">Hand Pipes</h1>
                <h1 class="px-8 py-2 text-gray-900">Jars</h1>
                <h1 class="px-8 py-2 text-gray-900">Rolling Trays</h1>
               
                <a class="flex items-center my-10 py-2 px-8 bg-gray-900 text-gray-700 border-r-4 border-gray-700" href="#">
                    
                    <span class="mx-4 w-40 text-white font-normal">FOR CONCENTRATES</span>
                </a>
                <ul class="ml-12">
                    <li><a class="font-light text-gray-900" href=""> Dab Rigs</a></li>
                    <li><a class="font-light text-gray-900" href="">Dab Trays</a></li>
                    <li><a class="font-light text-gray-900" href="">Dab Mats</a></li>
                    <li><a class="font-light text-gray-900" href="">Dab Accessories</a></li>
                </ul>

                <a class="flex items-center my-10 py-2 px-8 bg-gray-900 text-gray-700 border-r-4 border-gray-700" href="#">
                    
                    <span class="mx-4 w-40 font-normal text-white">VAPORIZERS</span>
                </a>
                <ul class="ml-12">
                    <li><a class="font-light text-gray-900" href="">Curer </a></li>
                    <li><a class="font-light text-gray-900" href="">Soc</a></li>
                    <li><a class="font-light text-gray-900" href="">Lookah</a></li>
                </ul>
            </nav>


                   
            <?php
                    /**
                                     * Hook: woocommerce_after_main_content.
                                     *
                                     * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
                                     */
                                  //  do_action( 'woocommerce_after_main_content' );
                                    
                    ?>
                    
                    

             
        <!--carousel end-->
        <div class="w-full px-6 py-12 bg-white border-t">
                <div class="flex justify-center items-center ">
                    <section  data-stellar-vertical-offset="0" data-stellar-background-ratio="0.5" class="sprh-hero sprh-layout-left w-2/3 h-full" style="background-image: url(&quot;https://themes.woocommerce.com/storefront/wp-content/uploads/sites/78/2015/02/f9c22c58.jpeg&quot;); background-color: rgb(44, 45, 51); color: rgb(238, 238, 238); background-position: 50% 50.2266px;   background-attachment: fixed;">
                        <div class="overlay" style="background-color: rgba(0, 0, 0, 0.25);">
                            <div class="col-full">

                                
                                <div class="sprh-featured-image">
                                    <a href="https://themes.woocommerce.com/storefront/product/scubapro-10-litre-232-bar-cylinder-single-valve/"></a>					</div>

                                <div class="sprh-hero-content-wrapper text-left">

                                    <h1 class="font-bold text-2xl py-4"  style="color: #ffffff;">
                                       						</h1>

                                    <div class="sprh-hero-content bg-transparent">
                                        <p> </p>
                                       
                                    </div>

                                </div>

                            </div>
                        </div>
                    </section>
                </div>
       
                
                </section>
                <?php
                if ( woocommerce_product_loop() ):
                    ?>
                    <div class=" max-w-4xl mx-auto pb-10 flex flex-row  px-3">
                            <?php
                                        /**
                                         * Hook: woocommerce_before_shop_loop.
                                         *
                                         * @hooked woocommerce_output_all_notices - 10
                                         * @hooked woocommerce_result_count - 20
                                         * @hooked woocommerce_catalog_ordering - 30
                                         */
                                        do_action( 'woocommerce_before_shop_loop' );

                                        
                            ?>

                           
                    </div>



                    <div class="container max-w-4xl mx-auto pb-10 ">
                        <div class="products overflow-hidden mb-8 justify-center items-center space-x-4 space-y-4 pt-8">
                        
                            <?php
                                        woocommerce_product_loop_start();
                                    
                                        if ( wc_get_loop_prop( 'total' ) ) {
                                            while ( have_posts() ) {
                                                the_post();
                                    
                                                /**
                                                 * Hook: woocommerce_shop_loop.
                                                 */
                                                do_action( 'woocommerce_shop_loop' );
                                    
                                                wc_get_template_part( 'content', 'product' );
                                            }
                                        }
                                    
                                        woocommerce_product_loop_end(); 
                            ?>
                        </div>
                    </div>

                    <div class="container max-w-4xl mx-auto pb-10 ">
                        <div class="products flex flex-cols overflow-hidden mb-8 justify-center items-center space-x-2 pt-8">
                                <?php
                                        /**
                                         * Hook: woocommerce_after_shop_loop.
                                         *
                                         * @hooked woocommerce_pagination - 10
                                         */
                                        //do_action( 'woocommerce_after_shop_loop' );
                                    else :
                                        /**
                                         * Hook: woocommerce_no_products_found.
                                         *
                                         * @hooked wc_no_products_found - 10
                                         */
                                        do_action( 'woocommerce_no_products_found' );
                                    
                                    endif;
                                    /**
                                     * Hook: woocommerce_after_main_content.
                                     *
                                     * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
                                     */
                                    do_action( 'woocommerce_after_main_content' );
                                    
                                ?>
                        </div>
                    </div>
                </div>
        </div>
            
		<?php
            //do_action( 'storefront_sidebar' );
        ?>

<?php

get_footer();