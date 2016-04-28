<!DOCTYPE html>
<html>
<head>
<title><?php echo $title; ?></title>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<meta name="description" content="<?php echo $seo['description']; ?>" />
<meta name="keywords" content="<?php echo $seo['keyword']; ?>"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/> 
<link rel="Shortcut Icon" href="#" type="image/x-icon" /> 
<link href="<?php echo base_url('css/login.css') ?>" rel="stylesheet" />      
</head>
<body style="background: #3883cc;">
    <div class="ad_container">
        <form id="customForm" action="" method="post"  class="login" > 
                <h1 class="login-title">ĐĂNG NHẬP HỆ THỐNG</h1>
                <input id="email" type="text" name="email" class="login-input" placeholder="Email Adress"/>
                <?php // echo form_error('email'); ?>
                <input id="password" type="password" name="passwords" class="login-input" placeholder="Password"/>
                <?php //echo form_error('passwords'); ?>
                <input type="submit" value="Đăng Nhập" class="login-button"/>  
                <p class="p_error"><?php //if(isset($error_login)) { echo $error_login;} ?></p>      
        </form>
    </div>
</body>
</html>  