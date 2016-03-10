<?php if (has_nav_menu('main_menu')) : ?>
    <nav class="navbar-default" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>


        <!-- Collect the nav links, forms, and other content for toggling -->
<!--        <div class="collapse navbar-collapse navbar-ex1-collapse">-->
<!--            <ul class="nav navbar-nav">-->
                <?php
                wp_nav_menu(array(
                        'theme_location' => 'main_menu',
                        'depth' => 2,
                        'container' => 'div',
                        'container_class' => 'collapse navbar-collapse navbar-ex1-collapse',
                        'menu_class' => 'nav navbar-nav',
                        'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                        'walker' => new wp_bootstrap_navwalker())
                );
                ?>
<!--            </ul>-->
<!--        </div><!-- /.navbar-collapse -->
    </nav>

<?php endif; ?>