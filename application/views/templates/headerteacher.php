<!DOCTYPE HTML>
<html>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url();?>main/view/home">Главная</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>enter/journal">Предметы</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>enter/tgroup">Группы</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url();?>main/view/feedback">Обратная связь</a>
      </li> -->

    </ul>
    <a class="btn btn-primary" href="<?php echo base_url();?>enter/personal_area" role="link">Личный кабинет</a>
    <a class="btn btn-info" href="<?php echo base_url();?>enter/logout" role="link">Выход</a>
      
  </div>
</nav>

</body>