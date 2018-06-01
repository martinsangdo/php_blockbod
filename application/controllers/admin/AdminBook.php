<?php defined('BASEPATH') OR exit('No direct script access allowed');
//author: Martin SangDo
//process external books
require (APPPATH.'/libraries/REST_Controller.php');

Class AdminBook extends REST_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('book_model'));

    }
    //show list
    public function show_list_get(){
        $this->data['list'] = $this->book_model->get_pagination_advance('*', array('_id > 0'), 0, 0, 'sort_idx', 'asc');
        //get total number
        $this->data['total'] = $this->book_model->get_total(array('_id > 0'));
        $this->load->view('front/webview/admin/book/list', $this->data);
    }
    //create new page
    public function create_get(){
        $this->load->view('front/webview/admin/book/create', $this->data);
    }
    //edit
    public function update_get(){
        //get detail
        $id = $this->uri->segment(3);
        $detail = $this->book_model->read_row(array('_id'=>$id));
        $this->data['detail'] = $detail;
        //
        $this->load->view('front/webview/admin/book/update', $this->data);
    }
    //========== API functions
    //publish/unpublish
    public function toggle_publish_post(){
        $id = $this->post('id');
        $status = intval($this->post('status'));

        $this->book_model->update_by_condition(array('_id'=>$id), array('status'=>$status));

        $this->response(RestSuccess(array()), SUCCESS_CODE);
    }
    //when Admin creates new one
    public function create_post(){
        $this->load->helper(array('form', 'url'));

        //create new record in DB
        $new_record = array(
            'title' => trim($this->input->post('txt_title')),
            'slug' => trim($this->input->post('txt_slug')),
            'excerpt'=> trim($this->input->post('txt_excerpt')),
            'thumb_url'=> trim($this->input->post('txt_thumb_url')),
            'original_url'=> trim($this->input->post('txt_original_url')),
            'author_name' => trim($this->input->post('txt_author_name')),
            'admin_id' => $this->get_login_user_id(),
            'book_site_id'=>1,      //todo: must change this
            'specific_code' => generateRandomString(),      //for billing
            'sort_idx'=>1   //will be on top
        );
        $publisher = trim($this->input->post('txt_publisher'));
        if (!empty($publisher)){
            $new_record['publisher'] = $publisher;
        }
        $isbn = trim($this->input->post('txt_isbn'));
        if (!empty($isbn)){
            $new_record['isbn'] = $isbn;
        }
        $publish_date = trim($this->input->post('txt_publish_date'));
        if (!empty($publish_date)){
            $new_record['publish_date'] = $publish_date;
        }
        $price = trim($this->input->post('txt_price'));
        if (!empty($price) && is_numeric($price)){
            $new_record['price'] = $price;
        }
        $discount_price = trim($this->input->post('txt_discount_price'));
        if (!empty($discount_price)){
            $new_record['discount_price'] = $discount_price;
        }
        $page_total = trim($this->input->post('txt_page_total'));
        if (!empty($page_total) && is_numeric($page_total)){
            $new_record['page_num'] = $page_total;
        }
        $file_size = trim($this->input->post('txt_file_size'));
        if (!empty($file_size) && is_numeric($file_size)){
            $new_record['file_size_kb'] = $file_size;
        }
        $file_type = trim($this->input->post('txt_file_type'));
        if (!empty($file_type)){
            $new_record['file_type'] = $file_type;
        }
        $status = $this->input->post('chk_public');
        $new_record['status'] = (!empty($status) && intval($status)>0)?1:0;
        //
        $result = $this->book_model->create($new_record);
        $new_id = $this->db->insert_id();
        if ($result){
            //increase indexes of others
            $result = $this->book_model->custom_query('UPDATE book SET sort_idx=sort_idx+1 WHERE _id <>'.$new_id);
            $this->response(RestSuccess(array()), SUCCESS_CODE);
        } else {
            $this->response(RestBadRequest(SERVER_ERROR_MSG), BAD_REQUEST_CODE);
        }
    }
    //when Admin updates existed record
    public function update_post(){
        $this->load->helper(array('form', 'url'));

        //update record in DB
        $update_record = array(
            'title' => trim($this->input->post('txt_title')),
            'slug' => trim($this->input->post('txt_slug')),
            'excerpt'=> trim($this->input->post('txt_excerpt')),
            'thumb_url'=> trim($this->input->post('txt_thumb_url')),
            'original_url'=> trim($this->input->post('txt_original_url')),
            'author_name' => trim($this->input->post('txt_author_name')),
            'admin_id' => $this->get_login_user_id(),
            'book_site_id'=>1,      //todo: must change this
            'sort_idx'=>trim($this->input->post('txt_index'))
        );

        $publisher = trim($this->input->post('txt_publisher'));
        if (!empty($publisher)){
            $update_record['publisher'] = $publisher;
        }
        $isbn = trim($this->input->post('txt_isbn'));
        if (!empty($isbn)){
            $update_record['isbn'] = $isbn;
        }
        $publish_date = trim($this->input->post('txt_publish_date'));
        if (!empty($publish_date)){
            $update_record['publish_date'] = $publish_date;
        }
        $price = trim($this->input->post('txt_price'));
        if (!empty($price) && is_numeric($price)){
            $update_record['price'] = $price;
        }
        $discount_price = trim($this->input->post('txt_discount_price'));
        if (!empty($discount_price)){
            $update_record['discount_price'] = $discount_price;
        }
        $page_total = trim($this->input->post('txt_page_total'));
        if (!empty($page_total) && is_numeric($page_total)){
            $update_record['page_num'] = $page_total;
        }
        $file_size = trim($this->input->post('txt_file_size'));
        if (!empty($file_size) && is_numeric($file_size)){
            $update_record['file_size_kb'] = $file_size;
        }
        $file_type = trim($this->input->post('txt_file_type'));
        if (!empty($file_type)){
            $update_record['file_type'] = $file_type;
        }
        $status = $this->input->post('chk_public');
        $update_record['status'] = (!empty($status) && intval($status)>0)?1:0;
        $orig_id = $this->input->post('original_id');       //doc id
        //update indexes of others, if any
        $swap_id = 0;
        if (trim($this->input->post('txt_index')) != trim($this->input->post('previous_index'))){
            //index is changed
            $orig_index = intval(trim($this->input->post('previous_index')));
            $new_index = intval(trim($this->input->post('txt_index')));
            //find if there is any record has same new index
            $existed_idx = $this->book_model->read_row(array('sort_idx' => $new_index, '_id <> '.$orig_id));
            if ($existed_idx){
                //swap this index
                $swap_id = $existed_idx->_id;
            }
        }
        //
        $result = $this->book_model->update_by_condition(array('_id'=>$orig_id), $update_record);
        if ($result){
            if ($swap_id > 0){
                //swap index of 2 records
                $result = $this->book_model->update_by_condition(array('_id'=>$swap_id), array('sort_idx'=>$orig_index));
            }
            $this->response(RestSuccess(array()), SUCCESS_CODE);
        } else {
            $this->response(RestBadRequest(SERVER_ERROR_MSG), BAD_REQUEST_CODE);
        }
    }
    //increase/decrease index/rank
    public function swap_sort_index_post(){
        $record_id = intval(trim($this->post('id')));
        $new_index = intval(trim($this->post('new_index')));
        $swap_id = intval(trim($this->post('swap_id')));
        $swap_index = intval(trim($this->post('swap_index')));

        //swap index of 2 records, update me firstly
        $result = $this->book_model->update_by_condition(array('_id'=>$record_id), array('sort_idx'=>$new_index));
        if ($result){
            //update other record to my index
            $result = $this->book_model->update_by_condition(array('_id'=>$swap_id), array('sort_idx'=>$swap_index));
            if ($result){
                $this->response(RestSuccess(array()), SUCCESS_CODE);
            } else {
                $this->response(RestBadRequest(SERVER_ERROR_MSG), BAD_REQUEST_CODE);
            }
        } else {
            $this->response(RestBadRequest(SERVER_ERROR_MSG), BAD_REQUEST_CODE);
        }

    }
}