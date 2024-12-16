<?php

// remove REST related stuff
remove_action('template_redirect', 'rest_output_link_header', 11, 0);
remove_action('wp_head', 'rest_output_link_wp_head', 10);

// remove generator tag
remove_action('wp_head', 'wp_generator');


function disable_specific_woocommerce_styles($styles)
{
    // Replace 'woocommerce-layout' with the handle of the styles you want to disable
    // unset($styles['woocommerce-layout']);
    unset($styles['woocommerce-general']);
    return $styles;
}
add_filter('woocommerce_enqueue_styles', 'disable_specific_woocommerce_styles');


function dequeue_variation_swatches_styles()
{
    // Dequeue the WooCommerce Variation Swatches frontend CSS
    wp_dequeue_style('woo-variation-swatches');
}
add_action('wp_enqueue_scripts', 'dequeue_variation_swatches_styles', 20);


function remove_product_price()
{
    remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);
    remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
}
add_action('woocommerce_before_single_product', 'remove_product_price');


function mytheme_customizer_settings($wp_customize)
{
    // Add setting for mobile logo
    $wp_customize->add_setting('mobile_logo');

    // Add control to upload mobile logo
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'mobile_logo', array(
        'label' => __('Mobile Logo', 'your-text-domain'),
        'section' => 'title_tagline', // You can place it in an existing section
        'settings' => 'mobile_logo',
    )));
}
add_action('customize_register', 'mytheme_customizer_settings');

// Remove the "Showing X results" text from WooCommerce
add_filter('woocommerce_result_count', '__return_empty_string');

// Remove the sorting dropdown from WooCommerce shop archive
remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);

add_filter('woocommerce_sale_flash', '__return_false');





// Add product price after the product title in the loop
add_action('woocommerce_shop_loop_item_title', 'custom_loop_product_price', 10);
function custom_loop_product_price()
{
    global $product;

    // For variable products, display the default variation price
    if ($product->is_type('variable')) {
        $default_attributes = $product->get_default_attributes();
        $available_variations = $product->get_available_variations();
        $matching_variation = null;

        // Find the default variation
        foreach ($available_variations as $variation) {
            $match = true;
            foreach ($default_attributes as $attribute => $value) {
                if ($variation['attributes']['attribute_' . $attribute] !== $value) {
                    $match = false;
                    break;
                }
            }
            if ($match) {
                $matching_variation = $variation;
                break;
            }
        }

        if ($matching_variation) {
            $variation_product = new WC_Product_Variation($matching_variation['variation_id']);
            echo '<p class="price">' . $variation_product->get_price_html() . '</p>';
        }
    } else {
        // For simple products, show the default price
        echo '<p class="price">' . $product->get_price_html() . '</p>';
    }
}

add_filter('woocommerce_output_related_products_args', 'bk_related_products_args', 20);
function bk_related_products_args($args)
{
    $args['posts_per_page'] = 3; // 4 related products
    $args['columns'] = 3; // arranged in 3 columns
    return $args;
}
