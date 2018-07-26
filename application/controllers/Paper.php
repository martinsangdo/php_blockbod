<?php defined('BASEPATH') OR exit('No direct script access allowed');
//author: Martin SangDo

require (APPPATH.'/libraries/REST_Controller.php');

Class Paper extends REST_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('paper_model'));
//        $this->output->enable_profiler(TRUE);
    }
    //get & show detail
    public function detail_get(){
        $id = $this->uri->segment(4);
        $detail = $this->paper_model->read_row(array('_id'=>$id));
        $this->data['detail'] = $detail;
        $this->data['detail']->is_external = 0;     //this is internal paper
        //get all my papers
        $this->data['top_papers'] = $this->paper_model->get_pagination_advance('*',
            array('status'=>1, '_id <> '=>$id), 0, 3, 'sort_idx', 'asc');
        //
        $this->load->view(VIEW_FOLDER.'book/book_detail', $this->data);
    }
    //get & show list
    public function list_get(){
        //get all my papers
        $this->data['top_papers'] = $this->paper_model->get_pagination_advance('*',
            array('status'=>1), 0, 0, 'sort_idx', 'asc');
        //
        $this->load->view(VIEW_FOLDER.'paper_list', $this->data);
    }
}

