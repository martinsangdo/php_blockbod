<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//author: Martin SangDo

class Welcome extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
//        $this->load->helper('app');
//        $this->output->enable_profiler(TRUE);
        $this->load->model('block_content_model');
    }

    /**
     * blockbod
     */
    public function index(){
        //get data of blocks
        $this->data[BLOCK_KEY_1] = $this->block_content_model->get_latest_posts(array('site_id' => 1), 0, DEFAULT_PAGE_LEN);
        $this->data[BLOCK_KEY_2] = $this->block_content_model->get_latest_posts(array('site_id' => 2), 0, DEFAULT_PAGE_LEN);
        $this->data[BLOCK_KEY_3] = $this->block_content_model->get_latest_posts(array('site_id' => 3), 0, DEFAULT_PAGE_LEN);
        $this->data[BLOCK_KEY_4] = $this->block_content_model->get_latest_posts(array('site_id' => 4), 0, DEFAULT_PAGE_LEN);
        $this->data[BLOCK_KEY_5] = $this->block_content_model->get_latest_posts(array('site_id' => 5), 0, DEFAULT_PAGE_LEN);
        $this->data[BLOCK_KEY_6] = $this->block_content_model->get_latest_posts(array('site_id' => 7), 0, DEFAULT_PAGE_LEN);
        $this->data[BLOCK_KEY_7] = $this->block_content_model->get_latest_posts(array('site_id' => 10), 0, DEFAULT_PAGE_LEN);
        $this->data[BLOCK_KEY_8] = $this->block_content_model->get_latest_posts(array('site_id' => 12), 0, DEFAULT_PAGE_LEN);
        $this->data[BLOCK_KEY_9] = $this->block_content_model->get_latest_posts(array('site_id' => 2), 0, DEFAULT_PAGE_LEN);
        $this->data[BLOCK_KEY_10] = $this->block_content_model->get_latest_posts(array('site_id' => 14), 0, DEFAULT_PAGE_LEN);
        $this->data[BLOCK_KEY_11] = $this->block_content_model->get_latest_posts(array('site_id' => 15), 0, DEFAULT_PAGE_LEN);
        //get ICO (Events)
        $this->load->model(array('event_model', 'book_model'));
        $this->data['pre_icos'] = $this->event_model->get_ico_by_group_id(1, 0, 3);
        $this->data['ongoing_icos'] = $this->event_model->get_ico_by_group_id(2, 0, 3);
        $this->data['upcoming_icos'] = $this->event_model->get_ico_by_group_id(3, 0, 3);
        //get my papers
        $this->data['top_papers'] = $this->book_model->get_my_top_papers(3);
        //get books

        //get ICO analysis

        //get Commentary

        $this->load->view(VIEW_FOLDER.'/home', $this->data);
    }

    public function privacy(){
        $this->load->view(VIEW_FOLDER.'/privacy', $this->data);
    }

    public function terms(){
        $this->load->view(VIEW_FOLDER.'/terms', $this->data);
    }

}