<?php
/**
 * author: Martin
 * save latest post detail of site
 */
Class Block_content_model extends MY_Model
{
    var $table_name = 'block_content';
    //get random posts
    function get_pagination_rand($where, $offset, $limit){
        $this->db->from($this->table_name);
        $this->db->where($where);
        if ($limit > 0){
            $this->db->limit($limit, $offset);
        }
        $query = $this->db->order_by('rand()');
        $query = $this->db->get();

        if($query->result()){
            return $query->result();

        }else{
            return false;
        }
    }

    function get_latest_posts($where, $offset, $limit, $except_id = ''){
        $this->db->from($this->table_name);
        $where['status'] = 1;
        $this->db->where($where);
        if(!empty($except_id)) {
            $this->db->where('block_content._id <>', $except_id);
        }
        if ($limit > 0){
            $this->db->limit($limit, $offset);
        }
        $this->db->order_by('update_time', 'desc');
        $query = $this->db->get();

        if($query->result()){
            return $query->result();

        }else{
            return false;
        }
    }

    //get categories of this post
    function get_tags($post_id){
        $this->db->select('category._id, name, slug');
        $this->db->from('category_post');
        $this->db->where('post_id', $post_id);
        $this->db->join('category', 'category_post.cat_id = category._id', 'right');
        $query = $this->db->get();

        if($query->result()){
            return $query->result();
        }else{
            return false;
        }
    }

}