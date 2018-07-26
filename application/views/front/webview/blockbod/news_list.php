<!DOCTYPE html>
<html lang="en-US" style="transform: none;">
<head>
    <title>Blockchain latest news and ICO detail tutorials</title>

    <?php require_once 'common_head.php'; ?>
</head>
<body class="home page-template page-template-templates page-template-home page-template-templateshome-php page page-id-1984 global-layout-right-sidebar blog-layout-grid global-sticky-sidebar" style="transform: none;">

<div id="page" class="site" style="transform: none;">
    <?php require_once 'common_menu.php'; ?>
    <!-- #masthead -->
    <div id="content" class="site-content" style="transform: none;">
        <div class="container" style="transform: none;"><div class="inner-wrapper" style="transform: none;">
                <div id="primary" class="content-area" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
                    <!-- #main -->
                    <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;">
                        <main id="main" class="site-main" role="main">

                            <section id="pt-magazine-featured-column-news-2" class="widget featured-news-section">
                                <div class="featured-news-wrap">
                                    <div class="inner-wrapper">
                                        <?php
                                        for ($i=0; $i<count($data_block); $i++){
                                            ?>
                                            <div class="news-item half-width">
                                                <div class="news-thumb">
                                                    <a href="<?php echo detail_uri($data_block[$i]->slug); ?>">
                                                        <div class="home3-center-cropped center-cropped-fill"
                                                             style="background-image: url('<?php echo $data_block[$i]->thumb_url;?>');">
                                                        </div>
                                                    </a>
                                                </div><!-- .news-thumb -->

                                                <div class="news-text-wrap">
                                                    <span class="posted-date"><?php echo format_post_time($data_block[$i]->time); ?></span>
                                                    <h2><a class="ellipsis3lines_title" href="<?php echo detail_uri($data_block[$i]->slug); ?>" title="<?php echo $data_block[$i]->title; ?>"><?php echo $data_block[$i]->title; ?></a></h2>
                                                    <div class="ellipsis3lines"><?php echo $data_block[$i]->excerpt; ?></div>
                                                </div><!-- .news-text-wrap -->
                                            </div><!-- .news-item -->
                                        <?php }//end for ?>
                                    </div><!-- .inner-wrapper -->
                                </div><!-- .mix-column-news -->
                            </section>
                            <?php echo $pagination; ?>
                        </main>
                    </div>
                </div><!-- #primary -->


                <div id="sidebar-primary" class="widget-area sidebar" role="complementary" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1850.2px;">
                    <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: fixed; transform: translateY(-704px); top: 0px; width: 330px; left: 956px;">
                        <aside id="pt-magazine-extended-recent-posts-2" class="widget extended-recent-posts widget_extended_recent_posts margin-b-20">
                            <div class="recent-news-section">
                                <div class="section-title">
                                    <h2 class="widget-title">Top papers</h2>
                                    <a href="#!">View All</a>
                                </div>
                                <div class="recent-posts-side">
                                    <?php require_once 'top_papers.inc.php'; ?>
                                </div>
                        </aside>

                        <aside id="media_image-3" class="widget widget_media_image">
                            <div class="aligncenter">
                                <script type="text/javascript">
                                    amzn_assoc_placement = "adunit0";
                                    amzn_assoc_tracking_id = "blockbodcom-20";
                                    amzn_assoc_ad_mode = "search";
                                    amzn_assoc_ad_type = "smart";
                                    amzn_assoc_marketplace = "amazon";
                                    amzn_assoc_region = "US";
                                    amzn_assoc_default_search_phrase = 'ico technology';
                                    amzn_assoc_default_category = "Books";
                                    amzn_assoc_linkid = "48f618ad78fd3bc4fb4e584b49467384";
                                    amzn_assoc_default_browse_node = "283155";
                                    amzn_assoc_title = "Most buy";
                                    amzn_assoc_search_bar = "false";
                                </script>
                                <script src="//z-na.amazon-adsystem.com/widgets/onejs?MarketPlace=US"></script>
                            </div>
                        </aside>
                    </div></div><!-- #secondary -->
            </div><!-- .inner-wrapper --></div><!-- .container --></div><!-- #content -->

        <?php require_once 'common_footer.php'; ?>
</div><!-- #page -->

<a href="#" class="scrollup" id="btn-scrollup" style="display: inline;">
    <i class="fa fa-angle-up"></i>
</a>

</body></html>