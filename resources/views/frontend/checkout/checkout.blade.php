@extends('frontend.master.master')
	@section('title','Checkout')
	@section('name')
	
		<!-- main -->

		<div class="colorlib-shop">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-10 col-md-offset-1">
						<div class="process-wrap">
							<div class="process text-center active">
								<p><span>01</span></p>
								<h3>Giỏ hàng</h3>
							</div>
							<div class="process text-center active">
								<p><span>02</span></p>
								<h3>Thanh toán</h3>
							</div>
							<div class="process text-center">
								<p><span>03</span></p>
								<h3>Hoàn tất thanh toán</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-7">
						<form method="post" class="colorlib-form">
							<h2>Chi tiết thanh toán</h2>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="fname">Họ & Tên</label>
										<input name="full" type="text" id="fname" class="form-control" placeholder="First Name">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label for="fname">Địa chỉ</label>
										<input name="address" type="text" id="address" class="form-control"
											placeholder="Nhập địa chỉ của bạn">
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-6">
										<label for="email">Địa chỉ email</label>
										<input type="email" name="email" id="email" class="form-control"
											placeholder="Ex: youremail@domain.com">
									</div>
									<div class="col-md-6">
										<label for="Phone">Số điện thoại</label>
										<input name="phone" type="text" id="zippostalcode" class="form-control"
											placeholder="Ex: 0123456789">
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-12">

									</div>
								</div>
							</div>

					</div>
					<div class="col-md-5">
						<div class="cart-detail">
							<h2>Tổng Giỏ hàng</h2>
							<ul>

								@foreach ($checkout as $item)
								<li>
									<ul>
										<li><span>{{$item->name}} x {{$item->qty}}</span> <span>{{number_format($item->price,0,"",",")}} ₫</span></li>
									</ul>
								</li>
								<li><span>Tổng tiền đơn hàng</span> <span>{{number_format($item->total,0,"",",")}} ₫</span></li>
								@endforeach
								
							</ul>
						</div>

						<div class="row">
							<div class="col-md-12">
								<p><button type="submit" class="btn btn-primary">Thanh toán</button></p>
							</div>
						</div>
						@csrf
					</form>
				</div>
				</div>
			</div>
		</div>

		<!-- end main -->
		@section('js')
			
	
		<!-- jQuery -->
		<script src="js/jquery.min.js"></script>

		<!-- Bootstrap -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Waypoints -->
		<script src="js/jquery.waypoints.min.js"></script>
		<!-- Flexslider -->
		<script src="js/jquery.flexslider-min.js"></script>

		<!-- Magnific Popup -->
		<script src="js/jquery.magnific-popup.min.js"></script>
		

	
		<!-- Main -->
		<script src="js/main.js"></script>
		<script>
			$(document).ready(function () {

				var quantitiy = 0;
				$('.quantity-right-plus').click(function (e) {

					// Stop acting like a button
					e.preventDefault();
					// Get the field name
					var quantity = parseInt($('#quantity').val());

					// If is not undefined

					$('#quantity').val(quantity + 1);


					// Increment

				});

				$('.quantity-left-minus').click(function (e) {
					// Stop acting like a button
					e.preventDefault();
					// Get the field name
					var quantity = parseInt($('#quantity').val());

					if (quantity > 0) {
						$('#quantity').val(quantity - 1);
					}
				});

			});
		</script>
	@endsection
	@endsection