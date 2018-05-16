<!DOCTYPE html>
<html lang="en">
<head>
    <title>ICO analysis list</title>

    <?php
    require_once(FCPATH.'application/views/front/webview/admin/common_head.php'); ?>

</head>

<body>
<?php require_once(FCPATH.'application/views/front/webview/admin/common_header.php'); ?>

<main class="container-fluid px-0 g-pt-65">
    <div class="row no-gutters g-pos-rel g-overflow-x-hidden">
        <?php require_once(FCPATH.'application/views/front/webview/admin/common_sidebar.php'); ?>

        <div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
            <div class="g-pa-20">
                <h2>ICO analysis list</h2>
                <a class="align-self-center u-link-v5 g-color-lightblue-v3 g-color-primary--hover" href="/admin-article/create_ico_analysis">
                    <i class="hs-admin-plus g-font-size-18"></i>
                    <span class="g-hidden-sm-down g-ml-10">Create new ICO analysis</span>
                </a>
                <div class="table-responsive g-mb-40">
                    <table class="table u-table--v3 g-color-black g-mt-20 tbl_general_list">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Thumb</th>
                            <th>Title</th>
                            <th>Status</th>
                            <th>Time</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php
                        if ($list){
                        for ($i=0;$i<count($list);$i++){ ?>
                            <tr>
                                <td><?php echo $list[$i]->_id; ?></td>
                                <td><img src="<?php echo $list[$i]->thumb_url; ?>" class="thumb_list"/></td>
                                <td><a href="<?php echo detail_uri($list[$i]->slug); ?>" target="_blank"><?php echo $list[$i]->title; ?></a></td>
                                <td><?php echo $list[$i]->status; ?></td>
                                <td><?php echo $list[$i]->time; ?></td>
                                <td>
                                    <a class="js-edit u-link-v5 g-color-gray-light-v6 g-color-lightblue-v3--hover" href="#!" title="Edit">
                                        <i class="hs-admin-pencil"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php } } ?>
                        </tbody>
                    </table>
                </div>

                Total: <?php echo $total; ?><br/><br/>

                <div>
                    <?php echo $pagination; ?>
                </div>

            </div>
            <?php require_once(FCPATH.'application/views/front/webview/admin/common_footer.php'); ?>
        </div>
    </div>
</main>

</body>

</html>