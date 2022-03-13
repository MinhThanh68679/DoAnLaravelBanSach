@extends('user.layout')
	@section('content')
		<!-- banner -->
		<div class="banner_inner">
			<div class="services-breadcrumb">
				<div class="inner_breadcrumb">

					<ul class="short">
						<li>
							<a href="index.html">Trang chủ</a>
							<i>|</i>
						</li>
						<li>Chi tiết sản phẩm</li>
					</ul>
				</div>
			</div>

		</div>
		
	</div>
		<!--//banner -->
		<!--/shop-->
		<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
			<div class="container">
				<div class="inner-sec-shop pt-lg-4 pt-3">
				@foreach($sach as $books)
					<div class="row">
							<div class="col-lg-4 single-right-left ">
									<div class="grid images_3_of_2">
										<div class="flexslider1">
					
											<ul class="slides">
												<li data-thumb="{!! asset('image/'.$books->AnhSach)!!}">
													<div class="thumb-image"> <img src="{!! asset('image/'.$books->AnhSach)!!}" data-imagezoom="true" class="img-fluid" alt=" "> </div>
												</li>
												<li data-thumb="{!! asset('image/'.$books->AnhSach)!!}">
													<div class="thumb-image"> <img src="{!! asset('image/'.$books->AnhSach)!!}" data-imagezoom="true" class="img-fluid" alt=" "> </div>
												</li>
												<li data-thumb="{!! asset('image/'.$books->AnhSach)!!}">
													<div class="thumb-image"> <img src="{!! asset('image/'.$books->AnhSach)!!}" data-imagezoom="true" class="img-fluid" alt=" "> </div>
												</li>
											</ul>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<div class="col-lg-8 single-right-left simpleCart_shelfItem">
									<h3>{{$books->TenSach}}</h3>
									<br>
									<div class="row">
  										<div class="col-6">
										  <span>Nhà cung cấp: </span>
										  <a href='#'>{{$books->NhaCungCap->TenNCC}}</a>
										  </div>
  										<div class="col-6">
										  <span>Tác giả:</span>
										  <span>{{$books->DichGia}}</span>
										</div>
									</div>
									<div class="row">
  										<div class="col-6">
										  <span>Nhà xuất bản: </span>
										  <span>{{$books->NhaXuatBan}}</span>
										  </div>
  										<div class="col-6">
										  <span>Hình thức bìa:</span>
										  <span> @if($books->LoaiBia == 0) {{"Bìa cứng"}}
										  @elseif (($books->LoaiBia == 1)) {{"Massmarket Paperback"}}
										  @else {{"Bìa mềm"}}
										  @endif</span>
										</div>
									</div>

									<p><span class="item_price">149.000 VNĐ</span>
										<del>{{$books->GiaTien}}</del>
									</p>
									<div class="rating1">
										<ul class="stars">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<br>
									
  										<div class="row">
    									<div class="col-sm-3">
											<span>Thời gian giao hàng</span>
    									</div>
    									<div class="col-sm-9">
											<span>Địa điểm giao hàng </span>
											<a href="#"> Thay đổi</a>
							
    									</div>
  										</div>
										  <div class="row">
    									<div class="col-sm-3">
											<span>Chính sách đổi trả </span>
    									</div>
    									<div class="col-sm-9">
											<span>Đổi trả sản phẩm trong 30 ngày </span>
											<a href="#"> Xem thêm</a>
							
    									</div>
  										</div>
									<br>
								
									
									@foreach($kho as $khos)
							

										<form action="" method="POST">
									{{csrf_field()}}
										<label class="control-label">Số Lượng: </label>
										<div class="form-group quantity-box" style="display: inline-flex;align-items: baseline;justify-content: space-evenly;">                                
											<input class="form-control col-sm-3" id="So_Luong_SP" name="So_Luong" value="1" min="1" max="{{$khos->SoLuongTon}}" type="number" style="width:150px"> (Còn {{$khos->SoLuongTon}} sản phẩm)
											<input type="hidden" name="id" value="{{ $books->id }}"/>
											
										</div>
										<br>
							
										<div class="occasion-cart" style="display: inline-flex; padding-top:15px">
											<div class="googles single-item singlepage">
												<button type="submit" class="link-product-add-cart">
													Mua ngay
												</button>														
											</div>
											<div class="vertical-line" style="height: 40px; margin-left:10px"></div>
											<div class="googles single-item singlepage" style="margin-left:10px">
												<button type="button" onclick="AddCart({{ $books->id }})" class="link-product-add-cart">
													Thêm giỏ hàng
												</button>														
											</div>
										</div>
									
										@endforeach
									</form>
										<br>
						
										
									
								</div>
								<div class="clearfix"> </div>
								<!--/tabs-->
								
						

								
								<div class="responsive_tabs">
								<h4>THÔNG TIN SẢN PHẨM</h4>
								<br>
								<table class="thong-tin">
								<tbody>
									<tr>
										<td>Tên Nhà Cung Cấp</td>
										<td>{{$books->NhaCungCap->TenNCC}}</td>
									</tr>
									<tr>
										<td>Tác giả</td>
										<td>{{$books->DichGia}}</td>
									</tr>
									<tr>
										<td>Nhà xuất bản</td>
										<td>{{$books->NhaXuatBan}}</td>
									</tr>
									<tr>
										<td>Năm xuất bản</td>
										<td>{{$books->NamXB}}</td>
									</tr>
									<tr>
										<td>Kích thước bao bì</td>
										<td>{{$books->KichThuoc}}</td>
									</tr>
									<tr>
										<td>Số trang</td>
										<td>{{$books->SoTrang}}</td>
									</tr>
									<tr>
										<td>Hình thức bìa</td>
										<td> @if($books->LoaiBia == 0) {{"Bìa cứng"}}
										  @elseif (($books->LoaiBia == 1)) {{"Massmarket Paperback"}}
										  @else {{"Bìa mềm"}}
										  @endif</td>
									</tr>
								</tbody>
								</table>
								<br>
									<div id="horizontalTab">
										<ul class="resp-tabs-list">
											
											<li>MÔ TẢ SẢN PHẨM</li>
											<li>KHÁCH HÀNG NHẬN XÉT</li>
										</ul>
										<div class="resp-tabs-container">
											<!--/tab_one-->
											<div class="tab1">
					
					<div class="single_page">
					<h5>MÔ TẢ SẢN PHẨM</h5>
					<p>
					{{$books->MoTa}}
					</p>
						
					</div>
				</div>
				@endforeach
											<!--//tab_one-->
											<div class="tab2">
					
												<div class="single_page">
													<div class="bootstrap-tab-text-grids" style="width:1100px">
													<div id="binhluan">
													@foreach($binhluan as $preview)
														<div class="bootstrap-tab-text-grid">
															<div class="bootstrap-tab-text-grid-left">
																<br>
																<img src="{!! asset('user/images/bl.jpg')!!}" alt=" " class="img-fluid" style="width:100px; height:100px; object-fit:cover">
															</div>
															<div class="bootstrap-tab-text-grid-right">
																<ul>
																	<li><a href="#">{{$preview->HoTen}}</a></li>
																	<li><a href="#"><i class="fa fa-reply-all" aria-hidden="true"></i> Trả lời</a></li>
																</ul>
																<p>{{$preview->NoiDung}}</p>
																<p>{{$preview->Ngay}}</p>
															</div>
															@endforeach
															<div class="clearfix"> </div>
														</div>
														<div class="add-review">
															<h4>Thêm nhận xét</h4>
															@if(session()->has('infoUser'))
                        								<?php $infoUser =session()->get('infoUser') ?>

																	<input class="form-control" type="text" name="HoTen" readonly placeholder="Bạn hãy nhập tên..." id="inputname"
                                       								 value="{{$infoUser['HoTen']}}" required="" style="width:1100px">
																<textarea name="Message" name="NoiDung" id="inputcontent" placeholder="Nhập nội dung" required=""></textarea>
																<input type="text" name="idKH" hidden class="form-control" id="inputid_user"
                                								value="{{$infoUser['id']}}">
														<input type="text" name="idSach" hidden class="form-control" id="inputid_sanpham"
															value="{{$books->id}}">
														<input type="text" name="TrangThai" hidden class="form-control" id="inputtrangthai"
															value="1">
													
																<input type="submit" value="Gửi" id="submitBinhLuan">
														<div id="duyetbinhluan" hidden>
															Vui lòng chờ duyệt bình luận </div>
														</div>
														@else
															<a href="{{route('getLogin')}}" class="btn hvr-hover">Vui lòng đăng nhập để bình luận</a>
														@endif		
													</div>
											</div>
												</div>
											</div>
								
										</div>
									</div>
								</div>

								<!--//tabs-->
					
					</div>
				</div>
			</div>
				<div class="container-fluid">
					<!--/slide-->
					<div class="slider-img mid-sec mt-lg-5 mt-2 px-lg-5 px-3">
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
														<img src="{!! asset('user\images\Book\SACH_KINH_TE\Phân Tích Chứng Khoán\DD.png')!!}" class="img-fluid" alt="">
														<div class="men-cart-pro">
															<div class="inner-men-cart-pro">
																<a href="{{ route('user.single')}}" class="link-product-add-cart">Xem Ngay</a>
															</div>
														</div>
														<span class="product-new-top">Mới</span>
													</div>
													<div class="item-info-product">

														<div class="info-product-price">
															<div class="grid_meta">
																<div class="product_price">
																	<h4>
																		<a href="{{ route('user.single')}}">Phân Tích Chứng Khoán </a>
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
														<img src="{!! asset('user\images\Book\SACH_KINH_TE\Đừng Để Mất Bò - 7 Bước Quản Lý Cửa Hàng\HDD.png')!!}" class="img-fluid" alt="">
														<div class="men-cart-pro">
															<div class="inner-men-cart-pro">
																<a href="{{ route('user.single')}}" class="link-product-add-cart">Xem ngay</a>
															</div>
														</div>
														<span class="product-new-top">Mới</span>
													</div>
													<div class="item-info-product">

														<div class="info-product-price">
															<div class="grid_meta">
																<div class="product_price">
																	<h4>
																		<a href="{{ route('user.single')}}">Đừng Để Mất Bò </a>
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
														<img src="{!! asset('user\images\Book\SACH_VAN_HOC\Cây Cam Ngọt Của Tôi\DD.png')!!}" class="img-fluid" alt="">
														<div class="men-cart-pro">
															<div class="inner-men-cart-pro">
																<a href="{{ route('user.single')}}" class="link-product-add-cart">Xem Ngay</a>
															</div>
														</div>
														<span class="product-new-top">Mới</span>
													</div>
													<div class="item-info-product">

														<div class="info-product-price">
															<div class="grid_meta">
																<div class="product_price">
																	<h4>
																		<a href="{{ route('user.single')}}">Cây Cam Ngọt Của Tôi </a>
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
														<img src="{!! asset('user\images\Book\SACH_THIEU_NHI\Thần Thoại Hy Lạp (Tái Bản 2012)\DD.png')!!}" class="img-fluid" alt="">
														<div class="men-cart-pro">
															<div class="inner-men-cart-pro">
																<a href="{{ route('user.single')}}" class="link-product-add-cart">Xem Ngay</a>
															</div>
														</div>
														<span class="product-new-top">Mới</span>
													</div>
													<div class="item-info-product">

														<div class="info-product-price">
															<div class="grid_meta">
																<div class="product_price">
																	<h4>
																		<a href="{{ route('user.single')}}">Thần Thoại Hy Lạp </a>
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
														<img src="{!! asset('user\images\Book\SACH_KY_NANG_SONG\10 Phút Tĩnh Tâm - 71 Thói Quen Cân Bằng Cuộc Sống Hiện Đại\DD.png')!!}" class="img-fluid" alt="">
														<div class="men-cart-pro">
															<div class="inner-men-cart-pro">
																<a href="{{ route('user.single')}}" class="link-product-add-cart">Xem Ngay</a>
															</div>
														</div>
														<span class="product-new-top">Mới</span>
													</div>
													<div class="item-info-product">

														<div class="info-product-price">
															<div class="grid_meta">
																<div class="product_price">
																	<h4>
																		<a href="{{ route('user.single')}}">10 Phút Tĩnh Tâm </a>
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
														<img src="{!! asset('user\images\Book\SACH_KINH_TE\How Money Works - Hiểu Hết Về Tiền\DD.png')!!}" class="img-fluid" alt="">
														<div class="men-cart-pro">
															<div class="inner-men-cart-pro">
																<a href="{{ route('user.single')}}" class="link-product-add-cart">Xem Ngay</a>
															</div>
														</div>
														<span class="product-new-top">Mới</span>
													</div>
													<div class="item-info-product">

														<div class="info-product-price">
															<div class="grid_meta">
																<div class="product_price">
																	<h4>
																		<a href="{{ route('user.single')}}">Hiểu Hết Về Tiền </a>
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
							</div>
						</div>
					</div>
					<!--//slider-->
				</div>
		</section>
		@stop