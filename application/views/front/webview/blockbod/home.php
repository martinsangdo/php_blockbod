<!DOCTYPE html>
<html lang="en-US" style="transform: none;">
    <head>
        <title>Blockchain latest news and ICO detail tutorials</title>

        <?php require_once 'common_head.php'; ?>
        <script type="text/javascript" src="<?php echo PUBLIC_FOLDER; ?>js/home.js"></script>

    </head>
<body class="home page-template page-template-templates page-template-home page-template-templateshome-php page page-id-1984 global-layout-right-sidebar blog-layout-grid global-sticky-sidebar" style="transform: none;">

<div id="page" class="site" style="transform: none;">
    <?php require_once 'common_menu.php'; ?>
    <!-- #masthead -->
    <div id="content" class="site-content" style="transform: none;">
        <?php $data_block = $block_key_1; ?>
        <div class="container" style="transform: none;"><div class="inner-wrapper" style="transform: none;">
                <div id="primary" class="content-area" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
                    <!-- #main -->
                    <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;"><main id="main" class="site-main" role="main">

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
                                        for ($i=1; $i<5; $i++){
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

                            <section id="pt-magazine-featured-column-news-2" class="widget featured-news-section">
                                <div class="featured-news-wrap">
                                    <div class="section-title">
                                        <h2 class="widget-title">Cat 1</h2>
                                        <a href="#">View All</a>
                                    </div>
                                    <div class="inner-wrapper">
                                        <div class="featured-large-item">
                                            <div class="news-item">
                                                <div class="news-thumb">
                                                    <a href="<?php echo detail_uri($data_block[5]->slug); ?>">
                                                        <div class="home3-center-cropped center-cropped-fill"
                                                             style="background-image: url('<?php echo $data_block[1]->thumb_url;?>');">
                                                        </div>
                                                    </a>
                                                </div><!-- .news-thumb -->
                                                <div class="news-text-wrap">
                                                    <h2><a href="<?php echo detail_uri($data_block[5]->slug); ?>"><?php echo $data_block[5]->title; ?></a></h2>
                                                    <span class="posted-date"><?php echo format_post_time($data_block[5]->time); ?></span>
                                                    <div class="ellipsis8lines"><?php echo $data_block[5]->excerpt; ?></div>
                                                </div><!-- .news-text-wrap -->
                                            </div><!-- .news-item -->
                                        </div>

                                        <div class="featured-small-items">
                                            <?php
                                            for ($i=6; $i<11; $i++){
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
                                <a href="#">
                                    <img src="<?php echo PUBLIC_FOLDER; ?>img/728x90-pt-mag-adv.jpg" class="image wp-image-2194  attachment-full size-full" style="max-width: 100%; height: auto;" atl="blockbod" title="blockbod"/>
                                </a>
                            </section>
                            <?php $data_block = $block_key_4; ?>
                            <section id="pt-magazine-two-column-news-2" class="widget two-col-section news-col-2">
                                <div class="two-column-news two-column-news-left">

                                    <div class="section-title">
                                        <h2 class="widget-title">Cat 3</h2>
                                        <a href="#">View All</a>
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
                                        <h2 class="widget-title">Cat 4</h2>
                                        <a href="#">View All</a>
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
                                        <h2 class="widget-title">Cat 5</h2>
                                        <a href="#">View All</a>
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

                            <section id="pt-magazine-featured-column-news-2" class="widget featured-news-section">
                                <div class="featured-news-wrap">
                                    <div class="section-title">
                                        <h2 class="widget-title">Cat 6</h2>
                                        <a href="#">View All</a>
                                    </div>
                                    <?php $data_block = $block_key_7; ?>
                                    <div class="inner-wrapper">
                                        <div class="featured-large-item">
                                            <div class="news-item">
                                                <div class="news-thumb">
                                                    <a href="<?php echo detail_uri($data_block[0]->slug); ?>">
                                                        <div class="home3-center-cropped center-cropped-fill"
                                                             style="background-image: url('<?php echo $data_block[0]->thumb_url;?>');">
                                                        </div>
                                                    </a>
                                                </div><!-- .news-thumb -->
                                                <div class="news-text-wrap">
                                                    <h2><a href="<?php echo detail_uri($data_block[0]->slug); ?>"><?php echo $data_block[0]->title; ?></a></h2>
                                                    <span class="posted-date"><?php echo format_post_time($data_block[0]->time); ?></span>
                                                    <div class="ellipsis8lines"><?php echo $data_block[0]->excerpt; ?></div>
                                                </div><!-- .news-text-wrap -->
                                            </div><!-- .news-item -->
                                        </div>

                                        <div class="featured-small-items">
                                            <?php
                                            for ($i=1; $i<6; $i++){
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
                                        <h2 class="widget-title">Cat 7</h2>
                                        <a href="#">View All</a>
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
                                    <?php $data_block = $block_key_9; ?>
                                    <div class="section-title">
                                        <h2 class="widget-title">Cat 8</h2>
                                        <a href="#">View All</a>
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
                                </div><!-- .two-column-news-right -->
                            </section>

                        </main>
                    </div>
                </div><!-- #primary -->


                <div id="sidebar-primary" class="widget-area sidebar" role="complementary" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1850.2px;">
                    <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: fixed; transform: translateY(-704px); top: 0px; width: 330px; left: 956px;">
                        <aside id="pt-magazine-extended-recent-posts-2" class="widget extended-recent-posts widget_extended_recent_posts margin-b-20">
                            <div class="recent-news-section">
                                <div class="section-title">
                                    <h2 class="widget-title">Pre ICO Offering</h2>
                                    <a href="#">View All</a>
                                </div>
                                <div class="recent-posts-side">
                                    <?php
                                    for ($i=0; $i<count($pre_icos); $i++){
                                        ?>
                                        <div class="news-item layout-two g-mb-0">
                                            <div class="news-thumb g-width-65">
                                                <a href="#">
                                                    <div class="ico-center-cropped center-cropped-fill"
                                                         style="background-image: url('<?php echo $pre_icos[$i]->thumb_url; ?>');">
                                                    </div>
                                                </a>
                                            </div><!-- .news-thumb -->
                                            <div class="news-text-wrap g-pl-70">
                                                <h2 class="g-mb-0 g-font-15"><?php echo $pre_icos[$i]->title; ?> <span class="minor_title"><?php echo strtoupper($pre_icos[$i]->minor_title); ?></span></h2>
                                                <span class="g-font-13 pointer"><?php echo $pre_icos[$i]->excerpt; ?></span>
                                            </div><!-- .news-text-wrap -->
                                        </div>
                                    <?php } //end for ?>
                                </div>
                        </aside>
                        <aside id="pt-magazine-extended-recent-posts-2" class="widget extended-recent-posts widget_extended_recent_posts margin-b-20">
                            <div class="recent-news-section">
                                <div class="section-title">
                                    <h2 class="widget-title">ICO Offering</h2>
                                    <a href="#">View All</a>
                                </div>
                                <div class="recent-posts-side">
                                    <?php
                                    for ($i=0; $i<count($ongoing_icos); $i++){
                                        ?>
                                        <div class="news-item layout-two g-mb-0">
                                            <div class="news-thumb g-width-65">
                                                <a href="#">
                                                    <div class="ico-center-cropped center-cropped-fill"
                                                         style="background-image: url('<?php echo $ongoing_icos[$i]->thumb_url; ?>');">
                                                    </div>
                                                </a>
                                            </div><!-- .news-thumb -->
                                            <div class="news-text-wrap g-pl-70">
                                                <h2 class="g-mb-0 g-font-15"><?php echo $ongoing_icos[$i]->title; ?> <span class="minor_title"><?php echo strtoupper($ongoing_icos[$i]->minor_title); ?></span></h2>
                                                <span class="g-font-13 pointer"><?php echo $ongoing_icos[$i]->excerpt; ?></span>
                                            </div><!-- .news-text-wrap -->
                                        </div>
                                    <?php } //end for ?>
                                </div>
                        </aside>
                        <aside id="pt-magazine-extended-recent-posts-2" class="widget extended-recent-posts widget_extended_recent_posts margin-b-20">
                            <div class="recent-news-section">
                                <div class="section-title">
                                    <h2 class="widget-title">Upcoming ICO Offering</h2>
                                    <a href="#">View All</a>
                                </div>
                                <div class="recent-posts-side">
                                    <?php
                                    for ($i=0; $i<count($upcoming_icos); $i++){
                                        ?>
                                        <div class="news-item layout-two g-mb-0">
                                            <div class="news-thumb g-width-65">
                                                <a href="#">
                                                    <div class="ico-center-cropped center-cropped-fill"
                                                         style="background-image: url('<?php echo $upcoming_icos[$i]->thumb_url; ?>');">
                                                    </div>
                                                </a>
                                            </div><!-- .news-thumb -->
                                            <div class="news-text-wrap g-pl-70">
                                                <h2 class="g-mb-0 g-font-15"><?php echo $upcoming_icos[$i]->title; ?> <span class="minor_title"><?php echo strtoupper($upcoming_icos[$i]->minor_title); ?></span></h2>
                                                <span class="g-font-13 pointer"><?php echo $upcoming_icos[$i]->excerpt; ?></span>
                                            </div><!-- .news-text-wrap -->
                                        </div>
                                    <?php } //end for ?>
                                </div>
                        </aside>
                        <aside id="pt-magazine-extended-recent-posts-2" class="widget extended-recent-posts widget_extended_recent_posts margin-b-20">
                            <div class="recent-news-section">
                                <div class="section-title">
                                    <h2 class="widget-title">Top papers</h2>
                                    <a href="#">View All</a>
                                </div>
                                <div class="recent-posts-side">

                                    <div class="news-item layout-two">
                                        <div class="news-thumb">
                                            <a href="#">
                                                <div class="book-thumb-center-cropped center-cropped-fill"
                                                     style="background-image: url('<?php echo PUBLIC_FOLDER; ?>img/sample_book/pdf.jpg');">
                                                </div>
                                            </a>
                                        </div><!-- .news-thumb -->
                                        <div class="news-text-wrap">
                                            <h2><a class="ellipsis3lines_title" href="#" title="How to write good ICO White paper?">How to write good ICO White paper?</a></h2>
                                            <div class="book_price_1">30 USD</div>
                                            <a class="buy_link pointer">BUY NOW</a>
                                        </div><!-- .news-text-wrap -->
                                    </div>

                                    <div class="news-item layout-two">
                                        <div class="news-thumb">
                                            <a href="#">
                                                <div class="book-thumb-center-cropped center-cropped-fill"
                                                     style="background-image: url('<?php echo PUBLIC_FOLDER; ?>img/sample_book/pdf.jpg');">
                                                </div>
                                            </a>
                                        </div><!-- .news-thumb -->
                                        <div class="news-text-wrap">
                                            <h2><a class="ellipsis3lines_title" href="#" title="How to make your own cryptocurrency?">How to make your own cryptocurrency?</a></h2>
                                            <div class="book_price_1">50 USD</div>
                                            <a class="buy_link pointer">BUY NOW</a>
                                        </div><!-- .news-text-wrap -->
                                    </div>

                                    <div class="news-item layout-two">
                                        <div class="news-thumb">
                                            <a href="#">
                                                <div class="book-thumb-center-cropped center-cropped-fill"
                                                     style="background-image: url('<?php echo PUBLIC_FOLDER; ?>img/sample_book/pdf.jpg');">
                                                </div>
                                            </a>
                                        </div><!-- .news-thumb -->
                                        <div class="news-text-wrap">
                                            <h2><a class="ellipsis3lines_title" href="#" title="All about ICO preparing">All about ICO preparing</a></h2>
                                            <div class="book_price_1">1,000 USD</div>
                                            <a class="buy_link pointer">BUY NOW</a>
                                        </div><!-- .news-text-wrap -->
                                    </div>
                                </div>
                        </aside>

                        <aside id="media_gallery-2" class="widget widget_media_gallery">
                            <div class="section-title">
                                <h2 class="widget-title">Best sellers</h2>
                                <a href="#">View All</a>
                            </div>
                            <div id="gallery-1" class="gallery galleryid-1984 gallery-columns-3 gallery-size-thumbnail">
                                <div class="gallery-item gallery-icon landscape">
                                    <a href="#">
                                        <div class="book-thumb-center-cropped center-cropped-fill"
                                             style="background-image: url('<?php echo PUBLIC_FOLDER; ?>img/sample_book/b7.jpg');">
                                        </div>
                                    </a>
                                </div>
                                <div class="gallery-item gallery-icon landscape">
                                    <a href="#">
                                        <div class="book-thumb-center-cropped center-cropped-fill"
                                             style="background-image: url('<?php echo PUBLIC_FOLDER; ?>img/sample_book/b8.jpg');">
                                        </div>
                                    </a>
                                </div>
                                <div class="gallery-item gallery-icon landscape">
                                    <a href="#">
                                        <div class="book-thumb-center-cropped center-cropped-fill"
                                             style="background-image: url('<?php echo PUBLIC_FOLDER; ?>img/sample_book/b3.jpg');">
                                        </div>
                                    </a>
                                </div>
                                <div class="gallery-item gallery-icon landscape">
                                    <a href="#">
                                        <div class="book-thumb-center-cropped center-cropped-fill"
                                             style="background-image: url('<?php echo PUBLIC_FOLDER; ?>img/sample_book/b5.jpg');">
                                        </div>
                                    </a>
                                </div>
                                <div class="gallery-item gallery-icon landscape">
                                    <a href="#">
                                        <div class="book-thumb-center-cropped center-cropped-fill"
                                             style="background-image: url('<?php echo PUBLIC_FOLDER; ?>img/sample_book/b6.jpg');">
                                        </div>
                                    </a>
                                </div>
                                <div class="gallery-item gallery-icon landscape">
                                    <a href="#">
                                        <div class="book-thumb-center-cropped center-cropped-fill"
                                             style="background-image: url('<?php echo PUBLIC_FOLDER; ?>img/sample_book/b1.jpg');">
                                        </div>
                                    </a>
                                </div>
                                <div class="gallery-item gallery-icon landscape">
                                    <a href="#">
                                        <div class="book-thumb-center-cropped center-cropped-fill"
                                             style="background-image: url('<?php echo PUBLIC_FOLDER; ?>img/sample_book/b2.jpg');">
                                        </div>
                                    </a>
                                </div>
                                <div class="gallery-item gallery-icon landscape">
                                    <a href="#">
                                        <div class="book-thumb-center-cropped center-cropped-fill"
                                             style="background-image: url('<?php echo PUBLIC_FOLDER; ?>img/sample_book/b9.jpg');">
                                        </div>
                                    </a>
                                </div>
                                <div class="gallery-item gallery-icon landscape">
                                    <a href="#">
                                        <div class="book-thumb-center-cropped center-cropped-fill"
                                             style="background-image: url('<?php echo PUBLIC_FOLDER; ?>img/sample_book/b4.jpg');">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </aside>

                        <aside id="pt-magazine-extended-recent-posts-2" class="widget extended-recent-posts widget_extended_recent_posts">
                            <div class="recent-news-section">
                                <div class="section-title"><h2 class="widget-title">Cat 9</h2></div>
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
                        <aside id="media_image-3" class="widget widget_media_image">
                                <a href="#">
                                    <img src="<?php echo PUBLIC_FOLDER; ?>img/336x280-pt-mag-adv.jpg" class="image wp-image-2195 attachment-full size-full" alt="blockbod ad" style="max-width: 100%; height: auto;" title="blockbod ad"/>
                                </a>
                        </aside>
                        <aside id="pt-magazine-extended-recent-posts-2" class="widget extended-recent-posts widget_extended_recent_posts margin-b-20">
                            <div class="recent-news-section">
                                <div class="section-title">
                                    <h2 class="widget-title">ICO Analysis</h2>
                                    <a href="#">View All</a>
                                </div>
                        </aside>
                        <aside id="pt-magazine-extended-recent-posts-2" class="widget extended-recent-posts widget_extended_recent_posts margin-b-20">
                            <div class="recent-news-section">
                                <div class="section-title">
                                    <h2 class="widget-title">Commentary</h2>
                                    <a href="#">View All</a>
                                </div>
                        </aside>

                        <aside id="pt-magazine-extended-recent-posts-2" class="widget extended-recent-posts widget_extended_recent_posts">
                            <div class="recent-news-section">

                                <div class="section-title"><h2 class="widget-title">Cat 10</h2></div>
                                <div class="recent-posts-side">
                                    <?php $data_block = $block_key_11; ?>
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

                    </div></div><!-- #secondary -->
            </div><!-- .inner-wrapper --></div><!-- .container --></div><!-- #content -->


    <footer id="colophon" class="site-footer" role="contentinfo">
        <div class="container">
            <div class="site-info-holder main-navigation">
                <ul class="menu">
                    <li id="menu-item-2139" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2139"><a href="#!">About</a></li>
                    <li id="menu-item-2139" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2139"><a href="#!">Terms & Conditions</a></li>
                    <li id="menu-item-2139" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2139"><a href="#!">Private policy</a></li>
                    <li id="menu-item-2139" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2139"><a href="#!">Advertising</a></li>
                    <li id="menu-item-2139" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2139"><a href="#!">Newsletter</a></li>
                    <li id="menu-item-2139" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2139"><a href="#!">Send comment & analysis</a></li>
                    <li id="menu-item-2139" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2139"><a href="#!">Contact</a></li>
                </ul>

                <div class="copyright">Copyright © Blockbod. All rights reserved.</div><!-- .copyright -->
            </div>
        </div><!-- .container -->
    </footer><!-- #colophon -->
</div><!-- #page -->

<a href="#" class="scrollup" id="btn-scrollup" style="display: inline;">
    <i class="fa fa-angle-up"></i>
</a>

</body></html>