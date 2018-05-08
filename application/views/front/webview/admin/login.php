<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>Admin Login</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <meta name="author" content="Martin SangDo"/>
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo PUBLIC_FOLDER; ?>img/favicon.ico" type="image/x-icon"/>
    <link rel="icon" href="<?php echo PUBLIC_FOLDER; ?>img/favicon.ico" type="image/x-icon"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="/public/unity_assets/vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="/public/unity_assets/vendor/icon-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/public/unity_assets/vendor/icon-hs/style.css">
    <!-- CSS Unify -->
    <link rel="stylesheet" href="/public/unity_assets/css/unify-core.css">
    <link rel="stylesheet" href="/public/unity_assets/css/unify-components.css">
    <link rel="stylesheet" href="/public/unity_assets/css/unify-globals.css">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="/public/admin/css/admin_custom.css">
    <?php require_once ('common_js.php'); ?>
    <script src="/public/admin/js/login_1.js"></script>

</head>

<body>
<main>
    <!-- Login -->
    <section class="container g-py-100">
        <div class="row justify-content-center">
            <div class="col-sm-8 col-lg-5">
                <div class="g-brd-around g-brd-gray-light-v4 rounded g-py-40 g-px-30">
                    <header class="text-center mb-4">
                        <h2 class="h2 g-color-black g-font-weight-600">Login</h2>
                    </header>

                    <!-- Form -->
                    <form class="g-py-15">
                        <div class="mb-4">
                            <label class="g-color-gray-dark-v2 g-font-weight-600 g-font-size-13">Account (*):</label>
                            <input id="txt_account" class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded g-py-15 g-px-15" type="text" />
                        </div>

                        <div class="g-mb-35">
                            <div class="row justify-content-between">
                                <div class="col align-self-center">
                                    <label class="g-color-gray-dark-v2 g-font-weight-600 g-font-size-13">Password (*):</label>
                                </div>
                            </div>
                            <input id="txt_password" class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded g-py-15 g-px-15 mb-3" type="password"/>
                            <div class="mb-4">
                                <label class="g-color-gray-dark-v2 g-font-weight-600 g-font-size-13">Captcha (*):</label>
                                    <span id="captcha_container"><?php echo $captcha; ?></span> &nbsp;&nbsp;
                                <a href="javascript:void(0);" onclick="loginPage.refresh_captcha();">Refresh</a><br/><br/>
                                <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded g-py-15 g-px-15" type="text" id="txt_captcha"/>
                            </div>
                            <div class="row justify-content-between">
                                <div class="col-4 align-self-center text-right">
                                    <button class="btn btn-md u-btn-primary rounded g-py-13 g-px-25" type="button" onclick="loginPage.process_login();">Login</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- End Form -->
                    <div id="label_message" class="form_mess"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Login -->

    <!-- Copyright Footer -->
    <footer class="g-bg-gray-dark-v1 g-color-white-opacity-0_8 g-py-20">
        <div class="container">
            <div class="row">
                <div class="col-md-8 text-center text-md-left g-mb-10 g-mb-0--md">
                    <div class="d-lg-flex">
                        <small class="d-block g-font-size-default g-mr-10 g-mb-10 g-mb-0--md">2018 &copy; Blockbod</small>
                    </div>
                </div>

            </div>
        </div>
    </footer>
    <!-- End Copyright Footer -->
</main>

<div class="u-outer-spaces-helper"></div>


</body>

</html>
