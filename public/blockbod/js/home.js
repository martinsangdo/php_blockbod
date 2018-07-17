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
});
//
function window_onload(){
}
//
window.onload = window_onload();