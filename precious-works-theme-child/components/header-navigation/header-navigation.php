<?php $site_logo = get_field('site_logo', 'options'); 
$image_alt = get_post_meta($site_logo, '_wp_attachment_image_alt', TRUE);
$site_name = get_site_option('blogname'); 

?>


<header id="site-header" class="site-header">
  <div class="site-header-container container">
    <div class="site-header-utility-row d-flex justify-content-between ms-auto">
        <div><i class="fa-solid fa-cart-shopping"></i></div>
        <div><i class="fa-solid fa-user"></i></div>
    </div>
    <div class="site-header-row row align-items-center">

      <div class="header-menu menu-left col-sm-4 d-none d-lg-block">
          <?php include(locate_template('components/header-navigation/partials/header-menu-left.php')); ?>
      </div>
      <!-- Shared Logo -->
      <div class="site-header-logo-col col-6 col-sm-2 text-center">
        <div class="site-brand-logo-wrapper d-flex justify-content-center mx-auto">
          <?php include(locate_template('components/header-navigation/partials/header-logo.php')); ?>
        </div>
      </div>
      <!-- Desktop Menu -->
      <div class="header-menu menu-left col-sm-4 d-none d-lg-block">
          <?php include(locate_template('components/header-navigation/partials/header-menu-right.php')); ?>
      </div>
      <!-- Mobile Hamburger & Slide-Out Menu -->
      <div class="site-header-mobile-button-col col-2 ms-auto d-lg-none">
        <div class="mobile-menu-wrapper">
          <div class="hamburger-menu d-flex justify-content-end">
            <input id="menu__toggle" type="checkbox" />
            <label class="menu__btn" for="menu__toggle">
              <span></span>
            </label>
              <?php include(locate_template('components/header-navigation/partials/header-menu-left.php')); ?>
              <?php include(locate_template('components/header-navigation/partials/header-menu-right.php')); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
