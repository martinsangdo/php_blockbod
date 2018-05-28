<header id="masthead" class="site-header" role="banner">

    <div class="bottom-header">
        <div class="container">
            <div class="main_logo">
                <img src="<?php echo PUBLIC_FOLDER; ?>img/logo.jpeg" class="logo"/>
            </div>

            <div class="site-branding">
                <h1 class="site-title">BLOCKBOD</h1>
                <h2><a href="<?php echo base_url(); ?>" rel="home">BLOCKCHAIN BOARD & NEWS</a></h2>
            </div>

            <div class="header-advertisement">
                <a href="#">
                    <img src="<?php echo PUBLIC_FOLDER; ?>img/728x90-pt-mag-adv-top-1.jpg" class="image wp-image-2227 attachment-full size-full" alt="blockbod ad" style="max-width: 100%; height: auto;" title="blockbod ad"/>
                </a>
            </div><!-- .header-advertisement -->
        </div>
    </div>


    <div class="main-navigation-holder home-icon-enabled">
        <div class="container">
            <div id="main-nav" class="full-width-nav clear-fix">
                <nav id="site-navigation" class="main-navigation" role="navigation">

                    <div class="home-icon active-true">
                        <a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i></a>
                    </div>

                    <div id="main_menu" class="wrap-menu-content">
                        <div class="menu-main-menu-container">
                            <ul id="primary-menu" class="menu">
                                <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2139"><a href="#!">What is ICO</a></li>
                                <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2139"><a href="#!">How to Manage ICO</a></li>
                                <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2139"><a href="#!">What is ICO White Paper</a></li>
                                <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2139"><a href="#!">White Paper Presentation</a></li>
                                <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2139"><a href="#!">Global Regulatory Colloquy</a></li>
                                <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2139"><a href="/news/coin_price">BB Index</a></li>
                                <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2139"></li>
                            </ul>
                        </div>
                    </div><!-- .menu-content -->
                    <div id="ico_search" class="home-icon active-true float_r" onclick="toggle_search_box();">
                        <a href="#!"><i class="fa fa-search"></i></a>
                    </div>
                    <div id="search_box" class="hidden search_box float_r">
                        <input id="txt_search_keyword" type="text" placeholder="Type your keyword"/>
                        <a href="#!" onclick="toggle_search_box();"><i class="fa fa-close"></i></a>
                    </div>
                </nav><!-- #site-navigation -->
            </div> <!-- #main-nav -->

        </div><!-- .container -->
    </div>
</header>