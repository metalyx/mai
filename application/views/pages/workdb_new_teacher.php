<br />
<div class="container">
<form method="post" action="<?php echo base_url();?>workdb/add_teacher">
  <div class="form-group">
    <label>Введите новое имя</label>
    <input name="name" class="form-control">
  </div>
  <div class="form-group">
    <label>Введите новую фамилию</label>
    <input name="surname" class="form-control">
  </div>
  <div class="form-group">
    <label>Введите дату рождения</label>
    <input name="birthdate" class="form-control">
  </div>
  <div class="form-group">
    <label>Введите логин</label>
    <input name="login" class="form-control">
  </div>
  <div class="form-group">
    <label>Введите пароль</label>
    <input name="password" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">Зарегестрировать</button>
</form>
</div>