<?php defined('BASEPATH') OR exit('No direct script access allowed');
//author: Martin SangDo

require (APPPATH.'/libraries/REST_Controller.php');

Class Ico extends REST_Controller
{
    function __construct()
    {
        parent::__construct();

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
    //show list of ICOs
    public function list_get(){
        $this->load->model(array('paper_model'));
        //get my papers
        $this->data['top_papers'] = $this->paper_model->get_pagination_advance('*',
            array('status'=>1), 0, 3, 'sort_idx', 'asc');
        //
        $this->data['ico_uri'] = $this->uri->segment(3);
        $this->data['ico_type'] = $this->uri->segment(4);
        //
        $this->load->view(VIEW_FOLDER.'ico_list', $this->data);
    }
}

