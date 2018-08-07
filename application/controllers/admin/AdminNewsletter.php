<?php defined('BASEPATH') OR exit('No direct script access allowed');
//author: Martin SangDo
//process newsletter
require (APPPATH.'/libraries/REST_Controller.php');

Class AdminNewsletter extends REST_Controller
{
    function __construct()
    {
        parent::__construct();

    }
    //show list of Free Newsletters
    public function free_list_get(){
        $this->load->model(array('newsletter_model'));
        $condition = array('_id > 0');
        $offset = is_numeric($this->uri->segment(3)) && intval($this->uri->segment(3)) > 0?$this->uri->segment(3):0;
        $data_list = $this->newsletter_model->get_pagination_advance('*', $condition, $offset, DEFAULT_PAGE_LEN, 'create_time', 'desc');
        $this->data['list'] = $data_list;
        //get total number
        $this->data['total'] = $this->newsletter_model->get_total($condition);
        //paging it
        $base_url = '/admin-newsletter/free_list/';
        $this->data['pagination'] = $this->create_pagination($base_url, $this->data['total'], DEFAULT_PAGE_LEN, 3);
        //
        $this->load->view('front/webview/admin/newsletter/free_newsletter_list', $this->data);
    }
    //show list of custom requests
    public function custom_list_get(){
        $this->load->model(array('newsletter_custom_model'));
        $condition = array('_id > 0');
        $offset = is_numeric($this->uri->segment(3)) && intval($this->uri->segment(3)) > 0?$this->uri->segment(3):0;
        $data_list = $this->newsletter_custom_model->get_pagination_advance('*', $condition, $offset, DEFAULT_PAGE_LEN, 'create_time', 'desc');
        $this->data['list'] = $data_list;
        //get total number
        $this->data['total'] = $this->newsletter_custom_model->get_total($condition);
        //paging it
        $base_url = '/admin-newsletter/custom_list/';
        $this->data['pagination'] = $this->create_pagination($base_url, $this->data['total'], DEFAULT_PAGE_LEN, 3);
        //
        $this->load->view('front/webview/admin/newsletter/custom_newsletter_list', $this->data);
    }
    //update detail of 1 custom newsletter
    public function custom_detail_get(){
        $id = $this->uri->segment(3);
        $detail = $this->newsletter_model->read_row(array('_id'=>$id));
        $this->data['detail'] = $detail;
        //
        $this->load->view('front/webview/admin/newsletter/custom_detail', $this->data);
    }
    //========== API functions
    //when Admin updates custom Newsletter
    public function update_custom_post(){
        //update record in DB
        $update_record = array(
            'email' => trim($this->input->post('email')),
            'custom_request' => trim($this->input->post('custom_request')),
            'title_keywords' => trim($this->input->post('title_keywords')),
            'excerpt_keywords' => trim($this->input->post('excerpt_keywords')),
            'content_keywords'=> trim($this->input->post('content_keywords'))
        );
        $id = $this->input->post('id');
        //
        $result = $this->newsletter_model->update_by_condition(array('_id'=>$id), $update_record);
        if ($result){
            $this->response(RestSuccess(array()), SUCCESS_CODE);
        } else {
            $this->response(RestBadRequest(SERVER_ERROR_MSG), BAD_REQUEST_CODE);
        }
    }
}