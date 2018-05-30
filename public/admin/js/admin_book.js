/**
 * Process functions about papers/books
 * author: Martin SangDo
 */
//========== CLASS
function AdminBook() { }

var adminBook = new AdminBook();		//global object
//get unique book id for our system db
AdminBook.prototype.generate_specific_code = function(){
    //try to get 10 random strings
    var rand_strs = [];
    for (var i=0; i<10; i++){
        rand_strs.push(common.rand_str());
    }
    var params = {
        rand_str: rand_strs.join('-')
    };
    common.ajaxPost(ADMIN_API_URI.GENERATE_SPECIFIC_CODE, params, function(resp){
        $('#txt_specific_code').val(common.rand_str()); //get any code
    }, function(err){
        $('#txt_specific_code').val(common.rand_str()); //get any code
    });
};
//publish/unpublish book/paper
AdminBook.prototype.toggle_publish_book = function(ico, id){
    if (submitting){
        return;
    }
    var $ico = $(ico);
    var params = {
        id: id
    };
    if ($('.ico_publish', $ico).hasClass('icon_active')){
        //being publishing
        params['status'] = 0;       //unpublish it
    } else {
        //being unpublishing
        params['status'] = 1;       //publish it
    }
    submitting = true;
    common.ajaxPost(ADMIN_API_URI.TOGGLE_PUBLISH_BOOK, params, function(resp){
       submitting = false;
        $('.ico_publish', $ico).toggleClass('icon_active');
    }, function(err){
        submitting = false;
    });
};
//show/hide textbox error
AdminBook.prototype.toggle_error_textbox = function($input, is_error) {
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
AdminBook.prototype.validate_empty_input_paper = function($input){
    var value = $.trim($input.val()) || $.trim($input.text());
    //show error in each input, if any
    this.toggle_error_textbox($input, common.isEmpty(value));
    return !common.isEmpty(value);
};
//validate all input values
AdminBook.prototype.validate_input_form = function() {
    var $form_input = $('#frm_input');
    var is_valid_title = this.validate_empty_input_paper($('#txt_title', $form_input));
    var is_valid_slug = this.validate_empty_input_paper($('#txt_slug', $form_input));
    var is_valid_excerpt = this.validate_empty_input_paper($('#txt_excerpt', $form_input));
    var is_valid_author_name = this.validate_empty_input_paper($('#txt_author_name', $form_input));

    var price = $.trim($('#txt_price', $form_input).val());
    var discount_price = $.trim($('#txt_discount_price', $form_input).val());
    var page_total = $.trim($('#txt_page_total', $form_input).val());
    var sort_idx = $.trim($('#txt_index', $form_input).val());
    //reset UI
    this.toggle_error_textbox($('#txt_price', $form_input), false);
    this.toggle_error_textbox($('#txt_discount_price', $form_input), false);
    this.toggle_error_textbox($('#txt_page_total', $form_input), false);
    this.toggle_error_textbox($('#txt_index', $form_input), false);

    if (!(is_valid_title && is_valid_slug && is_valid_excerpt && is_valid_author_name)){
        //not valid input, showing error
        $('#mess_submit').text(STR_MESS.MISSING_INPUT);
        return false;
    } else if ($('#file_attach_size', $form_input).val() > FILE_LIMIT.PAPER_ATTACH){
        $('#mess_submit').text(STR_MESS.EXCEED_LIMIT_ATTACH_FILE_SIZE);
        return false;
    } else if (common.isset(price) && (!$.isNumeric(parseFloat(price)) || parseFloat(price) <= 0.0)){
        this.toggle_error_textbox($('#txt_price', $form_input), true);
        $('#mess_submit').text(STR_MESS.INVALID_PRICE);
        return false;
    } else if (common.isset(page_total) && (!$.isNumeric(parseInt(page_total)) || parseInt(page_total) < 0)){
        this.toggle_error_textbox($('#txt_page_total', $form_input), true);
        $('#mess_submit').text(STR_MESS.INVALID_PAGE_TOTAL);
        return false;
    }  else if (common.isset(discount_price) && (!$.isNumeric(parseFloat(discount_price)) || parseFloat(discount_price) <= 0.0)){
        this.toggle_error_textbox($('#txt_discount_price', $form_input), true);
        $('#mess_submit').text(STR_MESS.INVALID_DISCOUNT_PRICE);
        return false;
    } else if ($.isNumeric(parseFloat(price)) && $.isNumeric(parseFloat(discount_price)) && parseFloat(price)<parseFloat(discount_price)){
        this.toggle_error_textbox($('#txt_discount_price', $form_input), true);
        $('#mess_submit').text(STR_MESS.INVALID_DISCOUNT_PRICE);
        return false;
    } else if (!$.isNumeric(parseInt(sort_idx)) || parseInt(sort_idx) <= 0){
        this.toggle_error_textbox($('#txt_index', $form_input), true);
        $('#mess_submit').text(STR_MESS.INVALID_INDEX);
        return false;
    }

    return true;
};
//create new paper
AdminBook.prototype.create_my_paper = function() {
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
        url: ADMIN_API_URI.CREATE_PAPER,
        type:'post',
        success:function(res,status,xhr){
            $('#mess_submit').text(STR_MESS.PROCESS_DONE_NAV);
            $('#txt_title', $form_input).val('');       //clear it
            window.location = '/admin-book/show_my_papers';       //move to list page
            submitting = false;
        }, error: function(err){
            $('#mess_submit').text(STR_MESS.GENERAL_BAD_REQUEST);
            submitting = false;
        }
    }).submit();
};
//edit my paper
AdminBook.prototype.edit_my_paper = function() {
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
        url: ADMIN_API_URI.UPDATE_PAPER,
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
//move index of paper up/down by 1 unit
AdminBook.prototype.move_paper_step = function(ico, step_unit) {
    if (submitting){
        return;
    }
    var $tbl_container = $('#tbl_container');
    $current_row = $(ico).closest('tr');
    var old_index = parseInt($current_row.attr('data-index'));  //index of current row
    //get index & id of closest row
    if (step_unit > 0){
        //move row down to bottom
        var $swap_row = $current_row.next();
    } else {
        //move row up to top
        var $swap_row = $current_row.prev();
    }
    //swap index
    var params = {
        id: parseInt($current_row.attr('data-id')),
        new_index: parseInt($swap_row.attr('data-index')),
        swap_id: parseInt($swap_row.attr('data-id')),
        swap_index: old_index   //other row will replaced by this index
    };
    submitting = true;
    common.ajaxPost(ADMIN_API_URI.SWAP_PAPER_INDEX, params, function(resp){
        //update index of 2 rows
        $current_row.attr('data-index', $swap_row.attr('data-index'));
        $swap_row.attr('data-index', old_index);
        if (step_unit > 0){
            //move row down to bottom
            $current_row.insertAfter($swap_row);
            if ($current_row.next().length == 0){
                //there is no more row below, hide btn Down
                $('.ico_down', $current_row).addClass('hidden');
            }
            $('.ico_up', $current_row).removeClass('hidden');
            //
            if ($swap_row.prev().length == 0){
                //there is no more row above, hide btn Up
                $('.ico_up', $swap_row).addClass('hidden');
            }
            $('.ico_down', $swap_row).removeClass('hidden');
        } else {
            //move row up to top
            $current_row.insertBefore($swap_row);
            if ($current_row.prev().length == 0){
                //there is no more row above, hide btn Up
                $('.ico_up', $current_row).addClass('hidden');
            }
            $('.ico_down', $current_row).removeClass('hidden');
            //
            if ($swap_row.next().length == 0){
                //there is no more row below, hide btn Down
                $('.ico_down', $swap_row).addClass('hidden');
            }
            $('.ico_up', $swap_row).removeClass('hidden');
        }
        submitting = false;
    }, function(err){
        submitting = false;
    });
};