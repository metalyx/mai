
<!DOCTYPE HTML>
<html>
	<br />
         
          <h3 align="center">Группы, у которых вы ведёте занятия</h3>
	<br />



	<br><br>

	<br />
  <div class="container">
    <div class="row">
      <div class="col center">
  <table class="table border center "><thead><tr><th>Название группы</th></thead>
    <tbody>
      <tr>
<?php if(!is_array($teachersgroups))
        {
          ?><tr><td><?php echo $teachersgroups;?></td></tr><?php
        }
      else
      {
        
        foreach ($teachersgroups as $k)
        {
          ?><tr><?php
          if(is_array($k))
          {
            foreach ($k as $u)
            {
              ?><td>
              <?php 
              echo $u; 
              ?>
              </td><?php
            }
          }
          else
          {
            ?><td>
              <?php 
            echo $k;
            ?>
            </td><?php
          }
          ?></tr><?php
        }
      }
      ?>
      </tr>
    </tbody>
  </table>
  
  </div>
</div>
</div>
</html>
