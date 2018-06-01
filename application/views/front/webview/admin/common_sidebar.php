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

        <!-- Papers -->
        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--top-level-menu-item">
            <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="#!" data-hssm-target="#subMenu2">
                        <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
                            <i class="hs-admin-file"></i>
                        </span>
                <span class="media-body align-self-center">My Papers</span>
                <span class="d-flex align-self-center u-side-nav--control-icon">
                            <i class="hs-admin-angle-right"></i>
                        </span>
            </a>
            <!-- Forms: Submenu-1 -->
            <ul id="subMenu2" class="u-sidebar-navigation-v1-menu u-side-nav--second-level-menu mb-0">
                <li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--second-level-menu-item">
                    <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="/admin-paper/create">
                                <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
                                    <i class="hs-admin-plus"></i>
                                </span>
                        <span class="media-body align-self-center">Create new</span>
                    </a>
                </li>
                <li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--second-level-menu-item">
                    <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="/admin-paper/show_list">
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
        <!-- My contents -->
        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--top-level-menu-item">
            <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="#!" data-hssm-target="#subMenu_my_content">
                        <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
                            <i class="hs-admin-agenda"></i>
                        </span>
                <span class="media-body align-self-center">My Contents</span>
                <span class="d-flex align-self-center u-side-nav--control-icon">
                            <i class="hs-admin-angle-right"></i>
                        </span>
            </a>
            <!-- Forms: Submenu-1 -->
            <ul id="subMenu_my_content" class="u-sidebar-navigation-v1-menu u-side-nav--second-level-menu mb-0">
                <li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--second-level-menu-item">
                    <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="/admin-my-content/create">
                                <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
                                    <i class="hs-admin-plus"></i>
                                </span>
                        <span class="media-body align-self-center">Create new</span>
                    </a>
                </li>
                <li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--second-level-menu-item">
                    <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="/admin-my-content/show_list">
                                <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
                                    <i class="hs-admin-list"></i>
                                </span>
                        <span class="media-body align-self-center">List</span>
                    </a>
                </li>
            </ul>
            <!-- End Forms: Submenu-1 -->
        </li>
        <!-- End My contents -->
        <!-- Books -->
        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--top-level-menu-item">
            <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="#!" data-hssm-target="#subMenu7">
                        <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
                            <i class="hs-admin-book"></i>
                        </span>
                <span class="media-body align-self-center">Books</span>
                <span class="d-flex align-self-center u-side-nav--control-icon">
                            <i class="hs-admin-angle-right"></i>
                        </span>
            </a>
            <!-- Forms: Submenu-1 -->
            <ul id="subMenu7" class="u-sidebar-navigation-v1-menu u-side-nav--second-level-menu mb-0">
                <li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--second-level-menu-item">
                    <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="/admin-book/create">
                                <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
                                    <i class="hs-admin-list"></i>
                                </span>
                        <span class="media-body align-self-center">Create new</span>
                    </a>
                </li>
                <li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--second-level-menu-item">
                    <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="/admin-book/show_list">
                                <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
                                    <i class="hs-admin-list"></i>
                                </span>
                        <span class="media-body align-self-center">List</span>
                    </a>
                </li>
            </ul>
            <!-- End Forms: Submenu-1 -->
        </li>
        <!-- End Books -->
        <!-- Articles -->
        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--top-level-menu-item">
            <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="#!" data-hssm-target="#subMenu1">
                        <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
                            <i class="hs-admin-pencil-alt"></i>
                        </span>
                <span class="media-body align-self-center">Articles</span>
                <span class="d-flex align-self-center u-side-nav--control-icon">
                            <i class="hs-admin-angle-right"></i>
                        </span>
            </a>
            <!-- Forms: Submenu-1 -->
            <ul id="subMenu1" class="u-sidebar-navigation-v1-menu u-side-nav--second-level-menu mb-0">
                <li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--second-level-menu-item">
                    <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="#!">
                                <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
                                    <i class="hs-admin-agenda"></i>
                                </span>
                        <span class="media-body align-self-center">Contribution news</span>
                    </a>
                </li>
                <li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--second-level-menu-item">
                    <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="/admin-article/collection_list">
                                <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
                                    <i class="hs-admin-view-list-alt"></i>
                                </span>
                        <span class="media-body align-self-center">Ext. news List</span>
                    </a>
                </li>
                <li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--second-level-menu-item">
                    <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="/admin-article/show_crawl_time">
                                <span class="d-flex align-self-center g-mr-15 g-mt-minus-1">
                                    <i class="hs-admin-server"></i>
                                </span>
                        <span class="media-body align-self-center">Ext. sites</span>
                    </a>
                </li>
            </ul>
            <!-- End Forms: Submenu-1 -->
        </li>
        <!-- End Articles -->
        <!-- Category -->
        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--top-level-menu-item">
            <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="#!" data-hssm-target="#subMenu3">
                        <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
                            <i class="hs-admin-layers"></i>
                        </span>
                <span class="media-body align-self-center">Category</span>
                <span class="d-flex align-self-center u-side-nav--control-icon">
                            <i class="hs-admin-angle-right"></i>
                        </span>
            </a>
            <!-- Forms: Submenu-1 -->
            <ul id="subMenu3" class="u-sidebar-navigation-v1-menu u-side-nav--second-level-menu mb-0">
                <li class="u-sidebar-navigation-v1-menu-item u-side-nav--has-sub-menu u-side-nav--second-level-menu-item">
                    <a class="media u-side-nav--second-level-menu-link g-px-15 g-py-12" href="/admin-category/internal_list">
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
            <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="#!" data-hssm-target="#subMenu4">
                        <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
                            <i class="hs-admin-notepad"></i>
                        </span>
                <span class="media-body align-self-center">Advertisements</span>
                <span class="d-flex align-self-center u-side-nav--control-icon">
                            <i class="hs-admin-angle-right"></i>
                        </span>
            </a>
            <!-- Forms: Submenu-1 -->
            <ul id="subMenu4" class="u-sidebar-navigation-v1-menu u-side-nav--second-level-menu mb-0">
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
            <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="#!" data-hssm-target="#subMenu5">
                        <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
                            <i class="hs-admin-shopping-cart"></i>
                        </span>
                <span class="media-body align-self-center">Sales</span>
                <span class="d-flex align-self-center u-side-nav--control-icon">
                            <i class="hs-admin-angle-right"></i>
                        </span>
            </a>
            <!-- Forms: Submenu-1 -->
            <ul id="subMenu5" class="u-sidebar-navigation-v1-menu u-side-nav--second-level-menu mb-0">
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

        <!-- Comments -->
        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--top-level-menu-item">
            <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="#!">
                        <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
                            <i class="hs-admin-comment-alt"></i>
                        </span>
                <span class="media-body align-self-center">Comments</span>
            </a>
        </li>
        <!-- Subscribe -->
        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--top-level-menu-item">
            <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="#!">
                        <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
                            <i class="hs-admin-home"></i>
                        </span>
                <span class="media-body align-self-center">Subscriptions</span>
            </a>
        </li>
        <!-- Message -->
        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--top-level-menu-item">
            <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="#!">
                        <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
                            <i class="hs-admin-email"></i>
                        </span>
                <span class="media-body align-self-center">Messages</span>
            </a>
        </li>
        <!-- Resource -->
        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--top-level-menu-item">
            <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="#!">
                        <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
                            <i class="hs-admin-image"></i>
                        </span>
                <span class="media-body align-self-center">Resources</span>
            </a>
        </li>
        <!-- Newsletter -->
        <li class="u-sidebar-navigation-v1-menu-item u-side-nav--top-level-menu-item">
            <a class="media u-side-nav--top-level-menu-link u-side-nav--hide-on-hidden g-px-15 g-py-12" href="#!">
                        <span class="d-flex align-self-center g-pos-rel g-font-size-18 g-mr-18">
                            <i class="hs-admin-envelope"></i>
                        </span>
                <span class="media-body align-self-center">Newsletter</span>
            </a>
        </li>
    </ul>
</div>
<!-- End Sidebar Nav -->