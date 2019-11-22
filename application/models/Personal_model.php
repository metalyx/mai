<?php
class Personal_model extends CI_Model
{ 
    function get_userdata($login, $id)
    {
        $sql1 = 'select * from contact where login=?';
        $result1 = ($this->db->query($sql1, $login))->result_array();
        $sql2 = "select groups.name_group from groups inner join(contact inner join contactngroup on contact.id_contact = contactngroup.id_contact) on groups.id_group = contactngroup.id_group where (((contactngroup.id_contact)=?)) group by contactngroup.id_group";
        $result2 = (($this->db->query($sql2, $id))->result_array());
        
        
        $result = array_merge($result1, $result2);
        return $result;
    }

    function get_usersubjects($id)
    {
        $sql3 = "select Subject.id_subject, Subject.name_subject from Subject inner join (contact inner join contactnsubject on contact.id_contact = contactnsubject.id_contact) on Subject.id_subject = contactnsubject.id_subject where (((contactnsubject.id_contact)=?))";
        $result3 = ($this->db->query($sql3, $id))->result_array();
        return $result3;
    }


    function get_userteachers($id)
    {
      $sql = "select Subject.id_subject from Subject inner join (contact inner join contactnsubject on contact.id_contact = contactnsubject.id_contact) on Subject.id_subject = contactnsubject.id_subject where (((contactnsubject.id_contact)=?))";
      $array = $this->db->query($sql, $id)->result_array();
      $c = count($array);
      $result;
      for ($i = 0; $i < $c; $i++)
      {
          $a = implode($array[$i]);
          $sql = "select subject.name_subject, contact.surname_person from Subject inner join (contact inner join contactnsubject on contact.id_contact = contactnsubject.id_contact) on subject.id_subject = contactnsubject.id_subject where (((contactnsubject.id_subject)=?) and ((contact.id_type)=17));";
          if($i == 0)
          {
            $result = ($this->db->query($sql, $a)->result_array());
          }
          else
          {
            $result = array_merge(($this->db->query($sql, $a)->result_array()), $result);
          }
          
      }

      //$sql2 = "select contact.name_person from Subject inner join (contact inner join contactnsubject on contact.id_contact = contactnsubject.id_contact) on subject.id_subject = contactnsubject.id_subject where (((contactnsubject.id_subject)=?) and ((contact.id_type)=17));";
      // $result = (($this->db->query($sql, $id))->result_array());
      return $result;
      
    }
    function get_usergroups($id)
    {
      $sql = "select groups.name_group from groups inner join(contact inner join contactngroup on contact.id_contact = contactngroup.id_contact) on groups.id_group = contactngroup.id_group where (((contactngroup.id_contact)=?)) group by contactngroup.id_group";
      $result = ($this->db->query($sql, $id))->result_array();
      return $result;
    }

    function get_teachersgroups($id)
    {
      $sql1 = "select contactnsubject.id_subject from Subject inner join (contact inner join contactnsubject on contact.id_contact = contactnsubject.id_contact) on Subject.id_subject = contactnsubject.id_subject where (((contactnsubject.id_contact)=?))";

      $result1 = ($this->db->query($sql1, $id)->result_array());
      $c1 = count($result1);
      $result2;
      for ($i = 0; $i < $c1; $i++)
      {
          $a = implode($result1[$i]);
          $sql = "select contactnsubject.id_contact from Subject inner join (contact inner join contactnsubject on contact.id_contact = contactnsubject.id_contact) on Subject.id_subject = contactnsubject.id_subject where (((contactnsubject.id_subject)=?) and ((contact.id_type = 16)))";
          if($i == 0)
          {
            $result2 = ($this->db->query($sql, $a)->result_array());
          }
          else
          {
            $result2 = array_merge(($this->db->query($sql, $a)->result_array()), $result2);
          }
      }

      if(empty($result2))
      {
        $none = "Нет групп";
        return $none;
      }
      $c2 = count($result2);

      $result3;
      for ($i = 0; $i < $c2; $i++)
      {
        $a = implode($result2[$i]);
        $sql3 = "select groups.name_group from groups inner join contact on groups.id_group = contact.id_group where ((contact.id_contact) = ?)";
        if($i == 0)
        {
           $result3 = ($this->db->query($sql3, $a)->result_array());
        }
        else
        {
          $result3 = array_merge(($this->db->query($sql3, $a)->result_array()), $result3);
        }
      }
      if(empty($result3))
      {
        $none = "Нет групп";
        return $none;
      }
      $res = array();
      for($i = 0; $i < count($result3); $i++)
      {
          array_push($res, implode($result3[$i]));
      }
      

      $res = array_unique($res);
    
      
      
      
      return $res;
    }
    

    function change_info($login, $new_user_info)
    {
        if(empty($new_user_info['name']))
          {
            $sql = 'select name_person from contact where login=?';
            $new_user_info['name'] = (($this->db->query($sql, $login))->result_array());
          }
        if(empty($new_user_info['surname']))
          {
            $sql = 'select surname_person from contact where login=?';
            $new_user_info['surname'] = (($this->db->query($sql, $login))->result_array());
          }
        if(empty($new_user_info['second_name']))
          {
            $sql = 'select second_name_person from contact where login=?';
            $new_user_info['second_name'] = (($this->db->query($sql, $login))->result_array());
          }
        if(empty($new_user_info['phone']))
          {
            $sql = 'select phone_person from contact where login=?';
            $new_user_info['phone'] = (($this->db->query($sql, $login))->result_array());
          }
        if(empty($new_user_info['birthdate']))
          {
            $sql = 'select birthdate_person from contact where login=?';
            $new_user_info['birthdate'] = (($this->db->query($sql, $login))->result_array());
          }
          
       //  $sql= 'update contact set name_person=?, surname_person=?, second_name_person=?, phone_person=?, birthdate_person=? where login=?';
        
       //  $this->db->query($sql, array($new_user_info['name'], $new_user_info['surname'], $new_user_info['second_name'], $new_user_info['phone'], $new_user_info['birthdate']));
       // // var_dump($new_user_info['name']);


          //var_dump($new_user_info['phone']);

        $sql_1="update contact set name_person=? where login='$login'";
        $this->db->query($sql_1, $new_user_info['name']);
        $sql_2="update contact set surname_person=? where login='$login'";
        $this->db->query($sql_2, $new_user_info['surname']);
        $sql_3="update contact set phone_person=? where login='$login'";
        $this->db->query($sql_3, $new_user_info['phone']);
        $sql_4="update contact set birthdate_person=? where login='$login'";
        $this->db->query($sql_4, $new_user_info['birthdate']);
        $sql_5="update contact set second_name_person=? where login='$login'";
        $this->db->query($sql_5, $new_user_info['second_name']);

        
        return true;
    }



}

?>