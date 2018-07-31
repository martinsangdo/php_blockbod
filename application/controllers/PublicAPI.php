<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//author: Martin SangDo

require (APPPATH.'/libraries/REST_Controller.php');
include APPPATH . 'third_party/paypal/PaypalIPN.php';

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
    //display after user paid custom newsletter
    public function newsletter_pay_success_get(){
        $this->load->view(VIEW_FOLDER.'newsletter', $this->data);
    }
    //display after user cancel payment of custom Newsletter
    public function newsletter_pay_cancel_get(){
        $this->load->view(VIEW_FOLDER.'newsletter', $this->data);
    }
    //search article by keywords
    public function search_article_get(){
        $this->load->model(array('block_content_model', 'paper_model'));
        $keyword = urldecode($this->uri->segment(3));
        $offset = is_numeric($this->uri->segment(4)) && intval($this->uri->segment(4)) > 0?$this->uri->segment(4):0;
        if (!isset($keyword) || strlen($keyword) < 3){
            //there is no valid keyword
            $this->data['data_block'] = false;
            $this->data['pagination'] = '';
        } else {
            $posts = $this->block_content_model->custom_query('SELECT * FROM block_content'.
                ' WHERE status=1 AND (title LIKE "%'.$keyword.'%" OR excerpt LIKE "%'.$keyword.'%") ORDER BY update_time DESC LIMIT '.
                DEFAULT_PAGE_LEN.' OFFSET '.$offset);
            $this->data['data_block'] = $posts;
            if ($posts){
                //found some posts
                //get total posts in category
                $total_post = $this->block_content_model->get_total(array('status'=>1));
                //create paging
                $base_url = '/publicapi/search_article/'.$keyword.'/';
                $this->data['pagination'] = $this->create_pagination($base_url, $total_post, DEFAULT_PAGE_LEN, 4);
            } else {
                $this->data['pagination'] = '';
            }
        }
        //get my papers
        $this->data['top_papers'] = $this->paper_model->get_pagination_advance('*',
            array('status'=>1), 0, 3, 'sort_idx', 'asc');
        //
        $this->data['keyword'] = $keyword;
        $this->load->view(VIEW_FOLDER.'news_list', $this->data);
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
            'ip' => $ip,
            'create_time' => CURRENT_TIME
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
            'opt_4' => intval($opt_4),
            'create_time' => CURRENT_TIME
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
    //save newsletter by custom request
    public function save_newsletter_custom_post(){
        $this->load->model(array('newsletter_model'));
        //check if IP sent many request
        $ip = get_client_ip();
        $request_today_num = $this->newsletter_model->get_total_request_by_ip($ip);
        if ($request_today_num == MAX_REQUEST_TODAY_LIMIT){
            $this->response(RestBadRequest(MAX_REQUEST_TODAY_LIMIT_CODE), BAD_REQUEST_CODE);
            return;
        }

        $email = trim($this->input->post('email'));
        $opt_5 = $this->input->post('opt_5');
        $opt_6 = $this->input->post('opt_6');

        $data = array(
            'email' => $email,
            'ip' => $ip,
            'opt_5' => intval($opt_5),
            'opt_6' => intval($opt_6),
            'custom_request' => $this->input->post('custom_request'),
            'create_time' => CURRENT_TIME,
            'item_number' => $this->input->post('item_number')
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
    //update newsletter by custom request
    public function update_newsletter_custom_post(){
        $this->load->model(array('newsletter_model'));

        $email = trim($this->input->post('email'));
        //payment status
        $data = array(
            'paid_status' => 1,     //already paid
            'paid_time' => CURRENT_TIME,
            'price' => $this->input->post('price')
        );
        //
        //check if the email is registered
        $existed = $this->newsletter_model->get_total(array('email'=>$email));
        if ($existed && $existed > 0){
            //update
            $result = $this->newsletter_model->update_by_condition(array('email'=>$email), $data);
            if ($result){
                $this->response(RestSuccess(array()), SUCCESS_CODE);
            } else {
                $this->response(RestBadRequest(SERVER_ERROR_MSG), BAD_REQUEST_CODE);
            }
        } else {
            //email not existed
            $this->response(RestBadRequest(USER_IS_NOT_EXISTED_MSG), BAD_REQUEST_CODE);
        }
    }
    //get coin price in real time
    public function front_get_raw_url_post(){
        $url = trim($this->input->post('url'));
        $info = $this->sendGet($url);
        $this->response(RestSuccess($info), SUCCESS_CODE);
    }
    //receive information after user paid custom Newsletter
    public function newsletter_pay_ipn_post(){
        //get Paypal token
        $ipn = new PaypalIPN();
        // Use the sandbox endpoint during testing.
        $ipn->useSandbox();
        $verified = $ipn->verifyIPN();
        $is_test_ipn = $this->input->post('test_ipn');      //only test by Simulator has this value
        $transaction_id = $this->input->post('txn_id');     //unique for each payment
        $this->load->model(array('newsletter_model'));
        //NOTE: $verified not working in Sandbox or Simulator
        if (isset($transaction_id) && empty($is_test_ipn)) {
            /*
             * Process IPN
             * A list of variables is available here:
             * https://developer.paypal.com/webapps/developer/docs/classic/ipn/integration-guide/IPNandPDTVariables/
             */
            $payment_status = $this->input->post('payment_status');
            $item_number = $this->input->post('item_number');
            //save detail of transaction
            $data = array(
                create_time => CURRENT_TIME,
                payment_type => $this->input->post('payment_type'),
                payment_date => $this->input->post('payment_date'),
                payment_status => $payment_status,
                first_name => $this->input->post('first_name'),
                last_name => $this->input->post('last_name'),
                payer_email => $this->input->post('payer_email'),
                payer_id => $this->input->post('payer_id'),
                address_name => $this->input->post('address_name'),
                address_country_code => $this->input->post('address_country_code'),
                receiver_email => $this->input->post('receiver_email'),
                item_name => $this->input->post('item_name'),
                item_number => $item_number,
                mc_currency => $this->input->post('mc_currency'),
                mc_fee => $this->input->post('mc_fee'),
                mc_gross => $this->input->post('mc_gross'),
                txn_type => $this->input->post('txn_type'),
                txn_id => $transaction_id,
                payment_custom => $this->input->post('payment_custom')
            );
            //check if this transaction is saved in DB
            $sql = 'SELECT _id FROM paypal_transaction WHERE txn_id="'.$transaction_id.'"';
            $record = $this->newsletter_model->custom_query($sql);
            if ($record && count($record)>0){
                //update transaction detail

            } else {
                //new transaction, create new one
                //transaction was saved, update it
                $new_id = $this->newsletter_model->create_custom('paypal_transaction', $data);
                if ($new_id){
                    //create new record ok
                    //find saved newsletter
                    $news_detail = $this->newsletter_model->read_row(array('item_number'=>$item_number));
                    if (isset($news_detail->_id)){
                        //found it, create relationship record with newsletter
                        $rel_data = array(
                            'newsletter_id' => $news_detail->_id,
                            'transaction_id' => $new_id
                        );
                        $exec = $this->newsletter_model->create_custom('newsletter_transaction', $rel_data);
                        //update status to table "newsletter"
                        $this->newsletter_model->update_by_condition(array('_id'=>$news_detail->_id), array('payment_status'=>$payment_status));
                    } else {
                        //cannot found saved newsletter

                    }
                } else {
                    //failed to save new transaction to DB

                }
            }
            //
        } else {
            //not verified (Paypal will send back later)
        }
    }
}