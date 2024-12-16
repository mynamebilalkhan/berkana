<?php
/**
 * Frontpage Template
 *
 * @package SetupTheme
 */

?>
<?php
if (have_posts()) :
    while (have_posts()) :
        the_post();
        if (st_have_rows('flexible_content')) :
            while (st_have_rows('flexible_content')) :
                the_row();
                get_template_part('functions/modules');
            endwhile;
        else :
            ?>
            <section class="page">
                <div class="container">
                    <div class="page-title">
                        <h1><?php esc_html(the_title()); ?></h1>
                    </div>
                    <div class="page-content">
                        <?php the_content(); ?>
                    </div>
                </div>
            </section>
            <?php
        endif;
    endwhile;
    wp_reset_query();
endif;
?>
