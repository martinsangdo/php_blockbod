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
                                                    <img class="book-detail-center-cropped center-cropped-fill"
                                                         src="<?php
                                                         if ($detail->is_external > 0 && !empty($detail->thumb_url)){
                                                             echo $detail->thumb_url;
                                                         } else if ($detail->is_external == 0 && !empty($detail->thumb_url)){
                                                             echo PAPER_COVER_PATH.$detail->thumb_url;
                                                         } else {
                                                             echo PUBLIC_FOLDER.'img/sample_book/pdf.png';  //default image
                                                         }?>
                                                        "/>
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

                            <div>
                                <input type="hidden" id="hid_slug" value="<?php echo 'my-paper-'.$detail->slug; ?>"/>
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
                        <aside id="pt-magazine-extended-recent-posts-2" class="widget extended-recent-posts widget_extended_recent_posts margin-b-20">
                            <div class="recent-news-section">
                                <div class="section-title">
                                    <h2 class="widget-title">Top papers</h2>
                                    <a href="/paper/list">View All</a>
                                </div>
                                <div class="recent-posts-side">
                                    <?php require_once ABS_VIEW_FOLDER.'top_papers.inc.php'; ?>
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

                    </div>
                </div>

            </div><!-- .inner-wrapper --></div><!-- .container --></div><!-- #content -->


    <?php require_once ABS_VIEW_FOLDER.'common_footer.php'; ?>
</div><!-- #page -->


</body></html>





