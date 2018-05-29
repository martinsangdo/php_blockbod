<?php defined('BASEPATH') OR exit('No direct script access allowed');
//author: Martin SangDo
require (APPPATH.'/libraries/REST_Controller.php');

Class Admin extends REST_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
    }
    //login Admin
    public function login_get(){
        $this->data['captcha'] = $this->generateCaptchaImageTag();
        $this->load->view('front/webview/admin/login', $this->data);
    }
    //homepage after login
    public function home_get(){
        $this->load->model(array('block_content_model', 'book_model'));
        //get no. of articles which scraped from another websites
        $this->data['article_total'] = $this->block_content_model->get_total(array('_id > 0', 'status'=>1));
        //todo: get no. of total sales

        //get no. of selling papers
        $this->data['selling_papers'] = $this->book_model->get_total(array('is_external'=> 0, 'status'=>1));
        //get no. of linking books
        $this->data['publishing_books'] = $this->book_model->get_total(array('is_external'=> 1, 'status'=>1));
        //
        $this->load->view('front/webview/admin/home', $this->data);
    }
    //========== API functions
    //get new tag <image/> of captcha
    function read_new_captcha_post(){
        $captcha = $this->generateCaptchaImageTag();
        $this->response(RestSuccess($captcha), SUCCESS_CODE);
    }
    //check admin login
    function check_login_post(){
        $username = $this->post('username');
        $password = $this->post('password');
        $captcha = $this->post('captcha');

        if(!$this->isValidCaptcha($captcha)){
            $this->response(RestBadRequest(WRONG_CAPTCHA_MSG), BAD_REQUEST_CODE);
        }
//        echo md5($password);
        //check user exists
        $where = array(
            'username'  => $username,
            'password'  => md5($password)       //encrypt twice
        );
        $user_info = $this->admin_model->read_row($where);
        if (empty($user_info->_id)){
            $this->response(RestBadRequest(NOT_FOUND_MSG), BAD_REQUEST_CODE);
        }
        //login success, save info to session
        $this->set_login_user_id($user_info->_id);
        $this->set_login_user_role($user_info->role);
        $this->set_login_user_name($user_info->name);
        //
        $this->response(RestSuccess(array()), SUCCESS_CODE);
    }
    //logout Admin
    function logout_post(){
        //clear session
        $this->set_login_user_id('');
        $this->set_login_user_role('');
        $this->set_login_user_name('');
        $this->set_captcha('');
        //
        $this->response(RestSuccess(array()), SUCCESS_CODE);
    }
}