<!DOCTYPE HTML>
<html>
	<head>
		<title>Trang Chủ</title>
		<meta http-equiv="Content-Type" content="text/html"; charset=UTF-8">
		<link type="text/css" href="assets/css/trangchu1.css" rel="stylesheet">
		<link href="<?php echo base_url('assets/css/login-css.css') ?>" rel="stylesheet" />
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
		<link href="assets/css/css.css" rel="stylesheet" type="text/css" >
		<script type="text/javascript">
			function theRotator() {
		
				$('div.rotator ul li').css({opacity: 0.0});
							
				$('div.rotator ul li:first').css({opacity: 1.0});
												
				if ($('div.rotator ul li').length > 1) {
				setTimeout('rotate()', 3000);
			}
			}

			function rotate() {	
		
				var current = ($('div.rotator ul li.show')? $('div.rotator ul li.show') : $('div.rotator ul li:first'));

				if ( current.length == 0 ) current = $('div.rotator ul li:first');

			
				var next = ((current.next().length) ? ((current.next().hasClass('show')) ? $('div.rotator ul li:first') :current.next()) : $('div.rotator ul li:first'));
				
				next.css({opacity: 0.0}).addClass('show').animate({opacity: 1.0}, 1000);

				current.animate({opacity: 0.0}, 1000, function(){setTimeout('rotate()', 3000);}) .removeClass('show');
				
			};

			$(document).ready(function() {		
			
				theRotator();
				$('div.rotator').fadeIn(1000);
				$('div.rotator ul li').fadeIn(1000); // tweek for IE
			});
		</script>
		<style type="text/css">
			.hoverimage img{
			-webkit-transform:scale(0.8); /*Webkit: Thu nhỏ kích thước ảnh còn 0.8 so với ảnh gốc*/
			-moz-transform:scale(0.8); /*Thu nhỏ đối với Mozilla*/
			-o-transform:scale(0.8); /*Thu nhỏ đối với Opera*/
			-webkit-transition-duration: 0.5s; /*Webkit: Thời gian phóng to, nhỏ ảnh*/
			-moz-transition-duration: 0.5s; /*Như trên*/
			-o-transition-duration: 0.5s; /*Như trên*/
			opacity: 1; /*Độ mờ của hình ảnh*/
			margin: 0 10px 5px 0; /*căn đều giữa ảnh*/
			}
			.hoverimage img:hover{
			-moz-transform:scale(1.1);
			-o-transform:scale(1.1);
			box-shadow:0px 0px 30px gray; /*Đổ bóng bằng CSS3*/
			-webkit-box-shadow:0px 0px 30px gray;
			-moz-box-shadow:0px 0px 30px gray;
			opacity:0.5 ; /*Độ mờ của hình ảnh*/
			}
		</style>
	</head>
	
	<body>
		<div class="header">
			<div class="header1">
				<a href="http://thanhnien.hnue.edu.vn/Dangnhap/tabid/172/ctl/Register/Default.aspx?returnurl=http%3a%2f%2fthanhnien.hnue.edu.vn%2fDangnhap.aspx">Đăng kí<a>
				<a href="http://thanhnien.hnue.edu.vn/Dangnhap/tabid/172/Default.aspx?returnurl=%2f">Đăng nhập<a>
			</div>
			<div class="banner">
				<a id="logo" href="/"></a>
			</div>
			<div class="menu">
				<ul class="menu1">
				  <li><a href="../gioithieu/gioithieu.html">Trang chủ</a> </li>
				  <li><a href="../tintuc/tintuc1.html">Thời trang nam</a></li>
				  <li><a href="../giaoduc/giaoduc1.html">Thời trang nữ</a></li>
				  <li><a href="../hoctap/hoctap1.html">Tư vấn</a></li>
				  <li><a href="../tuoitre/tuoitre1.html">Liên hệ</a></li>
				  <li><a href="../hotro/hotro.html">Hỗ trợ</a></li>
				  <li><a href="../vanban/vanban.html">Văn Bản</a></li>
				  <li><a href="../thuvienanh/thuvienanh.html">Thư Viện Ảnh</a></li>
				  
				  
				</ul>
			</div>
			
		</div>
		<div class="main">
			<div class="box1">
			<span> </span>
				<div class="slideshow">
							<div class="rotator">
							  <ul>
						
								<li class="show"><img src="assets/images/1.jpg" width="930" height="300"  alt="pic1" /></li>
								<li><img src="assets/images/2.jpg" width="930" height="300"  alt="pic2" /></li>
								<li><img src="assets/images/3.jpg" width="930" height="300"  alt="pic3" /></li>
								<li><img src="assets/images/4.jpg" width="930" height="300"  alt="pic4" /></li>
							
							  </ul>
							</div>
				</div>
				
			</div>
			<div class="clean"> </div>

			<div class="box2">
			
				<div class="item">
					<div class="hoverimage">
						<div class= "new"></div>
						<img src="assets/images/sanpham1.jpg">
						<h4>(DT110 ĐEN) Đầm đen ngắn tay </h4>
						<p>420.000đ</p>
					</div>	
				</div>
				<div class="item">
					<div class="hoverimage">
						<div class= "new"></div>
						<img src="assets/images/sanpham4.jpg">
						<h4>(DT110) Đầm đen ngắn tay </h4>
						<p>420.000đ</p>
					</div>	
				</div>
				<div class="item">
					<div class="hoverimage">
						<div class= "new"></div>
						<img src="assets/images/sanpham2.jpg">
						<h4>(DT110-ĐEN) Đầm đen ngắn tay </h4>
						<p>420.000đ</p>
					</div>	
				</div>
				<div class="item">
					<div class="hoverimage">
						<div class= "new"></div>
						<img src="assets/images/sanpham3.jpg">
						<h4>(DT110-ĐEN) Đầm đen ngắn tay </h4>
						<p>420.000đ</p>
					</div>	
				</div>
				<div class="item">
					<div class="hoverimage">
						<div class= "new"></div>
						<img src="assets/images/sanpham2.jpg">
						<h4>(DT110-ĐEN) Đầm đen ngắn tay </h4>
						<p>420.000đ</p>
					</div>	
				</div>
				<div class="item">
					<div class="hoverimage">
						<div class= "new"></div>
						<img src="assets/images/sanpham5.jpg">
						<h4>(DT110-ĐEN) Đầm đen ngắn tay </h4>
						<p>420.000đ</p>
					</div>	
				</div>
				<div class="item">
					<div class="hoverimage">
						<div class= "new"></div>
						<img src="assets/images/sanpham1.jpg">
						<h4>(DT110 ĐEN) Đầm đen ngắn tay </h4>
						<p>420.000đ</p>
					</div>	
				</div>
				<div class="item">
					<div class="hoverimage">
						<div class= "new"></div>
						<img src="assets/images/sanpham4.jpg">
						<h4>(DT110) Đầm đen ngắn tay </h4>
						<p>420.000đ</p>
					</div>	
				</div>
				<div class="item">
					<div class="hoverimage">
						<div class= "new"></div>
						<img src="assets/images/sanpham2.jpg">
						<h4>(DT110-ĐEN) Đầm đen ngắn tay </h4>
						<p>420.000đ</p>
					</div>	
				</div>
				<div class="item">
					<div class="hoverimage">
						<div class= "new"></div>
						<img src="assets/images/sanpham3.jpg">
						<h4>(DT110-ĐEN) Đầm đen ngắn tay </h4>
						<p>420.000đ</p>
					</div>	
				</div>
				<div class="item">
					<div class="hoverimage">
						<div class= "new"></div>
						<img src="assets/images/sanpham2.jpg">
						<h4>(DT110-ĐEN) Đầm đen ngắn tay </h4>
						<p>420.000đ</p>
					</div>	
				</div>
				<div class="item">
					<div class="hoverimage">
						<div class= "new"></div>
						
						<img src="assets/images/sanpham5.jpg">
						<h4>(DT110-ĐEN) Đầm đen ngắn tay </h4>
						<p>420.000đ</p>
					</div>	
				</div>
			</div>
				
			</div>
			<div class="box3">
				<span></span>
			</div>
		</div>
		<div class="footer">
			© 2014 Đoàn thanh niên - Hội sinh viên, Trường Đại học Sư phạm Hà Nội <br>
            ĐC: Phòng 315, nhà Hiệu bộ, 136 Xuân Thủy, Cầu Giấy, Hà Nội<br>
            Tel: 04.7547634 (315) - Email: vp.doan@hnue.edu.vn<br>
            Số người trực tuyến: Biết chết liền :)) <br>
            Thiết kế và phát triển bởi <a href="http://itc.hnue.edu.vn/">TTCNTT</a>
		</div>
		
	<body>
	</body>
</html>
