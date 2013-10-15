<?php
Class User_model extends CI_Model
{
   function login($username, $password)
   {
     $this -> db -> select('user_id, name, password, privilege');
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
    $this -> db -> select('name, email, phone, privilege');
    $this -> db -> from('cm_users');
    $this -> db -> where('user_id', $userid);

    $query = $this -> db -> get();
    return $query->result();
   }

   function load_all_users()
   {
    $query = $this->db->get('cm_users');
    return $query->result();
   }

   function update_user_database($id, $data)
   {
    $this -> db -> where('user_id', $id);
    $this -> db -> update('cm_users', $data);

    if($this->db->_error_message()) {
      return false;  
    } else {
      return true;
    }
    
   }

   function check_password($user_id, $password)
   {
     $this -> db -> select('user_id, name, password');
     $this -> db -> from('cm_users');
     $this -> db -> where('user_id', $user_id);
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

}