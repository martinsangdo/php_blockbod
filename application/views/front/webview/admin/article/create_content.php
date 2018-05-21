<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $page_title; ?></title>

    <?php require_once(ABS_ADMIN_VIEW_FOLDER.'common_head.php'); ?>

    <link rel="stylesheet" href="/public/datepicker/bootstrap-datepicker.min.css"/>
    <link rel="stylesheet" href="/public/trumbowyg/ui/trumbowyg.min.css"/>

    <script src="/public/datepicker/bootstrap-datepicker.min.js"></script>
    <script src="/public/trumbowyg/trumbowyg.min.js"></script>
    <script src="/public/admin/js/admin_article.js"></script>

    <script>
        $(document).on('ready', function () {
            //https://alex-d.github.io/
            $('#txt_content').trumbowyg({
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
                <h2><?php echo $page_title; ?></h2>
                <div class="table-responsive g-mb-40">
                    <!-- form -->
                    <form>
                        <div class="d-flex align-items-center form-group g-mb-5">
                            <label class="g-mb-5 g-width-150">Title (*)</label>
                            <div class="g-pos-rel">
                                <input id="txt_title" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-5 g-py-5 g-width-600" type="text" />
                            </div>
                            <small class="g-font-weight-300 g-font-size-12 g-color-gray-dark-v6 g-pt-5 g-ml-10">Length: <span id="">0</span> / 200</small>
                        </div>
                        <div class="d-flex align-items-center form-group g-mb-5 u-has-error-v3">
                            <label class="g-mb-5 g-width-150">Slug (*)</label>
                            <div class="g-pos-rel">
                                <input id="txt_slug" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-5 g-py-5 g-width-600" type="text" />
                            </div>
                            <small class="g-font-weight-300 g-font-size-12 g-color-gray-dark-v6 g-pt-5 g-ml-10">Length: <span id="">0</span> / 250</small>
                        </div>
                        <div class="d-flex align-items-center form-group g-mb-5">
                            <label class="g-mb-5 g-width-150">Excerpt (*)</label>
                            <div class="g-pos-rel">
                                <textarea id="txt_excerpt" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-5 g-py-5 g-width-600" rows="7"></textarea>
                            </div>
                            <small class="g-font-weight-300 g-font-size-12 g-color-gray-dark-v6 g-pt-5 g-ml-10">Length: <span id="">0</span> / 1000</small>
                        </div>
                        <div class="form-group g-mb-5">
                            <label class="g-mb-5 g-width-150">Content (*)</label>
                            <div class="g-pos-rel">
                                <div id="txt_content"></div>
                            </div>
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
                            <label class="g-mb-5 g-width-150">Author name</label>
                            <div class="g-pos-rel">
                                <input id="" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-5 g-py-5 g-width-300" type="text" />
                            </div>
                            <small class="g-font-weight-300 g-font-size-12 g-color-gray-dark-v6 g-pt-5 g-ml-10">Length: <span id="">0</span> / 64</small>
                        </div>
                        <div class="d-flex align-items-center form-group g-mb-5">
                            <label class="g-mb-5 g-width-150">Public</label>
                            <div class="g-pos-rel">
                                <input type="checkbox" id="chk_public"/>
                            </div>
                        </div>
                        <div class="d-flex align-items-center form-group g-mb-5">
                            <label class="g-mb-5 g-width-150">&nbsp;</label>
                            <div class="g-pos-rel">
                                <button class="btn btn-md u-btn-purple rounded-0" type="button" onclick="adminArticle.preview_my_content();">Preview</button>
                                <button class="btn btn-md u-btn-blue rounded-0" type="button">Submit</button>
                            </div>
                        </div>
                    </form>
                    <div id="mess_submit" class=""></div>
                    <input type="hidden" id="content_id" value="0"/>
                    <input type="hidden" id="is_draft" value="1"/>
                    <!-- end form -->
                </div>
            </div>
            <?php require_once(ABS_ADMIN_VIEW_FOLDER.'common_footer.php'); ?>
        </div>
    </div>
</main>

</body>

</html>