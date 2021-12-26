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
                 .product{
                    position: relative;
                    display: flex;
                    flex-direction: column;
                    background: white;
                    padding-bottom: 2rem;
                    text-align: center;
                    overflow: hidden;
                 }   
                 @media (max-width: 767px) {
                    .product{
                        display: block;
                        width: auto;
                    }
                 .woocommerce-LoopProduct-link {
                        justify-content: center;
                        justify-items: start;
                        display: flex;
                        flex-direction: column;
                        width: 20rem;
                    }
                    .woocommerce-loop-product__title {
                        display: none;
                    }
                 }

                 .products li{
                    list-style: none;
                 }

                 .product li a{
                    margin-left: 30rem;
                 }
                 .woocommerce-loop-product__title{
                    font-size: 1.1rem;
                    font-weight: 500;
                    margin: 0 0 .5rem;
                    padding-top: 10rem;
                    height: 35px;
                    border-bottom: none;
                    text-transform: uppercase;
                    list-style: none;
                 }
                 .woocommerce-LoopProduct-link{
                    justify-content: center;
                    justify-items: center;
                    display: flex;
                 }

                 .price{
                    display: none;
                    color: black;
                 }

                 .price:hover{
                    color: #eb4034;
                 }
                  .button{
                    display: none;
                 }

                 .onsale {
					display:none;
                    top: 0;
                    left: 0;
                    right: auto;
                    margin: 0;
                    border: 1px solid green;
                    border-radius: 15px;
                    background-color: green;
                    color: white;
                }

                .img{
                    width: 500px;
                    height: 500px;
                    object-fit: cover;
                }
                .carousel {
                    position: relative;
                    box-shadow: 0px 1px 6px rgba(0, 0, 0, 0.64);
                    
                }

                .carousel-inner {
                    position: relative;
                    overflow: hidden;
                    width: 100%;
                }

                .carousel-open:checked + .carousel-item {
                    position: static;
                    opacity: 100;
                }

                .carousel-item {
                    position: absolute;
                    opacity: 0;
                    -webkit-transition: opacity 0.6s ease-out;
                    transition: opacity 0.6s ease-out;
                }

                .carousel-item img {
                    display: block;
                    height: auto;
                    max-width: 100%;
                }

                .carousel-control {
                    background: rgba(0, 0, 0, 0.28);
                    border-radius: 50%;
                    color: #fff;
                    cursor: pointer;
                    display: none;
                    font-size: 40px;
                    height: 40px;
                    line-height: 35px;
                    position: absolute;
                    top: 50%;
                    -webkit-transform: translate(0, -50%);
                    cursor: pointer;
                    -ms-transform: translate(0, -50%);
                    transform: translate(0, -50%);
                    text-align: center;
                    width: 40px;
                    z-index: 10;
                }

                .carousel-control.prev {
                    left: 2%;
                }

                .carousel-control.next {
                    right: 2%;
                }

                .carousel-control:hover {
                    background: rgba(0, 0, 0, 0.8);
                    color: #aaaaaa;
                }

                #carousel-1:checked ~ .control-1,
                #carousel-2:checked ~ .control-2,
                #carousel-3:checked ~ .control-3 {
                    display: block;
                }

                .carousel-indicators {
                    list-style: none;
                    margin: 0;
                    padding: 0;
                    position: absolute;
                    bottom: 2%;
                    left: 0;
                    right: 0;
                    text-align: center;
                    z-index: 10;
                }

                .carousel-indicators li {
                    display: inline-block;
                    margin: 0 5px;
                }

                .carousel-bullet {
                    color: #fff;
                    cursor: pointer;
                    display: block;
                    font-size: 35px;
                }

                .carousel-bullet:hover {
                    color: #aaaaaa;
                }

                #carousel-1:checked ~ .control-1 ~ .carousel-indicators li:nth-child(1) .carousel-bullet,
                #carousel-2:checked ~ .control-2 ~ .carousel-indicators li:nth-child(2) .carousel-bullet,
                #carousel-3:checked ~ .control-3 ~ .carousel-indicators li:nth-child(3) .carousel-bullet {
                    color: #428bca;
                }


                    #slideshow { 
                        height: 680px; 
                    }

                    #slideshow > div { 
                        position: absolute; 
                        top: 10px; 
                        left: 10px; 
                        right: 10px; 
                        bottom: 10px; 
                    }

                    .add-to-wishlist-before_image .yith-wcwl-add-to-wishlist {
                        position: absolute;
                        z-index: 0;
                        margin: 0;
                        top: 50px;
                        left: 50px;
                    }
            </style>


        <div class="relative  pt-0">
            <div id="slideshow" class="sliderAx relative  w-screen h-4/5 ">
                    <div class="absolute w-full bg-cover bg-center flex flex-col justify-center items-center pt-40 h-auto text-white py-24 px-10 object-fill" style="background-image: url(https://jiju.co/wp-content/uploads/2021/01/slider-4.jpg)">
                        <h1 class="font-bold text-4xl flex flex-row text-gray-200 uppercase py-10">HERITAGE STYLE x FUTURE TECH</h1>
                        <p class="text-3xl font-bold py-3">Hello world</p>
                        <p class="text-2xl mb-10 leading-none">Text</p>
                        <a href="<?php echo site_url(); ?>/shop" target="_blank" class="bg-red-800 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Explore</a>
                    </div> <!-- container -->
                    <br>
               
                    <div class=" absolute w-full bg-cover bg-center flex flex-col justify-center items-center pt-40 h-auto text-white py-24 px-10 object-fill" style=" background-image: url(https://jiju.co/wp-content/uploads/2021/01/slider-5.jpg)"> 
                        <p class="font-bold text-sm uppercase">Welcome</p>
                        <p class="text-3xl font-bold">Hello world</p>
                        <p class="text-2xl mb-10 leading-none">Text</p>
                        <a href="<?php echo site_url(); ?>/shop" target="_blank" class="bg-red-800 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Explore</a>
                    </div> <!-- container -->
                    <br>
              
            </div>
        </div>


