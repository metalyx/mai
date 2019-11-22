<?php
class Admin_model extends CI_Model
{

	function get_subjects()
	{
		$sql = "select * from subject";
		return ($this->db->query($sql))->result_array();
	}

	function get_groups()
	{
		$sql = "select * from groups";
		return ($this->db->query($sql))->result_array();
	}

	function get_students()
	{
		$sql = "select * from contact where id_type=16";
		return ($this->db->query($sql))->result_array();
	}

	function get_teachers()
	{
		$sql = "select * from contact where id_type=17";
		return ($this->db->query($sql))->result_array();
	}

	function get_admins()
	{
		$sql = "select * from contact where id_type=18";
		return ($this->db->query($sql))->result_array();
	}

	function get_e_student($id)
	{
		$sql = "select * from contact where id_contact=?";
		return (($this->db->query($sql, $id))->result_array());
	}
	function get_e_student_id($id)
	{
		$sql = "select id_contact from contact where id_contact=?";
		return (($this->db->query($sql, $id))->result_array());
	}


}