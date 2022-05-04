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
								<div class="loc-price-button">
									<button class="btn-search-price">Lọc</button>
							    </div>
							</div>
							
							<!-- //price range -->
							<!--preference -->
							<!-- <div class="left-side">
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
							</div> -->
							<!-- // preference -->
							<!-- discounts -->
							<!-- <div class="left-side">
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
							</div> -->
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
										<a href="{{ route('user.single')}}">149.000 ₫</a>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="special-sec1">
										<div class="col-xs-4 img-deals">
											<img src="{!! asset('user\images\Book\SACH_KINH_TE\How Money Works - Hiểu Hết Về Tiền\DD.png') !!}" alt="">
										</div>
										<div class="col-xs-8 img-deal1">
											<h3>How Money Works - Hiểu Hết Về Tiền</h3>
											<a href="{{ route('user.single')}}">223.700 ₫</a>
										</div>
										<div class="clearfix"></div>
									</div>
									<div class="special-sec1">
											<div class="col-xs-4 img-deals">
												<img src="{!! asset('user\images\Book\SACH_KINH_TE\Nghệ Thuật đầu tư Dhandho - The Dhandho\HDD.png') !!}" alt="">
											</div>
											<div class="col-xs-8 img-deal1">
												<h3>Nghệ Thuật đầu tư Dhandho - The Dhandho</h3>
												<a href="{{ route('user.single')}}">238.000 ₫</a>
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
									@foreach($sach as $books)
									<div class="col-md-3 product-men women_two shop-gd">
										<div class="product-googles-info googles">
											<div class="men-pro-item">
												<div class="men-thumb-item">
													<img src="{!! asset('image/'.$books->AnhSach)!!}" class="img-fluid" alt="">
													<div class="men-cart-pro">
														<div class="inner-men-cart-pro">
															<a href="{{route('user.single',$books->id)}}" class="link-product-add-cart">Xem Ngay</a>
														</div>
													</div>
													<span class="product-new-top">Mới</span>
												</div>
												<div class="item-info-product">
													<div class="info-product-price">
														<div class="grid_meta">
															<div class="product_price">
																<h4>
																	<a href="{{route('user.single',$books->id)}}">{{$books->TenSach}}</a>
																</h4>
																<div class="grid-price mt-2">
																	<span class="money ">{{number_format($books->GiaTien,0,",",".")}} ₫</span>
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
							<br>
											{{$sach->links()}}
						</div>
					</div>
					<!--//slider-->
				</div>
			</div>
		</section>
        @stop
		