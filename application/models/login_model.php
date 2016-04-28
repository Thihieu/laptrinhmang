<?php
class login_model extends CI_Model {
    function __construct()
        {
            parent::__construct();
        }
 function login($email,$password) 
        {
        $this -> db -> select('user_id, user_name, password');
        $this -> db -> from('tbl_user');
        $this -> db -> where('emails', $email);
        $this -> db -> where('password', $password);
        $this -> db -> limit(1);
        $query = $this -> db -> get();           
            if($query -> num_rows() == 1)
                {
                 return $query->result();
                }
            else
                {
                 return false;
                }
        }             
}            
?>  