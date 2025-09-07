
<div class="footer-main-menu-col col-3">
    <h5 class="text-center">About Us</h5>
    <nav id="footer-navigation" class="footer-navigation" role="navigation" aria-label="Footer Navigation">
        <?php 

        wp_nav_menu( array(
            'theme_location' => 'footer-menu', 
            'menu_class' => 'nav-list-style column-list',
            'container' => false,
            'fallback_cb'     => false, // avoid dumping all pages without a menu
        ) );
        ?>

    </nav>
</div>

<div class="footer-main-menu-col col-3">
    <h5 class="text-center">Get In Touch</h5>
    <nav id="footer-navigation" class="footer-navigation" role="navigation" aria-label="Footer Navigation">
        <?php 

        wp_nav_menu( array(
            'theme_location' => 'footer-menu-two', 
            'menu_class' => 'nav-list-style column-list',
            'container' => false,
            'fallback_cb'     => false, // avoid dumping all pages without a menu
        ) );
        ?>
        <?php if (have_rows('social_media_footer', 'options')) { ?>
                <nav class="footer-social-col col d-none" role="navigation" aria-label="Social Media Links">
                    <?php include locate_template('components/footer/social-icons.php'); ?>
                </nav>
        <?php }; ?>
    </nav>
</div>
