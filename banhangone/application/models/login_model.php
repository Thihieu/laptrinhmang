<?php
class login_model extends CI_Model {
    function __construct()
        {
            parent::__construct();
        }
 function login($email,$password) 
        {
        $this -> db -> select('id, email, password');
        $this -> db -> from('users');
        $this -> db -> where('email', $email);
        $this -> db -> where('password', sha1($password));
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