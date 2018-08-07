<!DOCTYPE html>
<html lang="en-US" style="transform: none;">
<head>
    <title>Newsletter</title>

    <?php require_once 'common_head.php'; ?>
    <link rel="stylesheet" href="/public/unity_assets/css/unify-admin.css"/>
</head>

<body class="post-template-default single single-post postid-2057 single-format-standard global-layout-right-sidebar blog-layout-grid global-sticky-sidebar" style="transform: none;">

<div id="page" class="site" style="transform: none;">
    <?php require_once 'common_menu.php'; ?>

    <div id="content" class="site-content" style="transform: none;">
        <div class="container" style="transform: none;">
            <div class="inner-wrapper" style="transform: none;">
                <div class="row">
                    <div>
                        <!-- Panel -->
                        <div class="card g-brd-gray-light-v7 g-rounded-3 g-mb-30">
                            <header class="card-header g-bg-lightblue-v4 g-brd-bottom-none g-px-15 g-px-30--sm g-pt-15 g-pt-20--sm g-pb-10 g-pb-15--sm">
                                <div class="media">
                                    <h3 class="d-flex align-self-center text-uppercase g-font-size-12 g-font-size-default--md g-color-white g-mr-10 mb-0 g-mb-0">Free newsletter</h3>
                                </div>
                            </header>

                            <div class="card-block">
                                <h4 class="g-font-weight-300 g-font-size-18 g-font-size-22--md g-color-black g-mb-10">Keep up with blockchain and cryptocurrency technology trends with our insider reports.</h4>
                                <p>Simply enter your email address in the box below and select which newsletters you'd like to receive.</p>
                                <p><input type="text" class="w-300" id="txt_email" placeholder="name@email.com"/></p>
                                <ul>
                                    <li><input id="chk_opt_1" checked="checked" name="chk_opt" type="checkbox" value="1"/> Every Friday you'll get a curated run down of the 5 hottest topics.</li>
                                    <li><input id="chk_opt_2" checked="checked" name="chk_opt" type="checkbox" value="1"/> Daily feed of all published Blockbod stories - Sent once per day.</li>
                                    <li><input id="chk_opt_3" checked="checked" name="chk_opt" type="checkbox" value="1"/> Be the first to know about our digital currency research.</li>
                                    <li><input id="chk_opt_4" checked="checked" name="chk_opt" type="checkbox" value="1"/> Get exclusive offers to buy our papers.</li>
                                </ul>
                                <button type="button" class="" onclick="common_front.save_newsletter();">Subscribe</button> <small id="lbl_mess"></small>
                            </div>
                        </div>
                        <!-- End Panel -->
                    </div>
                    <div>
                        <!-- Panel -->
                        <div class="card g-brd-gray-light-v7 g-rounded-3 g-mb-30">
                            <header class="card-header g-bg-lightblue-v4 g-brd-bottom-none g-px-15 g-px-30--sm g-pt-15 g-pt-20--sm g-pb-10 g-pb-15--sm">
                                <div class="media">
                                    <h3 class="d-flex align-self-center text-uppercase g-font-size-12 g-font-size-default--md g-color-white g-mr-10 mb-0 g-mb-0">Customized newsletter</h3>
                                </div>
                            </header>

                            <div class="card-block">
                                <p>We offer a choice of newsletter and email alerts on important topics and bring you the most relevant information for your research. You will not be overloaded with irrelevant emails nor will your details be passed on. </p>
                                <p>Anual fee: <strong><span id="newsletter_custom_price"><?php echo CUSTOM_NEWSLETTER_PRICE_NEW; ?></span> USD</strong></p>

                                <p><input type="text" class="w-300" id="txt_email_custom" placeholder="name@email.com"/></p>
                                <p><textarea cols="40" rows="5" id="txt_custom_request" placeholder="Type your detail requests: receive news about Ethererum, new ICO, etc."></textarea></p>
                                <ul>
                                    <li><input checked="checked" name="rdo_subscribe_type" type="radio" value="new"/> Register at first time.</li>
                                    <li><input name="rdo_subscribe_type" type="radio" value="modify"/> Modify old request (<?php echo CUSTOM_NEWSLETTER_PRICE_MODIFY; ?> USD per one change).</li>
                                </ul>
                                <p><input id="rdo_opt_1" checked="checked" name="rdo_opt" type="radio" value="1" class="hidden"/> You will receive the news on every Monday of the week.</p>

                                <?php require_once 'pay_subscription.inc.php'; ?>
                                <img src="<?php echo PUBLIC_FOLDER; ?>img/subscribe_button.png" onclick="common_front.process_custom_newsletter();" class="pointer" style="width:100px; height:auto;"/>
                                <small id="lbl_mess_custom"></small>
                            </div>
                        </div>
                        <!-- End Panel -->
                    </div>
                </div>

                <div id="sidebar-primary" class="widget-area sidebar" role="complementary" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 2050px;">
                    <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: absolute; transform: translateY(639px); width: 330px; top: 0px;">
                    </div>
                </div><!-- #secondary -->
            </div><!-- .inner-wrapper -->
        </div><!-- .container -->
    </div><!-- #content -->


    <?php require_once 'common_footer.php'; ?>

</div><!-- #page -->
</body></html>





