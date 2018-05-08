<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Title -->
    <title>Main Dashboard</title>

    <?php require_once('common_head.php'); ?>
    <!-- JS Plugins Init. -->
    <script>
        $(document).on('ready', function () {
            // initialization of custom select
            $('.js-select').selectpicker();

            // initialization of sidebar navigation component
            $.HSCore.components.HSSideNav.init('.js-side-nav');

            // initialization of charts
            $.HSCore.components.HSAreaChart.init('.js-area-chart');

            // initialization of range datepicker
            $.HSCore.components.HSRangeDatepicker.init('#rangeDatepicker2');

            // initialization of HSDropdown component
            $.HSCore.components.HSDropdown.init($('[data-dropdown-target]'), {dropdownHideOnScroll: false});

            // initialization of custom scrollbar
            $.HSCore.components.HSScrollBar.init($('.js-custom-scroll'));

        });
    </script>

</head>

<body>
<?php require_once('common_header.php'); ?>

<main class="container-fluid px-0 g-pt-65">
    <div class="row no-gutters g-pos-rel g-overflow-x-hidden">
        <?php require_once('common_sidebar.php'); ?>

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

            <?php require_once('common_footer.php'); ?>
        </div>
    </div>
</main>

</body>

</html>