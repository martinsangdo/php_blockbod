/**
 * Process functions about articles
 * author: Martin SangDo
 */
//========== CLASS
function AdminArticle() { }

var adminArticle = new AdminArticle();		//global object
//save draft & open preview page
AdminArticle.prototype.preview_my_content = function(){
    if (!this.validate_input()){
        //not valid input

    }

    //
};
//validate required inputs
AdminArticle.prototype.validate_input = function(){
    var title = $.trim($('#txt_title').val());
    var slug = $.trim($('#txt_slug').val());
    var excerpt = $.trim($('#txt_excerpt').val());
    var content = $.trim($('#txt_content').val());
    //show error in each input

    return !(common.isEmpty(title) || common.isEmpty(slug) || common.isEmpty(excerpt) || common.isEmpty(content));
};
