<?php global $dm_settings; ?>

<div class="container dmbs-container">
    <div class="row header">
        <div class="col-md-12">
            <div class="headNav text-right">
                <?php wp_nav_menu( array( 'theme_location' => 'top' ) );?>
            </div>
        </div>
    </div>
    <!-- Kopfzeile mit Navigation -->
    <div class="row dmbs-header">

        <div class="col-md-4 dmbs-header-img text-center">
            <!-- main navigation -->
            <?php get_template_part('template-part', 'topnav'); ?>

        </div>

        <div class="col-md-8 dmbs-header-text">
            <img src="http://www.tc-bodenwerder.de/images/slideshow/bild_005.jpg" alt="">
        </div>
    </div>




