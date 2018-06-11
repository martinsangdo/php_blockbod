<!DOCTYPE html>
<html lang="en-US" style="transform: none;">
<head>
    <title>Newsletter</title>

    <?php require_once 'common_head.php'; ?>
</head>

<body class="post-template-default single single-post postid-2057 single-format-standard global-layout-right-sidebar blog-layout-grid global-sticky-sidebar" style="transform: none;">

<div id="page" class="site" style="transform: none;">
    <?php require_once 'common_menu.php'; ?>

    <div id="content" class="site-content" style="transform: none;">


        <div class="container" style="transform: none;">
            <div class="inner-wrapper" style="transform: none;">
                <div class="content-area" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;width:80%;">
                    <!-- #main -->
                    <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;">
                        <main class="site-main" role="main">
                            <article class="post-2057 post type-post status-publish format-standard has-post-thumbnail hentry category-fashion tag-fashion tag-girl tag-lifestyle">
                                <div class="article-wrap-inner">
                                    <div class="content-wrap">
                                        <div class="content-wrap-inner">
                                            <h1>Register newsletter</h1><br/><br/>
                                            <h3>Keep up with blockchain and cryptocurrency technology trends with our insider reports.</h3>
                                            <p>Simply enter your email address in the box below and select which newsletters you'd like to receive.</p>
                                            <p><input type="text" class="w-300" id="txt_email" placeholder="name@email.com"/> <small>We never send spams to your inbox</small></p>
                                            <ul>
                                                <li><input id="chk_opt_1" checked="checked" name="chk_opt" type="checkbox" value="1"> <strong>Blockbod Weekly</strong> - Every Friday you'll get a curated run down of the 5 hottest topics.</li>
                                                <li><input id="chk_opt_2" checked="checked" name="chk_opt" type="checkbox" value="1"> <strong>Daily News</strong> - Daily feed of all published Blockbod stories - Sent once per day.</li>
                                                <li><input id="chk_opt_3" checked="checked" name="chk_opt" type="checkbox" value="1"> <strong>Blockbod Research</strong> - Be the first to know about our digital currency research.</li>
                                                <li><input id="chk_opt_4" checked="checked" name="chk_opt" type="checkbox" value="1"> <strong>Blockbod Paper</strong> - Get exclusive offers to buy our papers.</li>
                                            </ul>
                                            <button type="button" class="" onclick="common_front.save_newsletter();">Subscribe</button> <small id="lbl_mess"></small>
                                        </div>
                                    </div>
                                </div>

                            </article><!-- #post-## -->
                        </main>
                    </div>
                </div><!-- #primary -->


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





