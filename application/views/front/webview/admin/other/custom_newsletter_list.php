<!DOCTYPE html>
<html lang="en">
<head>
    <title>Custom Newsletter list</title>

    <?php require_once(ABS_ADMIN_VIEW_FOLDER.'common_head.php'); ?>

</head>

<body>
<?php require_once(ABS_ADMIN_VIEW_FOLDER.'common_header.php'); ?>

<main class="container-fluid px-0 g-pt-65">
    <div class="row no-gutters g-pos-rel g-overflow-x-hidden">
        <?php require_once(ABS_ADMIN_VIEW_FOLDER.'common_sidebar.php'); ?>

        <div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
            <div class="g-pa-20">
                <h2>Custom Newsletter</h2>
                <div class="table-responsive g-mb-40">
                    <?php
                    if ($list){
                        ?>
                        <table class="table u-table--v3 g-color-black tbl_general_list" id="tbl_container">
                            <thead>
                            <tr>
                                <th>Email</th>
                                <th>Request</th>
                                <th>Payment status</th>
                                <th>Unsubscribe</th>
                                <th class="min-w-150">Register time</th>
                            </tr>
                            </thead>

                            <tbody>
                            <?php
                            for ($i=0;$i<count($list);$i++){ ?>
                                <tr class="<?php if ($list[$i]->is_unsubcribed == 1) echo 'bg-not-viewed'; ?>">
                                    <td><a href="mailto:<?php echo $list[$i]->email; ?>"><?php echo $list[$i]->email; ?></a></td>
                                    <td><?php echo $list[$i]->custom_request; ?></td>
                                    <td><?php echo $list[$i]->payment_status; ?></td>
                                    <td><?php echo $list[$i]->is_unsubcribed; ?></td>
                                    <td><?php echo format_post_time($list[$i]->create_time); ?></td>
                                </tr>
                            <?php } //end for ?>
                            </tbody>
                        </table>
                    <?php } //end if ?>
                </div>

                Total: <?php echo $total; ?><br/><br/>

                <div>
                    <?php echo $pagination; ?>
                </div>

            </div>
            <?php require_once(ABS_ADMIN_VIEW_FOLDER.'common_footer.php'); ?>
        </div>
    </div>
</main>

</body>

</html>