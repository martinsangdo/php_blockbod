<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Title -->
    <title>Main Dashboard</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <meta name="author" content="Martin SangDo"/>
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo PUBLIC_FOLDER; ?>img/favicon.ico" type="image/x-icon"/>
    <link rel="icon" href="<?php echo PUBLIC_FOLDER; ?>img/favicon.ico" type="image/x-icon"/>
    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="/public/unity_assets/vendor/bootstrap/bootstrap.min.css"/>
    <!-- CSS Global Icons -->
    <link rel="stylesheet" href="/public/unity_assets/vendor/icon-awesome/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="/public/unity_assets/vendor/icon-line/css/simple-line-icons.css"/>
    <link rel="stylesheet" href="/public/unity_assets/vendor/icon-etlinefont/style.css"/>
    <link rel="stylesheet" href="/public/unity_assets/vendor/icon-line-pro/style.css"/>
    <link rel="stylesheet" href="/public/unity_assets/vendor/icon-hs/style.css"/>

    <link rel="stylesheet" href="/public/unity_assets/vendor/hs-admin-icons/hs-admin-icons.css"/>

    <link rel="stylesheet" href="/public/unity_assets/vendor/animate.css"/>
    <link rel="stylesheet" href="/public/unity_assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.min.css"/>

    <link rel="stylesheet" href="/public/unity_assets/vendor/flatpickr/dist/css/flatpickr.min.css"/>
    <link rel="stylesheet" href="/public/unity_assets/vendor/bootstrap-select/css/bootstrap-select.min.css"/>

    <link rel="stylesheet" href="/public/unity_assets/vendor/chartist-js/chartist.min.css"/>
    <link rel="stylesheet" href="/public/unity_assets/vendor/chartist-js-tooltip/chartist-plugin-tooltip.css"/>
    <link rel="stylesheet" href="/public/unity_assets/vendor/fancybox/jquery.fancybox.min.css"/>

    <link rel="stylesheet" href="/public/unity_assets/vendor/hamburgers/hamburgers.min.css"/>

    <!-- CSS Unify -->
    <link rel="stylesheet" href="/public/unity_assets/css/unify-admin.css"/>

    <!-- CSS Customization -->
    <link rel="stylesheet" href="/public/admin/css/admin_custom.css"/>
</head>

<body>
<!-- Header -->
<header id="js-header" class="u-header u-header--sticky-top">
    <div class="u-header__section u-header__section--admin-dark g-min-height-65">
        <nav class="navbar no-gutters g-pa-0">
            <div class="col-auto d-flex flex-nowrap u-header-logo-toggler g-py-12">
                <!-- Logo -->
                <!-- End Logo -->

                <!-- Sidebar Toggler -->
                <a class="js-side-nav u-header__nav-toggler d-flex align-self-center ml-auto" href="#!" data-hssm-class="u-side-nav--mini u-sidebar-navigation-v1--mini" data-hssm-body-class="u-side-nav-mini" data-hssm-is-close-all-except-this="true" data-hssm-target="#sideNav">
                    <i class="hs-admin-align-left"></i>
                </a>
                <!-- End Sidebar Toggler -->
            </div>

            <!-- Messages/Notifications/Top Search Bar/Top User -->
            <div class="col-auto d-flex g-py-12 g-pl-40--lg ml-auto">
                <!-- Top Messages -->
                <div class="g-pos-rel g-hidden-sm-down g-mr-5">
                    <a title="New contribution articles" class="d-block text-uppercase u-header-icon-v1 g-pos-rel g-width-40 g-height-40 rounded-circle g-font-size-20" href="#!">
                        <span class="u-badge-v1 g-top-7 g-right-7 g-width-18 g-height-18 g-bg-primary g-font-size-10 g-color-white rounded-circle p-0">7</span>
                        <i class="hs-admin-agenda g-absolute-centered"></i>
                    </a>
                </div>
                <!-- End Top Messages -->

                <!-- Top Messages -->
                <div class="g-pos-rel g-hidden-sm-down g-mr-5">
                    <a title="New messages" class="d-block text-uppercase u-header-icon-v1 g-pos-rel g-width-40 g-height-40 rounded-circle g-font-size-20" href="#!">
                        <span class="u-badge-v1 g-top-7 g-right-7 g-width-18 g-height-18 g-bg-primary g-font-size-10 g-color-white rounded-circle p-0">2</span>
                        <i class="hs-admin-comment-alt g-absolute-centered"></i>
                    </a>
                </div>
                <!-- End Top Messages -->

                <!-- Top User -->
                <div class="col-auto d-flex g-pt-5 g-pt-0--sm g-pl-10 g-pl-20--sm">
                    <div class="g-pos-rel g-px-10--lg">
                        <a id="profileMenuInvoker" class="d-block" href="#!" aria-controls="profileMenu" aria-haspopup="true" aria-expanded="false" data-dropdown-event="click" data-dropdown-target="#profileMenu" data-dropdown-type="css-animation" data-dropdown-duration="300"
                           data-dropdown-animation-in="fadeIn" data-dropdown-animation-out="fadeOut">
                <span class="g-pos-rel">
        <span class="u-badge-v2--xs u-badge--top-right g-hidden-sm-up g-bg-lightblue-v5 g-mr-5"></span>
                <img class="g-width-30 g-width-40--md g-height-30 g-height-40--md rounded-circle g-mr-10--sm" src="/public/unity_assets/img-temp/130x130/img1.jpg" alt="Image description">
                </span>
                            <span class="g-pos-rel g-top-2">
        <span class="g-hidden-sm-down">Admin</span>
                <i class="hs-admin-angle-down g-pos-rel g-top-2 g-ml-10"></i>
                </span>
                        </a>

                        <!-- Top User Menu -->
                        <ul id="profileMenu" class="g-pos-abs g-left-0 g-width-100x--lg g-nowrap g-font-size-14 g-py-20 g-mt-17 rounded" aria-labelledby="profileMenuInvoker">
                            <li class="g-mb-10">
                                <a class="media g-color-lightred-v2--hover g-py-5 g-px-20" href="#!">
                                    <span class="d-flex align-self-center g-mr-12">
                                      <i class="hs-admin-user"></i>
                                    </span>
                                    <span class="media-body align-self-center">My Profile</span>
                                </a>
                            </li>
                            <li class="mb-0">
                                <a class="media g-color-lightred-v2--hover g-py-5 g-px-20" href="#!">
                    <span class="d-flex align-self-center g-mr-12">
          <i class="hs-admin-shift-right"></i>
        </span>
                                    <span class="media-body align-self-center">Sign Out</span>
                                </a>
                            </li>
                        </ul>
                        <!-- End Top User Menu -->
                    </div>
                </div>
                <!-- End Top User -->
            </div>
            <!-- End Messages/Notifications/Top Search Bar/Top User -->

        </nav>
    </div>
