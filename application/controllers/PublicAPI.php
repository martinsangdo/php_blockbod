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
    //========== POST FUNCTIONS
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
    //save contact content
    public function save_contact_post(){
        $this->load->model(array('contact_model'));
        //check if IP sent many request
        $ip = get_client_ip();
        $request_today_num = $this->contact_model->get_total_request_by_ip($ip);
        if ($request_today_num == MAX_REQUEST_TODAY_LIMIT){
            $this->response(RestBadRequest(MAX_REQUEST_TODAY_LIMIT_CODE), BAD_REQUEST_CODE);
            return;
        }

        $name = trim($this->input->post('name'));
        $email = trim($this->input->post('email'));
        $content = trim($this->input->post('content'));
        $country = trim($this->input->post('country'));
        $phone = trim($this->input->post('phone'));
        $data = array(
            'name' => htmlspecialchars($name),
            'email' => $email,
            'content' => htmlspecialchars($content),
            'ip' => $ip
        );
        if (isset($country)){
            $data['country'] = htmlspecialchars($country);
        }
        if (isset($phone)){
            $data['phone'] = htmlspecialchars($phone);
        }
        $result = $this->contact_model->create($data);
        if ($result){
            $this->response(RestSuccess(array()), SUCCESS_CODE);
        } else {
            $this->response(RestBadRequest(SERVER_ERROR_MSG), BAD_REQUEST_CODE);
        }
    }
    //save newsletter
    public function save_newsletter_post(){
        $this->load->model(array('newsletter_model'));
        //check if IP sent many request
        $ip = get_client_ip();
        $request_today_num = $this->newsletter_model->get_total_request_by_ip($ip);
        if ($request_today_num == MAX_REQUEST_TODAY_LIMIT){
            $this->response(RestBadRequest(MAX_REQUEST_TODAY_LIMIT_CODE), BAD_REQUEST_CODE);
            return;
        }

        $email = trim($this->input->post('email'));
        $opt_1 = $this->input->post('opt_1');
        $opt_2 = $this->input->post('opt_2');
        $opt_3 = $this->input->post('opt_3');
        $opt_4 = $this->input->post('opt_4');

        $data = array(
            'email' => $email,
            'ip' => $ip,
            'opt_1' => intval($opt_1),
            'opt_2' => intval($opt_2),
            'opt_3' => intval($opt_3),
            'opt_4' => intval($opt_4)
        );
        //check if the email is registered
        $existed = $this->newsletter_model->get_total(array('email'=>$email));
        if ($existed && $existed > 0){
            //update
            $result = $this->newsletter_model->update_by_condition(array('email'=>$email), $data);
        } else {
            //create new one
            $result = $this->newsletter_model->create($data);
        }

        if ($result){
            $this->response(RestSuccess(array()), SUCCESS_CODE);
        } else {
            $this->response(RestBadRequest(SERVER_ERROR_MSG), BAD_REQUEST_CODE);
        }
    }
}