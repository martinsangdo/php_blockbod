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
                    <a class="d-block text-uppercase u-header-icon-v1 g-pos-rel g-width-40 g-height-40 rounded-circle g-font-size-20" href="#!">
                        <span class="u-badge-v1 g-top-7 g-right-7 g-width-18 g-height-18 g-bg-primary g-font-size-10 g-color-white rounded-circle p-0">7</span>
                        <i class="hs-admin-comment-alt g-absolute-centered"></i>
                    </a>
                </div>
                <!-- End Top Messages -->

                <!-- Top Messages -->
                <div class="g-pos-rel g-hidden-sm-down g-mr-5">
                    <a title="New requests" class="d-block text-uppercase u-header-icon-v1 g-pos-rel g-width-40 g-height-40 rounded-circle g-font-size-20" href="#!">
                        <span class="u-badge-v1 g-top-7 g-right-7 g-width-18 g-height-18 g-bg-primary g-font-size-10 g-color-white rounded-circle p-0">7</span>
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
                            <li class="g-hidden-sm-up g-mb-10">
                                <a class="media g-py-5 g-px-20" href="#!">
                    <span class="d-flex align-self-center g-pos-rel g-mr-12">
          <span class="u-badge-v1 g-top-minus-3 g-right-minus-3 g-width-18 g-height-18 g-bg-lightblue-v5 g-font-size-10 g-color-white rounded-circle p-0">10</span>
                    <i class="hs-admin-comment-alt"></i>
                    </span>
                                    <span class="media-body align-self-center">Unread Messages</span>
                                </a>
                            </li>
                            <li class="g-hidden-sm-up g-mb-10">
                                <a class="media g-py-5 g-px-20" href="#!">
                    <span class="d-flex align-self-center g-mr-12">
          <i class="hs-admin-bell"></i>
        </span>
                                    <span class="media-body align-self-center">Notifications</span>
                                </a>
                            </li>
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
                <!-- Dashboards -->
                <li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--top-level-menu-item u-side-nav-opened has-active">
                    <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="#!" data-hssm-target="#subMenu1">
              <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
      <i class="hs-admin-server"></i>
    </span>
                        <span class="media-body align-self-center">Dashboards</span>
                        <span class="d-flex align-self-center u-side-nav--control-icon">
      <i class="hs-admin-angle-right"></i>
    </span>
                        <span class="u-side-nav--has-sub-menu__indicator"></span>
                    </a>

                    <!-- Dashboards: Submenu-1 -->
                    <ul id="subMenu1" class="u-sidebar-navigation-v1-menu u-side-nav--second-level-menu mb-0" style="display: block;">
                        <!-- Dashboards v1 -->
                        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
                            <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12 active" href="dashboards/dashboard-v1.html">
                  <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
          <i class="hs-admin-infinite"></i>
        </span>
                                <span class="media-body align-self-center">Dashboards v1</span>
                            </a>
                        </li>
                        <!-- End Dashboards v1 -->

                        <!-- Dashboards v2 -->
                        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
                            <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="dashboards/dashboard-v2.html">
                  <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
          <i class="hs-admin-blackboard"></i>
        </span>
                                <span class="media-body align-self-center">Dashboards v2</span>
                            </a>
                        </li>
                        <!-- End Dashboards v2 -->

                        <!-- Dashboards v3 -->
                        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
                            <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="dashboards/dashboard-v3.html">
                  <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
          <i class="hs-admin-harddrive"></i>
        </span>
                                <span class="media-body align-self-center">Dashboards v3</span>
                            </a>
                        </li>
                        <!-- End Dashboards v3 -->

                        <!-- Dashboards v4 -->
                        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
                            <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="dashboards/dashboard-v4.html">
                  <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
          <i class="hs-admin-harddrive"></i>
        </span>
                                <span class="media-body align-self-center">Dashboards v4</span>
                            </a>
                        </li>
                        <!-- End Dashboards v4 -->
                    </ul>
                    <!-- End Dashboards: Submenu-1 -->
                </li>
                <!-- End Dashboards -->

                <!-- Layouts Settings -->
                <li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--top-level-menu-item">
                    <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="#!" data-hssm-target="#subMenu2">
              <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
      <i class="hs-admin-settings"></i>
    </span>
                        <span class="media-body align-self-center">Layouts Settings</span>
                        <span class="d-flex align-self-center u-side-nav--control-icon">
      <i class="hs-admin-angle-right"></i>
    </span>
                        <span class="u-side-nav--has-sub-menu__indicator"></span>
                    </a>

                    <!-- Layouts Settings: Submenu-1 -->
                    <ul id="subMenu2" class="u-sidebar-navigation-v1-menu u-side-nav--second-level-menu mb-0">
                        <!-- Header Static -->
                        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
                            <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="layout-settings/header-static.html">
                  <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
          <i class="hs-admin-layout-media-center-alt"></i>
        </span>
                                <span class="media-body align-self-center">Header Static</span>
                            </a>
                        </li>
                        <!-- End Header Static -->

                        <!-- Hide Sidebar -->
                        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
                            <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="layout-settings/sidebar-hide.html">
                  <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
          <i class="hs-admin-layout-sidebar-none"></i>
        </span>
                                <span class="media-body align-self-center">Hide Sidebar</span>
                            </a>
                        </li>
                        <!-- End Hide Sidebar -->

                        <!-- Light Layout -->
                        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
                            <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="layout-settings/layout-light.html">
                  <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
          <i class="hs-admin-layout-media-left-alt"></i>
        </span>
                                <span class="media-body align-self-center">Light Layout</span>
                            </a>
                        </li>
                        <!-- End Light Layout -->

                        <!-- Dark Layout: body v.2 -->
                        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
                            <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="layout-settings/layout-dark-body-v2.html">
                  <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
          <i class="hs-admin-layout-media-center-alt"></i>
        </span>
                                <span class="media-body align-self-center">Dark Layout: body v.2</span>
                            </a>
                        </li>
                        <!-- End Dark Layout: body v.2 -->

                        <!-- Light Layout: body v.2 -->
                        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
                            <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="layout-settings/layout-light-body-v2.html">
                  <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
          <i class="hs-admin-layout-media-center-alt"></i>
        </span>
                                <span class="media-body align-self-center">Light Layout: body v.2</span>
                            </a>
                        </li>
                        <!-- End Light Layout: body v.2 -->
                    </ul>
                    <!-- End Layouts Settings: Submenu-1 -->
                </li>
                <!-- End Layouts Settings -->

                <!-- App Views -->
                <li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--top-level-menu-item">
                    <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="#!" data-hssm-target="#subMenu4">
              <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
      <i class="hs-admin-layers"></i>
    </span>
                        <span class="media-body align-self-center">App Views</span>
                        <span class="d-flex align-self-center u-side-nav--control-icon">
      <i class="hs-admin-angle-right"></i>
    </span>

                        <span class="u-side-nav--has-sub-menu__indicator"></span>
                    </a>

                    <!-- App Views: Submenu-1 -->
                    <ul id="subMenu4" class="u-sidebar-navigation-v1-menu u-side-nav--second-level-menu mb-0">
                        <!-- Profile Pages -->
                        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--second-level-menu-item">
                            <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="#!" data-hssm-target="#subMenu4Profiles">
                  <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
          <i class="hs-admin-list"></i>
        </span>
                                <span class="media-body align-self-center">Profile Pages</span>
                                <span class="d-flex align-self-center u-side-nav--control-icon">
          <i class="hs-admin-angle-right"></i>
        </span>
                            </a>

                            <!-- Menu Leveles: Submenu-2 -->
                            <ul id="subMenu4Profiles" class="u-side-nav--third-level-menu">
                                <!-- Main -->
                                <li class="u-side-nav--third-level-menu-item">
                                    <a class="u-side-nav--third-level-menu-link u-side-nav--hide-on-hidden g-pl-8 g-pr-15 g-py-6" href="app-views/app-profile.html">Profile Information</a>
                                </li>
                                <!-- End Main -->

                                <!-- Biography -->
                                <li class="u-side-nav--third-level-menu-item">
                                    <a class="u-side-nav--third-level-menu-link u-side-nav--hide-on-hidden g-pl-8 g-pr-15 g-py-6" href="app-views/app-profile-biography.html">Biography</a>
                                </li>
                                <!-- End Biography -->

                                <!-- Interests -->
                                <li class="u-side-nav--third-level-menu-item">
                                    <a class="u-side-nav--third-level-menu-link u-side-nav--hide-on-hidden g-pl-8 g-pr-15 g-py-6" href="app-views/app-profile-interests.html">Interests</a>
                                </li>
                                <!-- End Interests -->

                                <!-- Mobile -->
                                <li class="u-side-nav--third-level-menu-item">
                                    <a class="u-side-nav--third-level-menu-link u-side-nav--hide-on-hidden g-pl-8 g-pr-15 g-py-6" href="app-views/app-profile-mobile.html">Mobile</a>
                                </li>
                                <!-- End Mobile -->

                                <!-- Photos & Videos -->
                                <li class="u-side-nav--third-level-menu-item">
                                    <a class="u-side-nav--third-level-menu-link u-side-nav--hide-on-hidden g-pl-8 g-pr-15 g-py-6" href="app-views/app-profile-photos-and-videos.html">Photos &amp; Videos</a>
                                </li>
                                <!-- End Photos & Videos -->

                                <!-- Payment Methods -->
                                <li class="u-side-nav--third-level-menu-item">
                                    <a class="u-side-nav--third-level-menu-link u-side-nav--hide-on-hidden g-pl-8 g-pr-15 g-py-6" href="app-views/app-profile-payment-methods.html">Payment Methods</a>
                                </li>
                                <!-- End Payment Methods -->

                                <!-- Transactions -->
                                <li class="u-side-nav--third-level-menu-item">
                                    <a class="u-side-nav--third-level-menu-link u-side-nav--hide-on-hidden g-pl-8 g-pr-15 g-py-6" href="app-views/app-profile-transactions.html">Transactions</a>
                                </li>
                                <!-- End Transactions -->

                                <!-- Security -->
                                <li class="u-side-nav--third-level-menu-item">
                                    <a class="u-side-nav--third-level-menu-link u-side-nav--hide-on-hidden g-pl-8 g-pr-15 g-py-6" href="app-views/app-profile-security.html">Security</a>
                                </li>
                                <!-- End Security -->

                                <!-- Upgrade My Plan -->
                                <li class="u-side-nav--third-level-menu-item">
                                    <a class="u-side-nav--third-level-menu-link u-side-nav--hide-on-hidden g-pl-8 g-pr-15 g-py-6" href="app-views/app-profile-upgrade-plan.html">Upgrade My Plan</a>
                                </li>
                                <!-- End Upgrade My Plan -->

                                <!-- Invited Friends -->
                                <li class="u-side-nav--third-level-menu-item">
                                    <a class="u-side-nav--third-level-menu-link u-side-nav--hide-on-hidden g-pl-8 g-pr-15 g-py-6" href="app-views/app-profile-invite.html">Invited Friends</a>
                                </li>
                                <!-- End Invited Friends -->

                                <!-- Connected Accounts -->
                                <li class="u-side-nav--third-level-menu-item">
                                    <a class="u-side-nav--third-level-menu-link u-side-nav--hide-on-hidden g-pl-8 g-pr-15 g-py-6" href="app-views/app-profile-connected-accounts.html">Connected Accounts</a>
                                </li>
                                <!-- End Connected Accounts -->
                            </ul>
                            <!-- End Menu Leveles: Submenu-2 -->
                        </li>
                        <!-- End Profile Pages -->

                        <!-- Projects -->
                        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
                            <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="app-views/app-projects.html">
                  <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
          <i class="hs-admin-layout-media-left"></i>
        </span>
                                <span class="media-body align-self-center">Projects</span>
                            </a>
                        </li>
                        <!-- End Projects -->

                        <!-- Chat -->
                        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
                            <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="app-views/app-chat.html">
                  <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
          <i class="hs-admin-comments"></i>
        </span>
                                <span class="media-body align-self-center">Chat</span>
                            </a>
                        </li>
                        <!-- End Chat -->

                        <!-- File Manager -->
                        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
                            <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="app-views/app-file-manager.html">
                  <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
          <i class="hs-admin-folder"></i>
        </span>
                                <span class="media-body align-self-center">File Manager</span>
                                <span class="d-flex align-self-center">
          <span class="d-inline-block text-center g-min-width-35 g-bg-lightred-v2 g-font-size-12 g-color-white g-rounded-15 g-px-8 g-py-1">10</span>
                  </span>
                            </a>
                        </li>
                        <!-- End File Manager -->

                        <!-- User Contacts -->
                        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
                            <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="app-views/app-contacts.html">
                  <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
          <i class="hs-admin-id-badge"></i>
        </span>
                                <span class="media-body align-self-center">User Contacts</span>
                            </a>
                        </li>
                        <!-- End User Contacts -->
                    </ul>
                    <!-- End App Views: Submenu-1 -->
                </li>
                <!-- End App Views -->

                <!-- Forms -->
                <li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--top-level-menu-item">
                    <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="#!" data-hssm-target="#subMenu7">
              <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
      <i class="hs-admin-pencil-alt"></i>
    </span>
                        <span class="media-body align-self-center">Forms</span>
                        <span class="d-flex align-self-center u-side-nav--control-icon">
      <i class="hs-admin-angle-right"></i>
    </span>

                        <span class="u-side-nav--has-sub-menu__indicator"></span>
                    </a>

                    <!-- Forms: Submenu-1 -->
                    <ul id="subMenu7" class="u-sidebar-navigation-v1-menu u-side-nav--second-level-menu mb-0">
                        <!-- Elements -->
                        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--second-level-menu-item">
                            <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="#!" data-hssm-target="#subMenu7Elements">
                  <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
          <i class="hs-admin-list"></i>
        </span>
                                <span class="media-body align-self-center">Elements</span>
                                <span class="d-flex align-self-center u-side-nav--control-icon">
          <i class="hs-admin-angle-right"></i>
        </span>
                            </a>

                            <!-- Menu Leveles: Submenu-2 -->
                            <ul id="subMenu7Elements" class="u-side-nav--third-level-menu">
                                <!-- Text Inputs -->
                                <li class="u-side-nav--third-level-menu-item">
                                    <a class="u-side-nav--third-level-menu-link u-side-nav--hide-on-hidden g-pl-8 g-pr-15 g-py-6" href="forms/forms-elemets-text-inputs.html">Text Inputs</a>
                                </li>
                                <!-- End Text Inputs -->

                                <!-- Textareas -->
                                <li class="u-side-nav--third-level-menu-item">
                                    <a class="u-side-nav--third-level-menu-link u-side-nav--hide-on-hidden g-pl-8 g-pr-15 g-py-6" href="forms/forms-elemets-textareas.html">Textareas</a>
                                </li>
                                <!-- End Textareas -->

                                <!-- Selects -->
                                <li class="u-side-nav--third-level-menu-item">
                                    <a class="u-side-nav--third-level-menu-link u-side-nav--hide-on-hidden g-pl-8 g-pr-15 g-py-6" href="forms/forms-elemets-selects.html">Selects</a>
                                </li>
                                <!-- End Selects -->

                                <!-- Advanced Selects -->
                                <li class="u-side-nav--third-level-menu-item">
                                    <a class="u-side-nav--third-level-menu-link u-side-nav--hide-on-hidden g-pl-8 g-pr-15 g-py-6" href="forms/forms-elemets-advanced-selects.html">Advanced Selects</a>
                                </li>
                                <!-- End Advanced Selects -->

                                <!-- Checkboxes &amp; Radios -->
                                <li class="u-side-nav--third-level-menu-item">
                                    <a class="u-side-nav--third-level-menu-link u-side-nav--hide-on-hidden g-pl-8 g-pr-15 g-py-6" href="forms/forms-elemets-checkboxes-radios.html">Checkboxes &amp; Radios</a>
                                </li>
                                <!-- End Checkboxes &amp; Radios -->

                                <!-- Toggles -->
                                <li class="u-side-nav--third-level-menu-item">
                                    <a class="u-side-nav--third-level-menu-link u-side-nav--hide-on-hidden g-pl-8 g-pr-15 g-py-6" href="forms/forms-elemets-toggles.html">Toggles</a>
                                </li>
                                <!-- End Toggles -->

                                <!-- File Inputs -->
                                <li class="u-side-nav--third-level-menu-item">
                                    <a class="u-side-nav--third-level-menu-link u-side-nav--hide-on-hidden g-pl-8 g-pr-15 g-py-6" href="forms/forms-elemets-file-inputs.html">File Inputs</a>
                                </li>
                                <!-- End File Inputs -->

                                <!-- Sliders -->
                                <li class="u-side-nav--third-level-menu-item">
                                    <a class="u-side-nav--third-level-menu-link u-side-nav--hide-on-hidden g-pl-8 g-pr-15 g-py-6" href="forms/forms-elemets-sliders.html">Sliders</a>
                                </li>
                                <!-- End Sliders -->

                                <!-- Text Inputs with Tags -->
                                <li class="u-side-nav--third-level-menu-item">
                                    <a class="u-side-nav--third-level-menu-link u-side-nav--hide-on-hidden g-pl-8 g-pr-15 g-py-6" href="forms/forms-elemets-tags.html">Text Inputs with Tags</a>
                                </li>
                                <!-- End Text Inputs with Tags -->

                                <!-- Ratings -->
                                <li class="u-side-nav--third-level-menu-item">
                                    <a class="u-side-nav--third-level-menu-link u-side-nav--hide-on-hidden g-pl-8 g-pr-15 g-py-6" href="forms/forms-elemets-ratings.html">Ratings</a>
                                </li>
                                <!-- End Ratings -->

                                <!-- Datepickers -->
                                <li class="u-side-nav--third-level-menu-item">
                                    <a class="u-side-nav--third-level-menu-link u-side-nav--hide-on-hidden g-pl-8 g-pr-15 g-py-6" href="forms/forms-elemets-datepickers.html">Datepickers</a>
                                </li>
                                <!-- End Datepickers -->

                                <!-- Quantities -->
                                <li class="u-side-nav--third-level-menu-item">
                                    <a class="u-side-nav--third-level-menu-link u-side-nav--hide-on-hidden g-pl-8 g-pr-15 g-py-6" href="forms/forms-elemets-quantities.html">Quantities</a>
                                </li>
                                <!-- End Quantities -->
                            </ul>
                            <!-- End Menu Leveles: Submenu-2 -->
                        </li>
                        <!-- End Elements -->

                        <!-- Layouts -->
                        <!--     <li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
                <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="#!">
                  <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
                    <i class="hs-admin-layout-media-overlay"></i>
                  </span>
                  <span class="media-body align-self-center">Layouts</span>
                </a>
              </li> -->
                        <!-- End Layouts -->

                        <!-- Validation -->
                        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--second-level-menu-item">
                            <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="#!" data-hssm-target="#subMenu7Validation">
                  <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
          <i class="hs-admin-list"></i>
        </span>
                                <span class="media-body align-self-center">Validation</span>
                                <span class="d-flex align-self-center u-side-nav--control-icon">
          <i class="hs-admin-angle-right"></i>
        </span>
                            </a>

                            <!-- Validation: Submneu -->
                            <ul id="subMenu7Validation" class="u-side-nav--third-level-menu">
                                <!-- States -->
                                <li class="u-side-nav--third-level-menu-item">
                                    <a class="u-side-nav--third-level-menu-link u-side-nav--hide-on-hidden g-pl-8 g-pr-15 g-py-6" href="forms/forms-validation-states.html">States</a>
                                </li>
                                <!-- End States -->
                            </ul>
                            <!-- Validation: Submneu -->
                        </li>
                        <!-- End Validation -->
                    </ul>
                    <!-- End Forms: Submenu-1 -->
                </li>
                <!-- End Forms -->

                <!-- Tables -->
                <li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--top-level-menu-item">
                    <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="#!" data-hssm-target="#subMenu8">
              <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
      <i class="hs-admin-layout-grid-3"></i>
    </span>
                        <span class="media-body align-self-center">Tables</span>
                        <span class="d-flex align-self-center u-side-nav--control-icon">
      <i class="hs-admin-angle-right"></i>
    </span>

                        <span class="u-side-nav--has-sub-menu__indicator"></span>
                    </a>

                    <!-- Tables: Submenu-1 -->
                    <ul id="subMenu8" class="u-sidebar-navigation-v1-menu u-side-nav--second-level-menu mb-0">
                        <!-- Basic Tables -->
                        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
                            <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="tables/tables-basic.html">
                  <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
          <i class="hs-admin-layout-list-thumb"></i>
        </span>
                                <span class="media-body align-self-center">Basic Tables</span>
                            </a>
                        </li>
                        <!-- End Basic Tables -->

                        <!-- Table Designs -->
                        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
                            <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="tables/tables-complex.html">
                  <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
          <i class="hs-admin-layout-media-overlay-alt-2"></i>
        </span>
                                <span class="media-body align-self-center">Complex Tables</span>
                            </a>
                        </li>
                        <!-- End Table Designs -->
                    </ul>
                    <!-- End Tables: Submenu-1 -->
                </li>
                <!-- End Tables -->

                <!-- Panels/Cards -->
                <li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--top-level-menu-item">
                    <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="#!" data-hssm-target="#subMenu6">
              <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
      <i class="hs-admin-layout-media-center-alt"></i>
    </span>
                        <span class="media-body align-self-center">Panels/Cards</span>
                        <span class="d-flex align-self-center u-side-nav--control-icon">
      <i class="hs-admin-angle-right"></i>
    </span>

                        <span class="u-side-nav--has-sub-menu__indicator"></span>
                    </a>

                    <!-- Panels/Cards: Submenu-1 -->
                    <ul id="subMenu6" class="u-sidebar-navigation-v1-menu u-side-nav--second-level-menu mb-0">
                        <!-- Panel Variations -->
                        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
                            <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="panels/panel-variations.html">
                  <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
          <i class="hs-admin-layout-cta-btn-left"></i>
        </span>
                                <span class="media-body align-self-center">Panel Variations</span>
                            </a>
                        </li>
                        <!-- End Panel Variations -->

                        <!-- Panel with Tabs -->
                        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
                            <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="panels/panel-options.html">
                  <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
          <i class="hs-admin-layout-cta-right"></i>
        </span>
                                <span class="media-body align-self-center">Panel's Options</span>
                            </a>
                        </li>
                        <!-- End Panel with Tabs -->

                        <!-- Panel Options
              <li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
                <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="panels/panel-options.html">
                  <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
                    <i class="hs-admin-layout-cta-center"></i>
                  </span>
                  <span class="media-body align-self-center">Panel Options</span>
                </a>
              </li>
              End Panel Options -->
                    </ul>
                    <!-- End Panels/Cards: Submenu-1 -->
                </li>
                <!-- End Panels/Cards -->

                <!-- Notifications -->
                <li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--top-level-menu-item">
                    <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="#!" data-hssm-target="#subMenu9">
              <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
      <i class="hs-admin-layout-list-thumb"></i>
    </span>
                        <span class="media-body align-self-center">Notifications</span>
                        <span class="d-flex align-self-center u-side-nav--control-icon">
      <i class="hs-admin-angle-right"></i>
    </span>

                        <span class="u-side-nav--has-sub-menu__indicator"></span>
                    </a>

                    <!-- Notifications: Submenu-1 -->
                    <ul id="subMenu9" class="u-sidebar-navigation-v1-menu u-side-nav--second-level-menu mb-0">
                        <!-- Colorful Notifications -->
                        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
                            <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="notifications/notifications-colorful.html">
                  <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
          <i class="hs-admin-layout-cta-btn-right"></i>
        </span>
                                <span class="media-body align-self-center">Colorful Notifications</span>
                            </a>
                        </li>
                        <!-- End Colorful Notifications -->

                        <!-- Light Notifications -->
                        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
                            <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="notifications/notifications-light.html">
                  <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
          <i class="hs-admin-layout-cta-btn-left"></i>
        </span>
                                <span class="media-body align-self-center">Light Notifications</span>
                            </a>
                        </li>
                        <!-- End Light Notifications -->

                        <!-- Dark Notifications -->
                        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
                            <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="notifications/notifications-dark.html">
                  <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
          <i class="hs-admin-layout-cta-center"></i>
        </span>
                                <span class="media-body align-self-center">Dark Notifications</span>
                            </a>
                        </li>
                        <!-- End Dark Notifications -->

                        <!-- Notifications Builder -->
                        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
                            <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="notifications/notifications-builder.html">
                  <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
          <i class="hs-admin-infinite"></i>
        </span>
                                <span class="media-body align-self-center">Notifications Builder</span>
                            </a>
                        </li>
                        <!-- End Notifications Builder -->
                    </ul>
                    <!-- Notifications: Submenu-1 -->
                </li>
                <!-- End Notifications -->

                <!-- Metrics -->
                <li class="u-sidebar-navigation-v1-menu-item u-side-nav--top-level-menu-item">
                    <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="metrics/metrics.html">
              <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
      <i class="hs-admin-pie-chart"></i>
    </span>
                        <span class="media-body align-self-center">Metrics</span>
                    </a>
                </li>
                <!-- End Metrics -->

                <!-- UI Components -->
                <li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--top-level-menu-item">
                    <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="#!" data-hssm-target="#subMenu5">
              <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
      <i class="hs-admin-infinite"></i>
    </span>
                        <span class="media-body align-self-center">UI Components</span>
                        <span class="d-flex align-self-center u-side-nav--control-icon">
      <i class="hs-admin-angle-right"></i>
    </span>
                        <span class="u-side-nav--has-sub-menu__indicator"></span>
                    </a>

                    <!-- UI Components: Submenu -->
                    <ul id="subMenu5" class="u-sidebar-navigation-v1-menu u-side-nav--second-level-menu mb-0">
                        <!-- Icons -->
                        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
                            <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="ui-components/ui-icons.html">
                  <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
          <i class="hs-admin-wand"></i>
        </span>
                                <span class="media-body align-self-center">Icons</span>
                            </a>
                        </li>
                        <!-- End Icons -->

                        <!-- Buttons -->
                        <!--     <li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
                <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="ui-components/ui-buttons.html">
                  <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
                    <i class="hs-admin-view-grid"></i>
                  </span>
                  <span class="media-body align-self-center">Buttons</span>
                </a>
              </li> -->
                        <!-- End Buttons -->
                    </ul>
                    <!-- End UI Components: Submenu -->
                </li>
                <!-- End UI Components -->

                <!-- Timeline History -->
                <li class="u-sidebar-navigation-v1-menu-item u-side-nav--top-level-menu-item">
                    <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="pages/pages-timeline.html">
              <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
      <span class="u-badge-v2--xs u-badge--bottom-right g-bg-lightblue-v5"></span>
              <i class="hs-admin-timer"></i>
              </span>
                        <span class="media-body align-self-center">Timeline History</span>
                        <span class="d-flex align-self-center">
      <span class="d-inline-block text-center g-min-width-35 g-bg-lightblue-v5 g-font-size-12 g-color-white g-rounded-15 g-px-8 g-py-1">5</span>
              </span>
                    </a>
                </li>
                <!-- End Timeline History -->

                <!-- Menu Leveles -->
                <li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--top-level-menu-item">
                    <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="#!" data-hssm-target="#subMenuLevels1">
              <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
      <i class="hs-admin-list-ol"></i>
    </span>
                        <span class="media-body align-self-center">Menu Levels</span>
                        <span class="d-flex align-self-center u-side-nav--control-icon">
      <i class="hs-admin-angle-right"></i>
    </span>
                        <span class="u-side-nav--has-sub-menu__indicator"></span>
                    </a>

                    <!-- Menu Leveles: Submenu-1 -->
                    <ul id="subMenuLevels1" class="u-sidebar-navigation-v1-menu u-side-nav--second-level-menu mb-0">
                        <!-- Sub Level 2 -->
                        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
                            <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="#!">
                  <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
          <i class="hs-admin-list"></i>
        </span>
                                <span class="media-body align-self-center">Sub Level 2</span>
                            </a>
                        </li>
                        <!-- End Sub Level 2 -->

                        <!-- Sub Level 2 -->
                        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--second-level-menu-item">
                            <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="#!" data-hssm-target="#subMenuLevels2">
                  <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
          <i class="hs-admin-list"></i>
        </span>
                                <span class="media-body align-self-center">Sub Level 2</span>
                                <span class="d-flex align-self-center u-side-nav--control-icon">
          <i class="hs-admin-angle-right"></i>
        </span>
                            </a>

                            <!-- Menu Leveles: Submenu-2 -->
                            <ul id="subMenuLevels2" class="u-side-nav--third-level-menu">
                                <!-- Sub Level 3 -->
                                <li class="u-side-nav--third-level-menu-item u-side-nav--has-sub-menu">
                                    <a class="media d-flex u-side-nav--third-level-menu-link u-side-nav--hide-on-hidden g-pl-8 g-pr-15 g-py-6" href="#!" data-hssm-target="#subMenuLevels3">
                                        <span class="media-body align-self-center">Sub Level 3</span>
                                        <span class="d-flex align-self-center u-side-nav--control-icon">
              <i class="hs-admin-angle-right"></i>
            </span>
                                    </a>

                                    <!-- Menu Leveles: Submenu-3 -->
                                    <ul id="subMenuLevels3" class="u-side-nav--fourth-level-menu">
                                        <!-- Sub Level 4 -->
                                        <li class="u-side-nav--fourth-level-menu-item">
                                            <a class="u-side-nav--fourth-level-menu-link g-px-15 g-py-6" href="#!">
                                                <span class="media-body align-self-center">Sub Level 4</span>
                                            </a>
                                        </li>
                                        <!-- End Sub Level 4 -->

                                        <!-- Sub Level 4 -->
                                        <li class="u-side-nav--fourth-level-menu-item">
                                            <a class="u-side-nav--fourth-level-menu-link g-px-15 g-py-6" href="#!">
                                                <span class="media-body align-self-center">Sub Level 4</span>
                                            </a>
                                        </li>
                                        <!-- End Sub Level 4 -->

                                        <!-- Sub Level 4 -->
                                        <li class="u-side-nav--fourth-level-menu-item">
                                            <a class="u-side-nav--fourth-level-menu-link g-px-15 g-py-6" href="#!">
                                                <span class="media-body align-self-center">Sub Level 4</span>
                                            </a>
                                        </li>
                                        <!-- End Sub Level 4 -->
                                    </ul>
                                    <!-- End Menu Leveles: Submenu-3 -->
                                </li>
                                <!-- End Sub Level 3 -->

                                <!-- Sub Level 3 -->
                                <li class="u-side-nav--third-level-menu-item">
                                    <a class="u-side-nav--third-level-menu-link u-side-nav--hide-on-hidden g-pl-8 g-pr-15 g-py-6" href="#!">Sub Level 3</a>
                                </li>
                                <!-- End Sub Level 3 -->
                            </ul>
                            <!-- End Menu Leveles: Submenu-2 -->
                        </li>
                        <!-- End Sub Level 2 -->

                        <!-- Sub Level 2 -->
                        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--second-level-menu-item">
                            <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="#!">
                  <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
          <i class="hs-admin-list"></i>
        </span>
                                <span class="media-body align-self-center">Sub Level 2</span>
                            </a>
                        </li>
                        <!-- End Sub Level 2 -->
                    </ul>
                    <!-- End Menu Leveles: Submenu-1 -->
                </li>
                <!-- End Menu Leveles -->

                <!-- Packages -->
                <li class="u-sidebar-navigation-v1-menu-item u-side-nav--top-level-menu-item">
                    <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="packages.html">
              <span class="d-flex align-self-center g-font-size-18 g-mr-18">
      <i class="hs-admin-medall"></i>
    </span>
                        <span class="media-body align-self-center">Packages</span>
                    </a>
                </li>
                <!-- End Packages -->

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