</header>
<!-- End Header -->


<main class="container-fluid px-0 g-pt-65">
    <div class="row no-gutters g-pos-rel g-overflow-x-hidden">
        <!-- Sidebar Nav -->
        <div id="sideNav" class="col-auto u-sidebar-navigation-v1 u-sidebar-navigation--dark">
            <ul id="sideNavMenu" class="u-sidebar-navigation-v1-menu u-side-nav--top-level-menu g-min-height-100vh mb-0">
                <!-- Home -->
                <li class="u-sidebar-navigation-v1-menu-item u-side-nav--top-level-menu-item">
                    <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="<?php echo base_url().'admin_1/home'; ?>">
                        <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
                            <i class="hs-admin-home"></i>
                        </span>
                        <span class="media-body align-self-center">Dashboard</span>
                    </a>
                </li>
                <!-- Home -->
                <!-- Articles -->
                <li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--top-level-menu-item">
                    <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="#!" data-hssm-target="#subMenu7">
                        <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
                            <i class="hs-admin-pencil-alt"></i>
                        </span>
                        <span class="media-body align-self-center">Articles</span>
                        <span class="d-flex align-self-center u-side-nav--control-icon">
                            <i class="hs-admin-angle-right"></i>
                        </span>
                    </a>
                    <!-- Forms: Submenu-1 -->
                    <ul id="subMenu7" class="u-sidebar-navigation-v1-menu u-side-nav--second-level-menu mb-0">
                        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--second-level-menu-item">
                            <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="#!">
                                <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
                                    <i class="hs-admin-list"></i>
                                </span>
                                <span class="media-body align-self-center">Create new</span>
                            </a>
                        </li>
                        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--second-level-menu-item">
                            <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="#!">
                                <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
                                    <i class="hs-admin-list"></i>
                                </span>
                                <span class="media-body align-self-center">My List</span>
                            </a>
                        </li>
                        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--second-level-menu-item">
                            <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="#!">
                                <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
                                    <i class="hs-admin-list"></i>
                                </span>
                                <span class="media-body align-self-center">Contributors List</span>
                            </a>
                        </li>
                        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--second-level-menu-item">
                            <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="#!">
                                <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
                                    <i class="hs-admin-list"></i>
                                </span>
                                <span class="media-body align-self-center">Collection List</span>
                            </a>
                        </li>
                        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--second-level-menu-item">
                            <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="<?php echo base_url().'cron/show_crawl_time'; ?>">
                                <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
                                    <i class="hs-admin-list"></i>
                                </span>
                                <span class="media-body align-self-center">Engine status</span>
                            </a>
                        </li>
                    </ul>
                    <!-- End Forms: Submenu-1 -->
                </li>
                <!-- End Articles -->

                <!-- Papers -->
                <li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--top-level-menu-item">
                    <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="#!" data-hssm-target="#subMenu7">
                        <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
                            <i class="hs-admin-file"></i>
                        </span>
                        <span class="media-body align-self-center">Papers</span>
                        <span class="d-flex align-self-center u-side-nav--control-icon">
                            <i class="hs-admin-angle-right"></i>
                        </span>
                    </a>
                    <!-- Forms: Submenu-1 -->
                    <ul id="subMenu7" class="u-sidebar-navigation-v1-menu u-side-nav--second-level-menu mb-0">
                        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--second-level-menu-item">
                            <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="#!">
                                <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
                                    <i class="hs-admin-list"></i>
                                </span>
                                <span class="media-body align-self-center">Create new</span>
                            </a>
                        </li>
                        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--second-level-menu-item">
                            <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="#!">
                                <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
                                    <i class="hs-admin-list"></i>
                                </span>
                                <span class="media-body align-self-center">List</span>
                            </a>
                        </li>
                    </ul>
                    <!-- End Forms: Submenu-1 -->
                </li>
                <!-- End Papers -->

                <!-- Category -->
                <li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--top-level-menu-item">
                    <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="#!" data-hssm-target="#subMenu7">
                        <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
                            <i class="hs-admin-layers"></i>
                        </span>
                        <span class="media-body align-self-center">Category</span>
                        <span class="d-flex align-self-center u-side-nav--control-icon">
                            <i class="hs-admin-angle-right"></i>
                        </span>
                    </a>
                    <!-- Forms: Submenu-1 -->
                    <ul id="subMenu7" class="u-sidebar-navigation-v1-menu u-side-nav--second-level-menu mb-0">
                        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--second-level-menu-item">
                            <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="#!">
                                <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
                                    <i class="hs-admin-list"></i>
                                </span>
                                <span class="media-body align-self-center">Create new</span>
                            </a>
                        </li>
                        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--second-level-menu-item">
                            <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="#!">
                                <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
                                    <i class="hs-admin-list"></i>
                                </span>
                                <span class="media-body align-self-center">List</span>
                            </a>
                        </li>
                    </ul>
                    <!-- End Forms: Submenu-1 -->
                </li>
                <!-- End Category -->

                <!-- Advertisements -->
                <li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--top-level-menu-item">
                    <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="#!" data-hssm-target="#subMenu7">
                        <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
                            <i class="hs-admin-notepad"></i>
                        </span>
                        <span class="media-body align-self-center">Advertisements</span>
                        <span class="d-flex align-self-center u-side-nav--control-icon">
                            <i class="hs-admin-angle-right"></i>
                        </span>
                    </a>
                    <!-- Forms: Submenu-1 -->
                    <ul id="subMenu7" class="u-sidebar-navigation-v1-menu u-side-nav--second-level-menu mb-0">
                        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--second-level-menu-item">
                            <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="#!">
                                <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
                                    <i class="hs-admin-list"></i>
                                </span>
                                <span class="media-body align-self-center">Create new</span>
                            </a>
                        </li>
                        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--second-level-menu-item">
                            <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="#!">
                                <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
                                    <i class="hs-admin-list"></i>
                                </span>
                                <span class="media-body align-self-center">List</span>
                            </a>
                        </li>
                    </ul>
                    <!-- End Forms: Submenu-1 -->
                </li>
                <!-- End Advertisements -->

                <!-- Sales -->
                <li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--top-level-menu-item">
                    <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="#!" data-hssm-target="#subMenu7">
                        <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
                            <i class="hs-admin-shopping-cart"></i>
                        </span>
                        <span class="media-body align-self-center">Sales</span>
                        <span class="d-flex align-self-center u-side-nav--control-icon">
                            <i class="hs-admin-angle-right"></i>
                        </span>
                    </a>
                    <!-- Forms: Submenu-1 -->
                    <ul id="subMenu7" class="u-sidebar-navigation-v1-menu u-side-nav--second-level-menu mb-0">
                        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--second-level-menu-item">
                            <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="#!">
                                <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
                                    <i class="hs-admin-list"></i>
                                </span>
                                <span class="media-body align-self-center">Create new</span>
                            </a>
                        </li>
                        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--second-level-menu-item">
                            <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="#!">
                                <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
                                    <i class="hs-admin-list"></i>
                                </span>
                                <span class="media-body align-self-center">List</span>
                            </a>
                        </li>
                    </ul>
                    <!-- End Forms: Submenu-1 -->
                </li>
                <!-- End Sales -->

                <!-- Reports -->
                <li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--top-level-menu-item">
                    <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="#!" data-hssm-target="#subMenu7">
                        <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
                            <i class="hs-admin-bar-chart-alt"></i>
                        </span>
                        <span class="media-body align-self-center">Reports</span>
                        <span class="d-flex align-self-center u-side-nav--control-icon">
                            <i class="hs-admin-angle-right"></i>
                        </span>
                    </a>
                    <!-- Forms: Submenu-1 -->
                    <ul id="subMenu7" class="u-sidebar-navigation-v1-menu u-side-nav--second-level-menu mb-0">
                        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--second-level-menu-item">
                            <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="#!">
                                <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
                                    <i class="hs-admin-list"></i>
                                </span>
                                <span class="media-body align-self-center">Create new</span>
                            </a>
                        </li>
                        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--second-level-menu-item">
                            <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="#!">
                                <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
                                    <i class="hs-admin-list"></i>
                                </span>
                                <span class="media-body align-self-center">List</span>
                            </a>
                        </li>
                    </ul>
                    <!-- End Forms: Submenu-1 -->
                </li>
                <!-- End Reports -->
            </ul>
        </div>
        <!-- End Sidebar Nav -->


        <div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
            <div class="g-pa-20">
                <div class="row">
                    <div class="col-sm-6 col-lg-6 col-xl-3 g-mb-30">
                        <!-- Panel -->
                        <div class="card h-100 g-brd-gray-light-v7 g-rounded-3">
                            <div class="card-block g-font-weight-300 g-pa-20">
                                <div class="media">
                                    <div class="d-flex g-mr-15">
                                        <div class="u-header-dropdown-icon-v1 g-pos-rel g-width-60 g-height-60 g-bg-lightblue-v4 g-font-size-18 g-font-size-24--md g-color-white rounded-circle">
                                            <i class="hs-admin-pencil g-absolute-centered"></i>
                                        </div>
                                    </div>

                                    <div class="media-body align-self-center">
                                        <div class="d-flex align-items-center g-mb-5">
                                            <span class="g-font-size-24 g-line-height-1 g-color-black">1,563</span>
                                        </div>
                                        <h6 class="g-font-size-16 g-font-weight-300 g-color-gray-dark-v6 mb-0">Articles</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Panel -->
                    </div>

                    <div class="col-sm-6 col-lg-6 col-xl-3 g-mb-30">
                        <!-- Panel -->
                        <div class="card h-100 g-brd-gray-light-v7 g-rounded-3">
                            <div class="card-block g-font-weight-300 g-pa-20">
                                <div class="media">
                                    <div class="d-flex g-mr-15">
                                        <div class="u-header-dropdown-icon-v1 g-pos-rel g-width-60 g-height-60 g-bg-teal-v2 g-font-size-18 g-font-size-24--md g-color-white rounded-circle">
                                            <i class="hs-admin-shopping-cart g-absolute-centered"></i>
                                        </div>
                                    </div>

                                    <div class="media-body align-self-center">
                                        <div class="d-flex align-items-center g-mb-5">
                                            <span class="g-font-size-24 g-line-height-1 g-color-black">324</span>
                                        </div>

                                        <h6 class="g-font-size-16 g-font-weight-300 g-color-gray-dark-v6 mb-0">Total Sales</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Panel -->
                    </div>

                    <div class="col-sm-6 col-lg-6 col-xl-3 g-mb-30">
                        <!-- Panel -->
                        <div class="card h-100 g-brd-gray-light-v7 g-rounded-3">
                            <div class="card-block g-font-weight-300 g-pa-20">
                                <div class="media">
                                    <div class="d-flex g-mr-15">
                                        <div class="u-header-dropdown-icon-v1 g-pos-rel g-width-60 g-height-60 g-bg-darkblue-v2 g-font-size-18 g-font-size-24--md g-color-white rounded-circle">
                                            <i class="hs-admin-file g-absolute-centered"></i>
                                        </div>
                                    </div>

                                    <div class="media-body align-self-center">
                                        <div class="d-flex align-items-center g-mb-5">
                                            <span class="g-font-size-24 g-line-height-1 g-color-black">12</span>
                                        </div>

                                        <h6 class="g-font-size-16 g-font-weight-300 g-color-gray-dark-v6 mb-0">Selling papers</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Panel -->
                    </div>

                    <div class="col-sm-6 col-lg-6 col-xl-3 g-mb-30">
                        <!-- Panel -->
                        <div class="card h-100 g-brd-gray-light-v7 g-rounded-3">
                            <div class="card-block g-font-weight-300 g-pa-20">
                                <div class="media">
                                    <div class="d-flex g-mr-15">
                                        <div class="u-header-dropdown-icon-v1 g-pos-rel g-width-60 g-height-60 g-bg-lightred-v2 g-font-size-18 g-font-size-24--md g-color-white rounded-circle">
                                            <i class="hs-admin-book g-absolute-centered"></i>
                                        </div>
                                    </div>

                                    <div class="media-body align-self-center">
                                        <div class="d-flex align-items-center g-mb-5">
                                            <span class="g-font-size-24 g-line-height-1 g-color-black">148</span>
                                        </div>

                                        <h6 class="g-font-size-16 g-font-weight-300 g-color-gray-dark-v6 mb-0">Books</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Panel -->
                    </div>

                    <!-- Income Card -->
                    <div class="col-xl-12">
                        <!-- Income Cards -->
                        <div class="card g-brd-gray-light-v7 g-mb-30 g-mt-30">
                            <header class="media g-pa-15 g-pa-25-30-0--md g-mb-20">
                                <div class="media-body align-self-center">
                                    <h3 class="text-uppercase g-font-size-default g-color-black g-mb-8">Total Income</h3>
                                    <a href="#">View all</a>
                                </div>

                                <div class="d-flex align-self-end align-items-center">
                                    <span class="g-line-height-1 g-font-weight-300 g-font-size-28 g-color-lightblue-v4">$48,200</span>
                                </div>
                            </header>

                            <div class="js-custom-scroll g-height-400 g-pa-15 g-pa-0-30-25--md">
                                <table class="table table-responsive-sm w-100">
                                    <thead>
                                        <tr>
                                            <th class="g-font-weight-300 g-color-gray-dark-v6 g-brd-top-none g-pl-20">#</th>
                                            <th class="g-font-weight-300 g-color-gray-dark-v6 g-brd-top-none">Content</th>
                                            <th class="g-font-weight-300 g-color-gray-dark-v6 g-brd-top-none">Date</th>
                                            <th class="text-right g-font-weight-300 g-color-gray-dark-v6 g-brd-top-none">Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10 g-pl-20">1</td>
                                            <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">How to prepare ICO?</td>
                                            <td class="g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Aug 12, 2016</td>
                                            <td class="text-right g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">$45</td>
                                        </tr>
                                        <tr>
                                            <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10 g-pl-20">2</td>
                                            <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">How to prepare ICO?</td>
                                            <td class="g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Aug 12, 2016</td>
                                            <td class="text-right g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">$45</td>
                                        </tr>
                                        <tr>
                                            <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10 g-pl-20">3</td>
                                            <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">How to prepare ICO?</td>
                                            <td class="g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Aug 12, 2016</td>
                                            <td class="text-right g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">$45</td>
                                        </tr>
                                        <tr>
                                            <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10 g-pl-20">4</td>
                                            <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">How to prepare ICO?</td>
                                            <td class="g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Aug 12, 2016</td>
                                            <td class="text-right g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">$45</td>
                                        </tr>
                                        <tr>
                                            <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10 g-pl-20">5</td>
                                            <td class="g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">How to prepare ICO?</td>
                                            <td class="g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">Aug 12, 2016</td>
                                            <td class="text-right g-font-size-default g-color-black g-valign-middle g-brd-top-none g-brd-bottom g-brd-2 g-brd-gray-light-v4 g-py-10">$45</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                        <!-- End Income Cards -->
                    </div>
                    <!-- End Income Card -->

                    <!-- Statistic Card -->
                    <div class="col-xl-12">
                        <!-- Statistic Card -->
                        <div class="card g-brd-gray-light-v7 g-pa-15 g-pa-25-30--md g-mb-30">
                            <header class="media g-mb-30">
                                <h3 class="d-flex align-self-center text-uppercase g-font-size-12 g-font-size-default--md g-color-black mb-0">Project revenue</h3>

                                <div class="media-body d-flex justify-content-end">
                                    <div id="rangePickerWrapper2" class="d-flex align-items-center u-datepicker-right u-datepicker--v3 g-pr-10">
                                        <input id="rangeDatepicker2" class="g-font-size-12 g-font-size-default--md" type="text" data-rp-wrapper="#rangePickerWrapper2" data-rp-type="range" data-rp-date-format="d M Y" data-rp-default-date='["01 Jan 2016", "31 Dec 2017"]'>
                                        <i class="hs-admin-angle-down g-absolute-centered--y g-right-0 g-color-gray-light-v3"></i>
                                    </div>

                                    <a class="d-flex align-items-center hs-admin-panel u-link-v5 g-font-size-20 g-color-gray-light-v3 g-color-lightblue-v3--hover g-ml-5 g-ml-30--md" href="#!"></a>
                                </div>
                            </header>

                            <section>
                                <ul class="list-unstyled d-flex g-mb-45">
                                    <li class="media">
                                        <div class="d-flex align-self-center g-mr-8">
                                            <span class="u-badge-v2--md g-pos-stc g-transform-origin--top-left g-bg-lightblue-v4"></span>
                                        </div>

                                        <div class="media-body align-self-center g-font-size-12 g-font-size-default--md">USD</div>
                                    </li>
                                </ul>

                                <div class="js-area-chart u-area-chart--v1 g-pos-rel g-line-height-0" data-height="300px" data-mobile-height="180px" data-high="5000000" data-low="0" data-offset-x="30" data-offset-y="50" data-postfix=" m" data-is-show-area="true" data-is-show-line="false"
                                     data-is-show-point="true" data-is-full-width="true" data-is-stack-bars="true" data-is-show-axis-x="true" data-is-show-axis-y="true" data-is-show-tooltips="true" data-tooltip-description-position="right" data-tooltip-custom-class="u-tooltip--v2 g-font-weight-300 g-font-size-default g-color-gray-dark-v6"
                                     data-align-text-axis-x="center" data-fill-opacity=".7" data-fill-colors='["#3dd1e8"]' data-stroke-color="#e1eaea" data-stroke-dash-array="0" data-text-size-x="14px" data-text-color-x="#000000" data-text-offset-top-x="10"
                                     data-text-size-y="14px" data-text-color-y="#53585e" data-points-colors='["#3dd1e8"]' data-series='[
              [
                {"meta": "Visits", "value": 300000},
                {"meta": "Visits", "value": 300000},
                {"meta": "Visits", "value": 300000},
                {"meta": "Visits", "value": 300000},
                {"meta": "Visits", "value": 2300000},
                {"meta": "Visits", "value": 1000000},
                {"meta": "Visits", "value": 500000},
                {"meta": "Visits", "value": 500000},
                {"meta": "Visits", "value": 500000},
                {"meta": "Visits", "value": 1000000},
                {"meta": "Visits", "value": 300000},
                {"meta": "Visits", "value": 300000}
              ]
            ]' data-labels='["Jan", "Feb", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]'></div>
                            </section>
                        </div>
                        <!-- End Statistic Card -->
                    </div>
                    <!-- End Statistic Card -->

                    <!-- Activity Card -->
                    <div class="col-xl-4">

                        <!-- Activity Card -->
                        <div class="card g-brd-gray-light-v7 g-mb-30">
                            <header class="media g-pa-15 g-pa-25-30-0--md g-mb-16">
                                <h3 class="d-flex align-self-center text-uppercase g-font-size-12 g-font-size-default--md g-color-black g-mr-20 mb-0">Recent messages</h3>
                                <a href="#!">View all</a>
                            </header>

                            <div class="js-custom-scroll g-height-400 g-pa-15 g-pl-5--md g-pr-30--md g-py-25--md">
                                <section class="u-timeline-v2-wrap g-pos-rel g-left-25--before g-mb-20">
                                    <div class="g-orientation-left g-pos-rel g-ml-25--md g-pl-20">
                                        <div class="g-hidden-sm-down u-timeline-v2__icon g-top-35">
                                            <i class="d-block g-width-16 g-height-16 g-bg-white g-brd-around g-brd-2 g-brd-lightblue-v3 rounded-circle"></i>
                                        </div>

                                        <div class="media g-mb-16">
                                            <div class="media-body align-self-center">
                                                <h3 class="g-font-weight-300 g-font-size-16 g-mb-3">Kim Jeong</h3>
                                                <em class="g-font-style-normal g-color-lightblue-v3">kim.joan@gmail.com</em>
                                            </div>
                                        </div>

                                        <p class="g-font-weight-300 g-font-size-default g-mb-16">Hello, how can I sell my book in your website?</p>
                                        <em class="d-flex align-self-center align-items-center g-font-style-normal g-color-gray-dark-v6">
                                            <i class="hs-admin-time g-font-size-default g-font-size-18--md g-color-gray-light-v3"></i>
                                            <span class="g-font-weight-300 g-font-size-12 g-font-size-default--md g-ml-4 g-ml-8--md">45 Min <span class="g-hidden-md-down">ago</span></span>
                                        </em>
                                    </div>

                                    <hr class="d-flex g-brd-gray-light-v4 g-ml-35--md g-my-20 g-my-10--md">

                                    <div class="g-orientation-left g-pos-rel g-ml-25--md g-pl-20">
                                        <div class="g-hidden-sm-down u-timeline-v2__icon g-top-35">
                                            <i class="d-block g-width-16 g-height-16 g-bg-white g-brd-around g-brd-2 g-brd-lightblue-v3 rounded-circle"></i>
                                        </div>

                                        <div class="media g-mb-25">
                                            <div class="media-body align-self-center">
                                                <h3 class="g-font-weight-300 g-font-size-16 g-mb-3">Emm Watson</h3>
                                                <em class="g-font-style-normal g-color-lightblue-v3">wat094@hotmail.com</em>
                                            </div>
                                        </div>

                                        <p class="g-font-weight-300 g-font-size-default g-mb-16">Can you publish my cover book?</p>

                                        <em class="d-flex align-self-center align-items-center g-font-style-normal g-mb-10">
                                            <i class="hs-admin-zip g-font-size-24 g-color-lightblue-v3"></i>
                                            <span class="g-font-weight-300 g-font-size-default g-color-gray-dark-v6 g-ml-12">my_book_brief.zip</span>
                                        </em>

                                        <em class="d-flex align-self-center align-items-center g-font-style-normal g-color-gray-dark-v6">
                                            <i class="hs-admin-time g-font-size-default g-font-size-18--md g-color-gray-light-v3"></i>
                                            <span class="g-font-weight-300 g-font-size-12 g-font-size-default--md g-ml-4 g-ml-8--md">10 Min <span class="g-hidden-md-down">ago</span></span>
                                        </em>
                                    </div>

                                </section>

                            </div>
                        </div>
                        <!-- End Activity Card -->

                    </div>
                    <!-- End Activity Card -->

                    <!-- Tickets Card -->
                    <div class="col-xl-4">
                        <!-- Tickets Cards -->
                        <div class="card g-brd-gray-light-v7 g-mb-30">
                            <header class="media g-pa-15 g-pa-25-30-0--md g-mb-20">
                                <h3 class="d-flex align-self-center text-uppercase g-font-size-12 g-font-size-default--md g-color-black g-mr-20 mb-0">Recent contributions</h3>
                                <a href="#!">View all</a>
                            </header>

                            <div class="js-custom-scroll g-height-400 g-pa-15 g-pl-5--md g-pr-30--md g-py-25--md">
                                <section class="u-timeline-v2-wrap g-pos-rel g-left-25--before g-mb-20">
                                    <div class="g-orientation-left g-pos-rel g-ml-25--md g-pl-20">
                                        <div class="g-hidden-sm-down u-timeline-v2__icon g-top-35">
                                            <i class="d-block g-width-16 g-height-16 g-bg-white g-brd-around g-brd-2 g-brd-lightblue-v3 rounded-circle"></i>
                                        </div>

                                        <div class="media g-mb-16">
                                            <div class="media-body align-self-center">
                                                <h3 class="g-font-weight-300 g-font-size-16 g-mb-3">Prof. Kim</h3>
                                                <em class="g-font-style-normal g-color-lightblue-v3">kim.pf087@gmail.com</em>
                                            </div>
                                        </div>

                                        <p class="g-font-weight-300 g-font-size-default g-mb-16">If there’s one thing that rival cryptocurrency factions can agree on, it’s their mutual ...</p>
                                        <em class="d-flex align-self-center align-items-center g-font-style-normal g-color-gray-dark-v6">
                                            <i class="hs-admin-time g-font-size-default g-font-size-18--md g-color-gray-light-v3"></i>
                                            <span class="g-font-weight-300 g-font-size-12 g-font-size-default--md g-ml-4 g-ml-8--md">45 Min <span class="g-hidden-md-down">ago</span></span>
                                            <a href="#" class="g-ml-20">Review</a>
                                        </em>
                                    </div>

                                    <hr class="d-flex g-brd-gray-light-v4 g-ml-35--md g-my-20 g-my-10--md">

                                    <div class="g-orientation-left g-pos-rel g-ml-25--md g-pl-20">
                                        <div class="g-hidden-sm-down u-timeline-v2__icon g-top-35">
                                            <i class="d-block g-width-16 g-height-16 g-bg-white g-brd-around g-brd-2 g-brd-lightblue-v3 rounded-circle"></i>
                                        </div>

                                        <div class="media g-mb-25">
                                            <div class="media-body align-self-center">
                                                <h3 class="g-font-weight-300 g-font-size-16 g-mb-3">CEO Mike</h3>
                                                <em class="g-font-style-normal g-color-lightblue-v3">mike@hotmail.com</em>
                                            </div>
                                        </div>

                                        <p class="g-font-weight-300 g-font-size-default g-mb-16">This internecine squabbling has arguably done more to hinder cryptocurrency adoption ...</p>

                                        <em class="d-flex align-self-center align-items-center g-font-style-normal g-color-gray-dark-v6">
                                            <i class="hs-admin-time g-font-size-default g-font-size-18--md g-color-gray-light-v3"></i>
                                            <span class="g-font-weight-300 g-font-size-12 g-font-size-default--md g-ml-4 g-ml-8--md">10 Min <span class="g-hidden-md-down">ago</span></span>
                                            <a href="#" class="g-ml-20">Review</a>
                                        </em>
                                    </div>

                                </section>

                            </div>
                        </div>
                        <!-- End Tickets Cards -->
                    </div>
                    <!-- End Tickets Card -->

                    <!-- Comments Card -->
                    <div class="col-xl-4">
                        <!-- Comments Card-->
                        <div class="card g-brd-gray-light-v7 g-mb-30">
                            <header class="media g-pa-15 g-pa-25-30-0--md g-mb-20">
                                <h3 class="d-flex align-self-center text-uppercase g-font-size-12 g-font-size-default--md g-color-black g-mr-20 mb-0">Recent comments</h3>
                                <a href="#!">View all</a>
                            </header>

                            <div class="js-custom-scroll g-height-400 g-pa-15 g-pa-0-30-25--md">
                                <section class="media">
                                    <div class="media-body">
                                        <p class="g-font-weight-300 g-font-size-16 g-color-black g-mb-5">
                                            Hey, this is interesting article
                                        </p>
                                        <a class="g-font-weight-300 g-color-gray-dark-v6 g-mb-5" href="#">Binance CEO Blasts VCs and Calls ICOs 'Necessary'</a>

                                        <div class="media">
                                            <em class="d-flex align-self-center align-items-center g-font-style-normal">
                                                <i class="hs-admin-time g-font-size-default g-font-size-18--md g-color-gray-light-v3"></i>
                                                <span class="g-font-weight-300 g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-ml-4 g-ml-8--md">45 Min <span class="g-hidden-md-down">ago</span></span>
                                            </em>
                                        </div>
                                    </div>
                                </section>

                                <hr class="d-flex g-brd-gray-light-v4 g-my-10">

                                <section class="media">
                                    <div class="media-body">
                                        <p class="g-font-weight-300 g-font-size-16 g-color-black g-mb-5">
                                            Awesome info ...
                                        </p>
                                        <a class="g-font-weight-300 g-color-gray-dark-v6 g-mb-5" href="#">Busted: Britain Confiscates $700,000 in Bitcoin from Hacker</a>

                                        <div class="media">
                                            <em class="d-flex align-self-center align-items-center g-font-style-normal">
                                                <i class="hs-admin-time g-font-size-default g-font-size-18--md g-color-gray-light-v3"></i>
                                                <span class="g-font-weight-300 g-font-size-12 g-font-size-default--md g-color-gray-dark-v6 g-ml-4 g-ml-8--md">45 Min <span class="g-hidden-md-down">ago</span></span>
                                            </em>
                                        </div>
                                    </div>
                                </section>

                            </div>
                        </div>
                        <!-- Comments Card-->
                    </div>
                    <!-- End Comments Card -->
                </div>
            </div>

            <!-- Footer -->
            <footer id="footer" class="u-footer--bottom-sticky g-bg-white g-color-gray-dark-v6 g-brd-top g-brd-gray-light-v7 g-pa-20">
                <div class="row align-items-center">
                    <!-- Footer Copyrights -->
                    <div class="col-md-4 text-center text-md-right">
                        <small class="d-block g-font-size-default">&copy; 2018 Blockbod. All Rights Reserved.</small>
                    </div>
                    <!-- End Footer Copyrights -->
                </div>
            </footer>
            <!-- End Footer -->
        </div>
    </div>
