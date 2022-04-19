@extends('user.layout')
@section('content')


		<!-- Slider Banner trang web -->
		<div class="banner">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				
				<div class="carousel-inner" role="listbox">
@foreach($slideshow as $slideshows)
					<div class="carousel-item active"><img src="{!! asset('image/'.$slideshows->HinhAnh)!!}" class="img-fluid" alt="">
						<div class="carousel-caption text-center">
							<h3>Ưu Đãi Lớn
								<span>Giảm Giá 50% Tất Cả Các Loại Sách</span>
							</h3>
							<a href="{{ route('user.shop')}}" class="btn btn-sm animated-button gibson-three mt-4">Đến Cửa Hàng</a>
						</div>
					</div>
					@endforeach
					@foreach($slideshow2 as $slideshows)
					<div class="carousel-item item2"><img src="{!! asset('image/'.$slideshows->HinhAnh)!!}" class="img-fluid" alt="">">
						<div class="carousel-caption text-center">
							<h3>Với N&T
								<span>Kiến Thức Là Vô Tận</span>
							</h3>
							<a href="{{ route('user.shop')}}" class="btn btn-sm animated-button gibson-three mt-4">Đến Cửa Hàng</a>

						</div>
					</div>
					@endforeach
					@foreach($slideshow3 as $slideshows)
					<div class="carousel-item item3"><img src="{!! asset('image/'.$slideshows->HinhAnh)!!}">
						<div class="carousel-caption text-center">
							<h3>Đến Với N&T
								<span>Chúng Tôi Sẽ Cho Bạn Dịch Vụ Tốt Nhất</span>
							</h3>
							<a href="{{ route('user.shop')}}" class="btn btn-sm animated-button gibson-three mt-4">Đến Cửa Hàng</a>

						</div>
					</div>
					@endforeach
					@foreach($slideshow4 as $slideshows)
					<div class="carousel-item item4"><img src="{!! asset('image/'.$slideshows->HinhAnh)!!}"
						<div class="carousel-caption text-center">
							<h3>Đồng Hành Cùng N&T
								<span>Trở Lại Trường Sau Mùa Hè</span>
							</h3>
							<a href="{{ route('user.shop')}}" class="btn btn-sm animated-button gibson-three mt-4">Đến Cửa Hàng</a>
						</div>
					</div>
					@endforeach
					@foreach($slideshow5 as $slideshows)
					<div class="carousel-item item4"><img src="{!! asset('image/'.$slideshows->HinhAnh)!!}"
						<div class="carousel-caption text-center">
							<h3>Đồng Hành Cùng N&T
								<span>Trở Lại Trường Sau Mùa Hè</span>
							</h3>
							<a href="{{ route('user.shop')}}" class="btn btn-sm animated-button gibson-three mt-4">Đến Cửa Hàng</a>
						</div>
					</div>
					@endforeach
				</div>
			
			</div>
			<!--//banner -->
		</div>
	</div>
	<!--//banner-sec-->
	<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
		<div class="container-fluid">
			<div class="inner-sec-shop px-lg-4 px-3">
				<h3 class="tittle-w3layouts my-lg-4 my-4">Sách Mới Cho Bạn </h3>
				<div class="row">
					<!-- Sách mới -->
					@foreach($sach_moi_nhat as $books)
					<div class="col-md-3">
						<div class="product-googles-info googles">
							
							<div class="men-pro-item">
								<!-- Hình ảnh -->
								<a href="{{route('user.single',$books->id)}}">
								<div class="men-thumb-item">
									<img src="{!! asset('image/'.$books->AnhSach)!!}" class="img-fluid" alt="">
									<span class="product-new-top" style="background-color: green;">Mới</span>
								</div>
							    </a>
								<div class="item-info-product">
									<div class="info-product-price">
										<!-- Tên và giá tiền -->
										<div class="grid_meta">
											<div class="product_price">
												<h4 style="padding-top:20px">
													<a href="{{route('user.single',$books->id)}}">{{$books->TenSach}}</a>
												</h4>
												<div class="grid-price mt-2">
													<span class="money ">{{number_format($books->GiaTien,0,",",".")}} ₫</span>
												</div>
											</div>
										</div>
										<!-- Thêm vào giỏ hàng -->
										@if (session()->has('infoUser') != null)
														<div class="googles single-item hvr-outline-out">
														<form action="" method="POST">
															{{csrf_field()}}
															<button type="button" class="googles-cart pgoogles-cart" onclick="AddCart({{ $books->id }})">
																<i class="fas fa-cart-plus"></i>
															</button>								
														</form>
														</div>
														<div class="googles single-item hvr-outline-out" style="">
															<form>
															{{ csrf_field() }}
																<button type="button" class="googles-heart" onclick="Favorite({{ $books->id }})">
																   <a class="wishlist" href=""><i class="fas fa-heart"></i></a>	
																</button>	
															</form>
														</div>
														@endif
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>
					</div>
					@endforeach
					
					
					
					
					
					
				</div>
				<!--//Sách mới-->
				<!--/Banner middle trang web-->
				<div class="row">
					<div class="col-md-12 middle-slider my-4">
						<div class="middle-text-info" style="background-image: url(user/images/banner-middle.jpg);">
							<!-- Bộ đếm ngược -->
							<!-- <div class="simply-countdown-custom" id="simply-countdown-custom"></div> -->
						</div>
					</div>
				</div>
				<!--//Banner trang web-->
				<div class="inner-sec-shop px-lg-4 px-3">
					<h3 class="tittle-w3layouts my-lg-4 my-4">Sách Bán Chạy Nhất </h3>
					<div class="row">
						<!-- Sách bán chạy -->
						<div class="col-md-3">
							<div class="product-googles-info googles">
								<div class="men-pro-item">
									<div class="men-thumb-item">
										<img src="{!! asset('user/images/Book/SACH_KINH_TE/SuMenhKhoiNghiep/HinhDD.png')!!}" class="img-fluid" alt="">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="{{ route('user.single')}}" class="link-product-add-cart">Xem Chi Tiết</a>
											</div>
										</div>
										<span class="product-new-top">Hot</span>
									</div>
									<div class="item-info-product">
										<div class="info-product-price">
											<div class="grid_meta">
												<div class="product_price">
													<h4 style="padding-top:20px">
														<a href="{{ route('user.single')}}">Sứ Mệnh Khởi Nghiệp</a>
													</h4>
													<div class="grid-price mt-2">
														<span class="money ">89.000 VNĐ</span>
													</div>
												</div>
											</div>
											<div class="googles single-item hvr-outline-out">
												<form action="#" method="post">
													<input type="hidden" name="cmd" value="">
													<input type="hidden" name="add" value="">
													<input type="hidden" name="googles_item" value="">
													<input type="hidden" name="amount" value="">
													<button type="submit" class="googles-cart pgoogles-cart">
														<i class="fas fa-cart-plus" style="padding-top:15px"></i>
													</button>	
												</form>
											</div>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="product-googles-info googles">
								<div class="men-pro-item">
									<div class="men-thumb-item">
										<img src="{!! asset('user/images/Book/SACH_KINH_TE/Siêu Cò – How To Be A Power Connector/DD.png')!!}" class="img-fluid" alt="">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="{{ route('user.single')}}" class="link-product-add-cart">Xem Chi Tiết</a>
											</div>
										</div>
										<span class="product-new-top">Hot</span>
									</div>
									<div class="item-info-product">
										<div class="info-product-price">
											<div class="grid_meta">
												<div class="product_price">
													<h4 style="padding-top:20px">
														<a href="{{ route('user.single')}}">Siêu Cò</a>
													</h4>
													<div class="grid-price mt-2">
														<span class="money ">119.000 VNĐ</span>
													</div>
												</div>
											</div>
											<div class="googles single-item hvr-outline-out">
												<form action="#" method="post">
													<input type="hidden" name="cmd" value="">
													<input type="hidden" name="add" value="">
													<input type="hidden" name="googles_item" value="">
													<input type="hidden" name="amount" value="">
													<button type="submit" class="googles-cart pgoogles-cart">
														<i class="fas fa-cart-plus" style="padding-top:15px"></i>
													</button>	
												</form>
											</div>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="product-googles-info googles">
								<div class="men-pro-item">
									<div class="men-thumb-item">
										<img src="{!! asset('user\images\Book\SACH_KY_NANG_SONG\Tư Duy Sâu\DD.png')!!}" class="img-fluid" alt="">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="{{ route('user.single')}}" class="link-product-add-cart">Xem Chi Tiết</a>
											</div>
										</div>
										<span class="product-new-top">Hot</span>
									</div>
									<div class="item-info-product">
										<div class="info-product-price">
											<div class="grid_meta">
												<div class="product_price">
													<h4 style="padding-top:20px">
														<a href="{{ route('user.single')}}">Tư Duy Sâu</a>
													</h4>
													<div class="grid-price mt-2">
														<span class="money ">152.000 VNĐ</span>
													</div>
												</div>
											</div>
											<div class="googles single-item hvr-outline-out">
												<form action="#" method="post">
													<input type="hidden" name="cmd" value="">
													<input type="hidden" name="add" value="">
													<input type="hidden" name="googles_item" value="">
													<input type="hidden" name="amount" value="">
													<button type="submit" class="googles-cart pgoogles-cart">
														<i class="fas fa-cart-plus" style="padding-top:15px"></i>
													</button>	
												</form>
											</div>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="product-googles-info googles">
								<div class="men-pro-item">
									<div class="men-thumb-item">
										<img src="{!! asset('user/images/Book/SACH_KINH_TE/Nhà Đầu Tư Thông Minh (Tái Bản 2020)/HDD.png')!!}" class="img-fluid" alt="">
										<div class="men-cart-pro">
											<div class="inner-men-cart-pro">
												<a href="{{ route('user.single')}}" class="link-product-add-cart">Xem Chi Tiết</a>
											</div>
										</div>
										<span class="product-new-top">Hot</span>
									</div>
									<div class="item-info-product">
										<div class="info-product-price">
											<div class="grid_meta">
												<div class="product_price">
													<h4 style="padding-top:20px">
														<a href="{{ route('user.single')}}">Nhà Đầu Tư Thông...</a>
													</h4>
													<div class="grid-price mt-2">
														<span class="money ">105.000 VNĐ</span>
													</div>
												</div>
											</div>
											<div class="googles single-item hvr-outline-out">
												<form action="#" method="post">
													<input type="hidden" name="cmd" value="">
													<input type="hidden" name="add" value="">
													<input type="hidden" name="googles_item" value="">
													<input type="hidden" name="amount" value="">
													<button type="submit" class="googles-cart pgoogles-cart">
														<i class="fas fa-cart-plus" style="padding-top:15px"></i>
													</button>	
												</form>
											</div>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- about -->
@stop