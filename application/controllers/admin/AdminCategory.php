<?php defined('BASEPATH') OR exit('No direct script access allowed');
//author: Martin SangDo
//mange internal and external categories
require (APPPATH.'/libraries/REST_Controller.php');

Class AdminCategory extends REST_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('category_model'));
    }
    //show list of categories made by Admin
    public function internal_list_get(){
        $this->data['list'] = $this->category_model->get_internal_pagination(array('_id > 0', 'cat_group_id'=>INTERNAL_CAT_GROUP_ID), 0, 0);
        $this->load->view('front/webview/admin/article/internal_cat_list', $this->data);
    }
    //========== POST functions
    //create internal category
    public function create_category_post(){
        $name = $this->post('name');
        $slug = $this->post('slug');
        //check if category is existed
        $existed_total = $this->category_model->get_total(array('name'=>$name));
        if ($existed_total > 0){
            //there is a category has same name
            $this->response(RestBadRequest(DUPLICATE_RECORD), BAD_REQUEST_CODE);
        } else {
            $new_record = array('name'=>$name, 'slug'=>$slug, 'cat_group_id'=>INTERNAL_CAT_GROUP_ID);
            $new_id = $this->category_model->create($new_record);
            if ($new_id) {
                $this->response(RestSuccess(array('id'=>$new_id)), SUCCESS_CODE);
            } else {
                $this->response(RestBadRequest(SERVER_ERROR_MSG), BAD_REQUEST_CODE);
            }
        }
    }
    public function update_category_post(){
        $id = $this->post('id');
        $name = $this->post('name');
        $slug = $this->post('slug');

        $this->category_model->update_by_condition(array('_id'=>$id), array('name'=>$name, 'slug'=>$slug));

        $this->response(RestSuccess(array()), SUCCESS_CODE);
    }
}