</main>

<!-- JS Global Compulsory -->
<script src="/public/unity_assets/vendor/jquery/jquery.min.js"></script>
<script src="/public/unity_assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>

<script src="/public/unity_assets/vendor/popper.min.js"></script>
<script src="/public/unity_assets/vendor/bootstrap/bootstrap.min.js"></script>

<script src="/public/unity_assets/vendor/cookiejs/jquery.cookie.js"></script>


<!-- jQuery UI Core -->
<script src="/public/unity_assets/vendor/jquery-ui/ui/widget.js"></script>
<script src="/public/unity_assets/vendor/jquery-ui/ui/version.js"></script>
<script src="/public/unity_assets/vendor/jquery-ui/ui/keycode.js"></script>
<script src="/public/unity_assets/vendor/jquery-ui/ui/position.js"></script>
<script src="/public/unity_assets/vendor/jquery-ui/ui/unique-id.js"></script>
<script src="/public/unity_assets/vendor/jquery-ui/ui/safe-active-element.js"></script>

<!-- jQuery UI Helpers -->
<script src="/public/unity_assets/vendor/jquery-ui/ui/widgets/menu.js"></script>
<script src="/public/unity_assets/vendor/jquery-ui/ui/widgets/mouse.js"></script>

<!-- jQuery UI Widgets -->
<script src="/public/unity_assets/vendor/jquery-ui/ui/widgets/datepicker.js"></script>

