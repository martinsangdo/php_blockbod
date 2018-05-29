<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create new paper</title>

    <?php require_once(ABS_ADMIN_VIEW_FOLDER.'common_head.php'); ?>

    <link rel="stylesheet" href="/public/trumbowyg/ui/trumbowyg.min.css"/>

    <script src="/public/js/jquery.form.js"></script>
    <script src="/public/trumbowyg/trumbowyg.min.js"></script>
    <script src="/public/admin/js/admin_book.js"></script>

    <script>
        $(document).on('ready', function () {
            common.init_editor($('#txt_content'));
            var $form_input = $('#frm_input');
            //reset all input events
            $('input[type="text"]', $form_input).unbind();
            //set event to each input
            common.set_length_handler($('#txt_title', $form_input), $('#lbl_title_len', $form_input), function(){
                //handle to create slug automatically
                $('#txt_slug', $form_input).val(common.to_slug($.trim($('input[type="text"]', $form_input).val())));
                $('#lbl_slug_len', $form_input).text($.trim($('#txt_slug', $form_input).val()).length);
            });
            common.set_length_handler($('#txt_slug', $form_input), $('#lbl_slug_len', $form_input));
            common.set_length_handler($('#txt_excerpt', $form_input), $('#lbl_excerpt_len', $form_input));
            common.set_length_handler($('#txt_author_name', $form_input), $('#lbl_author_name_len', $form_input));
            //show file detail
            $('#file_cover', $form_input).on("change", function(){
                //new file chosen
                var filename = $('#file_cover', $form_input)[0].files.length ? $('#file_cover', $form_input)[0].files[0].name : "";
                $('#lbl_file_cover_detail', $form_input).text(filename + ', size: '+common.convert_file_size($('#file_cover', $form_input)[0].files[0].size));
                $('#file_cover_size', $form_input).val($('#file_cover', $form_input)[0].files[0].size);
            });
            $('#file_attach', $form_input).on("change", function(){
                //new file chosen
                var filename = $('#file_attach', $form_input)[0].files.length ? $('#file_attach', $form_input)[0].files[0].name : "";
                $('#lbl_file_attach_detail', $form_input).text(filename + ', size: '+common.convert_file_size($('#file_attach', $form_input)[0].files[0].size));
                $('#file_attach_size', $form_input).val($('#file_attach', $form_input)[0].files[0].size);
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
                <h2>Create new paper</h2>
                <div class="table-responsive g-mb-40">
                    <!-- form -->
                    <form id="frm_input" name="frm_input" method="post" enctype="multipart/form-data">
                        <div class="d-flex align-items-center form-group g-mb-5">
                            <label class="g-mb-5 g-width-150">Title (*)</label>
                            <div class="g-pos-rel">
                                <input id="txt_title" name="txt_title" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-5 g-py-5 g-width-600" type="text" />
                            </div>
                            <small class="g-font-weight-300 g-font-size-12 g-color-gray-dark-v6 g-pt-5 g-ml-10">Length: <span id="lbl_title_len">0</span> / 200</small>
                        </div>
                        <div class="d-flex align-items-center form-group g-mb-5">
                            <label class="g-mb-5 g-width-150">Slug (*)</label>
                            <div class="g-pos-rel">
                                <input id="txt_slug" name="txt_slug" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-5 g-py-5 g-width-600" type="text" />
                            </div>
                            <small class="g-font-weight-300 g-font-size-12 g-color-gray-dark-v6 g-pt-5 g-ml-10">Length: <span id="lbl_slug_len">0</span> / 250</small>
                        </div>
                        <div class="d-flex align-items-center form-group g-mb-5">
                            <label class="g-mb-5 g-width-150">Excerpt (*)</label>
                            <div class="g-pos-rel">
                                <textarea id="txt_excerpt" name="txt_excerpt" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-5 g-py-5 g-width-600" rows="7"></textarea>
                            </div>
                            <small class="g-font-weight-300 g-font-size-12 g-color-gray-dark-v6 g-pt-5 g-ml-10">Length: <span id="lbl_excerpt_len">0</span> / 1000</small>
                        </div>
                        <div class="form-group g-mb-5">
                            <label class="g-mb-5 g-width-150">Content</label>
                            <div class="g-pos-rel">
                                <div id="txt_content" name="txt_content"></div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center form-group g-mb-5">
                            <label class="g-mb-5 g-width-150">Cover image</label>
                            <div class="u-file-attach-v1 g-brd-gray-light-v2">
                                <div class="input-group-btn">
                                    <button class="btn btn-md u-btn-primary rounded-0" type="button">Browse...</button>
                                    <input type="file" name="file_cover" id="file_cover" accept="image/png, image/jpg"/>
                                </div>
                            </div>
                            <small class="g-font-weight-300 g-font-size-12 g-color-gray-dark-v6 g-pt-5 g-ml-10">PNG / JPG, maximum size 5MB</small>
                            <small id="lbl_file_cover_detail" class="g-font-weight-300 g-font-size-12 g-color-lightblue-v3 g-pt-5 g-ml-10"></small>
                            <input id="file_cover_size" type="hidden"/>
                        </div>
                        <div class="d-flex align-items-center form-group g-mb-5">
                            <label class="g-mb-5 g-width-150">Material</label>
                            <div class="u-file-attach-v1 g-brd-gray-light-v2">
                                <div class="input-group-btn">
                                    <button class="btn btn-md u-btn-primary rounded-0" type="button">Browse...</button>
                                    <input type="file" id="file_attach" name="file_attach" accept="application/pdf"/>
                                </div>
                            </div>
                            <small class="g-font-weight-300 g-font-size-12 g-color-gray-dark-v6 g-pt-5 g-ml-10">PDF, maximum size 20MB</small>
                            <small id="lbl_file_attach_detail" class="g-font-weight-300 g-font-size-12 g-color-lightblue-v3 g-pt-5 g-ml-10"></small>
                            <input id="file_attach_size" name="file_attach_size" type="hidden"/>
                        </div>
                        <div class="d-flex align-items-center form-group g-mb-5">
                            <label class="g-mb-5 g-width-150">Author name (*)</label>
                            <div class="g-pos-rel">
                                <input id="txt_author_name" name="txt_author_name" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-5 g-py-5 g-width-300" type="text" />
                            </div>
                            <small class="g-font-weight-300 g-font-size-12 g-color-gray-dark-v6 g-pt-5 g-ml-10">Length: <span id="lbl_author_name_len">0</span> / 64</small>
                        </div>
                        <div class="d-flex align-items-center form-group g-mb-5">
                            <label class="g-mb-5 g-width-150">Pages total</label>
                            <div class="g-pos-rel">
                                <input id="txt_page_total" name="txt_page_total" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-5 g-py-5 g-width-100" type="text" />
                            </div>
                        </div>
                        <div class="d-flex align-items-center form-group g-mb-5">
                            <label class="g-mb-5 g-width-150">Price (USD)</label>
                            <div class="g-pos-rel">
                                <input id="txt_price" name="txt_price" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-5 g-py-5 g-width-100" type="text" />
                            </div>
                        </div>
                        <div class="d-flex align-items-center form-group g-mb-5">
                            <label class="g-mb-5 g-width-150">Discount price (USD)</label>
                            <div class="g-pos-rel">
                                <input id="txt_discount_price" name="txt_discount_price" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-5 g-py-5 g-width-100" type="text" />
                            </div>
                        </div>
                        <div class="d-flex align-items-center form-group g-mb-5">
                            <label class="g-mb-5 g-width-150">Public</label>
                            <div class="g-pos-rel">
                                <input type="checkbox" id="chk_public" name="chk_public" value="1" checked/>
                            </div>
                        </div>
                        <div class="d-flex align-items-center form-group g-mb-5">
                            <label class="g-mb-5 g-width-150">&nbsp;</label>
                            <div class="g-pos-rel">
                                <button class="btn btn-md u-btn-purple rounded-0 hidden" type="button" onclick="adminBook.preview_my_paper();">Preview</button>
                                <button class="btn btn-md u-btn-blue rounded-0" type="button" onclick="adminBook.create_my_paper();">Create</button>
                            </div>
                            <small id="mess_submit" class="g-font-weight-300 g-font-size-12 g-color-lightred-v2 g-pt-5 g-ml-10"></small>
                        </div>
                    </form>
                    <!-- end form -->
                    <input type="hidden" id="paper_id"/>
                </div>
            </div>
            <?php require_once(ABS_ADMIN_VIEW_FOLDER.'common_footer.php'); ?>
        </div>
    </div>
</main>

</body>

</html>