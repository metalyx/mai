<br />
<div class="container">
<form method="post" action="<?php echo base_url();?>enter/change_info">
  <div class="form-group">
    <label>Введите новое имя</label>
    <input name="name" class="form-control" placeholder="<?php echo $userdata[0]['name_person'];?>">
    <small class="form-text text-muted">Не заполняйте это поле если не хотите менять имя</small>
  </div>
  <div class="form-group">
    <label>Введите новую фамилию</label>
    <input name="surname" class="form-control" placeholder="<?php echo $userdata[0]['surname_person'];?>">
    <small class="form-text text-muted">Не заполняйте это поле если не хотите менять фамилию</small>
  </div>
  <div class="form-group">
    <label>Введите новое отчество</label>
    <input name="second_name" class="form-control" placeholder="<?php echo $userdata[0]['second_name_person'];?>">
    <small class="form-text text-muted">Не заполняйте это поле если не хотите менять отчество</small>
  </div>
  <div class="form-group">
    <label>Введите новый номер телефона</label>
    <input name="phone" class="form-control" placeholder="<?php echo $userdata[0]['phone_person'];?>">
    <small class="form-text text-muted">Не заполняйте это поле если не хотите менять номер телефона</small>
  </div>
  <div class="form-group">
    <label>Введите дату рождения</label>
    <input name="birthdate" class="form-control" placeholder="<?php echo $userdata[0]['birthdate_person'];?>">
    <small class="form-text text-muted">Не заполняйте это поле если не хотите менять дату рождения</small>
  </div>
  <button type="submit" class="btn btn-primary">Изменить</button>
</form>
</div>