<!-- JS Plugins Init. -->
<script src="/public/unity_assets/vendor/appear.js"></script>
<script src="/public/unity_assets/vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
<script src="/public/unity_assets/vendor/flatpickr/dist/js/flatpickr.min.js"></script>
<script src="/public/unity_assets/vendor/malihu-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="/public/unity_assets/vendor/chartist-js/chartist.min.js"></script>
<script src="/public/unity_assets/vendor/chartist-js-tooltip/chartist-plugin-tooltip.js"></script>
<script src="/public/unity_assets/vendor/fancybox/jquery.fancybox.min.js"></script>

<!-- JS Unify -->
<script src="/public/unity_assets/js/hs.core.js"></script>
<script src="/public/unity_assets/js/components/hs.side-nav.js"></script>
<script src="/public/unity_assets/js/helpers/hs.hamburgers.js"></script>
<script src="/public/unity_assets/js/components/hs.range-datepicker.js"></script>
<script src="/public/unity_assets/js/components/hs.datepicker.js"></script>
<script src="/public/unity_assets/js/components/hs.dropdown.js"></script>
<script src="/public/unity_assets/js/components/hs.scrollbar.js"></script>
<script src="/public/unity_assets/js/components/hs.area-chart.js"></script>
<script src="/public/unity_assets/js/components/hs.donut-chart.js"></script>
<script src="/public/unity_assets/js/components/hs.bar-chart.js"></script>
<script src="/public/unity_assets/js/helpers/hs.focus-state.js"></script>
<script src="/public/unity_assets/js/components/hs.popup.js"></script>

