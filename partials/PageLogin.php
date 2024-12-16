<?php /* Template Name: Page login */ ?>
<?php
get_header();
?>
<section class="page-login" style="background-image: url('<?php echo wp_kses_post(get_field('registration_image', 'option'))?>');">
    <div class="container">
    <?php the_content(); ?>
    </div>
</section>
<?php
get_footer();
?>
