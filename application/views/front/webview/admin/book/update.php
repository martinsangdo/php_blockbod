<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update book</title>

    <?php require_once(ABS_ADMIN_VIEW_FOLDER.'common_head.php'); ?>

    <?php require_once 'form_head.php'; ?>
</head>

<body>
<?php require_once(ABS_ADMIN_VIEW_FOLDER.'common_header.php'); ?>

<main class="container-fluid px-0 g-pt-65">
    <div class="row no-gutters g-pos-rel g-overflow-x-hidden">
        <?php require_once(ABS_ADMIN_VIEW_FOLDER.'common_sidebar.php'); ?>

        <div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
            <div class="g-pa-20">
                <h2>Update book</h2>
                <div class="table-responsive g-mb-40">
                    <!-- form -->
                    <form id="frm_input" name="frm_input" method="post" enctype="multipart/form-data" class="edit_form">
                        <div class="d-flex align-items-center form-group g-mb-5">
                            <label class="g-mb-5 g-width-150">Title (*)</label>
                            <div class="g-pos-rel">
                                <input id="txt_title" name="txt_title" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-5 g-py-5 g-width-600" type="text" value="<?php if (isset($detail->title)) echo $detail->title; ?>"/>
                            </div>
                            <small class="g-font-weight-300 g-font-size-12 g-color-gray-dark-v6 g-pt-5 g-ml-10">Length: <span id="lbl_title_len">0</span> / 200</small>
                        </div>
                        <div class="d-flex align-items-center form-group g-mb-5">
                            <label class="g-mb-5 g-width-150">Slug (*)</label>
                            <div class="g-pos-rel">
                                <input id="txt_slug" name="txt_slug" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-5 g-py-5 g-width-600" type="text" value="<?php if (isset($detail->slug)) echo $detail->slug; ?>"/>
                            </div>
                            <small class="g-font-weight-300 g-font-size-12 g-color-gray-dark-v6 g-pt-5 g-ml-10">Length: <span id="lbl_slug_len">0</span> / 250</small>
                        </div>
                        <div class="d-flex align-items-center form-group g-mb-5">
                            <label class="g-mb-5 g-width-150">Excerpt (*)</label>
                            <div class="g-pos-rel">
                                <textarea id="txt_excerpt" name="txt_excerpt" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-5 g-py-5 g-width-600" rows="7"><?php if (isset($detail->excerpt)) echo $detail->excerpt; ?></textarea>
                            </div>
                        </div>
                        <div class="d-flex align-items-center form-group g-mb-5">
                            <label class="g-mb-5 g-width-150">Thumbnail url (*)</label>
                            <div class="g-pos-rel">
                                <input id="txt_thumb_url" name="txt_thumb_url" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-5 g-py-5 g-width-600" type="text" value="<?php if (isset($detail->thumb_url)) echo $detail->thumb_url; ?>"/>
                            </div>
                        </div>
                        <div class="d-flex align-items-center form-group g-mb-5">
                            <label class="g-mb-5 g-width-150">Original url (*)</label>
                            <div class="g-pos-rel">
                                <input id="txt_original_url" name="txt_original_url" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-5 g-py-5 g-width-600" type="text" value="<?php if (isset($detail->original_url)) echo $detail->original_url; ?>"/>
                            </div>
                        </div>
                        <div class="d-flex align-items-center form-group g-mb-5">
                            <label class="g-mb-5 g-width-150">Author name (*)</label>
                            <div class="g-pos-rel">
                                <input id="txt_author_name" name="txt_author_name" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-5 g-py-5 g-width-300" type="text" value="<?php if (isset($detail->author_name)) echo $detail->author_name; ?>"/>
                            </div>
                            <small class="g-font-weight-300 g-font-size-12 g-color-gray-dark-v6 g-pt-5 g-ml-10">Length: <span id="lbl_author_name_len">0</span> / 64</small>
                        </div>
                        <div class="d-flex align-items-center form-group g-mb-5">
                            <label class="g-mb-5 g-width-150">Publisher</label>
                            <div class="g-pos-rel">
                                <input id="txt_publisher" name="txt_publisher" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-5 g-py-5 g-width-300" type="text" value="<?php if (isset($detail->publisher)) echo $detail->publisher; ?>"/>
                            </div>
                        </div>
                        <div class="d-flex align-items-center form-group g-mb-5">
                            <label class="g-mb-5 g-width-150">ISBN</label>
                            <div class="g-pos-rel">
                                <input id="txt_isbn" name="txt_isbn" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-5 g-py-5 g-width-100" type="text" value="<?php if (isset($detail->isbn)) echo $detail->isbn; ?>" />
                            </div>
                        </div>
                        <div class="d-flex align-items-center form-group g-mb-5">
                            <label class="g-mb-5 g-width-150">Publish date</label>
                            <div class="g-pos-rel">
                                <input id="txt_publish_date" name="txt_publish_date" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-5 g-py-5 g-width-100" type="text" value="<?php if (isset($detail->publish_date)) echo $detail->publish_date; ?>"/>
                            </div>
                            <small class="g-font-weight-300 g-font-size-12 g-color-gray-dark-v6 g-pt-5 g-ml-10">DD/MM/YYYY</small>
                        </div>
                        <div class="d-flex align-items-center form-group g-mb-5">
                            <label class="g-mb-5 g-width-150">Print length</label>
                            <div class="g-pos-rel">
                                <input id="txt_page_total" name="txt_page_total" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-5 g-py-5 g-width-100" type="text" value="<?php if (isset($detail->page_num)) echo $detail->page_num; ?>"/>
                            </div>
                        </div>
                        <div class="d-flex align-items-center form-group g-mb-5">
                            <label class="g-mb-5 g-width-150">File size</label>
                            <div class="g-pos-rel">
                                <input id="txt_file_size" name="txt_file_size" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-5 g-py-5 g-width-100" type="text" value="<?php if (isset($detail->file_size_kb)) echo $detail->file_size_kb; ?>"/>
                            </div>
                        </div>
                        <div class="d-flex align-items-center form-group g-mb-5">
                            <label class="g-mb-5 g-width-150">File type</label>
                            <div class="g-pos-rel">
                                <input id="txt_file_type" name="txt_file_type" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-5 g-py-5 g-width-100" type="text" value="<?php if (isset($detail->file_type)) echo $detail->file_type; ?>"/>
                            </div>
                            <small class="g-font-weight-300 g-font-size-12 g-color-gray-dark-v6 g-pt-5 g-ml-10">PDF / ePub / Zip / Kindle</small>
                        </div>
                        <div class="d-flex align-items-center form-group g-mb-5">
                            <label class="g-mb-5 g-width-150">Price (USD)</label>
                            <div class="g-pos-rel">
                                <input id="txt_price" name="txt_price" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-5 g-py-5 g-width-100" type="text" value="<?php if (isset($detail->price)) echo $detail->price; ?>"/>
                            </div>
                        </div>
                        <div class="d-flex align-items-center form-group g-mb-5">
                            <label class="g-mb-5 g-width-150">Discount price (USD)</label>
                            <div class="g-pos-rel">
                                <input id="txt_discount_price" name="txt_discount_price" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-5 g-py-5 g-width-100" type="text" value="<?php if (isset($detail->discount_price)) echo $detail->discount_price; ?>"/>
                            </div>
                        </div>
                        <div class="d-flex align-items-center form-group g-mb-5">
                            <label class="g-mb-5 g-width-150">Index</label>
                            <div class="g-pos-rel">
                                <input id="txt_index" name="txt_index" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-5 g-py-5 g-width-100" type="text" value="<?php if (isset($detail->sort_idx)) echo $detail->sort_idx; ?>"/>
                            </div>
                            <small class="g-font-weight-300 g-font-size-12 g-color-gray-dark-v6 g-pt-5 g-ml-10">Minimum: 1</small>
                        </div>
                        <div class="d-flex align-items-center form-group g-mb-5">
                            <label class="g-mb-5 g-width-150">Public</label>
                            <div class="g-pos-rel">
                                <input type="checkbox" id="chk_public" name="chk_public" value="1" <?php if ($detail->status > 0) echo 'checked'; ?>/>
                            </div>
                        </div>
                        <div class="d-flex align-items-center form-group g-mb-5">
                            <label class="g-mb-5 g-width-150">&nbsp;</label>
                            <div class="g-pos-rel">
                                <button class="btn btn-md u-btn-blue rounded-0" type="button" onclick="adminBook.update();">Save</button>
                            </div>
                            <small id="mess_submit" class="g-font-weight-300 g-font-size-12 g-color-lightred-v2 g-pt-5 g-ml-10"></small>
                        </div>
                        <input type="hidden" name="original_id" value="<?php echo $detail->_id; ?>"/>
                        <input type="hidden" id="previous_index" name="previous_index" value="<?php echo $detail->sort_idx; ?>"/>
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