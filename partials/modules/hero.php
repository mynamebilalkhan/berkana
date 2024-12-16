<section class="hero" style="background-image: url('<?php echo wp_kses_post(get_sub_field('bg_image'))?>');">
    <div class="container">
        <div class="hero-content">
            <?php echo wp_kses_post(get_sub_field('heading'))?>
            
            <div class="hero-cta">
            <?php $link = get_sub_field('cta_url_and_text'); ?>
                            <?php if (!empty($link)) : ?>
                                <a class="cta"  href="<?php echo esc_url($link['url']); ?>" target="<?php echo esc_attr($link['target'] ? $link['target'] : '_self'); ?>">
                                  
                                    <div class="cta-heading">
                                        <div class="col">
                                        <span>
                                    <?php echo esc_html($link['title']); ?>
                                    </span>
                                        </div>
                                        <div class="icon">
                                        <svg width="45" height="47" viewBox="0 0 45 47" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect x="1.03183" y="1.03183" width="42.9363" height="44.9363" rx="21.4682" fill="white"/>
<rect x="1.03183" y="1.03183" width="42.9363" height="44.9363" rx="21.4682" stroke="white" stroke-width="2.06366"/>
<g clip-path="url(#clip0_477_3523)">
<path d="M14.3739 31.3642L29.2157 16.5225M29.2157 16.5225L21.4725 16.5228M29.2157 16.5225L29.2153 24.2657" stroke="#285C5A" stroke-width="2"/>
</g>
<defs>
<clipPath id="clip0_477_3523">
<rect width="12.9185" height="22.604" fill="white" transform="matrix(0.707107 0.707107 0.707107 -0.707107 9.93054 26.9209)"/>
</clipPath>
</defs>
</svg>

                                        </div>
                                    </div>
                                    <img src="<?php echo wp_kses_post(get_sub_field('cta_img'))?>" alt="<?php echo esc_html($link['title']); ?>">
                                </a>
                            <?php endif; ?>
            </div>
        </div>
    </div>
</section>
