<!DOCTYPE html>
<html lang="en-US" style="transform: none;">
<head>
    <title>Influencer posts and activities</title>

    <?php require_once 'common_head.php'; ?>
    <script type="text/javascript" src="<?php echo PUBLIC_FOLDER; ?>js/people.js"></script>

    <link rel="stylesheet" href="/public/unity_assets/vendor/animate.css">
    <link rel="stylesheet" href="/public/unity_assets/vendor/custombox/custombox.min.css">

    <script src="/public/unity_assets/js/hs.core.js"></script>
    <script src="/public/unity_assets/vendor/custombox/custombox.min.js"></script>
    <script src="/public/unity_assets/js/components/hs.modal-window.js"></script>
    <!-- JS Plugins Init. -->
    <script >
        $(document).on('ready', function () {
            // initialization of popups
            $.HSCore.components.HSModalWindow.init('[data-modal-target]');
        });
    </script>
    <style>
        .news-item.layout-two .news-text-wrap {min-height:65px;}
    </style>
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
                                <!-- inner articles -->
                                <div id="our_articles" class="inner-wrapper">

                                </div>
                            </section>
                            <section class="widget featured-news-section">
                                <!-- twitter -->
                                <a class="twitter-timeline" href="https://twitter.com/<?php echo isset($detail->twitter_id)?$detail->twitter_id:''; ?>?ref_src=twsrc%5Etfw"></a>
                                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                            </section>
                        </main>
                    </div>

                    <div class="news-item layout-two g-mb-0 hidden" id="post_tmpl">
                        <div class="news-thumb g-width-65">
                            <a class="detail_link">
                                <img class="thumb"/>
                            </a>
                        </div><!-- .news-thumb -->
                        <div class="news-text-wrap g-pl-70">
                            <h2 class="g-mb-0 g-font-15">
                                <a class="title detail_link" href="#!"></a>
                            </h2>
                        </div><!-- .news-text-wrap -->
                    </div>

                    <div class="news-item half-width hidden" id="site_article_tmpl">
                        <div class="news-thumb">
                            <a>
                                <div class="home3-center-cropped center-cropped-fill thumb"></div>
                            </a>
                        </div><!-- .news-thumb -->

                        <div class="news-text-wrap">
                            <h2><a class="ellipsis3lines_title title"></a></h2>
                            <div class="ellipsis3lines excerpt"></div>
                        </div><!-- .news-text-wrap -->
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
<input type="hidden" value="<?php echo isset($detail->name)?$detail->name:''; ?>" id="influencer_name"/>

<!-- dialog to show content -->
<a class="btn u-btn-primary hide" id="btn_show_modal" href="#post_content_dialog" data-modal-target="#post_content_dialog" data-modal-effect="fadein">Launch Modal</a>
<div id="post_content_dialog" class="text-left g-bg-white g-overflow-y-auto g-pa-20 post_content_dialog" style="display: none;">
    <button type="button" class="close opacity_1" onclick="Custombox.modal.close();">
        <i class="fa fa-close g-color-black"></i>
    </button>
    <div id="post_content"></div>
</div>
</body></html>