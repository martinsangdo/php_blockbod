<?php defined('BASEPATH') OR exit('No direct script access allowed');
//author: Martin SangDo

require (APPPATH.'/libraries/REST_Controller.php');

Class Contribute extends REST_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    //show detail of commentary or analysis
    public function analysis_detail_get(){
        $this->load->view(VIEW_FOLDER.'contribute_detail', $this->data);
    }
    //customize style of Google viewer
    public function customize_doc_viewer_get(){
        //<iframe id="doc_content" src="http://docs.google.com/gview?url=http://blockbod.gamereviewnews.com/public/upload/contribute/file_sample_500kB.docx&embedded=true" width="100%" frameBorder="0" scrolling="no"></div>
        $viewer_url = 'http://docs.google.com/gview?url=http://blockbod.gamereviewnews.com/public/upload/contribute/file_sample_500kB.docx&embedded=true';
//        $viewer_url = 'http://nld.com.vn';
        $raw_html = $this->sendGet($viewer_url);
        var_dump($raw_html);
    }

}

