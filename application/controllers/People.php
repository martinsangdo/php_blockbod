<?php defined('BASEPATH') OR exit('No direct script access allowed');
//author: Martin SangDo

require (APPPATH.'/libraries/REST_Controller.php');

Class People extends REST_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('people_model');
    }
    //show list of posts related to this influencer
    public function influencer_posts_get(){
        $username = $this->uri->segment(3); //many slugs of categories
        //get detail of this people
        $this->data['detail'] = $this->people_model->read_row(array('username'=>$username));
        //
        $this->load->view(VIEW_FOLDER.'influencer_posts', $this->data);
    }
}