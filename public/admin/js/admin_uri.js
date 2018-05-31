/*
    API uri of Admin functions
 */
var ADMIN_CONTROLLER = '/admin_1/';
var ADMIN_BOOK_CONTROLLER_NAME = '/admin-book/';
var ADMIN_PAPER_CONTROLLER_NAME = '/admin-paper/';

 var ADMIN_API_URI = {
     //login
     READ_NEW_CAPTCHA: ADMIN_CONTROLLER+ 'read_new_captcha',
     LOGIN: ADMIN_CONTROLLER+ 'check_login',
     LOGOUT: ADMIN_CONTROLLER+ 'logout',
     //paper
     GENERATE_SPECIFIC_CODE: ADMIN_PAPER_CONTROLLER_NAME+'generate_specific_code',
     TOGGLE_PUBLISH_PAPER: ADMIN_PAPER_CONTROLLER_NAME+'toggle_publish',
     CREATE_PAPER: ADMIN_PAPER_CONTROLLER_NAME+'create_paper',
     UPDATE_PAPER: ADMIN_PAPER_CONTROLLER_NAME+'update_paper',
     SWAP_PAPER_INDEX: ADMIN_PAPER_CONTROLLER_NAME+'swap_sort_index',

 };