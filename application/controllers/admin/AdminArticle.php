<?php defined('BASEPATH') OR exit('No direct script access allowed');
//author: Martin SangDo
require (APPPATH.'/libraries/REST_Controller.php');

Class AdminArticle extends REST_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    //show summary of sites which scraping
    public function show_crawl_time_get(){
        $this->load->model(array('site_model', 'block_content_model'));
        $this->data['list'] = $this->site_model->get_pagination(array('_id > 0'), 0, 0);
        //get total posts
        $this->data['total'] = $this->block_content_model->get_total(array('_id > 0'));
        $this->load->view('front/webview/admin/site_list', $this->data);
    }
    //========== API functions

}