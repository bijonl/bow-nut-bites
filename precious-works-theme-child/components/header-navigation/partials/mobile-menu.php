
<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="Main Header Navigation">
    <ul class="nav-list-style justify-content-between">
        <?php 
        $left_items  = wp_get_nav_menu_items( 'header-menu-left' );
        $right_items = wp_get_nav_menu_items( 'header-menu-right' );
        
        $all_items = array_merge( (array) $left_items, (array) $right_items );

        foreach ( $all_items as $item ) {
            echo '<li class="menu-item"><a href="' . esc_url( $item->url ) . '">' .  $item->title . '</a></li>';
        }
        ?>
    </ul>
</nav>
