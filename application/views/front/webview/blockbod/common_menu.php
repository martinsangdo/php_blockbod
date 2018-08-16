<header id="masthead" class="site-header" role="banner">

    <div class="bottom-header">
        <div class="container">
            <div class="main_logo">
                <a href="<?php echo base_url(); ?>"><img src="<?php echo PUBLIC_FOLDER; ?>img/logo.png" class="logo"/></a>
            </div>

            <div class="site-branding">
                <h1 class="site-title">BLOCKBOD</h1>
                <h2><a href="<?php echo base_url(); ?>" rel="home">BLOCKCHAIN BOARD & NEWS</a></h2>
            </div>

            <div class="header-advertisement">
                <a href="<?php echo $home_banner_detail->url; ?>" target="_blank">
                    <img src="<?php echo HOME_BANNER_PATH.$home_banner_detail->filename; ?>" class="image wp-image-2227 attachment-full size-full" alt="blockbod ad" style="width:728px;height:90px;" title="blockbod ad"/>
                </a>
            </div><!-- .header-advertisement -->
        </div>
    </div>

    <div class="top-ad-string">
        <header class="card-header g-bg-lightyellow g-brd-bottom-none">
            <div class="media">
                <a class="d-flex align-self-center text-uppercase g-font-size-12 g-font-size-default--md g-color-white g-mr-10 mb-0 g-mb-0 pointer" href="<?php echo base_url(); ?>publicapi/newsletter">Subscribe our customized News now. It will help you decide what to do</a>
            </div>
        </header>
    </div>
    <div class="main-navigation-holder home-icon-enabled">
        <div class="container">
            <div id="main-nav" class="full-width-nav clear-fix">
                <nav id="site-navigation" class="main-navigation" role="navigation">

                    <div class="home-icon active-true hidden">
                        <a href="<?php echo base_url(); ?>"><i class="fa fa-home"></i></a>
                    </div>

                    <div id="main_menu" class="wrap-menu-content">
                        <div class="menu-main-menu-container">
                            <ul id="primary-menu" class="menu">
                                <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2139"><a href="/content/detail/what-is-ico-/2">What is ICO</a></li>
                                <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2139"><a href="/content/detail/how-to-manage-ico/3">How to Manage ICO</a></li>
                                <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2139"><a href="/content/detail/what-is-white-paper/4">What is ICO White Paper</a></li>
                                <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2139"><a href="/content/detail/white-paper-presentation/5">Reverse ICO</a></li>
                                <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2139"><a href="/content/detail/global-regulatory-colloquy/6">Global Regulatory Colloquy</a></li>
                                <li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2139"><a href="/news/coin_price" id="bb_random_price" class="bb_random_price g-color-yellow"></a></li>
                            </ul>
                        </div>
                    </div><!-- .menu-content -->
                    <div id="ico_search" class="home-icon active-true float_r" onclick="common_front.toggle_search_box();">
                        <a href="#!"><i class="fa fa-search"></i></a>
                    </div>
                    <div id="search_box" class="hidden search_box float_r">
                        <input id="txt_search_keyword" type="text" placeholder="Type your keyword"/>
                        <a href="#!" onclick="common_front.toggle_search_box();"><i class="fa fa-close"></i></a>
                    </div>
                </nav><!-- #site-navigation -->
            </div> <!-- #main-nav -->

        </div><!-- .container -->
    </div>
</header>