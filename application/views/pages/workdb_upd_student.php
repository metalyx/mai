

<br />
<div class="container">
<form method="post" action="<?php echo base_url();?>update_panel/change_info_student_2">
  <div class="form-group">
    <label>Введите новое имя</label>
    <input name="name" class="form-control" placeholder="<?php echo $student[0]['name_person'];?>">
    <small class="form-text text-muted">Не заполняйте это поле если не хотите менять имя</small>
  </div>
  <div class="form-group">
    <label>Введите новую фамилию</label>
    <input name="surname" class="form-control" placeholder="<?php echo $student[0]['surname_person'];?>">
    <small class="form-text text-muted">Не заполняйте это поле если не хотите менять фамилию</small>
  </div>
  <div class="form-group">
    <label>Введите новое отчество</label>
    <input name="second_name" class="form-control" placeholder="<?php echo $student[0]['second_name_person'];?>">
    <small class="form-text text-muted">Не заполняйте это поле если не хотите менять отчество</small>
  </div>
  <div class="form-group">
    <label>Введите новый номер телефона</label>
    <input name="phone" class="form-control" placeholder="<?php echo $student[0]['phone_person'];?>">
    <small class="form-text text-muted">Не заполняйте это поле если не хотите менять номер телефона</small>
  </div>
  <div class="form-group">
    <label>Введите дату рождения</label>
    <input name="birthdate" class="form-control" placeholder="<?php echo $student[0]['birthdate_person'];?>">
    <small class="form-text text-muted">Не заполняйте это поле если не хотите менять дату рождения</small>
  </div>
  <div class="form-group">
    <label>Введите id новой группы</label>
    <input name="id_group" class="form-control" placeholder="<?php echo $student[0]['id_group'];?>">
    <small class="form-text text-muted">Не заполняйте это поле если не хотите его менять</small>
  </div>
  <div class="form-group">
    <label>Введите id новой кафедры</label>
    <input name="id_caf" class="form-control" placeholder="<?php echo $student[0]['id_group'];?>">
    <small class="form-text text-muted">Не заполняйте это поле если не хотите его менять</small>
  </div>
  <div class="form-group">
    <label>Введите id нового факультета</label>
    <input name="id_faculty" class="form-control" placeholder="<?php echo $student[0]['id_faculty'];?>">
    <small class="form-text text-muted">Не заполняйте это поле если не хотите его менять</small>
  </div>
  <div class="form-group">
    <label>Введите новый логин</label>
    <input name="login" class="form-control" placeholder="<?php echo $student[0]['login'];?>">
    <small class="form-text text-muted">Не заполняйте это поле если не хотите его менять</small>
  </div>
  <div class="form-group">
    <label>Введите новый тип (16-студент, 17-преподаватель, 18-администратор)</label>
    <input name="id_type" class="form-control" placeholder="<?php echo $student[0]['id_type'];?>">
    <small class="form-text text-muted">Не заполняйте это поле если не хотите его менять</small>
  </div>
  <input type="submit" name="Go" value="Изменить" class="btn btn-info" />
</form>
</div>