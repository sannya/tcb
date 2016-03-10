<?php global $dm_settings; ?>

<div class="container dmbs-container">
    <div class="row">
        <div class="col-xs-12">
            <div class="row">
                <div class="col-md-6">
                    <a href="#" class="logo"></a>
                </div>
                <div class="col-md-6">
                    <div class="headNav text-right">
                        <!-- Kopf Navigation -->
                        <?php wp_nav_menu(array('theme_location' => 'top_menu')); ?>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="line"></div>
                </div>
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
                <div>
                    <img src="http://www.tc-bodenwerder.de/images/slideshow/bild_005.jpg" alt=""> <!--todo alt tags-->
                </div>
                <div class="navBread"> <?php if (function_exists('nav_breadcrumb')) nav_breadcrumb(); ?></div>
            </div>
    </div>
    <div class="line"></div>




