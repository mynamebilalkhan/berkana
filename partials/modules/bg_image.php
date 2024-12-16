<section class="bg-image" style="background-image: url('<?php echo wp_kses_post(get_sub_field('bg_image'))?>');">
    <div class="container">
        <div class="main-content">
            <?php echo wp_kses_post(get_sub_field('content'))?>
        </div>
    </div>
</section>
