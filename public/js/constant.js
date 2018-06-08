/*
author: Martin SangDo
 */
//API URI
var STR_MESS_FRONT = {
    CREATE_SUCCESS: 'Created successfully',
    UPDATE_SUCCESS: 'Updated successfully',
    MISSING_INPUT: 'Missing required fields',
    SERVER_ERROR: 'Something wrong, please try it another time',
    CONTACT_SAVED: 'Thank you for messaging us, we will contact you back',
    PROCESSING: 'Processing, please wait...',

};
//link of APIs
var API_URI = {
    FRONT_LOGIN: '/publicapi/front_login',        //prevent access before publishing
    GET_TOP_CAT: '/category/get_top_most',
    GET_EXTRA_POSTS: '/news/get_extra_posts',       //in detail
    ADD_NEW_COMMENT: '/comment/add_new',
    GET_COMMENT_PAGING: '/comment/get_list_paging',
    SAVE_EMAIL_SUBSCRIBE: '/subscribe/save_email',
    GET_ARTICLE_DETAIL: '/news/get_original_detail',
    //
    SAVE_CONTACT: '/publicapi/save_contact',
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
    //message/error labels, used in input forms
    LBL_MESS: '#lbl_mess',
    LBL_MESS_ERROR_CLASSNAME: 'g-color-red',
    LBL_MESS_INFO_CLASSNAME: 'g-color-green',

};

var RESP_MESS = {
    DUPLICATE_RECORD: 'DUPLICATE_RECORD'
};