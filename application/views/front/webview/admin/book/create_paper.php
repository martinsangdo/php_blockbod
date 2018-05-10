<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create new paper</title>

    <?php require_once(FCPATH.'application/views/front/webview/admin/common_head.php'); ?>

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
                    <div class="form-group g-mb-5">
                        <label class="g-mb-5">Title (*)</label>
                        <div class="g-pos-rel">
                            <input id="" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-14 g-py-10" type="text" />
                            <small class="g-font-weight-300 g-font-size-12 g-color-gray-dark-v6 g-pt-5">Length: <span id="">0</span> / 200</small>
                        </div>
                    </div>
                    <div class="form-group g-mb-5">
                        <label class="g-mb-5">Slug (*)</label>
                        <div class="g-pos-rel">
                            <input id="" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-14 g-py-10" type="text" />
                            <small class="g-font-weight-300 g-font-size-12 g-color-gray-dark-v6 g-pt-5">Length: <span id="">0</span> / 250</small>
                        </div>
                    </div>


                    <!-- end form -->
                </div>
            </div>
            <?php require_once(FCPATH.'application/views/front/webview/admin/common_footer.php'); ?>
        </div>
    </div>
</main>

</body>

</html>