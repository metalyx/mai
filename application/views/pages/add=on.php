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

<br />

<p class="text-center">Добавить в:</p>
<table class="table">
	<tbody>
		<tr>
			<td><a href="<?php echo base_url();?>workdb/add_subject" class="btn btn-secondary">Предметы</a></td>
			<td><a href="<?php echo base_url();?>workdb/add_group" class="btn btn-secondary">Группы</a></td>
			<td><a href="<?php echo base_url();?>workdb/add_student" class="btn btn-secondary">Студенты</a></td>
			<td><a href="<?php echo base_url();?>workdb/add_teacher" class="btn btn-secondary">Преподаватели</a></td>
			<td><a href="<?php echo base_url();?>workdb/add_admin" class="btn btn-secondary">Администраторы</a></td>
		</tr>
	</tbody>
</table>