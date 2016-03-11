<?php global $dm_settings; ?>

<div class="container dmbs-container">
    <div class="row">
        <div class="col-xs-12">
            <div class="row">
                <div class="col-md-12">
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
    <!-- Main Navigation -->
    <div class="row dmbs-header">
            <div class="col-md-4 dmbs-header-img text-center">
                <a href="<?php echo home_url();?> " class="logo"></a>
                <!-- main navigation -->
                <?php get_template_part('template-part', 'topnav'); ?>
            </div>

            <div class="col-md-8 dmbs-header-text">
                <div>
                    <!--Header Slideshow-->
                    <?php echo do_shortcode("[metaslider id=78]"); ?>
                </div>

            </div>
    </div>

    <div class="line"></div>
    <div><?php echo nav_breadcrumb()?></div>




