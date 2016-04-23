<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login Form</title>
</head>
<body>
<?php
$attributes = array("class" => "form-horizontal", "id" => "loginform", "name" => "loginform");
echo form_open("login/index", $attributes);?>
<fieldset>
<legend>Login</legend>
<label for="txt_username" class="control-label">Username</label>
<input class="form-control" id="txt_username" name="txt_username" placeholder="Username" type="text" value="<?php echo set_value('txt_username'); ?>" />
<span class="text-danger"><?php echo form_error('txt_username'); ?></span>
 
<br>
<label for="txt_password" class="control-label">Password</label>
<input class="form-control" id="txt_password" name="txt_password" placeholder="Password" type="password" value="<?php echo set_value('txt_password'); ?>" />
<span class="text-danger"><?php echo form_error('txt_password'); ?></span>
 
<div>
<input id="btn_login" name="btn_login" type="submit" class="btn btn-default" value="Login" />
<input id="btn_cancel" name="btn_cancel" type="reset" class="btn btn-default" value="Cancel" />
</div>
</fieldset>
<?php echo form_close(); ?>
<?php echo $this->session->flashdata('msg'); ?>
</body>
</html>