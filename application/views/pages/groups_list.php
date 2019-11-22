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
.content {
  justify-content: center;
}
.circ {
  margin-left: auto;
  margin-right: auto;
}

</style>
<head>
  <meta charset="utf-8">
  <title>Список групп</title>
 </head>
<html>
 <body>
  <br />
  <br />
  <div class="row " >
    <div class="col-md-9 select-outline center" >

    <table class="table"><thead><tr><th>id</th><th>Название группы</th></tr></thead>
      <br />
      <tbody>
      <?php foreach ($groups as $k)
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
</html>