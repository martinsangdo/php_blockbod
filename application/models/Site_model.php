<?php
/**
 * author: Martin
 */
Class Site_model extends MY_Model
{
    var $table_name = 'site';

    //update after crawling
    function update_crawl($id, $new_post_num){
        $this->db->where('_id', $id);
        $this->db->set('crawl_time', date('Y-m-d H:i:s'));
        $this->db->set('post_num', 'post_num+'.$new_post_num, FALSE);
        $this->db->update('site');
    }
}