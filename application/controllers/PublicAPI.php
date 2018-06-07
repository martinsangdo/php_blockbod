<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//author: Martin SangDo

require (APPPATH.'/libraries/REST_Controller.php');
class PublicAPI extends REST_Controller
{

    function __construct()
    {
        parent::__construct();
//        $this->load->helper('app');
//        $this->output->enable_profiler(TRUE);
    }
    //GET METHODS
    public function about_get(){
        $this->load->view(VIEW_FOLDER.'about', $this->data);
    }

    public function terms_get(){
        $this->load->view(VIEW_FOLDER.'terms', $this->data);
    }

    public function privacy_get(){
        $this->load->view(VIEW_FOLDER.'privacy', $this->data);
    }

    public function advertising_get(){
        $this->load->view(VIEW_FOLDER.'advertising', $this->data);
    }

    public function submit_contribution_get(){
        $this->load->view(VIEW_FOLDER.'submit_contribution', $this->data);
    }

    public function contact_get(){
        $this->load->view(VIEW_FOLDER.'contact', $this->data);
    }

    public function newsletter_get(){
        $this->load->view(VIEW_FOLDER.'newsletter', $this->data);
    }
    //POST FUNCTIONS
    //used to prevent login before site publishes
    public function front_login_post(){
        $pass = trim($this->input->post('password'));
        if ($pass == 'block123'){
            $this->set_login_user_id('hi');
            echo json_encode(array('data'=>SUCCESS_CODE));
        } else {
            echo json_encode(array('data'=>UNAUTHORIZED_CODE));
        }
    }

}