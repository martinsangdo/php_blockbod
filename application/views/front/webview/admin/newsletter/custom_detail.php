<!DOCTYPE html>
<html lang="en">
<head>
    <title>Customized newsletter detail</title>

    <?php require_once(ABS_ADMIN_VIEW_FOLDER.'common_head.php'); ?>
    <script src="/public/admin/js/admin_newsletter.js"></script>
</head>

<body>
<?php require_once(ABS_ADMIN_VIEW_FOLDER.'common_header.php'); ?>

<main class="container-fluid px-0 g-pt-65">
    <div class="row no-gutters g-pos-rel g-overflow-x-hidden">
        <?php require_once(ABS_ADMIN_VIEW_FOLDER.'common_sidebar.php'); ?>

        <div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
            <div class="g-pa-20">
                <h2>Customized newsletter detail</h2>
                <div class="table-responsive g-mb-40">
                    <!-- form -->
                    <form id="frm_input" name="frm_input" method="post" enctype="multipart/form-data">
                        <div class="d-flex align-items-center form-group g-mb-5">
                            <label class="g-mb-5 g-width-150">Email (*)</label>
                            <div class="g-pos-rel">
                                <input id="txt_email" name="txt_email" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-5 g-py-5 g-width-600" type="text" value="<?php echo $detail->email; ?>"/>
                            </div>
                        </div>
                        <div class="d-flex align-items-center form-group g-mb-5">
                            <label class="g-mb-5 g-width-150">Custom Request (*)</label>
                            <div class="g-pos-rel">
                                <textarea id="txt_custom_request" name="txt_custom_request" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-5 g-py-5 g-width-600" rows="7"><?php echo $detail->custom_request; ?></textarea>
                            </div>
                        </div>
                        <div class="d-flex align-items-center form-group g-mb-5">
                            <label class="g-mb-5 g-width-150">Title keywords</label>
                            <div class="g-pos-rel">
                                <div><small class="g-font-weight-300 g-font-size-12 g-color-gray-dark-v6 g-pt-5 g-ml-10">Each keyword separated by comma (,)</small></div>
                                <input id="txt_title_keywords" name="txt_title_keywords" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-5 g-py-5 g-width-600" type="text" value="<?php echo $detail->title_keywords; ?>"/>
                            </div>
                        </div>
                        <div class="d-flex align-items-center form-group g-mb-5">
                            <label class="g-mb-5 g-width-150">Excerpt keywords</label>
                            <div class="g-pos-rel">
                                <input id="txt_excerpt_keywords" name="txt_excerpt_keywords" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-5 g-py-5 g-width-600" type="text" value="<?php echo $detail->excerpt_keywords; ?>"/>
                            </div>
                        </div>
                        <div class="d-flex align-items-center form-group g-mb-5">
                            <label class="g-mb-5 g-width-150">Content keywords</label>
                            <div class="g-pos-rel">
                                <input id="txt_content_keywords" name="txt_content_keywords" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-5 g-py-5 g-width-600" type="text" value="<?php echo $detail->content_keywords; ?>"/>
                            </div>
                        </div>
                        <div class="d-flex align-items-center form-group g-mb-5">
                            <label class="g-mb-5 g-width-150">Payment status</label>
                            <div class="g-pos-rel g-color-lightbrown">
                                <?php echo $detail->payment_status; ?>
                            </div>
                        </div>
                        <div class="d-flex align-items-center form-group g-mb-5">
                            <label class="g-mb-5 g-width-150">No. of empty sent</label>
                            <div class="g-pos-rel">
                                <?php echo $detail->empty_data_send_num; ?>
                                <small class="g-font-weight-300 g-font-size-12 g-color-gray-dark-v6 g-pt-5 g-ml-10">The number of email without any data continuously sent to client</small>
                            </div>
                        </div>
                        <div class="d-flex align-items-center form-group g-mb-5">
                            <label class="g-mb-5 g-width-150">&nbsp;</label>
                            <div class="g-pos-rel">
                                <button class="btn btn-md u-btn-blue rounded-0" type="button" onclick="adminNewsletter.update_custom();">Update</button>
                            </div>
                            <small id="mess_submit" class="g-font-weight-300 g-font-size-12 g-color-lightred-v2 g-pt-5 g-ml-10"></small>
                        </div>
                        <input type="hidden" id="detail_id" value="<?php echo $detail->_id; ?>"/>
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