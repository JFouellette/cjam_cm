<?php
Class User_model extends CI_Model
{
   function login($username, $password)
   {
     $this -> db -> select('user_id, name, password');
     $this -> db -> from('cm_users');
     $this -> db -> where('email', $username);
     $this -> db -> where('password', MD5($password));
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
   
   function loaddata($userid)
   {
    $this -> db -> select('name, email, phone');
    $this -> db -> from('cm_users');
    $this -> db -> where('user_id', $userid);

    $query = $this -> db -> get();
    $result = $query->result();

    return $result;
   }

}