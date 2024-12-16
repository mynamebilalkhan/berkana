<?php

add_action(
    'wp_logout',
    function () {
        wp_redirect(home_url());
        exit();
    }
);

add_filter(
    'login_form_defaults',
    function ($defaults) {
        $defaults['remember'] = false;

        return $defaults;
    }
);

add_filter(
    'login_form_bottom',
    function ($login_form_bottom) {
        ob_start();
        echo $login_form_bottom;
        ?>
        <p class="login-forget"><a href="<?php echo wp_lostpassword_url(); ?>">Passwort vergessen</a></p>
        <?php
        wp_nonce_field('vn-login-nonce', 'nonce');

        return ob_get_clean();
    }
);
