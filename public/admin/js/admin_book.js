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
