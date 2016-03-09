<?php if (has_nav_menu('main_menu')) : ?>

<!--    <div class="row dmbs-top-menu">-->
<!--        <nav class="navbar navbar-inverse" role="navigation">-->
<!--            <div class="">-->
<!--                <div class="navbar-header">-->
<!--                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-1-collapse">-->
<!--                        <span class="sr-only">--><?php //_e('Toggle navigation', 'devdmbootstrap3'); ?><!--</span>-->
<!--                        <span class="icon-bar"></span>-->
<!--                        <span class="icon-bar"></span>-->
<!--                        <span class="icon-bar"></span>-->
<!--                    </button>-->
<!--                </div>-->
<!---->
<!--                --><?php
//                wp_nav_menu(array(
//                        'theme_location' => 'main_menu',
//                        'depth' => 2,
//                        'container' => 'div',
//                        'container_class' => 'collapse navbar-collapse navbar-1-collapse',
//                        'menu_class' => 'nav navbar-nav',
//                        'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
//                        'walker' => new wp_bootstrap_navwalker())
//                );
//                ?>
<!--            </div>-->
<!--        </nav>-->
<!--    </div>-->

    <nav class="navbar navbar-default" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li><a href="#">Separated link</a></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->

        <?php
        wp_nav_menu(array(
                'theme_location' => 'main_menu',
                'depth' => 2,
                'container' => 'div',
                'container_class' => 'collapse navbar-collapse navbar-1-collapse',
                'menu_class' => 'nav navbar-nav',
                'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                'walker' => new wp_bootstrap_navwalker())
        );
        ?>
    </nav>


<?php endif; ?>





