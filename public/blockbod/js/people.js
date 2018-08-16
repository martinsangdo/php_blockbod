//author: Martin SangDo
//
$(document).on('ready', function () {
    get_medium_posts();
});

//get latest posts from Medium
function get_medium_posts(){
    var medium_id = $('#medium_id').val();
    var data_url = 'https://api.rss2json.com/v1/api.json?rss_url=https://medium.com/feed/@'+medium_id;

    common.ajaxRawGet(data_url, function(data){
       common.dlog(data);
        if (data.status == 'ok'){
            show_media_stories(data);
        }
    });
}
//show stories of medium
function show_media_stories(data){
    $('#medium_title').removeClass('hidden').text(data.feed.title);
    var len = data.items.length;
    var $tmpl = $('#post_tmpl');
    var $item;
    for (var i=0; i<len; i++){
        $item = $tmpl.clone(false).removeAttr('id').removeClass('hidden');
        $('.title', $item).text(data.items[i]['title']);

        $('#medium_stories').append($item);
    }
}