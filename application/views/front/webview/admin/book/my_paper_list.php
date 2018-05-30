<!DOCTYPE html>
<html lang="en">
<head>
    <title>My paper list</title>

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
                <h2>My paper list</h2>
                <a class="align-self-center u-link-v5 g-color-lightblue-v3 g-color-primary--hover" href="/admin-book/create_paper">
                    <i class="hs-admin-plus g-font-size-18"></i>
                    <span class="g-hidden-sm-down g-ml-10">Create new paper</span>
                </a><br/><br/>
                <div class="table-responsive g-mb-40">
                    <?php
                        if ($list){
                    ?>
                    <table class="table u-table--v3 g-color-black tbl_general_list" id="tbl_container">
                        <thead>
                        <tr>
                            <th>Cover</th>
                            <th>Title</th>
                            <th>Excerpt</th>
                            <th>File</th>
                            <th>Price</th>
                            <th>Discount</th>
                            <th>Sales</th>
                            <th>Public date</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php
                        for ($i=0;$i<count($list);$i++){ ?>
                            <tr data-id="<?php echo $list[$i]->_id; ?>" data-index="<?php echo $list[$i]->sort_idx; ?>">
                                <td><img class="thumb_list" src="<?php
                                    if (!empty($list[$i]->thumb_url)){
                                        echo BOOK_COVER_PATH.$list[$i]->thumb_url;
                                    }
                                    ?>" class=""/></td>
                                <td><a href="/book/detail/<?php echo $list[$i]->slug; ?>/<?php echo $list[$i]->_id; ?>" target="_blank"><?php echo $list[$i]->title; ?></a></td>
                                <td><?php echo $list[$i]->excerpt; ?></td>
                                <td>
                                    <?php
                                    if (isset($list[$i]->attach_filename)){
                                        echo '<a class="g-mr-20" target="_blank" href="'.BOOK_ATTACH_PATH.$list[$i]->attach_filename.'">Open file ('.$list[$i]->file_size_kb.' KB)</a>';
                                    }
                                    ?>
                                </td>
                                <td><?php echo $list[$i]->price; ?></td>
                                <td><?php echo $list[$i]->discount_price; ?></td>
                                <td><?php echo $list[$i]->sales_num; ?></td>
                                <td class="min-w-90"><?php echo $list[$i]->publish_date; ?></td>
                                <td class="min-w-100">
                                    <a class="js-edit u-link-v5 g-color-gray-light-v6 g-color-lightblue-v3--hover" href="#!" onclick="adminBook.toggle_publish_book(this, <?php echo $list[$i]->_id; ?>);" title="Publish/Unpublish">
                                        <i class="ico_publish hs-admin-eye <?php if ($list[$i]->status > 0) echo 'icon_active'; ?>"></i>
                                    </a>
                                    <a class="js-edit u-link-v5 g-color-gray-light-v6 g-color-lightblue-v3--hover" href="#!" title="Update" onclick="common.redirect('/admin-book/update_paper/<?php echo $list[$i]->_id; ?>');">
                                        <i class="hs-admin-pencil"></i>
                                    </a>
                                    <a class="js-edit u-link-v5 g-color-gray-light-v6 g-color-lightblue-v3--hover ico_up <?php if (!(count($list) > 1 && $i>0)) echo 'hidden' ?>" href="#!" title="Move up" onclick="adminBook.move_paper_step(this, -1);">
                                        <i class="hs-admin-angle-up"></i>
                                    </a>
                                    <a class="js-edit u-link-v5 g-color-gray-light-v6 g-color-lightblue-v3--hover ico_down <?php if (!(count($list) > 1 && $i<count($list)-1)) echo 'hidden' ?>" href="#!" title="Move down" onclick="adminBook.move_paper_step(this, 1);">
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