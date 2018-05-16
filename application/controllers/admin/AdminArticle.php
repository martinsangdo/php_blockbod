<?php defined('BASEPATH') OR exit('No direct script access allowed');
//author: Martin SangDo
require (APPPATH.'/libraries/REST_Controller.php');

Class AdminArticle extends REST_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('block_content_model'));
    }
    //show summary of sites which scraping
    public function show_crawl_time_get(){
        $this->load->model(array('site_model'));
        $this->data['list'] = $this->site_model->get_pagination(array('_id > 0'), 0, 0);
        //get total posts
        $this->data['total'] = $this->block_content_model->get_total(array('_id > 0'));
        $this->load->view('front/webview/admin/article/site_list', $this->data);
    }
    //get list of articles which scraped from another websites
    public function collection_list_get(){
        $select = 'block_content.*, site.name AS site_name';
        $condition = array('_id > 0');
        $offset = is_numeric($this->uri->segment(3)) && intval($this->uri->segment(3)) > 0?$this->uri->segment(3):0;
        $this->data['list'] = $this->block_content_model->get_pagination_advance($select,
            $condition, $offset, DEFAULT_PAGE_LEN, 'update_time', 'desc', 'site',
            'block_content.site_id = site._id', 'left');
        //get total posts
        $this->data['total'] = $this->block_content_model->get_total(array('_id > 0'));
        //paging it
        $base_url = '/admin-article/collection_list/';
        $this->data['pagination'] = $this->create_pagination($base_url, $this->data['total'], DEFAULT_PAGE_LEN, 3);
        //
        $this->load->view('front/webview/admin/article/collection_list', $this->data);
    }
    //get list of articles which wroten by Admin
    public function ico_analysis_list_get(){
        $this->load->model(array('my_content_model'));
        $select = 'my_content.*';
        $condition = array('_id > 0');
        $offset = is_numeric($this->uri->segment(3)) && intval($this->uri->segment(3)) > 0?$this->uri->segment(3):0;
        $this->data['list'] = $this->my_content_model->get_pagination_advance($select,
            $condition, $offset, DEFAULT_PAGE_LEN, 'update_time', 'desc', '', '', '');
        //get total posts
        $this->data['total'] = $this->my_content_model->get_total(array('_id > 0'));
        //paging it
        $base_url = '/admin-article/ico_analysis_list/';
        $this->data['pagination'] = $this->create_pagination($base_url, $this->data['total'], DEFAULT_PAGE_LEN, 3);
        //
        $this->load->view('front/webview/admin/article/ico_analysis_list', $this->data);
    }
    //get new ICO analysis
    public function create_ico_analysis_get(){
        $this->load->model(array('my_content_model'));
        //
        $this->data['page_title'] = 'Create new ICO analysis';
        $this->load->view('front/webview/admin/article/create_content', $this->data);
    }
    //========== Private functions
//    private function get

}