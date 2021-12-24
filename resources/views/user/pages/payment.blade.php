@extends('user.layout')
@section('content')
<style>
td, th {
	border: 1px solid #dddddd;
	text-align: left;
	padding: 8px;
	}
</style>
<!-- banner -->
<div class="banner_inner">
	<div class="services-breadcrumb">
		<div class="inner_breadcrumb">
			<ul class="short">
				<li>
					<a href="">Trang chủ</a>
					<i class='fas fa-angle-right'></i>
				</li>
				<li>
					<a href="">Giỏ hàng</a>
					<i class='fas fa-angle-right'></i>
				</li>
				<li>Thanh toán </li>
			</ul>
		</div>
	</div>
</div>
<!--//banner -->
<!--// header_top -->
<!--checkout-->
<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
	<div class="container">
		<div class="inner-sec-shop px-lg-4 px-3">
		<h3>THANH TOÁN</h3>
			<div class="checkout-left row">
				<div class="col-md-5 address_form">
					<div class="container-fluid" style="border:1px solid;">
					<h4>Thông tin nhận hàng</h4>
					<form action="#" method="post" class="creditly-card-form agileinfo_form">
						@csrf
						<section class="creditly-wrapper wrapper">
							<div class="information-wrapper">
								<div class="first-row form-group">
									<div class="controls">
										<label class="control-label">Họ và tên: </label>
										<input class="billing-address-name form-control" value="" type="text" name="name_checkout" placeholder="Họ và tên" readonly/>
									</div>
									
									<div class="controls">
										<label class="control-label">Số điện thoại:</label>
										<input class="form-control" type="text" value="" placeholder="Số điện thoại" name="phone_checkout" readonly/>
									</div>
									<div class="controls">
										<label class="control-label">Email: </label>
										<input class="billing-address-name form-control" value="" type="text" name="email-checkout" placeholder="Email" readonly/>
									</div>
									<div class="controls">
										<label class="control-label">Địa chỉ: </label>
										<input class="form-control" type="text" value="" id="Dia_Chi" name="address_checkout" placeholder="Địa chỉ" readonly/>
										<button type="button" class="btn btn-primary" style="margin-top:-25px"><i class="fas fa-sync-alt"></i></button>
									</div>				
								</div>							
							</div>
						</section>
					</form>
					</div>
				</div>
				<div class="col-md-7 address_form">
					<div class="container-fluid" style="border:1px solid;">
					<h4>Đơn hàng</h4>
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>STT</th>
								<th>Ảnh Bìa</th>
								<th>Số lượng</th>
								<th>Tên sản phẩm</th>
								<th>Giá Bán</th>
								<th>Tổng Tiền</th>
								
							</tr>
						</thead>
						<tbody>
							<tr class="rem1"> 
								<td class="invert ">1</td>
								<td class="invert-image">
									<a href="{{ route('user.single')}}">
										<img src="user\images\Book\SACH_KINH_TE\Đừng Bao Giờ Đi Ăn Một Mình (Tái Bản)\DD.png" alt=" " class="img-responsive">
									</a>
								</td>
								<td class="invert">
									<div class="quantity">
										<div class="quantity-select">
											
											<div class="entry value">
												<span>1</span>
											</div>
											
										</div>
									</div>
								</td>
								<td class="invert">Đừng Bao Giờ Đi Ăn Một Mình </td>

								<td class="invert">73.700 VNĐ</td>
								<td class="invert">73.700 VNĐ</td>

							</tr>
							<tr class="rem2">
								<td class="invert">2</td>
								<td class="invert-image">
									<a href="{{ route('user.single')}}">
										<img src="user\images\Book\SACH_KINH_TE\How Money Works - Hiểu Hết Về Tiền\DD.png" alt=" " class="img-responsive">
									</a>
								</td>
								<td class="invert">
									<div class="quantity">
										<div class="quantity-select">
										
											<div class="entry value">
												<span>1</span>
											</div>

										</div>
									</div>
								</td>
								<td class="invert">Hiểu Hết Về Tiền </td>

								<td class="invert">223.700 VNĐ</td>
								<td class="invert">223.700 VNĐ</td>

								
							</tr>
							<tr class="rem3">
								<td class="invert">3</td>
								<td class="invert-image">
									<a href="{{ route('user.single')}}">
										<img src="user\images\Book\SACH_KINH_TE\Phân Tích Chứng Khoán\DD.png" alt=" " class="img-responsive">
									</a>
								</td>
								<td class="invert">
									<div class="quantity">
										<div class="quantity-select">
											
											<div class="entry value">
												<span>1</span>
											</div>
										</div>
									</div>
								</td>
								<td class="invert">Phân Tích Chứng Khoán</td>

								<td class="invert">334.200 VNĐ</td>
								<td class="invert">334.200 VNĐ</td>

								
							</tr>

						</tbody>
					</table>
					</div>	
					<div style="text-align:right; margin-top: 15px; font-size:90%; font-weight:bold; color: #888"> Tổng đơn hàng: 175.000<input style="width:110px; border:none; font-size:110%; text-align:right" id="order-total" readonly/></div>		
					<div style="text-align:right; margin-top: 5px; font-size:90%; font-weight:bold; color: #888"> Phí giao hàng: 15,000 VNĐ</div>
					<hr style="margin-top:10px; margin-bottom:-15px" />
					<div style="text-align:right; margin-top: 20px; font-size:120%; font-weight:bold; color: #888"> Tổng cộng: 190.000VNĐ<input style="width:130px; border:none; color:red; text-align:right" id="total" readonly/></div>
					<div class="container-fluid" style="border:1px solid; margin-top:15px;">	
					<h4>Phương thức thanh toán</h4>
						<div class="col-lg-12" style="display: flex; margin-bottom: 15px">
							<div class="col-lg-4">
								<input type="radio" name="Hinh_Thuc" value="0" style="cursor: pointer" checked/> COD <br/>
								<img src="{{asset('user/images/ship-cod.jpg')}}" style="width:140px; height:90px" />
							</div>
							<div class="col-lg-4">
								<input type="radio" name="Hinh_Thuc" value="1" style="cursor: pointer" /> VNPAY <br/>
								<img src="{{asset('user/images/vnpay.jpg')}}" style="width:140px; height:90px" />
							</div>
							<div class="col-lg-4">
								<input type="radio" name="Hinh_Thuc" value="2" style="cursor: pointer" /> E-Banking <br/>
								<img src="{{asset('user/images/e-banking.jpg')}}" style="width:140px; height:90px" />
							</div>
						</div>
					</div>
					
					<div class="checkout-right-basket">
						<a id="payment" style="color:white; cursor:pointer">Đặt hàng </a>
					</div>
					
				</div>

				<div class="clearfix"> </div>

			</div>

		</div>

	</div>
</section>

@stop