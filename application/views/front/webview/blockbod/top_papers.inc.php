<?php
/*
if ($top_papers){ ?>
    <aside id="pt-magazine-extended-recent-posts-2" class="widget extended-recent-posts widget_extended_recent_posts margin-b-20">
        <div class="recent-news-section">
            <div class="section-title">
                <h2 class="widget-title">Top papers</h2>
                <a href="/paper/list">View All</a>
            </div>
            <div class="recent-posts-side">
                <?php
                for($i=0; $i<count($top_papers); $i++){
                    ?>
                    <div class="news-item layout-two margin-b-30">
                        <div class="news-thumb">
                            <a href="/paper/detail/<?php echo $top_papers[$i]->slug; ?>/<?php echo $top_papers[$i]->_id; ?>">
                                <div class="paper-thumb-center-cropped center-cropped-fill"
                                     style="background-image: url('<?php
                                     if (isset($top_papers[$i]->thumb_url)){
                                         echo PAPER_COVER_PATH.$top_papers[$i]->thumb_url;
                                     } else {
                                         echo PUBLIC_FOLDER.'img/sample_book/pdf.jpg';
                                     }
                                     ?>');">
                                </div>
                            </a>
                        </div><!-- .news-thumb -->
                        <div class="news-text-wrap">
                            <h2><a class="ellipsis3lines_title" href="/paper/detail/<?php echo $top_papers[$i]->slug; ?>/<?php echo $top_papers[$i]->_id; ?>"><?php echo $top_papers[$i]->title; ?></a></h2>
                            <div class="book_price_1"><?php echo $top_papers[$i]->discount_price; ?> USD</div>
                            <a class="buy_link pointer" href="/paper/detail/<?php echo $top_papers[$i]->slug; ?>/<?php echo $top_papers[$i]->_id; ?>">BUY NOW</a>
                        </div><!-- .news-text-wrap -->
                    </div>
                <?php } ?>
            </div>
    </aside>
<?php } */?>