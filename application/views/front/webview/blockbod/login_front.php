<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>Require Login</title>
    <?php require_once('common_head.php'); ?>
    <script>

        function front_login(){
            if (submitting){
                return;
            }
            //verify input
            var txt_password = $.trim($('#txt_password').val());
            if (common.isEmpty(txt_password)){
                return;
            }
            var params = {
                password: txt_password
            };
            submitting = true;

            common.ajaxPost('/welcome/front_login', params, function(err_code){
                if (err_code == 200){
                    common.redirect('.');       //reload page
                } else {
                    common.show_alert('Wrong password');
                }
                submitting = false;
            }, function(err){
                common.show_alert('Wrong password');
                submitting = false;
            });
        }

        $(document).on('ready', function () {
           $('#txt_password').unbind('keyup');
            $('#txt_password').keypress(function(e){
                if (e.which == 13){
                    //pressed ENTER
                    front_login();
                }
            });
        });
    </script>
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
                        <div class="g-mb-35">
                            <div class="row justify-content-between">
                                <div class="col align-self-center">
                                    <label class="g-color-gray-dark-v2 g-font-weight-600 g-font-size-13">Password (*):</label>
                                </div>
                            </div>
                            <input id="txt_password" class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover rounded g-py-15 g-px-15 mb-3" type="password"/>
                            <div class="row justify-content-between">
                                <div class="col-4 align-self-center">
                                    <button class="btn btn-md u-btn-primary rounded g-py-13 g-px-25" type="button" onclick="front_login();">Login</button>
                                </div>
                            </div>
                        </div>
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
