<?php
$image_last = get_sub_field('image_last');

$div_class = $image_last ? 'main-content reversed' : 'main-content';
?>

<section class="image-text">
<div class="<?php echo esc_attr($div_class); ?>">
<div class="main-img" style="background-image: url('<?php echo wp_kses_post(get_sub_field('image'))?>');">
            </div>
    <div class="container">
            <?php echo wp_kses_post(get_sub_field('main_content'))?>
        </div>
    </div>
</section>
