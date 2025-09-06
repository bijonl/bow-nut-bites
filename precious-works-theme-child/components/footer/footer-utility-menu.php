<nav id="footer-navigation" class="footer-navigation" role="navigation" aria-label="Footer Navigation">
    
    <?php 
    wp_nav_menu( array(
        'theme_location' => 'footer-utility', 
        'menu_class' => 'nav-list-style justify-content-between',
        'container' => false,
        'fallback_cb'     => false, // avoid dumping all pages without a menu
    ) );
    ?>
</nav>