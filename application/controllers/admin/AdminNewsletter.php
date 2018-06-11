<?php defined('BASEPATH') OR exit('No direct script access allowed');
//author: Martin SangDo
//process newsletter
require (APPPATH.'/libraries/REST_Controller.php');

Class AdminNewsletter extends REST_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('newsletter_model'));

    }
    //show list
    public function show_list_get(){
        $data_list = $this->newsletter_model->get_pagination_advance('*', array('_id > 0'), 0, 0, 'create_time', 'desc');
        $this->data['list'] = $data_list;
        //get total number
        $this->data['total'] = $this->newsletter_model->get_total(array('_id > 0'));
        //
        $this->load->view('front/webview/admin/other/newsletter_list', $this->data);
    }
    //========== API functions
    //
}