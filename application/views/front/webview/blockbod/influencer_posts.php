<!DOCTYPE html>
<html lang="en-US" style="transform: none;">
<head>
    <title>Influencer posts and activities</title>

    <?php require_once 'common_head.php'; ?>
    <script type="text/javascript" src="<?php echo PUBLIC_FOLDER; ?>js/people.js"></script>
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
                            <section class="widget featured-news-section">
                                <!-- medium posts -->
                                <div id="medium_title" class="hidden"></div>
                                <div id="medium_stories" class="inner-wrapper">

                                </div>
                            </section>
                            <section class="widget featured-news-section">
                                <!--  -->

                            </section>
                            <section class="widget featured-news-section">
                                <!-- inner articles -->

                            </section>
                            <section class="widget featured-news-section">
                                <!-- twitter -->
                                <a class="twitter-timeline" href="https://twitter.com/<?php echo isset($detail->twitter_id)?$detail->twitter_id:''; ?>?ref_src=twsrc%5Etfw"></a>
                                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                            </section>
                        </main>
                    </div>
                    <div id="post_tmpl" class="news-item half-width hidden">
                        <div class="news-thumb">
                            <a>
                                <div class="home3-center-cropped center-cropped-fill">
                                </div>
                            </a>
                        </div><!-- .news-thumb -->
                        <div class="news-text-wrap">
                            <span class="posted-date"></span>
                            <h2><a class="ellipsis3lines_title title"></a></h2>
                            <div class="ellipsis3lines"></div>
                        </div>
                    </div>
                </div><!-- #primary -->


                <div id="sidebar-primary" class="widget-area sidebar" role="complementary" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1850.2px;">
                    <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: fixed; transform: translateY(-704px); top: 0px; width: 330px; left: 956px;">
                        <?php require_once 'top_papers.inc.php'; ?>

                        <aside id="media_image-3" class="widget widget_media_image">
                            <div class="aligncenter">
                                <script type="text/javascript">
                                    amzn_assoc_placement = "adunit0";
                                    amzn_assoc_tracking_id = "blockbodcom-20";
                                    amzn_assoc_ad_mode = "search";
                                    amzn_assoc_ad_type = "smart";
                                    amzn_assoc_marketplace = "amazon";
                                    amzn_assoc_region = "US";
                                    amzn_assoc_default_search_phrase = 'blockchain information';
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
<input type="hidden" value="<?php echo isset($detail->_id)?$detail->_id:''; ?>" id="people_id"/>
<input type="hidden" value="<?php echo isset($detail->medium_id)?$detail->medium_id:''; ?>" id="medium_id"/>

</body></html>