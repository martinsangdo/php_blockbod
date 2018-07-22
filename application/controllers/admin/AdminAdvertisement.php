<?php defined('BASEPATH') OR exit('No direct script access allowed');
//author: Martin SangDo
//process Advertisement
require (APPPATH.'/libraries/REST_Controller.php');

Class AdminAdvertisement extends REST_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('advertisement_model'));

    }
    //show page to change home banner
    public function home_banner_get(){
        //get detail of current displaying banner
        $query = 'SELECT * FROM home_banner WHERE is_active=1';
        $home_banner_detail = $this->advertisement_model->custom_query($query);
        $this->data['home_banner_detail'] = $home_banner_detail[0];
        //
        $this->load->view('front/webview/admin/other/home_banner', $this->data);
    }
    //========== API functions
    //update either url or image banner
    public function update_home_banner_post(){
        $this->load->helper(array('form', 'url'));
        $url = trim($this->post('txt_url'));
        //select old home banner
        $query = 'SELECT * FROM home_banner WHERE is_active=1';
        $home_banner_detail = $this->advertisement_model->custom_query($query);
        //assume that there is one existed record
        $home_banner_detail = $home_banner_detail[0];
        //
        $is_update = false;     //whether data of banner is updated or not
        //
        if ((empty($url) && !empty($_FILES['file_attach'])) ||
            (!empty($url) && empty($_FILES['file_attach']))){
            //update file only
            $is_update = true;
        } else if ($url == $home_banner_detail->url){
            //same url
            $is_update = true;
        } else if ($url == $home_banner_detail->url){
            //same url
            $is_update = true;
        }
        //
        $new_filename = HOME_BANNER_NAME_PREFIX.time().'.jpg';
        $uploaded_success = false;

        if ($is_update){
            //update the existed home banner, either url or image
            $update_data = array();
            if (!empty($url)){
                $update_data['url'] = $url;
            }
            if (!empty($_FILES['file_attach'])){
                //change new cover image
                $config['upload_path'] = HOME_BANNER_FOLDER;
                $config['allowed_types'] = 'jpg|png';
                $config['file_name'] = $new_filename;
                $this->load->library('upload');
                $this->upload->initialize($config);
                if ( $this->upload->do_upload('file_attach')){
                    $uploaded_success = true;
                }
            }
            if ($uploaded_success){
                $update_data['filename'] = $new_filename;
            }
            if (count($update_data) > 0){
                //there is something to update
                $result = $this->advertisement_model->update_by_condition(array('_id'=>$home_banner_detail->_id), $update_data);
                if ($result){
                    if ($uploaded_success){
                        $this->response(RestSuccess(array('filename'=>HOME_BANNER_PATH.$new_filename)), SUCCESS_CODE);
                    } else {
                        $this->response(RestSuccess(array()), SUCCESS_CODE);
                    }
                } else {
                    $this->response(RestBadRequest(SERVER_ERROR_MSG), BAD_REQUEST_CODE);
                }
            } else {
                //nothing to update
                $this->response(RestBadRequest(SERVER_ERROR_MSG), BAD_REQUEST_CODE);
            }
        } else {
            //create new record with new url & banner
            $update_data = array('url'=>$url, 'create_time'=>date('Y-M-d H:i'), 'is_active'=>1);
            if (!empty($_FILES['file_attach'])){
                //change new cover image
                $config['upload_path'] = HOME_BANNER_FOLDER;
                $config['allowed_types'] = 'jpg|png';
                $config['file_name'] = $new_filename;
                $this->load->library('upload');
                $this->upload->initialize($config);
                if ( $this->upload->do_upload('file_attach')){
                    $uploaded_success = true;
                }
            }
            if ($uploaded_success){
                $update_data['filename'] = $new_filename;
            }
            if (count($update_data) > 0){
                //there is something to insert
                $result = $this->advertisement_model->create($update_data);
                if ($result){
                    //revert flag active
                    $result_update = $this->advertisement_model->update_by_condition(array('_id'=>$home_banner_detail->_id), array('is_active'=>0));
                    //
                    if ($uploaded_success){
                        $this->response(RestSuccess(array('filename'=>HOME_BANNER_PATH.$new_filename)), SUCCESS_CODE);
                    } else {
                        $this->response(RestSuccess(array()), SUCCESS_CODE);
                    }
                } else {
                    $this->response(RestBadRequest(SERVER_ERROR_MSG), BAD_REQUEST_CODE);
                }
            } else {
                //nothing to update
                $this->response(RestBadRequest(SERVER_ERROR_MSG), BAD_REQUEST_CODE);
            }
        }
    }
}