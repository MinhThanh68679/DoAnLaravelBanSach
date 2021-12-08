@extends('user.layout')
@section('content')
	<!-- banner -->
		<div class="banner_inner">
			<div class="services-breadcrumb">
				<div class="inner_breadcrumb">

					<ul class="short">
						<li>
							<a href="{{ route('user.index')}}">Trang chủ</a>
							<i>|</i>
						</li>
						<li>Giới thiệu</li>
					</ul>
				</div>
			</div>

		</div>
	<!--//banner -->
	</div>
	<!--// header_top -->
	<!-- top Products -->
	<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
		<div class="container-fluid">

			<div class="inner-sec-shop px-lg-4 px-3">
				<div class="about-content py-lg-5 py-3">
					<div class="row">

						<div class="col-lg-6 p-0">
							<img src="user/images/background-login.jpg" alt="Goggles" class="img-fluid">
						</div>
						<div class="col-lg-6 about-info">
							<h3 class="tittle-w3layouts text-left mb-lg-5 mb-3">Về chúng tôi</h3>
							<div class="article-content"><p>
								<p><strong>Tại sao bạn nên chọn N&T Books?</strong></p>
								
								<p><span style="font-weight: 400;">100% nội dung trên N&T Books là nội dung có bản quyền. N&T Books cam kết là nhà cung cấp dịch vụ và đối tác uy tín của bạn, hoạt động vì quyền lợi và sự phát triển bền vững của các bên.</span></p>
								
								<p><strong><em>Đối với Độc giả:</em></strong></p>
								<p>&nbsp; &nbsp; &nbsp; + Đọc cả kho sách điện tử giá trị chỉ với chi phí tiết kiệm.</p>
								<p>&nbsp; &nbsp; &nbsp; +&nbsp;Đăng ký tài khoản nhanh chóng, thuận tiện. Hỗ trợ đăng ký từ các tài khoản Mạng xã hội.</p>
								<p>&nbsp; &nbsp; &nbsp; +&nbsp;Sách mới được lựa chọn và cập nhật liên tục bởi đội ngũ biên tập viên giàu kinh nghiệm.</p>
								<p>&nbsp; &nbsp; &nbsp; +&nbsp;Đọc sách mọi lúc, mọi nơi, đồng bộ nội dung và lịch sử đọc sách trên đa màn hình, đa thiết bị.</p>
								<p>&nbsp; &nbsp; &nbsp; +&nbsp;Cơ hội được hưởng thêm những quyền lợi ưu đãi hấp dẫn khi trở thành thành viên của Y&B Books</p>
								
								<p><strong><em>Đối với nhà xuất bản, nhà phát hành, tác giả độc lập:</em></strong></p>
								<p>&nbsp; &nbsp; &nbsp; +&nbsp;Được tạo kho sách riêng biệt và phát triển thương hiệu trong mảng sách điện tử</p>
								<p>&nbsp; &nbsp; &nbsp; +&nbsp;Được tiếp cận và giới thiệu tác phẩm đến với hơn 3 triệu người đọc trên nền tảng Waka một cách nhanh chóng và hiệu quả nhất.</p>
								<p>&nbsp; &nbsp; &nbsp; +&nbsp;Bản quyền sách số được bảo vệ: Nội dung số được bảo vệ bằng công nghệ DRM, tránh sao chép và tái sử dụng nội dung.</p>
								<p>&nbsp; &nbsp; &nbsp; +&nbsp; Tất cả các trường hợp vi phạm bản quyền sách đều được xử lý nhanh chóng và nghiêm ngặt.</p>
								<p>&nbsp; &nbsp; &nbsp; +&nbsp;Được hỗ trợ về công nghệ và nhân lực để khai thác phiên bản sách số với doanh thu tối ưu.</p>
								<p><span style="font-weight: 400;">&nbsp; </span></p>
								<p><span style="font-weight: 400;">Chỉ với thao tác đăng ký đơn giản, hãy trở thành thành viên của Y&B Books ngay hôm nay!</span></p>
								</div>

							<a href="{{ route('user.shop')}}" class="btn btn-sm animated-button gibson-three mt-4">Mua Ngay</a>

						</div>
					</div>
				</div>
				
				<!-- /grids -->
				
			</div>
		</div>
	</section>
	<section class="banner-bottom-wthreelayouts py-lg-5 py-3" style="margin-top: -80px;">
		<div class="container">
			<h3 class="tittle-w3layouts text-center my-lg-4 my-4">Liên Hệ</h3>
			<div class="inner_sec">
				<p class="sub text-center mb-lg-5 mb-3">Chúng tôi luôn mong chờ những đóng góp của bạn.</p>
				<div class="address row">

					<div class="col-lg-4 address-grid">
						<div class="row address-info">
							<div class="col-md-3 address-left text-center">
								<i class="far fa-map"></i>
							</div>
							<div class="col-md-9 address-right text-left">
								<h6>Địa Chỉ</h6>
								<p>03 Nguyễn Văn Linh, Quận 7, TP.Hồ Chí Minh.

								</p>
							</div>
						</div>

					</div>
					<div class="col-lg-4 address-grid">
						<div class="row address-info">
							<div class="col-md-3 address-left text-center">
								<i class="far fa-envelope"></i>
							</div>
							<div class="col-md-9 address-right text-left">
								<h6>Email</h6>
								<p>
									<a href="mailto:ntbookstore2018@gmail.com" style="color:#2a8490;line-height: 1.9em;"> ntbookstore2018@gmail.com</a>
									<a href="mailto:ntsupport@gmail.com" style="color:#2a8490;line-height: 1.9em;"> ntsupport@gmail.com</a>
								</p>
							</div>

						</div>
					</div>
					<div class="col-lg-4 address-grid">
						<div class="row address-info">
							<div class="col-md-3 address-left text-center">
								<i class="fas fa-mobile-alt"></i>
							</div>
							<div class="col-md-9 address-right text-left">
								<h6>Phone</h6>
								<p>(+84) 779850572</p>
								<p>(+84) 933809731</p>

							</div>

						</div>
					</div>
				</div>
				<div class="contact_grid_right">
					<form action="" method="POST">
					@csrf
						<div class="row contact_left_grid">
							<div class="col-md-6 con-left">
								<div class="form-group">
									<label class="my-2">Họ và tên</label>
									<input class="form-control" type="text" name="Name" placeholder="" required="">
								</div>
								<div class="form-group">
									<label>Email</label>
									<input class="form-control" type="email" name="Email" placeholder="" required="">
								</div>
								<div class="form-group">
									<label class="my-2">Số điện thoại</label>
									<input class="form-control" type="text" name="Phone" placeholder="" required="">
								</div>
							</div>
							<div class="col-md-6 con-right">
								<div class="form-group">
									<label>Nội dung</label>
									<textarea id="textarea" name="Content" placeholder="" required=""></textarea>
								</div>
								<input class="form-control" type="submit" value="Gửi liên hệ">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<div class="contact-map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3920.079548632198!2d106.71168864937755!3d10.728347862977762!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f8dd83e71a3%3A0x9666d480043ef402!2zMyBOZ3V54buFbiBWxINuIExpbmgsIFTDom4gUGhvbmcsIFF14bqtbiA3LCBUaMOgbmggcGjhu5EgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1638964827738!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	</div>
	<script>
	window.onload = function(){
	var element = document.getElementById("nav-contact");
	element.classList.add("active");
	}
	</script>
@stop