<nav id="footer-navigation" class="footer-navigation" role="navigation" aria-label="Footer Navigation">
    <?php 
    wp_nav_menu( array(
        'theme_location' => 'Footer Menu', 
        'menu_class' => 'nav-list-style column-list',
        'menu' => '2', 
        'container' => false,
        'fallback_cb'     => false, // avoid dumping all pages without a menu
    ) );
    ?>
</nav>