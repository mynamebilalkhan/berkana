<header class="transparent">
    <div class="header-container">
        <div class="desktop">
            <div class="header-col">
                <div class="logo">
                    <a href="<?php echo esc_url(home_url('/')) ?>" rel="home">
                        <img width="170"
                            src="<?php echo esc_url(wp_get_attachment_url(get_theme_mod('custom_logo'))); ?>"
                            alt="berkana">
                    </a>
                </div>
            </div>
        </div>
        <?php if (is_active_sidebar('mobile-nav-button')) : ?>
        <div class="mobile-button">
            <?php st_dynamic_sidebar('mobile-nav-button') ?>
        </div>
        <?php endif ?>
        <button class="mobile-nav-button" aria-label="Clock to open"><i></i><i></i><i></i></button>
        <div class="right-content__wrapper">
            <div class="right-content">
                <?php st_nav_menu('main-navigation') ?>
                <div class="widgets">
                    <?php if (is_active_sidebar('mobile-nav-footer')) : ?>
                    <div class="mobile-nav-footer">
                        <?php st_dynamic_sidebar('mobile-nav-footer') ?>
                    </div>
                    <?php endif ?>
                </div>
            </div>
        </div>
        <div class="desktop">
            <div class="header-col">
                <div class="col-wrapper">
                    <div class="icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z"
                                stroke="#304443" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M21 20.9999L16.65 16.6499" stroke="#304443" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div class="icon">
                    <div class="icon">
                        <?php echo do_shortcode('[afc_cart_icon id="my-id" class="css-classes" icon="icon_6" display_items_count="true" items_count_position="top-right"]'); ?>
                    </div>
                    </div>
                    <div class="icon">
                    <a href="<?php echo esc_url(wc_get_account_endpoint_url('dashboard')); ?>" aria-label="My Account">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12.16 10.87C12.06 10.86 11.94 10.86 11.83 10.87C9.45 10.79 7.56 8.84 7.56 6.44C7.56 3.99 9.54 2 12 2C14.45 2 16.44 3.99 16.44 6.44C16.43 8.84 14.54 10.79 12.16 10.87Z"
                                stroke="#304443" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M7.15997 14.56C4.73997 16.18 4.73997 18.82 7.15997 20.43C9.90997 22.27 14.42 22.27 17.17 20.43C19.59 18.81 19.59 16.17 17.17 14.56C14.43 12.73 9.91997 12.73 7.15997 14.56Z"
                                stroke="#304443" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile">
        <div class="logo">
                    <a href="<?php echo esc_url(home_url('/')) ?>" rel="home">
                        <img width="170"
                            src="<?php echo esc_url(get_theme_mod('mobile_logo')); ?>"
                            alt="berkana">
                    </a>
                </div>
        </div>
        </div>

        <div class="mobile">
            <div class="header-col">
                <div class="col-wrapper">
                    <div class="icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z"
                                stroke="#304443" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M21 20.9999L16.65 16.6499" stroke="#304443" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div class="icon">
                        <?php echo do_shortcode('[afc_cart_icon id="my-id" class="css-classes" icon="icon_6" display_items_count="true" items_count_position="top-right"]'); ?>
                    </div>
                    <div class="icon">
                    <a href="<?php echo esc_url(wc_get_account_endpoint_url('dashboard')); ?>" aria-label="My Account">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12.16 10.87C12.06 10.86 11.94 10.86 11.83 10.87C9.45 10.79 7.56 8.84 7.56 6.44C7.56 3.99 9.54 2 12 2C14.45 2 16.44 3.99 16.44 6.44C16.43 8.84 14.54 10.79 12.16 10.87Z"
                                stroke="#304443" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M7.15997 14.56C4.73997 16.18 4.73997 18.82 7.15997 20.43C9.90997 22.27 14.42 22.27 17.17 20.43C19.59 18.81 19.59 16.17 17.17 14.56C14.43 12.73 9.91997 12.73 7.15997 14.56Z"
                                stroke="#304443" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
