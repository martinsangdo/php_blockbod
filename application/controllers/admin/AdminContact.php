<?php defined('BASEPATH') OR exit('No direct script access allowed');
//author: Martin SangDo
//process contact
require (APPPATH.'/libraries/REST_Controller.php');

Class AdminContact extends REST_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('contact_model'));

    }
    //show list
    public function show_list_get(){
        $data_list = $this->contact_model->get_pagination_advance('*', array('_id > 0'), 0, 0, 'create_time', 'desc');
        $this->data['list'] = $data_list;
        //get total number
        $this->data['total'] = $this->contact_model->get_total(array('_id > 0'));
        //update flag viewed in this page only
        if ($data_list){
            $len = count($data_list);
            $arr_ids = array();
            for ($i=0;$i<$len;$i++){
                $arr_ids[$i] = $data_list[$i]->_id;
            }
            $update = $this->contact_model->update_by_condition('_id IN ('.implode(',', $arr_ids).')', array('is_viewed'=>1));
        }
        //
        $this->load->view('front/webview/admin/other/contact_list', $this->data);
    }
    //========== API functions
    //
    public function get_unread_mess_num_post(){
        $total_unread = $this->contact_model->get_total(array('is_viewed'=>0));
        $this->response(RestSuccess(array('num'=>$total_unread)), SUCCESS_CODE);
    }
}