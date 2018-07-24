<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home banner</title>

    <?php require_once(ABS_ADMIN_VIEW_FOLDER.'common_head.php'); ?>
    <script src="/public/js/jquery.form.js"></script>

    <script src="/public/admin/js/admin_advertisement.js"></script>
    <script>
        $(document).on('ready', function () {
            var $form_input = $('#frm_input');
            //show file detail
            $('#file_attach', $form_input).on("change", function(){
                //new file chosen
                var filename = $('#file_attach', $form_input)[0].files.length ? $('#file_attach', $form_input)[0].files[0].name : "";
                $('#lbl_file_attach_detail', $form_input).text(filename + ', size: '+common.convert_file_size($('#file_attach', $form_input)[0].files[0].size));
            });
        });
    </script>
</head>

<body>
<?php require_once(ABS_ADMIN_VIEW_FOLDER.'common_header.php'); ?>

<main class="container-fluid px-0 g-pt-65">
    <div class="row no-gutters g-pos-rel g-overflow-x-hidden">
        <?php require_once(ABS_ADMIN_VIEW_FOLDER.'common_sidebar.php'); ?>

        <div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
            <div class="g-pa-20">
                <h2>Current banner: <a id="current_url" href="<?php echo $home_banner_detail->url; ?>" target="_blank" ><?php echo $home_banner_detail->url; ?></a></h2>
                <a href="<?php echo $home_banner_detail->url; ?>" target="_blank">
                    <img src="<?php echo HOME_BANNER_PATH.$home_banner_detail->filename; ?>" class="image wp-image-2227 attachment-full size-full" id="img_home_banner" style="width:728px;height:90px;" title="blockbod ad"/>
                </a>
                <br/><br/>
                <h2>Change to new banner:</h2>
                <div class="table-responsive g-mb-40">
                    <!-- form -->
                    <form id="frm_input" name="frm_input" method="post" enctype="multipart/form-data">
                        <div class="d-flex align-items-center form-group g-mb-5">
                            <label class="g-mb-5 g-width-150">Url (*)</label>
                            <div class="g-pos-rel">
                                <input id="txt_url" name="txt_url" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-5 g-py-5 g-width-300" type="text" placeholder="http://abc.com"/>
                            </div>
                        </div>
                        <div class="d-flex align-items-center form-group g-mb-5">
                            <label class="g-mb-5 g-width-150">New banner image</label>
                            <div class="u-file-attach-v1 g-brd-gray-light-v2">
                                <div class="input-group-btn">
                                    <button class="btn btn-md u-btn-primary rounded-0" type="button">Browse...</button>
                                    <input type="file" id="file_attach" name="file_attach" accept="image/*"/>
                                </div>
                            </div>
                            <small class="g-font-weight-300 g-font-size-12 g-color-gray-dark-v6 g-pt-5 g-ml-10">Size is fixed: 728 x 90 pixels</small>
                            <small id="lbl_file_attach_detail" class="g-font-weight-300 g-font-size-12 g-color-lightblue-v3 g-pt-5 g-ml-10"></small>
                        </div>
                        <div class="d-flex align-items-center form-group g-mb-5">
                            <label class="g-mb-5 g-width-150">&nbsp;</label>
                            <div class="g-pos-rel">
                                <button class="btn btn-md u-btn-blue rounded-0" type="button" onclick="adminAdvertisement.update_home_banner();">Update</button>
                            </div>
                            <small id="mess_submit" class="g-font-weight-300 g-font-size-12 g-color-lightred-v2 g-pt-5 g-ml-10"></small>
                        </div>
                    </form>
                    <!-- end form -->
                </div>
            </div>
            <?php require_once(ABS_ADMIN_VIEW_FOLDER.'common_footer.php'); ?>
        </div>
    </div>
</main>

</body>

</html>