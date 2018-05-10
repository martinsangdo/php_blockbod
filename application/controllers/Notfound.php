<?php defined('BASEPATH') OR exit('No direct script access allowed');

require (APPPATH.'/libraries/REST_Controller.php');

Class Notfound extends REST_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    //show list of posts inside category
    public function index(){
        $this->load->view(VIEW_FOLDER.'/notfound', $this->data);
    }

    public function iframe_img_get(){
//        https://github.com/justacan/cloudflare



//        var_dump($_SERVER);
//        $src = $this->sendGet('https://exa.vn/images/backup/backup2.jpg');
//        $src = $this->sendGet('https://engma.com.vn/assets/css/images/Home_v2/new_slider_3.png');
//        $src = $this->sendGetWithoutHeader('https://stackoverflow.com/questions/28710179/file-get-contents-not-working-with-cloudflare');

//        $src = $this->sendGet('https://btcmanager.com/wp-content/uploads/2018/04/Singaporean-Resident-to-be-Caned-12-strokes-and-Jailed-in-Connection-with-Bitcoin-Related-Robbery-768x458.jpg');
//        $this->data['src'] = $src['data'];
//        sleep(10);
//        $this->data['src'] = '<img src="https://btcmanager.com/wp-content/uploads/2018/04/Singaporean-Resident-to-be-Caned-12-strokes-and-Jailed-in-Connection-with-Bitcoin-Related-Robbery-768x458.jpg"/>';

//        echo('<img src="'.$src['data'].'"/>');
//        echo '<img src="https://btcmanager.com/wp-content/uploads/2018/04/Singaporean-Resident-to-be-Caned-12-strokes-and-Jailed-in-Connection-with-Bitcoin-Related-Robbery-768x458.jpg"/>';
        $this->load->view(VIEW_FOLDER.'/notfound', $this->data);
    }
}

