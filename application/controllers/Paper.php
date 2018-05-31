<?php defined('BASEPATH') OR exit('No direct script access allowed');
//author: Martin SangDo

require (APPPATH.'/libraries/REST_Controller.php');

Class Paper extends REST_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('paper_model'));
    }
    //get & show detail
    public function detail_get(){
        $id = $this->uri->segment(4);
        $detail = $this->paper_model->read_row(array('_id'=>$id));
        $this->data['detail'] = $detail;
        $this->data['detail']->is_external = 0;     //this is internal paper
        //
        $this->load->view(VIEW_FOLDER.'book/book_detail', $this->data);
    }
}

