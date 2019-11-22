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
<br />
<br />
<div class="row " >
    <div class="col-md-6 select-outline center" >
		<form method="post" action="<?php echo base_url();?>admin/panel">
			<div class="form-check">
			  <input class="form-check-input" type="radio" name="add" id="1">
			  <label class="form-check-label" for="exampleRadios1">
			    Добавить информацию
			  </label>
			</div>
			<!-- <div class="form-check">
			  <input class="form-check-input" type="radio" name="upd" id="2">
			  <label class="form-check-label" for="exampleRadios2">
			    Изменить информацию
			  </label>
			</div> -->
		    <div class="form-check">
			  <input class="form-check-input" type="radio" name="del" id="3">
			  <label class="form-check-label" for="exampleRadios2">
			    Удалить информацию
			  </label>
		    </div>
		    <button class="btn btn-primary" type="submit">Приступить</button>
		</form>
	</div>
</div>
