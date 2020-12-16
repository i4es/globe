<?php

//======================================================================
// SHOP PAGE
//======================================================================

// Disable woo sidebar
remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
// Disable woo breadcrumbs
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
// Remove woo content wrap
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );
// Add custom content wrap
add_action( 'woocommerce_before_main_content', 'gc_theme_wrapper_start', 10 );
add_action( 'woocommerce_after_main_content', 'gc_theme_wrapper_end', 10 );

function gc_theme_wrapper_start() {
    echo '<section class="gc-snl-shop"><div class="grid-container">';
}
function gc_theme_wrapper_endt() {
    echo '</section></div>';
}
// Remove related product
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
// Remove upsell
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
// Disable woo tabs
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );





