/**
 * Process functions about articles
 * author: Martin SangDo
 */
//========== CLASS
function AdminArticle() { }

var adminArticle = new AdminArticle();		//global object
//save draft & open preview page
AdminArticle.prototype.preview_my_content = function(){
    var is_valid_title = this.validate_input($('#txt_title'));
    var is_valid_slug = this.validate_input($('#txt_slug'));
    var is_valid_excerpt = this.validate_input($('#txt_excerpt'));
    var is_valid_content = this.validate_input($('#txt_content'));

    if (!(is_valid_title || is_valid_slug || is_valid_excerpt || is_valid_content)){
        //not valid input

    }


    //
};
//validate required inputs
AdminArticle.prototype.validate_input = function($input){
    var value = $.trim($input.val()) || $.trim($input.text());
    var $title_container = $input.closest(CONST.FORM_GROUP_CLASS);
    //show error in each input
    if (common.isEmpty(value)){
        $title_container.addClass(CONST.FROM_INPUT_ERROR_CLASSNAME);
        if ($input.closest('.trumbowyg-box').length > 0){
            $('.trumbowyg-box', $title_container).addClass(CONST.INPUT_ERROR_CLASSNAME);
        } else {
            $input.addClass(CONST.INPUT_ERROR_CLASSNAME);
        }
    } else {
        //remove error mark
        $title_container.removeClass(CONST.FROM_INPUT_ERROR_CLASSNAME);
        if ($input.closest('.trumbowyg-box').length > 0){
            $('.trumbowyg-box', $title_container).removeClass(CONST.INPUT_ERROR_CLASSNAME);
        } else {
            $input.removeClass(CONST.INPUT_ERROR_CLASSNAME);
        }
    }
    //
    //
    return !common.isEmpty(value);
};
//update category name
AdminArticle.prototype.update_category_name = function(btn){
    if (submitting){
        return;
    }
    $row = $(btn).closest('tr');
    var name = $.trim($('.txt_name', $row).val());
    if (common.isEmpty(name)){
        return;
    }
    var slug = common.to_slug(name);
    var params = {
        id: $row.attr('data-id'),
        name: name,
        slug: slug
    };
    submitting = true;
    common.ajaxPost(ADMIN_API_URI.UPDATE_CATEGORY, params, function(resp){
        common.show_alert(STR_MESS_FRONT.UPDATE_SUCCESS);
        submitting = false;
    }, function(err){
        submitting = false;
    });
};
