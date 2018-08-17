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
    <script type="text/javascript" src="/public/js/article_detail.js"></script>
    <script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5b76fa72d4ede100110aea51&product=inline-share-buttons"></script>

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
                                                            <time class="entry-date published"><?php echo format_post_time($article_detail->time); ?></time>
                                                        </a>
                                                    </span>
                                                </div><!-- .entry-meta -->

                                            </header><!-- .entry-header -->
                                            <div id="content_detail" class="entry-content">
                                                <?php echo $article_detail->content; ?>
                                            </div><!-- .entry-content -->
                                            <i>Source: <?php echo $site_detail->name; ?></i>
                                            <hr/>
                                            <div>Share this article:</div>
                                            <div class="sharethis-inline-share-buttons"></div>
                                        </div>
                                    </div>
                                </div>

                            </article><!-- #post-## -->

                            <!--
                            <div class="news-col-3 related-posts">

                                <h3 class="related-posts-title">Related Posts</h3>

                                <div id="related_post_container">
                                    <?php
                            /*
                                    for ($i=0; $i<3; $i++){
                                        if (isset($related_posts[$i])){
                                        ?>
                                        <div class="news-item three-column-item">
                                            <div class="news-thumb">
                                                <a href="<?php echo detail_uri($related_posts[$i]->slug); ?>">
                                                    <img src="<?php echo $related_posts[$i]->thumb_url; ?>" class="attachment-pt-magazine-tall size-pt-magazine-tall wp-post-image">
                                                </a>
                                            </div>
                                            <div class="news-text-wrap">
                                                <h2><a class="ellipsis3lines_title" href="<?php echo detail_uri($related_posts[$i]->slug); ?>"><?php echo $related_posts[$i]->title; ?></a></h2>
                                                <span class="posted-date"><?php echo format_post_time($article_detail->time); ?></span>
                                            </div><!-- .news-text-wrap -->
                                        </div>
                                    <?php } } */?>
                                </div>
                            </div>
                                -->

                            <div>
                                <input type="hidden" id="hid_slug" value="<?php echo $article_detail->slug; ?>"/>
                                <div id="disqus_thread"></div>
                                <script>
                                    /**
                                     *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                                     *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                                    var disqus_config = function () {
                                        this.page.url = window.location.href;  // Replace PAGE_URL with your page's canonical URL variable
                                        this.page.identifier = $('#hid_slug').val(); // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                                    };
                                    (function() { // DON'T EDIT BELOW THIS LINE
                                        var d = document, s = d.createElement('script');
                                        s.src = 'https://blockbod.disqus.com/embed.js';
                                        s.setAttribute('data-timestamp', +new Date());
                                        (d.head || d.body).appendChild(s);
                                    })();
                                </script>
                            </div><!-- #comments -->

                        </main>
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
                                    amzn_assoc_default_search_phrase = 'ico invest';
                                    amzn_assoc_default_category = "Books";
                                    amzn_assoc_linkid = "48f618ad78fd3bc4fb4e584b49467384";
                                    amzn_assoc_default_browse_node = "283155";
                                    amzn_assoc_title = "Most buy";
                                    amzn_assoc_search_bar = "false";
                                </script>
                                <script src="//z-na.amazon-adsystem.com/widgets/onejs?MarketPlace=US"></script>
                            </div>
                        </aside>

                        <aside id="pt-magazine-extended-recent-posts-2" class="widget extended-recent-posts widget_extended_recent_posts">
                            <div class="recent-news-section">
                                <div class="section-title"><h2 class="widget-title">Recent coins</h2></div>
                                <div class="recent-posts-side" id="recent_posts_container">
                                    <!-- data here -->
                                </div>
                        </aside>

                        <aside id="pt-magazine-extended-recent-posts-2" class="widget extended-recent-posts widget_extended_recent_posts">
                            <div class="recent-news-section">
                                <div class="section-title"><h2 class="widget-title">Market</h2></div>
                                <div class="recent-posts-side" id="random_posts_container">
                                    <!-- data here -->
                                </div>
                        </aside>
                        <div class="news-item layout-two hidden" id="post_tmpl">
                            <div class="news-thumb">
                                <a>
                                    <div class="home4-center-cropped center-cropped-fill thumb_url"></div>
                                </a>
                            </div><!-- .news-thumb -->
                            <div class="news-text-wrap">
                                <h2><a class="ellipsis3lines_title title"></a></h2>
                                <span class="posted-date"></span>
                            </div><!-- .news-text-wrap -->
                        </div>
                    </div>
                </div>

            </div><!-- .inner-wrapper --></div><!-- .container --></div><!-- #content -->


    <?php require_once 'common_footer.php'; ?>
</div><!-- #page -->
<div class="u-outer-spaces-helper">
    <div id="meta_data_container">
        <input type="hidden" id="post_id" value="<?php echo $article_detail->_id; ?>"/>
        <input type="hidden" id="extra_ids" value="<?php echo $extra_ids; ?>"/>
    </div>
</div>

<a href="#!" class="scrollup" id="btn-scrollup" style="display: inline;"><i class="fa fa-angle-up"></i></a>

<script type="text/javascript" src="/public/blockbod/js/skip-link-focus-fix.js"></script>
<script type="text/javascript" src="/public/blockbod/js/jquery.meanmenu.js"></script>
<script type="text/javascript" src="/public/blockbod/js/theia-sticky-sidebar.min.js"></script>
<script type="text/javascript" src="/public/blockbod/js/custom.js"></script>
<script type="text/javascript" src="/public/blockbod/js/wp-embed.min.js"></script>


</body></html>