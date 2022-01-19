<!DOCTYPE HTML>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Shop</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<base href="{{asset("")."frontend/"}}">
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/custome.css">
</head>

<body>
	<!--header -->
	<div class="colorlib-loader"></div>
	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						
						<div class="col-xs-10 text-right menu-1">
							<ul>
								<li class="active"><a href="/index">Trang chủ</a></li>
								<li class="has-dropdown">
									<a href="/product/shop">Cửa hàng</a>
									<ul class="dropdown">
										<li><a href="cart.html">Giỏ hàng</a></li>
										<li><a href="checkout.html">Thanh toán</a></li>

									</ul>
								</li>
								<li><a href="/about">Giới thiệu</a></li>
								<li><a href="/contact">Liên hệ</a></li>
								<li><a href="/checkout"><i class="icon-shopping-cart"></i> Giỏ hàng [{{count(Cart::content())}}]</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
					<li style="background-image: url(images/bg-03.jpg);">
						<div class="overlay"></div>
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-6 col-md-offset-3 col-md-pull-2 col-sm-12 col-xs-12 slider-text">
									<div class="slider-text-inner">
										<div class="desc">
											<h1 class="head-1">Sale</h1>
											<h2 class="head-3">45%</h2>
											<p class="category"><span>Nhưng mẫu thiết kế chuyên nghiệp</span></p>
											<p><a href="#" class="btn btn-primary">Kết nối với shop</a></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li style="background-image: url(images/bg-01.jpg);">
						<div class="overlay"></div>
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-6 col-md-offset-3 col-md-pull-2 col-sm-12 col-xs-12 slider-text">
									<div class="slider-text-inner">
										<div class="desc">
											<h1 class="head-1">Sale</h1>
											<h2 class="head-3">45%</h2>
											<p class="category"><span>Nhưng mẫu thiết kế chuyên nghiệp</span></p>
											<p><a href="#" class="btn btn-primary">Kết nối với shop</a></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li style="background-image: url(images/bg-02.jpg);">
						<div class="overlay"></div>
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-6 col-md-offset-3 col-md-push-3 col-sm-12 col-xs-12 slider-text">
									<div class="slider-text-inner">
										<div class="desc">
											<h1 class="head-1">Sale</h1>
											<h2 class="head-3">45%</h2>
											<p class="category"><span>Nhưng mẫu thiết kế chuyên nghiệp</span></p>
											<p><a href="#" class="btn btn-primary">Kết nối với shop</a></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</aside>
		<!-- End header -->
	@yield('name')	
		<!-- subscribe -->
		<div id="colorlib-subscribe">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="col-md-6 text-center">
							<h2><i class="icon-paperplane"></i>Đăng ký nhận bản tin</h2>
						</div>
						<div class="col-md-6">
							<form class="form-inline qbstp-header-subscribe">
								<div class="row">
									<div class="col-md-12 col-md-offset-0">
										<div class="form-group">
											<input type="text" class="form-control" id="email"
												placeholder="Nhập email của bạn">
											<button type="submit" class="btn btn-primary">Đăng ký</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--end  subscribe -->
	<!-- footer -->
	<footer id="colorlib-footer" role="contentinfo">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-3 colorlib-widget">
					<h4>Giới thiệu</h4>
					<p>VN Shop cửa hàng kinh doanh quần áo luôn mang tới sự hài lòng cho khách hàng về chất
						lượng sản phẩm, quần
						áo đều mang thương hiệu made in Việt Nam đẹp cả về kiểu cách lẫn chất lượng, nên sẽ giúp cho
						bạn trở nên xinh
						đẹp hơn..</p>
					<p>
						<ul class="colorlib-social-icons">
						
							<li><a href="https://www.facebook.com/vietpro.edu/"><i class="icon-facebook"></i></a></li>
							
							<li><a href="https://www.youtube.com/channel/UCLjRjXUSy3g9iKRWTyw75Nw"><i class="icon-youtube"></i></a></li>
						</ul>
					</p>
				</div>
				<div class="col-md-3 colorlib-widget">
					<h4>Chăm sóc khách hàng</h4>
					<p>
						<ul class="colorlib-footer-links">
							<li><a href="#">Liên hệ </a></li>
							<li><a href="#">Giao hàng/ Đổi hàng</a></li>
							<li><a href="#">Mã giảm giá</a></li>
							<li><a href="#">Sản phẩm yêu thích</a></li>
							<li><a href="#">Đặc biệt</a></li>
						
						
						</ul>
					</p>
				</div>
				<div class="col-md-2 colorlib-widget">
					<h4>Thông tin</h4>
					<p>
						<ul class="colorlib-footer-links">
							<li><a href="#">Về chúng tôi</a></li>
							<li><a href="#">Thông tin vận chuyển</a></li>
							<li><a href="#">Chính sách bảo mật</a></li>
							<li><a href="#">Hỗ trợ</a></li>

						</ul>
					</p>
				</div>



				<div class="col-md-4">
					<h4>Thông tin liên hệ</h4>
					<ul class="colorlib-footer-links">
						<li>Hà Đông - Hà Nội</li>
						<li><a href="tel://1234567920">0123 456 789</a></li>
						<li><a href="mailto:info@yoursite.com">shop@gmail.com</a></li>
						<li><a href="#">http://shop.com</a></li>
					</ul>
				</div>
			</div>
		</div>

	</footer>
	@yield('js')	
</body>
</html>