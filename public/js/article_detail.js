/**
 * author: Martin SangDo
 */
//get & show related posts
function get_extra_posts(){
    var params = {
        post_id: $('#post_id').val(),
        extra_ids: $('#extra_ids').val()
    }
    common.ajaxPost(API_URI.GET_EXTRA_POSTS, params, function(lists){
        // console.log(lists);
        show_extra_posts(lists['random_posts'], $('#random_posts_container'));
        show_extra_posts(lists['recent_posts'], $('#recent_posts_container'));
    });
}
//show related posts
function show_extra_posts(list, $container){
    var len = list.length;
    if (len == 0){
        return;
    }
    var $item_tmpl = $('#post_tmpl');      //item template
    var $item;
    for (var i=0; i<len; i++){
        $item = $item_tmpl.clone(false);
        $('.thumb_url', $item).attr('style', 'background-image: url('+list[i]['thumb_url']+');').
            css('cursor', 'pointer').attr('onclick', 'common.redirect("/blockchain-news/'+list[i]['slug']+'");');
        $('.title', $item).html(list[i]['title']);
        $('a', $item).attr('href', '/blockchain-news/'+list[i]['slug']);
        $('.posted-date', $item).text();
        $container.append($item.removeClass('hidden').removeAttr('id'));
    }
    //detect error img
    setTimeout(function(){
        $('img', $container).each(function() {
            if (!this.complete || typeof this.naturalWidth == "undefined" || this.naturalWidth == 0) {
                // image was broken, replace with your new image
                this.src = '/public/unity_assets/img/missing_img.png';
            }
        });
    }, 5000);
}
//
function window_onload(){
    get_extra_posts();
    //replace broken images
    setTimeout(function() {
        $('img').each(function () {
            if (!this.complete || typeof this.naturalWidth == "undefined" || this.naturalWidth == 0) {
                // image was broken, replace with your new image
                this.src = '/public/unity_assets/img/missing_img.png';
            }
        });
    }, 5000);
}

window.onload = window_onload;