<!-- JS Custom -->
<script src="/public/unity_assets/js/custom.js"></script>

<!-- JS Plugins Init. -->
<script>
    $(document).on('ready', function () {
        // initialization of custom select
        $('.js-select').selectpicker();

        // initialization of sidebar navigation component
        $.HSCore.components.HSSideNav.init('.js-side-nav');

        // initialization of hamburger
        $.HSCore.helpers.HSHamburgers.init('.hamburger');

        // initialization of charts
        $.HSCore.components.HSAreaChart.init('.js-area-chart');
        $.HSCore.components.HSDonutChart.init('.js-donut-chart');
        $.HSCore.components.HSBarChart.init('.js-bar-chart');

        // initialization of range datepicker
        $.HSCore.components.HSRangeDatepicker.init('#rangeDatepicker, #rangeDatepicker2, #rangeDatepicker3');

        // initialization of datepicker
        $.HSCore.components.HSDatepicker.init('#datepicker', {
            dayNamesMin: [
                'SU',
                'MO',
                'TU',
                'WE',
                'TH',
                'FR',
                'SA'
            ]
        });

        // initialization of HSDropdown component
        $.HSCore.components.HSDropdown.init($('[data-dropdown-target]'), {dropdownHideOnScroll: false});

        // initialization of custom scrollbar
        $.HSCore.components.HSScrollBar.init($('.js-custom-scroll'));

        // initialization of popups
        $.HSCore.components.HSPopup.init('.js-fancybox', {
            btnTpl: {
                smallBtn: '<button data-fancybox-close class="btn g-pos-abs g-top-25 g-right-30 g-line-height-1 g-bg-transparent g-font-size-16 g-color-gray-light-v3 g-brd-none p-0" title=""><i class="hs-admin-close"></i></button>'
            }
        });
    });
</script>
</body>

</html>