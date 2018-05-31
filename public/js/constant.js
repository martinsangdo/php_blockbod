
//API URI
var STR_MESS_FRONT = {
    UPDATE_SUCCESS: 'Updated successfully'
};
//link of APIs
var API_URI = {
    GET_TOP_CAT: '/category/get_top_most',
    GET_EXTRA_POSTS: '/news/get_extra_posts',       //in detail
    ADD_NEW_COMMENT: '/comment/add_new',
    GET_COMMENT_PAGING: '/comment/get_list_paging',
    SAVE_EMAIL_SUBSCRIBE: '/subscribe/save_email',
    GET_ARTICLE_DETAIL: '/news/get_original_detail',
};

var CONST = {
    DEFAULT_PAGE_LEN: 10,       //no. of items in pagination
    HIDDEN_CLASSNAME: 'hidden',
    //input form
    FORM_GROUP_CLASS: '.form-group',
    FROM_INPUT_ERROR_CLASSNAME: 'u-has-error-v3',    //form-group which has error
    INPUT_ERROR_CLASSNAME: 'g-brd-pink-v2--error',
    //
    PROCESS_DONE_NAV_TIMEOUT: 3000,        //the duration (seconds) after a form was finished, moving to new page in (x) seconds

};