<script>
        $("#slideshow > div:gt(0)").hide();

        setInterval(function() { 
        $('#slideshow > div:first')
        .fadeOut(1000)
        .next()
        .fadeIn(1000)
        .end()
        .appendTo('#slideshow');
        }, 3000);
</script>
        <div class="front-product flex lg:block w-full lg:w-1/3 container mx-auto">
            
            <div class="text-gray-900">
                    <?php
                        $args = array(
                            'post_type' => 'product',
                            'post_status' => 'publish',
                            'posts_per_page' => 1
                            );
                        $loop = new WP_Query( $args );
                        if ( $loop->have_posts() ) {
                            while ( $loop->have_posts() ) : $loop->the_post();
                                do_action( 'woocommerce_shop_loop' );
                                wc_get_template_part( 'content', 'product' );
                            endwhile;
                        } else {
                            echo __( 'No products found' );
                        }
                        wp_reset_postdata();
                    ?>
                    
            </div>   
        </div>
        <!--video section-->
        <div class="bg-black">
            <div class="container mx-auto">
                <div class="flex py-16 px-12 justify-center items-center ">
                  
                    <video autoplay="autoplay" loop="loop" muted=""  width="700" height="360"><source src="https://jiju.co/wp-content/uploads/2021/05/Q7-Kookah-1.mp4" type="video/mp4"><source src="movie.ogg" type="video/ogg">Your browser does not support the video tag.</video>
                </div>
            </div>    
        </div>
        <!--end-->
        <div class="heading flex justify-center items-center pt-20">
            <h3 class=" text-2xl text-black font-semibold"> Top Categories</h3>
        </div>
        <div class=" flex justify-center items-center">
                       

            <div class="flex flex-col lg:grid lg:grid-cols-2  p-8">
                <div class="col-span-1 py-2">
                    <div class="relative w-full h-auto">
                        <a href="https://staging.jiju.co/product-category/bongs/" target="_blank">     
                            <img  src="https://jiju.co/wp-content/uploads/2021/05/8-1.jpg" alt="image" class="rounded-2xl relative">           
                            <div class="absolute inset-0 text-center  text-xl p-4 w-full text-white font-bold"><p>Vaporizers</p></div>
                        </a>
                    </div>
                </div>
                <div class="col-span-1 py-2">
                    <div class="relative w-full h-full">
                        <a href="#" target="_blank">
                            <img  src="https://jiju.co/wp-content/uploads/2021/05/8-1.jpg" alt="image" class="rounded-2xl relative">                     
                            <div class="absolute inset-0 text-center text-xl p-4 w-full text-white font-bold"><p>for concentrates</p></div>
                        </a>
                    </div>
                </div>
                <div class="col-span-1 py-2">
                    <div class="relative w-full h-full">
                        <a href="#" target="_blank">
                            <img src="https://jiju.co/wp-content/uploads/2021/05/tokes-banner.jpg" alt="" class="rounded-2xl relative">                     
                            <div class="absolute inset-0 text-center text-xl p-4 w-full text-white font-bold"><p>Hookah</p></div>
                        </a>
                    </div>
                </div>
                <div class="col-span-1 py-2">
                    <div class="relative w-full h-full">
                        <a href="#" target="_blank">
                            <img src="https://jiju.co/wp-content/uploads/2021/05/tokes-banner.jpg" alt="" class="rounded-2xl relative">                     
                            <div class="absolute inset-0 text-center text-xl p-4 w-full text-white font-bold"><p>Accessories</p></div>
                        </a>
                    </div>
                </div>
            </div>


            
  
<?php
get_footer();
?>

   
