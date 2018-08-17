<?php
$influcencer_num = count($influencers);
if ($influcencer_num > 0){
?>
    <style>
        @media (max-width: 400px) {
            .col-md-2 {
                width: 32%;
                float:left;
            }
        }
    </style>
<section class="three-col-section news-col-3 top_influencers">
    <div class="three-news-section">
        <div class="section-title">
            <h2 class="widget-title">Influencers</h2>
        </div>
        <div class="inner-wrapper">
            <?php
            for ($i=0; $i<$influcencer_num; $i++){
            ?>
            <div class="col-md-2 g-mb-30">
                <a class="js-fancybox" href="/people/influencer_posts/<?php echo $influencers[$i]->username; ?>" data-fancybox="lightbox-gallery--col6">
                    <img class="img-fluid" src="<?php echo INFLUENCER_AVATAR_PATH.$influencers[$i]->avatar_filename; ?>"/>
                </a>
                <div class="influencer_name"><?php echo $influencers[$i]->name; ?></div>
            </div>
            <?php } ?>
        </div><!-- .inner-wrapper -->

    </div><!-- .mix-column-news -->
</section>
<?php } ?>