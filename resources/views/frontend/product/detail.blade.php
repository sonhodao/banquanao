@extends('frontend.master.master')
	@section('title','Detail')
	@section('name')

		<!-- main -->
		<div class="colorlib-shop">
			<div class="container">
				<div class="row row-pb-lg">
					<div class="col-md-10 col-md-offset-1">
						<div class="product-detail-wrap">
							<div class="row">
								<div class="col-md-5">
									<div class="product-entry">
										<div class="product-img" style="background-image: url(images/{{$product->img}});">
										</div>
									</div>
								</div>
								<div class="col-md-7">
									<form action="/cart/add" method="get">
										<div class="desc">
											<h3>{{$product->name}}</h3>
											<p class="price">
												<span>{{number_format($product->price,0,"",",")}} đ</span>
											</p>
											<p>thông tin</p>
											<p style="text-align: justify;">
												VIETPRO STORE sẽ giao hàng tận nơi khi chọn mua sản phẩm: {{$product->name}}. Hoặc quí khách có thể đến tại địa chỉ shop có hiển thị bên dưới, khi chọn size phù hợp để xem và thử trực tiếp.
											</p>		
											<div class="row row-pb-sm">
												<div class="col-md-4">
													<div class="input-group">
														<span class="input-group-btn">
															<button type="button" class="quantity-left-minus btn" data-type="minus" data-field="">
																<i class="icon-minus2"></i>
															</button>
														</span>
														<input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
														<span class="input-group-btn">
															<button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
																<i class="icon-plus2"></i>
															</button>
														</span>
													</div>
												</div>
											</div>
											<input type="hidden" name="id_product" value="{{$product->id}}">
											<p><button class="btn btn-primary btn-addtocart" type="submit"> Thêm vào giỏ hàng</button></p>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="row">
							<div class="col-md-12 tabulation">
								<ul class="nav nav-tabs">
									<li class="active"><a data-toggle="tab" href="#description">Mô tả</a></li>
								</ul>
								<div class="tab-content">
									<div id="description" class="tab-pane fade in active">
										Đây là sản phẩm đẹp
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="colorlib-shop">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading">
						<h2><span>Sản phẩm Mới</span></h2>
					</div>
				</div>
				
				<div class="row">
					@foreach ($product_m as $item)
					<div class="col-md-3 text-center">
						<div class="product-entry">
							<div class="product-img" style="background-image: url(images/{{$item->img}});">
								<div class="cart">
									<p>
										<span class="addtocart"><a href="cart.html"><i
													class="icon-shopping-cart"></i></a></span>
										<span><a href="/product/detail/{{$item->slug}}"><i class="icon-eye"></i></a></span>


									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="/product/detail/{{$item->slug}}">{{$item->name}}</a></h3>
								<p class="price"><span>{{number_format($item->price,0,"",",")}}</span></p>
							</div>
						</div>
					</div>
					@endforeach
					
				</div>
			</div>
		</div>
		<!-- end main -->
		@section('js')

			</div>
			<!-- jQuery -->
			<script src="js/jquery.min.js"></script>
			<!-- jQuery Easing -->
			<script src="js/jquery.easing.1.3.js"></script>
			<!-- Bootstrap -->
			<script src="js/bootstrap.min.js"></script>
			<!-- Waypoints -->
			<script src="js/jquery.waypoints.min.js"></script>
			<!-- Flexslider -->
			<script src="js/jquery.flexslider-min.js"></script>
		
			<script src="js/owl.carousel.min.js"></script>
			<!-- Magnific Popup -->
			<script src="js/jquery.magnific-popup.min.js"></script>
			<script src="js/magnific-popup-options.js"></script>
		
			<!-- Stellar Parallax -->
			<script src="js/jquery.stellar.min.js"></script>
			<!-- Main -->
			<script src="js/main.js"></script>
			<script>
				var quantity=1;
				$('.quantity-right-plus').click(function () {
					var quantity = parseInt($('#quantity').val());
					$('#quantity').val(quantity + 1);
				});

				$('.quantity-left-minus').click(function (e) {
					var quantity = parseInt($('#quantity').val());
						if (quantity > 1) {
							$('#quantity').val(quantity - 1);
						}
				});
			</script>
			
			@endsection
						
		@endsection