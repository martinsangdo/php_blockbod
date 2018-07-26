<!DOCTYPE html>
<html lang="en-US" style="transform: none;">
    <head>
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({
                google_ad_client: "ca-pub-5713335630954493",
                enable_page_level_ads: true
            });
        </script>
        <title>Blockchain latest news and ICO detail tutorials</title>

        <?php require_once 'common_head.php'; ?>
        <script type="text/javascript" src="<?php echo PUBLIC_FOLDER; ?>js/home.js"></script>
        <script src="https://storage.googleapis.com/code-snippets/rapidapi.min.js"></script>
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

                            <section id="pt-magazine-mix-column-news-3" class="widget mix-news-section">
                                <div class="entertainment-news-section">
                                    <?php $data_block = $block_key_3; ?>
                                    <div class="inner-wrapper">

                                        <div class="news-item full-width">
                                            <div class="news-thumb">
                                                <a href="<?php echo detail_uri($data_block[0]->slug); ?>">
                                                    <div class="home5-center-cropped center-cropped-fill"
                                                         style="background-image: url('<?php echo $data_block[0]->thumb_url;?>');">
                                                    </div>
                                                </a>
                                            </div><!-- .news-thumb -->
                                            <div class="news-text-wrap">
                                                <span class="posted-date"><?php echo format_post_time($data_block[0]->time); ?></span>
                                                <h2><a href="<?php echo detail_uri($data_block[0]->slug); ?>"><?php echo $data_block[0]->title; ?></a></h2>
                                                <div><?php echo $data_block[0]->excerpt; ?></div>
                                            </div><!-- .news-text-wrap -->
                                        </div><!-- .news-item -->

                                        <?php
                                        for ($i=1; $i<3; $i++){
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

                            <section id="pt-magazine-three-column-news-2" class="widget three-col-section news-col-3">
                                <?php $data_block = $top_coin_news; ?>
                                <div class="three-news-section">

                                    <div class="section-title">
                                        <h2 class="widget-title">Top coin news</h2>
                                        <a href="/news/group_list/7/tech">View All</a>
                                    </div>
                                    <div class="inner-wrapper">
                                        <?php
                                        for ($i=0; $i<12; $i++){
                                            ?>
                                            <div class="news-item three-column-item">
                                                <div class="news-thumb">
                                                    <a href="<?php echo detail_uri($data_block[$i]->slug); ?>">
                                                        <div class="home6-center-cropped center-cropped-fill"
                                                             style="background-image: url('<?php echo $data_block[$i]->thumb_url;?>');">
                                                        </div>
                                                    </a>
                                                </div><!-- .news-thumb -->
                                                <div class="news-text-wrap">
                                                    <h2><a class="ellipsis3lines_title" href="<?php echo detail_uri($data_block[$i]->slug); ?>" title="<?php echo $data_block[$i]->title; ?>"><?php echo $data_block[$i]->title; ?></a></h2>
                                                    <span class="posted-date"><?php echo format_post_time($data_block[$i]->time); ?></span>
                                                </div><!-- .news-text-wrap -->
                                            </div><!-- .news-item -->
                                        <?php }//end for ?>
                                    </div><!-- .inner-wrapper -->

                                </div><!-- .mix-column-news -->
                            </section>

                            <section id="pt-magazine-featured-column-news-2" class="widget featured-news-section">
                                <?php $data_block = $block_key_3; ?>
                                <div class="featured-news-wrap">
                                    <div class="section-title">
                                        <h2 class="widget-title">Investment</h2>
                                        <a href="/news/group_list/1/top-coin-news">View All</a>
                                    </div>
                                    <div class="inner-wrapper">
                                        <div class="featured-large-item">
                                            <div class="news-item">
                                                <div class="news-thumb">
                                                    <a href="<?php echo detail_uri($data_block[3]->slug); ?>">
                                                        <div class="home3-center-cropped center-cropped-fill"
                                                             style="background-image: url('<?php echo $data_block[3]->thumb_url;?>');">
                                                        </div>
                                                    </a>
                                                </div><!-- .news-thumb -->
                                                <div class="news-text-wrap">
                                                    <h2><a href="<?php echo detail_uri($data_block[3]->slug); ?>"><?php echo $data_block[3]->title; ?></a></h2>
                                                    <span class="posted-date"><?php echo format_post_time($data_block[3]->time); ?></span>
                                                    <div class="ellipsis8lines"><?php echo $data_block[3]->excerpt; ?></div>
                                                </div><!-- .news-text-wrap -->
                                            </div><!-- .news-item -->
                                        </div>

                                        <div class="featured-small-items">
                                            <?php
                                            for ($i=4; $i<9; $i++){
                                                ?>
                                                <div class="news-item layout-two g-mb-10">
                                                    <div class="news-thumb">
                                                        <a href="<?php echo detail_uri($data_block[$i]->slug); ?>">
                                                            <div class="home4-center-cropped center-cropped-fill"
                                                                 style="background-image: url('<?php echo $data_block[$i]->thumb_url;?>');">
                                                            </div>
                                                        </a>
                                                    </div><!-- .news-thumb -->
                                                    <div class="news-text-wrap">
                                                        <h2><a class="ellipsis3lines_title" href="<?php echo detail_uri($data_block[$i]->slug); ?>" title="<?php echo $data_block[$i]->title; ?>"><?php echo $data_block[$i]->title; ?></a></h2>
                                                        <span class="posted-date"><?php echo format_post_time($data_block[$i]->time); ?></span>
                                                    </div><!-- .news-text-wrap -->
                                                </div><!-- .news-item -->
                                            <?php }//end for ?>
                                        </div><!-- .featured-small-items -->
                                    </div><!-- .inner-wrapper -->
                                </div><!-- .mix-column-news -->
                            </section>

                            <section id="media_image-4" class="widget widget_media_image">
                                <script type="text/javascript">
                                    amzn_assoc_placement = "adunit0";
                                    amzn_assoc_tracking_id = "blockbodcom-20";
                                    amzn_assoc_ad_mode = "search";
                                    amzn_assoc_ad_type = "smart";
                                    amzn_assoc_marketplace = "amazon";
                                    amzn_assoc_region = "US";
                                    amzn_assoc_default_search_phrase = '<?php echo $ad_keywords[0]; ?>';
                                    amzn_assoc_default_category = "Books";
                                    amzn_assoc_linkid = "48f618ad78fd3bc4fb4e584b49467384";
                                    amzn_assoc_design = "in_content";
                                    amzn_assoc_default_browse_node = "283155";
                                </script>
                                <script src="//z-na.amazon-adsystem.com/widgets/onejs?MarketPlace=US"></script>
                            </section>

                            <?php $data_block = $block_key_4; ?>
                            <section id="pt-magazine-two-column-news-2" class="widget two-col-section news-col-2">
                                <div class="two-column-news two-column-news-left">

                                    <div class="section-title">
                                        <h2 class="widget-title">Worldwide</h2>
                                        <a href="/news/group_list/4/worldwide">View All</a>
                                    </div>

                                    <div class="inner-wrapper">

                                        <div class="news-item">
                                            <div class="news-thumb">
                                                <a href="<?php echo detail_uri($data_block[0]->slug); ?>">
                                                    <img class="home3-center-cropped center-cropped-fill" src="<?php echo $data_block[0]->thumb_url;?>" />
                                                </a>
                                            </div><!-- .news-thumb -->
                                            <div class="news-text-wrap">
                                                <h2><a class="ellipsis3lines_title" href="<?php echo detail_uri($data_block[0]->slug); ?>" title="<?php echo $data_block[$i]->title; ?>"><?php echo $data_block[0]->title; ?></a></h2>
                                                <span class="posted-date"><?php echo format_post_time($data_block[0]->time); ?></span>
                                                <div class="ellipsis3lines"><?php echo $data_block[0]->excerpt; ?></div>
                                            </div><!-- .news-text-wrap -->
                                        </div><!-- .news-item -->

                                        <?php
                                        for ($i=1; $i<5; $i++){
                                        ?>
                                        <div class="news-item layout-two">
                                            <div class="news-thumb">
                                                <a href="<?php echo detail_uri($data_block[$i]->slug); ?>">
                                                    <img class="home4-center-cropped center-cropped-fill" src="<?php echo $data_block[$i]->thumb_url;?>"/>
                                                </a>
                                            </div><!-- .news-thumb -->
                                            <div class="news-text-wrap">
                                                <h2><a class="ellipsis3lines_title" href="<?php echo detail_uri($data_block[$i]->slug); ?>" title="<?php echo $data_block[$i]->title; ?>"><?php echo $data_block[$i]->title; ?></a></h2>
                                                <span class="posted-date"><?php echo format_post_time($data_block[$i]->time); ?></span>
                                            </div><!-- .news-text-wrap -->
                                        </div><!-- .news-item -->
                                        <?php }//end for ?>
                                    </div><!-- .inner-wrapper -->
                                </div><!-- .two-column-news-left -->

                                <div class="two-column-news two-column-news-right">
                                    <?php $data_block = $block_key_5; ?>
                                    <div class="section-title">
                                        <h2 class="widget-title">Market</h2>
                                        <a href="/news/group_list/5/market">View All</a>
                                    </div>

                                    <div class="inner-wrapper">

                                        <div class="news-item">
                                            <div class="news-thumb">
                                                <a href="<?php echo detail_uri($data_block[0]->slug); ?>">
                                                    <img id="test_img" class="home3-center-cropped center-cropped-fill" src="<?php echo $data_block[0]->thumb_url;?>"
                                                         style="background-image: url('<?php echo $data_block[0]->thumb_url;?>');">
                                                    </img>
                                                </a>
                                            </div><!-- .news-thumb -->

                                            <div class="news-text-wrap">
                                                <h2><a class="ellipsis3lines_title" href="<?php echo detail_uri($data_block[0]->slug); ?>" title="<?php echo $data_block[$i]->title; ?>"><?php echo $data_block[0]->title; ?></a></h2>
                                                <span class="posted-date"><?php echo format_post_time($data_block[0]->time); ?></span>
                                                <div class="ellipsis3lines"><?php echo $data_block[0]->excerpt; ?></div>
                                            </div><!-- .news-text-wrap -->
                                        </div><!-- .news-item -->

                                        <?php
                                        for ($i=1; $i<5; $i++){
                                        ?>
                                        <div class="news-item layout-two">
                                            <div class="news-thumb">
                                                <a href="<?php echo detail_uri($data_block[$i]->slug); ?>">
                                                    <img class="home4-center-cropped center-cropped-fill"
                                                         style="background-image: url('<?php echo $data_block[$i]->thumb_url;?>');">
                                                    </img>
                                                </a>
                                            </div><!-- .news-thumb -->
                                            <div class="news-text-wrap">
                                                <h2><a class="ellipsis3lines_title" href="<?php echo detail_uri($data_block[$i]->slug); ?>" title="<?php echo $data_block[$i]->title; ?>"><?php echo $data_block[$i]->title; ?></a></h2>
                                                <span class="posted-date"><?php echo format_post_time($data_block[$i]->time); ?></span>
                                            </div><!-- .news-text-wrap -->
                                        </div><!-- .news-item -->
                                        <?php }//end for ?>
                                    </div><!-- .inner-wrapper -->
                                </div><!-- .two-column-news-right -->
                            </section>

                            <section id="pt-magazine-three-column-news-2" class="widget three-col-section news-col-3">
                                <div class="three-news-section">

                                    <div class="section-title">
                                        <h2 class="widget-title">Tech</h2>
                                        <a href="/news/group_list/7/tech">View All</a>
                                    </div>
                                    <?php $data_block = $block_key_6; ?>
                                    <div class="inner-wrapper">
                                        <?php
                                        for ($i=0; $i<9; $i++){
                                        ?>
                                        <div class="news-item three-column-item">
                                            <div class="news-thumb">
                                                <a href="<?php echo detail_uri($data_block[$i]->slug); ?>">
                                                    <div class="home6-center-cropped center-cropped-fill"
                                                         style="background-image: url('<?php echo $data_block[$i]->thumb_url;?>');">
                                                    </div>
                                                </a>
                                            </div><!-- .news-thumb -->
                                            <div class="news-text-wrap">
                                                <h2><a class="ellipsis3lines_title" href="<?php echo detail_uri($data_block[$i]->slug); ?>" title="<?php echo $data_block[$i]->title; ?>"><?php echo $data_block[$i]->title; ?></a></h2>
                                                <span class="posted-date"><?php echo format_post_time($data_block[$i]->time); ?></span>
                                            </div><!-- .news-text-wrap -->
                                        </div><!-- .news-item -->
                                        <?php }//end for ?>
                                    </div><!-- .inner-wrapper -->

                                </div><!-- .mix-column-news -->
                            </section>

                            <section id="media_image-4" class="widget widget_media_image">
                                <script type="text/javascript">
                                    amzn_assoc_placement = "adunit0";
                                    amzn_assoc_tracking_id = "blockbodcom-20";
                                    amzn_assoc_ad_mode = "search";
                                    amzn_assoc_ad_type = "smart";
                                    amzn_assoc_marketplace = "amazon";
                                    amzn_assoc_region = "US";
                                    amzn_assoc_default_search_phrase = '<?php echo $ad_keywords[1]; ?>';
                                    amzn_assoc_default_category = "Books";
                                    amzn_assoc_linkid = "48f618ad78fd3bc4fb4e584b49467384";
                                    amzn_assoc_design = "in_content";
                                    amzn_assoc_default_browse_node = "283155";
                                </script>
                                <script src="//z-na.amazon-adsystem.com/widgets/onejs?MarketPlace=US"></script>
                            </section>

                            <section id="pt-magazine-featured-column-news-2" class="widget featured-news-section">
                                <div class="featured-news-wrap">
                                    <div class="section-title">
                                        <h2 class="widget-title">Industry</h2>
                                        <a href="/news/group_list/14/industry">View All</a>
                                    </div>
                                    <div class="inner-wrapper">
                                        <div class="featured-large-item">
                                            <div class="news-item">
                                                <div class="news-thumb">
                                                    <a href="<?php echo detail_uri($data_block[9]->slug); ?>">
                                                        <div class="home3-center-cropped center-cropped-fill"
                                                             style="background-image: url('<?php echo $data_block[9]->thumb_url;?>');">
                                                        </div>
                                                    </a>
                                                </div><!-- .news-thumb -->
                                                <div class="news-text-wrap">
                                                    <h2><a href="<?php echo detail_uri($data_block[9]->slug); ?>"><?php echo $data_block[9]->title; ?></a></h2>
                                                    <span class="posted-date"><?php echo format_post_time($data_block[9]->time); ?></span>
                                                    <div class="ellipsis8lines"><?php echo $data_block[9]->excerpt; ?></div>
                                                </div><!-- .news-text-wrap -->
                                            </div><!-- .news-item -->
                                        </div>

                                        <div class="featured-small-items">
                                            <?php
                                            for ($i=10; $i<15; $i++){
                                                ?>
                                                <div class="news-item layout-two">
                                                    <div class="news-thumb">
                                                        <a href="<?php echo detail_uri($data_block[$i]->slug); ?>">
                                                            <div class="home4-center-cropped center-cropped-fill"
                                                                 style="background-image: url('<?php echo $data_block[$i]->thumb_url;?>');">
                                                            </div>
                                                        </a>
                                                    </div><!-- .news-thumb -->
                                                    <div class="news-text-wrap">
                                                        <h2><a class="ellipsis3lines_title" href="<?php echo detail_uri($data_block[$i]->slug); ?>" title="<?php echo $data_block[$i]->title; ?>"><?php echo $data_block[$i]->title; ?></a></h2>
                                                        <span class="posted-date"><?php echo format_post_time($data_block[$i]->time); ?></span>
                                                    </div><!-- .news-text-wrap -->
                                                </div><!-- .news-item -->
                                            <?php }//end for ?>
                                        </div><!-- .featured-small-items -->
                                    </div><!-- .inner-wrapper -->
                                </div><!-- .mix-column-news -->
                            </section>

                            <?php $data_block = $block_key_8; ?>
                            <section id="pt-magazine-two-column-news-2" class="widget two-col-section news-col-2">
                                <div class="two-column-news two-column-news-left">

                                    <div class="section-title">
                                        <h2 class="widget-title">People</h2>
                                        <a href="/news/group_list/12/people">View All</a>
                                    </div>

                                    <div class="inner-wrapper">

                                        <div class="news-item">
                                            <div class="news-thumb">
                                                <a href="<?php echo detail_uri($data_block[0]->slug); ?>">
                                                    <div class="home3-center-cropped center-cropped-fill"
                                                         style="background-image: url('<?php echo $data_block[0]->thumb_url;?>');">
                                                    </div>
                                                </a>
                                            </div><!-- .news-thumb -->
                                            <div class="news-text-wrap">
                                                <h2><a class="ellipsis3lines_title" href="<?php echo detail_uri($data_block[0]->slug); ?>" title="<?php echo $data_block[$i]->title; ?>"><?php echo $data_block[0]->title; ?></a></h2>
                                                <span class="posted-date"><?php echo format_post_time($data_block[0]->time); ?></span>
                                                <div class="ellipsis3lines"><?php echo $data_block[0]->excerpt; ?></div>
                                            </div><!-- .news-text-wrap -->
                                        </div><!-- .news-item -->

                                        <?php
                                        for ($i=1; $i<5; $i++){
                                            ?>
                                            <div class="news-item layout-two">
                                                <div class="news-thumb">
                                                    <a href="<?php echo detail_uri($data_block[$i]->slug); ?>">
                                                        <div class="home4-center-cropped center-cropped-fill"
                                                             style="background-image: url('<?php echo $data_block[$i]->thumb_url;?>');">
                                                        </div>
                                                    </a>
                                                </div><!-- .news-thumb -->
                                                <div class="news-text-wrap">
                                                    <h2><a class="ellipsis3lines_title" href="<?php echo detail_uri($data_block[$i]->slug); ?>" title="<?php echo $data_block[$i]->title; ?>"><?php echo $data_block[$i]->title; ?></a></h2>
                                                    <span class="posted-date"><?php echo format_post_time($data_block[$i]->time); ?></span>
                                                </div><!-- .news-text-wrap -->
                                            </div><!-- .news-item -->
                                        <?php }//end for ?>
                                    </div><!-- .inner-wrapper -->
                                </div><!-- .two-column-news-left -->

                                <div class="two-column-news two-column-news-right">
                                    <?php $data_block = $top_coin_news; ?>
                                    <div class="section-title">
                                        <h2 class="widget-title">Regulation</h2>
                                        <a href="/news/group_list/2/regulation">View All</a>
                                    </div>

                                    <div class="inner-wrapper">

                                        <div class="news-item">
                                            <div class="news-thumb">
                                                <a href="<?php echo detail_uri($data_block[12]->slug); ?>">
                                                    <div class="home3-center-cropped center-cropped-fill"
                                                         style="background-image: url('<?php echo $data_block[12]->thumb_url;?>');">
                                                    </div>
                                                </a>
                                            </div><!-- .news-thumb -->

                                            <div class="news-text-wrap">
                                                <h2><a class="ellipsis3lines_title" href="<?php echo detail_uri($data_block[12]->slug); ?>" title="<?php echo $data_block[12]->title; ?>"><?php echo $data_block[12]->title; ?></a></h2>
                                                <span class="posted-date"><?php echo format_post_time($data_block[12]->time); ?></span>
                                                <div class="ellipsis3lines"><?php echo $data_block[12]->excerpt; ?></div>
                                            </div><!-- .news-text-wrap -->
                                        </div><!-- .news-item -->

                                        <?php
                                        for ($i=13; $i<17; $i++){
                                            ?>
                                            <div class="news-item layout-two">
                                                <div class="news-thumb">
                                                    <a href="<?php echo detail_uri($data_block[$i]->slug); ?>">
                                                        <div class="home4-center-cropped center-cropped-fill"
                                                             style="background-image: url('<?php echo $data_block[$i]->thumb_url;?>');">
                                                        </div>
                                                    </a>
                                                </div><!-- .news-thumb -->
                                                <div class="news-text-wrap">
                                                    <h2><a class="ellipsis3lines_title" href="<?php echo detail_uri($data_block[$i]->slug); ?>" title="<?php echo $data_block[$i]->title; ?>"><?php echo $data_block[$i]->title; ?></a></h2>
                                                    <span class="posted-date"><?php echo format_post_time($data_block[$i]->time); ?></span>
                                                </div><!-- .news-text-wrap -->
                                            </div><!-- .news-item -->
                                        <?php }//end for ?>
                                    </div><!-- .inner-wrapper -->
                                </div><!-- .two-column-news-right -->
                            </section>

                        </main>
                    </div>
                </div><!-- #primary -->


                <div id="sidebar-primary" class="widget-area sidebar" role="complementary" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1850.2px;">
                    <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: fixed; transform: translateY(-704px); top: 0px; width: 330px; left: 956px;">
                        <aside id="pt-magazine-extended-recent-posts-2" class="widget extended-recent-posts widget_extended_recent_posts">
                            <div class="recent-news-section">
                                <div class="section-title">
                                    <h2 class="widget-title">Upcoming ICO</h2>
                                    <a href="/ico/list/getOnlyUpcomingICOs/upcoming">View All</a>
                                </div>
                                <div class="news-item layout-two g-mb-0 hidden" id="ico_tmpl">
                                    <div class="news-thumb g-width-65">
                                        <a target="_blank" class="detail_link">
                                            <img class="thumb"/>
                                        </a>
                                    </div><!-- .news-thumb -->
                                    <div class="news-text-wrap g-pl-70">
                                        <h2 class="g-mb-0 g-font-15">
                                            <a target="_blank" class="title detail_link"></a>
                                            <span class="minor_title"></span>
                                        </h2>
                                        <span class="g-font-13 pointer excerpt"></span>
                                    </div><!-- .news-text-wrap -->
                                </div>
                                <div class="recent-posts-side" id="upcoming_ico_container">
                                    <!-- data here -->
                                    <img src="<?php echo PUBLIC_FOLDER; ?>img/loading.gif" id="upcoming_loading_icon" width="60"/>
                                </div>
                        </aside>
                        <aside id="pt-magazine-extended-recent-posts-2" class="widget extended-recent-posts widget_extended_recent_posts">
                            <div class="recent-news-section">
                                <div class="section-title">
                                    <h2 class="widget-title">Live ICO</h2>
                                    <a href="/ico/list/getOnlyLiveICOs/live">View All</a>
                                </div>
                                <div class="recent-posts-side" id="live_ico_container">
                                    <img src="<?php echo PUBLIC_FOLDER; ?>img/loading.gif" id="live_loading_icon" width="60"/>
                                    <!-- data here -->
                                </div>
                        </aside>
                        <aside id="pt-magazine-extended-recent-posts-2" class="widget extended-recent-posts widget_extended_recent_posts">
                            <div class="recent-news-section">
                                <div class="section-title">
                                    <h2 class="widget-title">Finished ICO</h2>
                                    <a href="/ico/list/getOnlyFinishedICOs/finished">View All</a>
                                </div>
                                <div class="recent-posts-side" id="finished_ico_container">
                                    <img src="<?php echo PUBLIC_FOLDER; ?>img/loading.gif" id="finished_loading_icon" width="60"/>
                                    <!-- data here -->
                                </div>
                        </aside>
                        <aside id="pt-magazine-extended-recent-posts-2" class="widget extended-recent-posts widget_extended_recent_posts margin-b-20">
                            <div class="recent-news-section">
                                <div class="section-title">
                                    <h2 class="widget-title">Top papers</h2>
                                    <a href="/paper/list">View All</a>
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
                                    amzn_assoc_default_search_phrase = 'cryptocurrency ico';
                                    amzn_assoc_default_category = "Books";
                                    amzn_assoc_linkid = "48f618ad78fd3bc4fb4e584b49467384";
                                    amzn_assoc_default_browse_node = "283155";
                                    amzn_assoc_title = "Best sellers";
                                    amzn_assoc_search_bar = "false";
                                </script>
                                <script src="//z-na.amazon-adsystem.com/widgets/onejs?MarketPlace=US"></script>
                            </div>
                        </aside>

                        <aside id="pt-magazine-extended-recent-posts-2" class="widget extended-recent-posts widget_extended_recent_posts">
                            <div class="recent-news-section">
                                <div class="section-title"><h2 class="widget-title">Marketplace</h2></div>
                                <?php $data_block = $block_key_10; ?>
                                <div class="recent-posts-side">
                                    <?php
                                    for ($i=0; $i<5; $i++){
                                    ?>
                                    <div class="news-item layout-two">
                                        <div class="news-thumb">
                                            <a href="<?php echo detail_uri($data_block[$i]->slug); ?>">
                                                <div class="home4-center-cropped center-cropped-fill"
                                                     style="background-image: url('<?php echo $data_block[$i]->thumb_url;?>');">
                                                </div>
                                            </a>
                                        </div><!-- .news-thumb -->
                                        <div class="news-text-wrap">
                                            <h2><a class="ellipsis3lines_title" href="<?php echo detail_uri($data_block[$i]->slug); ?>" title="<?php echo $data_block[$i]->title; ?>"><?php echo $data_block[$i]->title; ?></a></h2>
                                            <span class="posted-date"><?php echo format_post_time($data_block[$i]->time); ?></span>
                                        </div><!-- .news-text-wrap -->
                                    </div><!-- .news-item -->
                                    <?php }//end for ?>
                                </div>

                        </aside>
                        <?php $data_block = $block_key_11; ?>
                        <aside id="pt-magazine-extended-recent-posts-2" class="widget extended-recent-posts widget_extended_recent_posts margin-b-20">
                            <div class="recent-news-section">
                                <div class="section-title">
                                    <h2 class="widget-title">White Paper Introduction</h2>
                                    <a href="/news/group_list/3/ico-analysis">View All</a>
                                </div>
                                <div class="recent-posts-side">
                                    <?php
                                    for ($i=0; $i<3; $i++){
                                        ?>
                                        <div class="news-item layout-two">
                                            <div class="news-thumb">
                                                <a href="<?php echo detail_uri($data_block[$i]->slug); ?>">
                                                    <div class="home4-center-cropped center-cropped-fill"
                                                         style="background-image: url('<?php echo $data_block[$i]->thumb_url;?>');">
                                                    </div>
                                                </a>
                                            </div><!-- .news-thumb -->
                                            <div class="news-text-wrap">
                                                <h2><a class="ellipsis3lines_title" href="<?php echo detail_uri($data_block[$i]->slug); ?>" title="<?php echo $data_block[$i]->title; ?>"><?php echo $data_block[$i]->title; ?></a></h2>
                                                <span class="posted-date"><?php echo format_post_time($data_block[$i]->time); ?></span>
                                            </div><!-- .news-text-wrap -->
                                        </div><!-- .news-item -->
                                    <?php }//end for ?>
                                </div>
                        </aside>
                        <aside id="pt-magazine-extended-recent-posts-2" class="widget extended-recent-posts widget_extended_recent_posts margin-b-20">
                            <div class="recent-news-section">
                                <div class="section-title">
                                    <h2 class="widget-title">Prospect (Green) Paper</h2>
                                    <a href="/news/group_list/15/commentary">View All</a>
                                </div>
                                <div class="recent-posts-side">
                                    <?php
                                    for ($i=3; $i<6; $i++){
                                        ?>
                                        <div class="news-item layout-two">
                                            <div class="news-thumb">
                                                <a href="<?php echo detail_uri($data_block[$i]->slug); ?>">
                                                    <div class="home4-center-cropped center-cropped-fill"
                                                         style="background-image: url('<?php echo $data_block[$i]->thumb_url;?>');">
                                                    </div>
                                                </a>
                                            </div><!-- .news-thumb -->
                                            <div class="news-text-wrap">
                                                <h2><a class="ellipsis3lines_title" href="<?php echo detail_uri($data_block[$i]->slug); ?>" title="<?php echo $data_block[$i]->title; ?>"><?php echo $data_block[$i]->title; ?></a></h2>
                                                <span class="posted-date"><?php echo format_post_time($data_block[$i]->time); ?></span>
                                            </div><!-- .news-text-wrap -->
                                        </div><!-- .news-item -->
                                    <?php }//end for ?>
                                </div>
                        </aside>

                        <aside id="pt-magazine-extended-recent-posts-2" class="widget extended-recent-posts widget_extended_recent_posts">
                            <div class="recent-news-section">
                                <div class="recent-posts-side">
                                    <a class="twitter-timeline"  href="https://twitter.com/search?q=blockchain" data-widget-id="998766983968473088"></a>
                                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
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