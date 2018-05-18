<?php
/**
 * author: Martin
 */
Class Event_model extends MY_Model
{
    var $table_name = 'ico_link';
    //get ICO list by type: pre/ongoing/upcoming
    function get_ico_by_group_id($group_id, $offset, $limit){
        $this->db->select('ico._id, title, minor_title, thumb_url, excerpt');
        $this->db->from('ico');
        $this->db->where('ico_link._id', $group_id);
        if ($limit > 0){
            $this->db->limit($limit, $offset);
        }

        $this->db->join('ico_link', 'ico_link._id = ico.ico_id', 'right');
        $this->db->order_by('ico.sort_idx', 'asc');

        $query = $this->db->get();

        if($query->result()){
            return $query->result();

        }else{
            return false;
        }
    }

    function get_ico_detail($ico_id){
        $this->db->where('_id', $ico_id);
        $query = $this->db->get('ico');

        return $query->row();
    }

}