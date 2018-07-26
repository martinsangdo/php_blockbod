<?php defined('BASEPATH') OR exit('No direct script access allowed');
//author: Martin SangDo

require (APPPATH.'/libraries/REST_Controller.php');

Class Content extends REST_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('my_content_model'));
    }
    //get & show detail
    public function detail_get(){
        $this->load->model(array('paper_model'));
        $id = $this->uri->segment(4);
        $detail = $this->my_content_model->read_row(array('_id'=>$id));
        $this->data['article_detail'] = $detail;
        //get my papers
        $this->data['top_papers'] = $this->paper_model->get_pagination_advance('*',
            array('status'=>1), 0, 3, 'sort_idx', 'asc');
        //
        $this->load->view(VIEW_FOLDER.'content_detail', $this->data);
    }
}

