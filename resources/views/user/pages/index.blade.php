@extends('user.layout')
@section('content')
		<!-- Slider Banner trang web -->
		<div class="banner">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="carousel-item active" style="background-image: url(user/images/banner.jpg);">
						<div class="carousel-caption text-center">
							<h3>Ưu Đãi Lớn
								<span>Giảm Giá 50% Tất Cả Các Loại Sách</span>
							</h3>
							<a href="{{ route('user.shop')}}" class="btn btn-sm animated-button gibson-three mt-4">Đến Cửa Hàng</a>
						</div>
					</div>
					<div class="carousel-item item2" style="background-image: url(user/images/banner-4.jpg);">
						<div class="carousel-caption text-center">
							<h3>Với N&T
								<span>Kiến Thức Là Vô Tận</span>
							</h3>
							<a href="{{ route('user.shop')}}" class="btn btn-sm animated-button gibson-three mt-4">Đến Cửa Hàng</a>

						</div>
					</div>
					<div class="carousel-item item3" style="background-image: url(user/images/banner-5.jpg);">
						<div class="carousel-caption text-center">
							<h3>Đến Với N&T
								<span>Chúng Tôi Sẽ Cho Bạn Dịch Vụ Tốt Nhất</span>
							</h3>
							<a href="{{ route('user.shop')}}" class="btn btn-sm animated-button gibson-three mt-4">Đến Cửa Hàng</a>

						</div>
					</div>
					<div class="carousel-item item4" style="background-image: url(user/images/banner-9.jpg);">
						<div class="carousel-caption text-center">
							<h3>Đồng Hành Cùng N&T
								<span>Trở Lại Trường Sau Mùa Hè</span>
							</h3>
							<a href="{{ route('user.shop')}}" class="btn btn-sm animated-button gibson-three mt-4">Đến Cửa Hàng</a>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
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
					<div class="col-md-3">
						<div class="product-googles-info googles">
							
							<div class="men-pro-item">
								<!-- Hình ảnh -->
								<a href="{{ route('user.single')}}">
								<div class="men-thumb-item">
									<img src="{!! asset('user\images\Book\SACH_KY_NANG_SONG\Tư Duy Sâu\DD.png')!!}" class="img-fluid" alt="">
									<span class="product-new-top" style="background-color: green;">Mới</span>
								</div>
							    </a>
								<div class="item-info-product">
									<div class="info-product-price">
										<!-- Tên và giá tiền -->
										<div class="grid_meta">
											<div class="product_price">
												<h4 style="padding-top:20px">
													<a href="{{ route('user.single')}}">Tư Duy Sâu</a>
												</h4>
												<div class="grid-price mt-2">
													<span class="money ">89.000 VNĐ</span>
												</div>
											</div>
										</div>
										<!-- Thêm vào giỏ hàng -->
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
									<span class="product-new-top" style="background-color: green;">Mới</span>
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
									<img src="{!! asset('user\images\Book\SACH_VAN_HOC\Bố Già (Mario Puzo)\DD.png')!!}" class="img-fluid" alt="">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="{{ route('user.single')}}" class="link-product-add-cart">Xem Chi Tiết</a>
										</div>
									</div>
									<span class="product-new-top" style="background-color: green;">Mới</span>
								</div>
								<div class="item-info-product">
									<div class="info-product-price">
										<div class="grid_meta">
											<div class="product_price">
												<h4 style="padding-top:20px">
													<a href="{{ route('user.single')}}">Bố Già</a>
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
									<img src="{!! asset('user\images\Book\SACH_VAN_HOC\Trâm (Trọn Bộ 4 Cuốn) (Tái Bản 2020)\DD.png')!!}" class="img-fluid" alt="">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="{{ route('user.single')}}" class="link-product-add-cart">Xem Chi Tiết</a>
										</div>
									</div>
									<span class="product-new-top" style="background-color: green;">Mới</span>
								</div>
								<div class="item-info-product">
									<div class="info-product-price">
										<div class="grid_meta">
											<div class="product_price">
												<h4 style="padding-top:20px">
													<a href="{{ route('user.single')}}">Trâm</a>
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
					<div class="col-md-3">
						<div class="product-googles-info googles">
							<div class="men-pro-item">
								<div class="men-thumb-item">
									<img src="{!! asset('user/images/Book/SACH_KINH_TE/Phương pháp VPA - Kỹ thuật nhận diện Dòng/HDD.png')!!}" class="img-fluid" alt="">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="{{ route('user.single')}}" class="link-product-add-cart">Xem Chi Tiết</a>
										</div>
									</div>
									<span class="product-new-top" style="background-color: green;">Mới</span>
								</div>
								<div class="item-info-product">
									<div class="info-product-price">
										<div class="grid_meta">
											<div class="product_price">
												<h4 style="padding-top:20px">
													<a href="{{ route('user.single')}}">Kỹ Thuật Nhận Diện Dòng</a>
												</h4>
												<div class="grid-price mt-2">
													<span class="money ">78.000 VNĐ</span>
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
									<img src="{!! asset('user/images/Book/SACH_KINH_TE/Đừng Để Mất Bò - 7 Bước Quản Lý Cửa Hàng/HDD.png')!!}" class="img-fluid" alt="">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="{{ route('user.single')}}" class="link-product-add-cart">Xem Chi Tiết</a>
										</div>
									</div>
									<span class="product-new-top" style="background-color: green;">Mới</span>
								</div>
								<div class="item-info-product">
									<div class="info-product-price">
										<div class="grid_meta">
											<div class="product_price">
												<h4 style="padding-top:20px">
													<a href="{{ route('user.single')}}">7 Bước Quản Lý Cửa Hàng</a>
												</h4>
												<div class="grid-price mt-2">
													<span class="money ">95.000 VNĐ</span>
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
									<img src="{!! asset('user/images/Book/SACH_KINH_TE/Storytelling With Data - Kể Chuyện Thông Qua Dữ Liệu (Cuốn Cẩm Nang Hướng Dẫn Trực Quan Hóa Dữ Liệu)/HinhDD.png')!!}" class="img-fluid" alt="">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="{{ route('user.single')}}" class="link-product-add-cart">Xem Chi Tiết</a>
										</div>
									</div>
									<span class="product-new-top" style="background-color: green;">Mới</span>
								</div>
								<div class="item-info-product">
									<div class="info-product-price">
										<div class="grid_meta">
											<div class="product_price">
												<h4 style="padding-top:20px">
													<a href="{{ route('user.single')}}">Kể Chuyện Thông Qua Dữ Liệu</a>
												</h4>
												<div class="grid-price mt-2">
													<span class="money ">70.000 VNĐ</span>
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
									<img src="{!! asset('user/images/Book/SACH_KINH_TE/Nghệ Thuật đầu tư Dhandho - The Dhandho/HDD.png')!!}" class="img-fluid" alt="">
									<div class="men-cart-pro">
										<div class="inner-men-cart-pro">
											<a href="{{ route('user.single')}}" class="link-product-add-cart">Xem Chi Tiết</a>
										</div>
									</div>
									<span class="product-new-top" style="background-color: green;">Mới</span>
								</div>
								<div class="item-info-product">
									<div class="info-product-price">
										<div class="grid_meta">
											<div class="product_price">
												<h4 style="padding-top:20px">
													<a href="{{ route('user.single')}}">Nghệ Thuật Đầu Tư - Dhandho</a>
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