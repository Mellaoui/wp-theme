<?php

get_header();
?>
<style>



.product {
  display: block;
}

.woocommerce-Tabs-panel h2{
  padding-top: 2rem;
  padding-bottom: 2rem;
  font-size:20px;
  font-weight: bold;
}
	
.single-product div.product {
    position: relative;
    overflow: hidden;
}

@media (min-width: 768px){
  .woocommerce-product-gallery {
      width: 41.1764705882%;
      float: left;
      margin-right: 5.8823529412%;
      margin-bottom: 3.706325903em;
  }
}

	
@media (max-width: 767px) {
  .storefront-product-pagination{
       display: none;
   }
	}
figure{
  width: auto;
}

.woocommerce-tabs {
    clear: both;
    padding-top: 2.617924em;
    padding-bottom: 2.617924em;
    overflow: hidden;
    padding: 1em 0;
}


ul.tabs {
    width: 29.4117647059%;
    float: left;
    margin-right: 5.8823529412%;
    list-style: none;
    margin-left: 0;
    text-align: left;
    border-top: 1px solid rgba(0,0,0,.05);
}

.woocommerce-tabs .panel {
    width: 64.7058823529%;
    float: right;
    margin-right: 0;
    margin-top: 0;
}

.single-product div.product .woocommerce-product-gallery {
    position: relative;
}

.single-product div.product .woocommerce-product-gallery .woocommerce-product-gallery__trigger {
    margin-left: 20rem;
}

.product_title{
  font-size: 2em;
  color: #121212;
  font-style: normal;
  text-rendering: optimizeLegibility;
}

.product_meta{
  display: block;
}
.product_meta > span{
    display: block;
    margin-bottom: 10px;
    font-size: 12px;
    line-height: 1;
}

.price{
  color: red;
  font-size: 1.41575em;
  margin: 1.41575em 0;
  padding-bottom: 2rem;
}

.price .amount{
  color: #121212;
}
.woocommerce-product-details__short-description{
  width: 80%;
}

div .quantity{
  display: inline-flex;
  margin-right: 5px;
  position: relative;
  vertical-align: middle;
  background: white;
}

.button.alt{
  background-color:red;
  width: 10rem;
}

.single_add_to_cart_button{
  padding: 0 50px;
  text-transform: uppercase;
    border-radius: 0;
    height: 48px;
    line-height: 48px;  
    font-size: 14px;
    font-weight: 600;
    vertical-align: middle;
}

.input-text{
  width: 10rem;
  border: black 1px solid;
}

.woocommerce-product-details__short-description{
  font-size: 16px;
  max-width: 460px;
  margin-bottom: 25px;
}

.cart {
  display: flex;
  flex-direction: row;
  margin-top: 3rem;
  justify-content: flex-start;
  justify-items: center;
  margin-right: 0rem;
}

.woocommerce-message {
    border-color: #8BAF5B !important; 
    background-color: #E0F1B5 !important; 
    color: #4F5F39 !important; 
}

.related{
  padding-top: 4rem;
}
.related  ul{
  display: flex;
  flex-direction: row;
  margin-left: 1rem;
}
.related ul li{
  margin: 1rem;
}

@media (min-width: 768px){
    .storefront-product-pagination {
      display: block;
  }
}


.storefront-product-pagination a[rel=next] {
    right: -455px;
    -webkit-transition: right .3s ease-in;
    transition: right .3s ease-in;
    padding-right: 1em;
}
@media (min-width: 768px){
    .storefront-product-pagination a[rel=prev] {
      left: -455px;
      -webkit-transition: left .3s ease-out;
      transition: left .3s ease-out;
      -webkit-box-orient: horizontal;
      -webkit-box-direction: reverse;
      -webkit-flex-direction: row-reverse;
      flex-direction: row-reverse;
      padding-left: 1em;
}
}

.storefront-product-pagination a {
    color: #60646c;
    background-color: #ffffff;
}

@media (min-width: 768px){
    .storefront-product-pagination a {
      position: fixed;
      top: 50%;
      width: 500px;
      box-shadow: 0 0 5px rgb(0 0 0 / 20%);
      z-index: 1499;
      display: -webkit-box;
      display: -webkit-flex;
      display: flex;
      -webkit-box-align: center;
      -webkit-align-items: center;
      align-items: center;
  }
}

@media (min-width: 768px) {
  .summary{
    float: right;
    width: 52.9411764706%;
  }
}

.storefront-product-pagination a[rel=next]:hover {
    right: 30px;
    -webkit-transition: right .3s ease-in;
    transition: right .3s ease-in;
    padding-right: 1em;
}

.storefront-product-pagination a[rel=prev]:hover {
      left: 30px;
      -webkit-transition: left .3s ease-out;
      transition: left .3s ease-out;
      -webkit-box-orient: horizontal;
      -webkit-box-direction: reverse;
      -webkit-flex-direction: row-reverse;
      flex-direction: row-reverse;
      
}

.col-full{
  display: flex;
  flex-direction: column;
}

.flex-control-nav{
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
}
.product:hover a.button{
    display: inline-block;
}

a.button {
    text-align: center;
    margin-top: 0.5rem;
    background-color: white;
    border-radius: 2rem;
    display:none;
    color: black;
}
	
#secondary{
  display: none;
}
</style>
<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>

  <div class="w-full px-6 py-12 bg-white border-t">
      <?php while ( have_posts() ) : ?>
        <?php the_post(); ?>

        <?php wc_get_template_part( 'content', 'single-product' ); ?>

      <?php endwhile; // end of the loop. ?>
  </div>

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

	<?php
		/**
		 * woocommerce_sidebar hook.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		//do_action( 'woocommerce_sidebar' );
	?>

<?php
get_footer();
?>