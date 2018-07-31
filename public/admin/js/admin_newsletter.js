/**
 * Process functions about Newsletter
 * author: Martin SangDo
 */
//========== CLASS
function AdminNewsletter() { }

var adminNewsletter = new AdminNewsletter();		//global object
//update detail of one custom newsletter
AdminNewsletter.prototype.update_custom = function() {
    if (submitting){
        return;
    }
    var $frm_input = $('#frm_input');
    //validate empty input
    var email = $.trim($('#txt_email', $frm_input).val());
    var custom_request = $.trim($('#txt_custom_request', $frm_input).val());
    if (common.isEmpty(email) || common.isEmpty(custom_request)){
        $('#mess_submit').text(STR_MESS_FRONT.MISSING_INPUT);
        return;
    } else if (!common.isValidEmail(email)){
        $('#mess_submit').text(STR_MESS_FRONT.INVALID_EMAIL);
        return;
    }
    //get input data
    var params = {
        id: $('#detail_id', $frm_input).val(),
        email: email,
        custom_request: custom_request,
        title_keywords: $.trim($('#txt_title_keywords', $frm_input).val()),
        excerpt_keywords: $.trim($('#txt_excerpt_keywords', $frm_input).val()),
        content_keywords: $.trim($('#txt_content_keywords', $frm_input).val())
    };
    submitting = true;
    $('#mess_submit').text(STR_MESS_FRONT.PROCESSING);
    common.ajaxPost(ADMIN_API_URI.UPDATE_CUSTOM_NEWSLETTER, params, function(resp){
        //success
        $('#mess_submit').text(STR_MESS_FRONT.UPDATE_SUCCESS);
        submitting = false;
    }, function(err){
        $('#mess_submit').text(STR_MESS_FRONT.SERVER_ERROR);
        submitting = false;
    });
};