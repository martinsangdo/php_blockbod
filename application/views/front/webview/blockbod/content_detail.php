<!DOCTYPE html>
<html lang="en-US" style="transform: none;">
<head>
    <title><?php echo $article_detail->title; ?></title>

    <meta property="og:title" content="<?php echo $article_detail->title; ?>" />
    <meta property="og:description" content="<?php echo htmlspecialchars(preg_replace( "/\r|\n/", "", strip_tags($article_detail->excerpt))); ?>" />
    <meta property="og:url" content="<?php echo full_url($_SERVER); ?>" />
    <meta property="og:image" content="<?php echo $article_detail->thumb_url; ?>"  />
    <meta property="og:image:url" content="<?php echo $article_detail->thumb_url; ?>" />

    <?php require_once 'common_head.php'; ?>

</head>

<body class="post-template-default single single-post postid-2057 single-format-standard global-layout-right-sidebar blog-layout-grid global-sticky-sidebar" style="transform: none;">

<div id="page" class="site" style="transform: none;">
    <?php require_once 'common_menu.php'; ?>

    <div id="content" class="site-content" style="transform: none;">

        <div class="container" style="transform: none;"><div class="inner-wrapper" style="transform: none;">
                <div id="primary" class="content-area" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
                    <!-- #main -->
                    <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;"><main id="main" class="site-main" role="main">


                            <article id="post-2057" class="post-2057 post type-post status-publish format-standard has-post-thumbnail hentry category-fashion tag-fashion tag-girl tag-lifestyle">
                                <div class="article-wrap-inner">
                                    <div class="content-wrap">
                                        <div class="content-wrap-inner">
                                            <header class="entry-header">
                                                <h2 class="entry-title"><?php echo $article_detail->title; ?></h2>
                                                <div class="entry-meta">
                                                    <span class="posted-on">
                                                        <a href="#" rel="bookmark">
                                                            <time class="entry-date published"><?php echo format_post_time($article_detail->update_time); ?></time>
                                                        </a>
                                                    </span>
                                                </div><!-- .entry-meta -->

                                            </header><!-- .entry-header -->
                                            <div id="content_detail" class="entry-content">
                                                <?php echo $article_detail->content; ?>
                                            </div><!-- .entry-content -->
                                        </div>
                                    </div>
                                </div>

                            </article><!-- #post-## -->

                        </main>
                    </div>
                </div><!-- #primary -->
                <div id="sidebar-primary" class="widget-area sidebar" role="complementary" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1850.2px;">
                    <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: fixed; transform: translateY(-704px); top: 0px; width: 330px; left: 956px;">

                        <aside id="media_image-3" class="widget widget_media_image">
                            <div class="aligncenter">
                                <script type="text/javascript">
                                    amzn_assoc_placement = "adunit0";
                                    amzn_assoc_tracking_id = "blockbodcom-20";
                                    amzn_assoc_ad_mode = "search";
                                    amzn_assoc_ad_type = "smart";
                                    amzn_assoc_marketplace = "amazon";
                                    amzn_assoc_region = "US";
                                    amzn_assoc_default_search_phrase = 'whitepaper ico';
                                    amzn_assoc_default_category = "Books";
                                    amzn_assoc_linkid = "48f618ad78fd3bc4fb4e584b49467384";
                                    amzn_assoc_default_browse_node = "283155";
                                    amzn_assoc_title = "Most buy";
                                    amzn_assoc_search_bar = "false";
                                </script>
                                <script src="//z-na.amazon-adsystem.com/widgets/onejs?MarketPlace=US"></script>
                            </div>
                        </aside>
                    </div>
                </div>

                <div id="sidebar-primary" class="widget-area sidebar" role="complementary" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 2050px;">
                    <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: absolute; transform: translateY(639px); width: 330px; top: 0px;">
                    </div>
                </div><!-- #secondary -->
            </div><!-- .inner-wrapper --></div><!-- .container --></div><!-- #content -->


    <?php require_once 'common_footer.php'; ?>
</div><!-- #page -->
<div class="u-outer-spaces-helper">
    <div id="meta_data_container">
        <input type="hidden" id="post_id" value="<?php echo $article_detail->_id; ?>"/>
    </div>
</div>

<a href="#!" class="scrollup" id="btn-scrollup" style="display: inline;"><i class="fa fa-angle-up"></i></a>

<script type="text/javascript" src="/public/blockbod/js/skip-link-focus-fix.js"></script>
<script type="text/javascript" src="/public/blockbod/js/jquery.meanmenu.js"></script>
<script type="text/javascript" src="/public/blockbod/js/theia-sticky-sidebar.min.js"></script>
<script type="text/javascript" src="/public/blockbod/js/custom.js"></script>
<script type="text/javascript" src="/public/blockbod/js/wp-embed.min.js"></script>


</body></html>