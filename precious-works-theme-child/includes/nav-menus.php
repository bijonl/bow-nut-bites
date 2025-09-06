<?php function pw_register_nav_menus() {
    register_nav_menus( array(
        'primary-left' => __( 'Header Menu Left', 'pw' ),
        'primary-right' => __( 'Header Menu Right', 'pw' ),
        'footer-menu' => __( 'Footer Menu', 'pw' ),
        'footer-menu-two' => __( 'Footer Menu Two', 'pw' ),

        'footer-utility' => __( 'Footer Utility', 'pw' ),
    ) );
};
