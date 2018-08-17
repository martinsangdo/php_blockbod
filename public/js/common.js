/*
author: Martin SangDo
//used in all pages
 */
var submitting = false;
const SERVER_URI = window.location.protocol + '//' + window.location.hostname + ':' + window.location.port + '';

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
//
Common.prototype.isUrlValid = function(url) {
    return /^(https?|s?ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i.test(url);
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
//format short date
Common.prototype.format_short_date = function(d){
    return d.getFullYear() + '/' + (d.getMonth()+1) + '/' + d.getDate();
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
//show alert
Common.prototype.show_alert = function(mess){
    alert(mess);
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
            ['link', 'insertImage'],
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
//show/hide textbox error (used in form)
Common.prototype.toggle_error_textbox = function($input, is_error) {
    var $title_container = $input.closest(CONST.FORM_GROUP_CLASS);
    if (is_error){
        //show error
        $title_container.addClass(CONST.FROM_INPUT_ERROR_CLASSNAME);
        $input.addClass(CONST.INPUT_ERROR_CLASSNAME);
    } else {
        //remove error
        $title_container.removeClass(CONST.FROM_INPUT_ERROR_CLASSNAME);
        $input.removeClass(CONST.INPUT_ERROR_CLASSNAME);
    }
};
//validate required inputs while create/edit paper
Common.prototype.validate_empty_input_paper = function($input){
    var value = $.trim($input.val()) || $.trim($input.text());
    //show error in each input, if any
    this.toggle_error_textbox($input, common.isEmpty(value));
    return !common.isEmpty(value);
};
//show label info message (used in some forms)
Common.prototype.show_info_lbl = function(mess){
    $(CONST.LBL_MESS).text(mess).removeClass(CONST.LBL_MESS_ERROR_CLASSNAME).addClass(CONST.LBL_MESS_INFO_CLASSNAME);
};
//show label error message (used in some forms)
Common.prototype.show_error_lbl = function(mess){
    $(CONST.LBL_MESS).text(mess).removeClass(CONST.LBL_MESS_INFO_CLASSNAME).addClass(CONST.LBL_MESS_ERROR_CLASSNAME);
};
//show label info message (used in extra forms)
Common.prototype.show_info_lbl_custom = function(mess){
    $(CONST.LBL_MESS_CUSTOM).text(mess).removeClass(CONST.LBL_MESS_ERROR_CLASSNAME).addClass(CONST.LBL_MESS_INFO_CLASSNAME);
};
//show label error message (used in extra forms)
Common.prototype.show_error_lbl_custom = function(mess){
    $(CONST.LBL_MESS_CUSTOM).text(mess).removeClass(CONST.LBL_MESS_INFO_CLASSNAME).addClass(CONST.LBL_MESS_ERROR_CLASSNAME);
};
//get value from url parameters
Common.prototype.get_url_param = function(param_name){
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === param_name) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
};
//check the string end with a string
Common.prototype.is_endWidth = function(str, postfix){
    return str.toLowerCase().indexOf(postfix.toLowerCase(), str.length - postfix.length) !== -1;
};