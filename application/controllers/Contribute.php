<?php defined('BASEPATH') OR exit('No direct script access allowed');

require (APPPATH.'/libraries/REST_Controller.php');

Class Contribute extends REST_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function analysis_detail_get(){
        $this->load->view(VIEW_FOLDER.'/contribute_detail', $this->data);
    }
}

