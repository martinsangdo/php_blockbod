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
        $login_id = $this->get_login_user_id();
        if (empty($login_id)){
            //user didn't login by either normal account or Admin
            $this->load->view(VIEW_FOLDER.'login_front', $this->data);
            return;
        }

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


        $this->load->view(VIEW_FOLDER.'home', $this->data);
    }

    public function about(){
        $this->load->view(VIEW_FOLDER.'about', $this->data);
    }

    public function terms(){
        $this->load->view(VIEW_FOLDER.'terms', $this->data);
    }

    public function privacy(){
        $this->load->view(VIEW_FOLDER.'privacy', $this->data);
    }

    public function advertising(){
        $this->load->view(VIEW_FOLDER.'advertising', $this->data);
    }

    public function submit_contribution(){
        $this->load->view(VIEW_FOLDER.'submit_contribution', $this->data);
    }

    public function contact(){
        $this->load->view(VIEW_FOLDER.'contact', $this->data);
    }

    public function newsletter(){
        $this->load->view(VIEW_FOLDER.'newsletter', $this->data);
    }
    //POST FUNCTIONS
    //used to prevent login before site publishes
    public function front_login(){
        $pass = trim($this->input->post('password'));
        if ($pass == 'block123'){
            $this->set_login_user_id('hi');
            echo json_encode(array('data'=>SUCCESS_CODE));
        } else {
            echo json_encode(array('data'=>UNAUTHORIZED_CODE));
        }
    }

}