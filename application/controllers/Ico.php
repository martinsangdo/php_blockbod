<?php defined('BASEPATH') OR exit('No direct script access allowed');
//author: Martin SangDo

require (APPPATH.'/libraries/REST_Controller.php');

Class Ico extends REST_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('event_model'));
    }
    //show detail of 1 ICO
    public function detail_get(){
        //find post detail
        $ico_id = $this->uri->segment(3);
        $detail = $this->event_model->get_ico_detail($ico_id);
        $this->data['detail'] = $detail;
        //get related ICOs

        //
        $this->load->view(VIEW_FOLDER.'ico_detail', $this->data);
    }
}

