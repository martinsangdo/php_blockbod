<?php defined('BASEPATH') OR exit('No direct script access allowed');
//author: Martin SangDo
//process contact
require (APPPATH.'/libraries/REST_Controller.php');

Class AdminContact extends REST_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('contact_model'));

    }
    //show list
    public function show_list_get(){

    }
    //========== API functions
    //
    public function get_unread_mess_num_post(){
        $total_unread = $this->contact_model->get_total(array('is_viewed'=>0));
        $this->response(RestSuccess(array('num'=>$total_unread)), SUCCESS_CODE);
    }
}