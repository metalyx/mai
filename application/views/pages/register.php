<!DOCTYPE html>
<html>

<body>
 <div class="container">
  <br />
  <h3 align="center">Регистрация в системе</h3>
  <br />
  <div class="panel panel-default">
   <div class="panel-body">
    <form method="post" action="<?php echo base_url(); ?>register/register">
     <div class="form-group">
      <label>Введите логин</label>
      <input type="text" name="login" class="form-control" value="<?php echo set_value('login'); ?>" />
      <span class="text-danger"><?php echo form_error('login'); ?></span>
     </div>
     <div class="form-group">
      <label>Введите пароль</label>
      <input type="password" name="password" class="form-control" value="<?php echo set_value('password'); ?>" />
      <span class="text-danger"><?php echo form_error('password'); ?></span>
     </div>
     <div class="form-group">
      <label>Повторно введите пароль</label>
      <input type="password" name="password2" class="form-control" value="<?php echo set_value('password2'); ?>" />
      <span class="text-danger"><?php echo form_error('password2'); ?></span>
     </div>
     <div class="form-group">
      <input type="submit" name="register" value="Зарегестрироваться" class="btn btn-info" />
     </div>
    </form>
   </div>
  </div>
 </div>
</body>
</html>
