<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//Parent model which contains common queries
class MY_Model extends CI_Model {
	var $table_name = '';
	var $order = '';

    function __construct()
    {
        parent::__construct();
//        $this->output->enable_profiler(TRUE);

        $this->load->database();
    }

	/**
	 * Add new record
	 */
	function create($doc) {
        if (!$doc || count($doc) == 0) {
            return FALSE;
        }
		if($this->db->insert($this->table_name, $doc)) {
		   return $this->db->insert_id();
		} else {
			return FALSE;
		}
	}

    function get_pagination($where, $offset, $limit, $last_id = ''){
        $this->db->from($this->table_name);
        $this->db->where($where);
        if ($limit > 0){
            $this->db->limit($limit, $offset);
        }

        $query = $this->db->get();

        if($query->result()){
            return $query->result();

        }else{
            return false;
        }
    }
    //get list with more conditions
    function get_pagination_advance($select, $where, $offset, $limit, $order_field, $sort,
                                    $tbl_join=null, $cond_join=null, $side_join=null){
	    $this->db->select($select);
        $this->db->from($this->table_name);
        $this->db->where($where);
        if ($limit > 0){
            $this->db->limit($limit, $offset);
        }
        if (!empty($order_field) && !empty($sort)){
            $this->db->order_by($order_field, $sort);
        }
        if (!empty($tbl_join)){
            $this->db->join($tbl_join, $cond_join, $side_join);
        }

        $query = $this->db->get();

        if($query->result()){
            return $query->result();

        }else{
            return false;
        }
    }

	/**
	 * update record
	 */
	function update_by_condition($where, $data) {
        if (!$where || !$data || count($data) == 0) {
            return FALSE;
        }
		
	 	$this->db->where($where);
	 	$this->db->update($this->table_name, $data);
	 	return TRUE;
	}

	/**
	 * delete row based on some conditions
	 */
	function delete_by_condition($where) {
		if (!$where || count($where) == 0) {
			return FALSE;
		}
		
	 	$this->db->where($where);
		$this->db->delete($this->table_name);
	 
		return TRUE;
	}
	
	/**
	 * custom query
	 */
	function custom_query($sql) {
        if (!$sql || count($sql) == 0) {
            return FALSE;
        }
		$rows = $this->db->query($sql);

        if ($rows && gettype($rows)=='boolean'){
            return TRUE;
        } else {
            return $rows->result();
        }
	}

	/**
	 * get no. of records by total
	 */
	function get_total($where) {
        if (!$where || count($where) == 0) {
            return FALSE;
        }
        $this->db->where($where);
		$query = $this->db->get($this->table_name);
		
		return $query->num_rows();
	}
	/**
	 * get 1 row
	 */
	function read_row($where) {
        if (!$where || count($where) == 0) {
            return FALSE;
        }
        $this->db->where($where);
		$query = $this->db->get($this->table_name);
		
		return $query->row();
	}
	/**
	 * check whether condition is existed
	 */
    function is_existed($where) {
        if (!$where || count($where) == 0) {
            return FALSE;
        }
	    $this->db->where($where);
		$query = $this->db->get($this->table_name);
		if($query->num_rows() > 0){
			return TRUE;
		} else {
			return FALSE;
		}
	}

    /**
     * get all with condition
     */
    function get_all($where = array(), $select = '*') {
        $this->db->select($select);
        $this->db->from($this->table_name);
        $this->db->where($where);
        $query = $this->db->get();

        if($query->result()){
            return $query->result();

        }else{
            return false;
        }
    }

    /**
     * get all with condition
     */
    function get_first_row($where = array(), $select = '*') {
        $this->db->select($select);
        $this->db->from($this->table_name);
        $this->db->where($where);
        $query = $this->db->get();

        if($query->result()){
            return $query->first_row();

        }else{
            return false;
        }
    }

    /**
     * get no. of times request based on IP on today
     */
    function get_total_request_by_ip($ip) {
        $where = 'ip = "'.$ip.'" AND date(update_time)=curdate()';
        $this->db->where($where);
        $query = $this->db->get($this->table_name);

        return $query->num_rows();
    }

}