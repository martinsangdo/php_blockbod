<!DOCTYPE html>
<html lang="en">
<head>
    <title>Book list</title>

    <?php require_once(ABS_ADMIN_VIEW_FOLDER.'common_head.php'); ?>
    <script src="/public/admin/js/admin_book.js"></script>

</head>

<body>
<?php require_once(ABS_ADMIN_VIEW_FOLDER.'common_header.php'); ?>

<main class="container-fluid px-0 g-pt-65">
    <div class="row no-gutters g-pos-rel g-overflow-x-hidden">
        <?php require_once(ABS_ADMIN_VIEW_FOLDER.'common_sidebar.php'); ?>

        <div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
            <div class="g-pa-20">
                <h2>My books</h2>
                <div class="table-responsive g-mb-40">
                    <?php
                    if ($list){
                        ?>
                        <table class="table u-table--v3 g-color-black tbl_general_list" id="tbl_container">
                            <thead>
                            <tr>
                                <th>Cover</th>
                                <th>Title</th>
                                <th>Price</th>
                                <th>Discount</th>
                                <th>Original link</th>
                                <th>Public date</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            <?php
                            for ($i=0;$i<count($list);$i++){ ?>
                                <tr data-id="<?php echo $list[$i]->_id; ?>" data-index="<?php echo $list[$i]->sort_idx; ?>">
                                    <td><img class="thumb_list" src="<?php
                                            echo $list[$i]->thumb_url;
                                        ?>" class=""/></td>
                                    <td><a href="/book/detail/<?php echo $list[$i]->slug; ?>/<?php echo $list[$i]->_id; ?>" target="_blank"><?php echo $list[$i]->title; ?></a></td>
                                    <td><?php echo $list[$i]->price; ?></td>
                                    <td><?php echo $list[$i]->discount_price; ?></td>
                                    <td><a target="_blank" href="<?php echo $list[$i]->original_url; ?>">Open</a></td>
                                    <td class="min-w-90"><?php echo $list[$i]->publish_date; ?></td>
                                    <td class="min-w-100">
                                        <a class="js-edit u-link-v5 g-color-darkblue-v4 g-color-lightblue-v3--hover" href="#!" onclick="adminCommon.toggle_publish(this, <?php echo $list[$i]->_id; ?>, ADMIN_API_URI.TOGGLE_PUBLISH_BOOK);" title="Publish/Unpublish">
                                            <i class="ico_publish hs-admin-eye <?php if ($list[$i]->status > 0) echo 'icon_active'; ?>"></i>
                                        </a>
                                        <a class="js-edit u-link-v5 g-color-darkblue-v4 g-color-lightblue-v3--hover" href="/admin-book/update/<?php echo $list[$i]->_id; ?>" title="Update" onclick="common.redirect('/admin-paper/update/<?php echo $list[$i]->_id; ?>');">
                                            <i class="hs-admin-pencil"></i>
                                        </a>
                                        <a class="js-edit u-link-v5 g-color-darkblue-v4 g-color-lightblue-v3--hover ico_up <?php if (!(count($list) > 1 && $i>0)) echo 'hidden' ?>" href="#!" title="Move up" onclick="adminCommon.move_row_step(this, -1, ADMIN_API_URI.SWAP_BOOK_INDEX);">
                                            <i class="hs-admin-angle-up"></i>
                                        </a>
                                        <a class="js-edit u-link-v5 g-color-darkblue-v4 g-color-lightblue-v3--hover ico_down <?php if (!(count($list) > 1 && $i<count($list)-1)) echo 'hidden' ?>" href="#!" title="Move down" onclick="adminCommon.move_row_step(this, 1, ADMIN_API_URI.SWAP_BOOK_INDEX);">
                                            <i class="hs-admin-angle-down"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php } //end for ?>
                            </tbody>
                        </table>
                    <?php } //end if ?>
                </div>

                Total: <?php echo $total; ?><br/><br/>

            </div>
            <?php require_once(ABS_ADMIN_VIEW_FOLDER.'common_footer.php'); ?>
        </div>
    </div>
</main>

</body>

</html>