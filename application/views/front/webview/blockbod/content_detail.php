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
                    <div style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none;">
                        <main id="main" class="site-main" role="main">
                            <article id="post-2057" class="post-2057 post type-post status-publish format-standard has-post-thumbnail hentry category-fashion tag-fashion tag-girl tag-lifestyle">
                                <div class="article-wrap-inner">
                                    <div class="content-wrap">
                                        <div class="content-wrap-inner">
                                            <header class="entry-header">
                                                <h2 class="entry-title"><?php echo $article_detail->title; ?></h2>
                                                <div class="entry-meta">
                                                    <span class="posted-on">
                                                        <a href="https://promenadethemes.com/demo/pt-magazine/young-girl-shopping-with-happy-mood/" rel="bookmark">
                                                            <time class="entry-date published"><?php echo $article_detail->publish_date; ?></time>
                                                        </a>
                                                    </span>
                                                </div><!-- .entry-meta -->

                                            </header><!-- .entry-header -->
                                            <div id="content_detail" class="entry-content">
                                                <?php echo $article_detail->content; ?>
                                            </div><!-- .entry-content -->
                                            <i>
                                                <?php
                                                if (isset($article_detail->attach_filename)){
                                                    echo '<a href="'.CONTENT_ATTACH_PATH.$article_detail->attach_filename.'" target="_blank">Download document</a>';
                                                }
                                                ?>
                                            </i>
                                        </div>
                                    </div>
                                </div>

                            </article><!-- #post-## -->

                            <div class="news-col-3 related-posts">


                                <h3 class="related-posts-title">Related Posts</h3>


                                <div class="inner-wrapper">

                                    <div class="news-item three-column-item hidden">
                                        <div class="news-thumb">
                                            <a href="https://promenadethemes.com/demo/pt-magazine/luxury-designs-from-famous-companies/">
                                            </a>
                                        </div><!-- .news-thumb -->

                                        <div class="news-text-wrap">
                                            <h2><a href="https://promenadethemes.com/demo/pt-magazine/luxury-designs-from-famous-companies/">Luxury designs from famous companies</a></h2>
                                            <span class="posted-date">February 21, 2017</span>
                                        </div><!-- .news-text-wrap -->
                                    </div><!-- .news-item -->


                                </div>

                            </div>

                            <div id="comments" class="comments-area">
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

                                <div id="respond" class="comment-respond">
                                    <h3 id="reply-title" class="comment-reply-title">Leave a Reply <small><a rel="nofollow" id="cancel-comment-reply-link" href="https://promenadethemes.com/demo/pt-magazine/young-girl-shopping-with-happy-mood/#respond" style="display:none;">Cancel reply</a></small></h3>			<form action="https://promenadethemes.com/demo/pt-magazine/wp-comments-post.php" method="post" id="commentform" class="comment-form" novalidate="">
                                        <p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p><p class="comment-form-comment"><label for="comment">Comment</label> <textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required="required"></textarea></p><p class="comment-form-author"><label for="author">Name <span class="required">*</span></label> <input id="author" name="author" type="text" value="" size="30" maxlength="245" required="required"></p>
                                        <p class="comment-form-email"><label for="email">Email <span class="required">*</span></label> <input id="email" name="email" type="email" value="" size="30" maxlength="100" aria-describedby="email-notes" required="required"></p>
                                        <p class="comment-form-url"><label for="url">Website</label> <input id="url" name="url" type="url" value="" size="30" maxlength="200"></p>
                                        <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Post Comment"> <input type="hidden" name="comment_post_ID" value="2057" id="comment_post_ID">
                                            <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                                        </p>			</form>
                                </div><!-- #respond -->

                            </div><!-- #comments -->

                        </main></div></div><!-- #primary -->


                <div id="sidebar-primary" class="widget-area sidebar" role="complementary" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 2050px;">
                    <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: absolute; transform: translateY(639px); width: 330px; top: 0px;">
                    </div>
                </div><!-- #secondary -->
            </div><!-- .inner-wrapper --></div><!-- .container --></div><!-- #content -->


    <?php require_once 'common_footer.php'; ?>
</div><!-- #page -->

<a href="#!" class="scrollup" id="btn-scrollup" style="display: inline;"><i class="fa fa-angle-up"></i></a>

<script type="text/javascript" src="/public/blockbod/js/skip-link-focus-fix.js"></script>
<script type="text/javascript" src="/public/blockbod/js/jquery.meanmenu.js"></script>
<script type="text/javascript" src="/public/blockbod/js/theia-sticky-sidebar.min.js"></script>
<script type="text/javascript" src="/public/blockbod/js/custom.js"></script>
<script type="text/javascript" src="/public/blockbod/js/comment-reply.min.js"></script>
<script type="text/javascript" src="/public/blockbod/js/wp-embed.min.js"></script>


</body></html>