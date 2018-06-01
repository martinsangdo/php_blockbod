/**
 * Process functions about My contents
 * author: Martin SangDo
 */
//========== CLASS
function AdminMyContent() { }

var adminMyContent = new AdminMyContent();		//global object
//validate all input values
AdminMyContent.prototype.validate_input_form = function() {
    var $form_input = $('#frm_input');
    var is_valid_title = common.validate_empty_input_paper($('#txt_title', $form_input));
    var is_valid_slug = common.validate_empty_input_paper($('#txt_slug', $form_input));
    var is_valid_excerpt = common.validate_empty_input_paper($('#txt_excerpt', $form_input));
    // var is_valid_author_name = common.validate_empty_input_paper($('#txt_author_name', $form_input));

    var sort_idx = $.trim($('#txt_index', $form_input).val());
    //reset UI
    common.toggle_error_textbox($('#txt_index', $form_input), false);

    if (!(is_valid_title && is_valid_slug && is_valid_excerpt)){
        //not valid input, showing error
        $('#mess_submit').text(STR_MESS.MISSING_INPUT);
        return false;
    } else if ($('#file_attach_size', $form_input).val() > FILE_LIMIT.PAPER_ATTACH){
        $('#mess_submit').text(STR_MESS.EXCEED_LIMIT_ATTACH_FILE_SIZE);
        return false;
    } else if (!$.isNumeric(parseInt(sort_idx)) || parseInt(sort_idx) <= 0){
        common.toggle_error_textbox($('#txt_index', $form_input), true);
        $('#mess_submit').text(STR_MESS.INVALID_INDEX);
        return false;
    }

    return true;
};
//create new record
AdminMyContent.prototype.create = function() {
    if (submitting){
        return;
    }
    var $form_input = $('#frm_input');

    //validate all input values
    if (!this.validate_input_form()){
        return;
    }

    //submit to save in DB
    $('#mess_submit').text(STR_MESS.PROCESSING);
    submitting = true;
    $form_input.ajaxForm({
        data:{},
        url: ADMIN_API_URI.CREATE_MY_CONTENT,
        type:'post',
        success:function(res,status,xhr){
            $('#mess_submit').text(STR_MESS.PROCESS_DONE_NAV);
            $('#txt_title', $form_input).val('');       //clear it
            window.location = ADMIN_MY_CONTENT_CONTROLLER_NAME+'show_list';       //move to list page
            submitting = false;
        }, error: function(err){
            $('#mess_submit').text(STR_MESS.GENERAL_BAD_REQUEST);
            submitting = false;
        }
    }).submit();
};
//edit my paper
AdminMyContent.prototype.update = function() {
    if (submitting){
        return;
    }
    var $form_input = $('#frm_input');

    //validate all input values
    if (!this.validate_input_form()){
        return;
    }
    //submit to save in DB
    $('#mess_submit').text(STR_MESS.PROCESSING);
    submitting = true;
    $form_input.ajaxForm({
        data:{},
        url: ADMIN_API_URI.UPDATE_MY_CONTENT,
        type:'post',
        success:function(res,status,xhr){
            //update index
            if ($.isNumeric(parseInt($('#txt_index', $form_input).val()))){
                $('#previous_index', $form_input).val($('#txt_index', $form_input).val());
            }
            //
            $('#mess_submit').text(STR_MESS.UPDATE_COMPLETED);
            submitting = false;
        }, error: function(err){
            $('#mess_submit').text(STR_MESS.GENERAL_BAD_REQUEST);
            submitting = false;
        }
    }).submit();
};
