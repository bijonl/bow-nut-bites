 <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="Main Header Navigation">
    <?php 
    wp_nav_menu( array(
        'menu' => 'header-menu-right', 
        'menu_class' => 'nav-list-style justify-content-around',
        'container' => false,
        'fallback_cb' => false, // avoid dumping all pages without a menu
    ) );
    ?>
</nav>