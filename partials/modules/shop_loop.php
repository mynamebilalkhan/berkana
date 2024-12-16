<div class="woo-custom-loop ">    
<?php
if (have_rows('three_col_top')) :
    while (have_rows('three_col_top')) :
        the_row();
        ?>
            <!-- Products column -->
            <div class="products-3-col first-grid">
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
            </div>
    <?php endwhile;
endif; ?>

<?php
if (have_rows('two_col')) :
    while (have_rows('two_col')) :
        the_row();
        // Get the image URL from the 'image' field
        $image = get_sub_field('image');
        $image_url = $image ? $image : '';

        ?>

            <!-- Products column -->
            <div class="products-2-col">
            <?php if ($image_url) : ?>
                <li class="prodcut product_image" style="background-image: url('<?php echo wp_kses_post($image_url)?>');">
                </li>
            <?php endif; ?>
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
            </div>
    <?php endwhile;
endif; ?>


<?php
if (have_rows('three_col')) :
    while (have_rows('three_col')) :
        the_row();
        ?>
            <!-- Products column -->
            <div class="products-3-col">
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
            </div>
    <?php endwhile;
endif; ?>



<div class="shop-big-image">
    <div class="col">
    <?php
    if (have_rows('products_big_image')) :
        while (have_rows('products_big_image')) :
            the_row();
            ?>
            <!-- Products column -->
            <div class="products-1-col">
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
            </div>
        <?php endwhile;
    endif; ?>
    </div>
    <div class="col">
    <?php
    if (have_rows('products_big_image')) :
        while (have_rows('products_big_image')) :
            the_row();
            // Get the image URL from the 'image' field
            $image = get_sub_field('image');
            $image_url = $image ? $image : '';

            ?>
            <?php if ($image_url) : ?>
                <li class="prodcut product_image" style="background-image: url('<?php echo wp_kses_post($image_url)?>');">
                </li>
            <?php endif; ?>

        <?php endwhile;
    endif; ?>
    </div>
</div>
