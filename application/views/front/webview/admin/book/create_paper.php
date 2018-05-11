<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create new paper</title>

    <?php require_once(FCPATH.'application/views/front/webview/admin/common_head.php'); ?>

    <link rel="stylesheet" href="/public/datepicker/bootstrap-datepicker.min.css"/>
    <link rel="stylesheet" href="/public/trumbowyg/ui/trumbowyg.min.css"/>

    <script src="/public/datepicker/bootstrap-datepicker.min.js"></script>
    <script src="/public/trumbowyg/trumbowyg.min.js"></script>

    <script>
        $(document).on('ready', function () {
            //https://alex-d.github.io/
            $('#txt_description').trumbowyg({
                btns: [
                    ['viewHTML'],
                    ['undo', 'redo'], // Only supported in Blink browsers
                    ['formatting'],
                    ['strong', 'em'],
                    ['link'],
                    ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
                    ['unorderedList', 'orderedList'],
                    ['horizontalRule']
                ]
            });
            //init date picker
            $( "#txt_publish_date" ).datepicker();
            //generate random string
            adminBook.generate_specific_code();
        });
    </script>
</head>

<body>
<?php require_once(FCPATH.'application/views/front/webview/admin/common_header.php'); ?>

<main class="container-fluid px-0 g-pt-65">
    <div class="row no-gutters g-pos-rel g-overflow-x-hidden">
        <?php require_once(FCPATH.'application/views/front/webview/admin/common_sidebar.php'); ?>

        <div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
            <div class="g-pa-20">
                <h2>Create new paper</h2>
                <div class="table-responsive g-mb-40">
                    <!-- form -->
                    <form>
                        <div class="d-flex align-items-center form-group g-mb-5 has-success">
                            <label class="g-mb-5 g-width-150">Title (*)</label>
                            <div class="g-pos-rel">
                                <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
                                  <i class="hs-admin-check g-absolute-centered g-font-size-default g-color-lightblue-v3"></i>
                                </span>
                                <input id="" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-5 g-py-5 g-width-600" type="text" />
                            </div>
                            <small class="g-font-weight-300 g-font-size-12 g-color-gray-dark-v6 g-pt-5 g-ml-10">Length: <span id="">0</span> / 200</small>
                        </div>
                        <div class="d-flex align-items-center form-group g-mb-5 u-has-error-v3">
                            <label class="g-mb-5 g-width-150">Slug (*)</label>
                            <div class="g-pos-rel">
                                <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--error">
                                  <i class="hs-admin-close g-absolute-centered g-font-size-default g-color-primary"></i>
                                </span>
                                <input id="" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-5 g-py-5 g-width-600 g-brd-pink-v2--error" type="text" />
                            </div>
                            <small class="g-font-weight-300 g-font-size-12 g-color-gray-dark-v6 g-pt-5 g-ml-10">Length: <span id="">0</span> / 250</small>
                        </div>
                        <div class="d-flex align-items-center form-group g-mb-5">
                            <label class="g-mb-5 g-width-150">Excerpt (*)</label>
                            <div class="g-pos-rel">
                                <textarea id="" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-5 g-py-5 g-width-600" rows="7"></textarea>
                            </div>
                            <small class="g-font-weight-300 g-font-size-12 g-color-gray-dark-v6 g-pt-5 g-ml-10">Length: <span id="">0</span> / 1000</small>
                        </div>
                        <div class="form-group g-mb-5">
                            <label class="g-mb-5 g-width-150">Description (*)</label>
                            <div class="g-pos-rel">
                                <div id="txt_description"></div>
                            </div>
                            <small class="g-font-weight-300 g-font-size-12 g-color-gray-dark-v6 g-pt-5 g-ml-10">Length: <span id="">0</span> / 250</small>
                        </div>
                        <div class="d-flex align-items-center form-group g-mb-5">
                            <label class="g-mb-5 g-width-150">Cover image</label>
                            <div class="u-file-attach-v1 g-brd-gray-light-v2">
                                <div class="input-group-btn">
                                    <button class="btn btn-md u-btn-primary rounded-0" type="button">Browse</button>
                                    <input type="file" id=""/>
                                </div>
                            </div>
                            <small class="g-font-weight-300 g-font-size-12 g-color-gray-dark-v6 g-pt-5 g-ml-10">PNG / JPG, maximum size 5MB</small>
                        </div>
                        <div class="d-flex align-items-center form-group g-mb-5">
                            <label class="g-mb-5 g-width-150">Material</label>
                            <div class="u-file-attach-v1 g-brd-gray-light-v2">
                                <div class="input-group-btn">
                                    <button class="btn btn-md u-btn-primary rounded-0" type="button">Browse</button>
                                    <input type="file" id=""/>
                                </div>
                            </div>
                            <small class="g-font-weight-300 g-font-size-12 g-color-gray-dark-v6 g-pt-5 g-ml-10">PDF / DOCX / ZIP, maximum size 20MB</small>
                        </div>
                        <div class="d-flex align-items-center form-group g-mb-5">
                            <label class="g-mb-5 g-width-150">Author name (*)</label>
                            <div class="g-pos-rel">
                                <input id="" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-5 g-py-5 g-width-300" type="text" />
                            </div>
                            <small class="g-font-weight-300 g-font-size-12 g-color-gray-dark-v6 g-pt-5 g-ml-10">Length: <span id="">0</span> / 64</small>
                        </div>
                        <div class="d-flex align-items-center form-group g-mb-5">
                            <label class="g-mb-5 g-width-150">Publisher</label>
                            <div class="g-pos-rel">
                                <input id="" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-5 g-py-5 g-width-300" type="text" />
                            </div>
                            <small class="g-font-weight-300 g-font-size-12 g-color-gray-dark-v6 g-pt-5 g-ml-10">Length: <span id="">0</span> / 64</small>
                        </div>
                        <div class="d-flex align-items-center form-group g-mb-5">
                            <label class="g-mb-5 g-width-150">Specific code (*)</label>
                            <div class="g-pos-rel d-flex align-items-center justify-content-between">
                                <input id="txt_specific_code" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-5 g-py-5 g-mr-10" type="text" />
                                <input type="button" class="btn-primary pointer" value="Generate" onclick="adminBook.generate_specific_code();"/>
                            </div>
                        </div>
                        <div class="d-flex align-items-center form-group g-mb-5">
                            <label class="g-mb-5 g-width-150">ISBN</label>
                            <div class="g-pos-rel">
                                <input id="" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-5 g-py-5 g-width-200" type="text" />
                            </div>
                        </div>
                        <div class="d-flex align-items-center form-group g-mb-5">
                            <label class="g-mb-5 g-width-150">Pages</label>
                            <div class="g-pos-rel">
                                <input id="" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-5 g-py-5 g-width-100" type="text" />
                            </div>
                        </div>
                        <div class="d-flex align-items-center form-group g-mb-5">
                            <label class="g-mb-5 g-width-150">File size (KB)</label>
                            <div class="g-pos-rel">
                                <input id="" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-5 g-py-5 g-width-100" type="text" />
                            </div>
                        </div>
                        <div class="d-flex align-items-center form-group g-mb-5">
                            <label class="g-mb-5 g-width-150">Publish date</label>
                            <div class="g-pos-rel">
                                <input id="txt_publish_date" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-5 g-py-5 g-width-100" type="text" />
                            </div>
                            <small class="g-font-weight-300 g-font-size-12 g-color-gray-dark-v6 g-pt-5 g-ml-10">(MM/DD/YYYY)</small>
                        </div>
                        <div class="d-flex align-items-center form-group g-mb-5">
                            <label class="g-mb-5 g-width-150">Price (USD)</label>
                            <div class="g-pos-rel">
                                <input id="" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-5 g-py-5 g-width-100" type="text" />
                            </div>
                        </div>
                        <div class="d-flex align-items-center form-group g-mb-5">
                            <label class="g-mb-5 g-width-150">Discount price (USD)</label>
                            <div class="g-pos-rel">
                                <input id="" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-5 g-py-5 g-width-100" type="text" />
                            </div>
                        </div>
                        <div class="d-flex align-items-center form-group g-mb-5">
                            <label class="g-mb-5 g-width-150">Public</label>
                            <div class="g-pos-rel">
                                <input type="checkbox" id=""/>
                            </div>
                        </div>
                        <div class="d-flex align-items-center form-group g-mb-5">
                            <label class="g-mb-5 g-width-150">&nbsp;</label>
                            <div class="g-pos-rel">
                                <button class="btn btn-md u-btn-purple rounded-0" type="button">Preview</button>
                                <button class="btn btn-md u-btn-blue rounded-0" type="button">Submit</button>
                            </div>
                        </div>
                    </form>
                    <div id="mess_submit" class=""></div>
                    <!-- end form -->
                </div>
            </div>
            <?php require_once(FCPATH.'application/views/front/webview/admin/common_footer.php'); ?>
        </div>
    </div>
</main>

</body>

</html>