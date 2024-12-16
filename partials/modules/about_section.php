<?php
$image_left = get_sub_field('image_left');

$div_class = $image_left ? 'main-content reversed' : 'main-content';
?>

<section class="about">
    <div class="container">
        <div class="<?php echo esc_attr($div_class); ?>">
            <div class="col">
            <?php echo wp_kses_post(get_sub_field('main_content'))?>
            </div>
            <div class="col img">
                <img src="<?php echo wp_kses_post(get_sub_field('image'))?>" alt="about image">
            </div>
        </div>
    </div>
</section>
