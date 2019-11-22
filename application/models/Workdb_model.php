<?php
class Workdb_model extends CI_Model
{
	function run_query($sql, $array)
	{
		$query = $this->db->query($sql, $array);

		if ($query == TRUE)
		{
			return true;
		}
		if($query == FALSE)
		{
			return false;
		}
	}
	function add_subject($array)
	{
		$sql = "insert into subject (name_subject) values (?)";
		return $this->run_query($sql, $array);
	}
	function add_group($array)
	{
		$sql = "insert into groups (name_group) values (?)";
		return $this->run_query($sql, $array);
	}
	function add_student($array)
	{
		$sql = "insert into contact (name_person, surname_person, birthdate_person, id_group, login, password) values (?, ?, ?, ?, ?, ?)";
		return $this->run_query($sql, $array);
	}
	function add_teacher($array)
	{
		$sql = "insert into contact (name_person, surname_person, birthdate_person, login, password, id_type) values (?, ?, ?, ?, ?, 17)";
		return $this->run_query($sql, $array);
	}
	function add_admin($array)
	{
		$sql = "insert into contact (name_person, surname_person, birthdate_person, login, password, id_type) values (?, ?, ?, ?, ?, 18)";
		return $this->run_query($sql, $array);
	}

	function del_student ($id)
	{
		$sql = 'delete from contact where id_contact=?';
		return $this->run_query($sql, $id);
	}

	function del_group ($id)
	{
		$sql = 'delete from groups where id_group=?';
		return $this->run_query($sql, $id);
	}

	function del_teacher ($id)
	{
		$sql = 'delete from contact where id_contact=?';
		return $this->run_query($sql, $id);
	}

	function del_admin ($id)
	{
		$sql = 'delete from contact where id_contact=?';
		return $this->run_query($sql, $id);
	}

	function del_subject ($id)
	{
		$sql = 'delete from subject where id_subject=?';
		return $this->run_query($sql, $id);
	}

	function upd_student($id, $new_user_info)
	{

		var_dump($id);
		if(empty($new_user_info['name']))
          {
            $sql = "select name_person from contact where id_contact=?";
            $new_user_info['name'] = ($this->db->query($sql, $id)->result_array());
          }
        if(empty($new_user_info['surname']))
          {
            $sql = "select surname_person from contact where id_contact=?";
            $new_user_info['surname'] = (($this->db->query($sql, $id))->result_array());
          }
        if(empty($new_user_info['second_name']))
          {
            $sql = "select second_name_person from contact where id_contact=?";
            $new_user_info['second_name'] = (($this->db->query($sql, $id))->result_array());
          }
        if(empty($new_user_info['phone']))
          {
            $sql = "select phone_person from contact where id_contact=?";
            $new_user_info['phone'] = (($this->db->query($sql, $id))->result_array());
          }
        if(empty($new_user_info['birthdate']))
          {
            $sql = "select birthdate_person from contact where id_contact=?";
            $new_user_info['birthdate'] = (($this->db->query($sql, $id))->result_array());
          }
        if(empty($new_user_info['id_group']))//
          {
            $sql = "select id_group from contact where id_contact=?";
            $new_user_info['id_group'] = (($this->db->query($sql, $id))->result_array());
          }
        if(empty($new_user_info['id_caf']))
          {
            $sql = "select id_cafedra from contact where id_contact=?";
            $new_user_info['id_caf'] = (($this->db->query($sql, $id))->result_array());
          }    
        if(empty($new_user_info['id_faculty']))
          {
            $sql = "select id_faculty from contact where id_contact=?";
            $new_user_info['id_faculty'] = (($this->db->query($sql, $id))->result_array());
          }
        if(empty($new_user_info['login']))
          {
            $sql = "select login from contact where id_contact=?";
            $new_user_info['login'] = (($this->db->query($sql, $id))->result_array());
          }
        if(empty($new_user_info['id_type']))
          {
            $sql = "select id_type from contact where id_contact=?";
            $new_user_info['id_type'] = (($this->db->query($sql, $id))->result_array());
          }

            $sql_1="update contact set name_person=? where id_contact=?";
	        $this->db->query($sql_1, $new_user_info['name'], $id);
	        
	        $sql_2="update contact set surname_person=? where id_contact=?";
	        $this->db->query($sql_2, $new_user_info['surname'], $id);

	        $sql_3="update contact set phone_person=? where id_contact=?";
	        $this->db->query($sql_3, $new_user_info['phone'], $id);

	        $sql_4="update contact set birthdate_person=? where id_contact=?";
	        $this->db->query($sql_4, $new_user_info['birthdate'], $id);

	        $sql_5="update contact set second_name_person=? where id_contact=?";
	        $this->db->query($sql_5, $new_user_info['second_name'], $id);

	        $sql_6="update contact set id_group=? where id_contact=?";
	        $this->db->query($sql_6, $new_user_info['id_group'], $id);

	        $sql_7="update contact set id_cafedra=? where id_contact=?";
	        $this->db->query($sql_7, $new_user_info['id_caf'], $id);

	        $sql_8="update contact set id_faculty=? where id_contact=?";
	        $this->db->query($sql_8, $new_user_info['id_faculty'], $id);

	        $sql_9="update contact set login=? where id_contact=?";
	        $this->db->query($sql_9, $new_user_info['login'], $id);

	        $sql_10="update contact set id_type=? where id_contact=?";
	        $this->db->query($sql_10, $new_user_info['id_type'], $id);
	}





}
