<?php defined('BASEPATH') OR exit('No direct script access allowed');
//author: Martin SangDo

require (APPPATH.'/libraries/REST_Controller.php');

Class Book extends REST_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('book_model'));
    }
    //get & show book detail
    public function detail_get(){
        $book_id = $this->uri->segment(4);
        $detail = $this->book_model->read_row(array('_id'=>$book_id));
        $this->data['detail'] = $detail;
        $this->data['detail']->is_external = 1;     //this is external book
        //get related books

        //
        $this->load->view(VIEW_FOLDER.'book/book_detail', $this->data);
    }
}

