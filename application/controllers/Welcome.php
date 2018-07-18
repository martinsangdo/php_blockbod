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
        //check if user logined (when site is not published yet)
//        $login_id = $this->get_login_user_id();
//        if (empty($login_id)){
//            //user didn't login by either normal account or Admin
//            $this->load->view(VIEW_FOLDER.'login_front', $this->data);
//            return;
//        }

        //get data of blocks
        $this->data[BLOCK_KEY_1] = $this->block_content_model->get_latest_posts(array('site_id' => 1), 0, DEFAULT_PAGE_LEN);
        $this->data[BLOCK_KEY_2] = $this->block_content_model->get_latest_posts(array('site_id' => 2), 0, DEFAULT_PAGE_LEN);
        $this->data[BLOCK_KEY_3] = $this->block_content_model->get_latest_posts(array('site_id' => 3), 0, DEFAULT_PAGE_LEN);
        $this->data[BLOCK_KEY_4] = $this->block_content_model->get_latest_posts(array('site_id' => 4), 0, DEFAULT_PAGE_LEN);
        $this->data[BLOCK_KEY_5] = $this->block_content_model->get_latest_posts(array('site_id' => 5), 0, DEFAULT_PAGE_LEN);
        $this->data[BLOCK_KEY_6] = $this->block_content_model->get_latest_posts(array('site_id' => 7), 0, DEFAULT_PAGE_LEN);
//        $this->data[BLOCK_KEY_7] = $this->block_content_model->get_latest_posts(array('site_id' => 10), 0, DEFAULT_PAGE_LEN);
        $this->data[BLOCK_KEY_8] = $this->block_content_model->get_latest_posts(array('site_id' => 12), 0, DEFAULT_PAGE_LEN);
//        $this->data[BLOCK_KEY_9] = $this->block_content_model->get_latest_posts(array('site_id' => 2), 0, DEFAULT_PAGE_LEN);
        $this->data[BLOCK_KEY_10] = $this->block_content_model->get_latest_posts(array('site_id' => 14), 0, DEFAULT_PAGE_LEN);
        $this->data[BLOCK_KEY_11] = $this->block_content_model->get_latest_posts(array('site_id' => 15), 0, DEFAULT_PAGE_LEN);
        //get ICO (Events)
        $this->load->model(array('event_model', 'paper_model', 'book_model'));
        $this->data['pre_icos'] = $this->event_model->get_ico_by_group_id(1, 0, 3);
        $this->data['ongoing_icos'] = $this->event_model->get_ico_by_group_id(2, 0, 3);
        $this->data['upcoming_icos'] = $this->event_model->get_ico_by_group_id(3, 0, 3);
        //get my papers
        $this->data['top_papers'] = $this->paper_model->get_pagination_advance('*',
            array('status'=>1), 0, 3, 'sort_idx', 'asc');
        //get books
        $this->data['top_books'] = $this->book_model->get_pagination_advance('*',
            array('status'=>1), 0, 9, 'sort_idx', 'asc');
        //get ICO analysis

        //get Commentary

        //
        $this->data['top_coin_news'] = $this->block_content_model->get_latest_posts(array('site_id' => 2), 0, DEFAULT_PAGE_LEN);
        //
        $this->data['ad_keywords'] = $this->get_random_keywords();

        $this->load->view(VIEW_FOLDER.'home', $this->data);
    }
    //return keywords for Adsense randomly
    private function get_random_keywords(){
        $primary_keys = array(
          'ico','cryptocurrency', 'bitcoin', 'blockchain', 'ethereum',
            'decentralized system', 'coin', 'smart contract', 'cryptocurrency wallet',
            'startup', 'trade', 'solidity'
        );
        $secondary_keys = array(
            'digital', 'manual', 'guide', 'definition', 'how to', 'mining',
            'programming', 'revolution', 'invest', 'introduction'
        );
        $primary_keys_max_index = count($primary_keys) - 1;
        $secondary_keys_max_index = count($secondary_keys) - 1;
        //
        $ad_key_1 = $primary_keys[floor(rand(0,$primary_keys_max_index))].' '.$secondary_keys[floor(rand(0,$secondary_keys_max_index))];
        $ad_key_2 = $primary_keys[floor(rand(0,$primary_keys_max_index))].' '.$secondary_keys[floor(rand(0,$secondary_keys_max_index))];
        return array($ad_key_1, $ad_key_2);
    }

}