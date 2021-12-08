@extends('user.layout')
@section('content')
<style>
.without_ampm::-webkit-datetime-edit-ampm-field {
   display: none;
 }
 input[type=time]::-webkit-clear-button {
   -webkit-appearance: none;
   -moz-appearance: none;
   -o-appearance: none;
   -ms-appearance:none;
   appearance: none;
   margin: -10px; 
 }
</style>
<!-- banner -->
<div class="banner_inner">
    <div class="services-breadcrumb">
        <div class="inner_breadcrumb">

            <ul class="short">
                <li>
                    <a href="{{route('user.index')}}">Trang Chủ</a>
                    <i>|</i>
                </li>
                <li>Tin tức</li>
            </ul>
        </div>
    </div>
</div>
<!--//banner -->
	<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
		<div class="container-fluid" >
			<div class="inner-sec-shop px-lg-4 px-3" style="background-color: #ffffff;">
				<h2 class="tittle-w3layouts my-lg-4 my-4"></h2>
				<div class="row">
					
					<div class="col-md-4" style="padding: 0 50px 30px 50px">
						<div class="product-googles-info googles" style="height:400px">
							<div class="men-pro-item" >
								<!-- Hình ảnh -->
								<div class="men-thumb-item" >
									<a href="" target="_blank">
									<img  style=" width: fit-content;height:200px;object-fit: contain" src="{!! asset('user/images/Banner-1000x600px-01.jpg')!!}" class="img-fluid" alt="" >
									</a>
									
									<span class="product-new-top" style="background-color: green;">Hoạt động</span>
							
									<span class="product-new-top" style="background-color: blue;">Sự kiện</span>
							
									<span class="product-new-top" style="background-color: #FFC107;">Khuyến Mãi</span>
									
								</div>
								<div class="item-info-product">
									<div class="info-product-price">
										<div class="grid_meta" style="padding-left:20px; height:100px">
											<div class="">
												<h6 style="padding-top:20px; color: #959596;">
													<a href="" target="_blank">Khuyến Mãi Hè 2021-Đến Hè Là Giảm..!</a>
												</h6>
											</div>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>					
					</div>
					<div class="col-md-4" style="padding: 0 50px 30px 50px">
						<div class="product-googles-info googles" style="height:400px">
							<div class="men-pro-item" >
								<!-- Hình ảnh -->
								<div class="men-thumb-item" >
									<a href="" target="_blank">
									<img  style=" width: fit-content;height:200px;object-fit: contain" src="{!! asset('user/images/banner-tintuc-sukien-he.jpg')!!}" class="img-fluid" alt="" >
									</a>
								
									<span class="product-new-top" style="background-color: blue;">Sự Kiện</span>
							
								
									
								</div>
								<div class="item-info-product">
									<div class="info-product-price">
										<div class="grid_meta" style="padding-left:20px; height:100px">
											<div class="">
												<h6 style="padding-top:20px; color: #959596;">
													<a href="" target="_blank">Chào Tết 2021-Mỗi Gia Đình Là Một Tủ Sách Cho Con</a>
												</h6>
											</div>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>					
					</div>
					<div class="col-md-4" style="padding: 0 50px 30px 50px">
						<div class="product-googles-info googles" style="height:400px">
							<div class="men-pro-item" >
								<!-- Hình ảnh -->
								<div class="men-thumb-item" >
									<a href="" target="_blank">
									<img  style=" width: fit-content;height:200px;object-fit: contain" src="{!! asset('user/images/banner-tintuc.jpg')!!}" class="img-fluid" alt="" >
									</a>
								
							
									<span class="product-new-top" style="background-color: blue;">Sự Kiện</span>

									
								</div>
								<div class="item-info-product">
									<div class="info-product-price">
										<div class="grid_meta" style="padding-left:20px; height:100px">
											<div class="">
												<h6 style="padding-top:20px; color: #959596;">
													<a href="" target="_blank">[Kho Học Liệu Miễn Phí] Cùng Em Học Trực Tuyến - Dành Cho Cấp Mẫu Giáo & Tiểu Học</a>
												</h6>
											</div>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>					
					</div>
					<div class="col-md-4" style="padding: 0 50px 30px 50px">
						<div class="product-googles-info googles" style="height:400px">
							<div class="men-pro-item" >
								<!-- Hình ảnh -->
								<div class="men-thumb-item" >
									<a href="" target="_blank">
									<img  style=" width: fit-content;height:200px;object-fit: contain" src="{!! asset('user/images/banner-tintuc-trungthu.jpg')!!}" class="img-fluid" alt="" >
									</a>
							
									<span class="product-new-top" style="background-color: #FFC107;">Khuyến Mãi</span>
									
								</div>
								<div class="item-info-product">
									<div class="info-product-price">
										<div class="grid_meta" style="padding-left:20px; height:100px">
											<div class="">
												<h6 style="padding-top:20px; color: #959596;">
													<a href="" target="_blank">Big Sale: Chào Năm Học Mới-Đón Trung Thu Mới</a>
												</h6>
											</div>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>					
					</div>
					<div class="col-md-4" style="padding: 0 50px 30px 50px">
						<div class="product-googles-info googles" style="height:400px">
							<div class="men-pro-item" >
								<!-- Hình ảnh -->
								<div class="men-thumb-item" >
									<a href="" target="_blank">
									<img  style=" width: fit-content;height:200px;object-fit: contain" src="{!! asset('user/images/banner-5k.jpg')!!}" class="img-fluid" alt="" >
									</a>
									<span class="product-new-top" style="background-color: blue;">Sự Kiện</span>
								</div>
								<div class="item-info-product">
									<div class="info-product-price">
										<div class="grid_meta" style="padding-left:20px; height:100px">
											<div class="">
												<h6 style="padding-top:20px; color: #959596;">
													<a href="" target="_blank">Tuân Thủ 5k-Mua Sách Tại Gia</a>
												</h6>
											</div>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>					
					</div>
					<div class="col-md-4" style="padding: 0 50px 30px 50px">
						<div class="product-googles-info googles" style="height:400px">
							<div class="men-pro-item" >
								<!-- Hình ảnh -->
								<div class="men-thumb-item" >
									<a href="" target="_blank">
									<img  style=" width: fit-content;height:200px;object-fit: contain" src="{!! asset('user/images/banner-tintuc1.jpg')!!}" class="img-fluid" alt="" >
									</a>
							
									<span class="product-new-top" style="background-color: #FFC107;">Khuyến Mãi</span>
									
								</div>
								<div class="item-info-product">
									<div class="info-product-price">
										<div class="grid_meta" style="padding-left:20px; height:100px">
											<div class="">
												<h6 style="padding-top:20px; color: #959596;">
													<a href="" target="_blank">Gió Heo May Ngày Nắng Gián Đoạn</a>
												</h6>
											</div>
										</div>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
						</div>					
					</div>
				</div>
				<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4" style="padding-left:100px"> <br></div>
				<div class="col-md-4"></div>
				</div>
			</div>					
		</div>		
	</section>
	<script>
	window.onload = function(){
	var element = document.getElementById("nav-news");
	element.classList.add("active");
	}
	</script>
	<!-- about -->
@stop