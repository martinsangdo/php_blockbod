//author: Martin SangDo
//
$(document).on('ready', function () {
    var $image = $('.home3-center-cropped');
    // common.dlog($image.length);

    $('#test_img').on("error", function(jqXHR, error, errorThrown) {
        common.dlog(jqXHR);
        /*
        common.dlog(error);
        common.dlog(errorThrown);
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function(){
            if (this.readyState == 4 && this.status == 200){
                //this.response is what you're looking for
                handler(this.response);
                var img = document.getElementById('test_img');
                var url = window.URL || window.webkitURL;
                img.src = url.createObjectURL(this.response);
            }
        }
        xhr.open('GET', $(this).attr('src'));
        xhr.responseType = 'blob';
        xhr.send();
        */
        // setTimeout(function(){
        //     $('#test_img').load();
        // }, 10000);
    }).on("load", function(f) {
        $(this).replaceWith(function(){
            return $("<div/>").attr('class', $(this).attr('class')).attr('style', 'background-image: url("'+$(this).attr('src')+'");');
        });
        // $(this).removeAttr('src');
    });

    // $('.home3-center-cropped').error(function(e) {
    //     common.dlog(e);
    // });
    // if ($('#page').css('background-image') != 'none') {
    //     alert('There is a background image');
    // }

        $('img').on("error", function(jqXHR, error, errorThrown) {
                // image was broken, replace with your new image
            this.src = '/public/unity_assets/img/missing_img_1.jpg';
        });
        //
    get_ico_lists();
});

//get list of ICOs
function get_ico_lists(){
    var rapid = new RapidAPI("default-application_5b58476ee4b0875df02be256", "e497b61b-6527-4e6a-8bcf-bcb413a7aa6d");
    //
    rapid.call('ICOWatchList', 'getOnlyUpcomingICOs', {
    }).on('success', function (payload) {
        if (common.isset(payload.ico) && common.isset(payload.ico.upcoming)){
            show_short_ico_list($('#upcoming_ico_container'), payload.ico.upcoming);
        }
    }).on('error', function (payload) {
    });
    //
    rapid.call('ICOWatchList', 'getOnlyLiveICOs', {
    }).on('success', function (payload) {
        if (common.isset(payload.ico) && common.isset(payload.ico.live)){
            show_short_ico_list($('#live_ico_container'), payload.ico.live);
        }
    }).on('error', function (payload) {
    });
    //
    rapid.call('ICOWatchList', 'getOnlyFinishedICOs', {
    }).on('success', function (payload) {
        if (common.isset(payload.ico) && common.isset(payload.ico.finished)){
            show_short_ico_list($('#finished_ico_container'), payload.ico.finished);
        }
    }).on('error', function (payload) {
    });
}
//
function show_short_ico_list($container, list){
    var len = list.length;
    if (len == 0){
        return;
    }
    var $item_tmpl = $('#ico_tmpl');      //item template
    var $item;
    for (var i=0; i<3; i++){        //only get 3 first items
        $item = $item_tmpl.clone(false);
        $('.thumb', $item).attr('src', list[i]['image']);
        $('.title', $item).html(list[i]['name']);
        $('a', $item).attr('href', list[i]['website_link']);
        $('.minor_title', $item).text(common.format_short_date(new Date(list[i]['start_time'])) + ' - ' + common.format_short_date(new Date(list[i]['end_time'])));
        $('.excerpt', $item).text(list[i]['description']);
        $container.append($item.removeClass('hidden').removeAttr('id'));
    }
}

//
function window_onload(){

}
//
window.onload = window_onload();