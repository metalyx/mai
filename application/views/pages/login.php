<!DOCTYPE html>
<html>

<body>
    <div class="container">
        <br />
        <h3 align="center">Авторизация</h3>
        <br />
        <div class="panel panel-default">
            <div class="panel-body">
                <form method="post" action="<?php echo base_url();?>login/login">
                    <div class="form-group">
                        <label>Введите ваш логин</label>
                        <input type="text" name="login" class="form-control"  />
                        <div class="text-danger"><?php echo form_error('login'); ?></div>
                    </div>
                    <div class="form-group">
                        <label>Введите ваш пароль</label>
                        <input type="password" name="password" class="form-control" />
                        <div class="text-danger"><?php echo form_error('password'); ?></div>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Вход" class="btn btn-info" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url(); ?>register/register">Регистрация</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
