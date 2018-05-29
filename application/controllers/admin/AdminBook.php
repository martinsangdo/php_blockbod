<?php defined('BASEPATH') OR exit('No direct script access allowed');
//author: Martin SangDo
require (APPPATH.'/libraries/REST_Controller.php');

Class AdminBook extends REST_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('book_model'));

    }
    //show list of my papers/books
    public function show_my_papers_get(){

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
    //generate random strings for book
    public function generate_specific_code_post(){
        $this->load->view('front/webview/admin/book/create_paper', $this->data);
    }
    //publish/unpublish book/paper
    public function toggle_publish_post(){
        $id = $this->post('id');
        $status = intval($this->post('status'));

        $this->book_model->update_by_condition(array('_id'=>$id), array('status'=>$status));

        $this->response(RestSuccess(array()), SUCCESS_CODE);
    }
}