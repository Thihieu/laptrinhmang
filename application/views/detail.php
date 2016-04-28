
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
	<link rel="stylesheet" href="<?php echo  base_url()."css/unsemantic.css"; ?>" type="text/css" />
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

		<!--Đây là header-->
		<header>
		<nav class="top-menu grid-container hide-on-tablet hide-on-mobile shadow" style="background:url('<?php echo base_url()."/images/bg-top.jpg" ?>')" >
		<div class="grid-100">
			<div class="top-menu-left">
				<?php if(isset( $user['username'])){ ?>
					<li>
						<a href="my-account.html"  class="dark-color">Tên tài khoản của bạn: <span> <?php echo $user['username'];?></span></a>
					</li>
					<li>
						<p>
							<a href=" <?php echo base_url();?>authentication/logout"> Logout</a>
						</p>
					</li>
				</ul>
				<?php } ?>
			</div>
				
			<div class="top-menu-right">
				<?php if(!isset( $user['username'])){ ?>
				<ul>
					<li>
						<a href="<?php echo base_url();?>authentication/index">
						<i class="icon-off"></i>Đăng nhập </a>
						
					</li>
					<li>
						<a href="./register.html" class="dark-color">Đăng ký</a>
					</li>
				</ul>
				<?php } ?>
			</div>
		</div>
		</nav> 
		<div class="header-middle grid-container light-gradient" style="background:url('./images/back-ground.jpg')">
			<div class="grid-100">
				<div class="header-logo grid-15">
					<a href="./homepage.html"  title="Shoppie">
					<img height="110px"src="<?php echo base_url()."/images/logo.png" ?>" alt="Shoppie" />
					</a>
				</div>
				<div class="grid-80 remove-whitespaces" >
					<div class="row">
						<div class="header-middle-box header-compare remove-whitespaces hide-on-mobile">
							<a href="./compare.html" class="dark-color" style="font-size:20px">
							<i class="icon-signal middle-color" >&nbsp;</i>
								Ưa thích (<strong>3</strong>)
							</a>
							<a href="./wishlist.html" style="font-size:20px" class="dark-color">
							<i class="icon-heart middle-color">&nbsp;</i>
							So Sánh (<strong>7</strong>)
							</a>
						</div>
					</div>
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
								<i class="icon-shopping-cart">&nbsp;</i>
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
										<span class="quick-cart-right active-color">954,00 &euro;</span>
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
		<nav style="background:url('<?php echo base_url()."/images/bgtop-menu.png"?>') repeat-x;border-radius:30px;margin-top:5px;" class="main-menu grid-container" id="main-menu">
		<div class="mobile-overlay"></div>
	 
			<ul class="main-menu-mobile">
				<li class="middle-color light-hover">
					<a href="#menu-mobile" class="main-menu-item click-slide"><i class="icon-reorder"></i></a>
				</li>
				<li class="middle-color light-hover">
					<a href="./homepage.html" class="main-menu-item"><i class="icon-home"></i></a>
				</li>
				<li class="main-menu-cart active-color light-hover">
					<a href="./products-detail.html" class="main-menu-item">
					<i class="icon-shopping-cart" style="font-size:14px">&nbsp;</i>
					39
					&nbsp;|&nbsp;
					954,00 &euro;
					</a>
				</li>
			</ul> 
			<ul class="main-menu-desktop dark-gradient transition-all" id="menu-mobile">
				<li class="middle-color light-hover home">
					<a href="./homepage.html" class="main-menu-item transition-all"><i class="icon-home"></i></a>
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

		<?php foreach ($single_product as $pro): ?>
		
		<section class="page-content"> 
			<div class="page-block page-block-top light-bg grid-container">
				<div class="breadcrumbs grid-100 middle-color">
					<a href="./homepage.html" class="dark-color active-hover">Trang chủ</a>
					<a href="products-grid.php" class="dark-color active-hover">Thời trang nữ</a>
					<strong class="active-color"><?php echo $pro->pro_name; ?></strong>
				</div>
			</div>  
			<div class="page-block page-block-bottom cream-bg grid-container">
				<div class="content-with-sidebar grid-100">
					<div class="product-detail-shadow">						
						<div class="product-detail cream-gradient grid-container">
							<div class="ribbon-small ribbon-green">
								<div class="ribbon-inner">
									<span class="ribbon-text"><?php echo $pro->id_cat; ?>% off</span>
									<span class="ribbon-aligner"></span>
								</div>
							</div>
								<div class="product-images grid-40 tablet-grid-40 juicy-wrapper">
									<ul id="product-gallery" class="juicy-slider middle-border">
										<a href="" class="fancybox" target="_blank">
											<img  src="<?php echo base_url($pro->pro_image)?>" data-thumb="<?php echo base_url($pro->pro_image)?>" alt="" />
										</a>
									</ul>
									
								<div class="juicy-slider-nav juicy-thumbs middle-border dark-border-hover active-border-selected" data-type="thumbs"></div>
							</div> 
							<div class="product-info grid-55 tablet-grid-55">
								<h1 class="header-font dark-color"> <?php echo $pro->pro_name; ?></h1>
								<div class="clearfix">
									<div class="product-stars grid-50 tablet-grid-50 voting-stars stars-big">
									<i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star middle-color"></i><i class="icon-star middle-color"></i>
									</div>
									<div class="product-social grid-50 tablet-grid-50 hide-on-mobile">
										<a href="https://www.facebook.com/adamantium.solutions" class="dark-hover facebook-color transition-color" target="_blank">
											<i class="icon-facebook-sign"></i>
										</a>
										<a href="https://twitter.com/AdamantiumSol" class="dark-hover twitter-color transition-color" target="_blank">
											<i class="icon-twitter"></i>
										</a>
										<a href="http://pinterest.com/" class="dark-hover pinterest-color transition-color" target="_blank">
											<i class="icon-pinterest-sign"></i>
										</a>
										<a href="https://plus.google.com/u/0/113332714808714572645/posts" class="dark-hover google-color transition-color" target="_blank">
											<i class="icon-google-plus-sign"></i>
										</a>
									</div>
								</div>
								
								
								<p class="product-perex">
								<?php echo ''; ?></p>
								<div class="product-meta-price clearfix">
									<div class="product-meta middle-color grid-55">
										<table>
											<tr>
												<td>Sản phẩm:</td>
												<td><?php echo ''; ?></td>
											</tr>
											</br>
											<tr>
												<td>Mã sản phẩm:</td>
												<td><?php echo ''; ?></td>
											</tr>
											</br>
											<tr>
												<td>Tình trạng:</td>
												<td class="active-color"><?php //if ('' == 1) echo "Còn hàng"; else echo "Hết hàng"; ; ?></td>
											</tr>
										</table>
									</div>
									<div class="product-price active-color grid-45">
										<del class="middle-color"><?php // echo $row["price"]; ?> VNĐ</del>
										<strong><?php 
										//$price = $row["price"];
										//$saleoff = $row["saleoff"];
										//echo $price - ($price * $saleoff / 100);
										 ?> VNĐ</strong>
									</div>
								</div>
								</br>
								<form action="cart.html" method="POST" />
										<div class="product-options clearfix">
											<label for="product-size" class="dark-color hide-on-mobile">Cỡ</label>
											<div class="custom-selectbox dark-color light-gradient active-hover">
												<select name="product-size" id="product-size" width="50px" height="50px">
												<option value="XS" />XS
												<option value="S" />S
												<option value="M" />M
												<option value="L" />L
												<option value="XL" selected="selected" />XL
												<option value="XXL" />XXL
												</select>
											</div>
											</br>
											</br>
											<label for="product-color" class="dark-color hide-on-mobile">Màu</label>
											<div class="product-color custom-selectbox dark-color light-gradient active-hover">
												<select name="product-color" id="product-color">
												<option value="Brown" />Brown
												<option value="Blue" />Blue
												<option value="Green" />Green
												<option value="Yellow" />Yellow
												<option value="Magenta" selected="selected" />Magenta
												<option value="Cyan" />Cyan
												<option value="Black" />Black
												<option value="White" />White
												<option value="Red" />Red
												</select>
											</div>
										</div>
								<script>
									document.getElementById("product-color").value = '<?php //echo $row["color"]; ?>';
									document.getElementById("product-size").value = '<?php // echo $row["size"]; ?>';
								</script>
								</br>
									<div class="product-options clearfix">
										<label for="product-quantity" class="hide-on-mobile">Số lượng:   </label>
										
										<input type="text" id="product-quantity" name="product-quantity" class="product-quantity text-input dark-color light-bg" value="1" onclick="$(this).select()" />
										</br>
										</br>
										<div class="button-dual light-color transition-all">
												<button type="submit" class="button-dual-left middle-gradient dark-gradient-hover">
												Đặt hàng <i class="icon-shopping-cart"></i>
												</button>
												<a class="button-dual-right middle-gradient dark-gradient-hover">
												<i class="icon-angle-down"></i>
												</a>
											<ul class="button-dual-submenu">
												<li>
													<a href="./wishlist.html" class="light-color middle-bg dark-bg-hover transition-color">
													Thêm vào ưa thích
													<i class="icon-heart"></i>
													</a>
												</li>
												<li>
													<a href="./compare.html" class="dual-submenu-last light-color middle-bg dark-bg-hover transition-color">
													Thêm vào so sánh
													<i class="icon-signal"></i>
												</a>
												</li>
											</ul>
										</div>
									</div>
								</form> 
							</div> 
						</div>
						<?php endforeach; ?>
						<div class="product-detail-tabs grid-100 light-bg">
							<div class="page-tabs shoppie-tabs">
								<h2 class="header-font">
									<a class="middle-color active-hover light-bg transition-color" href="#tab-description">
										<span class="hide-on-mobile">Mô tả sản phẩm</span>
										<i class="icon-align-left hide-on-desktop hide-on-tablet"></i>
									</a>
								</h2>
								<h2 class="header-font">
									<a class="middle-color active-hover light-bg transition-color" href="#tab-reviews">
										<span class="hide-on-mobile">Xem lại sản phẩm</span>
										<i class="icon-comments hide-on-desktop hide-on-tablet"></i>
									</a>
								</h2>
								<h2 class="header-font">
									<a class="middle-color active-hover light-bg transition-color" href="#tab-related">
										<span class="hide-on-mobile">Sản phẩm cùng thể loại</span>
										<i class="icon-link hide-on-desktop hide-on-tablet"></i>
									</a>
								</h2>
							</div>  
							<div class="page-tabs-holder">
								<div class="page-tab grid-100" id="tab-description"><p>
								<?php echo ''; ?></p>
								</div> 
								<div class="page-tab grid-100" id="tab-reviews">
									<div class="product-review-details clearfix">
										<div class="grid-33 tablet-grid-33 mobile-grid-100 product-review-score">
											<strong class="product-review-percent active-color">83%</strong>
											<div class="voting-stars stars-huge">
												<i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star middle-color"></i><i class="icon-star middle-color"></i>
											</div>
												<span class="middle-color">
												Có <strong class="dark-color">1125</strong> lượt xem
												</span>
										</div>
										<div class="grid-33 tablet-grid-33 mobile-grid-100 product-review-stats">
											<dl>
												<dt class="voting-stars stars-small">
													<i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star active-color"></i>
												</dt>
												<dd class="middle-color"><strong class="active-color">1028</strong>khách hàng</dd>
												<dt class="voting-stars stars-small">
													<i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star middle-color"></i>
												</dt>
												<dd class="middle-color">
													<strong class="active-color">28</strong>
													khách hàng
												</dd>
												<dt class="voting-stars stars-small">
													<i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star middle-color"></i><i class="icon-star middle-color"></i>
												</dt>
												<dd class="middle-color">
													<strong class="active-color">17</strong>
													khách hàng
												</dd>
												<dt class="voting-stars stars-small">
													<i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star middle-color"></i><i class="icon-star middle-color"></i><i class="icon-star middle-color"></i>
												</dt>
												<dd class="middle-color">
													<strong class="active-color">39</strong>
													khách hàng
												</dd>
												<dt class="voting-stars stars-small">
													<i class="icon-star active-color"></i><i class="icon-star middle-color"></i><i class="icon-star middle-color"></i><i class="icon-star middle-color"></i><i class="icon-star middle-color"></i>
												</dt>
												<dd class="middle-color">
													<strong class="active-color">12</strong>
													khách hàng
												</dd>
											</dl>
										</div>
										<div class="grid-33 tablet-grid-33 mobile-grid-100 product-review-count">
											<table>
												<tr>
													<td>
													<strong class="active-color">158</strong>
													</td>
													<td>of khách hàng recommends</td>
												</tr>
												<tr>
													<td>
													<strong class="active-color">2756</strong>
													</td>
													<td>khách hàng already purchased</td>
												</tr>
											</table>
											<a class="button-small light-color middle-gradient dark-gradient-hover" href="#">
											Write a review
											</a>
										</div>
									</div>
									<hr class="margin-bottom" />
									<div class="grid-100 product-review">
										<div class="product-review-author middle-color">
											<strong class="dark-color">Bryan</strong>
											| <small>22.12.2012</small> |
											<span class="voting-stars stars-small">
											<i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star middle-color"></i><i class="icon-star middle-color"></i><i class="icon-star middle-color"></i>
											</span>
										</div>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
										<ul class="product-review-list">
											<li class="active-color">
												<i class="icon-plus-sign"></i>
												Lorem Ipsum is simply dummy text of the printing and typesetting industry.
											</li>
											<li class="active-color">
												<i class="icon-plus-sign"></i>
												It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged it has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged
											</li>
											<li class="middle-color">
												<i class="icon-minus-sign"></i>
												Lorem Ipsum is simply dummy text of the printing and typesetting industry.
											</li>	
											<li class="middle-color">
												<i class="icon-minus-sign"></i>
												It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged
											</li>
										</ul>
										<div class="pager align-right light-gradient middle-color middle-border active-hover active-border-hover">
											<a class="pager-page" href="#"><i class="icon-double-angle-left"></i></a>
											<a class="pager-page" href="#"><i class="icon-angle-left"></i></a>
											<a class="pager-page" href="#">1</a>
											<a class="pager-page selected" href="#">2</a>
											<a class="pager-page" href="#">3</a>
											<a class="pager-page hide-on-mobile" href="#">4</a>
											....
											<a class="pager-page" href="#">29</a>
											<a class="pager-page" href="#"><i class="icon-angle-right"></i></a>
											<a class="pager-page" href="#"><i class="icon-double-angle-right"></i></a>
										</div>
									</div>
								</div> 
								<div class="page-tab grid-100 clearfix" id="tab-related">
									<div class="grid-25 tablet-grid-25">
										<div class="product-box light-bg transition-all">
											<div class="ribbon-small ribbon-green">
												<div class="ribbon-inner">
													<span class="ribbon-text">19% Off</span>
													<span class="ribbon-aligner"></span>
												</div>
											</div>
											<a class="product-img" href="products-detail.php">
											<span><img src="./images/photos/img-product1.jpg" alt="Pablo Coelho jacket" /></span>
											</a>
											<div class="product-info light-bg middle-border">
												<h3 class="product-title subheader-font">
													<a href="products-detail.php" class="dark-color active-hover">
													<strong>Pablo Coelho jacket</strong>
													</a>
												</h3>
												<a href="products-grid.php" class="product-category middle-color dark-hover">Women’s Suit Jacket</a>
												<div class="product-bottom">
													<div class="product-stars voting-stars stars-small">
														<i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star middle-color"></i><i class="icon-star middle-color"></i>
													</div>
													<div class="product-price active-color">
														<del class="light-gradient middle-border dark-color">186,90 VNĐ</del>
														<strong class="middle-border">125,90 VNĐ</strong>
													</div>
												</div>
											</div>
										</div>
									</div> 
									<div class="grid-25 tablet-grid-25">
										<div class="product-box light-bg transition-all">
											<a class="product-img" href="products-detail.php">
											<span><img src="./images/photos/img-product2.jpg" alt="Tommy Mancini" /></span>
											</a>
											<div class="product-info light-bg middle-border">
												<h3 class="product-title subheader-font">
													<a href="products-detail.php" class="dark-color active-hover">
													<strong>Tommy Mancini</strong>
													</a>
												</h3>
												<a href="products-grid.php" class="product-category middle-color dark-hover">Women’s Suit Jacket</a>
												<div class="product-bottom">
													<div class="product-stars voting-stars stars-small">
														<i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star middle-color"></i>
													</div>
													<div class="product-price active-color">
														<del class="light-gradient middle-border dark-color">98,50 VNĐ</del>
														<strong class="middle-border">85,40 VNĐ</strong>
													</div>
												</div>
											</div>
										</div>
									</div> 
									<div class="grid-25 tablet-grid-25">
										<div class="product-box light-bg transition-all">
											<a class="product-img" href="products-detail.php">
											<span><img src="./images/photos/img-product1.jpg" alt="Pablo Coelho jacket" /></span>
											</a>
											<div class="product-info light-bg middle-border">
												<h3 class="product-title subheader-font">
													<a href="products-detail.php" class="dark-color active-hover">
													<strong>Pablo Coelho</strong>
													</a>
												</h3>
												<a href="products-grid.php" class="product-category middle-color dark-hover">Women’s Suit Jacket</a>
												<div class="product-bottom">
													<div class="product-stars voting-stars stars-small">
														<i class="icon-star active-color"></i><i class="icon-star middle-color"></i><i class="icon-star middle-color"></i><i class="icon-star middle-color"></i><i class="icon-star middle-color"></i>
													</div>
													<div class="product-price active-color">
														<del class="light-gradient middle-border dark-color">150,80 VNĐ</del>
														<strong class="middle-border">133,90 VNĐ</strong>
													</div>
												</div>
											</div>
										</div>
									</div> 
									<div class="grid-25 tablet-grid-25">
										<div class="product-box light-bg transition-all">
											<a class="product-img" href="products-detail.php">
											<span><img src="./images/photos/img-product3.jpg" alt="Zara Lauren shirt" /></span>
											</a>
											<div class="product-info light-bg middle-border">
												<h3 class="product-title subheader-font">
												<a href="products-detail.php" class="dark-color active-hover">
												<strong>Zara Lauren</strong>
												</a>
												</h3>
												<a href="products-grid.php" class="product-category middle-color dark-hover">Women’s shirt</a>
												<div class="product-bottom">
													<div class="product-stars voting-stars stars-small">
													<i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star active-color"></i><i class="icon-star active-color"></i>
													</div>
													<div class="product-price active-color">
														<del class="light-gradient middle-border dark-color">18,20 VNĐ</del>
														<strong class="middle-border">5,90 VNĐ</strong>
													</div>
												</div>
											</div>
										</div>
									</div> 
								</div> 
							</div>
						</div> 
					</div>
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
								<a href="#">Địa chỉ:925/7/88 Xuân Thủy-Cầu Giấy-Hà Nội</a>
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
			
		</footer>
				 
		<!--[if lt IE 9]>
			   <script src="../../../html5shim.googlecode.com/svn/trunk/html5.js"></script>
			   <![endif]-->
		 
		<script type="text/javascript" src="<?php echo  base_url()."/js/jquery-1.9.1.min.js" ?>"></script>
		<script type="text/javascript" src="<?php echo  base_url()."/js/css3-mediaqueries.js" ?>"></script>
		<script type="text/javascript" src="<?php echo  base_url()."/js/fancybox/jquery.fancybox-1.3.4.pack.js"?>"></script>
		<script type="text/javascript" src="<?php echo  base_url()."/js/juicy/js/jquery.juicy.js"?>"></script>
		<script type="text/javascript" src="<?php echo  base_url()."/js/shoppie.scripts.js"?>"></script>
		<script type="text/javascript">
					Global.documentReady(); 
					Product.documentReady(); 
	   </script>
	</body>
</html>