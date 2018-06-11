/*
author: Martin SangDo
process common javascript
 */

//========== CLASS
function Common_Front() { }

var common_front = new Common_Front();		//global object
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
    } else if (!common.isValidEmail(email)){
        common.show_error_lbl(STR_MESS_FRONT.INVALID_EMAIL);
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
        $('#txt_name').val('');
        $('#txt_email').val('');
        $('#txt_content').val('');
        $('#txt_country').val('');
        $('#txt_phone').val('');
        submitting = false;
    }, function(err){
        common.show_error_lbl(STR_MESS_FRONT.SERVER_ERROR);
        submitting = false;
    });
};
//save email in Newsletter
Common_Front.prototype.save_newsletter = function(){
    if (submitting){
        return;
    }
    $(CONST.LBL_MESS).removeClass(CONST.LBL_MESS_INFO_CLASSNAME).removeClass(CONST.LBL_MESS_ERROR_CLASSNAME).text('');
    var email = $.trim($('#txt_email').val());
    if (common.isEmpty(email) || !common.isValidEmail(email)){
        common.show_error_lbl(STR_MESS_FRONT.INVALID_EMAIL);
        return;
    }
    //save to DB
    var params = {
        email: email,
        opt_1: $('#chk_opt_1').is(':checked')?1:0,
        opt_2: $('#chk_opt_2').is(':checked')?1:0,
        opt_3: $('#chk_opt_3').is(':checked')?1:0,
        opt_4: $('#chk_opt_4').is(':checked')?1:0
    };
    $(CONST.LBL_MESS).text(STR_MESS_FRONT.PROCESSING).addClass(CONST.LBL_MESS_INFO_CLASSNAME);
    submitting = true;
    common.ajaxPost(API_URI.SAVE_NEWSLETTER, params, function(resp){
        common.show_info_lbl(STR_MESS_FRONT.NEWSLETTER_SAVED);
        //clear input
        $('#txt_email').val('');
        submitting = false;
    }, function(err){
        common.show_error_lbl(STR_MESS_FRONT.SERVER_ERROR);
        submitting = false;
    });
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