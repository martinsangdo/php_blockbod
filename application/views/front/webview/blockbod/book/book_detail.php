<!DOCTYPE html>
<html lang="en-US" style="transform: none;">
<head>
    <title><?php echo $detail->title; ?></title>


    <?php require_once ABS_VIEW_FOLDER.'common_head.php'; ?>
</head>

<body class="post-template-default single single-post postid-2057 single-format-standard global-layout-right-sidebar blog-layout-grid global-sticky-sidebar" style="transform: none;">

<div id="page" class="site" style="transform: none;">
    <?php require_once ABS_VIEW_FOLDER.'common_menu.php'; ?>

    <div id="content" class="site-content" style="transform: none;">


        <div class="container" style="transform: none;"><div class="inner-wrapper" style="transform: none;">
                <div id="primary" class="content-area" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
                    <!-- #main -->
                    <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;">
                        <main id="main" class="site-main" role="main">
                            <section id="pt-magazine-featured-column-news-2" class="widget featured-news-section">
                                <div class="featured-news-wrap">
                                    <div class="inner-wrapper">
                                        <div class="featured-large-item">
                                            <div class="news-item">
                                                <div class="news-thumb">
                                                    <div class="book-detail-center-cropped center-cropped-fill"
                                                         style="background-image: url('<?php
                                                         if ($detail->is_external > 0 && !empty($detail->thumb_url)){
                                                             echo $detail->thumb_url;
                                                         } else if ($detail->is_external == 0 && !empty($detail->thumb_url)){
                                                             echo PAPER_COVER_PATH.$detail->thumb_url;
                                                         } else {
                                                             echo PUBLIC_FOLDER.'img/sample_book/pdf.jpg';  //default image
                                                         }?>
                                                         ');">
                                                    </div>
                                                </div><!-- .news-thumb -->
                                                <div class="news-text-wrap text-center">
                                                    <?php
                                                    if ($detail->is_external > 0){
                                                    ?>
                                                        <button class="btn btn-md u-btn-primary rounded g-py-13 g-px-25" type="button" onclick="window.open('<?php echo $detail->original_url; ?>', '_blank');">Buy now</button>
                                                    <?php } else { ?>
                                                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                                            <input type="hidden" name="cmd" value="_s-xclick">
                                                            <input type="hidden" name="hosted_button_id" value="HCBP924KCQK64">
                                                            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                                                        </form>
                                                    <?php } ?>
                                                </div><!-- .news-text-wrap -->
                                            </div><!-- .news-item -->
                                        </div>

                                        <div class="featured-small-items">
                                            <h2><?php echo $detail->title; ?></h2>
                                            <div class=""><?php echo $detail->excerpt; ?></div>
                                            <p><?php if (!empty($detail->description)) echo $detail->description; ?></p>
                                            <p><strong>Author:</strong> <?php echo $detail->author_name; ?></p>
                                            <p><strong>Price:</strong> <?php echo $detail->discount_price; ?> USD</p>
                                            <p><strong>Page:</strong> <?php echo $detail->page_num; ?></p>
                                            <p><strong>File size:</strong> <?php echo $detail->file_size_kb; ?> KB</p>
                                            <p><strong>File type:</strong> <?php echo $detail->file_type; ?></p>
                                        </div><!-- .featured-small-items -->
                                    </div><!-- .inner-wrapper -->
                                </div><!-- .mix-column-news -->
                            </section>

                            <div class="news-col-3 related-posts">
                                <h3 class="related-posts-title">Related papers</h3>

                                <div class="inner-wrapper">


                                </div>
                            </div>
                        </main>
                    </div>
                </div><!-- #primary -->


                <div id="sidebar-primary" class="widget-area sidebar" role="complementary" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 2050px;">
                    <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: absolute; transform: translateY(639px); width: 330px; top: 0px;">
                    </div>
                </div><!-- #secondary -->
            </div><!-- .inner-wrapper --></div><!-- .container --></div><!-- #content -->


    <footer id="colophon" class="site-footer" role="contentinfo">
        <div class="container">
            <div class="site-info-holder">
                <div class="copyright">Copyright © Blockbod. All rights reserved.</div><!-- .copyright -->
            </div>
        </div><!-- .container -->
    </footer><!-- #colophon -->
</div><!-- #page -->


</body></html>





