@extends('user.layout')
@section('content')
		<!-- banner -->
		<div class="banner_inner">
			<div class="services-breadcrumb">
				<div class="inner_breadcrumb">

					<ul class="short">
						<li>
							<a href="{{route('user.index')}}">Trang Chủ</a>
							<i>|</i>
						</li>
						<li>Sản Phẩm</li>
					</ul>
				</div>
			</div>
		</div>
		<!--//banner -->
		<!--/shop-->
		<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
			<div class="container-fluid">
				<div class="inner-sec-shop px-lg-4 px-3">
					<h4 class="tittle-w3layouts my-lg-4 mt-3">CÁC SẢN PHẨM SÁCH </h4>
					<div class="row">
						<!-- product left -->
						<div class="side-bar col-lg-3">
							<div class="search-hotel">
								<h3 class="agileits-sear-head">Tìm kiếm</h3>
								<form action="#" method="post">
										<input class="form-control" type="search" name="search" placeholder="Tìm kiếm" required="">
										<button class="btn1">
												<i class="fas fa-search"></i>
										</button>
										<div class="clearfix"> </div>
									</form>
							</div>
							<!-- price range -->
							<div class="range">
								<h3 class="agileits-sear-head">Giá khoảng</h3>
								<ul class="dropdown-menu6">
									<li>

										<div id="slider-range"></div>
										<input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />
									</li>
								</ul>
							</div>
							<!-- //price range -->
							<!--preference -->
							<div class="left-side">
								<h3 class="agileits-sear-head">Ngôn ngữ</h3>
								<ul>
									<li>
										<input type="checkbox" class="checked">
										<span class="span">Tiếng Việt</span>
									</li>
									<li>
										<input type="checkbox" class="checked">
										<span class="span">Song Ngữ Anh - Việt</span>
									</li>
									<li>
										<input type="checkbox" class="checked">
										<span class="span">Tiếng Anh</span>
									</li>

								</ul>
							</div>
							<!-- // preference -->
							<!-- discounts -->
							<div class="left-side">
								<h3 class="agileits-sear-head">Hình thức</h3>
								<ul>
									<li>
										<input type="checkbox" class="checked">
										<span class="span">Bìa Mềm</span>
									</li>
									<li>
										<input type="checkbox" class="checked">
										<span class="span">Bìa Cứng</span>
									</li>
									<li>
										<input type="checkbox" class="checked">
										<span class="span">Bộ Hộp</span>
									</li>
									<li>
										<input type="checkbox" class="checked">
										<span class="span">Sách Kèm Đĩa</span>
									</li>
			
								</ul>
							</div>
							<!-- //discounts -->
							<!-- reviews -->
							<div class="customer-rev left-side">
								<h3 class="agileits-sear-head">Đánh giá</h3>
								<ul>
									<li>
										<a href="#">
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<span>5.0</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star-o" aria-hidden="true"></i>
											<span>4.0</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star-half-o" aria-hidden="true"></i>
											<i class="fa fa-star-o" aria-hidden="true"></i>
											<span>3.5</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star-o" aria-hidden="true"></i>
											<i class="fa fa-star-o" aria-hidden="true"></i>
											<span>3.0</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star-half-o" aria-hidden="true"></i>
											<i class="fa fa-star-o" aria-hidden="true"></i>
											<i class="fa fa-star-o" aria-hidden="true"></i>
											<span>2.5</span>
										</a>
									</li>
								</ul>
							</div>
							<!-- //reviews -->
							<!-- deals -->
							<div class="deal-leftmk left-side">
								<h3 class="agileits-sear-head">Khám phá thêm</h3>
								<div class="special-sec1">
									<div class="img-deals">
										<img src="{!! asset('user\images\Book\SACH_KINH_TE\Đừng Bao Giờ Đi Ăn Một Mình (Tái Bản)\DD.png') !!}" alt="">
									</div>
									<div class="img-deal1">
										<h3>Đừng Bao Giờ Đi Ăn Một Mình (Tái Bản)</h3>
										<a href="{{ route('user.single')}}">73.700 ₫</a>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="special-sec1">
									<div class="col-xs-4 img-deals">
										<img src="{!! asset('user\images\Book\SACH_KINH_TE\Đừng Để Mất Bò - 7 Bước Quản Lý Cửa Hàng\HDD.png') !!}" alt="">
									</div>
									<div class="col-xs-8 img-deal1">
										<h3>Đừng Để Mất Bò - 7 Bước Quản Lý Cửa Hàng Hiệu Quả Và Chống Thất Thoát</h3>
										<a href="{{ route('user.single')}}">149.000 VNĐ</a>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="special-sec1">
										<div class="col-xs-4 img-deals">
											<img src="{!! asset('user\images\Book\SACH_KINH_TE\How Money Works - Hiểu Hết Về Tiền\DD.png') !!}" alt="">
										</div>
										<div class="col-xs-8 img-deal1">
											<h3>How Money Works - Hiểu Hết Về Tiền</h3>
											<a href="{{ route('user.single')}}">223.700 VNĐ</a>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="special-sec1">
											<div class="col-xs-4 img-deals">
												<img src="{!! asset('user\images\Book\SACH_KINH_TE\Nghệ Thuật đầu tư Dhandho - The Dhandho\HDD.png') !!}" alt="">
											</div>
											<div class="col-xs-8 img-deal1">
												<h3>Nghệ Thuật đầu tư Dhandho - The Dhandho</h3>
												<a href="{{ route('user.single')}}">238.000 VNĐ</a>
											</div>
											<div class="clearfix"></div>
										</div>
							</div>
							<!-- //deals -->
						</div>
						<!-- //product left -->
						<!--/product right-->
						<div class="left-ads-display col-lg-9">
							<div class="wrapper_top_shop">
								<div class="row">
										<div class="col-md-6 shop_left">
												<img src="{!! asset('user\images\Book\SACH_KINH_TE\banner_Sach_kinh_te1.png') !!}" alt="">
												
										</div>
										<div class="col-md-6 shop_right">
												<img src="{!! asset('user\images\Book\SACH_KINH_TE\banner_Sach_kinh_te1.png') !!}" alt="">
									
											</div>
						
								</div>
								<div class="row">
									<!-- /womens -->
									<div class="col-md-3 product-men women_two shop-gd">
										<div class="product-googles-info googles">
											<div class="men-pro-item">
												<div class="men-thumb-item">
													<img src="{!! asset('user\images\Book\SACH_KINH_TE\Nhà Đầu Tư Thông Minh (Tái Bản 2020)\HDD.png') !!}" class="img-fluid" alt="">
													<div class="men-cart-pro">
														<div class="inner-men-cart-pro">
															<a href="{{ route('user.single')}}" class="link-product-add-cart">Quick View</a>
														</div>
													</div>
													<span class="product-new-top">New</span>
												</div>
												<div class="item-info-product">
													<div class="info-product-price">
														<div class="grid_meta">
															<div class="product_price">
																<h4>
																	<a href="{{ route('user.single')}}">Nhà Đầu Tư Thông Minh (Tái Bản 2020)</a>
																</h4>
																<div class="grid-price mt-2">
																	<span class="money ">149.200 VNĐ</span>
																</div>
															</div>
															<ul class="stars">
																<li>
																	<a href="#">
																		<i class="fa fa-star" aria-hidden="true"></i>
																	</a>
																</li>
																<li>
																	<a href="#">
																		<i class="fa fa-star" aria-hidden="true"></i>
																	</a>
																</li>
																<li>
																	<a href="#">
																		<i class="fa fa-star" aria-hidden="true"></i>
																	</a>
																</li>
																<li>
																	<a href="#">
																		<i class="fa fa-star" aria-hidden="true"></i>
																	</a>
																</li>
																<li>
																	<a href="#">
																		<i class="fa fa-star-half-o" aria-hidden="true"></i>
																	</a>
																</li>
															</ul>
														</div>
														<div class="googles single-item hvr-outline-out">
															<form action="#" method="post">
																<input type="hidden" name="cmd" value="_cart">
																<input type="hidden" name="add" value="1">
																<input type="hidden" name="googles_item" value="Farenheit">
																<input type="hidden" name="amount" value="575.00">
																<button type="submit" class="googles-cart pgoogles-cart">
																	<i class="fas fa-cart-plus"></i>
																</button>
															</form>

														</div>
													</div>
													<div class="clearfix"></div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-3 product-men women_two shop-gd">
										<div class="product-googles-info googles">
											<div class="men-pro-item">
												<div class="men-thumb-item">
													<img src="{!! asset('user\images\Book\SACH_KINH_TE\Phân Tích Chứng Khoán\DD.png') !!}" class="img-fluid" alt="">
													<div class="men-cart-pro">
														<div class="inner-men-cart-pro">
															<a href="{{ route('user.single')}}" class="link-product-add-cart">Quick View</a>
														</div>
													</div>
													<span class="product-new-top">New</span>
												</div>
												<div class="item-info-product">

													<div class="info-product-price">
														<div class="grid_meta">
															<div class="product_price">
																<h4>
																	<a href="{{ route('user.single')}}">Phân Tích Chứng Khoán</a>
																</h4>
																<div class="grid-price mt-2">
																	<span class="money ">334.200 VNĐ</span>
																</div>
															</div>
															<ul class="stars">
																<li>
																	<a href="#">
																		<i class="fa fa-star" aria-hidden="true"></i>
																	</a>
																</li>
																<li>
																	<a href="#">
																		<i class="fa fa-star" aria-hidden="true"></i>
																	</a>
																</li>
																<li>
																	<a href="#">
																		<i class="fa fa-star" aria-hidden="true"></i>
																	</a>
																</li>
																<li>
																	<a href="#">
																		<i class="fa fa-star-half-o" aria-hidden="true"></i>
																	</a>
																</li>
																<li>
																	<a href="#">
																		<i class="fa fa-star-o" aria-hidden="true"></i>
																	</a>
																</li>
															</ul>
														</div>
														<div class="googles single-item hvr-outline-out">
															<form action="#" method="post">
																<input type="hidden" name="cmd" value="_cart">
																<input type="hidden" name="add" value="1">
																<input type="hidden" name="googles_item" value="Opium (Grey)">
																<input type="hidden" name="amount" value="325.00">
																<button type="submit" class="googles-cart pgoogles-cart">
																	<i class="fas fa-cart-plus"></i>
																</button>

															</form>

														</div>
													</div>
													<div class="clearfix"></div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-3 product-men women_two shop-gd">
										<div class="product-googles-info googles">
											<div class="men-pro-item">
												<div class="men-thumb-item">
													<img src="{!! asset('user\images\Book\SACH_KINH_TE\Phương pháp VPA - Kỹ thuật nhận diện Dòng\HDD.png') !!}" class="img-fluid" alt="">
													<div class="men-cart-pro">
														<div class="inner-men-cart-pro">
															<a href="{{ route('user.single')}}" class="link-product-add-cart">Quick View</a>
														</div>
													</div>
													<span class="product-new-top">New</span>
												</div>
												<div class="item-info-product">

													<div class="info-product-price">
														<div class="grid_meta">
															<div class="product_price">
																<h4>
																	<a href="{{ route('user.single')}}">Phương pháp VPA - Kỹ thuật nhận diện Dòng Tiền Thông Minh</a>
																</h4>
																<div class="grid-price mt-2">
																	<span class="money ">357.000 VNĐ</span>
																</div>
															</div>
															<ul class="stars">
																<li>
																	<a href="#">
																		<i class="fa fa-star" aria-hidden="true"></i>
																	</a>
																</li>
																<li>
																	<a href="#">
																		<i class="fa fa-star" aria-hidden="true"></i>
																	</a>
																</li>
																<li>
																	<a href="#">
																		<i class="fa fa-star" aria-hidden="true"></i>
																	</a>
																</li>
																<li>
																	<a href="#">
																		<i class="fa fa-star" aria-hidden="true"></i>
																	</a>
																</li>
																<li>
																	<a href="#">
																		<i class="fa fa-star-half-o" aria-hidden="true"></i>
																	</a>
																</li>
															</ul>
														</div>
														<div class="googles single-item hvr-outline-out">
															<form action="#" method="post">
																<input type="hidden" name="cmd" value="_cart">
																<input type="hidden" name="add" value="1">
																<input type="hidden" name="googles_item" value="Kenneth Cole">
																<input type="hidden" name="amount" value="575.00">
																<button type="submit" class="googles-cart pgoogles-cart">
																	<i class="fas fa-cart-plus"></i>
																</button>
															</form>

														</div>
													</div>
													<div class="clearfix"></div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-3 product-men women_two shop-gd">
										<div class="product-googles-info googles">
											<div class="men-pro-item">
												<div class="men-thumb-item">
													<img src="{!! asset('user\images\Book\SACH_KINH_TE\Siêu Cò – How To Be A Power Connector\DD.png') !!}" class="img-fluid" alt="">
													<div class="men-cart-pro">
														<div class="inner-men-cart-pro">
															<a href="{{ route('user.single')}}" class="link-product-add-cart">Quick View</a>
														</div>
													</div>
													<span class="product-new-top">New</span>
												</div>
												<div class="item-info-product">

													<div class="info-product-price">
														<div class="grid_meta">
															<div class="product_price">
																<h4>
																	<a href="{{ route('user.single')}}">Siêu Cò – How To Be A Power Connector </a>
																</h4>
																<div class="grid-price mt-2">
																	<span class="money ">249.000 VNĐ</span>
																</div>
															</div>
															<ul class="stars">
																<li>
																	<a href="#">
																		<i class="fa fa-star" aria-hidden="true"></i>
																	</a>
																</li>
																<li>
																	<a href="#">
																		<i class="fa fa-star" aria-hidden="true"></i>
																	</a>
																</li>
																<li>
																	<a href="#">
																		<i class="fa fa-star" aria-hidden="true"></i>
																	</a>
																</li>
																<li>
																	<a href="#">
																		<i class="fa fa-star-half-o" aria-hidden="true"></i>
																	</a>
																</li>
																<li>
																	<a href="#">
																		<i class="fa fa-star-o" aria-hidden="true"></i>
																	</a>
																</li>
															</ul>
														</div>
														<div class="googles single-item hvr-outline-out">
															<form action="#" method="post">
																<input type="hidden" name="cmd" value="_cart">
																<input type="hidden" name="add" value="1">
																<input type="hidden" name="googles_item" value="Farenheit Oval">
																<input type="hidden" name="amount" value="325.00">
																<button type="submit" class="googles-cart pgoogles-cart">
																	<i class="fas fa-cart-plus"></i>
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
								<div class="row my-lg-3 my-0">
										<!-- /womens -->
										<div class="col-md-3 product-men women_two shop-gd">
											<div class="product-googles-info googles">
												<div class="men-pro-item">
													<div class="men-thumb-item">
														<img src="{!! asset('user\images\Book\SACH_KINH_TE\Storytelling With Data - Kể Chuyện Thông Qua Dữ Liệu (Cuốn Cẩm Nang Hướng Dẫn Trực Quan Hóa Dữ Liệu)\HinhDD.png') !!}" class="img-fluid" alt="">
														<div class="men-cart-pro">
															<div class="inner-men-cart-pro">
																<a href="{{ route('user.single')}}" class="link-product-add-cart">Quick View</a>
															</div>
														</div>
														<span class="product-new-top">New</span>
													</div>
													<div class="item-info-product">
					
														<div class="info-product-price">
															<div class="grid_meta">
																<div class="product_price">
																	<h4>
																		<a href="{{ route('user.single')}}">Storytelling With Data - Kể Chuyện Thông Qua Dữ Liệu</a>
																	</h4>
																	<div class="grid-price mt-2">
																		<span class="money ">270.900 VNĐ</span>
																	</div>
																</div>
																<ul class="stars">
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star-half-o" aria-hidden="true"></i>
																		</a>
																	</li>
																</ul>
															</div>
															<div class="googles single-item hvr-outline-out">
																<form action="#" method="post">
																	<input type="hidden" name="cmd" value="_cart">
																	<input type="hidden" name="add" value="1">
																	<input type="hidden" name="googles_item" value="Aislin Wayfarer">
																	<input type="hidden" name="amount" value="775.00">
																	<button type="submit" class="googles-cart pgoogles-cart">
																		<i class="fas fa-cart-plus"></i>
																	</button>
																</form>
					
															</div>
														</div>
														<div class="clearfix"></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-3 product-men women_two shop-gd">
											<div class="product-googles-info googles">
												<div class="men-pro-item">
													<div class="men-thumb-item">
														<img src="{!! asset('user\images\Book\SACH_KINH_TE\SuMenhKhoiNghiep\HinhDD.png') !!}" class="img-fluid" alt="">
														<div class="men-cart-pro">
															<div class="inner-men-cart-pro">
																<a href="{{ route('user.single')}}" class="link-product-add-cart">Quick View</a>
															</div>
														</div>
														<span class="product-new-top">New</span>
													</div>
													<div class="item-info-product">
					
														<div class="info-product-price">
															<div class="grid_meta">
																<div class="product_price">
																	<h4>
																		<a href="{{ route('user.single')}}">Sứ Mệnh Khởi Nghiệp </a>
																	</h4>
																	<div class="grid-price mt-2">
																		<span class="money ">399.000 VNĐ</span>
																	</div>
																</div>
																<ul class="stars">
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star-half-o" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star-o" aria-hidden="true"></i>
																		</a>
																	</li>
																</ul>
															</div>
															<div class="googles single-item hvr-outline-out">
																<form action="#" method="post">
																	<input type="hidden" name="cmd" value="_cart">
																	<input type="hidden" name="add" value="1">
																	<input type="hidden" name="googles_item" value="Azmani Round">
																	<input type="hidden" name="amount" value="725.00">
																	<button type="submit" class="googles-cart pgoogles-cart">
																		<i class="fas fa-cart-plus"></i>
																	</button>
																</form>
															</div>
														</div>
														<div class="clearfix"></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-3 product-men women_two shop-gd">
											<div class="product-googles-info googles">
												<div class="men-pro-item">
													<div class="men-thumb-item">
														<img src="{!! asset('user\images\Book\SACH_KINH_TE\Tư Duy Nhanh Và Chậm\DD.png') !!}" class="img-fluid" alt="">
														<div class="men-cart-pro">
															<div class="inner-men-cart-pro">
																<a href="{{ route('user.single')}}" class="link-product-add-cart">Quick View</a>
															</div>
														</div>
														<span class="product-new-top">New</span>
													</div>
													<div class="item-info-product">
					
														<div class="info-product-price">
															<div class="grid_meta">
																<div class="product_price">
																	<h4>
																		<a href="{{ route('user.single')}}">Tư Duy Nhanh Và Chậm (Tái Bản 2019)</a>
																	</h4>
																	<div class="grid-price mt-2">
																		<span class="money ">239.000 VNĐ</span>
																	</div>
																</div>
																<ul class="stars">
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star-half-o" aria-hidden="true"></i>
																		</a>
																	</li>
																</ul>
															</div>
															<div class="googles single-item hvr-outline-out">
																<form action="#" method="post">
																	<input type="hidden" name="cmd" value="_cart">
																	<input type="hidden" name="add" value="1">
																	<input type="hidden" name="googles_item" value="Farenheit Wayfarer">
																	<input type="hidden" name="amount" value="475.00">
																	<button type="submit" class="googles-cart pgoogles-cart">
																		<i class="fas fa-cart-plus"></i>
																	</button>
																</form>
					
															</div>
														</div>
														<div class="clearfix"></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-md-3 product-men women_two shop-gd">
											<div class="product-googles-info googles">
												<div class="men-pro-item">
													<div class="men-thumb-item">
														<img src="{!! asset('user\images\Book\SACH_KINH_TE\SuMenhKhoiNghiep\HinhDD.png') !!}" class="img-fluid" alt="">
														<div class="men-cart-pro">
															<div class="inner-men-cart-pro">
																<a href="{{ route('user.single')}}" class="link-product-add-cart">Quick View</a>
															</div>
														</div>
														<span class="product-new-top">New</span>
													</div>
													<div class="item-info-product">
					
														<div class="info-product-price">
															<div class="grid_meta">
																<div class="product_price">
																	<h4>
																		<a href="{{ route('user.single')}}">Sứ Mệnh Khởi Nghiệp </a>
																	</h4>
																	<div class="grid-price mt-2">
																		<span class="money ">825.00 VNĐ</span>
																	</div>
																</div>
																<ul class="stars">
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star-half-o" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star-o" aria-hidden="true"></i>
																		</a>
																	</li>
																</ul>
															</div>
															<div class="googles single-item hvr-outline-out">
																<form action="#" method="post">
																	<input type="hidden" name="cmd" value="_cart">
																	<input type="hidden" name="add" value="1">
																	<input type="hidden" name="googles_item" value="Fossil Wayfarer">
																	<input type="hidden" name="amount" value="825.00">
																	<button type="submit" class="googles-cart pgoogles-cart">
																		<i class="fas fa-cart-plus"></i>
																	</button>
																</form>
					
															</div>
														</div>
														<div class="clearfix"></div>
													</div>
												</div>
											</div>
										</div>
										<!-- /mens -->
									</div>
									<div class="row">
											<!-- /womens -->
											<div class="col-md-3 product-men women_two shop-gd">
												<div class="product-googles-info googles">
													<div class="men-pro-item">
														<div class="men-thumb-item">
															<img src="{!! asset('user\images\Book\SACH_KINH_TE\Nhà Đầu Tư Thông Minh (Tái Bản 2020)\HDD.png') !!}" class="img-fluid" alt="">
															<div class="men-cart-pro">
																<div class="inner-men-cart-pro">
																	<a href="{{ route('user.single')}}" class="link-product-add-cart">Quick View</a>
																</div>
															</div>
															<span class="product-new-top">New</span>
														</div>
														<div class="item-info-product">
															<div class="info-product-price">
																<div class="grid_meta">
																	<div class="product_price">
																		<h4>
																			<a href="{{ route('user.single')}}">Nhà Đầu Tư Thông Minh (Tái Bản 2020)</a>
																		</h4>
																		<div class="grid-price mt-2">
																			<span class="money ">575.00 VNĐ</span>
																		</div>
																	</div>
																	<ul class="stars">
																		<li>
																			<a href="#">
																				<i class="fa fa-star" aria-hidden="true"></i>
																			</a>
																		</li>
																		<li>
																			<a href="#">
																				<i class="fa fa-star" aria-hidden="true"></i>
																			</a>
																		</li>
																		<li>
																			<a href="#">
																				<i class="fa fa-star" aria-hidden="true"></i>
																			</a>
																		</li>
																		<li>
																			<a href="#">
																				<i class="fa fa-star" aria-hidden="true"></i>
																			</a>
																		</li>
																		<li>
																			<a href="#">
																				<i class="fa fa-star-half-o" aria-hidden="true"></i>
																			</a>
																		</li>
																	</ul>
																</div>
																<div class="googles single-item hvr-outline-out">
																	<form action="#" method="post">
																		<input type="hidden" name="cmd" value="_cart">
																		<input type="hidden" name="add" value="1">
																		<input type="hidden" name="googles_item" value="Farenheit">
																		<input type="hidden" name="amount" value="575.00">
																		<button type="submit" class="googles-cart pgoogles-cart">
																			<i class="fas fa-cart-plus"></i>
																		</button>
																	</form>
		
																</div>
															</div>
															<div class="clearfix"></div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-3 product-men women_two shop-gd">
												<div class="product-googles-info googles">
													<div class="men-pro-item">
														<div class="men-thumb-item">
															<img src="{!! asset('user\images\Book\SACH_KINH_TE\Phương pháp VPA - Kỹ thuật nhận diện Dòng\HDD.png') !!}" class="img-fluid" alt="">
															<div class="men-cart-pro">
																<div class="inner-men-cart-pro">
																	<a href="{{ route('user.single')}}" class="link-product-add-cart">Quick View</a>
																</div>
															</div>
															<span class="product-new-top">New</span>
														</div>
														<div class="item-info-product">
		
															<div class="info-product-price">
																<div class="grid_meta">
																	<div class="product_price">
																		<h4>
																			<a href="{{ route('user.single')}}">Phương pháp VPA - Kỹ thuật nhận diện Dòng Tiền Thông Minh</a>
																		</h4>
																		<div class="grid-price mt-2">
																			<span class="money ">357.000 VNĐ</span>
																		</div>
																	</div>
																	<ul class="stars">
																		<li>
																			<a href="#">
																				<i class="fa fa-star" aria-hidden="true"></i>
																			</a>
																		</li>
																		<li>
																			<a href="#">
																				<i class="fa fa-star" aria-hidden="true"></i>
																			</a>
																		</li>
																		<li>
																			<a href="#">
																				<i class="fa fa-star" aria-hidden="true"></i>
																			</a>
																		</li>
																		<li>
																			<a href="#">
																				<i class="fa fa-star-half-o" aria-hidden="true"></i>
																			</a>
																		</li>
																		<li>
																			<a href="#">
																				<i class="fa fa-star-o" aria-hidden="true"></i>
																			</a>
																		</li>
																	</ul>
																</div>
																<div class="googles single-item hvr-outline-out">
																	<form action="#" method="post">
																		<input type="hidden" name="cmd" value="_cart">
																		<input type="hidden" name="add" value="1">
																		<input type="hidden" name="googles_item" value="Opium (Grey)">
																		<input type="hidden" name="amount" value="325.00">
																		<button type="submit" class="googles-cart pgoogles-cart">
																			<i class="fas fa-cart-plus"></i>
																		</button>
																	</form>
		
																</div>
															</div>
															<div class="clearfix"></div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-3 product-men women_two shop-gd">
												<div class="product-googles-info googles">
													<div class="men-pro-item">
														<div class="men-thumb-item">
															<img src="{!! asset('user\images\Book\SACH_KINH_TE\Tư Duy Nhanh Và Chậm\DD.png') !!}" class="img-fluid" alt="">
															<div class="men-cart-pro">
																<div class="inner-men-cart-pro">
																	<a href="{{ route('user.single')}}" class="link-product-add-cart">Quick View</a>
																</div>
															</div>
															<span class="product-new-top">New</span>
														</div>
														<div class="item-info-product">
		
															<div class="info-product-price">
																<div class="grid_meta">
																	<div class="product_price">
																		<h4>
																			<a href="{{ route('user.single')}}">Tư Duy Nhanh Và Chậm (Tái Bản 2019)</a>
																		</h4>
																		<div class="grid-price mt-2">
																			<span class="money ">575.00 VNĐ</span>
																		</div>
																	</div>
																	<ul class="stars">
																		<li>
																			<a href="#">
																				<i class="fa fa-star" aria-hidden="true"></i>
																			</a>
																		</li>
																		<li>
																			<a href="#">
																				<i class="fa fa-star" aria-hidden="true"></i>
																			</a>
																		</li>
																		<li>
																			<a href="#">
																				<i class="fa fa-star" aria-hidden="true"></i>
																			</a>
																		</li>
																		<li>
																			<a href="#">
																				<i class="fa fa-star" aria-hidden="true"></i>
																			</a>
																		</li>
																		<li>
																			<a href="#">
																				<i class="fa fa-star-half-o" aria-hidden="true"></i>
																			</a>
																		</li>
																	</ul>
																</div>
																<div class="googles single-item hvr-outline-out">
																	<form action="#" method="post">
																		<input type="hidden" name="cmd" value="_cart">
																		<input type="hidden" name="add" value="1">
																		<input type="hidden" name="googles_item" value="Kenneth Cole">
																		<input type="hidden" name="amount" value="575.00">
																		<button type="submit" class="googles-cart pgoogles-cart">
																			<i class="fas fa-cart-plus"></i>
																		</button>
																	</form>
		
																</div>
															</div>
															<div class="clearfix"></div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-md-3 product-men women_two shop-gd">
												<div class="product-googles-info googles">
													<div class="men-pro-item">
														<div class="men-thumb-item">
															<img src="{!! asset('user\images\Book\SACH_KINH_TE\Nghệ Thuật đầu tư Dhandho - The Dhandho\HDD.png') !!}" class="img-fluid" alt="">
															<div class="men-cart-pro">
																<div class="inner-men-cart-pro">
																	<a href="{{ route('user.single')}}" class="link-product-add-cart">Quick View</a>
																</div>
															</div>
															<span class="product-new-top">New</span>
														</div>
														<div class="item-info-product">
		
															<div class="info-product-price">
																<div class="grid_meta">
																	<div class="product_price">
																		<h4>
																			<a href="{{ route('user.single')}}">Nghệ Thuật đầu tư Dhandho - The Dhandho</a>
																		</h4>
																		<div class="grid-price mt-2">
																			<span class="money ">325.00 VNĐ</span>
																		</div>
																	</div>
																	<ul class="stars">
																		<li>
																			<a href="#">
																				<i class="fa fa-star" aria-hidden="true"></i>
																			</a>
																		</li>
																		<li>
																			<a href="#">
																				<i class="fa fa-star" aria-hidden="true"></i>
																			</a>
																		</li>
																		<li>
																			<a href="#">
																				<i class="fa fa-star" aria-hidden="true"></i>
																			</a>
																		</li>
																		<li>
																			<a href="#">
																				<i class="fa fa-star-half-o" aria-hidden="true"></i>
																			</a>
																		</li>
																		<li>
																			<a href="#">
																				<i class="fa fa-star-o" aria-hidden="true"></i>
																			</a>
																		</li>
																	</ul>
																</div>
																<div class="googles single-item hvr-outline-out">
																	<form action="#" method="post">
																		<input type="hidden" name="cmd" value="_cart">
																		<input type="hidden" name="add" value="1">
																		<input type="hidden" name="googles_item" value="Farenheit Oval">
																		<input type="hidden" name="amount" value="325.00">
																		<button type="submit" class="googles-cart pgoogles-cart">
																			<i class="fas fa-cart-plus"></i>
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
						<!--//product right-->
					</div>
					<!--/slide-->
				<div class="slider-img mid-sec mt-lg-5 mt-2">
						<!--//banner-sec-->
						<h4 class="tittle-w3layouts text-center my-lg-4 my-3">SẢN PHẨM NỔI BẬT</h4>
						<div class="mid-slider">
							<div class="owl-carousel owl-theme row">
								<div class="item">
									<div class="gd-box-info text-center">
										<div class="product-men women_two bot-gd">
											<div class="product-googles-info slide-img googles">
												<div class="men-pro-item">
													<div class="men-thumb-item">
														<img src="{!! asset('user\images\Book\SACH_KINH_TE\Tư Duy Nhanh Và Chậm\DD.png') !!}" class="img-fluid" alt="">
														<div class="men-cart-pro">
															<div class="inner-men-cart-pro">
																<a href="{{ route('user.single')}}" class="link-product-add-cart">Quick View</a>
															</div>
														</div>
														<span class="product-new-top">New</span>
													</div>
													<div class="item-info-product">
	
														<div class="info-product-price">
															<div class="grid_meta">
																<div class="product_price">
																	<h4>
																		<a href="{{ route('user.single')}}">Tư Duy Nhanh Và Chậm (Tái Bản 2019) </a>
																	</h4>
																	<div class="grid-price mt-2">
																		<span class="money ">325.00 VNĐ</span>
																	</div>
																</div>
																<ul class="stars">
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star-half-o" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star-o" aria-hidden="true"></i>
																		</a>
																	</li>
																</ul>
															</div>
															<div class="googles single-item hvr-outline-out">
																<form action="#" method="post">
																	<input type="hidden" name="cmd" value="_cart">
																	<input type="hidden" name="add" value="1">
																	<input type="hidden" name="googles_item" value="Fastrack Aviator">
																	<input type="hidden" name="amount" value="325.00">
																	<button type="submit" class="googles-cart pgoogles-cart">
																		<i class="fas fa-cart-plus"></i>
																	</button>

																</form>
	
															</div>
														</div>
	
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="gd-box-info text-center">
										<div class="product-men women_two bot-gd">
											<div class="product-googles-info slide-img googles">
												<div class="men-pro-item">
													<div class="men-thumb-item">
														<img src="{!! asset('user\images\Book\SACH_KINH_TE\SuMenhKhoiNghiep\HinhDD.png') !!}" class="img-fluid" alt="">
														<div class="men-cart-pro">
															<div class="inner-men-cart-pro">
																<a href="{{ route('user.single')}}" class="link-product-add-cart">Quick View</a>
															</div>
														</div>
														<span class="product-new-top">New</span>
													</div>
													<div class="item-info-product">
	
														<div class="info-product-price">
															<div class="grid_meta">
																<div class="product_price">
																	<h4>
																		<a href="{{ route('user.single')}}">Sứ Mệnh Khởi Nghiệp </a>
																	</h4>
																	<div class="grid-price mt-2">
																		<span class="money ">425.00 VNĐ </span>
																	</div>
																</div>
																<ul class="stars">
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star-half-o" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star-o" aria-hidden="true"></i>
																		</a>
																	</li>
																</ul>
															</div>
															<div class="googles single-item hvr-outline-out">
																<form action="#" method="post">
																	<input type="hidden" name="cmd" value="_cart">
																	<input type="hidden" name="add" value="1">
																	<input type="hidden" name="googles_item" value="MARTIN Aviator">
																	<input type="hidden" name="amount" value="425.00">
																	<button type="submit" class="googles-cart pgoogles-cart">
																		<i class="fas fa-cart-plus"></i>
																	</button>
																</form>
	
															</div>
														</div>
	
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="gd-box-info text-center">
										<div class="product-men women_two bot-gd">
											<div class="product-googles-info slide-img googles">
												<div class="men-pro-item">
													<div class="men-thumb-item">
														<img src="{!! asset('user\images\Book\SACH_KINH_TE\Storytelling With Data - Kể Chuyện Thông Qua Dữ Liệu (Cuốn Cẩm Nang Hướng Dẫn Trực Quan Hóa Dữ Liệu)\HinhDD.png') !!}" class="img-fluid" alt="">
														<div class="men-cart-pro">
															<div class="inner-men-cart-pro">
																<a href="{{ route('user.single')}}" class="link-product-add-cart">Quick View</a>
															</div>
														</div>
														<span class="product-new-top">New</span>
													</div>
													<div class="item-info-product">
	
														<div class="info-product-price">
															<div class="grid_meta">
																<div class="product_price">
																	<h4>
																		<a href="{{ route('user.single')}}">Storytelling With Data - Kể Chuyện Thông Qua Dữ Liệu</a>
																	</h4>
																	<div class="grid-price mt-2">
																		<span class="money ">425.00 VNĐ</span>
																	</div>
																</div>
																<ul class="stars">
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star-half-o" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star-o" aria-hidden="true"></i>
																		</a>
																	</li>
																</ul>
															</div>
															<div class="googles single-item hvr-outline-out">
																<form action="#" method="post">
																	<input type="hidden" name="cmd" value="_cart">
																	<input type="hidden" name="add" value="1">
																	<input type="hidden" name="googles_item" value="Royal Son Aviator">
																	<input type="hidden" name="amount" value="425.00">
																	<button type="submit" class="googles-cart pgoogles-cart">
																		<i class="fas fa-cart-plus"></i>
																	</button>
																</form>
	
															</div>
														</div>
	
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="gd-box-info text-center">
										<div class="product-men women_two bot-gd">
											<div class="product-googles-info slide-img googles">
												<div class="men-pro-item">
													<div class="men-thumb-item">
														<img src="{!! asset('user\images\Book\SACH_KINH_TE\Siêu Cò – How To Be A Power Connector\DD.png') !!}" class="img-fluid" alt="">
														<div class="men-cart-pro">
															<div class="inner-men-cart-pro">
																<a href="{{ route('user.single')}}" class="link-product-add-cart">Quick View</a>
															</div>
														</div>
														<span class="product-new-top">New</span>
													</div>
													<div class="item-info-product">
	
														<div class="info-product-price">
															<div class="grid_meta">
																<div class="product_price">
																	<h4>
																		<a href="{{ route('user.single')}}">Siêu Cò – How To Be A Power Connector </a>
																	</h4>
																	<div class="grid-price mt-2">
																		<span class="money ">281.00 VNĐ</span>
																	</div>
																</div>
																<ul class="stars">
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star-half-o" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star-o" aria-hidden="true"></i>
																		</a>
																	</li>
																</ul>
															</div>
															<div class="googles single-item hvr-outline-out">
																<form action="#" method="post">
																	<input type="hidden" name="cmd" value="_cart">
																	<input type="hidden" name="add" value="1">
																	<input type="hidden" name="googles_item" value="Irayz Butterfly">
																	<input type="hidden" name="amount" value="281.00">
																	<button type="submit" class="googles-cart pgoogles-cart">
																		<i class="fas fa-cart-plus"></i>
																	</button>
																</form>
	
															</div>
														</div>
	
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="gd-box-info text-center">
										<div class="product-men women_two bot-gd">
											<div class="product-googles-info slide-img googles">
												<div class="men-pro-item">
													<div class="men-thumb-item">
														<img src="{!! asset('user\images\Book\SACH_KINH_TE\Đừng Bao Giờ Đi Ăn Một Mình (Tái Bản)\DD.png') !!}" class="img-fluid" alt="">
														<div class="men-cart-pro">
															<div class="inner-men-cart-pro">
																<a href="{{ route('user.single')}}" class="link-product-add-cart">Quick View</a>
															</div>
														</div>
														<span class="product-new-top">New</span>
													</div>
													<div class="item-info-product">
	
														<div class="info-product-price">
															<div class="grid_meta">
																<div class="product_price">
																	<h4>
																		<a href="{{ route('user.single')}}">Đừng Bao Giờ Đi Ăn Một Mình (Tái Bản) </a>
																	</h4>
																	<div class="grid-price mt-2">
																		<span class="money ">525.00 VNĐ</span>
																	</div>
																</div>
																<ul class="stars">
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star-half-o" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star-o" aria-hidden="true"></i>
																		</a>
																	</li>
																</ul>
															</div>
															<div class="googles single-item hvr-outline-out">
																<form action="#" method="post">
																	<input type="hidden" name="cmd" value="_cart">
																	<input type="hidden" name="add" value="1">
																	<input type="hidden" name="googles_item" value="Jerry Rectangular ">
																	<input type="hidden" name="amount" value="525.00">
																	<button type="submit" class="googles-cart pgoogles-cart">
																		<i class="fas fa-cart-plus"></i>
																	</button>
																</form>
	
															</div>
														</div>
	
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="gd-box-info text-center">
										<div class="product-men women_two bot-gd">
											<div class="product-googles-info slide-img googles">
												<div class="men-pro-item">
													<div class="men-thumb-item">
														<img src="{!! asset('user\images\Book\SACH_KINH_TE\Đừng Để Mất Bò - 7 Bước Quản Lý Cửa Hàng\HDD.png') !!}" class="img-fluid" alt="">
														<div class="men-cart-pro">
															<div class="inner-men-cart-pro">
																<a href="{{ route('user.single')}}" class="link-product-add-cart">Quick View</a>
															</div>
														</div>
														<span class="product-new-top">New</span>
													</div>
													<div class="item-info-product">
	
														<div class="info-product-price">
															<div class="grid_meta">
																<div class="product_price">
																	<h4>
																		<a href="{{ route('user.single')}}">Đừng Để Mất Bò - 7 Bước Quản Lý Cửa Hàng </a>
																	</h4>
																	<div class="grid-price mt-2">
																		<span class="money ">325.00 VNĐ</span>
																	</div>
																</div>
																<ul class="stars">
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star-half-o" aria-hidden="true"></i>
																		</a>
																	</li>
																	<li>
																		<a href="#">
																			<i class="fa fa-star-o" aria-hidden="true"></i>
																		</a>
																	</li>
																</ul>
															</div>
															<div class="googles single-item hvr-outline-out">
																<form action="#" method="post">
																	<input type="hidden" name="cmd" value="_cart">
																	<input type="hidden" name="add" value="1">
																	<input type="hidden" name="googles_item" value="Herdy Wayfarer">
																	<input type="hidden" name="amount" value="325.00">
																	<button type="submit" class="googles-cart pgoogles-cart">
																		<i class="fas fa-cart-plus"></i>
																	</button>
																</form>
	
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
					<!--//slider-->
				</div>
			</div>
		</section>
        @stop
		