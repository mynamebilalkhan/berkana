<div class="products-loop woocommerce">
<?php
if (have_rows('main_products')) :
    while (have_rows('main_products')) :
        the_row();
        // Get the image URL from the 'image' field
        $image = get_sub_field('image');
        $image_url = $image ? $image : '';

        ?>

            <!-- Products column -->
            <div class="products-main-col">
                <?php
                if (have_rows('select_products')) :
                    while (have_rows('select_products')) :
                        the_row();
                        // Get the product ID from the post object within the repeater
                        $product = get_sub_field('product_id');
                        if ($product) :
                            $product_id = $product; // Get product ID
                            // Set up the global post data for the product
                            $GLOBALS['post'] = get_post($product_id);
                            setup_postdata($GLOBALS['post']);

                            // Display default WooCommerce content-product template for this product ID
                            wc_get_template_part('content', 'product');

                            // Reset global post data after each product
                            wp_reset_postdata();
                        endif;
                    endwhile;
                endif;
                ?>
                    <?php if ($image_url) : ?>
                <li class="prodcut product_image" style="background-image: url('<?php echo wp_kses_post($image_url)?>');">
                </li>
                    <?php endif; ?>
            </div>
    <?php endwhile;
endif; ?>

                <div class="cta-section">
                    <?php $link = get_sub_field('cta_url'); ?>
                            <?php if (!empty($link)) : ?>
                                <a class="btn btn-green"  href="<?php echo esc_url($link['url']); ?>" target="<?php echo esc_attr($link['target'] ? $link['target'] : '_self'); ?>">
                                    <?php echo esc_html($link['title']); ?>
                                </a>
                            <?php endif; ?>
                </div>
</div>
