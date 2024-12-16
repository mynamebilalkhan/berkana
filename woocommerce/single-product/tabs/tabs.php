<?php

$heading =  __('О продукте', 'woocommerce');

?>
<section>
<div class="container">

<div class="product-content">



<div class="main-product-content"> 
    <div class="col">
    <?php if ($heading) : ?>
    <h2><?php echo esc_html($heading); ?></h2>
    <?php endif; ?>
    <?php the_content(); ?>

    </div>
    <div class="col">
    <img src="<?php echo wp_kses_post(get_field('product_description_image', 'option'))?>" alt="review image">
    </div>
</div>


<div class="review-section">
    <div class="col">
        <img src="<?php echo wp_kses_post(get_field('product_review_image', 'option'))?>" alt="review image">
    </div>
    <div class="col" id="reviews">
    <?php echo do_shortcode('[site_reviews_form assigned_posts="post_id" hide="terms" class="woo-reviews-form"]') ?>

    </div>
</div>
</div>


</div>
</section>