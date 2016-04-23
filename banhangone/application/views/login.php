<!DOCTYPE HTML>
<html>
	<head>
		<title> CI Login System</title>  
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	</head>
	<body>
		<div class="header">
			<div class="banner">
				<a id="logo" href="/"></a>
			</div>
		</div>
		<div class="main">
			<h1> ĐĂNG NHẬP VÀO HỆ THỐNG </h1>
			<?php echo validation_errors(); ?>
			
			<?php echo form_open('LoginController/checkLogin'); ?>
			<form>
				<p>Username: </p>
				<input type="text" class="txt1" name="username"/></br>
				<p> Password: </p>
				<input type="password" class="txt1"  name="password"/></br>
				<input type="submit" class="but1" value="Login" name="submit"/></br>
			</form>
		</div>
		<style type="text/css">
			a:link, a:visited, a:active {
				text-decoration: none;
				color: #036;
			}
			body { 
				background-image:url("assets/images/bg-top.jpg");
				
				font-size: 18px;
			}
			.header{
				margin: 0px auto;
				padding-bottom: 15px;
				position: relative;
				width: 976px;
				}
			#banner {
				height:100px;
			}

			#logo{
				background:;
				display: block;
				height:27%;
				width: 100%;
			}
			body{
				width:970px;
			}
			.main{
				width:100%;	
			}
			h1{
				color:red;
				margin-left:450px;
			}
			p,input{
				margin-left:70px;
				
			}
			form{
				 border: 1px solid;
				 width:400px;
				 height:250px;
				 margin-left:500px;
			}
			.txt1{
				width:250px;
			}
			.but1{
				margin-top:20px;
				margin-left: 270px;
			}
		</style>
	</body>
</html>