<!-- Required Meta Tags Always Come First -->
<meta charset="utf-8"/>
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

<!-- CSS Unify -->
<link rel="stylesheet" href="/public/unity_assets/css/unify-admin.css"/>

<!-- CSS Customization -->
<link rel="stylesheet" href="/public/admin/css/admin_custom.css"/>

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
<!-- JS Unify -->
<script src="/public/unity_assets/js/hs.core.js"></script>
<script src="/public/unity_assets/js/components/hs.side-nav.js"></script>
<script src="/public/unity_assets/js/components/hs.range-datepicker.js"></script>
<script src="/public/unity_assets/js/components/hs.datepicker.js"></script>
<script src="/public/unity_assets/js/components/hs.dropdown.js"></script>
<script src="/public/unity_assets/js/components/hs.scrollbar.js"></script>
<script src="/public/unity_assets/js/components/hs.area-chart.js"></script>
<script src="/public/unity_assets/js/helpers/hs.focus-state.js"></script>
<script src="/public/unity_assets/js/components/hs.popup.js"></script>
<!-- JS Global Compulsory -->
<script src="/public/unity_assets/vendor/popper.min.js"></script>

<script src="/public/js/sha256.min.js"></script>
<script src="/public/js/common.js"></script>
<script src="/public/admin/js/admin_constant.js"></script>
<script src="/public/js/constant.js"></script>
<script src="/public/admin/js/admin_uri.js"></script>

<script src="/public/admin/js/admin_common.js"></script>

<!-- JS Plugins Init. -->
<script>
    $(document).on('ready', function () {
        // initialization of sidebar navigation component
        $.HSCore.components.HSSideNav.init('.js-side-nav');

        // initialization of HSDropdown component
        $.HSCore.components.HSDropdown.init($('[data-dropdown-target]'), {dropdownHideOnScroll: false});

        // initialization of custom scrollbar
        $.HSCore.components.HSScrollBar.init($('.js-custom-scroll'));

    });
</script>