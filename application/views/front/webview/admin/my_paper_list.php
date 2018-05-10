<!DOCTYPE html>
<html lang="en">
<head>
    <title>My paper list</title>

    <?php require_once('common_head.php'); ?>

</head>

<body>
<?php require_once('common_header.php'); ?>

<main class="container-fluid px-0 g-pt-65">
    <div class="row no-gutters g-pos-rel g-overflow-x-hidden">
        <?php require_once('common_sidebar.php'); ?>

        <div class="col g-ml-45 g-ml-0--lg g-pb-65--md">
            <div class="g-pa-20">
                <h2>My paper list</h2>
                <div class="table-responsive g-mb-40">
                    <?php
                        if ($list){
                    ?>
                    <table class="table u-table--v3 g-color-black">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Cover</th>
                            <th>Title</th>
                            <th>Excerpt</th>
                            <th>Price</th>
                            <th>Discount price</th>
                            <th>Total sales</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php
                        for ($i=0;$i<count($list);$i++){ ?>
                            <tr>
                                <td><?php echo $list[$i]->_id; ?></td>
                                <td><img src="<?php echo $list[$i]->cover_url; ?>" class=""/>></td>
                                <td><?php echo $list[$i]->title; ?></td>
                                <td><?php echo $list[$i]->excerpt; ?></td>
                                <td><?php echo $list[$i]->price; ?></td>
                                <td><?php echo $list[$i]->discount_price; ?></td>
                                <td><?php echo $list[$i]->sales_num; ?></td>
                                <td>
                                    <a class="js-edit u-link-v5 g-color-gray-light-v6 g-color-lightblue-v3--hover" href="#!" title="Edit">
                                        <i class="hs-admin-pencil"></i>
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
            <?php require_once('common_footer.php'); ?>
        </div>
    </div>
</main>

</body>

</html>