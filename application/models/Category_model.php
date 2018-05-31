<?php
/**
 * author: Martin
 */
Class Category_model extends MY_Model
{
    var $table_name = 'category';

    //get categories which made by Admin
    function get_internal_pagination($where, $offset, $limit){
        $this->db->from($this->table_name);
        $this->db->where($where);
        if ($limit > 0){
            $this->db->limit($limit, $offset);
        }
        $this->db->order_by('name', 'asc');
        $query = $this->db->get();

        if($query->result()){
            return $query->result();

        }else{
            return false;
        }
    }
}