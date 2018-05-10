<?php defined('BASEPATH') OR exit('No direct script access allowed');
//author: Martin SangDo
require (APPPATH.'/libraries/REST_Controller.php');

Class AdminBook extends REST_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    //show list of my papers/books
    public function show_my_papers_get(){
        $this->load->model(array('book_model'));

        $this->data['list'] = $this->book_model->get_pagination(array('_id > 0'), 0, 0);
        //get total posts
        $this->data['total'] = $this->book_model->get_total(array('_id > 0'));
        $this->load->view('front/webview/admin/book/my_paper_list', $this->data);
    }
    //create new paper for selling
    public function create_paper_get(){

        $this->load->view('front/webview/admin/book/create_paper', $this->data);
    }
    //========== API functions

}