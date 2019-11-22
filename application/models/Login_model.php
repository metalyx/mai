<?php
class Login_model extends CI_Model
{
 
 function can_login($login, $password)
 {
    $this->db->where('login', $login);
    $this->db->where('password', $password);
    $user = $this->db->get('contact');
    if($user->num_rows() > 0)
    {
      return true;
    }
    else
    {
      return false;
    }
 }

 function check_type($login)
 {
    $sql = 'select id_type from contact where login=?';
    $id_type = $this->db->query($sql, $login);
    $id_type = $id_type->result()[0]->id_type;
    return $id_type;
 }

 function check_id($login)
 {
    $sql = 'select id_contact from contact where login=?';
    $id = $this->db->query($sql, $login);
    $id = $id->result_array()[0]['id_contact'];
    return $id;
 }






}

?>