/*
author: Martin SangDo
process common javascript
 */

//========== CLASS
function Common_Front() { }

var common_front = new Common_Front();		//global object
//save content in Contact page
Common_Front.prototype.save_contact = function(){
    if (submitting){
        return;
    }
    $(CONST.LBL_MESS).removeClass(CONST.LBL_MESS_INFO_CLASSNAME).removeClass(CONST.LBL_MESS_ERROR_CLASSNAME).text('');
    var name = $.trim($('#txt_name').val());
    var email = $.trim($('#txt_email').val());
    var content = $.trim($('#txt_content').val());
    var country = $.trim($('#txt_country').val());
    var phone = $.trim($('#txt_phone').val());
    if (common.isEmpty(name) || common.isEmpty(email) || common.isEmpty(content)){
        common.show_error_lbl(STR_MESS_FRONT.MISSING_INPUT);
        return;
    }
    //save to DB
    var params = {
        name: name,
        email: email,
        content: content,
        country: country,
        phone: phone
    };
    $(CONST.LBL_MESS).text(STR_MESS_FRONT.PROCESSING).addClass(CONST.LBL_MESS_INFO_CLASSNAME);
    submitting = true;
    common.ajaxPost(API_URI.SAVE_CONTACT, params, function(resp){
        common.show_info_lbl(STR_MESS_FRONT.CONTACT_SAVED);
        //clear input
        $('#txt_email').val('');
        submitting = false;
    }, function(err){
        common.show_error_lbl(STR_MESS_FRONT.SERVER_ERROR);
        submitting = false;
    });
};
//show/hide search box
Common_Front.prototype.toggle_search_box = function(){
    if ($('#ico_search').is(':visible')){
        //button is showing, hide it & display textbox
        $('#ico_search').addClass('hidden');
        $('#main_menu').addClass('hidden');
        $('#search_box').removeClass('hidden');
    } else {
        //button is not showing, show it & hide textbox
        $('#search_box').addClass('hidden');
        $('#ico_search').removeClass('hidden');
        $('#main_menu').removeClass('hidden');
    }
};
//
$(document).on('ready', function () {
    //assign event in search box
    $('#txt_search_keyword', $('#search_box')).unbind();
    $('#txt_search_keyword', $('#search_box')).keypress(function(e){
        if (e.which == 13){
            //press Enter
            //todo: implement search

        }
    });
});