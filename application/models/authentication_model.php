<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Authentication_model extends CI_Model{
	
	/* Gán tên bảng cần xử lý*/
	private $_name = 'ci_user';
	
	function __construct(){
        parent::__construct();
    } 
    
    /**
     * Get all users in DB
     * @param null
     * @return array
     */
    function a_fCheckUser( $a_UserInfo ){
    	$a_User	=	$this->db->select()
							->from('tbl_user')
					    	->where('user_name', $a_UserInfo['username'])
					    	->where('password', $a_UserInfo['password'])
					    	->get()
					    	->row_array();
    	if(count($a_User) >0){
    		return $a_User;
    	} else {
    		return false;
    	}
    }
	
	// Function To Fetch All Students Record
	function show_products(){
	$query = $this->db->get('tbl_product');
	$query_result = $query->result();
	return $query_result;
	}
	// Function To Fetch Selected Student Record
	function show_pro_id($data){
	$this->db->select('*');
	$this->db->from('tbl_product');
	$this->db->where('pro_id', $data);
	$query = $this->db->get();
	$result = $query->result();
	return $result;
	}
	// Update Query For Selected Student
	function update_student_id1($id,$data){
	$this->db->where('pro_id', $id);
	$this->db->update('pro_id', $data);
	}
  
}
