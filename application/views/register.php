<!DOCTYPE html>
<!--[if IE 8 ]>    <html lang="en" class="ie8"> </html><![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9"> </html><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Shoppie - Modern Online Store</title>
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1" />
	<meta name="description" content="Modern Online Store" />
	<meta name="keywords" content="Shoppie, Modern Online Store" />
	<meta name="author" content="http://adamantium.sk" />
	 
	<script type="text/javascript">
	//<![CDATA[
	try{if (!window.CloudFlare) {var CloudFlare=[{verbose:0,p:1391354276,byc:0,owlid:"cf",bag2:1,mirage2:0,oracle:0,paths:{cloudflare:"/cdn-cgi/nexp/dok3v=02fcfa4f56/"},atok:"8f2966cdc72a130a80c20b188e22686f",petok:"3b16202491ca24173f6f905a5fc8cd81fe8437f9-1391466022-1800",zone:"adamantium.sk",rocket:"0",apps:{"abetterbrowser":{"ie":"8"}}}];var a=document.createElement("script"),b=document.getElementsByTagName("script")[0];a.async=!0;a.src="../../../ajax.cloudflare.com/cdn-cgi/nexp/dok3v=221574e73d/cloudflare.min.js";b.parentNode.insertBefore(a,b);}}catch(e){};
	//]]>
	</script>
	<link rel="stylesheet" href="../../../fonts.googleapis.com/css_5b108390.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo  base_url()."css/unsemantic.css"?>" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url()."css/responsive.css" ?>"type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url()."css/font-awesome/css/font-awesome.min.css"?>" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url()."js/juicy/css/juicy.css" ?>" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url()."js/juicy/css/themes/shoppie/style.css" ?>" type="text/css" />
<!--[if IE 7]>
			<link rel="stylesheet" href="./css/font-awesome/css/font-awesome-ie7.min.css" />
			<![endif]-->
	<link rel="stylesheet" href="<?php echo base_url()."css/colors.css" ?>" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url()."css/base.css" ?>" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url()."css/layout.css" ?>" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url()."css/pages/cart.css" ?>" type="text/css" />
	 
	<link rel="shortcut icon" href="<?php echo base_url()."images/ico/favicon.ico" ?>" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href=" <?php echo base_url()."images/ico/apple-touch-icon-144.png" ?> "/>
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url()."images/ico/apple-touch-icon-114.png" ?>"/>
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url()."images/ico/apple-touch-icon-72.png" ?>" />
	<link rel="apple-touch-icon-precomposed" href="<?php echo base_url()."images/ico/apple-touch-icon-57.png" ?>"/>
	<script type="text/javascript">
				var _gaq = _gaq || [];
				_gaq.push(['_setAccount', 'UA-29358822-1']);
				_gaq.push(['_trackPageview']);

				(function() {
					var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
					ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
					var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
				})();
			</script>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body class="content-font dark-color" style="background-color:#aaefe8">
<a id="top"></a>
<header>
 
	<nav class="top-menu grid-container hide-on-tablet hide-on-mobile shadow" style="background:url('./images/bg-top.jpg')" >
		<div class="grid-100">
			<div class="top-menu-left">
				<?php 
			   if (isset($_SESSION['username']) && $_SESSION['username']){ ?>
				<ul>
					<li>
						<a href="my-account.html"  class="dark-color">Tên tài khoản của bạn: <span> <?php echo $_SESSION['username']; ?>
						
					</li>
					<li>
								<p>
									<a href="./logout.php"> Logout</a>
								</p>
					</li>
				</ul>
			
			   <?php }?>
			</div>
			<div class="top-menu-right">
				<?php 
			   if (!isset($_SESSION['username'])){ ?>
				<ul>
					<li>
						<a href="./index" class="dark-color" ">
						<i class="icon-off"></i>
						Đăng nhập
						</a>
					</li>
					<li>
					<a href="register" class="dark-color">Đăng ký</a>
					</li>
				</ul>
			   <?php }?>
			</div>
		</div>
</nav> 
 
<div class="header-middle grid-container light-gradient" style="background:url('./images/back-ground.jpg')">
<div class="grid-100">
<div class="header-logo grid-15">
<a href="./index.php"  title="Shoppie">
<img height="110px"src="<?php echo base_url()."/images/logo.png"?>" alt="Shoppie" />
</a>
</div>
<div class="grid-80 remove-whitespaces" >
	<div class="row" style="margin-top:25px">
		<div class="header-middle-box">
			<form class="input-with-submit header-search" action="homepage.html" method="POST" />
				<input type="text" class="text-input input-round dark-color light-bg" value="" placeholder="Tìm kiếm..." />
				<button type="submit" class="input-round-submit middle-color dark-hover"><i class="icon-search"></i></button>
			</form>
		</div>

			<div class="header-middle-box last-box hide-on-mobile hide-on-tablet">
			<div class="header-cart" id="header-cart">
			<a href="./cart.html" class="text-input input-round dark-color light-bg">
			<strong class="active-color">
			<i class="icon-shopping-cart" style="font-size:14px">&nbsp;</i>
			3
			</strong>
			Sản phẩm
			&nbsp;|&nbsp;
			<strong class="active-color">
			954.00 VNĐ
			</strong>
			</a>
			 
			<ul class="popup-box header-quick-cart cream-bg">
			<li class="arrow-top"><span class="shadow cream-bg"></span></li>
			<li class="focusor-top"></li>
			<li class="quick-cart-item light-bg-hover transition-all">
			<a href="#" class="quick-cart-remove circle-button middle-bg active-bg-hover"><span class="minus"></span></a>
			<a href="#" class="quick-cart-add circle-button middle-bg active-bg-hover"><span class="plus"></span></a>
			<a href="./cart.html" class="quick-cart-left dark-color">
			<span class="quick-cart-image"><img src="./images/photos/quick-cart-item.jpg" alt="Pablo Coelho Men’s Suit Jacket" /></span>
			<span class="quick-cart-name">Áo Complet-Veston Phú Xuyên</span>
			</a>
			<a href="./cart.html" class="quick-cart-right dark-color">
			3 x
			<strong class="active-color">125,90 VNĐ</strong>
			</a>
			</li>
			<li class="list-divider"></li>
			<li class="quick-cart-item light-bg-hover transition-all">
			<a href="#" class="quick-cart-remove circle-button middle-bg active-bg-hover"><span class="minus"></span></a>
			<a href="#" class="quick-cart-add circle-button middle-bg active-bg-hover"><span class="plus"></span></a>
			<a href="./cart.html" class="quick-cart-left dark-color">
			<span class="quick-cart-image"><img src="./images/photos/quick-cart-item.jpg" alt="Pablo Coelho Men’s Suit Jacket" /></span>
			<span class="quick-cart-name">Giầy da Phú Yên</span>
			</a>
			<a href="./cart.html" class="quick-cart-right dark-color">
			3 x
			<strong class="active-color">125,90 VNĐ</strong>
			</a>
			</li>
			<li class="list-divider"></li>
			<li class="quick-cart-item light-bg-hover transition-all">
			<a href="#" class="quick-cart-remove circle-button middle-bg active-bg-hover"><span class="minus"></span></a>
			<a href="#" class="quick-cart-add circle-button middle-bg active-bg-hover"><span class="plus"></span></a>
			<a href="./cart.html" class="quick-cart-left dark-color">
			<span class="quick-cart-image"><img src="./images/photos/quick-cart-item.jpg" alt="Pablo Coelho Men’s Suit Jacket" /></span>
			<span class="quick-cart-name">Quần âu lịch lãm</span>
			</a>
			<a href="./cart.html" class="quick-cart-right dark-color">
			3 x
			<strong class="active-color">125,90 VNĐ</strong>
			</a>
			</li>
			<li class="list-divider"></li>
			<li class="quick-cart-total">
			<span class="quick-cart-left dark-color">Tổng tiền</span>
			<span class="quick-cart-right active-color">954,00 VNĐ;</span>
			</li>
			<li class="list-divider"></li>
			<li class="quick-cart-buttons">
			<a href="./cart.html" class="button-small light-color middle-gradient dark-gradient-hover">
			Giỏ hàng
			</a>
			<a href="./checkout-step-1.html" class="button-small light-color active-gradient dark-gradient-hover">
			Kiểm tra giỏ hàng
			</a>
			</li>
			</ul> 
			</div>
			</div>
	</div>
</div>
</div>
</div> 
 
<nav style="background:url('./images/bgtop-menu.png') repeat-x;border-radius:30px;margin-top:5px;" class="main-menu grid-container" id="main-menu">
<div class="mobile-overlay"></div>
 
<ul class="main-menu-mobile">
<li class="middle-color light-hover">
<a href="#menu-mobile" class="main-menu-item click-slide"><i class="icon-reorder"></i></a>
</li>
<li class="middle-color light-hover">
<a href="./homepage.html" class="main-menu-item"><i class="icon-home"></i></a>
</li>
<li class="main-menu-cart active-color light-hover">
<a href="./cart.html" class="main-menu-item">
<i class="icon-shopping-cart" style="font-size:14px">&nbsp;</i>
39
&nbsp;|&nbsp;
954,00 &euro;
</a>
</li>
</ul> 
 
<ul class="main-menu-desktop dark-gradient transition-all" id="menu-mobile">
<li class="middle-color light-hover home">
<a href="./index" class="main-menu-item transition-all"><i class="icon-home"></i></a>
</li>
<li class="middle-color light-hover back">
<a href="#menu-mobile" class="main-menu-item click-slide"><i class="icon-chevron-left"></i></a>
</li>
<li class="light-color active-hover">
<a href="products-grid.php" class="main-menu-item transition-all">Thời trang nam</a>
</li>
<li class="light-color active-hover">
<a href="products-grid.php" class="main-menu-item transition-all">Thời trang nữ</a>
</li>
<li class="light-color active-hover">
<a href="products-grid.php" class="main-menu-item transition-all">Giầy-Dép</a>
</li>
<li class="light-color active-hover">
<a href="products-grid.php" class="main-menu-item transition-all">Sản phẩm khác</a>
</li>
<li class="light-color active-hover">
<a href="products-grid.php" class="main-menu-item transition-all">Tư vấn</a>
</li>
<li class="light-color active-hover">
<a href="products-grid.php" class="main-menu-item transition-all">Liên hệ</a>
</li>
</ul> 
</nav> 
</header>
<!--Đây là contents-->
<section class="page-content">
 
<div class="page-block page-block-top light-bg grid-container">
<div class="breadcrumbs grid-100 middle-color">
<a href="/thegioidemviet" class="dark-color active-hover">Home</a>
<strong class="active-color">Đăng Ký Tài Khoản</strong>
</div>
</div>  
 
<div class="page-block page-block-bottom cream-bg grid-container">
<div class="sidebar-shadow push-25"></div>
 
<div class="sidebar grid-25 cream-gradient transition-all" id="sidebar-mobile">
 
	<div class="sidebar-box sidebar-top cream-gradient">
			<nav class="submenu">
				<ul class="expandable-menu">
					<li class="align-right back">
						<a href="#sidebar-mobile" class="dark-color active-hover click-slide"><i class="icon-chevron-right"></i></a>
					</li>
					<li>
						<a href="register" class="dark-color active-hover selected">Đăng Ký Tài Khoản</a>
					</li>
					<li class="sidebar-divider"></li>
					<li class="sidebar-divider"></li>
					<li>
					<a href="./index" class="dark-color active-hover">Đăng Nhập Tài Khoản</a>
					</li>
				</ul>
			</nav>
	</div> 
</div> 
 
<div class="content-with-sidebar grid-75">
<p>Nếu bạn có tài khoản ấn vào đây để  <a href="login.php" class="active-color dark-hover"><strong>Đăng nhập</strong></a></p>
<form class="content-form margin-bottom" action="<?php echo base_url()."authentication/register"?>" method="POST" />
	<div class="with-shadow grid-100 light-bg margin-bottom clearfix">
	<div class="content-page grid-100">
	<h2 class="bigger-header with-border subheader-font">
	Thông Tin Đăng Ký
	</h2>
	<div class="form-input">
	<label for="first_name" class="middle-color">Họ và Tên <span class="active-color">*</span></label>
	<input type="text" class="text-input dark-color light-bg" name="fullname" id="fullname" value="<?php echo set_value('fullname')?>" />
	<div class="error" id="email_error"><?php echo form_error('fullname')?></div>
	</div>
	<div class="form-input">
	<label for="email" class="middle-color">Tên Đăng Nhập <span class="active-color">*</span></label>
	<input type="username" class="text-input dark-color light-bg" name="username" id="username" value="<?php echo set_value('username')?>" />
	<div class="error" id="email_error"><?php echo form_error('username')?></div>
	</div>
	<div class="form-input">
	<label for="password" class="middle-color">Mật Khẩu <span class="active-color">*</span></label>
	<input type="password" class="text-input dark-color light-bg" name="password" id="password" value="<?php echo set_value('password')?>" />
	<div class="error" id="email_error"><?php echo form_error('password')?></div>
	</div>
	<div class="form-input">
	<label for="confirm_password" class="middle-color">Nhập Lại Mật Khẩu <span class="active-color">*</span></label>
	<input type="password" class="text-input dark-color light-bg" name="confirm_password" id="confirm_password" value="<?php echo set_value('confirm_password')?>" />
	<div class="error" id="email_error"><?php echo form_error('confirm_password')?></div>
	</div>
	</div>
	</div>
	<div class="form-submit">
	<button type="submit" class="button-normal uppercase light-color middle-gradient dark-gradient-hover">TẠO TÀI KHOẢN</button>
	</div>
</form>
</div> 
</div>  
</section>
<footer>
		 
		<div class=" footer-top grid-container clearfix" style="background-color:#ffffff">
			<div class="grid-30 grid-parent">
			<div class="grid-100 tablet-grid-33">
			<h3 class="light-color subheader-font">
			<strong style="color:red;text-align:center">Chăm sóc khách hàng</strong>
			</h3>
			<ul class="middle-color" style="color:black;font-size:15px">
			<li class="light-hover2">
			<a href="#">Trung tâm hộ trợ</a>
			</li>
			<li class="light-hover2">
			<a href="#">Thanh toán</a>
			</li>
			<li class="light-hover2">
			<a href="#">Hướng dẫn mua hàng</a>
			</li>
			<li class="light-hover2">
			<a href="#">Hướng dẫn Chi tiết</a>
			</li>
			<li class="light-hover2">
			<a href="#">Hướng dẫn đổi trả hàng</a>
			</li>
			</ul>
			</div>
			</div>

			<div class="grid-70 grid-parent">
			<div class="grid-50 tablet-grid-50">
			<h3 class="light-color subheader-font">
			<strong style="color:red;text-align:center">Giới thiệu</strong>
			</h3>
			<ul class="middle-color" style="color:black;font-size:15px">
				<li class="light-hover2">
					<a href="#">Thời trang nam</a>
				</li>
				<li class="light-hover2">
					<a href="#">Thời trang nữ</a>
				</li>
				<li class="light-hover2">
					<a href="#">Giầy-Dép</a>
				</li>
				<li class="light-hover2">
					<a href="#">Quần-Áo</a>
				</li>
				<li class="light-hover2">
					<a href="#">Sản phẩm khác</a>
				</li>
			</ul>
			</div>

			<div class="grid-50 tablet-grid-50">
				<h3 class="light-color subheader-font">
				<strong style="color:red;text-align:center">Liên hệ</strong>
				</h3>
				<ul class="middle-color" style="color:black;font-size:15px">
					<li class="light-hover2">
						<a href="#">Địa chỉ:12 Chùa Bộc - Đống Đa - Hà Nội</a>
					</li>
					<li class="light-hover2">
						<a href="#">Điện thoại:(04) 7300 8888 - 01688874660 - 01639668277</a>
					</li>
					<li class="light-hover2">
						<a href="#">Giờ làm việc: Từ 8h30 đến 18h00(Thứ 2 đến Thứ 7)</a>
					</li>
					<li class="light-hover2">
						<a href="#">Email:thihieushop@gmail.com</a>
					</li>
				</ul>
			</div>
			</div>
			</div> 
			 
			<div class="footer-bottom grid-container clearfix" >
			<div class="footer-copyright middle-color grid-70" style="color:black;font-size:14px">
			Copyright 2016 ThiHieuShop. Designed by ChuBe. Code by <a href="http://5sach.vn" class="light-hover">Group 8</a>. All Rights Reserved
			</div>
			<div class="footer-social grid-30">
			<a href="https://www.facebook.com/laudonnhacua" class="middle-color light-hover3 transition-color" target="_blank">
			<i class="icon-facebook-sign"></i>
			</a>
			<a href="https://www.facebook.com/dichvuvesinhcongnghiephanoi" class="middle-color light-hover4 transition-color" target="_blank">
			<i class="icon-twitter"></i>
			</a>
			<a href="https://plus.google.com/u/0/113332714808714572645/posts" class="middle-color light-hover5 transition-color" target="_blank">
			<i class="icon-google-plus-sign"></i>
			</a>
		</div>
		</div> 
</footer>
 
<!--[if lt IE 9]>
       <script src="../../../html5shim.googlecode.com/svn/trunk/html5.js"></script>
       <![endif]-->
 
<script type="text/javascript" src="<?php echo base_url()."js/jquery-1.9.1.min.js" ?>"></script>
		<script type="text/javascript" src="<?php echo base_url()."js/css3-mediaqueries.js"?>"></script>
		<script type="text/javascript" src="<?php echo base_url()."js/juicy/js/jquery.juicy.js"?>"></script>
		<script type="text/javascript" src="<?php echo base_url()."js/shoppie.scripts.js"?>"></script><script type="text/javascript">
		Global.documentReady(); 
		Homepage.documentReady();
       </script>
</body>
</html>