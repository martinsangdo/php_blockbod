<?php defined('BASEPATH') OR exit('No direct script access allowed');
//author: Martin SangDo

require (APPPATH.'/libraries/REST_Controller.php');

Class News extends REST_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model(array('block_content_model'));
//        $this->output->enable_profiler(TRUE);

    }
    //show post detail
    public function index_get(){
        //find post detail
        $slug = $this->uri->segment(2);
        $this->load->model(array('site_model', 'paper_model'));
        $article_detail = $this->block_content_model->read_row(array('slug'=>$slug));
        $site_detail = $this->site_model->read_row(array('_id'=>$article_detail->site_id));
        $tag_list = $this->block_content_model->get_tags($article_detail->_id);
        $this->data['site_detail'] = $site_detail;
        $this->data['article_detail'] = $article_detail;
        $this->data['tag_list'] = $tag_list;
        //get related posts
        $related_posts = $this->get_related_posts($article_detail->_id);
        //create extra post id
        $extra_ids = array();
        $extra_ids[] = $article_detail->_id;     //except viewing post
        if (count($related_posts) > 0){
            //has some related posts
            for ($i=0; $i<count($related_posts); $i++){
                $extra_ids[] = $related_posts[$i]->_id;
            }
        }
        $this->data['related_posts'] = $related_posts;
        $this->data['extra_ids'] = implode('-',$extra_ids);
        //get my papers
        $this->data['top_papers'] = $this->paper_model->get_pagination_advance('*',
            array('status'=>1), 0, 3, 'sort_idx', 'asc');
        //
        $this->load->view(VIEW_FOLDER.'news', $this->data);
    }
    //show all posts by group
    public function group_list_get(){
        //find posts belong to 1 group
        $site_id = $this->uri->segment(3);      //same site
        $this->load->model(array('site_model', 'paper_model'));

        $offset = is_numeric($this->uri->segment(5)) && intval($this->uri->segment(5)) > 0?$this->uri->segment(5):0;
        $this->data['data_block'] = $this->block_content_model->get_latest_posts(array('site_id' => $site_id), $offset, DEFAULT_PAGE_LEN);
        //get total posts
        $total_post = $this->block_content_model->get_total(array('status', '1'));
        //create paging
        $base_url = '/news/group_list/'.$site_id.'/'.$this->uri->segment(4);
        $this->data['pagination'] = $this->create_pagination($base_url, $total_post, DEFAULT_PAGE_LEN, 5);
        //get my papers
        $this->data['top_papers'] = $this->paper_model->get_pagination_advance('*',
            array('status'=>1), 0, 3, 'sort_idx', 'asc');
        //
        $this->load->view(VIEW_FOLDER.'news_list', $this->data);
    }
    //display real-time price
    public function coin_price_get(){
        $this->load->view(VIEW_FOLDER.'coin_price', $this->data);
    }
    //========== POST FUNCTIONS
    //get related, recent, random posts
    public function get_extra_posts_post(){
        $post_id = $this->input->post('post_id');
        $extra_id_params = $this->input->post('extra_ids');
        $extra_ids = explode('-', $extra_id_params);
        //
        $recent_posts = $this->get_recent_posts($extra_ids);
        //add more extra posts
        if (count($recent_posts) > 0){
            //has some related posts
            for ($i=0; $i<count($recent_posts); $i++){
                $extra_ids[] = $recent_posts[$i]->_id;
            }
        }
        //get more list
        $random_posts = $this->get_random_posts($extra_ids, $post_id);
        //build return data
        $return_lists = array(
            'recent_posts' => $recent_posts,
            'random_posts' => $random_posts
        );
        $this->response(RestSuccess($return_lists), SUCCESS_CODE);
    }
    //get original detail content
    public function get_original_detail_post(){
        $post_id = $this->input->post('post_id');
        $this->load->model('site_model');
        $article_detail = $this->block_content_model->read_row(array('_id'=>$post_id));
        $this->response(RestSuccess($article_detail->content), SUCCESS_CODE);
    }
    //========== PRIVATE FUNCTIONS
    //get related posts of this one based on same categories
    private function get_related_posts($post_id){
        //get all categories of this post
        $this->load->model('category_model');
        $category_ids = $this->category_model->custom_query('SELECT cat_id FROM category_post WHERE post_id='.$post_id);
        //
        $related_posts = array();
        if ($category_ids){
            //has some categories
            $cat_num = count($category_ids);
            if ($cat_num > RELATED_POST_NUM){
                $each_post_num = 1;     //each category get 1 post
            } else {
                $each_post_num = ceil(RELATED_POST_NUM / $cat_num);   //number of posts to get in each category
            }
            $extra_ids = array();
            $extra_ids[] = $post_id;    //except current post
            //get posts in each category
            for ($i=0; $i<$cat_num; $i++){
                $posts_in_cat = $this->category_model->custom_query('SELECT block_content._id,title,block_content.slug,thumb_url FROM category_post'.
                    ' LEFT JOIN block_content ON block_content._id = category_post.post_id WHERE post_id NOT IN ('.implode(',', $extra_ids).') '.
                    ' AND cat_id='.$category_ids[$i]->cat_id.' ORDER BY block_content.time DESC LIMIT '.$each_post_num);
                if ($posts_in_cat){
                    for ($j=0; $j<count($posts_in_cat);$j++){
                        $extra_ids[] = $posts_in_cat[$j]->_id;
                        $related_posts[] = $posts_in_cat[$j];
                    }
                }
            }
        }
        return $related_posts;
    }
    //get newest posts, except this one
    private function get_recent_posts($extra_ids){
        $recent_sql = 'SELECT _id,slug,title,excerpt,thumb_url,author_name FROM block_content WHERE status=1 AND _id NOT IN ('.
            implode(',',$extra_ids).') ORDER BY time DESC LIMIT 6';
        $recent_posts = $this->block_content_model->custom_query($recent_sql);
        return $recent_posts;
    }
    //get random posts, except some ids
    //get newer & older around current post id by time or _id
    private function get_random_posts($extra_ids, $post_id){
        $newer_sql = 'SELECT _id,slug,title,excerpt,thumb_url,author_name FROM block_content WHERE status=1 AND _id NOT IN ('.
            implode(',',$extra_ids).') AND _id > '.$post_id.' ORDER BY time DESC LIMIT 3';
        $newer_posts = $this->block_content_model->custom_query($newer_sql);
        $older_sql = 'SELECT _id,slug,title,excerpt,thumb_url,author_name FROM block_content WHERE status=1 AND _id NOT IN ('.
            implode(',',$extra_ids).') AND _id < '.$post_id.' ORDER BY time DESC LIMIT 3';
        $older_posts = $this->block_content_model->custom_query($older_sql);
        return array_merge($newer_posts, $older_posts);
    }
}