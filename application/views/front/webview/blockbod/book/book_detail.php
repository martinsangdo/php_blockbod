<!DOCTYPE html>
<html lang="en-US" style="transform: none;">
<head>
    <title>Book: <?php echo $detail->title; ?></title>


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
                                                         style="background-image: url('<?php echo PUBLIC_FOLDER; ?>img/sample_book/pdf.jpg');">
                                                    </div>
                                                </div><!-- .news-thumb -->
                                                <div class="news-text-wrap">
                                                    <?php
                                                    if ($detail->is_external > 0){
                                                    ?>

                                                    <?php } else { ?>

                                                    <?php } ?>
                                                </div><!-- .news-text-wrap -->
                                            </div><!-- .news-item -->
                                        </div>

                                        <div class="featured-small-items">
                                            <h2><?php echo $detail->title; ?></h2>
                                            <div class="ellipsis8lines"><?php echo $detail->excerpt; ?></div>
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





