<!DOCTYPE html>
<html lang="en">
<head>
    <title>Internal categories</title>

    <?php require_once(ABS_ADMIN_VIEW_FOLDER.'common_head.php'); ?>
    <script src="/public/admin/js/admin_article.js"></script>

</head>

<body>
<?php require_once(ABS_ADMIN_VIEW_FOLDER.'common_header.php'); ?>

<main class="container-fluid px-0 g-pt-65">
    <div class="row no-gutters g-pos-rel g-overflow-x-hidden">
        <?php require_once(ABS_ADMIN_VIEW_FOLDER.'common_sidebar.php'); ?>

        <div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
            <div class="g-pa-20">
                <h2>Internal categories</h2>
                <div class="table-responsive g-mb-40">
                    <?php
                    if ($list){
                        ?>
                        <table class="table u-table--v3 g-color-black tbl_general_list" id="tbl_container">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Content num</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            <?php
                            for ($i=0;$i<count($list);$i++){ ?>
                                <tr data-id="<?php echo $list[$i]->_id; ?>">
                                    <td><?php echo $list[$i]->_id; ?></td>
                                    <td><input type="text" class="txt_name g-width-300" value="<?php echo $list[$i]->name; ?>"/></td>
                                    <td><?php echo $list[$i]->post_num; ?></td>
                                    <td>
                                        <button class="btn btn-md u-btn-primary rounded" type="button" onclick="adminArticle.update_category_name(this);">Update</button>
                                    </td>
                                </tr>
                            <?php } //end for ?>
                            </tbody>
                        </table>
                    <?php } //end if ?>
                </div>

            </div>
            <?php require_once(ABS_ADMIN_VIEW_FOLDER.'common_footer.php'); ?>
        </div>
    </div>
</main>

</body>

</html>