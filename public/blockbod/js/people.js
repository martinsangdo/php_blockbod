//author: Martin SangDo
//show articles of influencers
var medium_posts = new Array();     //posts in Medium
//
$(document).on('ready', function () {
    get_medium_posts();
});

//get latest posts from Medium
function get_medium_posts(){
    var medium_id = $('#medium_id').val();
    var data_url = 'https://api.rss2json.com/v1/api.json?rss_url=https://medium.com/feed/@'+medium_id;

    common.ajaxRawGet(data_url, function(data){
       // common.dlog(data);
        if (data.status == 'ok'){
            medium_posts = data.items;
            show_media_stories(medium_posts);
        }
    });
}
//show stories of medium
function show_media_stories(){
    // $('#medium_title').removeClass('hidden').text(data.feed.title);
    var len = medium_posts.length;
    var $tmpl = $('#post_tmpl');
    var $item;
    for (var i=0; i<len; i++){
        $item = $tmpl.clone(false).removeAttr('id').removeClass('hidden');
        $('.title', $item).text(medium_posts[i]['title']).attr('onclick', 'show_post_content_dialog('+i+');');
        if (!common.isEmpty(medium_posts[i]['thumbnail']) &&
            (common.is_endWidth(medium_posts[i]['thumbnail'], '.jpg') ||
            common.is_endWidth(medium_posts[i]['thumbnail'], '.jpeg') ||
            common.is_endWidth(medium_posts[i]['thumbnail'], '.png'))){
            $('.thumb', $item).attr('src', medium_posts[i]['thumbnail']);
        } else {
            $('.thumb', $item).attr('src', CONST.MEDIUM_LOGO_PATH);
        }
        $('#medium_stories').append($item);
    }
}
//show post content in dialog
function show_post_content_dialog(medium_index){
    $('#post_content', $('#post_content_dialog')).html(medium_posts[medium_index]['content']);
    $('#btn_show_modal').trigger('click');
}