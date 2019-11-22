<!DOCTYPE html>
<style>

.center {
  position: absolute;
/*  top: 0;
  bottom: 0; */
  left: 0;
  right: 0;
  margin: auto;  
}
</style>
<head>
  <meta charset="utf-8">
  <title>Список преподавателей</title>
 </head>
<html>
<br />
 <h3 align="center"><?php foreach ($usergroups as $us){if(is_array($us)){foreach($us as $k){echo $k;}}}; ?></h3>
<h3 align="center">Ваши преподаватели</h3>
 <body>
  <br />
  <br />
  <div class="row " >
    <div class="col-md-6 select-outline center" >
     <table class="table"><thead><tr><th>Название предмета</th><th>Фамилия преподавателя</th></thead>
      <br />
      <tbody>
      <?php foreach ($userteachers as $k)
      {
        ?><tr><?php
        if(is_array($k))
        {
          foreach($k as $u)
          {
            ?><td><?php
           echo $u;
           ?></td><?php
          }
        }?>
        <tr><?php
      }?>
    </tbody>
    </table>
      <br />
      <br />
      <br />
      <br />
        
    </div>
  </div>
 </body>
