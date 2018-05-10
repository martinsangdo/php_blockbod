<!DOCTYPE html>
<html lang="en">
<head>
    <title>Websites list</title>

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
                <h2>Collecting sites</h2>
                <div class="table-responsive g-mb-40">
                    <table class="table u-table--v3 g-color-black">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Update time</th>
                            <th>Total posts</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php for ($i=0;$i<count($list);$i++){ ?>
                            <tr>
                                <td><?php echo $list[$i]->_id; ?></td>
                                <td><?php echo $list[$i]->api_uri.$list[$i]->post_uri; ?></td>
                                <td><?php echo $list[$i]->crawl_time; ?></td>
                                <td><?php echo $list[$i]->post_num; ?></td>
                                <td><?php echo $list[$i]->status; ?></td>
                                <td>
                                    <a class="js-edit u-link-v5 g-color-gray-light-v6 g-color-lightblue-v3--hover" href="#!" title="Edit">
                                        <i class="hs-admin-pencil"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>

                Total: <?php echo $total; ?><br/><br/>

            </div>
            <?php require_once(FCPATH.'application/views/front/webview/admin/common_footer.php'); ?>
        </div>
    </div>
</main>

</body>

</html>