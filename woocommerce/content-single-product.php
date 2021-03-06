<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>

<article id="product-<?php the_ID(); ?>" <?php wc_product_class( 'gc-shop-single' ); ?>>
    <div class="grid-x">
        <?php echo wc_get_product_category_list( get_the_ID(), ', ', '<div class="gc-shop-single__cat">' , '</div>' )
        ; ?>
    </div>
   <div class="grid-x grid-margin-x">
       <div class="cell small-12 medium-6 large-8">
           <?php
           /**
            * Hook: woocommerce_before_single_product_summary.
            *
            * @hooked woocommerce_show_product_sale_flash - 10
            * @hooked woocommerce_show_product_images - 20
            */
           do_action( 'woocommerce_before_single_product_summary' );
           ?>
       </div>
       <!-- /.cell large-8  -->
       <div class="cell small-12 medium-6 large-4">
           <div class="gc-shop-single__info">
               <h1 class="gc-shop-single__title"><?php the_title(); ?></h1>

               <?php woocommerce_template_single_price(); ?>

                <div class="gc-shop-single__content">
                     <?php the_content(); ?>

                </div>

               <?php woocommerce_template_single_add_to_cart(); ?>

<!--               --><?php
//               /**
//                * Hook: woocommerce_single_product_summary.
//                *
//                * @hooked woocommerce_template_single_title - 5
//                * @hooked woocommerce_template_single_rating - 10
//                * @hooked woocommerce_template_single_price - 10
//                * @hooked woocommerce_template_single_excerpt - 20
//                * @hooked woocommerce_template_single_add_to_cart - 30
//                * @hooked woocommerce_template_single_meta - 40
//                * @hooked woocommerce_template_single_sharing - 50
//                * @hooked WC_Structured_Data::generate_product_data() - 60
//                */
//               do_action( 'woocommerce_single_product_summary' );
//               ?>
           </div>
       </div>
   </div>
    <!-- /.cell large-4  -->
	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action( 'woocommerce_after_single_product_summary' );
	?>
</article>

<?php do_action( 'woocommerce_after_single_product' ); ?>
