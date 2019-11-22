<?php switch ($this->session->userdata('id_type')) {?>
<?php case 16: ?>
<br />
  <div class="container">
    <div class="row">
      <div class="col center">
        <h3 align="center">Личный кабинет</h3>
        <br />
        <br />
      
  <table class="table table-border">
    <tbody>
      <tr>

        <td>Группа</td> 
        <td><?php 
      $c = 0;
      $counter = count ($usergroups) - 1;
      while ($c <= $counter) {

      foreach ($usergroups as $us){
              if(is_array($us)){ 
                foreach ($us as $subj) {?>
      
      
      <?php echo $subj?>
      <br>
      <?php echo "    "?>
     

      <?php $c = $c + 1;}}}} ?>
      </td>
      </tr>
      <tr>
        <td>Имя</td>
        <td><?php echo $userdata[0]['name_person'];?></td>
      </tr>
      <tr>
        <td>Фамилия</td>
        <td><?php echo $userdata[0]['surname_person'];?></td>
      </tr>
      <tr>
        <td>Отчество</td>
        <td><?php echo $userdata[0]['second_name_person'];?></td>
      </tr>
      <tr>
        <td>Телефон</td>
        <td><?php echo $userdata[0]['phone_person'];?></td>
      </tr>
      <tr>
        <td>Дата рождения</td>
        <td><?php echo $userdata[0]['birthdate_person'];?></td>
      </tr>
    </tbody>
  </table>
  <a class="btn btn-primary" href="<?php echo base_url();?>enter/change_info" role="button">Изменить</a>
  </div>
</div>
</div>

<?php break;?>

<?php case 17: ?>
<br />
  <div class="container">
    <div class="row">
      <div class="col center">
        <h3 align="center">Личный кабинет</h3>
        <br />
        <br />
      
  <table class="table table-border">
    <tbody>
      <tr>
        <td>Имя</td>
        <td><?php echo $userdata[0]['name_person'];?></td>
      </tr>
      <tr>
        <td>Фамилия</td>
        <td><?php echo $userdata[0]['surname_person'];?></td>
      </tr>
      <tr>
        <td>Отчество</td>
        <td><?php echo $userdata[0]['second_name_person'];?></td>
      </tr>
      <tr>
        <td>Телефон</td>
        <td><?php echo $userdata[0]['phone_person'];?></td>
      </tr>
      <tr>
        <td>Дата рождения</td>
        <td><?php echo $userdata[0]['birthdate_person'];?></td>
      </tr>
    </tbody>
  </table>
  <a class="btn btn-primary" href="<?php echo base_url();?>enter/change_info" role="button">Изменить</a>
  </div>
</div>
</div>

<?php break;?>

<?php case 18: ?>
<br />
  <div class="container">
    <div class="row">
      <div class="col center">
        <h3 align="center">Личный кабинет</h3>
        <br />
        <br />
      
  <table class="table table-border">
    <tbody>
      <tr>
        <td>Имя</td>
        <td><?php echo $userdata[0]['name_person'];?></td>
      </tr>
      <tr>
        <td>Фамилия</td>
        <td><?php echo $userdata[0]['surname_person'];?></td>
      </tr>
      <tr>
        <td>Отчество</td>
        <td><?php echo $userdata[0]['second_name_person'];?></td>
      </tr>
      <tr>
        <td>Телефон</td>
        <td><?php echo $userdata[0]['phone_person'];?></td>
      </tr>
      <tr>
        <td>Дата рождения</td>
        <td><?php echo $userdata[0]['birthdate_person'];?></td>
      </tr>
      <tr>
        <td>Тип аккаунта</td>
        <td>Администратор</td>
      </tr>
    </tbody>
  </table>
  <a class="btn btn-primary" href="<?php echo base_url();?>enter/change_info" role="button">Изменить</a>
  </div>
</div>
</div>

<?php break; ?>
<?php }?>