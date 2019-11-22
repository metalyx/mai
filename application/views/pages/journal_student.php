
<!DOCTYPE HTML>
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

<html>
	<br />
          <h3 align="center"><?php foreach ($usergroups as $us){if(is_array($us)){foreach($us as $k){echo $k;}}}; ?></h3>
          <h3 align="center">Ваши предметы</h3>
	<br />



	<br><br>

	<br />
 
  <!-- <div class="container"> -->
    <div class="row" >
    <div class="col-md-6 select-outline center">
     <table class="table"><thead><tr><th>id</th><th>Название группы</th></thead>
      <br />
      <tbody>
      <?php foreach ($usersubjects as $k)
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
        </tr><?php
      }?>
    </tbody>
    </table>
  
  </div>
</div>

<!-- </div> -->
</html>