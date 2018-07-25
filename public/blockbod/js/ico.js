//author: Martin SangDo
//
$(document).on('ready', function () {
    get_ico_lists();
});
//

//get list of ICOs
function get_ico_lists(){
    var rapid = new RapidAPI("default-application_5b58476ee4b0875df02be256", "e497b61b-6527-4e6a-8bcf-bcb413a7aa6d");
    //
    var ico_uri = $('#ico_uri').val();
    var ico_type = $('#ico_type').val();
    //
    rapid.call('ICOWatchList', ico_uri, {
    }).on('success', function (payload) {
        if (common.isset(payload.ico) && common.isset(payload.ico[ico_type])){
            show_short_ico_list($('#list'), payload.ico[ico_type]);
        }
    }).on('error', function (payload) {
        $('#loading_icon').remove();
    });
    //
}
//
function show_short_ico_list($container, list){
    var len = list.length;
    if (len == 0){
        $('#loading_icon').remove();
        return;
    }
    var $item_tmpl = $('#ico_tmpl');      //item template
    var $item;
    for (var i=0; i<len; i++){        //only get 3 first items
        $item = $item_tmpl.clone(false);
        $('.thumb', $item).attr('src', list[i]['image']);
        $('.title', $item).html(list[i]['name']);
        $('a', $item).attr('href', list[i]['website_link']);
        $('.minor_title', $item).text(common.format_short_date(new Date(list[i]['start_time'])) + ' - ' + common.format_short_date(new Date(list[i]['end_time'])));
        $('.excerpt', $item).text(list[i]['description']);
        $container.append($item.removeClass('hidden').removeAttr('id'));
    }
    $('#loading_icon').remove();
}