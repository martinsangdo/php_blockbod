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

    }
}