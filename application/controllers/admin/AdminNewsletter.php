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
    //show list of Free
    public function free_list_get(){
        $condition = array('_id > 0', 'opt_5'=>0);
        $offset = is_numeric($this->uri->segment(3)) && intval($this->uri->segment(3)) > 0?$this->uri->segment(3):0;
        $data_list = $this->newsletter_model->get_pagination_advance('*', $condition, $offset, DEFAULT_PAGE_LEN, 'create_time', 'desc');
        $this->data['list'] = $data_list;
        //get total number
        $this->data['total'] = $this->newsletter_model->get_total($condition);
        //paging it
        $base_url = '/admin-newsletter/free_list/';
        $this->data['pagination'] = $this->create_pagination($base_url, $this->data['total'], DEFAULT_PAGE_LEN, 3);
        //
        $this->load->view('front/webview/admin/other/free_newsletter_list', $this->data);
    }
    //show list of custom requests
    public function custom_list_get(){
        $condition = array('_id > 0', 'opt_5'=>1);
        $offset = is_numeric($this->uri->segment(3)) && intval($this->uri->segment(3)) > 0?$this->uri->segment(3):0;
        $data_list = $this->newsletter_model->get_pagination_advance('*', $condition, $offset, DEFAULT_PAGE_LEN, 'create_time', 'desc');
        $this->data['list'] = $data_list;
        //get total number
        $this->data['total'] = $this->newsletter_model->get_total($condition);
        //paging it
        $base_url = '/admin-newsletter/custom_list/';
        $this->data['pagination'] = $this->create_pagination($base_url, $this->data['total'], DEFAULT_PAGE_LEN, 3);
        //
        $this->load->view('front/webview/admin/other/custom_newsletter_list', $this->data);
    }
    //========== API functions
    //
}