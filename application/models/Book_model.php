<?php
/**
 * author: Martin SangDo
 * save my papers & linking books
 */
Class Book_model extends MY_Model
{
    var $table_name = 'book';

    //get my papers to show in homepage
    function get_my_top_papers($limit){
        $this->db->select('_id, title, slug, thumb_url, price, discount_price');
        $this->db->from('book');
        $this->db->where(array('status'=>1, 'is_external'=>0));
        if ($limit > 0){
            $this->db->limit($limit, 0);    //get first paging
        }

        $this->db->order_by('sort_idx', 'desc');

        $query = $this->db->get();

        if($query->result()){
            return $query->result();

        }else{
            return false;
        }
    }
}