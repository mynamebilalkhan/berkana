<?php
/**
 * Post Template
 *
 * @package SetupTheme
 */

?>
<?php
if (have_posts()) :
    while (have_posts()) :
        the_post();
        ?>
        <main class="single-post-content page-content">
            <?php st_load_partial('page', 'content'); ?>
        </main>
    <?php endwhile;
    wp_reset_postdata();
endif;
?>
