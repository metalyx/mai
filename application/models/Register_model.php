
<?php
class Register_model extends CI_Model
{
 function register ($login, $password)
 {
 	//проверяем существует ли логин в базе
 	$this->db->where('login', $login);
 	$user_exists = $this->db->get('contact');
 	if ($user_exists->num_rows() > 0)
 	{
 		//такой уже есть
 		return false;
 	}
 	else
 	{
 		//логин свободен
 		$sql = 'insert into contact (login, password) values (?, ?)';
 		$this->db->query($sql, array($login, $password));
 		return true;
 	}

 	// $sql = 'select * from contact where login=?';
    //   $user = $this->db->query($sql, $login);
    //   if($user->num_rows() > 0)
    //   {
    //     //выводим сообщение пользователь существует, придумать другой логин
    //   }
    //   else
    //   {
    //     $sql = 'insert into contact (login, password) values (?, ?)';
    //     $this->db->query($sql, array($login, md5($password)));
    //   }
 }
}

?>