<?php
Class User extends CI_Model
{
 function login($username, $password)
 {
   $this -> db -> select('id_tunnus, un_tunnus, pw_tunnus');
   $this -> db -> from('tunnus');
   $this -> db -> where('un_tunnus', $username);
   $this -> db -> where('pw_tunnus', $password);
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