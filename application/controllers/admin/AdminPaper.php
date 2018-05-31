<?php defined('BASEPATH') OR exit('No direct script access allowed');
//author: Martin SangDo
require (APPPATH.'/libraries/REST_Controller.php');

Class AdminPaper extends REST_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('paper_model'));

    }
    //show list of my papers/books
    public function show_my_papers_get(){
        $this->data['list'] = $this->paper_model->get_pagination_advance('*', array('_id > 0'), 0, DEFAULT_PAGE_LEN, 'sort_idx', 'asc');
        //get total number
        $this->data['total'] = $this->paper_model->get_total(array('_id > 0'));
        $this->load->view('front/webview/admin/paper/my_paper_list', $this->data);
    }
    //create new paper for selling
    public function create_paper_get(){
        $this->load->view('front/webview/admin/paper/create_paper', $this->data);
    }
    //edit paper
    public function update_paper_get(){
        //get paper detail
        $id = $this->uri->segment(3);
        $detail = $this->paper_model->read_row(array('_id'=>$id));
        $this->data['detail'] = $detail;
        //
        $this->load->view('front/webview/admin/paper/update_paper', $this->data);
    }
    //========== API functions
    //generate random strings for book
    public function generate_specific_code_post(){
        $this->load->view('front/webview/admin/paper/create_paper', $this->data);
    }
    //publish/unpublish book/paper
    public function toggle_publish_post(){
        $id = $this->post('id');
        $status = intval($this->post('status'));

        $this->paper_model->update_by_condition(array('_id'=>$id), array('status'=>$status));

        $this->response(RestSuccess(array()), SUCCESS_CODE);
    }
    //when Admin creates new paper
    public function create_paper_post(){
        $this->load->helper(array('form', 'url'));

        $slug = trim($this->post('txt_slug'));
        //check if user uploads a cover
        if (!empty($_FILES['file_cover'])){
            //user uploaded a cover
            $new_cover_filename = $slug.generate_filename_prefix().'.png';
            $config['upload_path'] = BOOK_COVER_FOLDER;
            $config['allowed_types'] = 'jpg|png';
            $config['file_name'] = $new_cover_filename;
            $this->load->library('upload');
            $this->upload->initialize($config);
            if ( ! $this->upload->do_upload('file_cover')){
                $uploaded_cover_success = false;
            } else {
                $uploaded_cover_success = true;
            }
        }
        //check if user uploads attach file
        if (!empty($_FILES['file_attach'])){
            //user uploaded a cover
            $new_attach_filename = $slug.generate_filename_prefix().'.pdf';
            $config['upload_path'] = BOOK_ATTACH_FOLDER;
            $config['allowed_types'] = 'pdf';
            $config['file_name'] = $new_attach_filename;
            $this->load->library('upload');
            $this->upload->initialize($config);
//            $this->load->library('upload', $config);      //not working at all
            if ( ! $this->upload->do_upload('file_attach')){
                $uploaded_attach_success = false;
            } else {
                $uploaded_attach_success = true;
            }
        }
        //create new record in DB
        $new_record = array(
            'title' => trim($this->input->post('txt_title')),
            'slug' => trim($this->input->post('txt_slug')),
            'specific_code' => generateRandomString(),      //for billing
            'author_name' => trim($this->input->post('txt_author_name')),
            'admin_id' => $this->get_login_user_id(),
            'publish_date'=>date('Y-m-d'),
            'excerpt'=> trim($this->input->post('txt_excerpt')),
            'sort_idx'=>1   //will be on top
        );

        //check optional data
        if (!empty($_FILES['file_cover']) && $uploaded_cover_success){
            $new_record['thumb_url'] = $new_cover_filename;
        }
        if (!empty($_FILES['file_attach']) && $uploaded_attach_success){
            $new_record['file_size_kb'] = intval(trim($this->input->post('file_attach_size')) / 1024);
            $new_record['file_type'] = PDF_FILE_EXT;
            $new_record['attach_filename'] = $new_attach_filename;
        }
        $description = $this->input->post('txt_content');
        if (!empty($description)){
            $new_record['description'] = trim($description);
        }
        $status = $this->input->post('chk_public');
        $new_record['status'] = (!empty($status) && intval($status)>0)?1:0;

        $price = $this->input->post('txt_price');
        if (!empty($price)){
            $new_record['price'] = $price;
        }
        $discount_price = $this->input->post('txt_discount_price');
        if (!empty($discount_price)){
            $new_record['discount_price'] = $discount_price;
        }
        $page_total = $this->input->post('txt_page_total');
        if (!empty($page_total)){
            $new_record['page_num'] = $page_total;
        }
        //
        $result = $this->paper_model->create($new_record);
        if ($result){
            //increase indexes of others
            $result = $this->paper_model->custom_query('UPDATE paper SET sort_idx=sort_idx+1 WHERE _id <>'.$this->db->insert_id());
            //
            $this->response(RestSuccess(array()), SUCCESS_CODE);
        } else {
            $this->response(RestBadRequest(SERVER_ERROR_MSG), BAD_REQUEST_CODE);
        }
    }
    //when Admin updates existed paper
    public function update_paper_post(){
        $this->load->helper(array('form', 'url'));

        $slug = trim($this->post('txt_slug'));
        //check if user uploads a cover
        if (!empty($_FILES['file_cover'])){
            //user uploaded a cover
            $new_cover_filename = $slug.generate_filename_prefix().'.png';
            $config['upload_path'] = BOOK_COVER_FOLDER;
            $config['allowed_types'] = 'jpg|png';
            $config['file_name'] = $new_cover_filename;
            $this->load->library('upload');
            $this->upload->initialize($config);
            if ( ! $this->upload->do_upload('file_cover')){
                $uploaded_cover_success = false;
            } else {
                $uploaded_cover_success = true;
            }
        }
        //check if user uploads attach file
        if (!empty($_FILES['file_attach'])){
            //user uploaded a cover
            $new_attach_filename = $slug.generate_filename_prefix().'.pdf';
            $config['upload_path'] = BOOK_ATTACH_FOLDER;
            $config['allowed_types'] = 'pdf';
            $config['file_name'] = $new_attach_filename;
            $this->load->library('upload');
            $this->upload->initialize($config);
            if ( ! $this->upload->do_upload('file_attach')){
                $uploaded_attach_success = false;
            } else {
                $uploaded_attach_success = true;
            }
        }

        //update record in DB
        $update_record = array(
            'title' => trim($this->input->post('txt_title')),
            'slug' => trim($this->input->post('txt_slug')),
            'author_name' => trim($this->input->post('txt_author_name')),
            'admin_id' => $this->get_login_user_id(),
            'excerpt'=> trim($this->input->post('txt_excerpt')),
            'sort_idx'=>trim($this->input->post('txt_index'))
        );

        //check optional data
        if (!empty($_FILES['file_cover']) && $uploaded_cover_success){
            $update_record['thumb_url'] = $new_cover_filename;
        }
        if (!empty($_FILES['file_attach']) && $uploaded_attach_success){
            $update_record['file_size_kb'] = intval(trim($this->input->post('file_attach_size')) / 1024);
            $update_record['file_type'] = PDF_FILE_EXT;
            $update_record['attach_filename'] = $new_attach_filename;
        }
        $description = $this->input->post('txt_content');
        if (!empty($description)){
            $update_record['description'] = trim($description);
        }
        $status = $this->input->post('chk_public');
        $update_record['status'] = (!empty($status) && intval($status)>0)?1:0;

        $price = $this->input->post('txt_price');
        if (!empty($price)){
            $update_record['price'] = $price;
        }
        $discount_price = $this->input->post('txt_discount_price');
        if (!empty($discount_price)){
            $update_record['discount_price'] = $discount_price;
        }
        $page_total = $this->input->post('txt_page_total');
        if (!empty($page_total)){
            $update_record['page_num'] = $page_total;
        }
        $orig_id = $this->input->post('original_id');       //doc id
        //update indexes of others, if any
        $swap_id = 0;
        if (trim($this->input->post('txt_index')) != trim($this->input->post('previous_index'))){
            //index is changed
            $orig_index = intval(trim($this->input->post('previous_index')));
            $new_index = intval(trim($this->input->post('txt_index')));
            //find if there is any paper has same new index
            $existed_idx = $this->paper_model->read_row(array('sort_idx' => $new_index, '_id <> '.$orig_id));
            if ($existed_idx){
                //swap this index
                $swap_id = $existed_idx->_id;
            }
        }
        //
        $result = $this->paper_model->update_by_condition(array('_id'=>$orig_id), $update_record);
        if ($result){
            if ($swap_id > 0){
                //swap index of 2 papers
                $result = $this->paper_model->update_by_condition(array('_id'=>$swap_id), array('sort_idx'=>$orig_index));
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

        //swap index of 2 papers, update me firstly
        $result = $this->paper_model->update_by_condition(array('_id'=>$record_id), array('sort_idx'=>$new_index));
        if ($result){
            //update other record to my index
            $result = $this->paper_model->update_by_condition(array('_id'=>$swap_id), array('sort_idx'=>$swap_index));
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