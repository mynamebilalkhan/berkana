<?php

//rename products loop variable product
add_filter('woocommerce_product_add_to_cart_text', 'rename_loop_select_options_text', 10, 2);

function rename_loop_select_options_text($text, $product)
{
    if (is_shop() || is_product_category() || is_product_tag() || is_home() || is_front_page()) { // Ensure it's in a loop
        if ($product->is_type('variable')) {
            return __('Подробнее', 'bk');
        }
    }

    return $text;
}

//rename single product add to cart
add_filter('woocommerce_product_single_add_to_cart_text', 'rename_single_add_to_cart_button');

function rename_single_add_to_cart_button($text)
{
    return __('В корзину', 'bk');
}

// Add "Add to Cart" button after product summary on the shop page
add_action('woocommerce_before_shop_loop_item_title', 'custom_loop_add_to_cart_button', 10);
function custom_loop_add_to_cart_button()
{
    global $product;

    // For variable products, display the default variation's "Add to Cart" button
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
            // Display "Add to Cart" button for default variation
            echo '<a href="' . esc_url($variation_product->add_to_cart_url()) . '" class="single_add_to_cart_button button add_to_cart_button ajax_add_to_cart" data-product_id="' . esc_attr($variation_product->get_id()) . '" data-product_sku="' . esc_attr($variation_product->get_sku()) . '" aria-label="' . esc_attr($variation_product->add_to_cart_description()) . '">' . esc_html__('Купить', 'bk') . '</a>';
        }
    } else {
        // For simple products, display the default "Add to Cart" button
        woocommerce_template_loop_add_to_cart();
    }
}



/**
 * Customises the order of the fields used in the Site Reviews review form.
 * Paste this in your active theme's functions.php file.
 * @param array $order
 * @return array
 */
add_filter('site-reviews/review-form/order', function ($order) {
    // The $order array contains the field keys returned below.
    // Simply change the order of the field keys to the desired field order.
    return [
        'rating',
        'name',
        'email',
        'title',
        'content',
        'number',
    ];
});
