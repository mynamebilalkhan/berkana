<?php

/**
 * Footer file
 *
 * @package SetupTheme
 */

?>
<footer id="page-footer">
    <div class="container">
        <div class='footer-widgets'>
            <div class='footer-single-widget'>
                <a href="<?php echo esc_url(home_url('/')) ?>" rel="home">
                    <img width="170" src="<?php echo esc_url(wp_get_attachment_url(get_theme_mod('custom_logo'))); ?>" alt="berkana">
                </a>
                <?php st_dynamic_sidebar('footer-1'); ?>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>
