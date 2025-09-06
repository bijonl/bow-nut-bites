<?php 
wp_footer(); 
$social_media_footer = get_field('social_media_footer', 'options');
$footer_logo = get_field('footer_logo', 'options');
?>

<footer class="site-footer" role="contentinfo">
    <div class="site-footer-content-container container">


        <div class="site-footer-content-row row">
            <div class="footer-logo-col col">
                <?php include locate_template('components/footer/footer-logo.php'); ?>
                <div class="logo-note-wrapper">
                    <p>This is a note about being a locally owned business</p>
                </div>
            </div>
            
            <?php include locate_template('components/footer/footer-menu.php'); ?>
          
           
        </div>
        
        <div class="site-copyright-content-row row align-items-center">
            <div class="footer-copyright-col col">
                <?php include locate_template('components/footer/copyright.php'); ?>
            </div>
            <div class="footer-util-menu-col col-sm-3">
                <?php include locate_template('components/footer/footer-utility-menu.php'); ?>
            </div>
        </div>






    </div>
</footer>
