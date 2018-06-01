/**
 * Process functions about books
 * author: Martin SangDo
 */
//========== CLASS
function AdminBook() { }

var adminBook = new AdminBook();		//global object
//validate all input values
AdminBook.prototype.validate_input_form = function() {
    var $form_input = $('#frm_input');
    var is_valid_title = common.validate_empty_input_paper($('#txt_title', $form_input));
    var is_valid_slug = common.validate_empty_input_paper($('#txt_slug', $form_input));
    var is_valid_excerpt = common.validate_empty_input_paper($('#txt_excerpt', $form_input));
    var is_valid_author_name = common.validate_empty_input_paper($('#txt_author_name', $form_input));
    var is_valid_thumb_url = common.validate_empty_input_paper($('#txt_thumb_url', $form_input));
    var is_valid_original_url = common.validate_empty_input_paper($('#txt_original_url', $form_input));

    var sort_idx = $.trim($('#txt_index', $form_input).val());
    //reset UI
    common.toggle_error_textbox($('#txt_index', $form_input), false);

    if (!(is_valid_title && is_valid_slug && is_valid_excerpt && is_valid_author_name &&
            is_valid_thumb_url && is_valid_original_url)){
        //not valid input, showing error
        $('#mess_submit').text(STR_MESS.MISSING_INPUT);
        return false;
    } else if (!$.isNumeric(parseInt(sort_idx)) || parseInt(sort_idx) <= 0){
        common.toggle_error_textbox($('#txt_index', $form_input), true);
        $('#mess_submit').text(STR_MESS.INVALID_INDEX);
        return false;
    }

    return true;
};
//create new record
AdminBook.prototype.create = function() {
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
        url: ADMIN_API_URI.CREATE_BOOK,
        type:'post',
        success:function(res,status,xhr){
            $('#mess_submit').text(STR_MESS.PROCESS_DONE_NAV);
            $('#txt_title', $form_input).val('');       //clear it
            window.location = ADMIN_BOOK_CONTROLLER_NAME+'show_list';       //move to list page
            submitting = false;
        }, error: function(err){
            $('#mess_submit').text(STR_MESS.GENERAL_BAD_REQUEST);
            submitting = false;
        }
    }).submit();
};
//edit my paper
AdminBook.prototype.update = function() {
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
        url: ADMIN_API_URI.UPDATE_BOOK,
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
