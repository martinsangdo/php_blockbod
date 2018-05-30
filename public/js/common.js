
var submitting = false;
var SERVER_URI = window.location.protocol + '//' + window.location.hostname + ':' + window.location.port + '';

//========== CLASS
function Common() { }

var common = new Common();		//global object

Common.prototype.dlog = function(mess){
    if (!this.isEmpty(mess) && console.log) {		//avoid IE
        console.log(mess);
    }
};
//
Common.prototype.isEmpty = function(a_var){
    return a_var === undefined || a_var == null || $.trim(a_var)=='';
}
//
Common.prototype.isset = function(a_var){
    return !this.isEmpty(a_var);
};
//
Common.prototype.ajaxPost = function(uri, params, callback, callback_err){
    uri = encodeURI(SERVER_URI + uri);

    $.ajax({
        url: uri,//url is a link request
        type: 'POST',
        data: params, //data send to server
        dataType: 'json',	//jsonp causes error in IE
        success: function (msg) {
            if (callback !== undefined){
                callback(msg.data);
            }
        },
        error: function (errormessage) {
            if (callback_err !== undefined) {
                callback_err(errormessage.responseText);
            }
        }
    });
};
//get data from URL
Common.prototype.ajaxRawGet = function(url, callback, callback_err){
    $.ajax({
        url: url,//url is a link request
        type: 'GET',
        dataType: 'json',	//jsonp causes error in IE
        success: function (msg) {
            if (callback !== undefined){
                callback(msg);
            }
        },
        error: function (errormessage) {
            if (callback_err !== undefined) {
                callback_err(errormessage.responseText);
            }
        }
    });
};
//
Common.prototype.redirect = function(url){
    window.location.href = url;
};
//
Common.prototype.isValidEmail = function(email){
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
};
//
Common.prototype.format_date = function(d){
    return d.getFullYear() + '-' + (d.getMonth()+1) + '-' + d.getDate() +
        ' ' + d.getHours() + ':' + d.getMinutes() + ':' + d.getSeconds();
};
//save email subscribe
Common.prototype.save_email_subscribe = function(email) {
    if (submitting){
        return;
    }
    if (this.isEmpty(email) || !this.isValidEmail(email)){
        alert('You should input valid email');
        return;
    }
    submitting = true;
    this.ajaxPost(API_URI.SAVE_EMAIL_SUBSCRIBE, {email: email}, function(resp){
        if (resp.result){

        } else {
            //failed
        }
        submitting = false;
        alert('Thank you! Your email is saved!');
    });
};
//generate random string
Common.prototype.rand_str = function(){
    return Math.random().toString(36).substring(2).toUpperCase();
};
//set specific event to each input when keyup
Common.prototype.set_length_handler = function($input, $length_display, ext_action){
    $input.keyup(function(e){
        $length_display.text($.trim($input.val()).length);
        if (ext_action != null && ext_action !== undefined){
            ext_action();
        }
    });
};
//init HTML editor
//https://alex-d.github.io/
Common.prototype.init_editor = function($component){
    $component.trumbowyg({
        btns: [
            ['viewHTML'],
            ['undo', 'redo'], // Only supported in Blink browsers
            ['formatting'],
            ['strong', 'em'],
            ['link'],
            ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
            ['unorderedList', 'orderedList'],
            ['horizontalRule']
        ],
        autogrow: true
    });
};
//convert a full text to slug
Common.prototype.to_slug = function(text){
    return text.toLowerCase().replace(/[^a-zA-Z0-9]+/g,'-');
};
//convert file size from bytes to KB or MB
Common.prototype.convert_file_size = function($size_bytes) {
    if ($size_bytes < 1024 * 1024) {		//<1MB
        $size_bytes = Math.round($size_bytes / 1024, 2) + ' KB';
    } else {
        $size_bytes = Math.round($size_bytes / (1024 * 1024), 2) + ' MB';
    }
    return $size_bytes;
};