
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
          <h3 align="center">Предметы, которые вы ведёте</h3>
	<br />



	<br><br>

	<br />
  <div class="row" >
    <div class="col-md-6 select-outline center">
     <table class="table"><thead><tr><th>id</th><th>Название предмета</th></thead>

    <tbody>
      
      <?php 
      $c = 0;
      $counter = count ($usersubjects) - 1;
      while ($c <= $counter) {

      foreach ($usersubjects as $us){
        ?><tr><?php
              if(is_array($us)){ 
                foreach ($us as $subj) {?>
      
      <td>
      <?php echo $subj?>
      </td>
      <?php echo "    "?>
     

      <?php $c = $c + 1;}}}} ?>
    </tr>
    </tbody>
  </table>
  
  </div>
</div>
</div>
</html>