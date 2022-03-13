

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
						<li>Giỏ hàng </li>
					</ul>
				</div>
			</div>

		</div>
		<!--//banner -->
	</div>
	<!--// header_top -->
	<!--checkout-->
	<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
		<div class="container">
			<div class="inner-sec-shop">
				<h3 class="tittle-w3layouts my-lg-4 mt-3">GIỎ HÀNG </h3>
				<div class="checkout-right">
					<table class="timetable_sub">
						<thead>
							<tr>
								<th>STT</th>
								<th>Hình</th>
								<th>Số lượng</th>
								<th>Tên sản phẩm</th>
								<th>Giá Bán</th>
								<th>Tổng Tiền</th>
								<th>Xóa</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$tongall = 0;?>
						@foreach($gio_hang as $cart)
						<?php
							$tong = 0;
							
							$tong= $cart->Sach->GiaTien * $cart->So_Luong;
							$tongall+=$tong;
							?>
							<tr class="rem1">
								<td class="invert ">1</td>
								<td class="invert-image">
									<a href="{{route('user.single',$cart->Sach->id)}}">
										<img src="{!! asset('image/'.$cart->Sach->AnhSach)!!}" alt=" " class="img-responsive">
									</a>
								</td>
								<td class="invert">					
									<input type="number" min="1" max="{{$cart->SLMax }}" name="So_Luong" style="width:50px;border: 1px solid #CDCDCD;color: #868282" value="{{$cart->So_Luong}}">
									<input type="hidden" name="id" value="{{$cart->id}}" class="form-control">
								</td>
								<td class="invert">{{$cart->Sach->TenSach}} </td>

								<td class="invert">{{number_format($cart->Sach->GiaTien,0,",",".")}} VNĐ</td>
								<td class="invert">{{ number_format($cart->Sach->GiaTien * $cart->So_Luong,0,",",".") }} VNĐ</td>
								<td class="invert">
									<div class="rem">
										<div class="close1"> </div>
									</div>

								</td>
							</tr>
							
							
@endforeach
						</tbody>>
					</table>
					@if ($gio_hang->count() == 0)
						<h4 style="text-align: center;">Chưa có sản phẩm nào trong giỏ hàng.</h4>
					@endif
					<div class="col-md-4 checkout-right-basket">
						<ul>				
							<li style="font-size:120%; font-weight:600">Thành Tiền: &nbsp;	{{ number_format($tongall,0,",",".") }} VNĐ
								<input id="money-total" style="border: none; color: #f40017; text-align:right" readonly/>
							</li>
						</ul>
						<a id="btn-pay" href="" class="btn">THANH TOÁN</a>
						<a href="{{ route('user.single')}}" class="btn">TIẾP TỤC MUA SẮM</a>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</section>
	<!--//checkout-->
	
	<!--footer -->
	@stop